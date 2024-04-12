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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取QA分类分组
 *
 * @method string getCateBizId() 获取QA分类的业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCateBizId(string $CateBizId) 设置QA分类的业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取分类名称

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置分类名称

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取分类下QA数量

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置分类下QA数量

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanAdd() 获取是否可新增

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanAdd(boolean $CanAdd) 设置是否可新增

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanEdit() 获取是否可编辑

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanEdit(boolean $CanEdit) 设置是否可编辑

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanDelete() 获取是否可删除

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanDelete(boolean $CanDelete) 设置是否可删除

注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子分类
注意：此字段可能返回 null，表示取不到有效值。
 */
class QACate extends AbstractModel
{
    /**
     * @var string QA分类的业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CateBizId;

    /**
     * @var string 分类名称

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 分类下QA数量

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var boolean 是否可新增

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanAdd;

    /**
     * @var boolean 是否可编辑

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanEdit;

    /**
     * @var boolean 是否可删除

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanDelete;

    /**
     * @var array 子分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @param string $CateBizId QA分类的业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 分类名称

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 分类下QA数量

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanAdd 是否可新增

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanEdit 是否可编辑

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanDelete 是否可删除

注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子分类
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
        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CanAdd",$param) and $param["CanAdd"] !== null) {
            $this->CanAdd = $param["CanAdd"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new QACate();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
