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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCompliancePeriodTask请求参数结构体
 *
 * @method integer getPeriodTaskId() 获取要修改的定时任务的ID，由DescribeCompliancePeriodTaskList接口返回。
 * @method void setPeriodTaskId(integer $PeriodTaskId) 设置要修改的定时任务的ID，由DescribeCompliancePeriodTaskList接口返回。
 * @method CompliancePeriodTaskRule getPeriodRule() 获取定时任务的周期规则。不填时，不修改。
 * @method void setPeriodRule(CompliancePeriodTaskRule $PeriodRule) 设置定时任务的周期规则。不填时，不修改。
 * @method array getStandardSettings() 获取设置合规标准。不填时，不修改。
 * @method void setStandardSettings(array $StandardSettings) 设置设置合规标准。不填时，不修改。
 */
class ModifyCompliancePeriodTaskRequest extends AbstractModel
{
    /**
     * @var integer 要修改的定时任务的ID，由DescribeCompliancePeriodTaskList接口返回。
     */
    public $PeriodTaskId;

    /**
     * @var CompliancePeriodTaskRule 定时任务的周期规则。不填时，不修改。
     */
    public $PeriodRule;

    /**
     * @var array 设置合规标准。不填时，不修改。
     */
    public $StandardSettings;

    /**
     * @param integer $PeriodTaskId 要修改的定时任务的ID，由DescribeCompliancePeriodTaskList接口返回。
     * @param CompliancePeriodTaskRule $PeriodRule 定时任务的周期规则。不填时，不修改。
     * @param array $StandardSettings 设置合规标准。不填时，不修改。
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
        if (array_key_exists("PeriodTaskId",$param) and $param["PeriodTaskId"] !== null) {
            $this->PeriodTaskId = $param["PeriodTaskId"];
        }

        if (array_key_exists("PeriodRule",$param) and $param["PeriodRule"] !== null) {
            $this->PeriodRule = new CompliancePeriodTaskRule();
            $this->PeriodRule->deserialize($param["PeriodRule"]);
        }

        if (array_key_exists("StandardSettings",$param) and $param["StandardSettings"] !== null) {
            $this->StandardSettings = [];
            foreach ($param["StandardSettings"] as $key => $value){
                $obj = new ComplianceBenchmarkStandardEnable();
                $obj->deserialize($value);
                array_push($this->StandardSettings, $obj);
            }
        }
    }
}
