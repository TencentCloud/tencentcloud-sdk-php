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
 * DescribeDevicePreset请求参数结构体
 *
 * @method string getChannelId() 获取通道ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method void setChannelId(string $ChannelId) 设置通道ID（从通道查询接口DescribeDeviceChannel中获取）
 */
class DescribeDevicePresetRequest extends AbstractModel
{
    /**
     * @var string 通道ID（从通道查询接口DescribeDeviceChannel中获取）
     */
    public $ChannelId;

    /**
     * @param string $ChannelId 通道ID（从通道查询接口DescribeDeviceChannel中获取）
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
    }
}
