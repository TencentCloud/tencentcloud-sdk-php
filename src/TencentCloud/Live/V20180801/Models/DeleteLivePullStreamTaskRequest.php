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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLivePullStreamTask请求参数结构体
 *
 * @method string getTaskId() 获取任务 Id。
 * @method void setTaskId(string $TaskId) 设置任务 Id。
 * @method string getOperator() 获取操作人姓名。
 * @method void setOperator(string $Operator) 设置操作人姓名。
 * @method string getSpecifyTaskId() 获取指定任务 ID。注意：用于删除使用自定义任务 ID 创建的任务。
 * @method void setSpecifyTaskId(string $SpecifyTaskId) 设置指定任务 ID。注意：用于删除使用自定义任务 ID 创建的任务。
 */
class DeleteLivePullStreamTaskRequest extends AbstractModel
{
    /**
     * @var string 任务 Id。
     */
    public $TaskId;

    /**
     * @var string 操作人姓名。
     */
    public $Operator;

    /**
     * @var string 指定任务 ID。注意：用于删除使用自定义任务 ID 创建的任务。
     */
    public $SpecifyTaskId;

    /**
     * @param string $TaskId 任务 Id。
     * @param string $Operator 操作人姓名。
     * @param string $SpecifyTaskId 指定任务 ID。注意：用于删除使用自定义任务 ID 创建的任务。
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("SpecifyTaskId",$param) and $param["SpecifyTaskId"] !== null) {
            $this->SpecifyTaskId = $param["SpecifyTaskId"];
        }
    }
}
