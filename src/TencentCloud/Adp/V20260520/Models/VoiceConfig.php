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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoiceConfig
 *
 * @method string getTimbreKey() 获取数智人音色key,需要和公有云音色id对齐
 * @method void setTimbreKey(string $TimbreKey) 设置数智人音色key,需要和公有云音色id对齐
 * @method string getVoiceName() 获取音色名称
 * @method void setVoiceName(string $VoiceName) 设置音色名称
 * @method integer getVoiceType() 获取公有云音色id
 * @method void setVoiceType(integer $VoiceType) 设置公有云音色id
 */
class VoiceConfig extends AbstractModel
{
    /**
     * @var string 数智人音色key,需要和公有云音色id对齐
     */
    public $TimbreKey;

    /**
     * @var string 音色名称
     */
    public $VoiceName;

    /**
     * @var integer 公有云音色id
     */
    public $VoiceType;

    /**
     * @param string $TimbreKey 数智人音色key,需要和公有云音色id对齐
     * @param string $VoiceName 音色名称
     * @param integer $VoiceType 公有云音色id
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
        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }
    }
}
