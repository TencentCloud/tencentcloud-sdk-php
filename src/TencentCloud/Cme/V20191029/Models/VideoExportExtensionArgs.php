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
 * 视频导出扩展参数
 *
 * @method string getContainer() 获取<p>封装格式，可选值：</p><li>mp4 </li><li>mov </li>不填则使用视频导出编码配置。
 * @method void setContainer(string $Container) 设置<p>封装格式，可选值：</p><li>mp4 </li><li>mov </li>不填则使用视频导出编码配置。
 * @method integer getShortEdge() 获取<p>视频短边尺寸，取值范围： [128, 4096]，单位：px。<br>视频最后的分辨率，根据短边尺寸和宽高比进行计算。<br>例如：项目的宽高比是 16：9 ：</p><li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li><li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720</li>不填则使用视频导出编码配置。
 * @method void setShortEdge(integer $ShortEdge) 设置<p>视频短边尺寸，取值范围： [128, 4096]，单位：px。<br>视频最后的分辨率，根据短边尺寸和宽高比进行计算。<br>例如：项目的宽高比是 16：9 ：</p><li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li><li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720</li>不填则使用视频导出编码配置。
 * @method integer getVideoBitrate() 获取<p>指定码率，单位 bps。当该参数为 0 时则不强制限定码率。<br>不填则使用视频导出编码配置。</p>
 * @method void setVideoBitrate(integer $VideoBitrate) 设置<p>指定码率，单位 bps。当该参数为 0 时则不强制限定码率。<br>不填则使用视频导出编码配置。</p>
 * @method float getFrameRate() 获取<p>帧率。取值范围：[15, 60]，不填默认值为 25。</p><p>单位：帧</p>
 * @method void setFrameRate(float $FrameRate) 设置<p>帧率。取值范围：[15, 60]，不填默认值为 25。</p><p>单位：帧</p>
 * @method integer getRemoveVideo() 获取<p>是否去除视频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置<p>是否去除视频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
 * @method integer getRemoveAudio() 获取<p>是否去除音频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置<p>是否去除音频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
 * @method integer getStartTime() 获取<p>片段起始时间，单位：毫秒。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>片段起始时间，单位：毫秒。</p>
 * @method integer getEndTime() 获取<p>片段结束时间，单位：毫秒。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>片段结束时间，单位：毫秒。</p>
 */
class VideoExportExtensionArgs extends AbstractModel
{
    /**
     * @var string <p>封装格式，可选值：</p><li>mp4 </li><li>mov </li>不填则使用视频导出编码配置。
     */
    public $Container;

    /**
     * @var integer <p>视频短边尺寸，取值范围： [128, 4096]，单位：px。<br>视频最后的分辨率，根据短边尺寸和宽高比进行计算。<br>例如：项目的宽高比是 16：9 ：</p><li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li><li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720</li>不填则使用视频导出编码配置。
     */
    public $ShortEdge;

    /**
     * @var integer <p>指定码率，单位 bps。当该参数为 0 时则不强制限定码率。<br>不填则使用视频导出编码配置。</p>
     */
    public $VideoBitrate;

    /**
     * @var float <p>帧率。取值范围：[15, 60]，不填默认值为 25。</p><p>单位：帧</p>
     */
    public $FrameRate;

    /**
     * @var integer <p>是否去除视频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
     */
    public $RemoveVideo;

    /**
     * @var integer <p>是否去除音频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
     */
    public $RemoveAudio;

    /**
     * @var integer <p>片段起始时间，单位：毫秒。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>片段结束时间，单位：毫秒。</p>
     */
    public $EndTime;

    /**
     * @param string $Container <p>封装格式，可选值：</p><li>mp4 </li><li>mov </li>不填则使用视频导出编码配置。
     * @param integer $ShortEdge <p>视频短边尺寸，取值范围： [128, 4096]，单位：px。<br>视频最后的分辨率，根据短边尺寸和宽高比进行计算。<br>例如：项目的宽高比是 16：9 ：</p><li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li><li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720</li>不填则使用视频导出编码配置。
     * @param integer $VideoBitrate <p>指定码率，单位 bps。当该参数为 0 时则不强制限定码率。<br>不填则使用视频导出编码配置。</p>
     * @param float $FrameRate <p>帧率。取值范围：[15, 60]，不填默认值为 25。</p><p>单位：帧</p>
     * @param integer $RemoveVideo <p>是否去除视频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
     * @param integer $RemoveAudio <p>是否去除音频数据，可选值：</p><li>0：保留；</li><li>1：去除。</li>不填则使用视频导出编码配置。
     * @param integer $StartTime <p>片段起始时间，单位：毫秒。</p>
     * @param integer $EndTime <p>片段结束时间，单位：毫秒。</p>
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("ShortEdge",$param) and $param["ShortEdge"] !== null) {
            $this->ShortEdge = $param["ShortEdge"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = $param["FrameRate"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
