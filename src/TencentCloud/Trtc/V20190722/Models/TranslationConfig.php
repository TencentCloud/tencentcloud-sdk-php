<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译相关配置
 *
 * @method array getTargetLanguages() 获取翻译的目标语言，目标语种列表（ISO 639-1）

 * @method void setTargetLanguages(array $TargetLanguages) 设置翻译的目标语言，目标语种列表（ISO 639-1）

 * @method integer getMode() 获取 1： 仅文字翻译，  2： 语音同传

 * @method void setMode(integer $Mode) 设置 1： 仅文字翻译，  2： 语音同传

 * @method TTSConfig getTTSConfig() 获取语音同传配置，开启同传时，需要传递
 * @method void setTTSConfig(TTSConfig $TTSConfig) 设置语音同传配置，开启同传时，需要传递
 * @method array getTerminology() 获取翻译术语集合
 * @method void setTerminology(array $Terminology) 设置翻译术语集合
 */
class TranslationConfig extends AbstractModel
{
    /**
     * @var array 翻译的目标语言，目标语种列表（ISO 639-1）

     */
    public $TargetLanguages;

    /**
     * @var integer  1： 仅文字翻译，  2： 语音同传

     */
    public $Mode;

    /**
     * @var TTSConfig 语音同传配置，开启同传时，需要传递
     */
    public $TTSConfig;

    /**
     * @var array 翻译术语集合
     */
    public $Terminology;

    /**
     * @param array $TargetLanguages 翻译的目标语言，目标语种列表（ISO 639-1）

     * @param integer $Mode  1： 仅文字翻译，  2： 语音同传

     * @param TTSConfig $TTSConfig 语音同传配置，开启同传时，需要传递
     * @param array $Terminology 翻译术语集合
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
        if (array_key_exists("TargetLanguages",$param) and $param["TargetLanguages"] !== null) {
            $this->TargetLanguages = $param["TargetLanguages"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new TTSConfig();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("Terminology",$param) and $param["Terminology"] !== null) {
            $this->Terminology = [];
            foreach ($param["Terminology"] as $key => $value){
                $obj = new Terminology();
                $obj->deserialize($value);
                array_push($this->Terminology, $obj);
            }
        }
    }
}
