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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordPlaybackUrl请求参数结构体
 *
 * @method string getChannelId() 获取设备通道ID
 * @method void setChannelId(string $ChannelId) 设置设备通道ID
 * @method integer getStartTime() 获取回放开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method void setStartTime(integer $StartTime) 设置回放开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method integer getEndTime() 获取回放结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
 * @method void setEndTime(integer $EndTime) 设置回放结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
 * @method boolean getIsInternal() 获取是否获取内网地址
 * @method void setIsInternal(boolean $IsInternal) 设置是否获取内网地址
 * @method boolean getCorrectTimestamp() 获取云录像回放时，是否需要开启时间戳矫正，主要解决时间戳反转、回退等问题导致无法播放
 * @method void setCorrectTimestamp(boolean $CorrectTimestamp) 设置云录像回放时，是否需要开启时间戳矫正，主要解决时间戳反转、回退等问题导致无法播放
 */
class DescribeRecordPlaybackUrlRequest extends AbstractModel
{
    /**
     * @var string 设备通道ID
     */
    public $ChannelId;

    /**
     * @var integer 回放开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     */
    public $StartTime;

    /**
     * @var integer 回放结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
     */
    public $EndTime;

    /**
     * @var boolean 是否获取内网地址
     */
    public $IsInternal;

    /**
     * @var boolean 云录像回放时，是否需要开启时间戳矫正，主要解决时间戳反转、回退等问题导致无法播放
     */
    public $CorrectTimestamp;

    /**
     * @param string $ChannelId 设备通道ID
     * @param integer $StartTime 回放开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     * @param integer $EndTime 回放结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
     * @param boolean $IsInternal 是否获取内网地址
     * @param boolean $CorrectTimestamp 云录像回放时，是否需要开启时间戳矫正，主要解决时间戳反转、回退等问题导致无法播放
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }

        if (array_key_exists("CorrectTimestamp",$param) and $param["CorrectTimestamp"] !== null) {
            $this->CorrectTimestamp = $param["CorrectTimestamp"];
        }
    }
}
