<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TTS 的参数模式
 *
 * @method float getSpeed() 获取语速，范围：[-2，2]，分别对应不同语速：
-2代表0.6倍
-1代表0.8倍
0代表1.0倍（默认）
1代表1.2倍
2代表1.5倍
如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
 * @method void setSpeed(float $Speed) 设置语速，范围：[-2，2]，分别对应不同语速：
-2代表0.6倍
-1代表0.8倍
0代表1.0倍（默认）
1代表1.2倍
2代表1.5倍
如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
 * @method integer getVoiceType() 获取音色 ID，[音色体验地址](https://cloud.tencent.com/product/tts)。


|音乐ID|音色名称|推荐场景|
|--|--|--|
|1001|智瑜|情感女声|
|1002|智聆|通用女声|
|1003|智美|客服女声|
|1004|智云|通用男声|
|1005|智莉|通用女声|
|1007|智娜|客服女声|
|1008|智琪|客服女声|
|1009|智芸|知性女声|
|1010|智华|通用男声|
|1017|智蓉|情感女声|
|1018|智靖|情感男声|



 * @method void setVoiceType(integer $VoiceType) 设置音色 ID，[音色体验地址](https://cloud.tencent.com/product/tts)。


|音乐ID|音色名称|推荐场景|
|--|--|--|
|1001|智瑜|情感女声|
|1002|智聆|通用女声|
|1003|智美|客服女声|
|1004|智云|通用男声|
|1005|智莉|通用女声|
|1007|智娜|客服女声|
|1008|智琪|客服女声|
|1009|智芸|知性女声|
|1010|智华|通用男声|
|1017|智蓉|情感女声|
|1018|智靖|情感男声|
 */
class TTSMode extends AbstractModel
{
    /**
     * @var float 语速，范围：[-2，2]，分别对应不同语速：
-2代表0.6倍
-1代表0.8倍
0代表1.0倍（默认）
1代表1.2倍
2代表1.5倍
如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
     */
    public $Speed;

    /**
     * @var integer 音色 ID，[音色体验地址](https://cloud.tencent.com/product/tts)。


|音乐ID|音色名称|推荐场景|
|--|--|--|
|1001|智瑜|情感女声|
|1002|智聆|通用女声|
|1003|智美|客服女声|
|1004|智云|通用男声|
|1005|智莉|通用女声|
|1007|智娜|客服女声|
|1008|智琪|客服女声|
|1009|智芸|知性女声|
|1010|智华|通用男声|
|1017|智蓉|情感女声|
|1018|智靖|情感男声|



     */
    public $VoiceType;

    /**
     * @param float $Speed 语速，范围：[-2，2]，分别对应不同语速：
-2代表0.6倍
-1代表0.8倍
0代表1.0倍（默认）
1代表1.2倍
2代表1.5倍
如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
     * @param integer $VoiceType 音色 ID，[音色体验地址](https://cloud.tencent.com/product/tts)。


|音乐ID|音色名称|推荐场景|
|--|--|--|
|1001|智瑜|情感女声|
|1002|智聆|通用女声|
|1003|智美|客服女声|
|1004|智云|通用男声|
|1005|智莉|通用女声|
|1007|智娜|客服女声|
|1008|智琪|客服女声|
|1009|智芸|知性女声|
|1010|智华|通用男声|
|1017|智蓉|情感女声|
|1018|智靖|情感男声|
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }
    }
}
