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
 * DescribeDSPAAssessmentRiskTemplateVulnerableList请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method integer getLimit() 获取限制条数
 * @method void setLimit(integer $Limit) 设置限制条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getRiskType() 获取风险类型
 * @method void setRiskType(string $RiskType) 设置风险类型
 * @method string getRiskName() 获取风险名称
 * @method void setRiskName(string $RiskName) 设置风险名称
 * @method string getRiskSide() 获取风险面
 * @method void setRiskSide(string $RiskSide) 设置风险面
 */
class DescribeDSPAAssessmentRiskTemplateVulnerableListRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var integer 限制条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 风险类型
     */
    public $RiskType;

    /**
     * @var string 风险名称
     */
    public $RiskName;

    /**
     * @var string 风险面
     */
    public $RiskSide;

    /**
     * @param string $DspaId dspa实例id
     * @param integer $Limit 限制条数
     * @param integer $Offset 偏移量
     * @param string $RiskType 风险类型
     * @param string $RiskName 风险名称
     * @param string $RiskSide 风险面
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskSide",$param) and $param["RiskSide"] !== null) {
            $this->RiskSide = $param["RiskSide"];
        }
    }
}
