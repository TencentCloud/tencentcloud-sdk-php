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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteJobs请求参数结构体
 *
 * @method array getJobIds() 获取任务ID数组
 * @method void setJobIds(array $JobIds) 设置任务ID数组
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getScenarioIds() 获取场景ID数组
 * @method void setScenarioIds(array $ScenarioIds) 设置场景ID数组
 */
class DeleteJobsRequest extends AbstractModel
{
    /**
     * @var array 任务ID数组
     */
    public $JobIds;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 场景ID数组
     */
    public $ScenarioIds;

    /**
     * @param array $JobIds 任务ID数组
     * @param string $ProjectId 项目ID
     * @param array $ScenarioIds 场景ID数组
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
        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }
    }
}
