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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ivr 按键信息
 *
 * @method string getKey() 获取命中的关键字或者按键
 * @method void setKey(string $Key) 设置命中的关键字或者按键
 * @method string getLabel() 获取按键关联的标签
 * @method void setLabel(string $Label) 设置按键关联的标签
 * @method integer getTimestamp() 获取Unix 毫秒时间戳
 * @method void setTimestamp(integer $Timestamp) 设置Unix 毫秒时间戳
 * @method string getNodeLabel() 获取节点标签
 * @method void setNodeLabel(string $NodeLabel) 设置节点标签
 * @method string getOriginalContent() 获取用户原始输入
 * @method void setOriginalContent(string $OriginalContent) 设置用户原始输入
 * @method string getTTSPrompt() 获取TTS 提示音内容
 * @method void setTTSPrompt(string $TTSPrompt) 设置TTS 提示音内容
 */
class IVRKeyPressedElement extends AbstractModel
{
    /**
     * @var string 命中的关键字或者按键
     */
    public $Key;

    /**
     * @var string 按键关联的标签
     */
    public $Label;

    /**
     * @var integer Unix 毫秒时间戳
     */
    public $Timestamp;

    /**
     * @var string 节点标签
     */
    public $NodeLabel;

    /**
     * @var string 用户原始输入
     */
    public $OriginalContent;

    /**
     * @var string TTS 提示音内容
     */
    public $TTSPrompt;

    /**
     * @param string $Key 命中的关键字或者按键
     * @param string $Label 按键关联的标签
     * @param integer $Timestamp Unix 毫秒时间戳
     * @param string $NodeLabel 节点标签
     * @param string $OriginalContent 用户原始输入
     * @param string $TTSPrompt TTS 提示音内容
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("NodeLabel",$param) and $param["NodeLabel"] !== null) {
            $this->NodeLabel = $param["NodeLabel"];
        }

        if (array_key_exists("OriginalContent",$param) and $param["OriginalContent"] !== null) {
            $this->OriginalContent = $param["OriginalContent"];
        }

        if (array_key_exists("TTSPrompt",$param) and $param["TTSPrompt"] !== null) {
            $this->TTSPrompt = $param["TTSPrompt"];
        }
    }
}
