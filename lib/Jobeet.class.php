<?php

class Jobeet
{
    static public function slugify($text)
    {
        // 文字列ではないもしくは数値でないもの全てを、-に変更
        $text = preg_replace('/\W+/', '-', $text);
        // トリムして小文字に変換する
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}
