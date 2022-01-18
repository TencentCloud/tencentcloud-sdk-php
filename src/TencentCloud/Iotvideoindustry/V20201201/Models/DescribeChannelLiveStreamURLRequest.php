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
 * DescribeChannelLiveStreamURL请求参数结构体
 *
 * @method string getDeviceId() 获取设备唯一标识，必填参数
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识，必填参数
 * @method string getChannelId() 获取通道唯一标识（接口升级字段为必填），必填参数
 * @method void setChannelId(string $ChannelId) 设置通道唯一标识（接口升级字段为必填），必填参数
 */
class DescribeChannelLiveStreamURLRequest extends AbstractModel
{
    /**
     * @var string 设备唯一标识，必填参数
     */
    public $DeviceId;

    /**
     * @var string 通道唯一标识（接口升级字段为必填），必填参数
     */
    public $ChannelId;

    /**
     * @param string $DeviceId 设备唯一标识，必填参数
     * @param string $ChannelId 通道唯一标识（接口升级字段为必填），必填参数
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
    }
}
