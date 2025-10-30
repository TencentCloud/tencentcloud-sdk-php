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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceTaskStatus请求参数结构体
 *
 * @method string getTaskId() 获取容器实例任务ID，可通过调用 [DeployContainerGroup](https://cloud.tencent.com/document/product/649/120669) 部署容器应用，查询其返回内容中的任务ID。
 * @method void setTaskId(string $TaskId) 设置容器实例任务ID，可通过调用 [DeployContainerGroup](https://cloud.tencent.com/document/product/649/120669) 部署容器应用，查询其返回内容中的任务ID。
 */
class DescribeResourceTaskStatusRequest extends AbstractModel
{
    /**
     * @var string 容器实例任务ID，可通过调用 [DeployContainerGroup](https://cloud.tencent.com/document/product/649/120669) 部署容器应用，查询其返回内容中的任务ID。
     */
    public $TaskId;

    /**
     * @param string $TaskId 容器实例任务ID，可通过调用 [DeployContainerGroup](https://cloud.tencent.com/document/product/649/120669) 部署容器应用，查询其返回内容中的任务ID。
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
    }
}
