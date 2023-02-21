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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 树状结构资源列表对象
 *
 * @method string getParentId() 获取父节点ID
 * @method void setParentId(string $ParentId) 设置父节点ID
 * @method string getId() 获取文件夹ID
 * @method void setId(string $Id) 设置文件夹ID
 * @method string getName() 获取文件夹名称
 * @method void setName(string $Name) 设置文件夹名称
 * @method array getItems() 获取文件夹下资源数字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置文件夹下资源数字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置资源总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeTreeResourcesRsp extends AbstractModel
{
    /**
     * @var string 父节点ID
     */
    public $ParentId;

    /**
     * @var string 文件夹ID
     */
    public $Id;

    /**
     * @var string 文件夹名称
     */
    public $Name;

    /**
     * @var array 文件夹下资源数字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var array 子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var integer 资源总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param string $ParentId 父节点ID
     * @param string $Id 文件夹ID
     * @param string $Name 文件夹名称
     * @param array $Items 文件夹下资源数字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 资源总数
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TreeResourceItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new DescribeTreeResourcesRsp();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
