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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子规则分支。
 *
 * @method string getCondition() 获取[匹配条件](https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d)。
 * @method void setCondition(string $Condition) 设置[匹配条件](https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d)。
 * @method array getActions() 获取[操作](https://cloud.tencent.com/document/product/1552/90438#c7bd7e02-9247-4a72-b0e4-11c27cadb198)。<br>注意：Actions 和 SubRules 不可同时为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActions(array $Actions) 设置[操作](https://cloud.tencent.com/document/product/1552/90438#c7bd7e02-9247-4a72-b0e4-11c27cadb198)。<br>注意：Actions 和 SubRules 不可同时为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubRules() 获取子规则列表。此列表中时存在多条规则，按照从上往下的顺序依次执行。<br>注意：SubRules 和 Actions 不可同时为空。且当前只支持填写一层 SubRules。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRules(array $SubRules) 设置子规则列表。此列表中时存在多条规则，按照从上往下的顺序依次执行。<br>注意：SubRules 和 Actions 不可同时为空。且当前只支持填写一层 SubRules。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleBranch extends AbstractModel
{
    /**
     * @var string [匹配条件](https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d)。
     */
    public $Condition;

    /**
     * @var array [操作](https://cloud.tencent.com/document/product/1552/90438#c7bd7e02-9247-4a72-b0e4-11c27cadb198)。<br>注意：Actions 和 SubRules 不可同时为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actions;

    /**
     * @var array 子规则列表。此列表中时存在多条规则，按照从上往下的顺序依次执行。<br>注意：SubRules 和 Actions 不可同时为空。且当前只支持填写一层 SubRules。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRules;

    /**
     * @param string $Condition [匹配条件](https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d)。
     * @param array $Actions [操作](https://cloud.tencent.com/document/product/1552/90438#c7bd7e02-9247-4a72-b0e4-11c27cadb198)。<br>注意：Actions 和 SubRules 不可同时为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubRules 子规则列表。此列表中时存在多条规则，按照从上往下的顺序依次执行。<br>注意：SubRules 和 Actions 不可同时为空。且当前只支持填写一层 SubRules。
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new RuleEngineAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("SubRules",$param) and $param["SubRules"] !== null) {
            $this->SubRules = [];
            foreach ($param["SubRules"] as $key => $value){
                $obj = new RuleEngineSubRule();
                $obj->deserialize($value);
                array_push($this->SubRules, $obj);
            }
        }
    }
}
