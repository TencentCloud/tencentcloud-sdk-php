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
 * 数据资产报告-rdb的敏感数据规则分布
 *
 * @method integer getRuleId() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelId() 获取分级id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelId(integer $LevelId) 设置分级id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevelName() 获取分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelName(string $LevelName) 设置分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCnt() 获取规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCnt(integer $RuleCnt) 设置规则数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleDistribution extends AbstractModel
{
    /**
     * @var integer 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 分级id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelId;

    /**
     * @var string 分级名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelName;

    /**
     * @var integer 规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCnt;

    /**
     * @param integer $RuleId 规则id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelId 分级id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LevelName 分级名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCnt 规则数量
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

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("RuleCnt",$param) and $param["RuleCnt"] !== null) {
            $this->RuleCnt = $param["RuleCnt"];
        }
    }
}
