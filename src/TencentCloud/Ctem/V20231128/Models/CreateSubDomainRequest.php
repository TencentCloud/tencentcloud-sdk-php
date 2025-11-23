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
 * CreateSubDomain请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method string getSubDomain() 获取子域名
 * @method void setSubDomain(string $SubDomain) 设置子域名
 * @method string getIp() 获取Ip
 * @method void setIp(string $Ip) 设置Ip
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getIsp() 获取Isp
 * @method void setIsp(string $Isp) 设置Isp
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 */
class CreateSubDomainRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CustomerId;

    /**
     * @var string 子域名
     */
    public $SubDomain;

    /**
     * @var string Ip
     */
    public $Ip;

    /**
     * @var string 国家
     */
    public $Country;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string Isp
     */
    public $Isp;

    /**
     * @var string 子公司
     */
    public $EnterpriseUid;

    /**
     * @param integer $CustomerId 企业Id
     * @param string $SubDomain 子域名
     * @param string $Ip Ip
     * @param string $Country 国家
     * @param string $Province 省
     * @param string $City 城市
     * @param string $Isp Isp
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

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }
    }
}
