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
 * RebuildMedia请求参数结构体
 *
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method integer getSubAppId() 获取<b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method float getStartTimeOffset() 获取起始偏移时间，单位：秒，不填表示从视频开始截取。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置起始偏移时间，单位：秒，不填表示从视频开始截取。
 * @method float getEndTimeOffset() 获取结束偏移时间，单位：秒，不填表示截取到视频末尾。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置结束偏移时间，单位：秒，不填表示截取到视频末尾。
 * @method RepairInfo getRepairInfo() 获取画质修复控制参数。
 * @method void setRepairInfo(RepairInfo $RepairInfo) 设置画质修复控制参数。
 * @method VideoFrameInterpolationInfo getVideoFrameInterpolationInfo() 获取智能插帧控制参数。
 * @method void setVideoFrameInterpolationInfo(VideoFrameInterpolationInfo $VideoFrameInterpolationInfo) 设置智能插帧控制参数。
 * @method SuperResolutionInfo getSuperResolutionInfo() 获取画面超分控制参数。
 * @method void setSuperResolutionInfo(SuperResolutionInfo $SuperResolutionInfo) 设置画面超分控制参数。
 * @method HDRInfo getHDRInfo() 获取高动态范围类型控制参数。
 * @method void setHDRInfo(HDRInfo $HDRInfo) 设置高动态范围类型控制参数。
 * @method VideoDenoiseInfo getVideoDenoiseInfo() 获取视频降噪控制参数。
 * @method void setVideoDenoiseInfo(VideoDenoiseInfo $VideoDenoiseInfo) 设置视频降噪控制参数。
 * @method AudioDenoiseInfo getAudioDenoiseInfo() 获取音频降噪控制参数。
 * @method void setAudioDenoiseInfo(AudioDenoiseInfo $AudioDenoiseInfo) 设置音频降噪控制参数。
 * @method ColorEnhanceInfo getColorInfo() 获取色彩增强控制参数。
 * @method void setColorInfo(ColorEnhanceInfo $ColorInfo) 设置色彩增强控制参数。
 * @method SharpEnhanceInfo getSharpInfo() 获取细节增强控制参数。
 * @method void setSharpInfo(SharpEnhanceInfo $SharpInfo) 设置细节增强控制参数。
 * @method FaceEnhanceInfo getFaceInfo() 获取人脸增强控制参数。
 * @method void setFaceInfo(FaceEnhanceInfo $FaceInfo) 设置人脸增强控制参数。
 * @method LowLightEnhanceInfo getLowLightInfo() 获取低光照控制参数。
 * @method void setLowLightInfo(LowLightEnhanceInfo $LowLightInfo) 设置低光照控制参数。
 * @method ScratchRepairInfo getScratchRepairInfo() 获取去划痕控制参数。
 * @method void setScratchRepairInfo(ScratchRepairInfo $ScratchRepairInfo) 设置去划痕控制参数。
 * @method ArtifactRepairInfo getArtifactRepairInfo() 获取去伪影（毛刺）控制参数。
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) 设置去伪影（毛刺）控制参数。
 * @method RebuildMediaTargetInfo getTargetInfo() 获取音画质重生输出目标参数。
 * @method void setTargetInfo(RebuildMediaTargetInfo $TargetInfo) 设置音画质重生输出目标参数。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class RebuildMediaRequest extends AbstractModel
{
    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var integer <b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var float 起始偏移时间，单位：秒，不填表示从视频开始截取。
     */
    public $StartTimeOffset;

    /**
     * @var float 结束偏移时间，单位：秒，不填表示截取到视频末尾。
     */
    public $EndTimeOffset;

    /**
     * @var RepairInfo 画质修复控制参数。
     */
    public $RepairInfo;

    /**
     * @var VideoFrameInterpolationInfo 智能插帧控制参数。
     */
    public $VideoFrameInterpolationInfo;

    /**
     * @var SuperResolutionInfo 画面超分控制参数。
     */
    public $SuperResolutionInfo;

    /**
     * @var HDRInfo 高动态范围类型控制参数。
     */
    public $HDRInfo;

    /**
     * @var VideoDenoiseInfo 视频降噪控制参数。
     */
    public $VideoDenoiseInfo;

    /**
     * @var AudioDenoiseInfo 音频降噪控制参数。
     */
    public $AudioDenoiseInfo;

    /**
     * @var ColorEnhanceInfo 色彩增强控制参数。
     */
    public $ColorInfo;

    /**
     * @var SharpEnhanceInfo 细节增强控制参数。
     */
    public $SharpInfo;

    /**
     * @var FaceEnhanceInfo 人脸增强控制参数。
     */
    public $FaceInfo;

    /**
     * @var LowLightEnhanceInfo 低光照控制参数。
     */
    public $LowLightInfo;

    /**
     * @var ScratchRepairInfo 去划痕控制参数。
     */
    public $ScratchRepairInfo;

    /**
     * @var ArtifactRepairInfo 去伪影（毛刺）控制参数。
     */
    public $ArtifactRepairInfo;

    /**
     * @var RebuildMediaTargetInfo 音画质重生输出目标参数。
     */
    public $TargetInfo;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var integer 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @var string 保留字段，特殊用途时使用。
     */
    public $ExtInfo;

    /**
     * @param string $FileId 媒体文件 ID。
     * @param integer $SubAppId <b>点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param float $StartTimeOffset 起始偏移时间，单位：秒，不填表示从视频开始截取。
     * @param float $EndTimeOffset 结束偏移时间，单位：秒，不填表示截取到视频末尾。
     * @param RepairInfo $RepairInfo 画质修复控制参数。
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo 智能插帧控制参数。
     * @param SuperResolutionInfo $SuperResolutionInfo 画面超分控制参数。
     * @param HDRInfo $HDRInfo 高动态范围类型控制参数。
     * @param VideoDenoiseInfo $VideoDenoiseInfo 视频降噪控制参数。
     * @param AudioDenoiseInfo $AudioDenoiseInfo 音频降噪控制参数。
     * @param ColorEnhanceInfo $ColorInfo 色彩增强控制参数。
     * @param SharpEnhanceInfo $SharpInfo 细节增强控制参数。
     * @param FaceEnhanceInfo $FaceInfo 人脸增强控制参数。
     * @param LowLightEnhanceInfo $LowLightInfo 低光照控制参数。
     * @param ScratchRepairInfo $ScratchRepairInfo 去划痕控制参数。
     * @param ArtifactRepairInfo $ArtifactRepairInfo 去伪影（毛刺）控制参数。
     * @param RebuildMediaTargetInfo $TargetInfo 音画质重生输出目标参数。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param integer $TasksPriority 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     * @param string $ExtInfo 保留字段，特殊用途时使用。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
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

        if (array_key_exists("AudioDenoiseInfo",$param) and $param["AudioDenoiseInfo"] !== null) {
            $this->AudioDenoiseInfo = new AudioDenoiseInfo();
            $this->AudioDenoiseInfo->deserialize($param["AudioDenoiseInfo"]);
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

        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = new RebuildMediaTargetInfo();
            $this->TargetInfo->deserialize($param["TargetInfo"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
