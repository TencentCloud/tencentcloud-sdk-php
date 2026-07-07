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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dspm数据识别模板分类关联关系
 *
 * @method integer getCategoryId() 获取<p>分类ID</p>
 * @method void setCategoryId(integer $CategoryId) 设置<p>分类ID</p>
 * @method string getCategoryName() 获取<p>分类名称</p>
 * @method void setCategoryName(string $CategoryName) 设置<p>分类名称</p>
 * @method string getCategoryParentId() 获取<p>父分类ID</p>
 * @method void setCategoryParentId(string $CategoryParentId) 设置<p>父分类ID</p>
 * @method boolean getIsLeaf() 获取<p>是否叶子节点</p>
 * @method void setIsLeaf(boolean $IsLeaf) 设置<p>是否叶子节点</p>
 * @method integer getCategoryType() 获取<p>分类类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method void setCategoryType(integer $CategoryType) 设置<p>分类类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method integer getCategoryGrade() 获取<p>分类层级</p><p>单位：层</p>
 * @method void setCategoryGrade(integer $CategoryGrade) 设置<p>分类层级</p><p>单位：层</p>
 * @method array getRuleRelations() 获取<p>无</p>
 * @method void setRuleRelations(array $RuleRelations) 设置<p>无</p>
 * @method array getChildren() 获取<p>无</p>
 * @method void setChildren(array $Children) 设置<p>无</p>
 */
class DspmIdentifyComplianceCategoryRelation extends AbstractModel
{
    /**
     * @var integer <p>分类ID</p>
     */
    public $CategoryId;

    /**
     * @var string <p>分类名称</p>
     */
    public $CategoryName;

    /**
     * @var string <p>父分类ID</p>
     */
    public $CategoryParentId;

    /**
     * @var boolean <p>是否叶子节点</p>
     */
    public $IsLeaf;

    /**
     * @var integer <p>分类类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     */
    public $CategoryType;

    /**
     * @var integer <p>分类层级</p><p>单位：层</p>
     */
    public $CategoryGrade;

    /**
     * @var array <p>无</p>
     */
    public $RuleRelations;

    /**
     * @var array <p>无</p>
     */
    public $Children;

    /**
     * @param integer $CategoryId <p>分类ID</p>
     * @param string $CategoryName <p>分类名称</p>
     * @param string $CategoryParentId <p>父分类ID</p>
     * @param boolean $IsLeaf <p>是否叶子节点</p>
     * @param integer $CategoryType <p>分类类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     * @param integer $CategoryGrade <p>分类层级</p><p>单位：层</p>
     * @param array $RuleRelations <p>无</p>
     * @param array $Children <p>无</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("CategoryParentId",$param) and $param["CategoryParentId"] !== null) {
            $this->CategoryParentId = $param["CategoryParentId"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("CategoryGrade",$param) and $param["CategoryGrade"] !== null) {
            $this->CategoryGrade = $param["CategoryGrade"];
        }

        if (array_key_exists("RuleRelations",$param) and $param["RuleRelations"] !== null) {
            $this->RuleRelations = [];
            foreach ($param["RuleRelations"] as $key => $value){
                $obj = new DspmIdentifyComplianceRuleRelation();
                $obj->deserialize($value);
                array_push($this->RuleRelations, $obj);
            }
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new DspmIdentifyComplianceCategoryRelation();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
