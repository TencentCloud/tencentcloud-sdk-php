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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompliancePack返回参数结构体
 *
 * @method string getCompliancePackName() 获取合规包名称
 * @method void setCompliancePackName(string $CompliancePackName) 设置合规包名称
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 * @method array getConfigRules() 获取合规包规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigRules(array $ConfigRules) 设置合规包规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompliancePackId() 获取合规包id
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包id
 * @method string getStatus() 获取合规包状态
 * @method void setStatus(string $Status) 设置合规包状态
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCompliancePackResponse extends AbstractModel
{
    /**
     * @var string 合规包名称
     */
    public $CompliancePackName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @var array 合规包规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigRules;

    /**
     * @var string 合规包id
     */
    public $CompliancePackId;

    /**
     * @var string 合规包状态
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompliancePackName 合规包名称
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param integer $RiskLevel 风险等级
     * @param array $ConfigRules 合规包规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompliancePackId 合规包id
     * @param string $Status 合规包状态
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ConfigRules",$param) and $param["ConfigRules"] !== null) {
            $this->ConfigRules = [];
            foreach ($param["ConfigRules"] as $key => $value){
                $obj = new ComplianceConfigRule();
                $obj->deserialize($value);
                array_push($this->ConfigRules, $obj);
            }
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
