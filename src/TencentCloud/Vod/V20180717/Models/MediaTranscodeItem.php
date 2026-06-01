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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码信息
 *
 * @method string getUrl() 获取<p>转码后的视频文件地址。</p>
 * @method void setUrl(string $Url) 设置<p>转码后的视频文件地址。</p>
 * @method integer getDefinition() 获取<p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33476">转码参数模板</a>。<br><font color="red">注意：取值 0 表示原始文件。</font></p>
 * @method void setDefinition(integer $Definition) 设置<p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33476">转码参数模板</a>。<br><font color="red">注意：取值 0 表示原始文件。</font></p>
 * @method integer getBitrate() 获取<p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
 * @method integer getHeight() 获取<p>视频流高度的最大值，单位：px。</p>
 * @method void setHeight(integer $Height) 设置<p>视频流高度的最大值，单位：px。</p>
 * @method integer getWidth() 获取<p>视频流宽度的最大值，单位：px。</p>
 * @method void setWidth(integer $Width) 设置<p>视频流宽度的最大值，单位：px。</p>
 * @method integer getSize() 获取<p>媒体文件总大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和。</li>
 * @method void setSize(integer $Size) 设置<p>媒体文件总大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和。</li>
 * @method float getDuration() 获取<p>视频时长，单位：秒。</p>
 * @method void setDuration(float $Duration) 设置<p>视频时长，单位：秒。</p>
 * @method string getMd5() 获取<p>视频的 md5 值。</p>
 * @method void setMd5(string $Md5) 设置<p>视频的 md5 值。</p>
 * @method string getContainer() 获取<p>容器类型，例如 m4a，mp4 等。</p>
 * @method void setContainer(string $Container) 设置<p>容器类型，例如 m4a，mp4 等。</p>
 * @method array getVideoStreamSet() 获取<p>视频流信息。</p>
 * @method void setVideoStreamSet(array $VideoStreamSet) 设置<p>视频流信息。</p>
 * @method array getAudioStreamSet() 获取<p>音频流信息。</p>
 * @method void setAudioStreamSet(array $AudioStreamSet) 设置<p>音频流信息。</p>
 * @method string getDigitalWatermarkType() 获取<p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) 设置<p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
 * @method string getCopyRightWatermarkText() 获取<p>版权信息。</p>
 * @method void setCopyRightWatermarkText(string $CopyRightWatermarkText) 设置<p>版权信息。</p>
 * @method integer getBlindWatermarkDefinition() 获取<p>数字水印模板id。</p>
 * @method void setBlindWatermarkDefinition(integer $BlindWatermarkDefinition) 设置<p>数字水印模板id。</p>
 * @method string getFileId() 获取<p>转码生成的新FileId，请求开启独立媒资输出时有效。</p>
 * @method void setFileId(string $FileId) 设置<p>转码生成的新FileId，请求开启独立媒资输出时有效。</p>
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var string <p>转码后的视频文件地址。</p>
     */
    public $Url;

    /**
     * @var integer <p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33476">转码参数模板</a>。<br><font color="red">注意：取值 0 表示原始文件。</font></p>
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
     * @var integer <p>媒体文件总大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和。</li>
     */
    public $Size;

    /**
     * @var float <p>视频时长，单位：秒。</p>
     */
    public $Duration;

    /**
     * @var string <p>视频的 md5 值。</p>
     */
    public $Md5;

    /**
     * @var string <p>容器类型，例如 m4a，mp4 等。</p>
     */
    public $Container;

    /**
     * @var array <p>视频流信息。</p>
     */
    public $VideoStreamSet;

    /**
     * @var array <p>音频流信息。</p>
     */
    public $AudioStreamSet;

    /**
     * @var string <p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
     */
    public $DigitalWatermarkType;

    /**
     * @var string <p>版权信息。</p>
     */
    public $CopyRightWatermarkText;

    /**
     * @var integer <p>数字水印模板id。</p>
     */
    public $BlindWatermarkDefinition;

    /**
     * @var string <p>转码生成的新FileId，请求开启独立媒资输出时有效。</p>
     */
    public $FileId;

    /**
     * @param string $Url <p>转码后的视频文件地址。</p>
     * @param integer $Definition <p>转码规格 ID，参见<a href="https://cloud.tencent.com/document/product/266/33476">转码参数模板</a>。<br><font color="red">注意：取值 0 表示原始文件。</font></p>
     * @param integer $Bitrate <p>视频流码率平均值与音频流码率平均值之和， 单位：bps。</p>
     * @param integer $Height <p>视频流高度的最大值，单位：px。</p>
     * @param integer $Width <p>视频流宽度的最大值，单位：px。</p>
     * @param integer $Size <p>媒体文件总大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和。</li>
     * @param float $Duration <p>视频时长，单位：秒。</p>
     * @param string $Md5 <p>视频的 md5 值。</p>
     * @param string $Container <p>容器类型，例如 m4a，mp4 等。</p>
     * @param array $VideoStreamSet <p>视频流信息。</p>
     * @param array $AudioStreamSet <p>音频流信息。</p>
     * @param string $DigitalWatermarkType <p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
     * @param string $CopyRightWatermarkText <p>版权信息。</p>
     * @param integer $BlindWatermarkDefinition <p>数字水印模板id。</p>
     * @param string $FileId <p>转码生成的新FileId，请求开启独立媒资输出时有效。</p>
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

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new MediaVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new MediaAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("DigitalWatermarkType",$param) and $param["DigitalWatermarkType"] !== null) {
            $this->DigitalWatermarkType = $param["DigitalWatermarkType"];
        }

        if (array_key_exists("CopyRightWatermarkText",$param) and $param["CopyRightWatermarkText"] !== null) {
            $this->CopyRightWatermarkText = $param["CopyRightWatermarkText"];
        }

        if (array_key_exists("BlindWatermarkDefinition",$param) and $param["BlindWatermarkDefinition"] !== null) {
            $this->BlindWatermarkDefinition = $param["BlindWatermarkDefinition"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
