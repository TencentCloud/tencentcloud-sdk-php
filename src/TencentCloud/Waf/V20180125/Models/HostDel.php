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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB-WAF删除域名参数
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getDomainId() 获取<p>域名ID，使用DescribeDomains接口可以查询获取</p>
 * @method void setDomainId(string $DomainId) 设置<p>域名ID，使用DescribeDomains接口可以查询获取</p>
 * @method string getInstanceID() 获取<p>实例类型</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例类型</p>
 */
class HostDel extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>域名ID，使用DescribeDomains接口可以查询获取</p>
     */
    public $DomainId;

    /**
     * @var string <p>实例类型</p>
     */
    public $InstanceID;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $DomainId <p>域名ID，使用DescribeDomains接口可以查询获取</p>
     * @param string $InstanceID <p>实例类型</p>
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
