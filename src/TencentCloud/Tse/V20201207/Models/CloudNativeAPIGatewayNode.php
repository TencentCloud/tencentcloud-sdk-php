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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生API网关节点信息。
 *
 * @method string getNodeId() 获取云原生网关节点 id
 * @method void setNodeId(string $NodeId) 设置云原生网关节点 id
 * @method string getNodeIp() 获取节点 ip
 * @method void setNodeIp(string $NodeIp) 设置节点 ip
 * @method string getZoneId() 获取Zone id
 * @method void setZoneId(string $ZoneId) 设置Zone id
 * @method string getZone() 获取Zone
 * @method void setZone(string $Zone) 设置Zone
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupName() 获取分组名
 * @method void setGroupName(string $GroupName) 设置分组名
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method integer getWeight() 获取节点权重
 * @method void setWeight(integer $Weight) 设置节点权重
 * @method boolean getIsDefaultWeight() 获取是否默认权重
 * @method void setIsDefaultWeight(boolean $IsDefaultWeight) 设置是否默认权重
 */
class CloudNativeAPIGatewayNode extends AbstractModel
{
    /**
     * @var string 云原生网关节点 id
     */
    public $NodeId;

    /**
     * @var string 节点 ip
     */
    public $NodeIp;

    /**
     * @var string Zone id
     */
    public $ZoneId;

    /**
     * @var string Zone
     */
    public $Zone;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组名
     */
    public $GroupName;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var integer 节点权重
     */
    public $Weight;

    /**
     * @var boolean 是否默认权重
     */
    public $IsDefaultWeight;

    /**
     * @param string $NodeId 云原生网关节点 id
     * @param string $NodeIp 节点 ip
     * @param string $ZoneId Zone id
     * @param string $Zone Zone
     * @param string $GroupId 分组ID
     * @param string $GroupName 分组名
     * @param string $Status 状态
     * @param integer $Weight 节点权重
     * @param boolean $IsDefaultWeight 是否默认权重
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("IsDefaultWeight",$param) and $param["IsDefaultWeight"] !== null) {
            $this->IsDefaultWeight = $param["IsDefaultWeight"];
        }
    }
}
