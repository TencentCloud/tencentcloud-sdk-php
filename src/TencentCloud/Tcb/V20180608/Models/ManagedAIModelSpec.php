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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管 AI 模型参数规格
 *
 * @method string getMaxInputToken() 获取<p>最大输入 Token</p>
 * @method void setMaxInputToken(string $MaxInputToken) 设置<p>最大输入 Token</p>
 * @method string getMaxOutputToken() 获取<p>最大输出 Token</p>
 * @method void setMaxOutputToken(string $MaxOutputToken) 设置<p>最大输出 Token</p>
 * @method string getContextLength() 获取<p>上下文长度</p>
 * @method void setContextLength(string $ContextLength) 设置<p>上下文长度</p>
 */
class ManagedAIModelSpec extends AbstractModel
{
    /**
     * @var string <p>最大输入 Token</p>
     */
    public $MaxInputToken;

    /**
     * @var string <p>最大输出 Token</p>
     */
    public $MaxOutputToken;

    /**
     * @var string <p>上下文长度</p>
     */
    public $ContextLength;

    /**
     * @param string $MaxInputToken <p>最大输入 Token</p>
     * @param string $MaxOutputToken <p>最大输出 Token</p>
     * @param string $ContextLength <p>上下文长度</p>
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
        if (array_key_exists("MaxInputToken",$param) and $param["MaxInputToken"] !== null) {
            $this->MaxInputToken = $param["MaxInputToken"];
        }

        if (array_key_exists("MaxOutputToken",$param) and $param["MaxOutputToken"] !== null) {
            $this->MaxOutputToken = $param["MaxOutputToken"];
        }

        if (array_key_exists("ContextLength",$param) and $param["ContextLength"] !== null) {
            $this->ContextLength = $param["ContextLength"];
        }
    }
}
