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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 虚拟节点池
 *
 * @method string getNodePoolId() 获取<p>节点池ID</p>
 * @method void setNodePoolId(string $NodePoolId) 设置<p>节点池ID</p>
 * @method array getSubnetIds() 获取<p>子网列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>节点池名称</p>
 * @method void setName(string $Name) 设置<p>节点池名称</p>
 * @method string getLifeState() 获取<p>节点池生命周期</p><ul><li>creating：创建中</li><li>normal：正常</li><li>updating：更新中</li></ul>
 * @method void setLifeState(string $LifeState) 设置<p>节点池生命周期</p><ul><li>creating：创建中</li><li>normal：正常</li><li>updating：更新中</li></ul>
 * @method array getLabels() 获取<p>虚拟节点label</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>虚拟节点label</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaints() 获取<p>虚拟节点taint</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaints(array $Taints) 设置<p>虚拟节点taint</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubnetAllocationPolicy getSubnetAllocationPolicy() 获取<p>子网分配策略</p>
 * @method void setSubnetAllocationPolicy(SubnetAllocationPolicy $SubnetAllocationPolicy) 设置<p>子网分配策略</p>
 */
class VirtualNodePool extends AbstractModel
{
    /**
     * @var string <p>节点池ID</p>
     */
    public $NodePoolId;

    /**
     * @var array <p>子网列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @var string <p>节点池名称</p>
     */
    public $Name;

    /**
     * @var string <p>节点池生命周期</p><ul><li>creating：创建中</li><li>normal：正常</li><li>updating：更新中</li></ul>
     */
    public $LifeState;

    /**
     * @var array <p>虚拟节点label</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array <p>虚拟节点taint</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Taints;

    /**
     * @var SubnetAllocationPolicy <p>子网分配策略</p>
     */
    public $SubnetAllocationPolicy;

    /**
     * @param string $NodePoolId <p>节点池ID</p>
     * @param array $SubnetIds <p>子网列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>节点池名称</p>
     * @param string $LifeState <p>节点池生命周期</p><ul><li>creating：创建中</li><li>normal：正常</li><li>updating：更新中</li></ul>
     * @param array $Labels <p>虚拟节点label</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Taints <p>虚拟节点taint</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubnetAllocationPolicy $SubnetAllocationPolicy <p>子网分配策略</p>
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("SubnetAllocationPolicy",$param) and $param["SubnetAllocationPolicy"] !== null) {
            $this->SubnetAllocationPolicy = new SubnetAllocationPolicy();
            $this->SubnetAllocationPolicy->deserialize($param["SubnetAllocationPolicy"]);
        }
    }
}
