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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频参数信息
 *
 * @method string getDefinition() 获取规格，取值有：
<li>audio/mi：低规格</li>
<li>audio/lo：中规格</li>
<li>audio/hi：高规格</li>
 * @method void setDefinition(string $Definition) 设置规格，取值有：
<li>audio/mi：低规格</li>
<li>audio/lo：中规格</li>
<li>audio/hi：高规格</li>
 * @method string getType() 获取音频类型，取值有：
<li>Original：原唱</li>
<li>Accompaniment：伴奏</li>
 * @method void setType(string $Type) 设置音频类型，取值有：
<li>Original：原唱</li>
<li>Accompaniment：伴奏</li>
 */
class SetAudioParamCommandInput extends AbstractModel
{
    /**
     * @var string 规格，取值有：
<li>audio/mi：低规格</li>
<li>audio/lo：中规格</li>
<li>audio/hi：高规格</li>
     */
    public $Definition;

    /**
     * @var string 音频类型，取值有：
<li>Original：原唱</li>
<li>Accompaniment：伴奏</li>
     */
    public $Type;

    /**
     * @param string $Definition 规格，取值有：
<li>audio/mi：低规格</li>
<li>audio/lo：中规格</li>
<li>audio/hi：高规格</li>
     * @param string $Type 音频类型，取值有：
<li>Original：原唱</li>
<li>Accompaniment：伴奏</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
