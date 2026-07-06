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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型规格信息
 *
 * @method string getTPM() 获取每分钟处理 Token 数（Tokens Per Minute）。
 * @method void setTPM(string $TPM) 设置每分钟处理 Token 数（Tokens Per Minute）。
 * @method string getQPM() 获取每分钟请求数（Queries Per Minute）。
 * @method void setQPM(string $QPM) 设置每分钟请求数（Queries Per Minute）。
 * @method string getMaxInputToken() 获取最大输入 Token 长度。
 * @method void setMaxInputToken(string $MaxInputToken) 设置最大输入 Token 长度。
 * @method string getMaxOutputToken() 获取最大输出 Token 长度。
 * @method void setMaxOutputToken(string $MaxOutputToken) 设置最大输出 Token 长度。
 * @method string getContextLength() 获取上下文窗口长度。
 * @method void setContextLength(string $ContextLength) 设置上下文窗口长度。
 * @method string getConcurrency() 获取并发数。
 * @method void setConcurrency(string $Concurrency) 设置并发数。
 * @method string getInputDescription() 获取输入要求描述。
 * @method void setInputDescription(string $InputDescription) 设置输入要求描述。
 */
class ModelSpec extends AbstractModel
{
    /**
     * @var string 每分钟处理 Token 数（Tokens Per Minute）。
     */
    public $TPM;

    /**
     * @var string 每分钟请求数（Queries Per Minute）。
     */
    public $QPM;

    /**
     * @var string 最大输入 Token 长度。
     */
    public $MaxInputToken;

    /**
     * @var string 最大输出 Token 长度。
     */
    public $MaxOutputToken;

    /**
     * @var string 上下文窗口长度。
     */
    public $ContextLength;

    /**
     * @var string 并发数。
     */
    public $Concurrency;

    /**
     * @var string 输入要求描述。
     */
    public $InputDescription;

    /**
     * @param string $TPM 每分钟处理 Token 数（Tokens Per Minute）。
     * @param string $QPM 每分钟请求数（Queries Per Minute）。
     * @param string $MaxInputToken 最大输入 Token 长度。
     * @param string $MaxOutputToken 最大输出 Token 长度。
     * @param string $ContextLength 上下文窗口长度。
     * @param string $Concurrency 并发数。
     * @param string $InputDescription 输入要求描述。
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
        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }

        if (array_key_exists("QPM",$param) and $param["QPM"] !== null) {
            $this->QPM = $param["QPM"];
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

        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("InputDescription",$param) and $param["InputDescription"] !== null) {
            $this->InputDescription = $param["InputDescription"];
        }
    }
}
