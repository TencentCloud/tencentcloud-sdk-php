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
 * 自定义域名信息
 *
 * @method string getRegistryId() 获取实例ID
 * @method void setRegistryId(string $RegistryId) 设置实例ID
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method string getDomainName() 获取域名名称
 * @method void setDomainName(string $DomainName) 设置域名名称
 * @method string getStatus() 获取域名创建状态（SUCCESS, FAILURE, CREATING, DELETING）
 * @method void setStatus(string $Status) 设置域名创建状态（SUCCESS, FAILURE, CREATING, DELETING）
 */
class CustomizedDomainInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $RegistryId;

    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var string 域名名称
     */
    public $DomainName;

    /**
     * @var string 域名创建状态（SUCCESS, FAILURE, CREATING, DELETING）
     */
    public $Status;

    /**
     * @param string $RegistryId 实例ID
     * @param string $CertId 证书ID
     * @param string $DomainName 域名名称
     * @param string $Status 域名创建状态（SUCCESS, FAILURE, CREATING, DELETING）
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
