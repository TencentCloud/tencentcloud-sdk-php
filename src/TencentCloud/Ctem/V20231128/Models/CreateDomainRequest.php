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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomain请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method string getDomain() 获取主域名
 * @method void setDomain(string $Domain) 设置主域名
 * @method string getICP() 获取ICP
 * @method void setICP(string $ICP) 设置ICP
 * @method string getRegisteredTime() 获取注册时间
 * @method void setRegisteredTime(string $RegisteredTime) 设置注册时间
 * @method string getExpiredTime() 获取过期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置过期时间
 * @method string getCompany() 获取公司
 * @method void setCompany(string $Company) 设置公司
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 */
class CreateDomainRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CustomerId;

    /**
     * @var string 主域名
     */
    public $Domain;

    /**
     * @var string ICP
     */
    public $ICP;

    /**
     * @var string 注册时间
     */
    public $RegisteredTime;

    /**
     * @var string 过期时间
     */
    public $ExpiredTime;

    /**
     * @var string 公司
     */
    public $Company;

    /**
     * @var string 子公司
     */
    public $EnterpriseUid;

    /**
     * @param integer $CustomerId 企业Id
     * @param string $Domain 主域名
     * @param string $ICP ICP
     * @param string $RegisteredTime 注册时间
     * @param string $ExpiredTime 过期时间
     * @param string $Company 公司
     * @param string $EnterpriseUid 子公司
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ICP",$param) and $param["ICP"] !== null) {
            $this->ICP = $param["ICP"];
        }

        if (array_key_exists("RegisteredTime",$param) and $param["RegisteredTime"] !== null) {
            $this->RegisteredTime = $param["RegisteredTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = $param["Company"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }
    }
}
