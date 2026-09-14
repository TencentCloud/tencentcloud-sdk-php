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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库分类信息（含元数据配置）
 *
 * @method boolean getCanAdd() 获取<p>是否可新增</p>
 * @method void setCanAdd(boolean $CanAdd) 设置<p>是否可新增</p>
 * @method boolean getCanDelete() 获取<p>是否可删除</p>
 * @method void setCanDelete(boolean $CanDelete) 设置<p>是否可删除</p>
 * @method boolean getCanEdit() 获取<p>是否可编辑</p>
 * @method void setCanEdit(boolean $CanEdit) 设置<p>是否可编辑</p>
 * @method string getCategoryId() 获取<p>分类 ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>分类 ID</p>
 * @method array getChildList() 获取<p>子分类列表</p>
 * @method void setChildList(array $ChildList) 设置<p>子分类列表</p>
 * @method boolean getIsLeaf() 获取<p>是否为叶子节点（无子分类）</p>
 * @method void setIsLeaf(boolean $IsLeaf) 设置<p>是否为叶子节点（无子分类）</p>
 * @method integer getItemCount() 获取<p>分类对象的数量</p>
 * @method void setItemCount(integer $ItemCount) 设置<p>分类对象的数量</p>
 * @method MetaValue getMetaValue() 获取<p>元数据配置（该分类被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaValue(MetaValue $MetaValue) 设置<p>元数据配置（该分类被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>分类名称</p>
 * @method void setName(string $Name) 设置<p>分类名称</p>
 */
class KBCategory extends AbstractModel
{
    /**
     * @var boolean <p>是否可新增</p>
     */
    public $CanAdd;

    /**
     * @var boolean <p>是否可删除</p>
     */
    public $CanDelete;

    /**
     * @var boolean <p>是否可编辑</p>
     */
    public $CanEdit;

    /**
     * @var string <p>分类 ID</p>
     */
    public $CategoryId;

    /**
     * @var array <p>子分类列表</p>
     */
    public $ChildList;

    /**
     * @var boolean <p>是否为叶子节点（无子分类）</p>
     */
    public $IsLeaf;

    /**
     * @var integer <p>分类对象的数量</p>
     */
    public $ItemCount;

    /**
     * @var MetaValue <p>元数据配置（该分类被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaValue;

    /**
     * @var string <p>分类名称</p>
     */
    public $Name;

    /**
     * @param boolean $CanAdd <p>是否可新增</p>
     * @param boolean $CanDelete <p>是否可删除</p>
     * @param boolean $CanEdit <p>是否可编辑</p>
     * @param string $CategoryId <p>分类 ID</p>
     * @param array $ChildList <p>子分类列表</p>
     * @param boolean $IsLeaf <p>是否为叶子节点（无子分类）</p>
     * @param integer $ItemCount <p>分类对象的数量</p>
     * @param MetaValue $MetaValue <p>元数据配置（该分类被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>分类名称</p>
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
        if (array_key_exists("CanAdd",$param) and $param["CanAdd"] !== null) {
            $this->CanAdd = $param["CanAdd"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ChildList",$param) and $param["ChildList"] !== null) {
            $this->ChildList = [];
            foreach ($param["ChildList"] as $key => $value){
                $obj = new KBCategory();
                $obj->deserialize($value);
                array_push($this->ChildList, $obj);
            }
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("MetaValue",$param) and $param["MetaValue"] !== null) {
            $this->MetaValue = new MetaValue();
            $this->MetaValue->deserialize($param["MetaValue"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
