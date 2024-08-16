<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getBitrate() 获取视频流的码率，单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置视频流的码率，单位：bps。
 * @method integer getHeight() 获取视频流的高度，单位：px。
 * @method void setHeight(integer $Height) 设置视频流的高度，单位：px。
 * @method integer getWidth() 获取视频流的宽度，单位：px。
 * @method void setWidth(integer $Width) 设置视频流的宽度，单位：px。
 * @method string getCodec() 获取视频流的编码格式，例如 h264。
 * @method void setCodec(string $Codec) 设置视频流的编码格式，例如 h264。
 * @method integer getFps() 获取帧率，单位：hz。
 * @method void setFps(integer $Fps) 设置帧率，单位：hz。
 * @method string getColorPrimaries() 获取色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorPrimaries(string $ColorPrimaries) 设置色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColorSpace() 获取色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorSpace(string $ColorSpace) 设置色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColorTransfer() 获取色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorTransfer(string $ColorTransfer) 设置色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHdrType() 获取HDR类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHdrType(string $HdrType) 设置HDR类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodecs() 获取视频Codecs。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodecs(string $Codecs) 设置视频Codecs。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFpsNumerator() 获取帧率分子部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsNumerator(integer $FpsNumerator) 设置帧率分子部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFpsDenominator() 获取帧率分母部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsDenominator(integer $FpsDenominator) 设置帧率分母部分
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaVideoStreamItem extends AbstractModel
{
    /**
     * @var integer 视频流的码率，单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 视频流的高度，单位：px。
     */
    public $Height;

    /**
     * @var integer 视频流的宽度，单位：px。
     */
    public $Width;

    /**
     * @var string 视频流的编码格式，例如 h264。
     */
    public $Codec;

    /**
     * @var integer 帧率，单位：hz。
     */
    public $Fps;

    /**
     * @var string 色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorPrimaries;

    /**
     * @var string 色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorSpace;

    /**
     * @var string 色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorTransfer;

    /**
     * @var string HDR类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HdrType;

    /**
     * @var string 视频Codecs。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Codecs;

    /**
     * @var integer 帧率分子部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsNumerator;

    /**
     * @var integer 帧率分母部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsDenominator;

    /**
     * @param integer $Bitrate 视频流的码率，单位：bps。
     * @param integer $Height 视频流的高度，单位：px。
     * @param integer $Width 视频流的宽度，单位：px。
     * @param string $Codec 视频流的编码格式，例如 h264。
     * @param integer $Fps 帧率，单位：hz。
     * @param string $ColorPrimaries 色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColorSpace 色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColorTransfer 色彩空间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HdrType HDR类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Codecs 视频Codecs。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FpsNumerator 帧率分子部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FpsDenominator 帧率分母部分
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

        if (array_key_exists("FpsNumerator",$param) and $param["FpsNumerator"] !== null) {
            $this->FpsNumerator = $param["FpsNumerator"];
        }

        if (array_key_exists("FpsDenominator",$param) and $param["FpsDenominator"] !== null) {
            $this->FpsDenominator = $param["FpsDenominator"];
        }
    }
}
