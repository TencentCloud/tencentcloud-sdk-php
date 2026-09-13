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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组信息
 *
 * @method string getResourceGroupId() 获取资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupStatus() 获取资源组状态
COMPUTE_RESOURCE_STATUS_UNSPECIFIED 未指定
COMPUTE_RESOURCE_STATUS_PENDING_CREATE 待创建
COMPUTE_RESOURCE_STATUS_CREATING 创建中
COMPUTE_RESOURCE_STATUS_RUNNING 运行中
COMPUTE_RESOURCE_STATUS_STOPPED 已停止
COMPUTE_RESOURCE_STATUS_STOPPING 停止中
COMPUTE_RESOURCE_STATUS_STARTING 启动中
COMPUTE_RESOURCE_STATUS_UPDATING 更新中
COMPUTE_RESOURCE_STATUS_DELETING 删除中
COMPUTE_RESOURCE_STATUS_DELETED 已删除
COMPUTE_RESOURCE_STATUS_FAILED  失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupStatus(string $ResourceGroupStatus) 设置资源组状态
COMPUTE_RESOURCE_STATUS_UNSPECIFIED 未指定
COMPUTE_RESOURCE_STATUS_PENDING_CREATE 待创建
COMPUTE_RESOURCE_STATUS_CREATING 创建中
COMPUTE_RESOURCE_STATUS_RUNNING 运行中
COMPUTE_RESOURCE_STATUS_STOPPED 已停止
COMPUTE_RESOURCE_STATUS_STOPPING 停止中
COMPUTE_RESOURCE_STATUS_STARTING 启动中
COMPUTE_RESOURCE_STATUS_UPDATING 更新中
COMPUTE_RESOURCE_STATUS_DELETING 删除中
COMPUTE_RESOURCE_STATUS_DELETED 已删除
COMPUTE_RESOURCE_STATUS_FAILED  失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceGroupInfo extends AbstractModel
{
    /**
     * @var string 资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 资源组状态
COMPUTE_RESOURCE_STATUS_UNSPECIFIED 未指定
COMPUTE_RESOURCE_STATUS_PENDING_CREATE 待创建
COMPUTE_RESOURCE_STATUS_CREATING 创建中
COMPUTE_RESOURCE_STATUS_RUNNING 运行中
COMPUTE_RESOURCE_STATUS_STOPPED 已停止
COMPUTE_RESOURCE_STATUS_STOPPING 停止中
COMPUTE_RESOURCE_STATUS_STARTING 启动中
COMPUTE_RESOURCE_STATUS_UPDATING 更新中
COMPUTE_RESOURCE_STATUS_DELETING 删除中
COMPUTE_RESOURCE_STATUS_DELETED 已删除
COMPUTE_RESOURCE_STATUS_FAILED  失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupStatus;

    /**
     * @param string $ResourceGroupId 资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupStatus 资源组状态
COMPUTE_RESOURCE_STATUS_UNSPECIFIED 未指定
COMPUTE_RESOURCE_STATUS_PENDING_CREATE 待创建
COMPUTE_RESOURCE_STATUS_CREATING 创建中
COMPUTE_RESOURCE_STATUS_RUNNING 运行中
COMPUTE_RESOURCE_STATUS_STOPPED 已停止
COMPUTE_RESOURCE_STATUS_STOPPING 停止中
COMPUTE_RESOURCE_STATUS_STARTING 启动中
COMPUTE_RESOURCE_STATUS_UPDATING 更新中
COMPUTE_RESOURCE_STATUS_DELETING 删除中
COMPUTE_RESOURCE_STATUS_DELETED 已删除
COMPUTE_RESOURCE_STATUS_FAILED  失败
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("ResourceGroupStatus",$param) and $param["ResourceGroupStatus"] !== null) {
            $this->ResourceGroupStatus = $param["ResourceGroupStatus"];
        }
    }
}
