<?php
define('API_KEY','990858867:AAFbugzeGNWbMQkShAHOjmGm_D5qHKLAvXs');
$admin = "621617473"; 
$kanali = "-1001153541413";
$kanal = "@dil_sozlarm";

function joinchat($from){
     global $message_id;
     $gett = bot('getChatMember',[
  'chat_id' =>"-1001153541413",
  'user_id' => $from,
  ]);
  $gget = $gett->result->status;
         if($gget=="creator" or $gget=="administrator" or $gget=="member"){
      return true;
         }else{
$de = bot("sendmessage",[
         "chat_id"=>$from,
         "text"=>"*Quyidagi kanalga obuna boʻling va mendan foydalaning!*",
         'parse_mode'=>'markdown',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"],],
[["text"=>"✅ Tasdiqlash","callback_data"=>"join"],],
]
]),
]);  
 
return false;
}
}



function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


//METHOD
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$title = $message->chat->title;
$from_id = $update->message->from->id;
$cty = $message->chat->type;
$username = $update->message->from->username;
$about = $update->message->from->about;
$lname= $update->message->from->last_name;


//DATA
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$message_id2 = $update->callback_query->message->message_id;
$cqid = $update->callback_query->id; 
$name2 = $update->callback_query->from->first_name;
$fadmin2 = $update->callback_query->from->id;

//CHANNEL
$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;

$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

//SOZ YODLASH
$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);

$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$kanallar = file_get_contents("stat/kanal.list");
$step = file_get_contents("stat/$chat_id.step");

$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;

mkdir("jins");
mkdir("soni");
mkdir("soni/$chat_id");
$jinsi = file_get_contents("jins/$chat_id.jins");
$yoshi = file_get_contents("jins/$chat_id.yosh");
$odam = file_get_contents("soni/$chat_id.txt");
$reply = $message->reply_to_message->text;

$textmessage = isset($update->message->text)?$update->message->text:'';
$myphoto = $update->message->file_size;
$text1 = $message->text;


$contact = $update->message->contact;
$location = $update->message->location;
$doc = $update->message->document;
$video = $update->message->video;
$sticker = $update->message->sticker;
$photo = $update->message->photo;
$voice = $update->message->voice;
$audio = $update->message->audio;
$fwd = $update->message->forward_from;
$fwd_id = $update->message->forward_from->id;
$fwd_to = $update->message->forward_to;
$fwd_user = $update->message->forward_from->username;
$fwd_name = $update->message->forward_from->first_name;

$edit = $update->edited_message;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;

$pin = $update->message->pinned_message;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_id = $update->message->message_id;

$memb = $update->message->message_id;
$name = $update->message->from->first_name;
$gp_name = $update->message->chat->title;
$title = $update->message->chat->title;
$user = $update->message->from->username;
$for = $update->message->from->id;
$new_gp_name = $update->message->new_chat_title;
$new_gp_photo = $update->message->new_chat_photo;
$del_gp_photo = $update->message->delete_chat_photo;

$number = str_word_count($text);
$numper = strlen($text);

$message_id = $update->message->message_id;
$type = $update->message->chat->type;


$cllchatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;

$_nlink1 = file_get_contents("data/$chat_id/set/llink.txt");
$_link1 = file_get_contents("data/$chat_id/set/link.txt");
$_photo1 = file_get_contents("data/$chat_id/set/photo.txt");
$_nphoto1 = file_get_contents("data/$chat_id/set/photos.txt");
$_sticker1 = file_get_contents("data/$chat_id/set/sticker.txt");
$_nsticker1 = file_get_contents("data/$chat_id/set/lsticker.txt");
$_voice1 = file_get_contents("data/$chat_id/set/voice.txt");
$_nvoice1 = file_get_contents("data/$chat_id/set/lvoice.txt");
$_audio1 = file_get_contents("data/$chat_id/set/audio.txt");
$_naudio1 = file_get_contents("data/$chat_id/set/laudio.txt");
$_tag1 = file_get_contents("data/$chat_id/set/tag.txt");
$_ntag1 = file_get_contents("data/$chat_id/set/ltag.txt");
$_fwd1 = file_get_contents("data/$chat_id/set/fwd.txt");
$_nfwd1 = file_get_contents("data/$chat_id/set/lfwd.txt");
$_video1 = file_get_contents("data/$chat_id/set/video.txt");
$_nvideo1 = file_get_contents("data/$chat_id/set/lvideo.txt");
$_doc1 = file_get_contents("data/$chat_id/set/doc.txt");
$_ndoc1 = file_get_contents("data/$chat_id/set/ldoc.txt");
$_location1 = file_get_contents("data/$chat_id/set/location.txt");
$_nlocation1 = file_get_contents("data/$chat_id/set/llocation.txt");
$_contact1 = file_get_contents("data/$chat_id/set/contact.txt");
$_ncontact1 = file_get_contents("data/$chat_id/set/lcontact.txt");
$edit123 = file_get_contents("data/$chat_edit_id/edit.txt");
$edit13 = file_get_contents("data/$chat_edit_id/ledit.txt");
$_edit1 = file_get_contents("data/$chat_id/edit.txt");
$_nedit1 = file_get_contents("data/$chat_id/ledit.txt");
$_marabi1 = file_get_contents("data/$chat_id/set/marabi.txt");
$_nmarabi1 = file_get_contents("data/$chat_id/set/lmarabi.txt");
$_gif1 = file_get_contents("data/$chat_id/set/gif.txt");
$_ngif1 = file_get_contents("data/$chat_id/set/lgif.txt");
$_sok1 = file_get_contents("data/$chat_id/set/sok.txt");
$_nsok1 = file_get_contents("data/$chat_id/set/lsok.txt");
$_text1 = file_get_contents("data/$chat_id/set/text.txt");
$_salom1 = file_get_contents("data/$chat_id/set/salom.txt");
$_nsalom1 = file_get_contents("data/$chat_id/set/lsalom.txt");




