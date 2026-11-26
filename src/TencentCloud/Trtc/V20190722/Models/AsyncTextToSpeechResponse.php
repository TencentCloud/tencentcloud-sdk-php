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
 * AsyncTextToSpeech返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method integer getCurrentTaskCount() 获取<p>当前正在处理的任务数</p>
 * @method void setCurrentTaskCount(integer $CurrentTaskCount) 设置<p>当前正在处理的任务数</p>
 * @method integer getMaxTaskCount() 获取<p>最大允许提交的任务数，默认1000，有提额需求请提交工单</p>
 * @method void setMaxTaskCount(integer $MaxTaskCount) 设置<p>最大允许提交的任务数，默认1000，有提额需求请提交工单</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AsyncTextToSpeechResponse extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>当前正在处理的任务数</p>
     */
    public $CurrentTaskCount;

    /**
     * @var integer <p>最大允许提交的任务数，默认1000，有提额需求请提交工单</p>
     */
    public $MaxTaskCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param integer $CurrentTaskCount <p>当前正在处理的任务数</p>
     * @param integer $MaxTaskCount <p>最大允许提交的任务数，默认1000，有提额需求请提交工单</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CurrentTaskCount",$param) and $param["CurrentTaskCount"] !== null) {
            $this->CurrentTaskCount = $param["CurrentTaskCount"];
        }

        if (array_key_exists("MaxTaskCount",$param) and $param["MaxTaskCount"] !== null) {
            $this->MaxTaskCount = $param["MaxTaskCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
