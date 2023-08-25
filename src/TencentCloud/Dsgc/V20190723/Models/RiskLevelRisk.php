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
 * 风险等级列表
 *
 * @method integer getId() 获取风险id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置风险id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevelName() 获取风险等级列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevelDescription() 获取风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevelDescription(string $RiskLevelDescription) 设置风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentifyComplianceName() 获取引用的分类分级模版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifyComplianceName(string $IdentifyComplianceName) 设置引用的分类分级模版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型，区分自定义还是系统内置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，区分自定义还是系统内置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskLevelRisk extends AbstractModel
{
    /**
     * @var integer 风险id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 风险等级列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevelName;

    /**
     * @var string 风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevelDescription;

    /**
     * @var string 引用的分类分级模版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentifyComplianceName;

    /**
     * @var string 类型，区分自定义还是系统内置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param integer $Id 风险id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevelName 风险等级列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevelDescription 风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentifyComplianceName 引用的分类分级模版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型，区分自定义还是系统内置
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("RiskLevelDescription",$param) and $param["RiskLevelDescription"] !== null) {
            $this->RiskLevelDescription = $param["RiskLevelDescription"];
        }

        if (array_key_exists("IdentifyComplianceName",$param) and $param["IdentifyComplianceName"] !== null) {
            $this->IdentifyComplianceName = $param["IdentifyComplianceName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
