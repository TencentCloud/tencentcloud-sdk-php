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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流任务运行详情
 *
 * @method TriggerWorkflowRunBrief getTriggerWorkflowRun() 获取工作流运行信息
 * @method void setTriggerWorkflowRun(TriggerWorkflowRunBrief $TriggerWorkflowRun) 设置工作流运行信息
 * @method array getTriggerTaskRuns() 获取任务运行信息
 * @method void setTriggerTaskRuns(array $TriggerTaskRuns) 设置任务运行信息
 * @method array getBizStateEnumInfos() 获取业务状态枚举信息
 * @method void setBizStateEnumInfos(array $BizStateEnumInfos) 设置业务状态枚举信息
 */
class TriggerWorkflowTaskRunDetailBrief extends AbstractModel
{
    /**
     * @var TriggerWorkflowRunBrief 工作流运行信息
     */
    public $TriggerWorkflowRun;

    /**
     * @var array 任务运行信息
     */
    public $TriggerTaskRuns;

    /**
     * @var array 业务状态枚举信息
     */
    public $BizStateEnumInfos;

    /**
     * @param TriggerWorkflowRunBrief $TriggerWorkflowRun 工作流运行信息
     * @param array $TriggerTaskRuns 任务运行信息
     * @param array $BizStateEnumInfos 业务状态枚举信息
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
        if (array_key_exists("TriggerWorkflowRun",$param) and $param["TriggerWorkflowRun"] !== null) {
            $this->TriggerWorkflowRun = new TriggerWorkflowRunBrief();
            $this->TriggerWorkflowRun->deserialize($param["TriggerWorkflowRun"]);
        }

        if (array_key_exists("TriggerTaskRuns",$param) and $param["TriggerTaskRuns"] !== null) {
            $this->TriggerTaskRuns = [];
            foreach ($param["TriggerTaskRuns"] as $key => $value){
                $obj = new TriggerTaskRunBrief();
                $obj->deserialize($value);
                array_push($this->TriggerTaskRuns, $obj);
            }
        }

        if (array_key_exists("BizStateEnumInfos",$param) and $param["BizStateEnumInfos"] !== null) {
            $this->BizStateEnumInfos = [];
            foreach ($param["BizStateEnumInfos"] as $key => $value){
                $obj = new BizStateEnumInfoBrief();
                $obj->deserialize($value);
                array_push($this->BizStateEnumInfos, $obj);
            }
        }
    }
}
