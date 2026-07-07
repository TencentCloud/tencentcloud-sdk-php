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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BYOK健康检查错误信息
 *
 * @method integer getHttpCode() 获取<p>上游模型侧返回的HTTP状态码</p>
 * @method void setHttpCode(integer $HttpCode) 设置<p>上游模型侧返回的HTTP状态码</p>
 * @method string getErrorStatus() 获取<p>错误状态码</p>
 * @method void setErrorStatus(string $ErrorStatus) 设置<p>错误状态码</p>
 * @method string getOriginalMessage() 获取<p>探测请求错误信息</p>
 * @method void setOriginalMessage(string $OriginalMessage) 设置<p>探测请求错误信息</p>
 */
class ProviderTestConnectionErrorInfo extends AbstractModel
{
    /**
     * @var integer <p>上游模型侧返回的HTTP状态码</p>
     */
    public $HttpCode;

    /**
     * @var string <p>错误状态码</p>
     */
    public $ErrorStatus;

    /**
     * @var string <p>探测请求错误信息</p>
     */
    public $OriginalMessage;

    /**
     * @param integer $HttpCode <p>上游模型侧返回的HTTP状态码</p>
     * @param string $ErrorStatus <p>错误状态码</p>
     * @param string $OriginalMessage <p>探测请求错误信息</p>
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("ErrorStatus",$param) and $param["ErrorStatus"] !== null) {
            $this->ErrorStatus = $param["ErrorStatus"];
        }

        if (array_key_exists("OriginalMessage",$param) and $param["OriginalMessage"] !== null) {
            $this->OriginalMessage = $param["OriginalMessage"];
        }
    }
}