$_link12 = file_get_contents("data/$cllchatid/set/link.txt");
$_photo12 = file_get_contents("data/$cllchatid/set/photo.txt");
$_nphoto12 = file_get_contents("data/$cllchatid/set/photos.txt");
$_nlink12 = file_get_contents("data/$cllchatid/set/llink.txt");
$_sticker12 = file_get_contents("data/$cllchatid/set/sticker.txt");
$_nsticker12 = file_get_contents("data/$cllchatid/set/lsticker.txt");
$_voice12 = file_get_contents("data/$cllchatid/set/voice.txt");
$_nvoice12 = file_get_contents("data/$cllchatid/set/lvoice.txt");
$_audio12 = file_get_contents("data/$cllchatid/set/audio.txt");
$_naudio12 = file_get_contents("data/$cllchatid/set/laudio.txt");
$_tag12 = file_get_contents("data/$cllchatid/set/tag.txt");
$_ntag12 = file_get_contents("data/$cllchatid/set/ltag.txt");
$_fwd12 = file_get_contents("data/$cllchatid/set/fwd.txt");
$_nfwd12 = file_get_contents("data/$cllchatid/set/lfwd.txt");
$_video12 = file_get_contents("data/$cllchatid/set/video.txt");
$_nvideo12 = file_get_contents("data/$cllchatid/set/lvideo.txt");
$_doc12 = file_get_contents("data/$cllchatid/set/doc.txt");
$_ndoc12 = file_get_contents("data/$cllchatid/set/ldoc.txt");
$_location12 = file_get_contents("data/$cllchatid/set/location.txt");
$_nlocation12 = file_get_contents("data/$cllchatid/set/llocation.txt");
$_contact12 = file_get_contents("data/$cllchatid/set/contact.txt");
$_ncontact12 = file_get_contents("data/$cllchatid/set/lcontact.txt");
$_edit12 = file_get_contents("data/$cllchatid/edit.txt");
$_nedit12 = file_get_contents("data/$cllchatid/ledit.txt");
$_marabi12 = file_get_contents("data/$cllchatid/set/marabi.txt");
$_nmarabi12 = file_get_contents("data/$cllchatid/set/lmarabi.txt");
$_gif12 = file_get_contents("data/$cllchatid/set/gif.txt");
$_ngif12 = file_get_contents("data/$cllchatid/set/lgif.txt");
$_sok12 = file_get_contents("data/$cllchatid/set/sok.txt");
$_nsok12 = file_get_contents("data/$cllchatid/set/lsok.txt");
$_text12 = file_get_contents("data/$cllchatid/set/text.txt");
$_salom12 = file_get_contents("data/$cllchatid/set/salom.txt");
$_nsalom12 = file_get_contents("data/$cllchatid/set/lsalom.txt");

 $info = file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe");
$bot_user = json_decode($info)->result->username;
$bot_name = json_decode($info)->result->first_name;
$botid = json_decode($info)->result->id;
$bot_description = json_decode($info)->result->description;

$new = $message->new_chat_member;
$left= $message->left_chat_member;
$id = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$ismi = $message->new_chat_member->first_name;
   $nwm = $message->new_chat_member;
   $namw = $nwm->first_name;
   $nam = $nwm->last_name;
   $idw = $nwm->id;
   $usw = $nwm->username;
   $lft = $message->left_chat_member;
   $usf = $lft->username;
   $idf = $lft->id;
   $namf = $lft->first_name;
   $chat = $message->chat->id;
   $t = $message->chat->title;
   

