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
 * DescribeDSPAAssessmentRiskDistributionOverview返回参数结构体
 *
 * @method array getRiskTypeDistribution() 获取风险类型分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskTypeDistribution(array $RiskTypeDistribution) 设置风险类型分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskDetailDistribution() 获取风险详情分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDetailDistribution(array $RiskDetailDistribution) 设置风险详情分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskAssetsDistribution() 获取风险资产详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskAssetsDistribution(array $RiskAssetsDistribution) 设置风险资产详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskDistributionOverviewResponse extends AbstractModel
{
    /**
     * @var array 风险类型分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskTypeDistribution;

    /**
     * @var array 风险详情分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDetailDistribution;

    /**
     * @var array 风险资产详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskAssetsDistribution;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RiskTypeDistribution 风险类型分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskDetailDistribution 风险详情分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskAssetsDistribution 风险资产详情
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
        if (array_key_exists("RiskTypeDistribution",$param) and $param["RiskTypeDistribution"] !== null) {
            $this->RiskTypeDistribution = [];
            foreach ($param["RiskTypeDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->RiskTypeDistribution, $obj);
            }
        }

        if (array_key_exists("RiskDetailDistribution",$param) and $param["RiskDetailDistribution"] !== null) {
            $this->RiskDetailDistribution = [];
            foreach ($param["RiskDetailDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->RiskDetailDistribution, $obj);
            }
        }

        if (array_key_exists("RiskAssetsDistribution",$param) and $param["RiskAssetsDistribution"] !== null) {
            $this->RiskAssetsDistribution = [];
            foreach ($param["RiskAssetsDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->RiskAssetsDistribution, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
