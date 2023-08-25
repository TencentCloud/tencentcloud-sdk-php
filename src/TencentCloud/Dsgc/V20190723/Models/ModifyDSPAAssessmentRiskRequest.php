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
 * ModifyDSPAAssessmentRisk请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method string getTaskId() 获取评估任务Id，格式“task-xxxxxxxx”
 * @method void setTaskId(string $TaskId) 设置评估任务Id，格式“task-xxxxxxxx”
 * @method string getRiskId() 获取风险项Id，格式“risk-xxxxxxxx”
 * @method void setRiskId(string $RiskId) 设置风险项Id，格式“risk-xxxxxxxx”
 * @method string getStatus() 获取风险项状态。（waiting:待处理，processing:处理中，finished:已处理）
 * @method void setStatus(string $Status) 设置风险项状态。（waiting:待处理，processing:处理中，finished:已处理）
 */
class ModifyDSPAAssessmentRiskRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id，格式“dspa-xxxxxxxx”
     */
    public $DspaId;

    /**
     * @var string 评估任务Id，格式“task-xxxxxxxx”
     */
    public $TaskId;

    /**
     * @var string 风险项Id，格式“risk-xxxxxxxx”
     */
    public $RiskId;

    /**
     * @var string 风险项状态。（waiting:待处理，processing:处理中，finished:已处理）
     */
    public $Status;

    /**
     * @param string $DspaId DSPA实例Id，格式“dspa-xxxxxxxx”
     * @param string $TaskId 评估任务Id，格式“task-xxxxxxxx”
     * @param string $RiskId 风险项Id，格式“risk-xxxxxxxx”
     * @param string $Status 风险项状态。（waiting:待处理，processing:处理中，finished:已处理）
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
