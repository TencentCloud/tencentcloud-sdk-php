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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独占实例
 *
 * @method string getCenterType() 获取配置中心类型[注册中心Registration、配置中心Configuration]
 * @method void setCenterType(string $CenterType) 设置配置中心类型[注册中心Registration、配置中心Configuration]
 * @method string getInstanceId() 获取实例id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
 * @method void setInstanceId(string $InstanceId) 设置实例id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
 * @method string getInstanceType() 获取实例类型，例如北极星Polaris
 * @method void setInstanceType(string $InstanceType) 设置实例类型，例如北极星Polaris
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRegionId() 获取实例地域id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
 * @method void setRegionId(string $RegionId) 设置实例地域id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
 * @method string getInstanceNamespaceId() 获取实例命名空间ID，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
 * @method void setInstanceNamespaceId(string $InstanceNamespaceId) 设置实例命名空间ID，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
 * @method string getGroupId() 获取部署组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExclusiveInstance extends AbstractModel
{
    /**
     * @var string 配置中心类型[注册中心Registration、配置中心Configuration]
     */
    public $CenterType;

    /**
     * @var string 实例id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
     */
    public $InstanceId;

    /**
     * @var string 实例类型，例如北极星Polaris
     */
    public $InstanceType;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例地域id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
     */
    public $RegionId;

    /**
     * @var string 实例命名空间ID，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
     */
    public $InstanceNamespaceId;

    /**
     * @var string 部署组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $CenterType 配置中心类型[注册中心Registration、配置中心Configuration]
     * @param string $InstanceId 实例id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
     * @param string $InstanceType 实例类型，例如北极星Polaris
     * @param string $InstanceName 实例名称
     * @param string $RegionId 实例地域id，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
     * @param string $InstanceNamespaceId 实例命名空间ID，通过[北极星控制台](https://console.cloud.tencent.com/tse/governance)获取
     * @param string $GroupId 部署组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CenterType",$param) and $param["CenterType"] !== null) {
            $this->CenterType = $param["CenterType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceNamespaceId",$param) and $param["InstanceNamespaceId"] !== null) {
            $this->InstanceNamespaceId = $param["InstanceNamespaceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
