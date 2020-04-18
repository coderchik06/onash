<?php
if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" Ushbu ro'yxat faqat admin uchun 🤠
Kerakli bolimni bosing va guruhni nazorat qiling  ⚄1�7

Knopkalarga tegish orqali 👇",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [['text'=>"Media sozlama🔒",'callback_data'=>"help"],['text'=>"Guruh sozlamasi👥",'callback_data'=>"ss"]],
 [['text'=>'📜Guruh malumoti','callback_data'=>'gpinfo'],['text'=>'Ogohlantrishlar🛡','callback_data'=>'list']],
[['text'=>"Xabar sozlamasi",'callback_data'=>"flod"]]
    ]
    ])
    ]);
    }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
       ]);
       }
       } 





if($data == "gpinfo"){
			  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
  'text'=> "Guruh haqida malumot📄
  
	➖➖➖➖➖➖
	*Salomlashish matni*🤗
	`$getwelcome2`
	➖➖➖➖➖➖	
 * Xayrlashish matni*🚶
	`$byetext2`
	➖➖➖➖➖➖",
	 'parse_mode'=>'markdown',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[['text'=>'❄️Guruh malumoti❄️','callback_data'=>'a'],],
	[['text'=>'Guruh ID🆔','callback_data'=>'a'],['text'=>"$cllchatid",'callback_data'=>'a']],[['text'=>'Guruh nomi📄','callback_data'=>'a'],['text'=>"$gpname2",'callback_data'=>'a']],
	[['text'=>'Guruh turi⚄','callback_data'=>'a'],['text'=>"$typee",'callback_data'=>'a']],[['text'=>'👥Azolar','callback_data'=>'a'],['text'=> "$count2",'callback_data'=>'a'],['text'=>'Xabarlar soni✄1�7','callback_data'=>'a'],['text'=> "$cllmsegid",'callback_data'=>'a']],
	[['text'=>'🔙Orqaga','callback_data'=>'bag']]
]
			])
		]);
					} else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
		}
	}

if($data == "list" ){
			if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
  "text" => "SuperGroup/Group ",

'reply_markup' =>json_encode([
'inline_keyboard'=>[
[['text'=>'Ban List⛔️','callback_data'=>'banlist'],['text'=>'MuteUser List🔇','callback_data'=>'muteuserlist']],
[['text'=>'🔙Orqaga','callback_data'=>'bag']]
]
			])
		]);
				} else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
		}
	}
	


if($data == "muteuserlist" ){
				if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
  "text" => "MuteUser List:
$warn_",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙Orqaga','callback_data'=>'list']]
]
			])
		]);
				} else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
		}
	}
    if($data == "banlist" ){
				if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
  "text" => "Ban List:
'.$banlist2.'",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙Orqaga','callback_data'=>'list']]
]
			])
		]);
				} else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
		}
	}


if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"*Iltimos guruhda yangi a'zo bilan salomlashish matnini yuboring*

*Salomlashish uchun kalit so'zlar:* 
`{name}` - Yangi kirgan a'zoni ismi bilan salomlashadi
`{id}` - Yangi kirgan a'zoni id raqamini oladi
`{title}` - Guruh nomini oladi

*Namuna:* `Salom, {name} {title} Guruhiga xush kelibsiz`
", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [['text'=> "Kanalimiz📡" ,'url'=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]],
	  	 [['text'=>"Orqaga🔙",'callback_data'=>"bagg"]]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
     ]);
     } 
     }
         
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){   file_put_contents("data/$chat_id/welcome.txt","$text");  
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Salomlashish saqlandi✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [['text'=>"📡Kanalimiz",'url'=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]],
	  [['text'=>"Orqaga🔙",'callback_data'=>"bagg"]]
   ]
   ])
   ]);
   }   
   }
      

if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Iltimos guruh yangi qoidasini yuboring🔃", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [['text'=> "Kanalimiz" ,'url'=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]],
	  [['text'=>"Orqaga🔙",'callback_data'=>"bagg"]]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
                'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
     ]);
     } 
     }

  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo   ){
     file_put_contents("data/$chat_id/rules.txt","$text"); 
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" Qoida saqlandi✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [['text'=>"📡Kanalimiz" ,'url'=>"https://t.me/joinchat/AAAAAETBpSWxAFjppkDCow"]],
	  [['text'=>"Orqaga🔙",'callback_data'=>"bagg"]]
   ]
   ])
   ]);
   }   
   }
    
