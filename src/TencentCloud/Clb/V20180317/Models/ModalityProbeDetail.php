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
 * 每个待探测模态的详细结果。
 *
 * @method string getModality() 获取<p>探测的模态</p>
 * @method void setModality(string $Modality) 设置<p>探测的模态</p>
 * @method string getStatus() 获取<p>探测结果</p><p>枚举值：</p><ul><li>Supported： 模型支持该输入模态</li><li>Unsupported： 模型不支持该输入模态</li><li>Inconclusive： 模型未明确是否支持该模态，待重新探测</li></ul>
 * @method void setStatus(string $Status) 设置<p>探测结果</p><p>枚举值：</p><ul><li>Supported： 模型支持该输入模态</li><li>Unsupported： 模型不支持该输入模态</li><li>Inconclusive： 模型未明确是否支持该模态，待重新探测</li></ul>
 * @method ProviderTestConnectionErrorInfo getErrorInfo() 获取<p>探测该模态请求的报错详情</p>
 * @method void setErrorInfo(ProviderTestConnectionErrorInfo $ErrorInfo) 设置<p>探测该模态请求的报错详情</p>
 */
class ModalityProbeDetail extends AbstractModel
{
    /**
     * @var string <p>探测的模态</p>
     */
    public $Modality;

    /**
     * @var string <p>探测结果</p><p>枚举值：</p><ul><li>Supported： 模型支持该输入模态</li><li>Unsupported： 模型不支持该输入模态</li><li>Inconclusive： 模型未明确是否支持该模态，待重新探测</li></ul>
     */
    public $Status;

    /**
     * @var ProviderTestConnectionErrorInfo <p>探测该模态请求的报错详情</p>
     */
    public $ErrorInfo;

    /**
     * @param string $Modality <p>探测的模态</p>
     * @param string $Status <p>探测结果</p><p>枚举值：</p><ul><li>Supported： 模型支持该输入模态</li><li>Unsupported： 模型不支持该输入模态</li><li>Inconclusive： 模型未明确是否支持该模态，待重新探测</li></ul>
     * @param ProviderTestConnectionErrorInfo $ErrorInfo <p>探测该模态请求的报错详情</p>
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
        if (array_key_exists("Modality",$param) and $param["Modality"] !== null) {
            $this->Modality = $param["Modality"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = new ProviderTestConnectionErrorInfo();
            $this->ErrorInfo->deserialize($param["ErrorInfo"]);
        }
    }
}
