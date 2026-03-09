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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件元信息。
 *
 * @method integer getSize() 获取<p>大小。</p>
 * @method void setSize(integer $Size) 设置<p>大小。</p>
 * @method string getContainer() 获取<p>容器类型。</p>
 * @method void setContainer(string $Container) 设置<p>容器类型。</p>
 * @method integer getBitrate() 获取<p>视频流码率平均值与音频流码率平均值之和，单位：bps。</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>视频流码率平均值与音频流码率平均值之和，单位：bps。</p>
 * @method integer getHeight() 获取<p>视频流高度的最大值，单位：px。</p>
 * @method void setHeight(integer $Height) 设置<p>视频流高度的最大值，单位：px。</p>
 * @method integer getWidth() 获取<p>视频流宽度的最大值，单位：px。</p>
 * @method void setWidth(integer $Width) 设置<p>视频流宽度的最大值，单位：px。</p>
 * @method float getDuration() 获取<p>时长，单位：秒。</p>
 * @method void setDuration(float $Duration) 设置<p>时长，单位：秒。</p>
 * @method integer getRotate() 获取<p>视频拍摄时的选择角度，单位：度</p>
 * @method void setRotate(integer $Rotate) 设置<p>视频拍摄时的选择角度，单位：度</p>
 * @method array getVideoStreamInfoSet() 获取<p>视频流信息。</p>
 * @method void setVideoStreamInfoSet(array $VideoStreamInfoSet) 设置<p>视频流信息。</p>
 * @method array getAudioStreamInfoSet() 获取<p>音频流信息。</p>
 * @method void setAudioStreamInfoSet(array $AudioStreamInfoSet) 设置<p>音频流信息。</p>
 */
class MediaMetaData extends AbstractModel
{
    /**
     * @var integer <p>大小。</p>
     */
    public $Size;

    /**
     * @var string <p>容器类型。</p>
     */
    public $Container;

    /**
     * @var integer <p>视频流码率平均值与音频流码率平均值之和，单位：bps。</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>视频流高度的最大值，单位：px。</p>
     */
    public $Height;

    /**
     * @var integer <p>视频流宽度的最大值，单位：px。</p>
     */
    public $Width;

    /**
     * @var float <p>时长，单位：秒。</p>
     */
    public $Duration;

    /**
     * @var integer <p>视频拍摄时的选择角度，单位：度</p>
     */
    public $Rotate;

    /**
     * @var array <p>视频流信息。</p>
     */
    public $VideoStreamInfoSet;

    /**
     * @var array <p>音频流信息。</p>
     */
    public $AudioStreamInfoSet;

    /**
     * @param integer $Size <p>大小。</p>
     * @param string $Container <p>容器类型。</p>
     * @param integer $Bitrate <p>视频流码率平均值与音频流码率平均值之和，单位：bps。</p>
     * @param integer $Height <p>视频流高度的最大值，单位：px。</p>
     * @param integer $Width <p>视频流宽度的最大值，单位：px。</p>
     * @param float $Duration <p>时长，单位：秒。</p>
     * @param integer $Rotate <p>视频拍摄时的选择角度，单位：度</p>
     * @param array $VideoStreamInfoSet <p>视频流信息。</p>
     * @param array $AudioStreamInfoSet <p>音频流信息。</p>
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }

        if (array_key_exists("VideoStreamInfoSet",$param) and $param["VideoStreamInfoSet"] !== null) {
            $this->VideoStreamInfoSet = [];
            foreach ($param["VideoStreamInfoSet"] as $key => $value){
                $obj = new VideoStreamInfo();
                $obj->deserialize($value);
                array_push($this->VideoStreamInfoSet, $obj);
            }
        }

        if (array_key_exists("AudioStreamInfoSet",$param) and $param["AudioStreamInfoSet"] !== null) {
            $this->AudioStreamInfoSet = [];
            foreach ($param["AudioStreamInfoSet"] as $key => $value){
                $obj = new AudioStreamInfo();
                $obj->deserialize($value);
                array_push($this->AudioStreamInfoSet, $obj);
            }
        }
    }
}
