<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
  use SoftDeletes;

  // テーブル名
  protected $table = 'chats';

  protected $fillable = [
    'to_user_id', // 送信先ユーザーID
    'from_user_id', // 先出人ユーザーID
    'message', // メッセージ
  ];
}
