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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateSignedVideoURL请求参数结构体
 *
 * @method string getVideoURL() 获取视频播放原始URL地址
 * @method void setVideoURL(string $VideoURL) 设置视频播放原始URL地址
 * @method integer getExpireTime() 获取播放链接过期时间（时间戳，单位秒）
 * @method void setExpireTime(integer $ExpireTime) 设置播放链接过期时间（时间戳，单位秒）
 * @method integer getChannelId() 获取通道ID 非NVR设备不填 NVR设备必填 默认为无	
 * @method void setChannelId(integer $ChannelId) 设置通道ID 非NVR设备不填 NVR设备必填 默认为无	
 */
class GenerateSignedVideoURLRequest extends AbstractModel
{
    /**
     * @var string 视频播放原始URL地址
     */
    public $VideoURL;

    /**
     * @var integer 播放链接过期时间（时间戳，单位秒）
     */
    public $ExpireTime;

    /**
     * @var integer 通道ID 非NVR设备不填 NVR设备必填 默认为无	
     */
    public $ChannelId;

    /**
     * @param string $VideoURL 视频播放原始URL地址
     * @param integer $ExpireTime 播放链接过期时间（时间戳，单位秒）
     * @param integer $ChannelId 通道ID 非NVR设备不填 NVR设备必填 默认为无	
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
        if (array_key_exists("VideoURL",$param) and $param["VideoURL"] !== null) {
            $this->VideoURL = $param["VideoURL"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
