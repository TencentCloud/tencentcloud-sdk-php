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
 * DescribeRecordFile请求参数结构体
 *
 * @method string getDeviceId() 获取通道所属设备ID
 * @method void setDeviceId(string $DeviceId) 设置通道所属设备ID
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method integer getStartTime() 获取检索开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method void setStartTime(integer $StartTime) 设置检索开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method integer getEndTime() 获取检索结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
 * @method void setEndTime(integer $EndTime) 设置检索结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
 * @method boolean getWithUrl() 获取是否携带每个时间段的播放url
 * @method void setWithUrl(boolean $WithUrl) 设置是否携带每个时间段的播放url
 */
class DescribeRecordFileRequest extends AbstractModel
{
    /**
     * @var string 通道所属设备ID
     */
    public $DeviceId;

    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var integer 检索开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     */
    public $StartTime;

    /**
     * @var integer 检索结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
     */
    public $EndTime;

    /**
     * @var boolean 是否携带每个时间段的播放url
     */
    public $WithUrl;

    /**
     * @param string $DeviceId 通道所属设备ID
     * @param string $ChannelId 通道ID
     * @param integer $StartTime 检索开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     * @param integer $EndTime 检索结束时间，UTC秒数，例如：1662114246，开始和结束时间段最长为一天，且不能跨天
     * @param boolean $WithUrl 是否携带每个时间段的播放url
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
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

        if (array_key_exists("WithUrl",$param) and $param["WithUrl"] !== null) {
            $this->WithUrl = $param["WithUrl"];
        }
    }
}