$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;

$warn = file_get_contents("data/$chat_id/warn/warn.txt");
$warn_ = file_get_contents("data/$chat_id2/warn/warn.txt");
$warn_1 = file_get_contents("data/$chat_id/warn/$from_id.txt");
$warn_2 = file_get_contents("data/$chat_id/warn/$re_id.txt");
$warn_3 = file_get_contents("data/$chat_id/warn/$re_id.txt");

$getruels = file_get_contents("data/$chat_id/rules.txt");
$getwelcome = file_get_contents("data/$chat_id/welcome.txt");


$getu = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($getu, true);
$you = $info['result']['status'];
$you_ = $info['result']['user']['id'];
$cllfor = $update->callback_query->from->id;
$get_ = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id2&user_id=".$cllfor);
$info_ = json_decode($get_, true);
$you_ = $info_['result']['status'];


$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);

if($replytx){
    if($type=="supergroup"  or $type=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
	
}
}


$key=json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'💣Guruhga qoshish']], 
[['text'=>'📋 Malumot'],['text'=>'🛠Buyruqlar']],
[['text'=>'👤Proflim'],['text'=>'📊Statistika']]
			]
		]);
$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Orqaga"],],
]
]);



if($replytx){
    if($cty=="supergroup"  or $cty=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
}
}

if($ch_cid){
$dat = file_get_contents("stat/user.dat");
if(mb_stripos($dat,$ch_cid) !== false){
}else{
file_put_contents("stat/user.dat", "$dat\n$ch_cid");
}
}
if(isset($text)){
$guruhlar = file_get_contents("stat/group.list");
if($cty == "group" or $cty == "supergroup"){
if(strpos($guruhlar,"$chat_id") !==false){
}else{
file_put_contents("stat/group.list","$guruhlar\n$chat_id");
}
} 
}
if(isset($text)){
$userlar = file_get_contents("stat/user.list");
if($cty=="private"){
if(strpos($userlar,"$chat_id") !==false){
}else{
file_put_contents("stat/user.list","$userlar\n$chat_id");
}
} 
}

if($data=="join"){
$check1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$kanali&user_id=$chat_id2"))->result->status;
if($check1 != "member" && $check1 != "creator" && $check1 != "administrator"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🚫Kechirasiz ,

Siz Kanalimizga azo bolmadingiz",
'show_alert'=>true
]);
}else{
        bot("deleteMessage",[
"chat_id"=>$chat_id2,
"message_id"=>$message_id2,
]);
		bot('sendphoto',[
  'chat_id' => $chat_id2,
  'message_id'=>$message_id2,
 'photo' =>"https://t.me/hacker_progi/52884",
 'caption' =>"👍Salom $name2  ishla qale mendan foydalanish uchun ro'yxatdan o'tishingiz kerak

🤙Jinsingizni tasdiqlan!",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"👨‍✈️Erkak",'callback_data'=>"jins_👨‍✈️Erkak"],['text'=>"👩‍✈️Ayol",'callback_data'=>"jins_👩‍✈️Ayol"]]
]
]),
]);
}
}





if($text== "/start" or $text == "/start@Onashka_bot"){
	if(joinchat($from_id)=="true"){
if($cty == "supergroup" or $cty == "group"){
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);

}else{
if($jinsi==false){
if($yoshi==false){

bot('sendphoto',[
  'chat_id' => $chat_id,
 'photo' =>"https://t.me/hacker_progi/52884",
 'caption' =>"👍Salom $name  ishla qale mendan foydalanish uchun ro'yxatdan o'tishingiz kerak

🤙Jinsingizni tasdiqlan!",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"👨‍✈️Erkak",'callback_data'=>"jins_👨‍✈️Erkak"],['text'=>"👩‍✈️Ayol",'callback_data'=>"jins_👩‍✈️Ayol"]]
]
]),
]);
}
}
}
}
}


