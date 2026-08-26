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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组
 *
 * @method string getResourceGroupId() 获取<p>资源组id</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组id</p>
 * @method string getResourceGroupName() 获取<p>资源组名称</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>资源组名称</p>
 * @method integer getFreeInstance() 获取<p>可用节点个数(运行中的节点)</p>
 * @method void setFreeInstance(integer $FreeInstance) 设置<p>可用节点个数(运行中的节点)</p>
 * @method integer getTotalInstance() 获取<p>总节点个数(所有节点)</p>
 * @method void setTotalInstance(integer $TotalInstance) 设置<p>总节点个数(所有节点)</p>
 * @method GroupResource getUsedResource() 获取<p>资源组已用的资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedResource(GroupResource $UsedResource) 设置<p>资源组已用的资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GroupResource getTotalResource() 获取<p>资源组总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalResource(GroupResource $TotalResource) 设置<p>资源组总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceSet() 获取<p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSet(array $InstanceSet) 设置<p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceGroup extends AbstractModel
{
    /**
     * @var string <p>资源组id</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>资源组名称</p>
     */
    public $ResourceGroupName;

    /**
     * @var integer <p>可用节点个数(运行中的节点)</p>
     */
    public $FreeInstance;

    /**
     * @var integer <p>总节点个数(所有节点)</p>
     */
    public $TotalInstance;

    /**
     * @var GroupResource <p>资源组已用的资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedResource;

    /**
     * @var GroupResource <p>资源组总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalResource;

    /**
     * @var array <p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSet;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @param string $ResourceGroupId <p>资源组id</p>
     * @param string $ResourceGroupName <p>资源组名称</p>
     * @param integer $FreeInstance <p>可用节点个数(运行中的节点)</p>
     * @param integer $TotalInstance <p>总节点个数(所有节点)</p>
     * @param GroupResource $UsedResource <p>资源组已用的资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GroupResource $TotalResource <p>资源组总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceSet <p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet <p>标签列表</p>
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
