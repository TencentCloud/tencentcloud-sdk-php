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
 * @method string getCenterType() 获取<p>配置中心类型[注册中心Registration、配置中心Configuration]</p>
 * @method void setCenterType(string $CenterType) 设置<p>配置中心类型[注册中心Registration、配置中心Configuration]</p>
 * @method string getInstanceId() 获取<p>实例id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
 * @method string getInstanceType() 获取<p>实例类型，例如北极星Polaris</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型，例如北极星Polaris</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getRegionId() 获取<p>实例地域id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
 * @method void setRegionId(string $RegionId) 设置<p>实例地域id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
 * @method string getInstanceNamespaceId() 获取<p>实例命名空间ID，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
 * @method void setInstanceNamespaceId(string $InstanceNamespaceId) 设置<p>实例命名空间ID，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
 * @method string getGroupId() 获取<p>部署组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置<p>部署组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取<p>文档ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>文档ID</p>
 */
class ExclusiveInstance extends AbstractModel
{
    /**
     * @var string <p>配置中心类型[注册中心Registration、配置中心Configuration]</p>
     */
    public $CenterType;

    /**
     * @var string <p>实例id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例类型，例如北极星Polaris</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例地域id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
     */
    public $RegionId;

    /**
     * @var string <p>实例命名空间ID，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
     */
    public $InstanceNamespaceId;

    /**
     * @var string <p>部署组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>文档ID</p>
     */
    public $ApplicationId;

    /**
     * @param string $CenterType <p>配置中心类型[注册中心Registration、配置中心Configuration]</p>
     * @param string $InstanceId <p>实例id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
     * @param string $InstanceType <p>实例类型，例如北极星Polaris</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $RegionId <p>实例地域id，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
     * @param string $InstanceNamespaceId <p>实例命名空间ID，通过<a href="https://console.cloud.tencent.com/tse/governance">北极星控制台</a>获取</p>
     * @param string $GroupId <p>部署组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId <p>文档ID</p>
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