if (mb_stripos($data,"jins")!==false){
$ex = explode("_", $data);
file_put_contents("jins/$chat_id2.jins","$ex[1]");
bot ('editmessagecaption', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'caption'=>"😅Yoshingizni kiriting yana uzingizni qaritivormang!",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"10-15",'callback_data'=>"yosh_10-15"],['text'=>"15-20",'callback_data'=>"yosh_15-20"]],
[['text'=>"20-25",'callback_data'=>"yosh_20-25"],['text'=>"25-30",'callback_data'=>"yosh_25-30"]]
]
]),
]);
}
if (mb_stripos($data,"yosh")!==false){
$ex = explode("_", $data);
file_put_contents("jins/$chat_id2.yosh","$ex[1]");
$jins = file_get_contents("jins/$chat_id2.jins");
$yosh = file_get_contents("jins/$chat_id2.yosh");
  if($lname2 == null){
  $lname2 = "🚫Mavjud emas";
  }
$user = "@$username2";
  if($user == null){
  $user = "🚫Mavjud emas";
  }
  bot('deletemessage', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
]);
bot('sendphoto',[ 
  'chat_id' => $chat_id2,
  'message_id'=>$message_id2,
'photo' =>"https://t.me/hacker_progi/52884",
'caption'=>"*🙋 Assalomu Aleykum* [$name2](tg://user?id=$chat_id2) , *Mening ismim Onashka🙋‍♀.*
	
 *Men guruhlarda gaplasha olaman va guruh adminlari uchun qulay bo‘lgan buyruqlar orqali guruhni boshqarishga ko‘maklashaman! *

*Meni guruhlarga qo'shing 💁 va Guruhingizga* /panel *buyug'ini yuboring*",
        'parse_mode'=>'markdown',
        'reply_markup'=>$key,
	]);
	bot('sendMessage', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"Salom, men guruhni qizdiraman va nazorat qilaman
*Meni guruhingizga qo‘shing! *

Guruhga qo'shish uchun 👇👇 bosing",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"➕Guruhga qoshish",'url'=>"https://telegram.me/onashka_bot?startgroup=new"]],
            ]
        ])
]);
}

if($text== "/start" or $text == "/start@Onashka_bot"){
	if(joinchat($from_id)=="true"){
$jinsi = file_get_contents("jins/$chat_id.jins");
$yoshi = file_get_contents("jins/$chat_id.yosh");
if($jinsi==true){
if($yoshi==true){

bot('sendphoto',[
  'chat_id' => $chat_id,
'photo' =>"https://t.me/hacker_progi/52884",
'caption'=>"*🙋 Assalomu Aleykum* [$name](tg://user?id=$chat_id) , *Mening ismim Onashka🙋‍♀.*
	
 *Men guruhlarda gaplasha olaman va guruh adminlari uchun qulay bo‘lgan buyruqlar orqali guruhni boshqarishga ko‘maklashaman! *

*Meni guruhlarga qo'shing 💁 va Guruhingizga* /panel *buyug'ini yuboring*",
        'parse_mode'=>'markdown',
        'reply_markup'=>$key,
	]);
	bot('sendMessage', [
'chat_id'=>$chat_id,

'text'=>"Salom, men guruhni qizdiraman va nazorat qilaman
*Meni guruhingizga qo‘shing! *

Guruhga qo'shish uchun 👇👇 bosing",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"➕Guruhga qoshish",'url'=>"https://telegram.me/onashka_bot?startgroup=new"]],
            ]
        ])
]);

}
}
}
}

if($text == "👤Proflim"){
	if(joinchat($from_id)=="true"){
	if($lname == null){
  $lname = "🚫Mavjud emas";
  }
$user = "@$username";
  if($user == null){
  $user = "🚫Mavjud emas";
  }
$jinsi = file_get_contents("jins/$chat_id.jins");
$yoshi = file_get_contents("jins/$chat_id.yosh");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*Mening yoshim*: $yoshi 
*Mening jinsim:* $jinsi
*Mening ismim:* $name
*Mening familiyam:* $lname
*Mening userim:* [@$username]
*Mening ID:* $chat_id",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'👨‍🎓Ismingiz➡','callback_data'=>'null'],['text'=>"$name",'callback_data'=>'null']],
        [['text'=>'👮Familyangiz➡','callback_data'=>'null'],['text'=>"$lname",'callback_data'=>'null']],
        [['text'=>'📧Useringiz➡','callback_data'=>'null'],['text'=>"$user",'url'=>"https://t.me/$username"]],
        [['text'=>'🆔ID raqamingiz➡','callback_data'=>'null'],['text'=>"$chat_id",'callback_data'=>'null']],
        [['text'=>'🎊Yoshingiz➡','callback_data'=>'null'],['text'=>"$yoshi",'callback_data'=>'null']],
        [['text'=>'📋Jinsingiz➡','callback_data'=>'null'],['text'=>"$jinsi",'callback_data'=>'null']],
            ]
        ])
]);
}
}





