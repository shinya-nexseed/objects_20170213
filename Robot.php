<?php
// クラス = 設計書
class Robot{
    // クラスにはプロパティとメソッドが存在する
    // プロパティ = 値を保持する = 変数
    // メソッド = 実行する処理 = 関数

    // プロパティの定義
    public $name = '';
    public $gender = '';
    public $food = '';
    private $weight = '';
    // アクセス修飾子 public / private / protected

    // カプセル化
    // カプセル化とは、クラス内に定義されたプロパティを外部からアクセス禁止にし、値を取得・設定するための２つのメソッド（ゲッター・セッター）を用意することで使用可能にする手法のこと
    // 基本的にオブジェクト指向で定義するプロパティはすべてカプセル化する

    // ゲッター（各プロパティの値をゲットするためのメソッド）
    public function getWeight() {
        return $this->weight;
    }

    // セッター（各プロパティに値をセットするためのメソッド）
    public function setWeight($weight) {
        if (60 <= $weight && $weight <= 100) {
            $this->weight = $weight;
        } else {
            echo '既定値外の値を設定しようとしています<br>';
        }
    }


    // メソッドの定義
    function greeting($gender) {
        // 擬似変数$this
        // クラス内でプロパティやメソッドを実行する際には、
        // クラス外と同じくオブジェクトから呼び出す必要があり、
        // 自分自身を指す$thisを使用する
        if ($gender == 'Men') {
            echo 'こんにちは、ぼく' . $this->name . '<br>';
        } else {
            echo 'こんにちは、わたし' . $this->name . '<br>';
        }
        
    }

    function pocket() {
        echo '四次元ポケット〜！<br>';
    }
}

// クラスから作られたものがオブジェクト（インスタンス）
// クラスをインスタンス化することで実際に使用できるオブジェクトになる
$doraemon = new Robot();
// $doraemonがRobotクラスから生成されたオブジェクト
// newがインスタンス化することを宣言

$doramichan = new Robot();

// クラス内のプロパティ・メソッドの実行方法
// オブジェクト->プロパティ
// オブジェクト->メソッド()
$doraemon->name = 'ドラえもん'; // プロパティに値をセット
$doraemon->gender = 'Men';
$doraemon->food = 'どら焼き';
// $doraemon->weight = 300;
$doraemon->setWeight(70);
echo $doraemon->name . 'の体重は' . $doraemon->getWeight() . 'です。<br>';
$doraemon->greeting($doraemon->gender); // メソッドを実行
// ->のことをアロー演算子という
echo $doraemon->name;
$doraemon->pocket();

$doramichan->name = 'ドラミちゃん';
$doramichan->gender = 'Women';
$doramichan->food = 'メロンパン';
$doramichan->greeting($doramichan->gender);

// 明日以降
// メソッド、プロパティの詳細
// PDOについてなど



?>













