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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单任务的缺失实例处理策略
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getMissingInstanceStrategy() 获取<p>缺失实例处理策略</p>
 * @method void setMissingInstanceStrategy(string $MissingInstanceStrategy) 设置<p>缺失实例处理策略</p>
 */
class TaskMissingInstanceStrategy extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>缺失实例处理策略</p>
     */
    public $MissingInstanceStrategy;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $MissingInstanceStrategy <p>缺失实例处理策略</p>
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

        if (array_key_exists("MissingInstanceStrategy",$param) and $param["MissingInstanceStrategy"] !== null) {
            $this->MissingInstanceStrategy = $param["MissingInstanceStrategy"];
        }
    }
}
