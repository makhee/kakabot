<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\DiceGame as DiceGame;

class CmdSelector extends Controller
{
    public function selector($msg)
    {
        $decode_msg = urldecode($msg);

        $a_cmd = explode(" ", $decode_msg);

        $cmd = $a_cmd[0];
        $val = isset($a_cmd[1]) ? $a_cmd[1] : "";
        
        switch ($cmd) {
            case "!주사위" : {
                $dice_game = new DiceGame; 
                return $dice_game->start($val);
            }
            
            case "!혁주" : {
                return "쌉인싸 아니겠습니까요?";
            }

            case "!티거" : {
                return "아이고 우리팀장님";
            }

            case "!쿠퍼" : {
                return "아이고 우리 전팀장님";
            }

            case "!상훈" : {
                return "아이고 우리 모지리";
            }

            case "!석주" : {
                return "안녕하세요? 기술연마하러 왔습니다.";
            }

            case "!민석" : {
                return "아이고 우리 이쑤시개";
            }

            case "!091" : {
                return "091님 박수한번 칠까요?";
            }
        }

    }
}
