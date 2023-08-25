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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类规则信息
 *
 * @method integer getCategoryId() 获取分类id
 * @method void setCategoryId(integer $CategoryId) 设置分类id
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getLevelId() 获取级别id
 * @method void setLevelId(integer $LevelId) 设置级别id
 * @method string getLevelName() 获取级别名称
 * @method void setLevelName(string $LevelName) 设置级别名称
 * @method integer getId() 获取分类规则绑定关系id
 * @method void setId(integer $Id) 设置分类规则绑定关系id
 * @method integer getAliasRuleId() 获取别名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasRuleId(integer $AliasRuleId) 设置别名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliasRuleName() 获取别名规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasRuleName(string $AliasRuleName) 设置别名规则名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class CategoryRule extends AbstractModel
{
    /**
     * @var integer 分类id
     */
    public $CategoryId;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 级别id
     */
    public $LevelId;

    /**
     * @var string 级别名称
     */
    public $LevelName;

    /**
     * @var integer 分类规则绑定关系id
     */
    public $Id;

    /**
     * @var integer 别名ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasRuleId;

    /**
     * @var string 别名规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasRuleName;

    /**
     * @param integer $CategoryId 分类id
     * @param integer $RuleId 规则id
     * @param string $RuleName 规则名称
     * @param integer $LevelId 级别id
     * @param string $LevelName 级别名称
     * @param integer $Id 分类规则绑定关系id
     * @param integer $AliasRuleId 别名ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliasRuleName 别名规则名称
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AliasRuleId",$param) and $param["AliasRuleId"] !== null) {
            $this->AliasRuleId = $param["AliasRuleId"];
        }

        if (array_key_exists("AliasRuleName",$param) and $param["AliasRuleName"] !== null) {
            $this->AliasRuleName = $param["AliasRuleName"];
        }
    }
}
