
<div style="min-height: 100vh;">
    <div class="row" style="height: 100vh;">
        <div class="col-md-6 text-center left-img"></div>
        <div class="col-md-6">
            <div class="pl-5 pr-5 mt-100">
                <div class="auth-logo mb-4 logo-dim"><img src="<?php echo base_url(); ?>/public/assets/images/logo.png" alt=""></div>
                <h1 class="mb-3 text-24 text-20">Welcome to T.E.A.M</h1>
                <label class="text-18 text-color-333">Sign In</label>
                <form action="" method="post" class="col-md-6 pl-0 pr-0">
                    <div class="form-group">
                        <label for="email" class="text-color-666">Select Market</label>
                        <select class="form-control form-control-rounded w-75" id="market" type="market">
                            <option>Cambodia</option>
                            <option>China</option>
                            <option>Hong Kong</option>
                            <option>Indonesia</option>
                            <option>Malaysia</option>
                            <option>Middle East</option>
                            <option>Phillippines</option>
                            <option>Singapore</option>
                            <option>South Korea</option>
                            <option>Taiwan</option>
                            <option>Thailand</option>
                            <option>Veitnam</option>
                        </select>
                    </div>
                    <div class="invalid-custom-tooltip mb-1"><i class="i-Close-Window"></i>&nbsp;&nbsp;Your login details are incorrect. Please check and try again.</div>
                    <div class="form-group">
                        <label for="email" class="text-color-666">Email address</label>
                        <input class="form-control form-control-rounded" id="email" type="email" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-color-666">Password</label>
                        <input class="form-control form-control-rounded" id="password" type="password" required="required"/>
                    </div>
                    <a class="btn btn-rounded btn-primary btn-block mt-2" href="steps">Sign In</a>
                </form>
                <div class="mt-3 text-center col-md-6 pl-0 pr-0"><a class="text-muted text-color-666" href="forgot">
                    <u>Forgot Password</u></a>
                </div>
                <div class="mt-3 text-center col-md-6 pl-0 pr-0">New to T.E.A.M ? <a class="text-muted text-color-666" href="javascript:void(0);" data-toggle="modal" data-target="#verifyModalContent" data-whatever="@mdo">
                    <u>Get Access</u></a>
                </div>
            </div>

            <div class="row copyright-div w-100">
                <div class="col-md-8 text-left text-10 text-color-3366 pl-5">© <?= date('Y'); ?> Business Media International Sdn Bhd. All rights reserved
             </div>
    <div class="col-md-4 text-10 tc-div"><a href="https://www.privacypolicies.com/live/23691d85-0b20-4a9a-abb1-f6e595603643" target="_blank" class="text-color-3366">Term & Condition</a> | <a href="https://www.privacypolicies.com/live/d6092e7d-e457-4e15-a812-3d0b172cca03" target="_blank" class="text-color-3366">Privacy Policy</a></div>
</div> <!-- row -->

            </div> <!-- col-md-6 -->
    </div> <!-- row-->
</div> <!-- height -->
            