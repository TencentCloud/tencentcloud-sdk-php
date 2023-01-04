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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书信息
 *
 * @method string getCertId() 获取证书 ID，如果不填写此项则必须上传证书内容，包括CertName, CertContent，若为服务端证书必须包含CertKey。
 * @method void setCertId(string $CertId) 设置证书 ID，如果不填写此项则必须上传证书内容，包括CertName, CertContent，若为服务端证书必须包含CertKey。
 * @method string getCertName() 获取上传证书的名称，如果没有 CertId，则此项必传。
 * @method void setCertName(string $CertName) 设置上传证书的名称，如果没有 CertId，则此项必传。
 * @method string getCertContent() 获取上传证书的公钥；如果没有 CertId，则此项必传。
 * @method void setCertContent(string $CertContent) 设置上传证书的公钥；如果没有 CertId，则此项必传。
 * @method string getCertKey() 获取上传服务端证书的私钥；如果没有 CertId，则此项必传。
 * @method void setCertKey(string $CertKey) 设置上传服务端证书的私钥；如果没有 CertId，则此项必传。
 */
class CertInfo extends AbstractModel
{
    /**
     * @var string 证书 ID，如果不填写此项则必须上传证书内容，包括CertName, CertContent，若为服务端证书必须包含CertKey。
     */
    public $CertId;

    /**
     * @var string 上传证书的名称，如果没有 CertId，则此项必传。
     */
    public $CertName;

    /**
     * @var string 上传证书的公钥；如果没有 CertId，则此项必传。
     */
    public $CertContent;

    /**
     * @var string 上传服务端证书的私钥；如果没有 CertId，则此项必传。
     */
    public $CertKey;

    /**
     * @param string $CertId 证书 ID，如果不填写此项则必须上传证书内容，包括CertName, CertContent，若为服务端证书必须包含CertKey。
     * @param string $CertName 上传证书的名称，如果没有 CertId，则此项必传。
     * @param string $CertContent 上传证书的公钥；如果没有 CertId，则此项必传。
     * @param string $CertKey 上传服务端证书的私钥；如果没有 CertId，则此项必传。
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertKey",$param) and $param["CertKey"] !== null) {
            $this->CertKey = $param["CertKey"];
        }
    }
}
