<?php
if($text == '/rules$bot' or $text == "/rules"){
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [['text'=>"Kanalimiz📡" ,'url'=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]]
   ]
   ])
   ]);
   }

if ($text == "/id"   ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍁` Ismingiz : $name
🍁 ID raqamingiz : $from_id
🍁 Useringiz `: @$user `
•➖➖➖➖➖➖➖➖•
🍁 Guruh nomi : $gp_name
🍁 Guruh ID : $chat_id 
•➖➖➖➖➖➖➖➖•
🍁 Ogohlantirishlaringiz : ($warn_1 | $warn)`",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'MARKDOWN',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[['text'=> $name ,'url'=>"http://telegram.me/" . $user]]
   ]
   ])
   ]);
   }    
   //Kick
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="/kick"){
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$re_name Foydalanuchi guruhdan haydaldi 👞",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]]
   ]
   ])
   ]);
   }    
   }
   if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"/kick") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"$re_name Foydalanuchi guruhdan haydaldi 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    } 
    
    //Ban
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="/ban"){
	bot('KickChatMember',[
    'chat_id'=>$chat_id, 
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$re_name Foydalanuchi guruhdan ban boldi 🚫",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]]
	  ]
   ])
   ]);
   }    
   }
   if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"/ban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "" && $text['1'] != "الحظر" && $text['1'] != "حظر") {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"$re_name Foydalanuchi guruhdan ban bo'ldi 🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
     //UNBAN
          if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if($message->reply_to_message && $text == "/unban" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡  Foydalanuchi bandan olindi🔚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]]
     ]
     ])
     ]);
     } 
     }
if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if (strpos($textmessage,"/unban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡  Foydalanuchi bandan olindi🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }
   
   //SILENT
if($text == "/silent" && $re && !in_array($re_id)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🤐  Foydalanuvchi mute ro'yxatga tushirildi  ✋️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]]
    ]
    ])
]);
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id,
    'until_date'=>strtotime("+ 30 minutes "),
  ]);
}
file_put_contents("data/$chat_id/silent.txt", "\n" . $re_id, FILE_APPEND);
}



