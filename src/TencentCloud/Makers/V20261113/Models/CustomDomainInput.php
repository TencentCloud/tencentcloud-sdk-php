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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定自定义域名时的域名项
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getCertificateId() 获取<p>证书 ID</p>
 * @method void setCertificateId(string $CertificateId) 设置<p>证书 ID</p>
 * @method string getStatus() 获取<p>校验状态。Verify、Pass、Fail</p>
 * @method void setStatus(string $Status) 设置<p>校验状态。Verify、Pass、Fail</p>
 * @method boolean getNoCertificate() 获取<p>是否不申请证书</p>
 * @method void setNoCertificate(boolean $NoCertificate) 设置<p>是否不申请证书</p>
 */
class CustomDomainInput extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>证书 ID</p>
     */
    public $CertificateId;

    /**
     * @var string <p>校验状态。Verify、Pass、Fail</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否不申请证书</p>
     */
    public $NoCertificate;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $CertificateId <p>证书 ID</p>
     * @param string $Status <p>校验状态。Verify、Pass、Fail</p>
     * @param boolean $NoCertificate <p>是否不申请证书</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NoCertificate",$param) and $param["NoCertificate"] !== null) {
            $this->NoCertificate = $param["NoCertificate"];
        }
    }
}
