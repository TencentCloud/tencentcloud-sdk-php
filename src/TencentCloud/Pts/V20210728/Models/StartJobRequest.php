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
 * StartJob请求参数结构体
 *
 * @method string getScenarioId() 获取场景ID
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
 * @method string getJobOwner() 获取任务发起人
 * @method void setJobOwner(string $JobOwner) 设置任务发起人
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method boolean getDebug() 获取是否调试
 * @method void setDebug(boolean $Debug) 设置是否调试
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 */
class StartJobRequest extends AbstractModel
{
    /**
     * @var string 场景ID
     */
    public $ScenarioId;

    /**
     * @var string 任务发起人
     */
    public $JobOwner;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var boolean 是否调试
     */
    public $Debug;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @param string $ScenarioId 场景ID
     * @param string $JobOwner 任务发起人
     * @param string $ProjectId 项目ID
     * @param boolean $Debug 是否调试
     * @param string $Note 备注
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
        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
