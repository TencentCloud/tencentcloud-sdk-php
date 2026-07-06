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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码模板信息。
 *
 * @method string getVcodec() 获取<p>视频编码：h264/h265/origin，默认h264。</p><p>origin: 保持原始编码格式</p>
 * @method void setVcodec(string $Vcodec) 设置<p>视频编码：h264/h265/origin，默认h264。</p><p>origin: 保持原始编码格式</p>
 * @method integer getVideoBitrate() 获取<p>视频码率。范围：0kbps - 8000kbps。<br>0为保持原始码率。<br>注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。</p>
 * @method void setVideoBitrate(integer $VideoBitrate) 设置<p>视频码率。范围：0kbps - 8000kbps。<br>0为保持原始码率。<br>注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。</p>
 * @method string getAcodec() 获取<p>音频编码：aac，默认aac。<br>注意：当前该参数未生效，待后续支持！</p>
 * @method void setAcodec(string $Acodec) 设置<p>音频编码：aac，默认aac。<br>注意：当前该参数未生效，待后续支持！</p>
 * @method integer getAudioBitrate() 获取<p>音频码率。取值范围：0kbps - 500kbps。<br>默认0。</p>
 * @method void setAudioBitrate(integer $AudioBitrate) 设置<p>音频码率。取值范围：0kbps - 500kbps。<br>默认0。</p>
 * @method integer getWidth() 获取<p>宽，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
 * @method void setWidth(integer $Width) 设置<p>宽，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
 * @method integer getHeight() 获取<p>高，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
 * @method void setHeight(integer $Height) 设置<p>高，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
 * @method integer getFps() 获取<p>帧率，默认0。<br>范围0-60fps</p>
 * @method void setFps(integer $Fps) 设置<p>帧率，默认0。<br>范围0-60fps</p>
 * @method integer getGop() 获取<p>关键帧间隔，单位：秒。<br>默认原始的间隔<br>范围2-6</p>
 * @method void setGop(integer $Gop) 设置<p>关键帧间隔，单位：秒。<br>默认原始的间隔<br>范围2-6</p>
 * @method integer getRotate() 获取<p>旋转角度，默认0。<br>可取值：0，90，180，270</p>
 * @method void setRotate(integer $Rotate) 设置<p>旋转角度，默认0。<br>可取值：0，90，180，270</p>
 * @method string getProfile() 获取<p>编码质量：<br>baseline/main/high。默认baseline</p>
 * @method void setProfile(string $Profile) 设置<p>编码质量：<br>baseline/main/high。默认baseline</p>
 * @method integer getBitrateToOrig() 获取<p>当设置的码率&gt;原始码率时，是否以原始码率为准。<br>0：否， 1：是<br>默认 0。</p>
 * @method void setBitrateToOrig(integer $BitrateToOrig) 设置<p>当设置的码率&gt;原始码率时，是否以原始码率为准。<br>0：否， 1：是<br>默认 0。</p>
 * @method integer getHeightToOrig() 获取<p>当设置的高度&gt;原始高度时，是否以原始高度为准。<br>0：否， 1：是<br>默认 0。</p>
 * @method void setHeightToOrig(integer $HeightToOrig) 设置<p>当设置的高度&gt;原始高度时，是否以原始高度为准。<br>0：否， 1：是<br>默认 0。</p>
 * @method integer getFpsToOrig() 获取<p>当设置的帧率&gt;原始帧率时，是否以原始帧率为准。<br>0：否， 1：是<br>默认 0。</p>
 * @method void setFpsToOrig(integer $FpsToOrig) 设置<p>当设置的帧率&gt;原始帧率时，是否以原始帧率为准。<br>0：否， 1：是<br>默认 0。</p>
 * @method integer getNeedVideo() 获取<p>是否保留视频。0：否，1：是。</p>
 * @method void setNeedVideo(integer $NeedVideo) 设置<p>是否保留视频。0：否，1：是。</p>
 * @method integer getNeedAudio() 获取<p>是否保留音频。0：否，1：是。</p>
 * @method void setNeedAudio(integer $NeedAudio) 设置<p>是否保留音频。0：否，1：是。</p>
 * @method integer getTemplateId() 获取<p>模板 ID。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>模板 ID。</p>
 * @method string getTemplateName() 获取<p>模板名称。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。</p>
 * @method string getDescription() 获取<p>模板描述。</p>
 * @method void setDescription(string $Description) 设置<p>模板描述。</p>
 * @method integer getAiTransCode() 获取<p>是否是极速高清模板，0：否，1：是。默认0。</p>
 * @method void setAiTransCode(integer $AiTransCode) 设置<p>是否是极速高清模板，0：否，1：是。默认0。</p>
 * @method float getAdaptBitratePercent() 获取<p>极速高清视频码率压缩比。<br>极速高清目标码率=VideoBitrate * (1-AdaptBitratePercent)</p><p>取值范围：0.0到0.5</p>
 * @method void setAdaptBitratePercent(float $AdaptBitratePercent) 设置<p>极速高清视频码率压缩比。<br>极速高清目标码率=VideoBitrate * (1-AdaptBitratePercent)</p><p>取值范围：0.0到0.5</p>
 * @method integer getShortEdgeAsHeight() 获取<p>是否以短边作为高度，0：否，1：是。默认0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShortEdgeAsHeight(integer $ShortEdgeAsHeight) 设置<p>是否以短边作为高度，0：否，1：是。默认0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDRMType() 获取<p>DRM 加密类型，可选值：fairplay、normalaes、widevine。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDRMType(string $DRMType) 设置<p>DRM 加密类型，可选值：fairplay、normalaes、widevine。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDRMTracks() 获取<p>DRM 加密项，多个用|分割，可选值：AUDIO、SD、HD、UHD1、UHD2，后四个为一组，同组中的内容只能选一个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDRMTracks(string $DRMTracks) 设置<p>DRM 加密项，多个用|分割，可选值：AUDIO、SD、HD、UHD1、UHD2，后四个为一组，同组中的内容只能选一个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAdaptiveBitRate() 获取<p>是否创建自适应码率，默认值 0。<br>0：否。<br>1：是。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAdaptiveBitRate(integer $IsAdaptiveBitRate) 设置<p>是否创建自适应码率，默认值 0。<br>0：否。<br>1：是。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdaptiveChildren() 获取<p>自适应码率，子转码模板信息，当 IsAdaptiveBitRate 为 1 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveChildren(array $AdaptiveChildren) 设置<p>自适应码率，子转码模板信息，当 IsAdaptiveBitRate 为 1 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAudienceDrivenTranscode() 获取<p>是否按需转码，0 否，1 是。</p>
 * @method void setAudienceDrivenTranscode(integer $AudienceDrivenTranscode) 设置<p>是否按需转码，0 否，1 是。</p>
 * @method integer getAudienceThreshold() 获取<p>按需转码人数阈值。</p>
 * @method void setAudienceThreshold(integer $AudienceThreshold) 设置<p>按需转码人数阈值。</p>
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string <p>视频编码：h264/h265/origin，默认h264。</p><p>origin: 保持原始编码格式</p>
     */
    public $Vcodec;

    /**
     * @var integer <p>视频码率。范围：0kbps - 8000kbps。<br>0为保持原始码率。<br>注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。</p>
     */
    public $VideoBitrate;

    /**
     * @var string <p>音频编码：aac，默认aac。<br>注意：当前该参数未生效，待后续支持！</p>
     */
    public $Acodec;

    /**
     * @var integer <p>音频码率。取值范围：0kbps - 500kbps。<br>默认0。</p>
     */
    public $AudioBitrate;

    /**
     * @var integer <p>宽，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
     */
    public $Width;

    /**
     * @var integer <p>高，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
     */
    public $Height;

    /**
     * @var integer <p>帧率，默认0。<br>范围0-60fps</p>
     */
    public $Fps;

    /**
     * @var integer <p>关键帧间隔，单位：秒。<br>默认原始的间隔<br>范围2-6</p>
     */
    public $Gop;

    /**
     * @var integer <p>旋转角度，默认0。<br>可取值：0，90，180，270</p>
     */
    public $Rotate;

    /**
     * @var string <p>编码质量：<br>baseline/main/high。默认baseline</p>
     */
    public $Profile;

    /**
     * @var integer <p>当设置的码率&gt;原始码率时，是否以原始码率为准。<br>0：否， 1：是<br>默认 0。</p>
     */
    public $BitrateToOrig;

    /**
     * @var integer <p>当设置的高度&gt;原始高度时，是否以原始高度为准。<br>0：否， 1：是<br>默认 0。</p>
     */
    public $HeightToOrig;

    /**
     * @var integer <p>当设置的帧率&gt;原始帧率时，是否以原始帧率为准。<br>0：否， 1：是<br>默认 0。</p>
     */
    public $FpsToOrig;

    /**
     * @var integer <p>是否保留视频。0：否，1：是。</p>
     */
    public $NeedVideo;

    /**
     * @var integer <p>是否保留音频。0：否，1：是。</p>
     */
    public $NeedAudio;

    /**
     * @var integer <p>模板 ID。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板名称。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>模板描述。</p>
     */
    public $Description;

    /**
     * @var integer <p>是否是极速高清模板，0：否，1：是。默认0。</p>
     */
    public $AiTransCode;

    /**
     * @var float <p>极速高清视频码率压缩比。<br>极速高清目标码率=VideoBitrate * (1-AdaptBitratePercent)</p><p>取值范围：0.0到0.5</p>
     */
    public $AdaptBitratePercent;

    /**
     * @var integer <p>是否以短边作为高度，0：否，1：是。默认0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShortEdgeAsHeight;

    /**
     * @var string <p>DRM 加密类型，可选值：fairplay、normalaes、widevine。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DRMType;

    /**
     * @var string <p>DRM 加密项，多个用|分割，可选值：AUDIO、SD、HD、UHD1、UHD2，后四个为一组，同组中的内容只能选一个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DRMTracks;

    /**
     * @var integer <p>是否创建自适应码率，默认值 0。<br>0：否。<br>1：是。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAdaptiveBitRate;

    /**
     * @var array <p>自适应码率，子转码模板信息，当 IsAdaptiveBitRate 为 1 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveChildren;

    /**
     * @var integer <p>是否按需转码，0 否，1 是。</p>
     */
    public $AudienceDrivenTranscode;

    /**
     * @var integer <p>按需转码人数阈值。</p>
     */
    public $AudienceThreshold;

    /**
     * @param string $Vcodec <p>视频编码：h264/h265/origin，默认h264。</p><p>origin: 保持原始编码格式</p>
     * @param integer $VideoBitrate <p>视频码率。范围：0kbps - 8000kbps。<br>0为保持原始码率。<br>注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。</p>
     * @param string $Acodec <p>音频编码：aac，默认aac。<br>注意：当前该参数未生效，待后续支持！</p>
     * @param integer $AudioBitrate <p>音频码率。取值范围：0kbps - 500kbps。<br>默认0。</p>
     * @param integer $Width <p>宽，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
     * @param integer $Height <p>高，默认0。<br>范围[0-3000]<br>数值必须是2的倍数，0是原始宽度</p>
     * @param integer $Fps <p>帧率，默认0。<br>范围0-60fps</p>
     * @param integer $Gop <p>关键帧间隔，单位：秒。<br>默认原始的间隔<br>范围2-6</p>
     * @param integer $Rotate <p>旋转角度，默认0。<br>可取值：0，90，180，270</p>
     * @param string $Profile <p>编码质量：<br>baseline/main/high。默认baseline</p>
     * @param integer $BitrateToOrig <p>当设置的码率&gt;原始码率时，是否以原始码率为准。<br>0：否， 1：是<br>默认 0。</p>
     * @param integer $HeightToOrig <p>当设置的高度&gt;原始高度时，是否以原始高度为准。<br>0：否， 1：是<br>默认 0。</p>
     * @param integer $FpsToOrig <p>当设置的帧率&gt;原始帧率时，是否以原始帧率为准。<br>0：否， 1：是<br>默认 0。</p>
     * @param integer $NeedVideo <p>是否保留视频。0：否，1：是。</p>
     * @param integer $NeedAudio <p>是否保留音频。0：否，1：是。</p>
     * @param integer $TemplateId <p>模板 ID。</p>
     * @param string $TemplateName <p>模板名称。</p>
     * @param string $Description <p>模板描述。</p>
     * @param integer $AiTransCode <p>是否是极速高清模板，0：否，1：是。默认0。</p>
     * @param float $AdaptBitratePercent <p>极速高清视频码率压缩比。<br>极速高清目标码率=VideoBitrate * (1-AdaptBitratePercent)</p><p>取值范围：0.0到0.5</p>
     * @param integer $ShortEdgeAsHeight <p>是否以短边作为高度，0：否，1：是。默认0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DRMType <p>DRM 加密类型，可选值：fairplay、normalaes、widevine。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DRMTracks <p>DRM 加密项，多个用|分割，可选值：AUDIO、SD、HD、UHD1、UHD2，后四个为一组，同组中的内容只能选一个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAdaptiveBitRate <p>是否创建自适应码率，默认值 0。<br>0：否。<br>1：是。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdaptiveChildren <p>自适应码率，子转码模板信息，当 IsAdaptiveBitRate 为 1 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AudienceDrivenTranscode <p>是否按需转码，0 否，1 是。</p>
     * @param integer $AudienceThreshold <p>按需转码人数阈值。</p>
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
        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("BitrateToOrig",$param) and $param["BitrateToOrig"] !== null) {
            $this->BitrateToOrig = $param["BitrateToOrig"];
        }

        if (array_key_exists("HeightToOrig",$param) and $param["HeightToOrig"] !== null) {
            $this->HeightToOrig = $param["HeightToOrig"];
        }

        if (array_key_exists("FpsToOrig",$param) and $param["FpsToOrig"] !== null) {
            $this->FpsToOrig = $param["FpsToOrig"];
        }

        if (array_key_exists("NeedVideo",$param) and $param["NeedVideo"] !== null) {
            $this->NeedVideo = $param["NeedVideo"];
        }

        if (array_key_exists("NeedAudio",$param) and $param["NeedAudio"] !== null) {
            $this->NeedAudio = $param["NeedAudio"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AiTransCode",$param) and $param["AiTransCode"] !== null) {
            $this->AiTransCode = $param["AiTransCode"];
        }

        if (array_key_exists("AdaptBitratePercent",$param) and $param["AdaptBitratePercent"] !== null) {
            $this->AdaptBitratePercent = $param["AdaptBitratePercent"];
        }

        if (array_key_exists("ShortEdgeAsHeight",$param) and $param["ShortEdgeAsHeight"] !== null) {
            $this->ShortEdgeAsHeight = $param["ShortEdgeAsHeight"];
        }

        if (array_key_exists("DRMType",$param) and $param["DRMType"] !== null) {
            $this->DRMType = $param["DRMType"];
        }

        if (array_key_exists("DRMTracks",$param) and $param["DRMTracks"] !== null) {
            $this->DRMTracks = $param["DRMTracks"];
        }

        if (array_key_exists("IsAdaptiveBitRate",$param) and $param["IsAdaptiveBitRate"] !== null) {
            $this->IsAdaptiveBitRate = $param["IsAdaptiveBitRate"];
        }

        if (array_key_exists("AdaptiveChildren",$param) and $param["AdaptiveChildren"] !== null) {
            $this->AdaptiveChildren = [];
            foreach ($param["AdaptiveChildren"] as $key => $value){
                $obj = new ChildTemplateInfo();
                $obj->deserialize($value);
                array_push($this->AdaptiveChildren, $obj);
            }
        }

        if (array_key_exists("AudienceDrivenTranscode",$param) and $param["AudienceDrivenTranscode"] !== null) {
            $this->AudienceDrivenTranscode = $param["AudienceDrivenTranscode"];
        }

        if (array_key_exists("AudienceThreshold",$param) and $param["AudienceThreshold"] !== null) {
            $this->AudienceThreshold = $param["AudienceThreshold"];
        }
    }
}
