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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒资文件视频元信息，包括分辨率，帧率，码率等
 *
 * @method integer getFileSize() 获取媒资视频文件大小
 * @method void setFileSize(integer $FileSize) 设置媒资视频文件大小
 * @method string getMD5() 获取媒资视频文件MD5
 * @method void setMD5(string $MD5) 设置媒资视频文件MD5
 * @method float getDuration() 获取媒资视频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置媒资视频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumFrames() 获取媒资视频总帧数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumFrames(integer $NumFrames) 设置媒资视频总帧数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取媒资视频宽度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置媒资视频宽度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取媒资视频高度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置媒资视频高度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFPS() 获取媒资视频帧率，单位为Hz
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFPS(float $FPS) 设置媒资视频帧率，单位为Hz
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBitRate() 获取媒资视频比特率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitRate(integer $BitRate) 设置媒资视频比特率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaMetadata extends AbstractModel
{
    /**
     * @var integer 媒资视频文件大小
     */
    public $FileSize;

    /**
     * @var string 媒资视频文件MD5
     */
    public $MD5;

    /**
     * @var float 媒资视频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 媒资视频总帧数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumFrames;

    /**
     * @var integer 媒资视频宽度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 媒资视频高度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var float 媒资视频帧率，单位为Hz
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FPS;

    /**
     * @var integer 媒资视频比特率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BitRate;

    /**
     * @param integer $FileSize 媒资视频文件大小
     * @param string $MD5 媒资视频文件MD5
     * @param float $Duration 媒资视频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumFrames 媒资视频总帧数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 媒资视频宽度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 媒资视频高度，单位为像素
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FPS 媒资视频帧率，单位为Hz
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BitRate 媒资视频比特率，单位为kbps
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
        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("NumFrames",$param) and $param["NumFrames"] !== null) {
            $this->NumFrames = $param["NumFrames"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FPS",$param) and $param["FPS"] !== null) {
            $this->FPS = $param["FPS"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }
    }
}
