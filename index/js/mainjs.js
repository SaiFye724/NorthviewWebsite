<script>
function getIPs(callback) {
    var ip_dups = {};
    var RTCPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
    var useWebKit = !!window.webkitRTCPeerConnection;
    if (!RTCPeerConnection) {
        var win = iframe.contentWindow;
        RTCPeerConnection = win.RTCPeerConnection || win.mozRTCPeerConnection || win.webkitRTCPeerConnection;
        useWebKit = !!win.webkitRTCPeerConnection;
    }
    //minimal requirements for data connection
    var mediaConstraints = {
        optional: [{
            RtpDataChannels: true
        }]
    };
    var servers = {
        iceServers: [{
            urls: "stun:stun.services.mozilla.com"
        }]
    };
    //construct a new RTCPeerConnection
    var pc = new RTCPeerConnection(servers, mediaConstraints);

    function handleCandidate(candidate) {
        //match just the IP address
        var ip_regex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/
        var ip_addr = ip_regex.exec(candidate)[1];
        //remove duplicates
        if (ip_dups[ip_addr] === undefined) callback(ip_addr);
        ip_dups[ip_addr] = true;
    }
    //listen for candidate events
    pc.onicecandidate = function (ice) {
        //skip non-candidate events
        if (ice.candidate) handleCandidate(ice.candidate.candidate);
    };
    //create a bogus data channel
    pc.createDataChannel("");
    //create an offer sdp
    pc.createOffer(function (result) {
        //trigger the stun server request
        pc.setLocalDescription(result, function () {}, function () {});
    }, function () {});
    setTimeout(function () {
        //read candidate info from local description
        var lines = pc.localDescription.sdp.split('\n');
        lines.forEach(function (line) {
            if (line.indexOf('a=candidate:') === 0) handleCandidate(line);
        });
    }, 1000);
}
$(document).ready(function(){
    var clientip;
    getIPs(function (ip) {
        clientip = ip;
    });
    setTimeout(function () {
        $.ajax({
            url: 'admin/polls/displaypoll.php',
            type: 'POST',
            cache: false,
            data: ({clientIP: clientip}),
            success: function(data){
                $("#form").replaceWith(data);
            },
            error: function(e){
                alert(e);
            }
        });
    }, 1000);
    
	var form1 = $('#form');
	var submit1 = $('#submit');
	form1.on('submit', function(e) {
        e.preventDefault();
        var clientip;
        getIPs(function (ip) {
            clientip = ip;
        });
        submit1.val('Submitting...').attr('disabled', 'disabled');
        setTimeout(function () {
            var selected = $('input[name=pollAnswer]:checked', '#form').val();
            $.ajax({
                url: 'admin/polls/pollcount.php',
                type: 'POST',
                cache: false,
                data: ({selected: selected,clientIP: clientip}),
                success: function(data){
                    $(".wpoll-container").replaceWith(data);
                    form1.trigger('reset');
                    submit1.val('SUBMIT').removeAttr('disabled');
                },
                error: function(e){
                    alert(e);
                }
            });
        }, 1300);
	});
    
    var form2 = $('#contactus');
	var submit2 = $('#contactsubmit');
	form2.on('submit', function(e) {
        alert("sdfsdf");
        e.preventDefault();
        $.ajax({
			url: 'admin/contact/contactus.php',
			type: 'POST',
			cache: false,
			data: form2.serialize(),
			beforeSend: function(){
				submit2.val('Submitting...').attr('disabled', 'disabled');
			},
			success: function(data){
                alert("sents");
			},
			error: function(e){
				alert(e);
			}
		});
	});
});
</script>