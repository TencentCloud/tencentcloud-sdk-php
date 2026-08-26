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
 * 转码信息
 *
 * @method TaskOutputStorage getOutputStorage() 获取<p>转码后文件的目标存储。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>转码后文件的目标存储。</p>
 * @method string getPath() 获取<p>转码后的视频文件路径。</p>
 * @method void setPath(string $Path) 设置<p>转码后的视频文件路径。</p>
 * @method integer getDefinition() 获取<p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/862/37042">转码参数模板</a>。</p>
 * @method void setDefinition(integer $Definition) 设置<p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/862/37042">转码参数模板</a>。</p>
 * @method integer getBitrate() 获取<p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
 * @method integer getHeight() 获取<p>视频流高度的最大值，单位：px。</p>
 * @method void setHeight(integer $Height) 设置<p>视频流高度的最大值，单位：px。</p>
 * @method integer getWidth() 获取<p>视频流宽度的最大值，单位：px。</p>
 * @method void setWidth(integer $Width) 设置<p>视频流宽度的最大值，单位：px。</p>
 * @method integer getSize() 获取<p>媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。</p>
 * @method void setSize(integer $Size) 设置<p>媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。</p>
 * @method float getDuration() 获取<p>视频时长，单位：秒。</p>
 * @method void setDuration(float $Duration) 设置<p>视频时长，单位：秒。</p>
 * @method string getContainer() 获取<p>容器类型，例如 m4a，mp4 等。</p>
 * @method void setContainer(string $Container) 设置<p>容器类型，例如 m4a，mp4 等。</p>
 * @method string getMd5() 获取<p>视频的 md5 值。</p>
 * @method void setMd5(string $Md5) 设置<p>视频的 md5 值。</p>
 * @method array getAudioStreamSet() 获取<p>音频流信息。</p>
 * @method void setAudioStreamSet(array $AudioStreamSet) 设置<p>音频流信息。</p>
 * @method array getVideoStreamSet() 获取<p>视频流信息。</p>
 * @method void setVideoStreamSet(array $VideoStreamSet) 设置<p>视频流信息。</p>
 * @method string getCallBackExtInfo() 获取<p>视频转码使用增强项说明，增强项解释</p><li>hdr：HDR配置</li><li>wd_fps：插帧帧率配置</li><li>video_super_resolution：    超分配置</li><li>repair：综合增强配置</li><li>denoise：视频降噪配置</li><li>color_enhance：色彩增强配置</li><li>scratch：去划痕配置</li><li>artifact：去伪影（毛刺）配置</li><li>sharp：细节增强配置</li><li>low_light：低光照增强配置</li><li>face_enhance：人脸增强配置</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallBackExtInfo(string $CallBackExtInfo) 设置<p>视频转码使用增强项说明，增强项解释</p><li>hdr：HDR配置</li><li>wd_fps：插帧帧率配置</li><li>video_super_resolution：    超分配置</li><li>repair：综合增强配置</li><li>denoise：视频降噪配置</li><li>color_enhance：色彩增强配置</li><li>scratch：去划痕配置</li><li>artifact：去伪影（毛刺）配置</li><li>sharp：细节增强配置</li><li>low_light：低光照增强配置</li><li>face_enhance：人脸增强配置</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaUsageItem getUsage() 获取<p>MediaTranscodeItem</p>
 * @method void setUsage(MediaUsageItem $Usage) 设置<p>MediaTranscodeItem</p>
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var TaskOutputStorage <p>转码后文件的目标存储。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>转码后的视频文件路径。</p>
     */
    public $Path;

    /**
     * @var integer <p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/862/37042">转码参数模板</a>。</p>
     */
    public $Definition;

    /**
     * @var integer <p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
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
     * @var integer <p>媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。</p>
     */
    public $Size;

    /**
     * @var float <p>视频时长，单位：秒。</p>
     */
    public $Duration;

    /**
     * @var string <p>容器类型，例如 m4a，mp4 等。</p>
     */
    public $Container;

    /**
     * @var string <p>视频的 md5 值。</p>
     */
    public $Md5;

    /**
     * @var array <p>音频流信息。</p>
     */
    public $AudioStreamSet;

    /**
     * @var array <p>视频流信息。</p>
     */
    public $VideoStreamSet;

    /**
     * @var string <p>视频转码使用增强项说明，增强项解释</p><li>hdr：HDR配置</li><li>wd_fps：插帧帧率配置</li><li>video_super_resolution：    超分配置</li><li>repair：综合增强配置</li><li>denoise：视频降噪配置</li><li>color_enhance：色彩增强配置</li><li>scratch：去划痕配置</li><li>artifact：去伪影（毛刺）配置</li><li>sharp：细节增强配置</li><li>low_light：低光照增强配置</li><li>face_enhance：人脸增强配置</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallBackExtInfo;

    /**
     * @var MediaUsageItem <p>MediaTranscodeItem</p>
     */
    public $Usage;

    /**
     * @param TaskOutputStorage $OutputStorage <p>转码后文件的目标存储。</p>
     * @param string $Path <p>转码后的视频文件路径。</p>
     * @param integer $Definition <p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/862/37042">转码参数模板</a>。</p>
     * @param integer $Bitrate <p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
     * @param integer $Height <p>视频流高度的最大值，单位：px。</p>
     * @param integer $Width <p>视频流宽度的最大值，单位：px。</p>
     * @param integer $Size <p>媒体文件总大小（视频为 HLS 时，大小是 m3u8 和 ts 文件大小的总和），单位：字节。</p>
     * @param float $Duration <p>视频时长，单位：秒。</p>
     * @param string $Container <p>容器类型，例如 m4a，mp4 等。</p>
     * @param string $Md5 <p>视频的 md5 值。</p>
     * @param array $AudioStreamSet <p>音频流信息。</p>
     * @param array $VideoStreamSet <p>视频流信息。</p>
     * @param string $CallBackExtInfo <p>视频转码使用增强项说明，增强项解释</p><li>hdr：HDR配置</li><li>wd_fps：插帧帧率配置</li><li>video_super_resolution：    超分配置</li><li>repair：综合增强配置</li><li>denoise：视频降噪配置</li><li>color_enhance：色彩增强配置</li><li>scratch：去划痕配置</li><li>artifact：去伪影（毛刺）配置</li><li>sharp：细节增强配置</li><li>low_light：低光照增强配置</li><li>face_enhance：人脸增强配置</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaUsageItem $Usage <p>MediaTranscodeItem</p>
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new MediaAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new MediaVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }

        if (array_key_exists("CallBackExtInfo",$param) and $param["CallBackExtInfo"] !== null) {
            $this->CallBackExtInfo = $param["CallBackExtInfo"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new MediaUsageItem();
            $this->Usage->deserialize($param["Usage"]);
        }
    }
}
