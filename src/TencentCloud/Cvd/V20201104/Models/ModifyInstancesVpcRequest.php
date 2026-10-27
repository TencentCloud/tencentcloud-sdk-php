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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesVpc请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>实例ID数组</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID数组</p>
 * @method string getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method array getDnsServerSet() 获取<p>租户vpc的dns</p><p>参数格式：“189.0.01”</p>
 * @method void setDnsServerSet(array $DnsServerSet) 设置<p>租户vpc的dns</p><p>参数格式：“189.0.01”</p>
 */
class ModifyInstancesVpcRequest extends AbstractModel
{
    /**
     * @var array <p>实例ID数组</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var array <p>租户vpc的dns</p><p>参数格式：“189.0.01”</p>
     */
    public $DnsServerSet;

    /**
     * @param array $InstanceIds <p>实例ID数组</p>
     * @param string $VpcId <p>私有网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param array $DnsServerSet <p>租户vpc的dns</p><p>参数格式：“189.0.01”</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DnsServerSet",$param) and $param["DnsServerSet"] !== null) {
            $this->DnsServerSet = $param["DnsServerSet"];
        }
    }
}
