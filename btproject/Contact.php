<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
<?php include "header.php"; ?>

    <div class="col-sm-8 text-left"> 
	
<!--div class="container"-->
    <div class="row" style="margin-top:50px">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>ABC Services.</strong><br>
                79/5 S.N.Bannerjee Road,IT Park,<br>
                Kolkata,West Bengal,PIN-700001<br>
                <abbr title="Phone">
                    P:</abbr>
                (033)123-456-7890
            </address>
            <address>
                <strong>Pritam Basak</strong><br>
                <a href="mailto:#">pritam6789@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
<!--/div-->
      

    </div>
<?php include "footer.php"; ?>
</body>
</html>
