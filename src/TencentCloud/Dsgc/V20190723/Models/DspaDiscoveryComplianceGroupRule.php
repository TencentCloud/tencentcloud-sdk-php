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
 * 合规组中规则信息，用于合规组列表中规则信息展示
 *
 * @method integer getRuleId() 获取敏感数据识别规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置敏感数据识别规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取敏感数据识别规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置敏感数据识别规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCategoryId() 获取敏感数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryId(integer $CategoryId) 设置敏感数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelId() 获取敏感数据分级ID, 目前只支持高、中、低三级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelId(integer $LevelId) 设置敏感数据分级ID, 目前只支持高、中、低三级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryName() 获取合规组对应的分类信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryName(string $CategoryName) 设置合规组对应的分类信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevelRiskName() 获取分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelRiskName(string $LevelRiskName) 设置分级名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryComplianceGroupRule extends AbstractModel
{
    /**
     * @var integer 敏感数据识别规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 敏感数据识别规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 敏感数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryId;

    /**
     * @var integer 敏感数据分级ID, 目前只支持高、中、低三级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelId;

    /**
     * @var string 合规组对应的分类信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryName;

    /**
     * @var string 分级名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelRiskName;

    /**
     * @param integer $RuleId 敏感数据识别规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 敏感数据识别规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CategoryId 敏感数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelId 敏感数据分级ID, 目前只支持高、中、低三级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryName 合规组对应的分类信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LevelRiskName 分级名称
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("LevelRiskName",$param) and $param["LevelRiskName"] !== null) {
            $this->LevelRiskName = $param["LevelRiskName"];
        }
    }
}
