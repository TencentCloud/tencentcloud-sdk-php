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
 * DeleteScenarios请求参数结构体
 *
 * @method array getScenarioIds() 获取场景ID数组
 * @method void setScenarioIds(array $ScenarioIds) 设置场景ID数组
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method boolean getDeleteJobs() 获取是否删除场景相关的任务。默认为否。
 * @method void setDeleteJobs(boolean $DeleteJobs) 设置是否删除场景相关的任务。默认为否。
 */
class DeleteScenariosRequest extends AbstractModel
{
    /**
     * @var array 场景ID数组
     */
    public $ScenarioIds;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var boolean 是否删除场景相关的任务。默认为否。
     */
    public $DeleteJobs;

    /**
     * @param array $ScenarioIds 场景ID数组
     * @param string $ProjectId 项目ID
     * @param boolean $DeleteJobs 是否删除场景相关的任务。默认为否。
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
        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteJobs",$param) and $param["DeleteJobs"] !== null) {
            $this->DeleteJobs = $param["DeleteJobs"];
        }
    }
}
