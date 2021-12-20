  function logOut() {
            liff.logout();
            window.location.reload();

        }

        function logIn() {
            liff.login({
                redirectUri: window.location.href
            });

        }

        function getEnvironment() {
      document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)

      document.getElementById("os").append(liff.getOS())
      document.getElementById("language").append(liff.getLanguage())
      document.getElementById("version").append(liff.getVersion())
      document.getElementById("isInClient").append(liff.isInClient())
      document.getElementById("accessToken").append(liff.getAccessToken())
      document.getElementById("type").append(liff.getContext().type)
      document.getElementById("viewType").append(liff.getContext().viewType)
      document.getElementById("utouId").append(liff.getContext().utouId)
      document.getElementById("roomId").append(liff.getContext().roomId)
      document.getElementById("groupId").append(liff.getContext().groupId)
      document.getElementById("access").value = liff.getAccessToken();
      document.getElementById("email").value = liff.getDecodedIDToken().email;

    }

        async function getUserProfile() {
            const profile = await liff.getProfile();
            document.getElementById("pictureUrl").style.display = "block";
            document.getElementById("pictureUrl").src = profile.pictureUrl;
            document.getElementById("displayName").append(profile.displayName);
            document.getElementById("statusMessage").append(profile.statusMessage);
            document.getElementById("userId").append(profile.userId);
            document.getElementById("userId").append(profile.userId);
            document.getElementById("name").value = profile.displayName;
            document.getElementById("user").value = profile.userId;
        

        }



        async function main() {
            await liff.init({
                liffId: "1656690602-3lqQwdRX"
            });
            if (liff.isInClient()) {
                getUserProfile();

            } else {
                if (liff.isLoggedIn()) {
                    getUserProfile();
                    getEnvironment();



                    document.getElementById("btnLogIn").style.display = "none";
                    document.getElementById("btnLogOut").style.display = "block";


                } else {

                    liff.login({
                        redirectUri: window.location.href = "<?= $host_ngrok?>/DEENA/line_adddata/page/main.php"
                    })

                    document.getElementById("btnLogIn").style.display = "block";
                    document.getElementById("btnLogOut").style.display = "none";


                }
            }
        }

        main();