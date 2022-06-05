<?php 

ob_start();

$API_KEY = '5415854752:AAHa0esfhmJ2M0BcBgSjBZ6eG2VVykXvN7s';  /////tokin
##------------------------------##
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
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
 function sendmessage($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption, $title ,$performer){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 'title'=>$title,
 'performer'=>$performer
 ]);
 }
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
 function sendsticker($chat_id, $sticker){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker
 ]);
 }
 function sendvideo($chat_id, $video, $caption){
 bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>$video,
 'caption'=>$caption
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
 function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->userame;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message;
$mroan = file_get_contents("mroan.txt");
$ADMIN = 334345183 ;    //id admin
//====================start======================//
if(preg_match('/^\/([Ss]tart)/',$text)){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'disable_web_page_preview'=>true,
                'text' =>"سڵاو [$last_name$first_name](t.me/$usernae) 🎓

♻️ بووتی گۆرینی فایل

بۆ ئەم شێوازانە👇
1- png بۆ jpg💾
2- Stiker بۆ jpg 🔆
3- jpg بۆ Stiker 🔆
4- png بۆ Stiker 🔆
5- Stiker فایل بۆ 🔆
6- jpg بۆ png💾
7- 🎧ڤۆیس بۆ mp3 🎤
8- 🎤mp3 بۆ ڤۆیس🎧
9- ڤیدێۆ بۆ mp3
10- ڤیدێۆ بۆ gif


",
                'parse_mode'=>"Markdown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔂 دەستپێکە 🌠",'callback_data'=>"a"]
              ],
              
[['text'=>"🌙 فێرکاری بۆ کورد 📡",'url'=>"t.me/ferkaribokurd11"]]
              
              ]
        ])
            ]);
        }
//====================admini======================//
 elseif($text == "/admin" && $from_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"بەخێربێت ئەدمین",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"ئامار"],['text'=>"ناردنی نامە"]
              ],
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "ئامار" && $from_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " ژمارەی بەکارهێنەران : $member_count" , "html");
}
elseif($text == "ناردنی نامە" && $from_id == $ADMIN){
    file_put_contents("mroan.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" چیت مەبەستە بینێرە ئێستا",
    ]);
}
elseif($mroan == "bc" && $from_id == $ADMIN){
    file_put_contents("mroan.txt","none");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ڕۆی.",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html");
  }
}

elseif($data == "a"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
 'disable_web_page_preview'=>true,
  'message_id'=>$message_id,
 'text'=>"🎐┇_بووتی گۆڕینی فایل_🔁
 
🔰*گۆڕانکاری لە چیبەشێک ئەکەی دیاریکە*👇
 
 - [فێرکاری بۆ کورد 📡](t.me/ferkaribokurd11)",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🌌 وێنە 🌠",'callback_data'=>"c"],['text'=>"🎥 ڤیدێۆ 🎞",'callback_data'=>"d"]
              ],
              [
              ['text'=>"♪ ڤۆیس-فایلی دەنگی 🎤",'callback_data'=>"e"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🎐┇_بووتی گۆڕینی فایل_🔁
 
 🔰*گۆڕانکاری لە چیبەشێک ئەکەی دیاریکە*👇
  
  - [فێرکاری بۆ کورد 📡](t.me/ferkaribokurd11)",
  'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
               [
               ['text'=>"🌌 وێنە 🌠",'callback_data'=>"c"],['text'=>"🎥 ڤیدێۆ 🎞",'callback_data'=>"d"]
               ],
               [
               ['text'=>"♪ ڤۆیس-فایلی دەنگی 🎤",'callback_data'=>"e"]
               ]
               ]
         ])
  ]);
 }
//====================Photo======================//
elseif($data == "c"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🌋 بەشی گۆڕینی وێنە
",
 'parse_mode'=>"MarkDown",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
            ['text'=>"png بۆ jpg💾",'callback_data'=>"c1"]
            ],
             [
            ['text'=>" Stiker بۆ jpg 🔆",'callback_data'=>"c4"],['text'=>" jpg بۆ Stiker 🔆",'callback_data'=>"c3"]
            ],
            [
                ['text'=>" Stiker فایل بۆ 🔆",'callback_data'=>"c6"],['text'=>" png بۆ Stiker 🔆",'callback_data'=>"c5"]
                ],
             [
            ['text'=>" jpg بۆ png💾",'callback_data'=>"c2"]
            ],
            [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back2"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"Bo'limni Tanlen 🔰",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
              ['text'=>"png بۆ jpg💾",'callback_data'=>"c1"]
              ],
               [
              ['text'=>" Stiker بۆ jpg 🔆",'callback_data'=>"c4"],['text'=>" jpg بۆ Stiker 🔆",'callback_data'=>"c6"]
              ],
              [
                ['text'=>" Stiker فایل بۆ 🔆",'callback_data'=>"c6"],['text'=>" png بۆ Stiker 🔆",'callback_data'=>"c5"]
                ],
               [
              ['text'=>" jpg بۆ png💾",'callback_data'=>"c2"]
              ],
              [
                ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back"]
                ]
                ]
          ])
   ]);
  }
