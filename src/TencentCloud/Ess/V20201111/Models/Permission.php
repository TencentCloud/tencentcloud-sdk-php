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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限树节点权限
 *
 * @method string getName() 获取权限名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置权限名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取权限key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置权限key
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取权限类型 1前端，2后端
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置权限类型 1前端，2后端
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHide() 获取是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHide(integer $Hide) 设置是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataLabel() 获取数据权限标签 1:表示根节点，2:表示叶子结点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLabel(integer $DataLabel) 设置数据权限标签 1:表示根节点，2:表示叶子结点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataType() 获取数据权限独有，1:关联其他模块鉴权，2:表示关联自己模块鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataType(integer $DataType) 设置数据权限独有，1:关联其他模块鉴权，2:表示关联自己模块鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataRange() 获取数据权限独有，表示数据范围，1：全公司，2:部门及下级部门，3:自己
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRange(integer $DataRange) 设置数据权限独有，表示数据范围，1：全公司，2:部门及下级部门，3:自己
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataTo() 获取关联权限, 表示这个功能权限要受哪个数据权限管控
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataTo(string $DataTo) 设置关联权限, 表示这个功能权限要受哪个数据权限管控
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentKey() 获取父级权限key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentKey(string $ParentKey) 设置父级权限key
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsChecked() 获取是否选中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsChecked(boolean $IsChecked) 设置是否选中
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子权限集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class Permission extends AbstractModel
{
    /**
     * @var string 权限名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 权限key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var integer 权限类型 1前端，2后端
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hide;

    /**
     * @var integer 数据权限标签 1:表示根节点，2:表示叶子结点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLabel;

    /**
     * @var integer 数据权限独有，1:关联其他模块鉴权，2:表示关联自己模块鉴权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataType;

    /**
     * @var integer 数据权限独有，表示数据范围，1：全公司，2:部门及下级部门，3:自己
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRange;

    /**
     * @var string 关联权限, 表示这个功能权限要受哪个数据权限管控
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataTo;

    /**
     * @var string 父级权限key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentKey;

    /**
     * @var boolean 是否选中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsChecked;

    /**
     * @var array 子权限集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @param string $Name 权限名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 权限key
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 权限类型 1前端，2后端
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Hide 是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataLabel 数据权限标签 1:表示根节点，2:表示叶子结点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataType 数据权限独有，1:关联其他模块鉴权，2:表示关联自己模块鉴权
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataRange 数据权限独有，表示数据范围，1：全公司，2:部门及下级部门，3:自己
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataTo 关联权限, 表示这个功能权限要受哪个数据权限管控
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentKey 父级权限key
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsChecked 是否选中
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子权限集合
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Hide",$param) and $param["Hide"] !== null) {
            $this->Hide = $param["Hide"];
        }

        if (array_key_exists("DataLabel",$param) and $param["DataLabel"] !== null) {
            $this->DataLabel = $param["DataLabel"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("DataRange",$param) and $param["DataRange"] !== null) {
            $this->DataRange = $param["DataRange"];
        }

        if (array_key_exists("DataTo",$param) and $param["DataTo"] !== null) {
            $this->DataTo = $param["DataTo"];
        }

        if (array_key_exists("ParentKey",$param) and $param["ParentKey"] !== null) {
            $this->ParentKey = $param["ParentKey"];
        }

        if (array_key_exists("IsChecked",$param) and $param["IsChecked"] !== null) {
            $this->IsChecked = $param["IsChecked"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new Permission();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
