<?php

namespace App\Http\Controllers\Gag;

use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: raymond
 * Date: 14/1/2016
 * Time: 7:16 PM
 */
class GagController extends Controller
{

    const LIMIT = 10;

    public function show($page = 1)
    {
        $limit = 10;
        $offset = $page * $limit;
        $nextOffset = ($page + 1)* $limit;
        $count = \DB::table("GAG_ITEM")->where('TYPE', '=', 'Photo')->orWhere('TYPE', '=', 'Animated')->count();
        $results = \DB::table("GAG_ITEM")->where('TYPE', '=', 'Photo')->orWhere('TYPE', '=', 'Animated')->limit($limit)->offset($offset)->get();

        srand(time());
        $randValue = (float) rand() / (float)getrandmax();

        if ($randValue >= 0.15) {
            $response = array(
                "meta" => array(
                    "code" => 200,
                ),
                "data" => array(
                    "gags" => self::_tmpResultConverter($results),
                    "has_next"  => ($nextOffset >= $count) ? false : true,
                    "next_page" => ($nextOffset >= $count) ? null : $page + 1 . "",
                )
            );
        } else {
            $response = array(
                "meta" => array(
                    "code" => 404
                )
            );
        }



//        return (json_encode($results));



        return json_encode($response);
    }

    // Photo/Animated
    private static function _tmpResultConverter($results)
    {
        $convertedResults = array();

        foreach ($results as $result) {
            $converted = array();
            $converted['_id'] = $result->{'_id'};
            $converted['title'] = $result->{'TITLE'};
            $converted['type'] = $result->{'TYPE'};

            $gagMedia = json_decode($result->{'GAG_MEDIA_JSON'}, true);

            $converted['url'] = $gagMedia['image700']['url'];
            $converted['width'] = $gagMedia['image700']['width'];
            $converted['height'] = $gagMedia['image700']['height'];

            if ($converted['type'] == 'Animated') {
                $converted['videoUrl'] = $gagMedia['image460sv']['url'];
            }

            $converted['nsfw'] = $result->{'NSFW'};

            $convertedResults[] = $converted;
        }

        return $convertedResults;
    }
}
