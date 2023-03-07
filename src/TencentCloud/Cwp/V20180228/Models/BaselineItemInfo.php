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
 * 基线信息
 *
 * @method integer getItemId() 获取基线检测项ID
 * @method void setItemId(integer $ItemId) 设置基线检测项ID
 * @method string getItemName() 获取检测项名字
 * @method void setItemName(string $ItemName) 设置检测项名字
 * @method integer getRuleId() 获取检测项所属规则的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置检测项所属规则的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemDesc() 获取检测项描述
 * @method void setItemDesc(string $ItemDesc) 设置检测项描述
 * @method string getFixMethod() 获取检测项的修复方法
 * @method void setFixMethod(string $FixMethod) 设置检测项的修复方法
 * @method string getRuleName() 获取检测项所属规则名字
 * @method void setRuleName(string $RuleName) 设置检测项所属规则名字
 * @method integer getLevel() 获取危险等级
 * @method void setLevel(integer $Level) 设置危险等级
 * @method integer getSysRuleId() 获取系统规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSysRuleId(integer $SysRuleId) 设置系统规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedCustomRuleInfo() 获取被引自定义规则信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedCustomRuleInfo(array $RelatedCustomRuleInfo) 设置被引自定义规则信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineItemInfo extends AbstractModel
{
    /**
     * @var integer 基线检测项ID
     */
    public $ItemId;

    /**
     * @var string 检测项名字
     */
    public $ItemName;

    /**
     * @var integer 检测项所属规则的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 检测项描述
     */
    public $ItemDesc;

    /**
     * @var string 检测项的修复方法
     */
    public $FixMethod;

    /**
     * @var string 检测项所属规则名字
     */
    public $RuleName;

    /**
     * @var integer 危险等级
     */
    public $Level;

    /**
     * @var integer 系统规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SysRuleId;

    /**
     * @var array 被引自定义规则信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedCustomRuleInfo;

    /**
     * @param integer $ItemId 基线检测项ID
     * @param string $ItemName 检测项名字
     * @param integer $RuleId 检测项所属规则的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemDesc 检测项描述
     * @param string $FixMethod 检测项的修复方法
     * @param string $RuleName 检测项所属规则名字
     * @param integer $Level 危险等级
     * @param integer $SysRuleId 系统规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedCustomRuleInfo 被引自定义规则信息
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ItemDesc",$param) and $param["ItemDesc"] !== null) {
            $this->ItemDesc = $param["ItemDesc"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SysRuleId",$param) and $param["SysRuleId"] !== null) {
            $this->SysRuleId = $param["SysRuleId"];
        }

        if (array_key_exists("RelatedCustomRuleInfo",$param) and $param["RelatedCustomRuleInfo"] !== null) {
            $this->RelatedCustomRuleInfo = [];
            foreach ($param["RelatedCustomRuleInfo"] as $key => $value){
                $obj = new BaselineCustomRuleIdName();
                $obj->deserialize($value);
                array_push($this->RelatedCustomRuleInfo, $obj);
            }
        }
    }
}
