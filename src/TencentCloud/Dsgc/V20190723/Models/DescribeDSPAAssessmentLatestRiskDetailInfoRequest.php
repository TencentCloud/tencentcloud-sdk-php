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
 * DescribeDSPAAssessmentLatestRiskDetailInfo请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例Id
 * @method void setDspaId(string $DspaId) 设置dspa实例Id
 * @method integer getTemplateId() 获取评估模版id
 * @method void setTemplateId(integer $TemplateId) 设置评估模版id
 * @method integer getRiskId() 获取风险id
 * @method void setRiskId(integer $RiskId) 设置风险id
 */
class DescribeDSPAAssessmentLatestRiskDetailInfoRequest extends AbstractModel
{
    /**
     * @var string dspa实例Id
     */
    public $DspaId;

    /**
     * @var integer 评估模版id
     */
    public $TemplateId;

    /**
     * @var integer 风险id
     */
    public $RiskId;

    /**
     * @param string $DspaId dspa实例Id
     * @param integer $TemplateId 评估模版id
     * @param integer $RiskId 风险id
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }
    }
}