elseif($data == "c1"){
file_put_contents("mroan.txt","c1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"- ئێستا وێنەکەت بنێرە 💽 تا بۆت کرێت بە png📦",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c2"){
file_put_contents("mroan.txt","c2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"- ئێستا وێنەکەت بنێرە تا بۆت کرێت بە jpg 🌌",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c3"){
file_put_contents("mroan.txt","c3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"- ئێستا ستیکەرەکەت بنێرە تا بکرێت بە وێنە 😻",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"العودة ◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c4"){
file_put_contents("mroan.txt","c4");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"ئێستا وێنەکەت بنێرە تا بکرێت بە ستێکەر💘",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c5"){
file_put_contents("mroan.txt","c5");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"•ئێستا ستیکەر بنێرە بابکرێت بە png 🗂",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"گەڕانەوە ◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c6"){
file_put_contents("mroan.txt","c6");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"• ئێستا فایلی ڕەسم بنێرە بابکرێت بە ستیکەر 🗺",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"گەڕانەوە ◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($mroan == "c1"){
file_put_contents("mroan.txt","No");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('filegorin.png'),
 ]);
}
elseif($mroan == "c2"){
file_put_contents("mroan.txt","No");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('filegorin.png'),
 ]);
 }
elseif($mroan == "c3"){
file_put_contents("mroan.txt","No");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('filegorin.png'),
 ]);
 }
elseif($mroan == "c4"){
file_put_contents("mroan.txt","No");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('filegorin.png'),
 ]);
}
elseif($mroan == "c5"){
file_put_contents("mroan.txt","No");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('filegorin.png'),
 ]);
 }
 elseif($mroan == "c6"){
 file_put_contents("mroan.txt","No");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('filegorin.png'),
 ]);
 }
//====================video======================//
elseif($data == "d"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>" 🎥بەشی گۆڕینی ڤیدیۆ
 
 - 🔰*ڤیدیۆکەت ئەکەی بە چی؟*",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"🎤بە mp3",'callback_data'=>"d1"],['text'=>"🎥بە gif🎨 ",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back3"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🔰ڤیدیۆکەت ئەکەی بە چی؟",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"🎤بە mp3",'callback_data'=>"d1"]
            ],
            [
            ['text'=>"🎥بە gif🎨 ",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d1"){
file_put_contents("mroan.txt","d1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "• 🎤*ڤیدیۆ بنێرە تا بکرێت بە mp3*",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d2"){
file_put_contents("mroan.txt","d2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>" •🔰*ڤیدیۆ بنێرەتا بکرێت بە gif*",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}

elseif($mroan == "d1"){
 file_put_contents("mroan.txt","No");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('filegorin.mp3'),
 ]);
 }
 elseif($mroan == "d2"){
 file_put_contents("mroan.txt","No");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.gif',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('filegorin.gif'),
 ]);
 }

//====================sawt======================//
elseif($data == "e"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🎤*بەشی گۆڕینی ڤۆیس-فایلی دەنگی
 
 -🔰هەڵبژێرە*",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"🎧ڤۆیس بۆ mp3 🎤",'callback_data'=>"e1"],['text'=>"🎤mp3 بۆ ڤۆیس🎧",'callback_data'=>"e2"]
            ],
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}

elseif($data == "e1"){
file_put_contents("mroan.txt","e1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "•🎧*ئێستا بۆ ڤۆیس بنێرە تابکرێت بە mp3*",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"e"]
              ]
              ]
        ])
 ]);
}
elseif($data == "e2"){
file_put_contents("mroan.txt","e2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "•mp3 بنێرە تا بکرێت بە ڤۆیس",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"🔙 گەڕانەوە",'callback_data'=>"e"]
              ]
              ]
        ])
 ]);
}
elseif($mroan == "e1"){
 file_put_contents("mroan.txt","No");
$voice = $message->voice;
$file = $voice->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('filegorin.mp3'),
 ]);
 }
elseif($mroan == "e2"){
 file_put_contents("mroan.txt","No");
$audio = $message->audio;
$file = $audio->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('filegorin.ogg',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('filegorin.ogg'),
 ]);
 }


 ///
 @ferkaribokurd11
 //

   ?>
