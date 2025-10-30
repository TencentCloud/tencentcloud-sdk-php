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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组详情
 *
 * @method string getId() 获取资源组唯一标识
 * @method void setId(string $Id) 设置资源组唯一标识
 * @method string getName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取资源组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置资源组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupType() 获取执行资源组类型，不能为空

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupType(string $ResourceGroupType) 设置执行资源组类型，不能为空

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssociateProjects() 获取项目集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateProjects(array $AssociateProjects) 设置项目集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubNet() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubNet(string $SubNet) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoRenewEnabled() 获取是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) 设置是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutorResourceGroupInfo extends AbstractModel
{
    /**
     * @var string 资源组唯一标识
     */
    public $Id;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 资源组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 执行资源组类型，不能为空

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupType;

    /**
     * @var array 项目集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateProjects;

    /**
     * @var string 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string vpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubNet;

    /**
     * @var boolean 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewEnabled;

    /**
     * @param string $Id 资源组唯一标识
     * @param string $Name 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 资源组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupType 执行资源组类型，不能为空

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssociateProjects 项目集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubNet 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoRenewEnabled 是否自动续费
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ResourceGroupType",$param) and $param["ResourceGroupType"] !== null) {
            $this->ResourceGroupType = $param["ResourceGroupType"];
        }

        if (array_key_exists("AssociateProjects",$param) and $param["AssociateProjects"] !== null) {
            $this->AssociateProjects = [];
            foreach ($param["AssociateProjects"] as $key => $value){
                $obj = new BindProject();
                $obj->deserialize($value);
                array_push($this->AssociateProjects, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubNet",$param) and $param["SubNet"] !== null) {
            $this->SubNet = $param["SubNet"];
        }

        if (array_key_exists("AutoRenewEnabled",$param) and $param["AutoRenewEnabled"] !== null) {
            $this->AutoRenewEnabled = $param["AutoRenewEnabled"];
        }
    }
}
