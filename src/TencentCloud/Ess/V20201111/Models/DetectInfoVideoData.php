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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频认证结果
 *
 * @method string getLiveNessVideo() 获取活体视频的base64编码，mp4格式

注:`需进行base64解码获取活体视频文件`
 * @method void setLiveNessVideo(string $LiveNessVideo) 设置活体视频的base64编码，mp4格式

注:`需进行base64解码获取活体视频文件`
 */
class DetectInfoVideoData extends AbstractModel
{
    /**
     * @var string 活体视频的base64编码，mp4格式

注:`需进行base64解码获取活体视频文件`
     */
    public $LiveNessVideo;

    /**
     * @param string $LiveNessVideo 活体视频的base64编码，mp4格式

注:`需进行base64解码获取活体视频文件`
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
        if (array_key_exists("LiveNessVideo",$param) and $param["LiveNessVideo"] !== null) {
            $this->LiveNessVideo = $param["LiveNessVideo"];
        }
    }
}
