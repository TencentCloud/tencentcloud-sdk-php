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
 * ControlDeviceStream请求参数结构体
 *
 * @method string getChannelId() 获取<p>通道 ID（从通道查询接口DescribeDeviceChannel中获取）</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道 ID（从通道查询接口DescribeDeviceChannel中获取）</p>
 * @method string getStreamType() 获取<p>流类型（1:主码流；<br>2:子码流（不可以和 Resolution 同时下发））</p>
 * @method void setStreamType(string $StreamType) 设置<p>流类型（1:主码流；<br>2:子码流（不可以和 Resolution 同时下发））</p>
 * @method string getResolution() 获取<p>分辨率（1:QCIF；<br>2:CIF；<br>3:4CIF；<br>4:D1；<br>5:720P；<br>6:1080P/I；<br>自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））</p>
 * @method void setResolution(string $Resolution) 设置<p>分辨率（1:QCIF；<br>2:CIF；<br>3:4CIF；<br>4:D1；<br>5:720P；<br>6:1080P/I；<br>自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））</p>
 * @method boolean getIsInternal() 获取<p>是否内网</p>
 * @method void setIsInternal(boolean $IsInternal) 设置<p>是否内网</p>
 */
class ControlDeviceStreamRequest extends AbstractModel
{
    /**
     * @var string <p>通道 ID（从通道查询接口DescribeDeviceChannel中获取）</p>
     */
    public $ChannelId;

    /**
     * @var string <p>流类型（1:主码流；<br>2:子码流（不可以和 Resolution 同时下发））</p>
     */
    public $StreamType;

    /**
     * @var string <p>分辨率（1:QCIF；<br>2:CIF；<br>3:4CIF；<br>4:D1；<br>5:720P；<br>6:1080P/I；<br>自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））</p>
     */
    public $Resolution;

    /**
     * @var boolean <p>是否内网</p>
     */
    public $IsInternal;

    /**
     * @param string $ChannelId <p>通道 ID（从通道查询接口DescribeDeviceChannel中获取）</p>
     * @param string $StreamType <p>流类型（1:主码流；<br>2:子码流（不可以和 Resolution 同时下发））</p>
     * @param string $Resolution <p>分辨率（1:QCIF；<br>2:CIF；<br>3:4CIF；<br>4:D1；<br>5:720P；<br>6:1080P/I；<br>自定义的19201080等等（需设备支持）（不可以和 StreamType 同时下发））</p>
     * @param boolean $IsInternal <p>是否内网</p>
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

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }
    }
}
