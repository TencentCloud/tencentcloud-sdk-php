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
 * ModifyDSPAAssessmentRiskLevel请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method string getRiskLevelName() 获取风险等级名称
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级名称
 * @method string getRiskLevelDescription() 获取风险的描述
 * @method void setRiskLevelDescription(string $RiskLevelDescription) 设置风险的描述
 * @method integer getRiskId() 获取风险id
 * @method void setRiskId(integer $RiskId) 设置风险id
 * @method array getModifyRiskItem() 获取需要修改的风险列表
 * @method void setModifyRiskItem(array $ModifyRiskItem) 设置需要修改的风险列表
 */
class ModifyDSPAAssessmentRiskLevelRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var string 风险等级名称
     */
    public $RiskLevelName;

    /**
     * @var string 风险的描述
     */
    public $RiskLevelDescription;

    /**
     * @var integer 风险id
     */
    public $RiskId;

    /**
     * @var array 需要修改的风险列表
     */
    public $ModifyRiskItem;

    /**
     * @param string $DspaId dspa实例id
     * @param string $RiskLevelName 风险等级名称
     * @param string $RiskLevelDescription 风险的描述
     * @param integer $RiskId 风险id
     * @param array $ModifyRiskItem 需要修改的风险列表
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

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("RiskLevelDescription",$param) and $param["RiskLevelDescription"] !== null) {
            $this->RiskLevelDescription = $param["RiskLevelDescription"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("ModifyRiskItem",$param) and $param["ModifyRiskItem"] !== null) {
            $this->ModifyRiskItem = [];
            foreach ($param["ModifyRiskItem"] as $key => $value){
                $obj = new RiskLevelMatrix();
                $obj->deserialize($value);
                array_push($this->ModifyRiskItem, $obj);
            }
        }
    }
}
