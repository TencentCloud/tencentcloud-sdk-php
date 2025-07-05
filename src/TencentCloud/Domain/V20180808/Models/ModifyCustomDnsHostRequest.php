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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomDnsHost请求参数结构体
 *
 * @method string getDomainId() 获取域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
 * @method void setDomainId(string $DomainId) 设置域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
 * @method string getDnsName() 获取Dns名称 例如：<>.test.com;其中<>就是Dns名称，可以是任意域名允许的格式
 * @method void setDnsName(string $DnsName) 设置Dns名称 例如：<>.test.com;其中<>就是Dns名称，可以是任意域名允许的格式
 * @method array getIpSet() 获取IP地址列表 可选择：正常IP地址范围
 * @method void setIpSet(array $IpSet) 设置IP地址列表 可选择：正常IP地址范围
 */
class ModifyCustomDnsHostRequest extends AbstractModel
{
    /**
     * @var string 域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
     */
    public $DomainId;

    /**
     * @var string Dns名称 例如：<>.test.com;其中<>就是Dns名称，可以是任意域名允许的格式
     */
    public $DnsName;

    /**
     * @var array IP地址列表 可选择：正常IP地址范围
     */
    public $IpSet;

    /**
     * @param string $DomainId 域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
     * @param string $DnsName Dns名称 例如：<>.test.com;其中<>就是Dns名称，可以是任意域名允许的格式
     * @param array $IpSet IP地址列表 可选择：正常IP地址范围
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("IpSet",$param) and $param["IpSet"] !== null) {
            $this->IpSet = $param["IpSet"];
        }
    }
}
