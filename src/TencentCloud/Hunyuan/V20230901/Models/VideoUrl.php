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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当type为video_url时使用，标识具体的视频链接内容
 *
 * @method string getUrl() 获取视频的url，如"https://your-video-path.mp4"，视频文件大小不超过100M。
 * @method void setUrl(string $Url) 设置视频的url，如"https://your-video-path.mp4"，视频文件大小不超过100M。
 * @method float getFps() 获取控制视频抽帧频率，取值范围为 0.1 ~5，表示每隔 1/fps 秒抽取一帧，默认为 1s抽取一帧
 * @method void setFps(float $Fps) 设置控制视频抽帧频率，取值范围为 0.1 ~5，表示每隔 1/fps 秒抽取一帧，默认为 1s抽取一帧
 */
class VideoUrl extends AbstractModel
{
    /**
     * @var string 视频的url，如"https://your-video-path.mp4"，视频文件大小不超过100M。
     */
    public $Url;

    /**
     * @var float 控制视频抽帧频率，取值范围为 0.1 ~5，表示每隔 1/fps 秒抽取一帧，默认为 1s抽取一帧
     */
    public $Fps;

    /**
     * @param string $Url 视频的url，如"https://your-video-path.mp4"，视频文件大小不超过100M。
     * @param float $Fps 控制视频抽帧频率，取值范围为 0.1 ~5，表示每隔 1/fps 秒抽取一帧，默认为 1s抽取一帧
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
