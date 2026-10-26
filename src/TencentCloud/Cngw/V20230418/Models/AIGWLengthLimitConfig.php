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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关模型服务单次请求输入字符长度限制。只拒绝超限输入，不做截断。计量为整个请求 JSON 的 Unicode 字符数。
 *
 * @method boolean getEnableInputLimit() 获取<p>是否开启输入长度限制</p>
 * @method void setEnableInputLimit(boolean $EnableInputLimit) 设置<p>是否开启输入长度限制</p>
 * @method integer getMaxInputChars() 获取<p>最大输入长度字符数</p>
 * @method void setMaxInputChars(integer $MaxInputChars) 设置<p>最大输入长度字符数</p>
 */
class AIGWLengthLimitConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启输入长度限制</p>
     */
    public $EnableInputLimit;

    /**
     * @var integer <p>最大输入长度字符数</p>
     */
    public $MaxInputChars;

    /**
     * @param boolean $EnableInputLimit <p>是否开启输入长度限制</p>
     * @param integer $MaxInputChars <p>最大输入长度字符数</p>
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
        if (array_key_exists("EnableInputLimit",$param) and $param["EnableInputLimit"] !== null) {
            $this->EnableInputLimit = $param["EnableInputLimit"];
        }

        if (array_key_exists("MaxInputChars",$param) and $param["MaxInputChars"] !== null) {
            $this->MaxInputChars = $param["MaxInputChars"];
        }
    }
}
