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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAgentRecordTask请求参数结构体
 *
 * @method string getLiveRoomUrl() 获取<p>直播间URL</p>
 * @method void setLiveRoomUrl(string $LiveRoomUrl) 设置<p>直播间URL</p>
 * @method integer getMaxDurationMinutes() 获取<p>最长录制时长</p><p>单位：分</p><p>最长支持720分</p>
 * @method void setMaxDurationMinutes(integer $MaxDurationMinutes) 设置<p>最长录制时长</p><p>单位：分</p><p>最长支持720分</p>
 * @method AgentStoreCosParam getStoreCosParam() 获取<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method void setStoreCosParam(AgentStoreCosParam $StoreCosParam) 设置<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method string getStartTime() 获取<p>定时录制开始时刻</p><p>参数格式：2026-07-01T15:31:32+08:00</p><p>空表示提交后立即开始录制；非空表示从该时刻开始录制</p>
 * @method void setStartTime(string $StartTime) 设置<p>定时录制开始时刻</p><p>参数格式：2026-07-01T15:31:32+08:00</p><p>空表示提交后立即开始录制；非空表示从该时刻开始录制</p>
 * @method string getInterruptPolicy() 获取<p>中断策略</p><p>枚举值：</p><ul><li>STOP_ON_INTERRUPT： 直播流中断后立即结束录制</li><li>CONTINUE_UNTIL_END： 直播流中断时忽略中断，继续录制直到任务结束时间</li></ul><p>默认值：STOP_ON_INTERRUPT</p>
 * @method void setInterruptPolicy(string $InterruptPolicy) 设置<p>中断策略</p><p>枚举值：</p><ul><li>STOP_ON_INTERRUPT： 直播流中断后立即结束录制</li><li>CONTINUE_UNTIL_END： 直播流中断时忽略中断，继续录制直到任务结束时间</li></ul><p>默认值：STOP_ON_INTERRUPT</p>
 */
class CreateAgentRecordTaskRequest extends AbstractModel
{
    /**
     * @var string <p>直播间URL</p>
     */
    public $LiveRoomUrl;

    /**
     * @var integer <p>最长录制时长</p><p>单位：分</p><p>最长支持720分</p>
     */
    public $MaxDurationMinutes;

    /**
     * @var AgentStoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     */
    public $StoreCosParam;

    /**
     * @var string <p>定时录制开始时刻</p><p>参数格式：2026-07-01T15:31:32+08:00</p><p>空表示提交后立即开始录制；非空表示从该时刻开始录制</p>
     */
    public $StartTime;

    /**
     * @var string <p>中断策略</p><p>枚举值：</p><ul><li>STOP_ON_INTERRUPT： 直播流中断后立即结束录制</li><li>CONTINUE_UNTIL_END： 直播流中断时忽略中断，继续录制直到任务结束时间</li></ul><p>默认值：STOP_ON_INTERRUPT</p>
     */
    public $InterruptPolicy;

    /**
     * @param string $LiveRoomUrl <p>直播间URL</p>
     * @param integer $MaxDurationMinutes <p>最长录制时长</p><p>单位：分</p><p>最长支持720分</p>
     * @param AgentStoreCosParam $StoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     * @param string $StartTime <p>定时录制开始时刻</p><p>参数格式：2026-07-01T15:31:32+08:00</p><p>空表示提交后立即开始录制；非空表示从该时刻开始录制</p>
     * @param string $InterruptPolicy <p>中断策略</p><p>枚举值：</p><ul><li>STOP_ON_INTERRUPT： 直播流中断后立即结束录制</li><li>CONTINUE_UNTIL_END： 直播流中断时忽略中断，继续录制直到任务结束时间</li></ul><p>默认值：STOP_ON_INTERRUPT</p>
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
        if (array_key_exists("LiveRoomUrl",$param) and $param["LiveRoomUrl"] !== null) {
            $this->LiveRoomUrl = $param["LiveRoomUrl"];
        }

        if (array_key_exists("MaxDurationMinutes",$param) and $param["MaxDurationMinutes"] !== null) {
            $this->MaxDurationMinutes = $param["MaxDurationMinutes"];
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AgentStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("InterruptPolicy",$param) and $param["InterruptPolicy"] !== null) {
            $this->InterruptPolicy = $param["InterruptPolicy"];
        }
    }
}
