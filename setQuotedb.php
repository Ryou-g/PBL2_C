<?php

require_once __DIR__ . '/DBConnect.php';

require_once __DIR__ . '/charSetDB.php';

date_default_timezone_set('Asia/Tokyo');

$sql = "SELECT * FROM users WHERE id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
$Favorability = $user['Favorability'];


//現在時刻
$now_time = new DateTime('now');

//比較基準時刻

$m_time = '6:00:00';
$a_time = '12:00:00';
$e_time = '18:00:00';


$now_time = new DateTime('3:0:0');
$morning = new DateTime($m_time);
$afteroon = new DateTime($a_time);
$evening = new DateTime($e_time);



$rand = mt_rand(0,2);
if(strstr($cos_path,"coat")){
    if($Favorability >= 150){
         if($now_time >= $morning && $now_time < $afteroon){
            if($rand == 0){
                $quote = "おはよう！　今日もがんばろー！";
            }else if($rand == 1){
                $quote = "最近いい感じじゃない？";
            }else if($rand == 2){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }else if($now_time < $evening){
            if($rand == 0 or $rand == 1){
                $quote = "最近いい感じじゃない？";
            }else if($rand == 2){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }else if($now_time >= $evening or $now_time < $morning){
            if($rand == 0){
                $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
            }else if($rand == 1){
                $quote = "最近いい感じじゃない？";
            }else if($rand == 2){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }
    }else if($Favorability >= 100){
        if($now_time >= $morning && $now_time < $afteroon){
            if($rand == 0 or $rand == 1){
                $quote = "おはよう！　今日もがんばろー！";
            }else{
                $quote = "最近いい感じじゃない？";
            }
        }else if($now_time >= $evening or $now_time < $morning){
            if($rand == 0 or $rand == 1){
                $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
            }else{
                $quote = "最近いい感じじゃない？";
            }
        }else{
            if($rand==0 or $rand == 2){
                $quote = "最近いい感じじゃない？";
            }else if($rand==1){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }
    }else if($Favorability >= 50){
        if($now_time >= $morning && $now_time < $afteroon){
            if($rand == 0 or $rand == 1){
                $quote = "おはよう！　今日もがんばろー！";
            }else{
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }else if($now_time >= $evening or $now_time < $morning){
            $quote = "最近寒いねー、風邪引かないように気をつけないと";
        }else{
            if($rand==0 or $rand == 2){
                $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
            }else if($rand==1){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }
    }else{
        if($now_time >= $morning && $now_time < $afteroon){
            if($rand == 0 or $rand == 1){
                $quote = "おはよー";
            }else if($rand == 1){
                $quote = "最近ちゃんとお風呂入ってる？";
            }else if($rand == 2){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }else if($now_time < $evening){
            if($rand == 0 or $rand == 1){
                $quote = "最近ちゃんとお風呂入ってる？";
            }else if($rand == 2){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }else if($now_time >= $evening or $now_time < $morning){
            if($rand == 0 or $rand == 1){
                $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
            }else if($rand == 2){
                $quote = "最近寒いねー、風邪引かないように気をつけないと";
            }
        }
    }
}else if(strstr($cos_path,"dress")){
    if($Favorability >= 150){
        if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "おはよう！　今日もがんばろー！";
           }else if($rand == 1){
               $quote = "前より雰囲気良くなったかも！";
           }else if($rand == 2){
               $quote = "今度の休みピクニック行かない？";
           }
       }else if($now_time < $evening){
           if($rand == 0){
               $quote = "前より雰囲気良くなったかも！";
           }else if($rand == 2){
               $quote = "最近寒いねー、風邪引かないように気をつけないと";
           }else if($rand == 1){
            $quote = "ね、今年の夏海行こうよ！";
           }
       }else if($now_time >= $evening or $now_time < $morning){
           if($rand == 0){
               $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
           }else if($rand == 1){
               $quote = "今から花火買って一緒にやろうよ！";
           }else if($rand == 2){
               $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
           }
       }
   }else if($Favorability >= 100){
       if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0 or $rand == 1){
               $quote = "最近いい感じじゃない？";
           }else{
               $quote = "おはよう！　今日もがんばろー！";
           }
       }else if($now_time >= $evening or $now_time < $morning){
           if($rand == 0 or $rand == 1){
               $quote = "風が気持ちいいねー、眠たくなっちゃう";
           }else{
               $quote = "最近いい感じじゃない？";
           }
       }else{
           if($rand==0 or $rand == 2){
               $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
           }else if($rand==1){
               $quote = "最近いい感じじゃない？";
           }
       }
   }else if($Favorability >= 50){
       if($now_time >= $morning && $now_time < $afteroon){
            $quote = "おはよう！　今日もがんばろー！";
       }else if($now_time >= $evening or $now_time < $morning){
            $quote = "気温がちょうどいいからお出かけしたいねー";
       }else{
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }else{
       if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "おはよー";
           }else if($rand == 1 or $rand == 2){
               $quote = "最近ちゃんとお風呂入ってる？";
           }
       }else if($now_time < $evening){
            $quote = "最近ちゃんとお風呂入ってる？";
       }else if($now_time >= $evening or $now_time < $morning){
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }
}else if(strstr($cos_path,"maid")){
    if($Favorability >= 150){
        if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "お帰りなさいませ、ご主人様";
           }else if($rand == 1){
               $quote = "おはよう！　今日もがんばろー！";
           }else if($rand == 2){
               $quote = "前より雰囲気良くなったかも！";
           }
       }else if($now_time < $evening){
           if($rand == 0 or $rand == 1){
               $quote = "前より雰囲気良くなったかも！";
           }else if($rand == 2){
               $quote = "お帰りなさいませ、ご主人様";
           }
       }else if($now_time >= $evening or $now_time < $morning){
           if($rand == 0 or $rand == 2){
               $quote = "お帰りなさいませ、ご主人様";
           }else if($rand == 1){
               $quote = "前より雰囲気良くなったかも！";
           }
       }
   }else if($Favorability >= 100){
       if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "最近いい感じじゃない？";
           }else{
               $quote = "おはよう！　今日もがんばろー！";
           }
       }else if($now_time >= $evening or $now_time < $morning){
           if($rand == 0 or $rand == 1){
               $quote = "メイドの真似はちょっと...";
           }else{
               $quote = "最近いい感じじゃない？";
           }
       }else{
           $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }else if($Favorability >= 50){
       if($now_time >= $morning && $now_time < $afteroon){
            $quote = "おはよう！　今日もがんばろー！";
       }else if($now_time >= $evening or $now_time < $morning){
            $quote = "メイド服なんてめったに着ないから新鮮だね";
       }else{
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }else{
       if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "おはよー";
           }else if($rand == 1 or $rand == 2){
               $quote = "最近ちゃんとお風呂入ってる？";
           }
       }else if($now_time < $evening){
            $quote = "最近ちゃんとお風呂入ってる？";
       }else if($now_time >= $evening or $now_time < $morning){
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }
}else if(strstr($cos_path,"uniform")){
    if($Favorability >= 150){
        if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "おはよう！　今日もがんばろー！";
           }else if($rand == 1){
               $quote = "前より雰囲気良くなったかも！";
           }else if($rand == 2){
               $quote = "今日お弁当作ってきたから一緒に食べよ！";
           }
       }else if($now_time < $evening){
           if($rand == 0){
               $quote = "前より雰囲気良くなったかも！";
           }else if($rand == 2){
               $quote = "今日お弁当作ってきたから一緒に食べよ！";
           }else if($rand == 1){
            $quote = "放課後遊ばない？";
           }
       }else if($now_time >= $evening or $now_time < $morning){
           $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }else if($Favorability >= 100){
       if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0 or $rand == 1){
               $quote = "最近いい感じじゃない？";
           }else{
               $quote = "おはよう！　今日もがんばろー！";
           }
       }else if($now_time >= $evening or $now_time < $morning){
           $quote = "最近いい感じじゃない？";
       }else{
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }else if($Favorability >= 50){
       if($now_time >= $morning && $now_time < $afteroon){
            if($rand==0 or $rand == 1){
                $quote = "おはよう！　今日もがんばろー！";
            }else{
                $quote = "ちゃんと朝ごはん食べた？";
            }
       }else if($now_time >= $evening or $now_time < $morning){
            $quote = "眠いけど授業中に寝ちゃダメだよ？";
       }else{
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }else{
       if($now_time >= $morning && $now_time < $afteroon){
           if($rand == 0){
               $quote = "おはよー";
           }else if($rand == 1 or $rand == 2){
               $quote = "最近ちゃんとお風呂入ってる？";
           }
       }else if($now_time < $evening){
            $quote = "最近ちゃんとお風呂入ってる？";
       }else if($now_time >= $evening or $now_time < $morning){
            $quote = "１日お疲れさま～、お風呂に入ってゆっくり休んでね";
       }
   }
}


?>