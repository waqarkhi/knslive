(function(){
    var access = reqAccess();
    leaveUrl = access[2];
    ZoomMtg.preLoadWasm();
    ZoomMtg.prepareJssdk();
    var API_KEY = access[0];
    var API_SECRET = access[1];
    testTool = window.testTool;
    var meetConfig = {
            apiKey: API_KEY,
            apiSecret: API_SECRET,
            meetingNumber: parseInt(access[3]),
            userName: access[4],
            passWord: access[5],
            leaveUrl: leaveUrl,
            role: 0
        };


        var signature = ZoomMtg.generateSignature({
            meetingNumber: meetConfig.meetingNumber,
            apiKey: meetConfig.apiKey,
            apiSecret: meetConfig.apiSecret,
            role: meetConfig.role,
            success: function(res){}
        });

        ZoomMtg.init({
            leaveUrl: leaveUrl,
            isSupportAV: true,
            success: function () {
                ZoomMtg.join(
                    {
                        meetingNumber: meetConfig.meetingNumber,
                        userName: meetConfig.userName,
                        signature: signature,
                        apiKey: meetConfig.apiKey,
                        passWord: meetConfig.passWord,
                        success: function(res){ $('#nav-tool').hide();},
                        error: function(res) { console.log('error');}
                    }
                );
            },
            error: function(res) {console.log('error');}
        });

    function reqAccess() {
        var data = $('[data-access]').data('access').split('|');
        $('[data-access]').remove();
        return data;
    }

})();