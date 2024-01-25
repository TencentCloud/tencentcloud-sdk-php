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
 * KillTasksTestRun请求参数结构体
 *
 * @method string getId() 获取作业ID
 * @method void setId(string $Id) 设置作业ID
 * @method array getTaskIds() 获取任务编号列表
 * @method void setTaskIds(array $TaskIds) 设置任务编号列表
 */
class KillTasksTestRunRequest extends AbstractModel
{
    /**
     * @var string 作业ID
     */
    public $Id;

    /**
     * @var array 任务编号列表
     */
    public $TaskIds;

    /**
     * @param string $Id 作业ID
     * @param array $TaskIds 任务编号列表
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }
    }
}
