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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAAssessmentRiskTemplateDetail返回参数结构体
 *
 * @method integer getTemplateId() 获取模板id
 * @method void setTemplateId(integer $TemplateId) 设置模板id
 * @method string getTemplateName() 获取模板名称
 * @method void setTemplateName(string $TemplateName) 设置模板名称
 * @method string getTemplateDescription() 获取模板的描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置模板的描述
 * @method integer getRiskLevelId() 获取风险等级
 * @method void setRiskLevelId(integer $RiskLevelId) 设置风险等级
 * @method string getRiskLevelName() 获取风险等级名称
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级名称
 * @method array getRiskItemList() 获取脆弱项配置列表
 * @method void setRiskItemList(array $RiskItemList) 设置脆弱项配置列表
 * @method integer getTotalCount() 获取脆弱项配置条数
 * @method void setTotalCount(integer $TotalCount) 设置脆弱项配置条数
 * @method integer getTaskCitations() 获取被任务引用次数
 * @method void setTaskCitations(integer $TaskCitations) 设置被任务引用次数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskTemplateDetailResponse extends AbstractModel
{
    /**
     * @var integer 模板id
     */
    public $TemplateId;

    /**
     * @var string 模板名称
     */
    public $TemplateName;

    /**
     * @var string 模板的描述
     */
    public $TemplateDescription;

    /**
     * @var integer 风险等级
     */
    public $RiskLevelId;

    /**
     * @var string 风险等级名称
     */
    public $RiskLevelName;

    /**
     * @var array 脆弱项配置列表
     */
    public $RiskItemList;

    /**
     * @var integer 脆弱项配置条数
     */
    public $TotalCount;

    /**
     * @var integer 被任务引用次数
     */
    public $TaskCitations;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TemplateId 模板id
     * @param string $TemplateName 模板名称
     * @param string $TemplateDescription 模板的描述
     * @param integer $RiskLevelId 风险等级
     * @param string $RiskLevelName 风险等级名称
     * @param array $RiskItemList 脆弱项配置列表
     * @param integer $TotalCount 脆弱项配置条数
     * @param integer $TaskCitations 被任务引用次数
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("RiskLevelId",$param) and $param["RiskLevelId"] !== null) {
            $this->RiskLevelId = $param["RiskLevelId"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("RiskItemList",$param) and $param["RiskItemList"] !== null) {
            $this->RiskItemList = [];
            foreach ($param["RiskItemList"] as $key => $value){
                $obj = new AssessmentRiskItem();
                $obj->deserialize($value);
                array_push($this->RiskItemList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TaskCitations",$param) and $param["TaskCitations"] !== null) {
            $this->TaskCitations = $param["TaskCitations"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
