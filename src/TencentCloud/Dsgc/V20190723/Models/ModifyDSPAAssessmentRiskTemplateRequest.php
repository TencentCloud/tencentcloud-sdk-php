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
 * ModifyDSPAAssessmentRiskTemplate请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method string getTemplateName() 获取模版名称
 * @method void setTemplateName(string $TemplateName) 设置模版名称
 * @method string getTemplateDescription() 获取模版的描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置模版的描述
 * @method integer getTemplateId() 获取模版id
 * @method void setTemplateId(integer $TemplateId) 设置模版id
 * @method integer getRiskLevelId() 获取修改的风险等级id
 * @method void setRiskLevelId(integer $RiskLevelId) 设置修改的风险等级id
 * @method array getRiskIdList() 获取脆弱项列表
 * @method void setRiskIdList(array $RiskIdList) 设置脆弱项列表
 */
class ModifyDSPAAssessmentRiskTemplateRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var string 模版名称
     */
    public $TemplateName;

    /**
     * @var string 模版的描述
     */
    public $TemplateDescription;

    /**
     * @var integer 模版id
     */
    public $TemplateId;

    /**
     * @var integer 修改的风险等级id
     */
    public $RiskLevelId;

    /**
     * @var array 脆弱项列表
     */
    public $RiskIdList;

    /**
     * @param string $DspaId dspa实例id
     * @param string $TemplateName 模版名称
     * @param string $TemplateDescription 模版的描述
     * @param integer $TemplateId 模版id
     * @param integer $RiskLevelId 修改的风险等级id
     * @param array $RiskIdList 脆弱项列表
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("RiskLevelId",$param) and $param["RiskLevelId"] !== null) {
            $this->RiskLevelId = $param["RiskLevelId"];
        }

        if (array_key_exists("RiskIdList",$param) and $param["RiskIdList"] !== null) {
            $this->RiskIdList = $param["RiskIdList"];
        }
    }
}
