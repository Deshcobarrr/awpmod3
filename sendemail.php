<?php
    require 'vendor/autoload.php';
    
    class SendEmail
        {
            public static function SendMail($to, $subject, $content)
                {
                    $key = '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';
                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom("dbrown19j@vtdi.edu.jm", "Deshaun Brown");
                    $email->setSubject($subject);
                    $email->addto($to);
                    $email->addContent("text/html", $content);

                    $sendgrid = new \SendGrid($key);

                    try
                        {
                            $response = $sendgrid->send($email);
                            return $response;
                        }

                    catch (Exception $e)
                        {
                            echo 'Email exception caught: '. $e->getMessage() . "\n";
                            return false;
                        }
                }
        }
?>