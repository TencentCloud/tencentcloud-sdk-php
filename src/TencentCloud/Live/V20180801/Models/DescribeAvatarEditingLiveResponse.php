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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAvatarEditingLive返回参数结构体
 *
 * @method string getChannelId() 获取<p>通道ID，通常是待编辑的直播流的源ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道ID，通常是待编辑的直播流的源ID</p>
 * @method string getLiveId() 获取<p>实时编辑会话ID</p>
 * @method void setLiveId(string $LiveId) 设置<p>实时编辑会话ID</p>
 * @method string getStatus() 获取<p>实时编辑会话的状态</p><p>枚举值：</p><ul><li>waiting： 等待中</li><li>on_live： 直播中</li><li>ending： 结束中</li><li>ended： 已结束</li><li>prepared： 准备中</li><li>not_exist： 不存在</li></ul>
 * @method void setStatus(string $Status) 设置<p>实时编辑会话的状态</p><p>枚举值：</p><ul><li>waiting： 等待中</li><li>on_live： 直播中</li><li>ending： 结束中</li><li>ended： 已结束</li><li>prepared： 准备中</li><li>not_exist： 不存在</li></ul>
 * @method string getPhase() 获取<p>内部模块会话状态</p>
 * @method void setPhase(string $Phase) 设置<p>内部模块会话状态</p>
 * @method string getCallMode() 获取<p>输出Mode</p>
 * @method void setCallMode(string $CallMode) 设置<p>输出Mode</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getStartTime() 获取<p>开播时刻</p>
 * @method void setStartTime(string $StartTime) 设置<p>开播时刻</p>
 * @method string getEndTime() 获取<p>结束时间，如果还没结束则该值为0</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，如果还没结束则该值为0</p>
 * @method string getTraceId() 获取<p>跟踪ID，用于查日志</p>
 * @method void setTraceId(string $TraceId) 设置<p>跟踪ID，用于查日志</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAvatarEditingLiveResponse extends AbstractModel
{
    /**
     * @var string <p>通道ID，通常是待编辑的直播流的源ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>实时编辑会话ID</p>
     */
    public $LiveId;

    /**
     * @var string <p>实时编辑会话的状态</p><p>枚举值：</p><ul><li>waiting： 等待中</li><li>on_live： 直播中</li><li>ending： 结束中</li><li>ended： 已结束</li><li>prepared： 准备中</li><li>not_exist： 不存在</li></ul>
     */
    public $Status;

    /**
     * @var string <p>内部模块会话状态</p>
     */
    public $Phase;

    /**
     * @var string <p>输出Mode</p>
     */
    public $CallMode;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>开播时刻</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，如果还没结束则该值为0</p>
     */
    public $EndTime;

    /**
     * @var string <p>跟踪ID，用于查日志</p>
     */
    public $TraceId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ChannelId <p>通道ID，通常是待编辑的直播流的源ID</p>
     * @param string $LiveId <p>实时编辑会话ID</p>
     * @param string $Status <p>实时编辑会话的状态</p><p>枚举值：</p><ul><li>waiting： 等待中</li><li>on_live： 直播中</li><li>ending： 结束中</li><li>ended： 已结束</li><li>prepared： 准备中</li><li>not_exist： 不存在</li></ul>
     * @param string $Phase <p>内部模块会话状态</p>
     * @param string $CallMode <p>输出Mode</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $StartTime <p>开播时刻</p>
     * @param string $EndTime <p>结束时间，如果还没结束则该值为0</p>
     * @param string $TraceId <p>跟踪ID，用于查日志</p>
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("LiveId",$param) and $param["LiveId"] !== null) {
            $this->LiveId = $param["LiveId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("CallMode",$param) and $param["CallMode"] !== null) {
            $this->CallMode = $param["CallMode"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
