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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户媒体流参数。
 *
 * @method MixUserInfo getUserInfo() 获取TRTC用户参数。
 * @method void setUserInfo(MixUserInfo $UserInfo) 设置TRTC用户参数。
 * @method integer getStreamType() 获取主辅路流类型，0为摄像头，1为屏幕分享，不填默认为0。
 * @method void setStreamType(integer $StreamType) 设置主辅路流类型，0为摄像头，1为屏幕分享，不填默认为0。
 */
class UserMediaStream extends AbstractModel
{
    /**
     * @var MixUserInfo TRTC用户参数。
     */
    public $UserInfo;

    /**
     * @var integer 主辅路流类型，0为摄像头，1为屏幕分享，不填默认为0。
     */
    public $StreamType;

    /**
     * @param MixUserInfo $UserInfo TRTC用户参数。
     * @param integer $StreamType 主辅路流类型，0为摄像头，1为屏幕分享，不填默认为0。
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new MixUserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }
    }
}
