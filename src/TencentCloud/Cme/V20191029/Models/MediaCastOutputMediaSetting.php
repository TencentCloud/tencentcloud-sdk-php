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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播输出媒体配置。
 *
 * @method MediaCastVideoSetting getVideoSetting() 获取视频配置。
 * @method void setVideoSetting(MediaCastVideoSetting $VideoSetting) 设置视频配置。
 */
class MediaCastOutputMediaSetting extends AbstractModel
{
    /**
     * @var MediaCastVideoSetting 视频配置。
     */
    public $VideoSetting;

    /**
     * @param MediaCastVideoSetting $VideoSetting 视频配置。
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
        if (array_key_exists("VideoSetting",$param) and $param["VideoSetting"] !== null) {
            $this->VideoSetting = new MediaCastVideoSetting();
            $this->VideoSetting->deserialize($param["VideoSetting"]);
        }
    }
}
