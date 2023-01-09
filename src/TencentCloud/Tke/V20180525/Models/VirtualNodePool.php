<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getNodePoolId() 获取节点池ID
 * @method void setNodePoolId(string $NodePoolId) 设置节点池ID
 * @method array getSubnetIds() 获取子网列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取节点池名称
 * @method void setName(string $Name) 设置节点池名称
 * @method string getLifeState() 获取节点池生命周期
 * @method void setLifeState(string $LifeState) 设置节点池生命周期
 * @method array getLabels() 获取虚拟节点label
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置虚拟节点label
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaints() 获取虚拟节点taint
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaints(array $Taints) 设置虚拟节点taint
注意：此字段可能返回 null，表示取不到有效值。
 */
class VirtualNodePool extends AbstractModel
{
    /**
     * @var string 节点池ID
     */
    public $NodePoolId;

    /**
     * @var array 子网列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @var string 节点池名称
     */
    public $Name;

    /**
     * @var string 节点池生命周期
     */
    public $LifeState;

    /**
     * @var array 虚拟节点label
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array 虚拟节点taint
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Taints;

    /**
     * @param string $NodePoolId 节点池ID
     * @param array $SubnetIds 子网列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 节点池名称
     * @param string $LifeState 节点池生命周期
     * @param array $Labels 虚拟节点label
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Taints 虚拟节点taint
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
    }
}
