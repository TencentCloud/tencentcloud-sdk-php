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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音画质重生视频控制控制信息。
 *
 * @method RepairInfo getRepairInfo() 获取画质修复控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepairInfo(RepairInfo $RepairInfo) 设置画质修复控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoFrameInterpolationInfo getVideoFrameInterpolationInfo() 获取智能插帧控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoFrameInterpolationInfo(VideoFrameInterpolationInfo $VideoFrameInterpolationInfo) 设置智能插帧控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SuperResolutionInfo getSuperResolutionInfo() 获取画面超分控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperResolutionInfo(SuperResolutionInfo $SuperResolutionInfo) 设置画面超分控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HDRInfo getHDRInfo() 获取高动态范围类型控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHDRInfo(HDRInfo $HDRInfo) 设置高动态范围类型控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoDenoiseInfo getVideoDenoiseInfo() 获取视频降噪控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoDenoiseInfo(VideoDenoiseInfo $VideoDenoiseInfo) 设置视频降噪控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ColorEnhanceInfo getColorInfo() 获取色彩增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorInfo(ColorEnhanceInfo $ColorInfo) 设置色彩增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SharpEnhanceInfo getSharpInfo() 获取细节增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharpInfo(SharpEnhanceInfo $SharpInfo) 设置细节增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FaceEnhanceInfo getFaceInfo() 获取人脸增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceInfo(FaceEnhanceInfo $FaceInfo) 设置人脸增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LowLightEnhanceInfo getLowLightInfo() 获取低光照控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowLightInfo(LowLightEnhanceInfo $LowLightInfo) 设置低光照控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScratchRepairInfo getScratchRepairInfo() 获取去划痕控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScratchRepairInfo(ScratchRepairInfo $ScratchRepairInfo) 设置去划痕控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ArtifactRepairInfo getArtifactRepairInfo() 获取去伪影控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) 设置去伪影控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RebuildVideoInfo extends AbstractModel
{
    /**
     * @var RepairInfo 画质修复控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepairInfo;

    /**
     * @var VideoFrameInterpolationInfo 智能插帧控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoFrameInterpolationInfo;

    /**
     * @var SuperResolutionInfo 画面超分控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperResolutionInfo;

    /**
     * @var HDRInfo 高动态范围类型控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HDRInfo;

    /**
     * @var VideoDenoiseInfo 视频降噪控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoDenoiseInfo;

    /**
     * @var ColorEnhanceInfo 色彩增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorInfo;

    /**
     * @var SharpEnhanceInfo 细节增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharpInfo;

    /**
     * @var FaceEnhanceInfo 人脸增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceInfo;

    /**
     * @var LowLightEnhanceInfo 低光照控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowLightInfo;

    /**
     * @var ScratchRepairInfo 去划痕控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScratchRepairInfo;

    /**
     * @var ArtifactRepairInfo 去伪影控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArtifactRepairInfo;

    /**
     * @param RepairInfo $RepairInfo 画质修复控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo 智能插帧控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SuperResolutionInfo $SuperResolutionInfo 画面超分控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HDRInfo $HDRInfo 高动态范围类型控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoDenoiseInfo $VideoDenoiseInfo 视频降噪控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ColorEnhanceInfo $ColorInfo 色彩增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SharpEnhanceInfo $SharpInfo 细节增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FaceEnhanceInfo $FaceInfo 人脸增强控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LowLightEnhanceInfo $LowLightInfo 低光照控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScratchRepairInfo $ScratchRepairInfo 去划痕控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ArtifactRepairInfo $ArtifactRepairInfo 去伪影控制参数。
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
        if (array_key_exists("RepairInfo",$param) and $param["RepairInfo"] !== null) {
            $this->RepairInfo = new RepairInfo();
            $this->RepairInfo->deserialize($param["RepairInfo"]);
        }

        if (array_key_exists("VideoFrameInterpolationInfo",$param) and $param["VideoFrameInterpolationInfo"] !== null) {
            $this->VideoFrameInterpolationInfo = new VideoFrameInterpolationInfo();
            $this->VideoFrameInterpolationInfo->deserialize($param["VideoFrameInterpolationInfo"]);
        }

        if (array_key_exists("SuperResolutionInfo",$param) and $param["SuperResolutionInfo"] !== null) {
            $this->SuperResolutionInfo = new SuperResolutionInfo();
            $this->SuperResolutionInfo->deserialize($param["SuperResolutionInfo"]);
        }

        if (array_key_exists("HDRInfo",$param) and $param["HDRInfo"] !== null) {
            $this->HDRInfo = new HDRInfo();
            $this->HDRInfo->deserialize($param["HDRInfo"]);
        }

        if (array_key_exists("VideoDenoiseInfo",$param) and $param["VideoDenoiseInfo"] !== null) {
            $this->VideoDenoiseInfo = new VideoDenoiseInfo();
            $this->VideoDenoiseInfo->deserialize($param["VideoDenoiseInfo"]);
        }

        if (array_key_exists("ColorInfo",$param) and $param["ColorInfo"] !== null) {
            $this->ColorInfo = new ColorEnhanceInfo();
            $this->ColorInfo->deserialize($param["ColorInfo"]);
        }

        if (array_key_exists("SharpInfo",$param) and $param["SharpInfo"] !== null) {
            $this->SharpInfo = new SharpEnhanceInfo();
            $this->SharpInfo->deserialize($param["SharpInfo"]);
        }

        if (array_key_exists("FaceInfo",$param) and $param["FaceInfo"] !== null) {
            $this->FaceInfo = new FaceEnhanceInfo();
            $this->FaceInfo->deserialize($param["FaceInfo"]);
        }

        if (array_key_exists("LowLightInfo",$param) and $param["LowLightInfo"] !== null) {
            $this->LowLightInfo = new LowLightEnhanceInfo();
            $this->LowLightInfo->deserialize($param["LowLightInfo"]);
        }

        if (array_key_exists("ScratchRepairInfo",$param) and $param["ScratchRepairInfo"] !== null) {
            $this->ScratchRepairInfo = new ScratchRepairInfo();
            $this->ScratchRepairInfo->deserialize($param["ScratchRepairInfo"]);
        }

        if (array_key_exists("ArtifactRepairInfo",$param) and $param["ArtifactRepairInfo"] !== null) {
            $this->ArtifactRepairInfo = new ArtifactRepairInfo();
            $this->ArtifactRepairInfo->deserialize($param["ArtifactRepairInfo"]);
        }
    }
}
