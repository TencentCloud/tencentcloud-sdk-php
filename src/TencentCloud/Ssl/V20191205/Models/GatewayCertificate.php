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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关证书信息
 *
 * @method string getId() 获取网关证书ID
 * @method void setId(string $Id) 设置网关证书ID
 * @method string getName() 获取网关证书名称
 * @method void setName(string $Name) 设置网关证书名称
 * @method array getBindDomains() 获取绑定域名
 * @method void setBindDomains(array $BindDomains) 设置绑定域名
 * @method string getCertSource() 获取证书来源
 * @method void setCertSource(string $CertSource) 设置证书来源
 * @method string getCertId() 获取当前绑定的SSL证书ID
 * @method void setCertId(string $CertId) 设置当前绑定的SSL证书ID
 */
class GatewayCertificate extends AbstractModel
{
    /**
     * @var string 网关证书ID
     */
    public $Id;

    /**
     * @var string 网关证书名称
     */
    public $Name;

    /**
     * @var array 绑定域名
     */
    public $BindDomains;

    /**
     * @var string 证书来源
     */
    public $CertSource;

    /**
     * @var string 当前绑定的SSL证书ID
     */
    public $CertId;

    /**
     * @param string $Id 网关证书ID
     * @param string $Name 网关证书名称
     * @param array $BindDomains 绑定域名
     * @param string $CertSource 证书来源
     * @param string $CertId 当前绑定的SSL证书ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
