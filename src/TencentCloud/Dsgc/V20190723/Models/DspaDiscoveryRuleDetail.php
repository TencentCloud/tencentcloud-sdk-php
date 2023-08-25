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
 * 敏感数据扫描任务识别规则详情
 *
 * @method integer getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取规则来源，取值：0 内置, 1 自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置规则来源，取值：0 内置, 1 自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspaDiscoveryRDBRules getRDBRules() 获取RDB规则详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRDBRules(DspaDiscoveryRDBRules $RDBRules) 设置RDB规则详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspaDiscoveryCOSRules getCOSRules() 获取COS规则详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSRules(DspaDiscoveryCOSRules $COSRules) 设置COS规则详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryRuleDetail extends AbstractModel
{
    /**
     * @var integer 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 规则来源，取值：0 内置, 1 自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var DspaDiscoveryRDBRules RDB规则详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RDBRules;

    /**
     * @var DspaDiscoveryCOSRules COS规则详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSRules;

    /**
     * @param integer $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 规则来源，取值：0 内置, 1 自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspaDiscoveryRDBRules $RDBRules RDB规则详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspaDiscoveryCOSRules $COSRules COS规则详情
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("RDBRules",$param) and $param["RDBRules"] !== null) {
            $this->RDBRules = new DspaDiscoveryRDBRules();
            $this->RDBRules->deserialize($param["RDBRules"]);
        }

        if (array_key_exists("COSRules",$param) and $param["COSRules"] !== null) {
            $this->COSRules = new DspaDiscoveryCOSRules();
            $this->COSRules->deserialize($param["COSRules"]);
        }
    }
}
