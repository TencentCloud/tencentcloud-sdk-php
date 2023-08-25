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
 * DescribeDSPAAssessmentRiskLevelDetail返回参数结构体
 *
 * @method string getRiskLevelName() 获取风险级别名称
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险级别名称
 * @method string getRiskLevelDescription() 获取风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevelDescription(string $RiskLevelDescription) 设置风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdentifyComplianceId() 获取分类分级id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifyComplianceId(integer $IdentifyComplianceId) 设置分类分级id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentifyComplianceName() 获取分类分级模版名称
 * @method void setIdentifyComplianceName(string $IdentifyComplianceName) 设置分类分级模版名称
 * @method array getRiskLevelMatrix() 获取风险数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevelMatrix(array $RiskLevelMatrix) 设置风险数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskLevelDetailResponse extends AbstractModel
{
    /**
     * @var string 风险级别名称
     */
    public $RiskLevelName;

    /**
     * @var string 风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevelDescription;

    /**
     * @var integer 分类分级id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentifyComplianceId;

    /**
     * @var string 分类分级模版名称
     */
    public $IdentifyComplianceName;

    /**
     * @var array 风险数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevelMatrix;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RiskLevelName 风险级别名称
     * @param string $RiskLevelDescription 风险级别描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdentifyComplianceId 分类分级id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentifyComplianceName 分类分级模版名称
     * @param array $RiskLevelMatrix 风险数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("RiskLevelDescription",$param) and $param["RiskLevelDescription"] !== null) {
            $this->RiskLevelDescription = $param["RiskLevelDescription"];
        }

        if (array_key_exists("IdentifyComplianceId",$param) and $param["IdentifyComplianceId"] !== null) {
            $this->IdentifyComplianceId = $param["IdentifyComplianceId"];
        }

        if (array_key_exists("IdentifyComplianceName",$param) and $param["IdentifyComplianceName"] !== null) {
            $this->IdentifyComplianceName = $param["IdentifyComplianceName"];
        }

        if (array_key_exists("RiskLevelMatrix",$param) and $param["RiskLevelMatrix"] !== null) {
            $this->RiskLevelMatrix = [];
            foreach ($param["RiskLevelMatrix"] as $key => $value){
                $obj = new RiskLevelMatrix();
                $obj->deserialize($value);
                array_push($this->RiskLevelMatrix, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
