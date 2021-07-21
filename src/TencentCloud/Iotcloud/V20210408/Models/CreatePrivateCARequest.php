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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateCA请求参数结构体
 *
 * @method string getCertName() 获取CA证书名称
 * @method void setCertName(string $CertName) 设置CA证书名称
 * @method string getCertText() 获取CA证书内容
 * @method void setCertText(string $CertText) 设置CA证书内容
 * @method string getVerifyCertText() 获取校验CA证书的证书内容
 * @method void setVerifyCertText(string $VerifyCertText) 设置校验CA证书的证书内容
 */
class CreatePrivateCARequest extends AbstractModel
{
    /**
     * @var string CA证书名称
     */
    public $CertName;

    /**
     * @var string CA证书内容
     */
    public $CertText;

    /**
     * @var string 校验CA证书的证书内容
     */
    public $VerifyCertText;

    /**
     * @param string $CertName CA证书名称
     * @param string $CertText CA证书内容
     * @param string $VerifyCertText 校验CA证书的证书内容
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
