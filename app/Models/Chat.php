<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  // テーブル名
  protected $table = 'chats';

  protected $fillable = [
    'to_user_id', // 送信先ユーザーID
    'from_user_id', // 先出人ユーザーID
    'message', // メッセージ
  ];
}
