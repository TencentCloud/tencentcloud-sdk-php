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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MakeUpWorkflowNew请求参数结构体
 *
 * @method string getWorkFlowId() 获取工作流id
 * @method void setWorkFlowId(string $WorkFlowId) 设置工作流id
 * @method string getStartTime() 获取补录开始时间
 * @method void setStartTime(string $StartTime) 设置补录开始时间
 * @method string getEndTime() 获取补录结束时间
 * @method void setEndTime(string $EndTime) 设置补录结束时间
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 */
class MakeUpWorkflowNewRequest extends AbstractModel
{
    /**
     * @var string 工作流id
     */
    public $WorkFlowId;

    /**
     * @var string 补录开始时间
     */
    public $StartTime;

    /**
     * @var string 补录结束时间
     */
    public $EndTime;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @param string $WorkFlowId 工作流id
     * @param string $StartTime 补录开始时间
     * @param string $EndTime 补录结束时间
     * @param string $ProjectId 项目id
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
        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
