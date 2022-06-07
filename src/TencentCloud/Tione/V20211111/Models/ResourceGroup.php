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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组
 *
 * @method string getResourceGroupId() 获取资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id
 * @method string getResourceGroupName() 获取资源组名称
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名称
 * @method integer getFreeInstance() 获取可用节点个数(运行中的节点)
 * @method void setFreeInstance(integer $FreeInstance) 设置可用节点个数(运行中的节点)
 * @method integer getTotalInstance() 获取总节点个数(所有节点)
 * @method void setTotalInstance(integer $TotalInstance) 设置总节点个数(所有节点)
 * @method GroupResource getUsedResource() 获取资资源组已用的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedResource(GroupResource $UsedResource) 设置资资源组已用的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method GroupResource getTotalResource() 获取资源组总资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalResource(GroupResource $TotalResource) 设置资源组总资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceSet() 获取节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSet(array $InstanceSet) 设置节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceGroup extends AbstractModel
{
    /**
     * @var string 资源组id
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名称
     */
    public $ResourceGroupName;

    /**
     * @var integer 可用节点个数(运行中的节点)
     */
    public $FreeInstance;

    /**
     * @var integer 总节点个数(所有节点)
     */
    public $TotalInstance;

    /**
     * @var GroupResource 资资源组已用的资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedResource;

    /**
     * @var GroupResource 资源组总资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalResource;

    /**
     * @var array 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSet;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @param string $ResourceGroupId 资源组id
     * @param string $ResourceGroupName 资源组名称
     * @param integer $FreeInstance 可用节点个数(运行中的节点)
     * @param integer $TotalInstance 总节点个数(所有节点)
     * @param GroupResource $UsedResource 资资源组已用的资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param GroupResource $TotalResource 资源组总资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceSet 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 标签列表
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

        if (array_key_exists("FreeInstance",$param) and $param["FreeInstance"] !== null) {
            $this->FreeInstance = $param["FreeInstance"];
        }

        if (array_key_exists("TotalInstance",$param) and $param["TotalInstance"] !== null) {
            $this->TotalInstance = $param["TotalInstance"];
        }

        if (array_key_exists("UsedResource",$param) and $param["UsedResource"] !== null) {
            $this->UsedResource = new GroupResource();
            $this->UsedResource->deserialize($param["UsedResource"]);
        }

        if (array_key_exists("TotalResource",$param) and $param["TotalResource"] !== null) {
            $this->TotalResource = new GroupResource();
            $this->TotalResource->deserialize($param["TotalResource"]);
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