if($text == "💣Guruhga qoshish"){
	if(joinchat($from_id)=="true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"Salom, men guruhni qizdiraman va nazorat qilaman
*Meni guruhingizga qo‘shing! *

Guruhga qo'shish uchun 👇👇 bosing",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"➕Guruhga qoshish",'url'=>"https://telegram.me/onashka_bot?startgroup=new"]],
            ]
        ])
]);
}
}
if($text== '🛠Buyruqlar'){
	if(joinchat($from_id)=="true"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'reply_to_message_id'=>$mid,
        'text'=>"*Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:*

/panel ➖ *Guruhni sozlash;*

/ro ➖ *Guruh a‘zosini Read - Only rejimiga tushuradi;*
/unro ➖ *Guruh a‘zosidan cheklovni oladi;*
/kick ➖ *Guruh a‘zosini guruhdan chiqaradi;*
/warn ➖ *Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;*
/unwarn ➖ *Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;*
/ban ➖ *Guruh a‘zosini guruhdan chiqaradi, boshqa qaytib kira olmaydi;*
/unban ➖ *Bandan oladi;*


/pin ➖ *Xabarni yuqoriga qistiradi;*
/admin ➖ *Guruh a‘zosini guruhga admin qiladi;*
/deladmin ➖ *Adminlikdan oladi*;
/leave ➖ *Bot guruhni tark etadi;*",
        'parse_mode'=>'markdown',
        'reply_markup'=>$orqa,
	]);
     }  
}
if($text == "📋 Malumot"){
	if(joinchat($from_id)=="true"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️ Qo'lanmani diqqat bilan o'qib chiqing iltimos, Tushnib oling va Botni to'liq ishlating!
👇 Qo'lanmani o'qish uchun pasdagi *KNOPKAGA* bosing!",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"📖Qo'llanma",'url'=>"https://telegra.ph/Onashka-bot-Qollanmasi-04-01"]],
            ]
        ])
]);
}
}