if($photo){
if($you != "creator" && $you != "administrator"){
	if($_photo1 == "✅"  ){      
if($_nphoto1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($photo){
if($you != "creator" && $you != "administrator"){
if($_photo1 == "✅"  ){      
if($_nphoto1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
 if($photo){
if($you != "creator" && $you != "administrator"){
if($_photo1 == "✅"  ){      
if($_nphoto1 == "👞"  ){   
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
if($you != "creator" && $you != "administrator"){
if($_link1 == "✅"  ){      
if($_nlink1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
if($you != "creator" && $you != "administrator"){
if($_link1 == "✅"  ){      
if($_nlink1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
if($you != "creator" && $you != "administrator"){
if($_link1 == "✅"  ){      
if($_nlink1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   if($sticker){
if($you != "creator" && $you != "administrator"){
if($_sticker1 == "✅"  ){      
if($_nsticker1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($sticker){
if($you != "creator" && $you != "administrator"){
if($_sticker1 == "✅"  ){      
if($_nsticker1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
 if($sticker){
if($you != "creator" && $you != "administrator"){
if($_sticker1 == "✅"  ){      
if($_nsticker1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
if($voice){
if($you != "creator" && $you != "administrator"){
if($_voice1 == "✅"  ){      
if($_nvoice1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($voice){
if($you != "creator" && $you != "administrator"){
if($_voice1 == "✅"  ){      
if($_nvoice1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
 if($voice){
if($you != "creator" && $you != "administrator"){
if($_voice1 == "✅"  ){      
if($_nvoice1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   

if($audio){
if($you != "creator" && $you != "administrator"){
if($_audio1 == "✅"  ){      
if($_naudio1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($audio){
if($you != "creator" && $you != "administrator"){
if($_audio1 == "✅"  ){      
if($_naudio1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
 if($audio){
if($you != "creator" && $you != "administrator"){
if($_audio1 == "✅"  ){      
if($_naudio1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   

if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
if($you != "creator" && $you != "administrator"){
if($_tag1 == "✅"  ){      
if($_ntag1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
if($you != "creator" && $you != "administrator"){
if($_tag1 == "✅"  ){      
if($_ntag1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
 if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
if($you != "creator" && $you != "administrator"){
if($_tag1 == "✅"  ){      
if($_ntag1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   

if($fwd ){
if($you != "creator" && $you != "administrator"){
if($_fwd1 == "✅"  ){      
if($_nfwd1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($fwd ){
if($you != "creator" && $you != "administrator"){
if($_fwd1 == "✅"  ){      
if($_nfwd1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
if($fwd ){
if($you != "creator" && $you != "administrator"){
if($_fwd1 == "✅"  ){      
if($_nfwd1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}

if($video ){
if($you != "creator" && $you != "administrator"){
if($_video1 == "✅"  ){      
if($_nvideo1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($video ){
if($you != "creator" && $you != "administrator"){
if($_video1 == "✅"  ){      
if($_nvideo1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
if($video ){
if($you != "creator" && $you != "administrator"){
if($_video1 == "✅"  ){      
if($_nvideo1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}

if($doc ){
if($you != "creator" && $you != "administrator"){
if($_doc1 == "✅"  ){      
if($_ndoc1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($doc ){
if($you != "creator" && $you != "administrator"){
if($_doc1 == "✅"  ){      
if($_ndoc1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
if($doc ){
if($you != "creator" && $you != "administrator"){
if($_doc1 == "✅"  ){      
if($_ndoc1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   
if($location ){
if($you != "creator" && $you != "administrator"){
if($_location1 == "✅"  ){      
if($_nlocation1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($location ){
if($you != "creator" && $you != "administrator"){
if($_location1 == "✅"  ){      
if($_nlocation1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
if($location ){
if($you != "creator" && $you != "administrator"){
if($_location1 == "✅"  ){      
if($_nlocation1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   
if($contact ){
if($you != "creator" && $you != "administrator"){
if($_contact1 == "✅"  ){      
if($_ncontact1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($contact ){
if($you != "creator" && $you != "administrator"){
if($_contact1 == "✅"  ){      
if($_ncontact1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  $warns = $warn - 1;  
if ($warns != $warn_1){ 
 $nnwarn = $warn_1 + 1;       
file_put_contents("data/$chat_id/warn/$from_id.txt", $nnwarn);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
}
if($contact ){
if($you != "creator" && $you != "administrator"){
if($_contact1 == "✅"  ){      
if($_ncontact1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}



if($update->edited_message ){
if($you != "creator" && $you != "administrator"){
  if($edit123== "✅"  ){      
if($edit13 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id,
  ]);
  }
}
} 
}

if($update->edited_message ){
if($you != "creator" && $you != "administrator"){
if($edit123== "✅"  ){      
if($edit13 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id,
  ]);
bot('restrictChatMember',[
'chat_id'=>$chat_edit_id,
'user_id'=>$fromid,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}


if($update->edited_message ){
if($you != "creator" && $you != "administrator"){
if($edit123== "✅"  ){      
if($edit13 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id,
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_edit_id,
 'user_id'=>$fromid
  ]);
  }
}
}
}
   





   
if($doc ){
if($you != "creator" && $you != "administrator"){
if($_gif1 == "✅"  ){      
if($_ngif1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if($doc ){
if($you != "creator" && $you != "administrator"){
if($_gif1 == "✅"  ){      
if($_ngif1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 30 minutes "),
]);
  }
}
}
}
if($doc ){
if($you != "creator" && $you != "administrator"){
if($_gif1 == "✅"  ){      
if($_ngif1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}
   

if($text1 ){
if($you != "creator" && $you != "administrator"){
if($_text1 == "Taqiqlangan❌"  ){      
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
}else{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"",
	'reply_to_message_id'=>$message_id,
            ]);
}
}
}

if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
if($you != "creator" && $you != "administrator"){
if($_marabi1 == "✅"  ){      
if($_nmarabi1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
if($you != "creator" && $you != "administrator"){
if($_marabi1 == "✅"  ){      
if($_nmarabi1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 3000 minutes "),
]);
  }
}
}
}
 if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
if($you != "creator" && $you != "administrator"){
if($_marabi1 == "✅"  ){      
if($_nmarabi1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}

if((stripos($text,"dalbayop")!==false)  or (stripos($text,"oneni")!==false)  or (stripos($text,"skaman")!==false) or (stripos($text,"sikaman")!==false) or (stripos($text,"Axmoq")!==false) or (stripos($text,"chumo")!==false)  or  (stripos($text,"dalbayob")!==false) or  (stripos($text,"skay")!==false) or (stripos($text,"seks")!==false) or (stripos($text,"dalban")!==false) or (stripos($text,"yiban")!==false) or (stripos($text,"jalab")!==false) or (stripos($text,"скаман")!==false) or (stripos($text,"qanjiq")!==false) or (stripos($text,"чумо")!==false)  or  (stripos($text,"далбаёб")!==false) or  (stripos($text,"скай")!==false) or (stripos($text,"секс")!==false) or (stripos($text,"далбан")!==false) or (stripos($text,"йибан")!==false) or (stripos($text,"haqorat")!==false) or (stripos($text,"жалаб")!==false) or (stripos($text,"кутинга")!==false) or (stripos($text,"kotinga")!==false) or  (stripos($text,"куток")!==false)  or  (stripos($text,"qotoq")!==false) or  (stripos($text,"naxuy")!==false) or (stripos($text,"хуй")!==false) or (stripos($text,"сучка")!==false) or (stripos($text,"suchka")!==false) or (stripos($text,"омини")!==false) or (stripos($text,"омнга")!==false) or  (stripos($text,"сикаман")!==false)  or  (stripos($text,"гандон")!==false) or  (stripos($text,"сука")!==false) or (stripos($text,"жопа")!==false) or (stripos($text,"omingni")!==false) or (stripos($text,"ominga")!==false) or (stripos($text,"gandon")!==false) and $from_id !== $admin){
    if($you != "creator" && $you != "administrator"){
if($_sok1 == "✅"  ){      
if($_nsok1 == "🗑"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
  }
}
} 
}
 if((stripos($text,"dalbayop")!==false)  or (stripos($text,"oneni")!==false)  or (stripos($text,"skaman")!==false) or (stripos($text,"sikaman")!==false) or (stripos($text,"Axmoq")!==false) or (stripos($text,"chumo")!==false)  or  (stripos($text,"dalbayob")!==false) or  (stripos($text,"skay")!==false) or (stripos($text,"seks")!==false) or (stripos($text,"dalban")!==false) or (stripos($text,"yiban")!==false) or (stripos($text,"jalab")!==false) or (stripos($text,"скаман")!==false) or (stripos($text,"qanjiq")!==false) or (stripos($text,"чумо")!==false)  or  (stripos($text,"далбаёб")!==false) or  (stripos($text,"скай")!==false) or (stripos($text,"секс")!==false) or (stripos($text,"далбан")!==false) or (stripos($text,"йибан")!==false) or (stripos($text,"haqorat")!==false) or (stripos($text,"жалаб")!==false) or (stripos($text,"кутинга")!==false) or (stripos($text,"kotinga")!==false) or  (stripos($text,"куток")!==false)  or  (stripos($text,"qotoq")!==false) or  (stripos($text,"naxuy")!==false) or (stripos($text,"хуй")!==false) or (stripos($text,"сучка")!==false) or (stripos($text,"suchka")!==false) or (stripos($text,"омини")!==false) or (stripos($text,"омнга")!==false) or  (stripos($text,"сикаман")!==false)  or  (stripos($text,"гандон")!==false) or  (stripos($text,"сука")!==false) or (stripos($text,"жопа")!==false) or (stripos($text,"omingni")!==false) or (stripos($text,"ominga")!==false) or (stripos($text,"gandon")!==false) and $from_id !== $admin){
    if($you != "creator" && $you != "administrator"){
if($_sok1 == "✅"  ){      
if($_nsok1 == "🤐"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
   bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
'until_date'=>strtotime("+ 60 minutes "),
]);
  }
}
}
}
 if((stripos($text,"dalbayop")!==false)  or (stripos($text,"oneni")!==false)  or (stripos($text,"skaman")!==false) or (stripos($text,"sikaman")!==false) or (stripos($text,"Axmoq")!==false) or (stripos($text,"chumo")!==false)  or  (stripos($text,"dalbayob")!==false) or  (stripos($text,"skay")!==false) or (stripos($text,"seks")!==false) or (stripos($text,"dalban")!==false) or (stripos($text,"yiban")!==false) or (stripos($text,"jalab")!==false) or (stripos($text,"скаман")!==false) or (stripos($text,"qanjiq")!==false) or (stripos($text,"чумо")!==false)  or  (stripos($text,"далбаёб")!==false) or  (stripos($text,"скай")!==false) or (stripos($text,"секс")!==false) or (stripos($text,"далбан")!==false) or (stripos($text,"йибан")!==false) or (stripos($text,"haqorat")!==false) or (stripos($text,"жалаб")!==false) or (stripos($text,"кутинга")!==false) or (stripos($text,"kotinga")!==false) or  (stripos($text,"куток")!==false)  or  (stripos($text,"qotoq")!==false) or  (stripos($text,"naxuy")!==false) or (stripos($text,"хуй")!==false) or (stripos($text,"сучка")!==false) or (stripos($text,"suchka")!==false) or (stripos($text,"омини")!==false) or (stripos($text,"омнга")!==false) or  (stripos($text,"сикаман")!==false)  or  (stripos($text,"гандон")!==false) or  (stripos($text,"сука")!==false) or (stripos($text,"жопа")!==false) or (stripos($text,"omingni")!==false) or (stripos($text,"ominga")!==false) or (stripos($text,"gandon")!==false) and $from_id !== $admin){
    if($you != "creator" && $you != "administrator"){
if($_sok1 == "✅"  ){      
if($_nsok1 == "👞"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$from_id
  ]);
  }
}
}
}

if($_salom1 == "✅"  ){      
if($type=="supergroup" or $type=="group"){
    $ex = $msgs[$text];
$ex = explode("|",$ex);
    $txt = $ex[rand(0,count($ex)-1)];
bot("sendmessage",[
	'chat_id'=>$message->chat->id,
	'text'=>"$txt",
	'reply_to_message_id'=>$mid
	]);
}
}
