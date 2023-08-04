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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ControlDeviceStream请求参数结构体
 *
 * @method string getChannelId() 获取通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method void setChannelId(string $ChannelId) 设置通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method string getStreamType() 获取流类型（1:主码流；
2:子码流（不可以和 Resolution 同时下发））
 * @method void setStreamType(string $StreamType) 设置流类型（1:主码流；
2:子码流（不可以和 Resolution 同时下发））
 * @method string getResolution() 获取分辨率（1:QCIF；
2:CIF；
3:4CIF；
4:D1；
5:720P；
6:1080P/I；
自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））
 * @method void setResolution(string $Resolution) 设置分辨率（1:QCIF；
2:CIF；
3:4CIF；
4:D1；
5:720P；
6:1080P/I；
自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））
 */
class ControlDeviceStreamRequest extends AbstractModel
{
    /**
     * @var string 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     */
    public $ChannelId;

    /**
     * @var string 流类型（1:主码流；
2:子码流（不可以和 Resolution 同时下发））
     */
    public $StreamType;

    /**
     * @var string 分辨率（1:QCIF；
2:CIF；
3:4CIF；
4:D1；
5:720P；
6:1080P/I；
自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））
     */
    public $Resolution;

    /**
     * @param string $ChannelId 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     * @param string $StreamType 流类型（1:主码流；
2:子码流（不可以和 Resolution 同时下发））
     * @param string $Resolution 分辨率（1:QCIF；
2:CIF；
3:4CIF；
4:D1；
5:720P；
6:1080P/I；
自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））
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

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
