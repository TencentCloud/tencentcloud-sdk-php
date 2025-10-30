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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音视频轨道选择
 *
 * @method array getVideoIndex() 获取视频轨道序号，从1开始.
 * @method void setVideoIndex(array $VideoIndex) 设置视频轨道序号，从1开始.
 * @method array getAudioIndex() 获取音频轨道序号，从1开始.
 * @method void setAudioIndex(array $AudioIndex) 设置音频轨道序号，从1开始.
 */
class TrackSelector extends AbstractModel
{
    /**
     * @var array 视频轨道序号，从1开始.
     */
    public $VideoIndex;

    /**
     * @var array 音频轨道序号，从1开始.
     */
    public $AudioIndex;

    /**
     * @param array $VideoIndex 视频轨道序号，从1开始.
     * @param array $AudioIndex 音频轨道序号，从1开始.
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
        if (array_key_exists("VideoIndex",$param) and $param["VideoIndex"] !== null) {
            $this->VideoIndex = $param["VideoIndex"];
        }

        if (array_key_exists("AudioIndex",$param) and $param["AudioIndex"] !== null) {
            $this->AudioIndex = $param["AudioIndex"];
        }
    }
}
