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
 * 视频编辑/合成任务 音频元素信息。
 *
 * @method ComposeSourceMedia getSourceMedia() 获取元素对应媒体信息。
 * @method void setSourceMedia(ComposeSourceMedia $SourceMedia) 设置元素对应媒体信息。
 * @method ComposeTrackTime getTrackTime() 获取元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
 * @method void setTrackTime(ComposeTrackTime $TrackTime) 设置元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
 * @method array getAudioOperations() 获取对音频进行操作，如静音等。
 * @method void setAudioOperations(array $AudioOperations) 设置对音频进行操作，如静音等。
 */
class ComposeAudioItem extends AbstractModel
{
    /**
     * @var ComposeSourceMedia 元素对应媒体信息。
     */
    public $SourceMedia;

    /**
     * @var ComposeTrackTime 元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
     */
    public $TrackTime;

    /**
     * @var array 对音频进行操作，如静音等。
     */
    public $AudioOperations;

    /**
     * @param ComposeSourceMedia $SourceMedia 元素对应媒体信息。
     * @param ComposeTrackTime $TrackTime 元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
     * @param array $AudioOperations 对音频进行操作，如静音等。
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
        if (array_key_exists("SourceMedia",$param) and $param["SourceMedia"] !== null) {
            $this->SourceMedia = new ComposeSourceMedia();
            $this->SourceMedia->deserialize($param["SourceMedia"]);
        }

        if (array_key_exists("TrackTime",$param) and $param["TrackTime"] !== null) {
            $this->TrackTime = new ComposeTrackTime();
            $this->TrackTime->deserialize($param["TrackTime"]);
        }

        if (array_key_exists("AudioOperations",$param) and $param["AudioOperations"] !== null) {
            $this->AudioOperations = [];
            foreach ($param["AudioOperations"] as $key => $value){
                $obj = new ComposeAudioOperation();
                $obj->deserialize($value);
                array_push($this->AudioOperations, $obj);
            }
        }
    }
}
