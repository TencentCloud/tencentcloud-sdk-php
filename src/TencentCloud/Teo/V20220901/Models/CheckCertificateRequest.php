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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckCertificate请求参数结构体
 *
 * @method string getCertificate() 获取证书内容。
 * @method void setCertificate(string $Certificate) 设置证书内容。
 * @method string getPrivateKey() 获取私钥内容。
 * @method void setPrivateKey(string $PrivateKey) 设置私钥内容。
 */
class CheckCertificateRequest extends AbstractModel
{
    /**
     * @var string 证书内容。
     */
    public $Certificate;

    /**
     * @var string 私钥内容。
     */
    public $PrivateKey;

    /**
     * @param string $Certificate 证书内容。
     * @param string $PrivateKey 私钥内容。
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
        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}
