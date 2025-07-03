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
 * 视频通道码率返回结果
 *
 * @method string getChannelId() 获取通道Id
 * @method void setChannelId(string $ChannelId) 设置通道Id
 * @method float getBitrate() 获取码率,单位:kbps
 * @method void setBitrate(float $Bitrate) 设置码率,单位:kbps
 */
class BitRateInfo extends AbstractModel
{
    /**
     * @var string 通道Id
     */
    public $ChannelId;

    /**
     * @var float 码率,单位:kbps
     */
    public $Bitrate;

    /**
     * @param string $ChannelId 通道Id
     * @param float $Bitrate 码率,单位:kbps
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

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
