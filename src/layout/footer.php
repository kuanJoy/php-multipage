<footer class="footer">
    <div class="footer-content container">
        <img class="footer_logo" src="./assets/img/icon/logo_footer.svg" alt="">
        <a href="#" class="footer_media">
            <img src="./assets/img/icon/social_media.svg" alt="">
        </a>
        <p class="rights">All Rights Reserved 2018</p>
    </div>

</footer>

<script>
    //=========NAVBAR ACTIVE LINKS=========
    const navLink = document.querySelectorAll('.nav__link');
    const localUrl = window.location.href;
    for (let i = 0; i < navLink.length; i++) {
        // console.log(navLink[i].href);
        // console.log(localUrl);
        const link = navLink[i].href;
        if (link == localUrl) {
            navLink[i].classList.add('active');
        } else {
            navLink[i].classList.remove('active');
        }
    }
</script>

</div>
</div>
</body>

</html>