</div>
</div>
</div>

<div class="modal fade" id="logout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/question.png" alt="Icon">
                </figure>
                <p class="achivpFont">Are you sure you want to <br> logout?</p>
            </div>
            <div class="modal-footers text-center ">
                <button type="button" class="px-5 py-2 btn bg-theme-primary text-white" data-dismiss="modal" data-toggle="modal" data-target="#logoutSuccess">Yes</button>
                <button type="button" class="px-5 btn bg-theme-primary-outline text-white" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<!-- confirmaition -->

<div class="modal fade" id="logoutSuccess" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/check.png" alt="Icon">
                </figure>
                <p class="achivpFont">You have been successfully <br>logged out</p>
            </div>
            <div class="modal-footers text-center">
                <button type="button" onclick="location.href='./../login-pages/login.php'" class="px-5 btn bg-theme-primary text-white" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "iwBG9WUTdg");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript> -->
<script src="../../js/main.js"></script>
</body>

</html>