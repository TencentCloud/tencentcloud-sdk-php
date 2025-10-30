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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLifecyclePolicyDownloadTask请求参数结构体
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getType() 获取下载文件的类型，包含 FileSuccessList，FileTotalList，FileFailedList
 * @method void setType(string $Type) 设置下载文件的类型，包含 FileSuccessList，FileTotalList，FileFailedList
 */
class CreateLifecyclePolicyDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 下载文件的类型，包含 FileSuccessList，FileTotalList，FileFailedList
     */
    public $Type;

    /**
     * @param string $TaskId 任务Id
     * @param string $Type 下载文件的类型，包含 FileSuccessList，FileTotalList，FileFailedList
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
