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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审查通过项对应的引文信息
 *
 * @method string getRiskId() 获取合同审查风险结果ID
 * @method void setRiskId(string $RiskId) 设置合同审查风险结果ID
 * @method string getRiskName() 获取风险名称
 * @method void setRiskName(string $RiskName) 设置风险名称
 * @method string getRiskDescription() 获取风险描述
 * @method void setRiskDescription(string $RiskDescription) 设置风险描述
 * @method string getCategoryName() 获取风险要点分类名称
 * @method void setCategoryName(string $CategoryName) 设置风险要点分类名称
 * @method string getRiskBasis() 获取审查依据
 * @method void setRiskBasis(string $RiskBasis) 设置审查依据
 * @method array getExcerpts() 获取引文内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcerpts(array $Excerpts) 设置引文内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputReference extends AbstractModel
{
    /**
     * @var string 合同审查风险结果ID
     */
    public $RiskId;

    /**
     * @var string 风险名称
     */
    public $RiskName;

    /**
     * @var string 风险描述
     */
    public $RiskDescription;

    /**
     * @var string 风险要点分类名称
     */
    public $CategoryName;

    /**
     * @var string 审查依据
     */
    public $RiskBasis;

    /**
     * @var array 引文内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Excerpts;

    /**
     * @param string $RiskId 合同审查风险结果ID
     * @param string $RiskName 风险名称
     * @param string $RiskDescription 风险描述
     * @param string $CategoryName 风险要点分类名称
     * @param string $RiskBasis 审查依据
     * @param array $Excerpts 引文内容
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("RiskBasis",$param) and $param["RiskBasis"] !== null) {
            $this->RiskBasis = $param["RiskBasis"];
        }

        if (array_key_exists("Excerpts",$param) and $param["Excerpts"] !== null) {
            $this->Excerpts = [];
            foreach ($param["Excerpts"] as $key => $value){
                $obj = new ReferenceExcerpt();
                $obj->deserialize($value);
                array_push($this->Excerpts, $obj);
            }
        }
    }
}
