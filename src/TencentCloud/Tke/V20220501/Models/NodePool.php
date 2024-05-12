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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点池信息
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getNodePoolId() 获取节点池 ID
 * @method void setNodePoolId(string $NodePoolId) 设置节点池 ID
 * @method array getTags() 获取节点标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置节点标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaints() 获取节点污点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaints(array $Taints) 设置节点污点
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeletionProtection() 获取是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnschedulable() 获取节点是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnschedulable(boolean $Unschedulable) 设置节点是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取节点池类型
 * @method void setType(string $Type) 设置节点池类型
 * @method array getLabels() 获取节点  Labels
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置节点  Labels
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifeState() 获取节点池状态
 * @method void setLifeState(string $LifeState) 设置节点池状态
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getName() 获取节点池名称
 * @method void setName(string $Name) 设置节点池名称
 * @method NativeNodePoolInfo getNative() 获取原生节点池参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNative(NativeNodePoolInfo $Native) 设置原生节点池参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnnotations() 获取节点 Annotation 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(array $Annotations) 设置节点 Annotation 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method SuperNodePoolInfo getSuper() 获取超级节点池参数，在Type等于Super该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuper(SuperNodePoolInfo $Super) 设置超级节点池参数，在Type等于Super该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegularNodePoolInfo getRegular() 获取普通节点池参数，在Type等于Regular该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegular(RegularNodePoolInfo $Regular) 设置普通节点池参数，在Type等于Regular该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExternalNodePoolInfo getExternal() 获取第三方节点池参数，在Type等于External该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternal(ExternalNodePoolInfo $External) 设置第三方节点池参数，在Type等于External该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodePool extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 节点池 ID
     */
    public $NodePoolId;

    /**
     * @var array 节点标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 节点污点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Taints;

    /**
     * @var boolean 是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletionProtection;

    /**
     * @var boolean 节点是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unschedulable;

    /**
     * @var string 节点池类型
     */
    public $Type;

    /**
     * @var array 节点  Labels
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string 节点池状态
     */
    public $LifeState;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 节点池名称
     */
    public $Name;

    /**
     * @var NativeNodePoolInfo 原生节点池参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Native;

    /**
     * @var array 节点 Annotation 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var SuperNodePoolInfo 超级节点池参数，在Type等于Super该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Super;

    /**
     * @var RegularNodePoolInfo 普通节点池参数，在Type等于Regular该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regular;

    /**
     * @var ExternalNodePoolInfo 第三方节点池参数，在Type等于External该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $External;

    /**
     * @param string $ClusterId 集群 ID
     * @param string $NodePoolId 节点池 ID
     * @param array $Tags 节点标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Taints 节点污点
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeletionProtection 是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Unschedulable 节点是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 节点池类型
     * @param array $Labels 节点  Labels
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifeState 节点池状态
     * @param string $CreatedAt 创建时间
     * @param string $Name 节点池名称
     * @param NativeNodePoolInfo $Native 原生节点池参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Annotations 节点 Annotation 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param SuperNodePoolInfo $Super 超级节点池参数，在Type等于Super该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegularNodePoolInfo $Regular 普通节点池参数，在Type等于Regular该字段才有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExternalNodePoolInfo $External 第三方节点池参数，在Type等于External该字段才有值
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
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

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Native",$param) and $param["Native"] !== null) {
            $this->Native = new NativeNodePoolInfo();
            $this->Native->deserialize($param["Native"]);
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new Annotation();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("Super",$param) and $param["Super"] !== null) {
            $this->Super = new SuperNodePoolInfo();
            $this->Super->deserialize($param["Super"]);
        }

        if (array_key_exists("Regular",$param) and $param["Regular"] !== null) {
            $this->Regular = new RegularNodePoolInfo();
            $this->Regular->deserialize($param["Regular"]);
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = new ExternalNodePoolInfo();
            $this->External->deserialize($param["External"]);
        }
    }
}
