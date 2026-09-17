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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>实例ID列表，用于按实例ID筛选</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID列表，用于按实例ID筛选</p>
 * @method string getInstanceName() 获取<p>实例名称，支持模糊匹配</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称，支持模糊匹配</p>
 * @method string getZone() 获取<p>可用区代码，用于筛选指定可用区的实例</p>
 * @method void setZone(string $Zone) 设置<p>可用区代码，用于筛选指定可用区的实例</p>
 * @method array getInstanceStatus() 获取<p>实例状态列表，用于按状态筛选实例。可选值：allocating、running、isolating、isolated、terminating、error</p>
 * @method void setInstanceStatus(array $InstanceStatus) 设置<p>实例状态列表，用于按状态筛选实例。可选值：allocating、running、isolating、isolated、terminating、error</p>
 * @method string getPublicNetworkId() 获取<p>公网网络ID</p>
 * @method void setPublicNetworkId(string $PublicNetworkId) 设置<p>公网网络ID</p>
 * @method string getPrivateNetworkId() 获取<p>私有网络ID</p>
 * @method void setPrivateNetworkId(string $PrivateNetworkId) 设置<p>私有网络ID</p>
 * @method array getPublicIps() 获取<p>公网IPv4地址列表，用于按公网IP筛选实例</p>
 * @method void setPublicIps(array $PublicIps) 设置<p>公网IPv4地址列表，用于按公网IP筛选实例</p>
 * @method integer getOffset() 获取<p>偏移量，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大100</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>实例ID列表，用于按实例ID筛选</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>实例名称，支持模糊匹配</p>
     */
    public $InstanceName;

    /**
     * @var string <p>可用区代码，用于筛选指定可用区的实例</p>
     */
    public $Zone;

    /**
     * @var array <p>实例状态列表，用于按状态筛选实例。可选值：allocating、running、isolating、isolated、terminating、error</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>公网网络ID</p>
     */
    public $PublicNetworkId;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $PrivateNetworkId;

    /**
     * @var array <p>公网IPv4地址列表，用于按公网IP筛选实例</p>
     */
    public $PublicIps;

    /**
     * @var integer <p>偏移量，默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认20，最大100</p>
     */
    public $Limit;

    /**
     * @param array $InstanceIds <p>实例ID列表，用于按实例ID筛选</p>
     * @param string $InstanceName <p>实例名称，支持模糊匹配</p>
     * @param string $Zone <p>可用区代码，用于筛选指定可用区的实例</p>
     * @param array $InstanceStatus <p>实例状态列表，用于按状态筛选实例。可选值：allocating、running、isolating、isolated、terminating、error</p>
     * @param string $PublicNetworkId <p>公网网络ID</p>
     * @param string $PrivateNetworkId <p>私有网络ID</p>
     * @param array $PublicIps <p>公网IPv4地址列表，用于按公网IP筛选实例</p>
     * @param integer $Offset <p>偏移量，默认0</p>
     * @param integer $Limit <p>返回数量，默认20，最大100</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
        }

        if (array_key_exists("PublicIps",$param) and $param["PublicIps"] !== null) {
            $this->PublicIps = $param["PublicIps"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
