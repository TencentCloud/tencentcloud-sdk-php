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
 * DescribeRealTimeTaskInstanceNodeInfo请求参数结构体
 *
 * @method string getTaskId() 获取实时任务id
 * @method void setTaskId(string $TaskId) 设置实时任务id
 * @method string getProjectId() 获取工程id
 * @method void setProjectId(string $ProjectId) 设置工程id
 */
class DescribeRealTimeTaskInstanceNodeInfoRequest extends AbstractModel
{
    /**
     * @var string 实时任务id
     */
    public $TaskId;

    /**
     * @var string 工程id
     */
    public $ProjectId;

    /**
     * @param string $TaskId 实时任务id
     * @param string $ProjectId 工程id
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
