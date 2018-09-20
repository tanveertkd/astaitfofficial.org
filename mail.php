<!DOCTYPE html>
<html lang="en">
	<form action="mail.php" method="POST">
              <input type="text" name="contact_name" maxlength="30" placeholder="send to"> <br />
              <input type="email" name="contact_email" maxlength="25" placeholder="send as"> <br />
              <input type="text" name="message" class="message" maxlength="1000" placeholder="Your Query"></textarea><br />
              <input class="send" type="submit" value="Submit">
            </form>

            <!--PHP Starts-->

              <?php
              if(isset($_POST['contact_name'])&&isset($_POST['contact_email'])&&isset($_POST['message']))
              {
                $contact_name=$_POST['contact_name'];
                $contact_email=$_POST['contact_email'];
                $message=$_POST['message'];

                if(!empty($contact_name)&&!empty($contact_email)&&!empty($message))
                {
                  if(strlen($contact_name)>30||strlen($contact_email)>25||strlen($message)>1000)
                  {
                    echo "<html><body><div class=\"alert-warning\"> Max length excceded in some field/fields </div></body></html>";
                  }
                  else
                  {
                    $to=$contact_name;
                    $subject='Revised Agenda';
                    $body=$message;
                    $headers='From: '.$contact_email;

                    if(@mail($to, $subject, $body, $headers))
                    {
                      echo "<html><body><div class=\"alert alert-success\">
                            <a href=\"#\" class\"close\" data-dismiss=\"alert\" aria-lebel=\"close\">&times</a> Query Submitted! We'll get back to you soon!
                            </div></body></html>";
                    }
                    else
                    {
                      echo "<html><body><div class=\"alert alert-danger\">
                            <a href=\"#\" class\"close\" data-dismiss=\"alert\" aria-lebel=\"close\">&times</a> Sorry. Something went wrong.
                            </div></body></html>";
                    }
                  }
                }
                else
                {
                  echo "<html><body><div class=\"alert alert-warning\">
                        <a href=\"#\" class\"close\" data-dismiss=\"alert\" aria-lebel=\"close\">&times</a> All fields are required.
                        </div></body></html>";
                }
              }
            ?>
</html>
