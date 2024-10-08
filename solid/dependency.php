<?php

// BAD

// 低レベルのモジュール
// class EmailNotify {
// 	public function sendEmail($message)
// 	{
//         echo "Sending email: " . $message;
//     }
// }

// // 低レベルのモジュール
// class SmsNotify {
// 	public function sendSms($message)
// 	{
//         echo "Sending sms: " . $message;
//     }
// }

// // 高レベルのモジュール
// class UserNotify {
// 	private $emailNotify;
// 	private $smsNotify;

// 	public function __construct() 
// 	{
// 		$this->emailNotify = new EmailNotify();
// 		$this->smsNotify = new SmsNotify();
// 	}

// 	public function notify($message)
// 	{
// 		// 低モジュールに変更があった場合に、高モジュールの呼び出し元も変更しなければならない
// 		$this->emailNotify->sendEmail($message);
// 		$this->smsNotify->sendSms($message);
// 	}
// }


// GOOD

interface Notify {
	public function send($message);
}

class EmailNotify implements Notify {
	public function send($message)
	{
        echo "Sending email: " . $message;
    }
}

class SmsNotify implements Notify {
	public function send($message)
	{
        echo "Sending sms: " . $message;
    }
}

class UserNotify {
	private $notify;

	public function __construct(Notify $notify)
	{
		$this->notify = $notify;
	}

	public function notify($message)
	{
		$this->notify->send($message);
	}
}
