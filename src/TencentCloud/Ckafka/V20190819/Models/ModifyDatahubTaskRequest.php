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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDatahubTask请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getDescription() 获取任务描述信息
 * @method void setDescription(string $Description) 设置任务描述信息
 */
class ModifyDatahubTaskRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务描述信息
     */
    public $Description;

    /**
     * @param string $TaskId 任务id
     * @param string $TaskName 任务名称
     * @param string $Description 任务描述信息
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
