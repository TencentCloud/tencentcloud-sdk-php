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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险信息
 *
 * @method string getDrugId() 获取药品ID
 * @method void setDrugId(string $DrugId) 设置药品ID
 * @method string getDrugName() 获取药品名称
 * @method void setDrugName(string $DrugName) 设置药品名称
 * @method string getRiskLevel() 获取风险等级：低级风险、中级风险、高级风险
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级：低级风险、中级风险、高级风险
 * @method string getRiskTips() 获取风险提示
 * @method void setRiskTips(string $RiskTips) 设置风险提示
 * @method string getFdaLevel() 获取FDA分级
 * @method void setFdaLevel(string $FdaLevel) 设置FDA分级
 * @method string getRelatedDrugName() 获取关联药品名称
 * @method void setRelatedDrugName(string $RelatedDrugName) 设置关联药品名称
 * @method string getRelatedPrescriptionId() 获取关联处方ID
 * @method void setRelatedPrescriptionId(string $RelatedPrescriptionId) 设置关联处方ID
 */
class RiskInfo extends AbstractModel
{
    /**
     * @var string 药品ID
     */
    public $DrugId;

    /**
     * @var string 药品名称
     */
    public $DrugName;

    /**
     * @var string 风险等级：低级风险、中级风险、高级风险
     */
    public $RiskLevel;

    /**
     * @var string 风险提示
     */
    public $RiskTips;

    /**
     * @var string FDA分级
     */
    public $FdaLevel;

    /**
     * @var string 关联药品名称
     */
    public $RelatedDrugName;

    /**
     * @var string 关联处方ID
     */
    public $RelatedPrescriptionId;

    /**
     * @param string $DrugId 药品ID
     * @param string $DrugName 药品名称
     * @param string $RiskLevel 风险等级：低级风险、中级风险、高级风险
     * @param string $RiskTips 风险提示
     * @param string $FdaLevel FDA分级
     * @param string $RelatedDrugName 关联药品名称
     * @param string $RelatedPrescriptionId 关联处方ID
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
        if (array_key_exists("DrugId",$param) and $param["DrugId"] !== null) {
            $this->DrugId = $param["DrugId"];
        }

        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskTips",$param) and $param["RiskTips"] !== null) {
            $this->RiskTips = $param["RiskTips"];
        }

        if (array_key_exists("FdaLevel",$param) and $param["FdaLevel"] !== null) {
            $this->FdaLevel = $param["FdaLevel"];
        }

        if (array_key_exists("RelatedDrugName",$param) and $param["RelatedDrugName"] !== null) {
            $this->RelatedDrugName = $param["RelatedDrugName"];
        }

        if (array_key_exists("RelatedPrescriptionId",$param) and $param["RelatedPrescriptionId"] !== null) {
            $this->RelatedPrescriptionId = $param["RelatedPrescriptionId"];
        }
    }
}
