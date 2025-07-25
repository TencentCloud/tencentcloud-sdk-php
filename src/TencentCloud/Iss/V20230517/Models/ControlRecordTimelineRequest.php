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
 * ControlRecordTimeline请求参数结构体
 *
 * @method string getChannelId() 获取通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method void setChannelId(string $ChannelId) 设置通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method integer getStart() 获取起始时间
 * @method void setStart(integer $Start) 设置起始时间
 * @method integer getEnd() 获取结束时间
 * @method void setEnd(integer $End) 设置结束时间
 */
class ControlRecordTimelineRequest extends AbstractModel
{
    /**
     * @var string 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     */
    public $ChannelId;

    /**
     * @var integer 起始时间
     */
    public $Start;

    /**
     * @var integer 结束时间
     */
    public $End;

    /**
     * @param string $ChannelId 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     * @param integer $Start 起始时间
     * @param integer $End 结束时间
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

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
