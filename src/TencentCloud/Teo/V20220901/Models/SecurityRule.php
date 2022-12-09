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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管规则详情
 *
 * @method integer getRuleId() 获取规则id。
 * @method void setRuleId(integer $RuleId) 设置规则id。
 * @method string getDescription() 获取规则描述。
 * @method void setDescription(string $Description) 设置规则描述。
 * @method string getRuleTypeName() 获取规则类型名。
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则类型名。
 * @method string getRuleLevelDesc() 获取等级描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleLevelDesc(string $RuleLevelDesc) 设置等级描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleTypeId() 获取规则类型id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTypeId(integer $RuleTypeId) 设置规则类型id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTypeDesc() 获取规则类型描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTypeDesc(string $RuleTypeDesc) 设置规则类型描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleTags() 获取规则标签。部分类型的规则不存在该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTags(array $RuleTags) 设置规则标签。部分类型的规则不存在该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>为空时对应接口Status无意义，例如仅查询规则详情时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>为空时对应接口Status无意义，例如仅查询规则详情时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntity() 获取子域名/应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntity(string $Entity) 设置子域名/应用名
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityRule extends AbstractModel
{
    /**
     * @var integer 规则id。
     */
    public $RuleId;

    /**
     * @var string 规则描述。
     */
    public $Description;

    /**
     * @var string 规则类型名。
     */
    public $RuleTypeName;

    /**
     * @var string 等级描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleLevelDesc;

    /**
     * @var integer 规则类型id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTypeId;

    /**
     * @var string 规则类型描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTypeDesc;

    /**
     * @var array 规则标签。部分类型的规则不存在该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTags;

    /**
     * @var string 状态，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>为空时对应接口Status无意义，例如仅查询规则详情时。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 子域名/应用名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Entity;

    /**
     * @param integer $RuleId 规则id。
     * @param string $Description 规则描述。
     * @param string $RuleTypeName 规则类型名。
     * @param string $RuleLevelDesc 等级描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleTypeId 规则类型id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTypeDesc 规则类型描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleTags 规则标签。部分类型的规则不存在该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>为空时对应接口Status无意义，例如仅查询规则详情时。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Entity 子域名/应用名
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("RuleLevelDesc",$param) and $param["RuleLevelDesc"] !== null) {
            $this->RuleLevelDesc = $param["RuleLevelDesc"];
        }

        if (array_key_exists("RuleTypeId",$param) and $param["RuleTypeId"] !== null) {
            $this->RuleTypeId = $param["RuleTypeId"];
        }

        if (array_key_exists("RuleTypeDesc",$param) and $param["RuleTypeDesc"] !== null) {
            $this->RuleTypeDesc = $param["RuleTypeDesc"];
        }

        if (array_key_exists("RuleTags",$param) and $param["RuleTags"] !== null) {
            $this->RuleTags = $param["RuleTags"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }
    }
}
