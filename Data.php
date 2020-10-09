<?php


class Data
{
    public static $path = "data.json";

    public static function saveData($data)
    {
        $newData = json_encode($data);

        file_put_contents(self::$path, $newData);
    }

    public static function loadData()
    {

        $dataJson = file_get_contents(self::$path);
        return json_decode($dataJson,true);
    }
}