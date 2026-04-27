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
 * @method integer getCustomerId() 获取<p>企业Id</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>企业Id</p>
 * @method string getSubDomain() 获取<p>子域名</p>
 * @method void setSubDomain(string $SubDomain) 设置<p>子域名</p>
 * @method string getIp() 获取<p>Ip</p>
 * @method void setIp(string $Ip) 设置<p>Ip</p>
 * @method string getCountry() 获取<p>国家</p>
 * @method void setCountry(string $Country) 设置<p>国家</p>
 * @method string getProvince() 获取<p>省</p>
 * @method void setProvince(string $Province) 设置<p>省</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 * @method string getIsp() 获取<p>Isp</p>
 * @method void setIsp(string $Isp) 设置<p>Isp</p>
 * @method string getEnterpriseUid() 获取<p>子公司</p>
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置<p>子公司</p>
 * @method string getDnsType() 获取<p>DNS解析类型。A、AAAA、CNAME等</p>
 * @method void setDnsType(string $DnsType) 设置<p>DNS解析类型。A、AAAA、CNAME等</p>
 * @method string getDnsValue() 获取<p>DNS解析值。域名或者ip</p>
 * @method void setDnsValue(string $DnsValue) 设置<p>DNS解析值。域名或者ip</p>
 */
class CreateSubDomainRequest extends AbstractModel
{
    /**
     * @var integer <p>企业Id</p>
     */
    public $CustomerId;

    /**
     * @var string <p>子域名</p>
     */
    public $SubDomain;

    /**
     * @var string <p>Ip</p>
     */
    public $Ip;

    /**
     * @var string <p>国家</p>
     */
    public $Country;

    /**
     * @var string <p>省</p>
     */
    public $Province;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @var string <p>Isp</p>
     */
    public $Isp;

    /**
     * @var string <p>子公司</p>
     */
    public $EnterpriseUid;

    /**
     * @var string <p>DNS解析类型。A、AAAA、CNAME等</p>
     */
    public $DnsType;

    /**
     * @var string <p>DNS解析值。域名或者ip</p>
     */
    public $DnsValue;

    /**
     * @param integer $CustomerId <p>企业Id</p>
     * @param string $SubDomain <p>子域名</p>
     * @param string $Ip <p>Ip</p>
     * @param string $Country <p>国家</p>
     * @param string $Province <p>省</p>
     * @param string $City <p>城市</p>
     * @param string $Isp <p>Isp</p>
     * @param string $EnterpriseUid <p>子公司</p>
     * @param string $DnsType <p>DNS解析类型。A、AAAA、CNAME等</p>
     * @param string $DnsValue <p>DNS解析值。域名或者ip</p>
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

        if (array_key_exists("DnsType",$param) and $param["DnsType"] !== null) {
            $this->DnsType = $param["DnsType"];
        }

        if (array_key_exists("DnsValue",$param) and $param["DnsValue"] !== null) {
            $this->DnsValue = $param["DnsValue"];
        }
    }
}
