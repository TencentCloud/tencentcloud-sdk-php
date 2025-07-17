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
 * DeleteTaskLineage请求参数结构体
 *
 * @method LineageTask getTask() 获取任务信息
 * @method void setTask(LineageTask $Task) 设置任务信息
 * @method string getChannelType() 获取wedata内部任务默认SQL
 * @method void setChannelType(string $ChannelType) 设置wedata内部任务默认SQL
 */
class DeleteTaskLineageRequest extends AbstractModel
{
    /**
     * @var LineageTask 任务信息
     */
    public $Task;

    /**
     * @var string wedata内部任务默认SQL
     */
    public $ChannelType;

    /**
     * @param LineageTask $Task 任务信息
     * @param string $ChannelType wedata内部任务默认SQL
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
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new LineageTask();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }
    }
}
