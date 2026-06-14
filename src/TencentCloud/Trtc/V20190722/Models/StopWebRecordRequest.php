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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopWebRecord请求参数结构体
 *
 * @method string getTaskId() 获取<p>需要停止的任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>需要停止的任务Id</p>
 */
class StopWebRecordRequest extends AbstractModel
{
    /**
     * @var string <p>需要停止的任务Id</p>
     */
    public $TaskId;

    /**
     * @param string $TaskId <p>需要停止的任务Id</p>
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
