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
 * DescribeVoiceConversation返回参数结构体
 *
 * @method integer getStartTime() 获取<p>任务启动时间</p><p>单位：毫秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>任务启动时间</p><p>单位：毫秒</p>
 * @method string getStatus() 获取<p>转录任务状态。</p><p>枚举值：</p><ul><li>Idle： 表示当前转录任务空闲中 </li><li>InProgress： 表示当前转录任务正在进行中</li><li>Exited： 表示当前转录任务正在退出的过程中</li></ul>
 * @method void setStatus(string $Status) 设置<p>转录任务状态。</p><p>枚举值：</p><ul><li>Idle： 表示当前转录任务空闲中 </li><li>InProgress： 表示当前转录任务正在进行中</li><li>Exited： 表示当前转录任务正在退出的过程中</li></ul>
 * @method string getTaskId() 获取<p>转录任务的唯一Id。</p>
 * @method void setTaskId(string $TaskId) 设置<p>转录任务的唯一Id。</p>
 * @method array getHistoryContents() 获取<p>历史对话信息。</p>
 * @method void setHistoryContents(array $HistoryContents) 设置<p>历史对话信息。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVoiceConversationResponse extends AbstractModel
{
    /**
     * @var integer <p>任务启动时间</p><p>单位：毫秒</p>
     */
    public $StartTime;

    /**
     * @var string <p>转录任务状态。</p><p>枚举值：</p><ul><li>Idle： 表示当前转录任务空闲中 </li><li>InProgress： 表示当前转录任务正在进行中</li><li>Exited： 表示当前转录任务正在退出的过程中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>转录任务的唯一Id。</p>
     */
    public $TaskId;

    /**
     * @var array <p>历史对话信息。</p>
     */
    public $HistoryContents;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StartTime <p>任务启动时间</p><p>单位：毫秒</p>
     * @param string $Status <p>转录任务状态。</p><p>枚举值：</p><ul><li>Idle： 表示当前转录任务空闲中 </li><li>InProgress： 表示当前转录任务正在进行中</li><li>Exited： 表示当前转录任务正在退出的过程中</li></ul>
     * @param string $TaskId <p>转录任务的唯一Id。</p>
     * @param array $HistoryContents <p>历史对话信息。</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("HistoryContents",$param) and $param["HistoryContents"] !== null) {
            $this->HistoryContents = [];
            foreach ($param["HistoryContents"] as $key => $value){
                $obj = new VoiceConversationHistoryContent();
                $obj->deserialize($value);
                array_push($this->HistoryContents, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
