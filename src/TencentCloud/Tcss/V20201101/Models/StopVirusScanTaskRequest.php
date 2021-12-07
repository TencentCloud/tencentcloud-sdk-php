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
 * StopVirusScanTask请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method array getContainerIds() 获取需要停止的容器id 为空默认停止整个任务
 * @method void setContainerIds(array $ContainerIds) 设置需要停止的容器id 为空默认停止整个任务
 */
class StopVirusScanTaskRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var array 需要停止的容器id 为空默认停止整个任务
     */
    public $ContainerIds;

    /**
     * @param string $TaskId 任务ID
     * @param array $ContainerIds 需要停止的容器id 为空默认停止整个任务
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

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }
    }
}
