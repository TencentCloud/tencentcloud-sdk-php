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
 * 点播文件视频流信息
 *
 * @method integer getBitrate() 获取<p>视频流的码率，单位：bps。</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>视频流的码率，单位：bps。</p>
 * @method integer getHeight() 获取<p>视频流的高度，单位：px。</p>
 * @method void setHeight(integer $Height) 设置<p>视频流的高度，单位：px。</p>
 * @method integer getWidth() 获取<p>视频流的宽度，单位：px。</p>
 * @method void setWidth(integer $Width) 设置<p>视频流的宽度，单位：px。</p>
 * @method string getCodec() 获取<p>视频流的编码格式，例如 h264。</p>
 * @method void setCodec(string $Codec) 设置<p>视频流的编码格式，例如 h264。</p>
 * @method integer getFps() 获取<p>帧率，单位：hz。</p>
 * @method void setFps(integer $Fps) 设置<p>帧率，单位：hz。</p>
 * @method string getColorPrimaries() 获取<p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorPrimaries(string $ColorPrimaries) 设置<p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColorSpace() 获取<p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorSpace(string $ColorSpace) 设置<p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColorTransfer() 获取<p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorTransfer(string $ColorTransfer) 设置<p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHdrType() 获取<p>HDR类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHdrType(string $HdrType) 设置<p>HDR类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodecs() 获取<p>视频Codecs。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodecs(string $Codecs) 设置<p>视频Codecs。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDuration() 获取<p>视频时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置<p>视频时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFpsNumerator() 获取<p>帧率分子部分</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsNumerator(integer $FpsNumerator) 设置<p>帧率分子部分</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFpsDenominator() 获取<p>帧率分母部分</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsDenominator(integer $FpsDenominator) 设置<p>帧率分母部分</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaVideoStreamItem extends AbstractModel
{
    /**
     * @var integer <p>视频流的码率，单位：bps。</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>视频流的高度，单位：px。</p>
     */
    public $Height;

    /**
     * @var integer <p>视频流的宽度，单位：px。</p>
     */
    public $Width;

    /**
     * @var string <p>视频流的编码格式，例如 h264。</p>
     */
    public $Codec;

    /**
     * @var integer <p>帧率，单位：hz。</p>
     */
    public $Fps;

    /**
     * @var string <p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorPrimaries;

    /**
     * @var string <p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorSpace;

    /**
     * @var string <p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorTransfer;

    /**
     * @var string <p>HDR类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HdrType;

    /**
     * @var string <p>视频Codecs。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Codecs;

    /**
     * @var float <p>视频时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer <p>帧率分子部分</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsNumerator;

    /**
     * @var integer <p>帧率分母部分</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsDenominator;

    /**
     * @param integer $Bitrate <p>视频流的码率，单位：bps。</p>
     * @param integer $Height <p>视频流的高度，单位：px。</p>
     * @param integer $Width <p>视频流的宽度，单位：px。</p>
     * @param string $Codec <p>视频流的编码格式，例如 h264。</p>
     * @param integer $Fps <p>帧率，单位：hz。</p>
     * @param string $ColorPrimaries <p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColorSpace <p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColorTransfer <p>色彩空间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HdrType <p>HDR类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Codecs <p>视频Codecs。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Duration <p>视频时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FpsNumerator <p>帧率分子部分</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FpsDenominator <p>帧率分母部分</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("ColorPrimaries",$param) and $param["ColorPrimaries"] !== null) {
            $this->ColorPrimaries = $param["ColorPrimaries"];
        }

        if (array_key_exists("ColorSpace",$param) and $param["ColorSpace"] !== null) {
            $this->ColorSpace = $param["ColorSpace"];
        }

        if (array_key_exists("ColorTransfer",$param) and $param["ColorTransfer"] !== null) {
            $this->ColorTransfer = $param["ColorTransfer"];
        }

        if (array_key_exists("HdrType",$param) and $param["HdrType"] !== null) {
            $this->HdrType = $param["HdrType"];
        }

        if (array_key_exists("Codecs",$param) and $param["Codecs"] !== null) {
            $this->Codecs = $param["Codecs"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FpsNumerator",$param) and $param["FpsNumerator"] !== null) {
            $this->FpsNumerator = $param["FpsNumerator"];
        }

        if (array_key_exists("FpsDenominator",$param) and $param["FpsDenominator"] !== null) {
            $this->FpsDenominator = $param["FpsDenominator"];
        }
    }
}
