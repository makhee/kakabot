<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\DiceGame as DiceGame;

class CmdSelector extends Controller
{
    public function selector($msg, $sender)
    {
        $decode_msg = urldecode($msg);
        $decode_sender = urldecode($sender);

        $a_cmd = explode(" ", $decode_msg);

        $cmd = $a_cmd[0];
        $val = isset($a_cmd[1]) ? $a_cmd[1] : "";
        
        switch ($cmd) {
            case "!명령어" : {
                return "!주사위 숫자, !혁주, !티거, !넬리, !쿠퍼, !상훈, !석주, !민석, !091 이 있습니다.";
            }

            case "!주사위" : {
                $dice_game = new DiceGame; 

                if($val <= 0){
                    $val = "";
                }

                $result = $dice_game->start($val);
                
                return $decode_sender . "님이 주사위 " . $val . ($val == '' ? "를 굴려 " : "을 굴려 ") . $result . "이 나왔습니다.";
            }
            
            case "!혁주" : {
                return "쌉인싸 아니겠습니까요?";
            }

            case "!티거" : {
                return "아이고 우리팀장님";
            }

            case "!넬리" : {
                return "담배 한대 삐까?";
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
