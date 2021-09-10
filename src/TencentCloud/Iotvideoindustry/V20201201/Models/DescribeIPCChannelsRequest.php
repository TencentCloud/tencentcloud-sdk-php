<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPCChannels请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取限制，默认0
 * @method void setLimit(integer $Limit) 设置限制，默认0
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method array getChannelTypes() 获取通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
 * @method void setChannelTypes(array $ChannelTypes) 设置通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
 */
class DescribeIPCChannelsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 限制，默认0
     */
    public $Limit;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var array 通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
     */
    public $ChannelTypes;

    /**
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 限制，默认0
     * @param string $DeviceId 设备Id
     * @param array $ChannelTypes 通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ChannelTypes",$param) and $param["ChannelTypes"] !== null) {
            $this->ChannelTypes = $param["ChannelTypes"];
        }
    }
}
