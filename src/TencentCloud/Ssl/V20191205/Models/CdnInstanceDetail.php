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
 * CDN实例详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getCertId() 获取已部署证书ID
 * @method void setCertId(string $CertId) 设置已部署证书ID
 * @method string getStatus() 获取域名状态
 * @method void setStatus(string $Status) 设置域名状态
 * @method string getHttpsBillingSwitch() 获取域名计费状态
 * @method void setHttpsBillingSwitch(string $HttpsBillingSwitch) 设置域名计费状态
 */
class CdnInstanceDetail extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 已部署证书ID
     */
    public $CertId;

    /**
     * @var string 域名状态
     */
    public $Status;

    /**
     * @var string 域名计费状态
     */
    public $HttpsBillingSwitch;

    /**
     * @param string $Domain 域名
     * @param string $CertId 已部署证书ID
     * @param string $Status 域名状态
     * @param string $HttpsBillingSwitch 域名计费状态
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HttpsBillingSwitch",$param) and $param["HttpsBillingSwitch"] !== null) {
            $this->HttpsBillingSwitch = $param["HttpsBillingSwitch"];
        }
    }
}
