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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间任务信息
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getResourceTaskType() 获取<p>任务类型</p>
 * @method void setResourceTaskType(string $ResourceTaskType) 设置<p>任务类型</p>
 * @method string getResourceGroupId() 获取<p>任务所属资源组</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>任务所属资源组</p>
 */
class WorkspaceTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>任务类型</p>
     */
    public $ResourceTaskType;

    /**
     * @var string <p>任务所属资源组</p>
     */
    public $ResourceGroupId;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $Region <p>地域</p>
     * @param string $ResourceTaskType <p>任务类型</p>
     * @param string $ResourceGroupId <p>任务所属资源组</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ResourceTaskType",$param) and $param["ResourceTaskType"] !== null) {
            $this->ResourceTaskType = $param["ResourceTaskType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }
    }
}