if($data == 'help'){
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠︄",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
[['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
      ]
      ])
      ]);
      }    
      
if ( $data == "photo" && $_photo12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠︄",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
[['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "photo" && $_photo12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠︄",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
 [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   if ( $data == "photos" && $_nphoto12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/photos.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"🤐",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
  [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],
 [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "photos" && $_nphoto12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/photos.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"👞",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
[['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   if ( $data == "photos" && $_nphoto12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/photos.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"🗑",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "video" && $_video12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "video" && $_video12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
          'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   if ( $data == "lvideo" && $_nvideo12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/lvideo.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"🤐",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "lvideo" && $_nvideo12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lvideo.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"👞",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "lvideo" && $_nvideo12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lvideo.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"🗑",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "gif" && $_gif12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/gif.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }  
if ( $data == "gif" && $_gif12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/gif.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
              'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }

if ( $data == "lgif" && $_ngif12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/lgif.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"🤐",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
  if ( $data == "lgif" && $_ngif12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lgif.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"👞",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  if ( $data == "lgif" && $_ngif12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lgif.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"🗑",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 
 if ( $data == "link" && $_link12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   

 if ( $data == "link" && $_link12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "llink" && $_nlink12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/llink.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"🤐",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "llink" && $_nlink12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/llink.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"👞",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   if ( $data == "llink" && $_nlink12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/llink.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"🗑",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 
if ( $data == "sticker" && $_sticker12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "sticker" && $_sticker12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "lsticker" && $_nsticker12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/lsticker.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"🤐",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "lsticker" && $_nsticker12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lsticker.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"👞",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   if ( $data == "lsticker" && $_nsticker12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lsticker.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"🗑",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "voice" && $_voice12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/set/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "voice" && $_voice12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/set/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
if ( $data == "lvoice" && $_nvoice12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/lvoice.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"🤐",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "lvoice" && $_nvoice12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lvoice.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"👞",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "lvoice" && $_nvoice12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lvoice.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"🗑",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "audio" && $_audio12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
          'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "audio" && $_audio12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "laudio" && $_naudio12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/laudio.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"🤐",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "laudio" && $_naudio12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/laudio.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"👞",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "laudio" && $_naudio12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/laudio.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"🗑",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "tag" && $_tag12 == "❌") {
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "tag" && $_tag12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}   

if ( $data == "ltag" && $_ntag12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/ltag.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"🤐",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "ltag" && $_ntag12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/ltag.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"👞",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "ltag" && $_ntag12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/ltag.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"🗑",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "fwd" && $_fwd12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "fwd" && $_fwd12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
         'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
if ( $data == "lfwd" && $_nfwd12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/lfwd.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"🤐",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "lfwd" && $_nfwd12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lfwd.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"👞",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "lfwd" && $_nfwd12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lfwd.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"🗑",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "file" && $_doc12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }   
 if ( $data == "file" && $_doc12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "lfile" && $_ndoc12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/ldoc.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
  [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"🤐",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "lfile" && $_ndoc12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/ldoc.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"👞",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 if ( $data == "lfile" && $_ndoc12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/ldoc.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
[['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠️",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"🗑",'callback_data'=>"lfile"]],
   [['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"$_kutib12",'callback_data'=>"kutib"]],[['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "kutib" && $_kutib12 == "Ruxsat berilgan✅") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/kutib.txt","Taqiqlangan❌");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠︄",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
[['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"Taqiqlangan❌",'callback_data'=>"kutib"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "kutib" && $_kutib12 == "Taqiqlangan❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/kutib.txt","Ruxsat berilgan✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Photo 📸",'callback_data'=>"#"],['text'=>"$_photo12",'callback_data'=>"photo"],['text'=>"$_nphoto12",'callback_data'=>"photos"]],
 [['text'=>"Video 🎞",'callback_data'=>"#"],['text'=>"$_video12",'callback_data'=>"video"],['text'=>"$_nvideo12",'callback_data'=>"lvideo"]],
 [['text'=>"Gif 💠︄",'callback_data'=>"#"],['text'=>"$_gif12",'callback_data'=>"gif"],['text'=>"$_ngif12",'callback_data'=>"lgif"]],
  [['text'=>"Link🔗",'callback_data'=>"#"],['text'=>"$_link12",'callback_data'=>"link"],['text'=>"$_nlink12",'callback_data'=>"llink"]],
 [['text'=>"Sticker 🦊",'callback_data'=>"#"],['text'=>"$_sticker12",'callback_data'=>"sticker"],['text'=>"$_nsticker12",'callback_data'=>"lsticker"]],
 [['text'=>"Golos 🎤",'callback_data'=>"#"],['text'=>"$_voice12",'callback_data'=>"voice"],['text'=>"$_nvoice12",'callback_data'=>"lvoice"]],
 [['text'=>"Musiqa 🎼",'callback_data'=>"#"],['text'=>"$_audio12",'callback_data'=>"audio"],['text'=>"$_naudio12",'callback_data'=>"laudio"]],
 [['text'=>"(@/#) Reklama💱",'callback_data'=>"#"],['text'=>"$_tag12",'callback_data'=>"tag"],['text'=>"$_ntag12",'callback_data'=>"ltag"]],
 [['text'=>"Forward 🔁",'callback_data'=>"#"],['text'=>"$_fwd12",'callback_data'=>"fwd"],['text'=>"$_nfwd12",'callback_data'=>"lfwd"]],
 [['text'=>"Document📂",'callback_data'=>"#"],['text'=>"$_doc12",'callback_data'=>"file"],['text'=>"$_ndoc12",'callback_data'=>"lfile"]],
[['text'=>"🙋Kutib olish",'callback_data'=>"#"],['text'=>"Ruxsat berilgan✅",'callback_data'=>"kutib"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"bag"],['text'=>"🔜Keyingisi",'callback_data'=>"next"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   
   
   
   
   
   
 
 if ( $data == "next") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	     [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
	[['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
	[['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
	[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
	[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
	   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
	 [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
   	 	 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]																
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 
 if ( $data == "location" && $_location12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/location.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
 [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
     [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "location" && $_location12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/location.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
   [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
 [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
      [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }  

if ( $data == "llocation" && $_nlocation12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/llocation.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"🤐",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
 [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
     [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
  if ( $data == "llocation" && $_nlocation12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/llocation.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"👞",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
    [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
      [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  if ( $data == "llocation" && $_nlocation12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/llocation.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"🗑",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
      [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "contact" && $_contact12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/contact.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
    [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
[['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
     [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 
if ( $data == "contact" && $_contact12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/contact.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
      [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
if ( $data == "lcontact" && $_ncontact12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
file_put_contents("data/$cllchatid/set/lcontact.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"🤐",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
    [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
    [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
    [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
     if ( $data == "lcontact" && $_ncontact12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lcontact.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"👞",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
   [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
 [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
        [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
[['text'=>"Orqaga🔙",'callback_data'=>"help"]]
              ]  
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
     if ( $data == "lcontact" && $_ncontact12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lcontact.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"🗑",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
    [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
[['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
      [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 
if ( $data == "edit" && $_edit12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
       [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }  

if ( $data == "edit" && $_edit12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
    [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
    [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
if ( $data == "ledit" && $_nedit12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
file_put_contents("data/$cllchatid/ledit.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"🤐",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
      [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
  [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
     if ( $data == "ledit" && $_nedit12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/ledit.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"👞",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
   [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
 [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
     [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
     if ( $data == "ledit" && $_nedit12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/ledit.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"🗑",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
   [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
 [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
       [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "all" && $_text12 == "Ruxsat berilgan✅") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/text.txt","Taqiqlangan❌");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
	[['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
	[['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
	[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
	[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"Taqiqlangan❌",'callback_data'=>"all"]],
   	  [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
	 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]																
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "all" && $_text12 == "Taqiqlangan❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/text.txt","Ruxsat berilgan✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
	[['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
	[['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
	[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
	[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"Ruxsat berilgan✅",'callback_data'=>"all"]],
   	  [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
	 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]																
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   if ( $data == "marabi" && $marabi12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/marabi.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
	[['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
	[['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
	[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
	 [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
   	 	 [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]																
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }  
if ( $data == "marabi" && $marabi12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/marabi.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
	[['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
	[['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
	[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
	[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
    [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],	 
	 [['text'=>"Orqaga🔙",'callback_data'=>"help"]]																
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "lmarabi" && $_nmarabi12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
file_put_contents("data/$cllchatid/set/lmarabi.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"🤐",'callback_data'=>"lmarabi"]],
 [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
   [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],  
   [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
     if ( $data == "lmarabi" && $_nmarabi12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lmarabi.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"👞",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
   [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
     [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
     if ( $data == "lmarabi" && $_nmarabi12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lmarabi.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"🗑",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
     [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
   [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }

   if ( $data == "sok" && $_sok12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/sok.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
 [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
   [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
     [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "sok" && $_sok12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/sok.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
   [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
 [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
   [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
     [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }  

if ( $data == "lsok" && $_nsok12 == "🗑") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/lsok.txt","🤐");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
[['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
 [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"🤐",'callback_data'=>"lsok"]],
   [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
    [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
    [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
  if ( $data == "lsok" && $_nsok12 == "🤐" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lsok.txt","👞");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
[['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"👞",'callback_data'=>"lsok"]],
    [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
   [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
     [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  if ( $data == "lsok" && $_nsok12 == "👞" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/lsok.txt","🗑");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
         [['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"🗑",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
 [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"$_salom12",'callback_data'=>"salom"]],
       [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 }

if ( $data == "salom" && $_salom12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/set/salom.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
 [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"✅",'callback_data'=>"salom"]],
       [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
 } 
 if ( $data == "salom" && $_salom12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/set/salom.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>$soz,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	[['text'=>"Manzil🌍",'callback_data'=>"#"],['text'=>"$_location12",'callback_data'=>"location"],['text'=>"$_nlocation12",'callback_data'=>"llocation"]],
 [['text'=>"Contact 📞",'callback_data'=>"#"],['text'=>"$_contact12",'callback_data'=>"contact"],['text'=>"$_ncontact12",'callback_data'=>"lcontact"]],
 [['text'=>"Taxrirlash✍",'callback_data'=>"#"],['text'=>"$_edit12",'callback_data'=>"edit"],['text'=>"$_nedit12",'callback_data'=>"ledit"]],
 [['text'=>"️Arablar🇮🇶",'callback_data'=>"#"],['text'=>"$_marabi12",'callback_data'=>"marabi"],['text'=>"$_nmarabi12",'callback_data'=>"lmarabi"]],
  [['text'=>"Sokinishlar🗣️",'callback_data'=>"#"],['text'=>"$_sok12",'callback_data'=>"sok"],['text'=>"$_nsok12",'callback_data'=>"lsok"]],
  [['text'=>"✍Yozishni toxtatish❌",'callback_data'=>"#"],['text'=>"$_text12",'callback_data'=>"all"]],
 [['text'=>"Suhbatlashish🙆",'callback_data'=>"#"],['text'=>"❌",'callback_data'=>"salom"]],
       [['text'=>"Orqaga🔙",'callback_data'=>"help"]]
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
   
   
   
if ( $data == "#" ) {
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ bu bolim ozgarmaydi📛",
        'show_alert'=>true
        ]);
}

if($data == "ss"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"   /kick [ id / reply ] Guruhdan haydash 👞
/ban ~» [ id / reply ] Guruhdan ban qilish ⛓
/unban [ id / reply ] Bandan olish⚖
/del ~» [ reply ] Xabarni ochirish 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] Ogohlantirish📍
/unwarn ~» [ reply ] Ogohlantirishni olish
/silent ~» [ reply ] Mute qilish 🤐
/unsilent ~» [ reply ] Mutedan olish",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"🔲 Salomlashish 🔳",'callback_data'=>"welc"],['text'=>"🗒 Qoidalar  📜",'callback_data'=>"rul"]],
         [['text'=>"♣️ Ogohlantirish sozlamasi ⬇️",'callback_data'=>"muner"]],
	 [['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],['text'=>"➕",'callback_data'=>"+"]],
					 [['text'=>"Orqaga🔙",'callback_data'=>"bag"]]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  
  
 elseif ($data == 'muner' ){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"Ogohlantrish sozlamasi
➕ Qoshish
➖ Ayirish",
]);
}   
  

if($data == '+'){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"   /kick [ id / reply ] Guruhdan haydash 👞
/ban ~» [ id / reply ] Guruhdan ban qilish ⛓
/unban [ id / reply ] Bandan olish⚖
/del ~» [ reply ] Xabarni ochirish 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] Ogohlantirish📍
/unwarn ~» [ reply ] Ogohlantirishni olish
/silent ~» [ reply ] Mute qilish 🤐
/unsilent ~» [ reply ] Mutedan olish ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [['text'=>"🔲 Salomlashish 🔳",'callback_data'=>"welc"],['text'=>"🗒 Qoidalar  📜",'callback_data'=>"rul"]],
         [['text'=>"♣️ Ogohlantirish sozlamasi ⬇️",'callback_data'=>"muner"]],
	 [['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],['text'=>"➕",'callback_data'=>"+"]],
					 [['text'=>"Orqaga🔙",'callback_data'=>"bag"]]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  

 if($data == '-' ){
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>" /kick [ id / reply ] Guruhdan haydash 👞
/ban ~» [ id / reply ] Guruhdan ban qilish ⛓
/unban [ id / reply ] Bandan olish⚖
/del ~» [ reply ] Xabarni ochirish 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] Ogohlantirish📍
/unwarn ~» [ reply ] Ogohlantirishni olish
/silent ~» [ reply ] Mute qilish 🤐
/unsilent ~» [ reply ] Mutedan olish",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [['text'=>"🔲 Salomlashish 🔳",'callback_data'=>"welc"],['text'=>"🗒 Qoidalar  📜",'callback_data'=>"rul"]],
         [['text'=>"♣️ Ogohlantirish sozlamasi ⬇️",'callback_data'=>"muner"]],
	 [['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],['text'=>"➕",'callback_data'=>"+"]],
					 [['text'=>"Orqaga🔙",'callback_data'=>"bag"]]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
 
$warns = $warn - 1;  
if ($warns != $warn_2){ 
 if($re &&$text == "/warn"){  
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Kechirasiz do'stim 😒 ✋ 
Guruh ichidagi qoidalarga amal qiling 👤
Bu admin 👨🏫tomonidan ogohlantirish hisoblanadi 

Ogohlantirishlaringiz soni 🛑 ( $nnwarn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]]
      ]
    ])
  ]);
  }  
 }
 }
 
 $warns = $warn - 1;   
 if ($warns == $warn_2){
if($re && $text == "/warn"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Kechirasiz do'stim 💂
Siz guruh qoidalarga rioya qilmadingiz 🤷🤦‍♂
Siz maksimal ogohlantirishlarga erishdingiz va siz haydaldingiz 👞
Sizning ogohlantirishlaringiz 🛑 ( $warn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]]
      ]
    ])
  ]);
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }

  if($re && $text == "/unwarn"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Qanday yaxshi  🙈
Barcha ogohlantirishlar olib tashlandi 😉",
                'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]]
      ]
    ])
  ]);
  } }  
  if($data == "bagg"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] Guruhdan haydash 👞
/ban ~» [ id / reply ] Guruhdan ban qilish ⛓
/unban [ id / reply ] Bandan olish⚖
/del ~» [ reply ] Xabarni ochirish 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] Ogohlantirish📍
/unwarn ~» [ reply ] Ogohlantirishni olish
/silent ~» [ reply ] Mute qilish 🤐
/unsilent ~» [ reply ] Mutedan olish ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"🔲 Salomlashish 🔳",'callback_data'=>"welc"],['text'=>"🗒 Qoidalar  📜",'callback_data'=>"rul"]],
         [['text'=>"♣️ Ogohlantirish sozlamasi ⬇️",'callback_data'=>"muner"]],
	 [['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],['text'=>"➕",'callback_data'=>"+"]],
					 [['text'=>"Orqaga🔙",'callback_data'=>"bag"]]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
         'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  
 
if($data == "welc"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"<b>Bu Yangi azo bilan salomlashish bo'limi</b> 🤗
 _Salomlashish_ matnini ornatish uchun <b>Taxrirlash</b> ni bosing😃",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"⬛️ Salomlashishni taxrirlash⬜️",'callback_data'=>"welcom"]],
					 [['text'=>"Orqaga🔙",'callback_data'=>"bagg"]]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}
  

if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"<b>Bu bo'lim guruh qoidalarini yozish uchun</b>
_Qoida_ yozish uchun <b>Taxrirlash </b> ni bosing",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"Qoidani taxrirlash📨️",'callback_data'=>"rules"]],
					 [['text'=>"Orqaga🔙",'callback_data'=>"bagg"]]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Kechirasiz ⚠️ Siz admin emassiz 📛",
        'show_alert'=>true
        ]);
}
}