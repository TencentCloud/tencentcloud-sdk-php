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
 * 自适应码率转码模板，子模板，出入参数。
 *
 * @method integer getTemplateId() 获取自适应码率转码模板，子模板Id。
入参时候，填写此字段，表示更新子模板，否则是新增子模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(integer $TemplateId) 设置自适应码率转码模板，子模板Id。
入参时候，填写此字段，表示更新子模板，否则是新增子模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateName() 获取子模板名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置子模板名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVcodec() 获取视频编码：h264/h265/origin，默认origin。

origin: 保持原始编码格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVcodec(string $Vcodec) 设置视频编码：h264/h265/origin，默认origin。

origin: 保持原始编码格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVideoBitrate() 获取视频码率。范围：0kbps - 8000kbps。
0为保持原始码率。
注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBitrate(integer $VideoBitrate) 设置视频码率。范围：0kbps - 8000kbps。
0为保持原始码率。
注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取宽，默认0。
范围[0-3000]。
数值必须是2的倍数，0是原始宽度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置宽，默认0。
范围[0-3000]。
数值必须是2的倍数，0是原始宽度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取高，默认0。
范围[0-3000]
数值必须是2的倍数，0是原始高度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置高，默认0。
范围[0-3000]
数值必须是2的倍数，0是原始高度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFps() 获取帧率，默认0。
范围0-60fps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFps(integer $Fps) 设置帧率，默认0。
范围0-60fps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGop() 获取关键帧间隔，单位：秒。
默认原始的间隔。
范围2-6。
同一个父模板下面的所有子模板，gop必须相等且存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGop(integer $Gop) 设置关键帧间隔，单位：秒。
默认原始的间隔。
范围2-6。
同一个父模板下面的所有子模板，gop必须相等且存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNeedVideo() 获取是否保留视频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedVideo(integer $NeedVideo) 设置是否保留视频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNeedAudio() 获取是否保留音频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedAudio(integer $NeedAudio) 设置是否保留音频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBitrateToOrig() 获取当设置的码率>原始码率时，是否以原始码率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitrateToOrig(integer $BitrateToOrig) 设置当设置的码率>原始码率时，是否以原始码率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeightToOrig() 获取当设置的高度>原始高度时，是否以原始高度为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeightToOrig(integer $HeightToOrig) 设置当设置的高度>原始高度时，是否以原始高度为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFpsToOrig() 获取当设置的帧率>原始帧率时，是否以原始帧率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsToOrig(integer $FpsToOrig) 设置当设置的帧率>原始帧率时，是否以原始帧率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShortEdgeAsHeight() 获取是否以短边作为高度，0：否，1：是。默认0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShortEdgeAsHeight(integer $ShortEdgeAsHeight) 设置是否以短边作为高度，0：否，1：是。默认0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHlsContainerFormat() 获取HLS 分片类型。
可选值：ts、fmp4。
注：编码方式为 H.265 时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHlsContainerFormat(string $HlsContainerFormat) 设置HLS 分片类型。
可选值：ts、fmp4。
注：编码方式为 H.265 时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHlsMp4VideoCodecTag() 获取编码标签。
可选值：hvc1、hev1。
注：HLS 分片类型选择 fmp4 时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHlsMp4VideoCodecTag(string $HlsMp4VideoCodecTag) 设置编码标签。
可选值：hvc1、hev1。
注：HLS 分片类型选择 fmp4 时生效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChildTemplateInfo extends AbstractModel
{
    /**
     * @var integer 自适应码率转码模板，子模板Id。
入参时候，填写此字段，表示更新子模板，否则是新增子模板。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 子模板名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @var string 视频编码：h264/h265/origin，默认origin。

origin: 保持原始编码格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vcodec;

    /**
     * @var integer 视频码率。范围：0kbps - 8000kbps。
0为保持原始码率。
注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBitrate;

    /**
     * @var integer 宽，默认0。
范围[0-3000]。
数值必须是2的倍数，0是原始宽度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 高，默认0。
范围[0-3000]
数值必须是2的倍数，0是原始高度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var integer 帧率，默认0。
范围0-60fps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fps;

    /**
     * @var integer 关键帧间隔，单位：秒。
默认原始的间隔。
范围2-6。
同一个父模板下面的所有子模板，gop必须相等且存在。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gop;

    /**
     * @var integer 是否保留视频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedVideo;

    /**
     * @var integer 是否保留音频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedAudio;

    /**
     * @var integer 当设置的码率>原始码率时，是否以原始码率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BitrateToOrig;

    /**
     * @var integer 当设置的高度>原始高度时，是否以原始高度为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeightToOrig;

    /**
     * @var integer 当设置的帧率>原始帧率时，是否以原始帧率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsToOrig;

    /**
     * @var integer 是否以短边作为高度，0：否，1：是。默认0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShortEdgeAsHeight;

    /**
     * @var string HLS 分片类型。
可选值：ts、fmp4。
注：编码方式为 H.265 时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HlsContainerFormat;

    /**
     * @var string 编码标签。
可选值：hvc1、hev1。
注：HLS 分片类型选择 fmp4 时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HlsMp4VideoCodecTag;

    /**
     * @param integer $TemplateId 自适应码率转码模板，子模板Id。
入参时候，填写此字段，表示更新子模板，否则是新增子模板。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateName 子模板名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vcodec 视频编码：h264/h265/origin，默认origin。

origin: 保持原始编码格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VideoBitrate 视频码率。范围：0kbps - 8000kbps。
0为保持原始码率。
注: 转码模板有码率唯一要求，最终保存的码率可能与输入码率有所差别。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 宽，默认0。
范围[0-3000]。
数值必须是2的倍数，0是原始宽度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 高，默认0。
范围[0-3000]
数值必须是2的倍数，0是原始高度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Fps 帧率，默认0。
范围0-60fps。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gop 关键帧间隔，单位：秒。
默认原始的间隔。
范围2-6。
同一个父模板下面的所有子模板，gop必须相等且存在。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NeedVideo 是否保留视频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NeedAudio 是否保留音频，0：否，1：是。默认1。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BitrateToOrig 当设置的码率>原始码率时，是否以原始码率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HeightToOrig 当设置的高度>原始高度时，是否以原始高度为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FpsToOrig 当设置的帧率>原始帧率时，是否以原始帧率为准。
0：否， 1：是
默认 0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShortEdgeAsHeight 是否以短边作为高度，0：否，1：是。默认0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HlsContainerFormat HLS 分片类型。
可选值：ts、fmp4。
注：编码方式为 H.265 时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HlsMp4VideoCodecTag 编码标签。
可选值：hvc1、hev1。
注：HLS 分片类型选择 fmp4 时生效。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
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

        if (array_key_exists("NeedVideo",$param) and $param["NeedVideo"] !== null) {
            $this->NeedVideo = $param["NeedVideo"];
        }

        if (array_key_exists("NeedAudio",$param) and $param["NeedAudio"] !== null) {
            $this->NeedAudio = $param["NeedAudio"];
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

        if (array_key_exists("ShortEdgeAsHeight",$param) and $param["ShortEdgeAsHeight"] !== null) {
            $this->ShortEdgeAsHeight = $param["ShortEdgeAsHeight"];
        }

        if (array_key_exists("HlsContainerFormat",$param) and $param["HlsContainerFormat"] !== null) {
            $this->HlsContainerFormat = $param["HlsContainerFormat"];
        }

        if (array_key_exists("HlsMp4VideoCodecTag",$param) and $param["HlsMp4VideoCodecTag"] !== null) {
            $this->HlsMp4VideoCodecTag = $param["HlsMp4VideoCodecTag"];
        }
    }
}
