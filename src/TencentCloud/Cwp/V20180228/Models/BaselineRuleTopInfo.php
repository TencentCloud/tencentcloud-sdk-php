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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线检测项TOP信息
 *
 * @method string getRuleName() 获取基线检测项名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置基线检测项名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取检测项危害等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置检测项危害等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventCount() 获取事件总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCount(integer $EventCount) 设置事件总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取检测项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置检测项id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineRuleTopInfo extends AbstractModel
{
    /**
     * @var string 基线检测项名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 检测项危害等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 事件总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCount;

    /**
     * @var integer 检测项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @param string $RuleName 基线检测项名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 检测项危害等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventCount 事件总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 检测项id
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