if($text == '🔙Orqaga'){
	if(joinchat($from_id)=="true"){
    bot('sendphoto',[ 
  'chat_id' => $chat_id,
'photo' =>"https://t.me/hacker_progi/52884",
'caption'=>"*? Assalomu Aleykum* [$name](tg://user?id=$chat_id) , *Mening ismim Onashka🙋‍♀.*


	
 *Men guruhlarda gaplasha olaman va guruh adminlari uchun qulay bo‘lgan buyruqlar orqali guruhni boshqarishga ko‘maklashaman! *

*Meni guruhlarga qo'shing 💁 va Guruhingizga* /panel *buyug'ini yuboring*",
        'parse_mode'=>'markdown',
        'reply_markup'=>$key,
	]);
	bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"Salom, men guruhni qizdiraman va nazorat qilaman
*Meni guruhingizga qo‘shing! *

Guruhga qo'shish uchun 👇👇 bosing",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"➕Guruhga qoshish",'url'=>"https://telegram.me/onashka_bot?startgroup=new"]],
            ]
        ])
]);
 }      
}
if($text == "📊Statistika"){
if(joinchat($from_id)=="true"){
$vaq = date("⏰H:i  📅d_m_Y",strtotime("3 hour"));
$dat = file_get_contents("stat/user.dat");
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$kn = substr_count($dat,"\n");
$obsh = $gr + $us + $kn;
     bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"*
┌ 📊Botimiz natijalari
├ 👤A`zolar: *$us* dona
├ 👥Guruhlar: *$gr* dona
├📡 Kanallar: *$kn*
└ 🌍Hammasi bo'lib: *$obsh* dona *

➖➖➖➖➖➖➖
⏳ Bugun sana: [$vaq]",
     'parse_mode'=>'markdown',
             'reply_markup'=>$key,
     ]);
     }}



if($text == '📚 Qiziqarli'){
	if(joinchat($from_id)=="true"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
       'reply_to_message_id'=>$mid,
        'text'=>"Test rejimda😝",
        'parse_mode'=>'markdown',
        'reply_markup'=>$m,
	]);
 }      
}



if($new_chat_members == bot('getMe')->result->id){
    $get = bot('getChatMembersCount', ['chat_id' => $chat_id])->result;
    if ($get <= 20) {
        bot('sendMessage', [
            'chat_id' =>$chat_id,
            'text' => "Meni Guruhingizga qo'shishingiz uchun 20 kishidan koproq odam bolish kere🙁🖤",
        ]);
        bot('leaveChat', [
            'chat_id' => $chat_id
        ]);
    } else {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "🙋Salom barchaga endi men $title guruhi uchun xizmat qilaman
🤖Meni guruhingizga sozlash uchun /panel buyrug'ini yuboring!
💎Bosh homiy: [@Dil_Sozlarm]",
         'parse_mode' => 'markdown',
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"Dardlarim...😔","url"=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]],
            ]
        ])
]);
    }
}

if($new_chat_members == bot('getMe')->result->id){
    $get = bot('getChatMembersCount', ['chat_id' => $chat_id])->result;
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
    if ($get <= 50) {
          $input = array("💁 Gruppada aholi soni $count ta ekan, muncha kamchilimiza☹️","💁 Gruppada aholi soni $count ta ekan, o'ziyam chirigan gruppaga kirib qommanu 😆","💁 Gruppada aholi soni $count ta ekan, itam yo'ku gruppada😂");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"$soz",
   'parse_mode'=> 'markdown'
        ]));
    } else {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "",
        ]);
    }
}




if((mb_stripos($text,"@") !==false) or (stripos($caption,"@")!==false) or (stripos($text,"@")!==false) or (stripos($text,"@")!==false)){
if($cty == "group" or $cty == "supergroup"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
$send = bot('SendMessage', [
'chat_id'=>$cid,
'text'=>"<a href='tg://user?id=$from_id'>$name</a>  😡<b>Kechirasiz bu guruhda ReklamA tashlash mumkin emas!\n\nChunki Guruhda</b> <a href='tg://user?id=$botid'>$bot_name</a><b>Bor</b>",
'parse_mode'=>"html",
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"Dardlarim...😔","url"=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]],
            ]
        ])
])->result->message_id;
sleep(30);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' => $send
]);
}}}





if(isset($new) or isset($left)){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}


if($text == "/ro" or $text == "Ro" or $text == "RO" or $text == "rO"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+120 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$repname</a> Siz <b>Read - Only</b> rejimiga tushirildingiz!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text == "/Kick"  or  $text == "kick"  or $text == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$repname</a> guruhdan <b>KICK</b> bo‘ldi!",
      'parse_mode' => 'html'
  ]);
}
}


if((stripos($text,"/panel")!==false) or (stripos($text,"/sozlama")!==false) or (stripos($text,"/warn")!==false) or (stripos($text,"/kick")!==false) or (stripos($text,"/unwarn")!==false) or (stripos($text,"/info")!==false) or (stripos($text,"/sozlamalar")!==false) or (stripos($text,"/ban")!==false) and $from_id !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $from_id,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+1 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $from_id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
 $send = bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<a href='tg://user?id=$from_id'>$repname</a> <b>1 minut</b>ga <b>Read - Only</b> rejimiga tushdirildi.n<b>Sabab: admin buyruqlarini ishlatdi!</b> ",
        'parse_mode' => 'html',
    'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>'Kanalim❤','url'=>'https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow']]
]
]),
])->result->message_id;
sleep(20);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' => $send
]);
}
}

 if($text == "/admin" or $text == "addpm"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$repname</a> Sizni tabriklayman, Siz endi guruh <b>administratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text == "/deladmin" or $text == "delpm"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<a href='tg://user?id=$id'>$repname</a> Siz endi guruh administratori <b>emassiz</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

  if($text == "/unro" or $text == "UNRO" or $text == "unro"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$repname</a> Sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>nEndi qoidani <b>buzmaysiz</b> degan umiddaman❗️",
    'parse_mode'=>'html'
  ]);
}
}

if ($text=='/del'&&$from_id==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  }

if($text == "/pin" or $text == "Pin" or $text == "PIn" or $text == "PIN" or $text == "piN" or $text == "pIN" or $text == "pIn" or $text == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
}
}

if($text=="/leave"&&$from_id==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Ho‘p xo‘jayin, guruhni tark etaman!</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}


 if($text == "ban" or $text == "Ban" or $text== "/Ban" or  $text == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$repname</a> guruhdan <b>BAN</b> bo‘ldi!",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text == "Unban"  or  $text == "/unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$repname</a> <b>ban</b>dan olindi!",
        'parse_mode'=>'html'
    ]);
}
}





$sana = date('d-M Y',strtotime('3 hour'));
$soat = date('H:i', strtotime('3 hour'));
$kun3 = date('N',strtotime('3 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma  muborak🌸5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 

$tedadmsg = $update->message->message_id;
$oynomi = date('F',strtotime('3 hour'));
$buoy = date('t',strtotime('3 hour'));
if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"
┌👋Guruhimizga xush kelibsiz!
├🗓Bugun: $sana-yil
├⌚️Soat: $soat
├🔵Hafta kuni: $hafta1
├🌎Hozir $oynomi oyi
├ 📅Bu oy $buoy kundan iborat
├👥Guruh a'zolari: $count
└📡Bosh homiy: @DiL_SozLaRM
",
]);
}


if($new){
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"",
    'parse_mode'=>'html'
   ]);
  $odam = file_get_contents("soni/$chat_id/$from_id.txt");
  $op = $odam + 1;
  file_put_contents("soni/$chat_id/$from_id.txt","$op");
}

if($get == "administrator" or $get == "creator" or $get == "member"){
if($text =="/soni" or $text == "/soni@Onashka_bot"){
 $rodam = file_get_contents("soni/$chat_id/$repid.txt");
  bot('sendmessage',[    
    'chat_id'=>$chat_id, 
    'user_id'=>$repid, 
    'reply_to_message_id'=>$mid,  
    'parse_mode'=>'html',   
    'text'=>"<b>$repname</b> bugungi kungacha guruhga <b>$rodam</b> ta odam qo'shgan!",
  ]);   
}
if($text == "/soni" or $text == "/soni@Onashka_bot"){
 $odam = file_get_contents("soni/$chat_id/$from_id.txt");
  bot('sendmessage',[    
    'chat_id'=>$chat_id, 
    'user_id'=>$user_id,  
    'parse_mode'=>'html',   
    'text'=>"<b>$name</b> siz bugungi kungacha guruhga <b>$odam</b> ta odam qo'shdingiz!",
  ]);   
}
}



//send buyruqlari

$penlist = file_get_contents("data/pen.txt");
$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📤Send oddiy"],['text'=>"📤Send Forward"]],
[['text'=>"📤Guruh oddiy"],['text'=>"📤Guruh Forward"]],
[['text'=>"Bekor qilish⛔"],['text'=>"PHPni olish📥"],],
]
]);
 

 
if($text == "/xabar" and $chat_id==$admin){

 bot('SendMessage',[ 
'chat_id'=>$chat_id,
'message_id'=>$mid,
'parse_mode'=>'markdown',
'text'=>"🔹*Siz adminsiz kerakli bo'limni tanlang:*",
'reply_markup'=>$key,
]);
}



if($text == "Bekor qilish⛔"&&$from_id==$admin){
      bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yuborish Bekor qilindi!",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
unlink("stat/$chat_id.step");
      unlink("viki/send.ok");
      unlink("viki/send.no");
      unlink("stat/Rasm.jpg");
      unlink("stat/$chat_id.matn11");
      unlink("stat/$chat_id.jpg");
      unlink("stat/$chat_id.matn");
      unlink("stat/$chat_id.matn1");
      }
    
    if ($text == "📤Send oddiy" && $chat_id == $admin ){
        file_put_contents("stat/$chat_id.step", "send");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step== "send") {
        file_put_contents("stat/$chat_id.step", "no");
        $fp = fopen("stat/user.list", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
            bot('sendMessage', [
'chat_id'=>$ckar,
'text'=>$text,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar muofaqiyatli yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 
if ($text == "📤Send Forward" && $chat_id == $admin){
        file_put_contents("stat/$chat_id.step", "fwd");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step == 'fwd') {
        file_put_contents("stat/$chat_id.step", "no");
        $forp = fopen("stat/user.list", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
            bot('forwardMessage', [
'chat_id'=>$fakar,
'from_chat_id'=>$chat_id,
'message_id'=>$mid,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 

    if ($text == "📤Guruh oddiy" && $chat_id == $admin ){
        file_put_contents("stat/$chat_id.step", "snd");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step== "snd") {
        file_put_contents("stat/$chat_id.step", "no");
        $fp = fopen("stat/group.list", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
            bot('sendMessage', [
'chat_id'=>$ckar,
'text'=>$text,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar muofaqiyatli yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 
if ($text == "📤Guruh Forward" && $chat_id == $admin){
        file_put_contents("stat/$chat_id.step", "fd");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step == 'fd') {
        file_put_contents("stat/$chat_id.step", "no");
        $forp = fopen("stat/group.list", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
            bot('forwardMessage', [
'chat_id'=>$fakar,
'from_chat_id'=>$chat_id,
'message_id'=>$mid,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 
    

if($text == 'PHPni olish📥' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__),
'caption'=>"@Onashka_bot <b>code</b>",
'parse_mode'=>"html",
'reply_to_message_id'=>$mid,
]);
}

  
  if(isset($left)){
 bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if (isset($new)){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=>$message->message_id
]);
}


if ($new) {
	if($getwelcome==false){
     $send = bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>"<b>👋Assalomu alekum</b> <a href='tg://user?id=$new'>$ismi</a> 
🙂<b>$title</b> guruhimizga xush kelibsiz!\n
👥<b>Guruh a'zolari soni:</b> <b>$count</b>
",
'disable_web_page_preview'=>true,
       'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>'😍2-Lichkam', 'url'=>'https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow']],
]
])
])->result->message_id;
sleep(40);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' => $send
]);
}
    }
    
   $wel = file_get_contents("data/$chat_id/welcome.txt");
if($nwm && $wel != null or $text == "tb"){
  $ed = str_replace("id","$idw","$wel");
  $ed = str_replace("name","$namw","$ed");
  $ed = str_replace("user","@$usw","$ed");
  $ed = str_replace("chat","$chat","$ed");
  $ed = str_replace("title","$t","$ed");
  $ed = str_replace("+","\n","$ed");
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"$ed",
       'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>'😍2-Lichkam', 'url'=>'https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow']],
]
])
])->result->message_id;
sleep(40);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' => $send
]);
}
  
  
$getwelcome2 = file_get_contents("data/$cllchatid/welcome.txt");
$gpname2 = $update->callback_query->message->chat->title;
 $typee = $update->callback_query->message->chat->type;

$soz = "Do'stim bu Guruhni boshqarish uchun ro'yxat ⚓️\n\nGuruhni boshqarish uchun tugmalardan foydalaning👇

Malumot:📖
Ochirmaydi == ❌ 
Ochiradi  == ✅
➖➖➖➖➖➖➖➖➖➖
Reaksiyasi🔍:
Qoidabuzarni Xabarni ochiradi = 🗑
Qoidabuzarni Mute qiladi =🤐
Qoidabuzarni Guruhdan haydaydi = 👞";


if($you == "creator" or $you == "administrator" or $from_id == $sudo && $type == "supergroup" ) {
if($text == "/panel" or  $text == "/start@Onashka_bot"){
    mkdir("data");
    mkdir("data/$chat_id/");
mkdir("data/$chat_id/set");
    file_put_contents("data/$chat_id/set/photo.txt","❌");
    file_put_contents("data/$chat_id/set/photos.txt","🗑");
    file_put_contents("data/$chat_id/set/link.txt","✅");
file_put_contents("data/$chat_id/set/llink.txt","🗑");
file_put_contents("data/$chat_id/set/sticker.txt","❌");
file_put_contents("data/$chat_id/set/lsticker.txt","🗑");
file_put_contents("data/$chat_id/set/voice.txt","❌");
file_put_contents("data/$chat_id/set/lvoice.txt","🗑");
file_put_contents("data/$chat_id/set/audio.txt","❌");
file_put_contents("data/$chat_id/set/laudio.txt","🗑");
 file_put_contents("data/$chat_id/set/tag.txt","✅");
 file_put_contents("data/$chat_id/set/ltag.txt","🗑");
file_put_contents("data/$chat_id/set/fwd.txt","✅");
file_put_contents("data/$chat_id/set/lfwd.txt","🗑");
file_put_contents("data/$chat_id/set/video.txt","❌");
file_put_contents("data/$chat_id/set/lvideo.txt","🗑");
file_put_contents("data/$chat_id/set/doc.txt","❌");
file_put_contents("data/$chat_id/set/ldoc.txt","🗑");
file_put_contents("data/$chat_id/set/location.txt","❌");
file_put_contents("data/$chat_id/set/llocation.txt","🗑");
file_put_contents("data/$chat_id/set/contact.txt","❌");
file_put_contents("data/$chat_id/set/lcontact.txt","🗑");
file_put_contents("data/$chat_id/edit.txt","❌");
file_put_contents("data/$chat_id/ledit.txt","🗑");
file_put_contents("data/$chat_id/set/marabi.txt","✅");
file_put_contents("data/$chat_id/set/lmarabi.txt","👞");
file_put_contents("data/$chat_id/set/sok.txt","✅");
file_put_contents("data/$chat_id/set/lsok.txt","🤐");
file_put_contents("data/$chat_id/set/gif.txt","❌");
file_put_contents("data/$chat_id/set/lgif.txt","🗑");
file_put_contents("data/$chat_id/set/text.txt","Ruxsat berilgan✅");
file_put_contents("data/$chat_id/set/salom.txt","✅");
    bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Guruh qo'shildi ✅
                
Ushbu ro'yxat faqat admin uchun 🤠
Kerakli bolimni bosing va guruhni nazorat qiling  ⚔

Knopkalarga tegish orqali 👇",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'Markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [['text'=>"Media sozlama🔒",'callback_data'=>"help"],['text'=>"Guruh sozlamasi👥",'callback_data'=>"ss"]],
 [['text'=>'📜Guruh malumoti','callback_data'=>'gpinfo'],['text'=>'Ogohlantrishlar🛡','callback_data'=>'list']]
    ]
    ])
    ]);
    }
   } 
   
   
   include("key.php");
    include("del.php");

   
