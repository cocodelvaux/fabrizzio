<?php

class email
{
    private $headers;

	/**
	 * @param from The email and the name, example: Jorge Solis <jorgeluissolis@gmail.com>
	 */
	public function send($from, $to, $subject, $message)
	{

		$this->header('MIME-Version', '1.0')
		    ->add('Reply-To', $from)
		    ->add('Date', date('D, j M Y h:i:s O'))
		    ->add('Subject', $subject)
		    ->add('Sender', $from)
		    ->add('From', $from)
		    ->add('To', $to)
		    ->add('Content-type', 'text/html; charset=iso-8859-1')
		    ->add('X-Priority', '3')
		    ->add('X-MSMail-Priority', 'Normal')
		    ->add('X-Mailer', 'php');

		//ini_set('SMTP','send.one.com');
		//ini_set("sendmail_from", $from);

		return mail($to, $subject, $message, $this->headers);
	}

    private function header($key, $value)
    {
        $this->header = $key . ': ' . $value . '\n';

        return $this;
    }

    private function add($key, $value)
    {
        $this->header .= $key . ': ' . $value . '\n';

        return $this;
    }
}

?>

