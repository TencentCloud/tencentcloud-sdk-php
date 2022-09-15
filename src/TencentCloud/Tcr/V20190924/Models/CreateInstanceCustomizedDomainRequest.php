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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceCustomizedDomain请求参数结构体
 *
 * @method string getRegistryId() 获取主实例iD
 * @method void setRegistryId(string $RegistryId) 设置主实例iD
 * @method string getDomainName() 获取自定义域名
 * @method void setDomainName(string $DomainName) 设置自定义域名
 * @method string getCertificateId() 获取证书ID
 * @method void setCertificateId(string $CertificateId) 设置证书ID
 */
class CreateInstanceCustomizedDomainRequest extends AbstractModel
{
    /**
     * @var string 主实例iD
     */
    public $RegistryId;

    /**
     * @var string 自定义域名
     */
    public $DomainName;

    /**
     * @var string 证书ID
     */
    public $CertificateId;

    /**
     * @param string $RegistryId 主实例iD
     * @param string $DomainName 自定义域名
     * @param string $CertificateId 证书ID
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }
    }
}
