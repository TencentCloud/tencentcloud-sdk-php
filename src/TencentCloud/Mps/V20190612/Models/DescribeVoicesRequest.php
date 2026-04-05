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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVoices请求参数结构体
 *
 * @method string getVoiceType() 获取<p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
 * @method void setVoiceType(string $VoiceType) 设置<p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
 */
class DescribeVoicesRequest extends AbstractModel
{
    /**
     * @var string <p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
     */
    public $VoiceType;

    /**
     * @var string <p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceType <p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
     * @param string $ExtParam <p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
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
        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
