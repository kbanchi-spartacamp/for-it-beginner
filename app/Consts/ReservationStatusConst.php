<?php

namespace App\Consts;

class ReservationStatusConst
{
    // 予約不可(対応不可)
    const STATUS_NOT_ACCEPT = 0;
    // 予約可能(空き)
    const STATUS_ACCEPT = 1;
    // 予約済
    const STATUS_FILL = 2;
    // ステータス一覧
    const STATUS_LIST = [
        '予約不可' => self::STATUS_NOT_ACCEPT,
        '予約可能' => self::STATUS_ACCEPT,
        '予約済' => self::STATUS_FILL,
    ];
}
