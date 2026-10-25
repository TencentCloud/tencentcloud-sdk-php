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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateCA请求参数结构体
 *
 * @method string getCertName() 获取<p>证书名称，长度 1~32 个字符。</p>
 * @method void setCertName(string $CertName) 设置<p>证书名称，长度 1~32 个字符。</p>
 * @method string getCertText() 获取<p>证书内容，PEM 格式文本，需为 CA 证书。</p>
 * @method void setCertText(string $CertText) 设置<p>证书内容，PEM 格式文本，需为 CA 证书。</p>
 * @method string getVerifyCertText() 获取<p>验证证书内容，PEM 格式文本。须由所上传的 CA 签发，且 CN 为 sha256(&quot;iothub_主账号Uin&quot;) 的小写十六进制值，用于验证您持有 CA 私钥。</p>
 * @method void setVerifyCertText(string $VerifyCertText) 设置<p>验证证书内容，PEM 格式文本。须由所上传的 CA 签发，且 CN 为 sha256(&quot;iothub_主账号Uin&quot;) 的小写十六进制值，用于验证您持有 CA 私钥。</p>
 */
class CreatePrivateCARequest extends AbstractModel
{
    /**
     * @var string <p>证书名称，长度 1~32 个字符。</p>
     */
    public $CertName;

    /**
     * @var string <p>证书内容，PEM 格式文本，需为 CA 证书。</p>
     */
    public $CertText;

    /**
     * @var string <p>验证证书内容，PEM 格式文本。须由所上传的 CA 签发，且 CN 为 sha256(&quot;iothub_主账号Uin&quot;) 的小写十六进制值，用于验证您持有 CA 私钥。</p>
     */
    public $VerifyCertText;

    /**
     * @param string $CertName <p>证书名称，长度 1~32 个字符。</p>
     * @param string $CertText <p>证书内容，PEM 格式文本，需为 CA 证书。</p>
     * @param string $VerifyCertText <p>验证证书内容，PEM 格式文本。须由所上传的 CA 签发，且 CN 为 sha256(&quot;iothub_主账号Uin&quot;) 的小写十六进制值，用于验证您持有 CA 私钥。</p>
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertText",$param) and $param["CertText"] !== null) {
            $this->CertText = $param["CertText"];
        }

        if (array_key_exists("VerifyCertText",$param) and $param["VerifyCertText"] !== null) {
            $this->VerifyCertText = $param["VerifyCertText"];
        }
    }
}
