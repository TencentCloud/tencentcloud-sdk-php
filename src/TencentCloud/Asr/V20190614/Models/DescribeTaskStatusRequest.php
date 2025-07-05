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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStatus请求参数结构体
 *
 * @method integer getTaskId() 获取从CreateRecTask接口获取的TaskId，用于获取任务状态与结果。
**注意：TaskId有效期为24小时，超过24小时的TaskId请不要再查询。**
 * @method void setTaskId(integer $TaskId) 设置从CreateRecTask接口获取的TaskId，用于获取任务状态与结果。
**注意：TaskId有效期为24小时，超过24小时的TaskId请不要再查询。**
 */
class DescribeTaskStatusRequest extends AbstractModel
{
    /**
     * @var integer 从CreateRecTask接口获取的TaskId，用于获取任务状态与结果。
**注意：TaskId有效期为24小时，超过24小时的TaskId请不要再查询。**
     */
    public $TaskId;

    /**
     * @param integer $TaskId 从CreateRecTask接口获取的TaskId，用于获取任务状态与结果。
**注意：TaskId有效期为24小时，超过24小时的TaskId请不要再查询。**
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
