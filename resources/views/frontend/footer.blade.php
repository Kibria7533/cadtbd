<div class="container">


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <form class="form-inline  py-3"  method="POST" action="api/subscriber">
                    <input type="email" name="email" placeholder="Enter your email..." required class="form-control"/>
                    <div class="row w-100 my-4">
                        <div class="col text-center">
                            <button class="btn btn-primary">Subscribe Us</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 col-md">
                <h5>Our Social Media</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Facebook</a></li>
                    <li><a class="text-muted" href="#">Youtube</a></li>
                    <li><a class="text-muted" href="#">Google</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="/reasearch">Reasearch</a></li>
                    <li><a class="text-muted" href="/event">Event</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="/about">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="program">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
<div class="container">
<div class="row">
<p>All Rights Reserved© 2023 CDAT</p>
<p style="margin-left: 10px;">Location: {!! setting('site.address') !!}</p>
<p style="margin-left: 10px;">Phone: {!! setting('site.phone') !!}</p>

</div>

</div>
</div>
