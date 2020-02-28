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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCertificatePublicKey() 获取证书公钥。
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置证书公钥。
 * @method string getCertificatePrivateKey() 获取私钥内容，证书类型为SVR时必填，为CA时可不填。
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置私钥内容，证书类型为SVR时必填，为CA时可不填。
 * @method string getCertificateType() 获取证书类型，可选值：CA，SVR，默认SVR。
 * @method void setCertificateType(string $CertificateType) 设置证书类型，可选值：CA，SVR，默认SVR。
 * @method string getAlias() 获取证书别名。
 * @method void setAlias(string $Alias) 设置证书别名。
 * @method integer getProjectId() 获取项目id。
 * @method void setProjectId(integer $ProjectId) 设置项目id。
 */

/**
 *UploadCertificate请求参数结构体
 */
class UploadCertificateRequest extends AbstractModel
{
    /**
     * @var string 证书公钥。
     */
    public $CertificatePublicKey;

    /**
     * @var string 私钥内容，证书类型为SVR时必填，为CA时可不填。
     */
    public $CertificatePrivateKey;

    /**
     * @var string 证书类型，可选值：CA，SVR，默认SVR。
     */
    public $CertificateType;

    /**
     * @var string 证书别名。
     */
    public $Alias;

    /**
     * @var integer 项目id。
     */
    public $ProjectId;
    /**
     * @param string $CertificatePublicKey 证书公钥。
     * @param string $CertificatePrivateKey 私钥内容，证书类型为SVR时必填，为CA时可不填。
     * @param string $CertificateType 证书类型，可选值：CA，SVR，默认SVR。
     * @param string $Alias 证书别名。
     * @param integer $ProjectId 项目id。
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
        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
