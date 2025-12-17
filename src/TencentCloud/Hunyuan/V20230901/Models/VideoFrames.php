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
 * 当type为video_frames时使用，标识具体的视频内图像帧内容
 *
 * @method array getFrames() 获取视频图像帧列表，图像帧传url，最大支持传入数量为512帧
 * @method void setFrames(array $Frames) 设置视频图像帧列表，图像帧传url，最大支持传入数量为512帧
 */
class VideoFrames extends AbstractModel
{
    /**
     * @var array 视频图像帧列表，图像帧传url，最大支持传入数量为512帧
     */
    public $Frames;

    /**
     * @param array $Frames 视频图像帧列表，图像帧传url，最大支持传入数量为512帧
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
        if (array_key_exists("Frames",$param) and $param["Frames"] !== null) {
            $this->Frames = $param["Frames"];
        }
    }
}
