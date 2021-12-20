function logOut() {
    liff.logout();
    window.location.reload();
}

function logIn() {
    liff.login({
        redirectUri: window.location.href
    });

}


async function getUserProfile() {
    const profile = await liff.getProfile();
    document.getElementById("pictureUrl").style.display = "block";
    document.getElementById("pictureUrl").src = profile.pictureUrl;
    document.getElementById("displayName").append(profile.displayName);

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

            const profile = await liff.getProfile();

            document.getElementById("name").value = profile.displayName;
            document.getElementById("status").value = profile.statusMessage;
            document.getElementById("access").value = (liff.getAccessToken());
            document.getElementById("email").value = (liff.getDecodedIDToken().email);
            document.getElementById("useos").value = (liff.getOS());
            document.getElementById("uselanguage").value = (liff.getLanguage());
            document.getElementById("useversion").value = (liff.getVersion());
            document.getElementById("useisInClient").value = (liff.isInClient());
            document.getElementById("usetype").value = (liff.getContext().type);
            document.getElementById("useviewType").value = (liff.getContext().viewType);



            document.getElementById("btnLogIn").style.display = "none";
            document.getElementById("btnLogOut").style.display = "block";


        } else {
            liff.login(

                {
                    redirectUri: window.location.href = "<?= $host_ngrok?>/DEENA/line_adddata/index.php"
                }
            )

            document.getElementById("btnLogIn").style.display = "block";
            document.getElementById("btnLogOut").style.display = "none";


        }
    }
}


main();