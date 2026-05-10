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
 * 播放器配置详情
 *
 * @method string getName() 获取<p>播放器配置名字。</p>
 * @method void setName(string $Name) 设置<p>播放器配置名字。</p>
 * @method string getType() 获取<p>播放器配置类型，取值范围：</p><li>Preset：系统预置配置；</li><li>Custom：用户自定义配置。</li>
 * @method void setType(string $Type) 设置<p>播放器配置类型，取值范围：</p><li>Preset：系统预置配置；</li><li>Custom：用户自定义配置。</li>
 * @method string getAudioVideoType() 获取<p>播放的音视频类型，可选值有：</p><li>AdaptiveDynamicStream：自适应码流输出；</li><li>Transcode：转码输出；</li><li>Original：原始音视频。</li>
 * @method void setAudioVideoType(string $AudioVideoType) 设置<p>播放的音视频类型，可选值有：</p><li>AdaptiveDynamicStream：自适应码流输出；</li><li>Transcode：转码输出；</li><li>Original：原始音视频。</li>
 * @method string getDrmSwitch() 获取<p>播放 DRM 保护的自适应码流开关：</p><li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li><li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
 * @method void setDrmSwitch(string $DrmSwitch) 设置<p>播放 DRM 保护的自适应码流开关：</p><li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li><li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() 获取<p>允许输出的未加密的自适应码流模板 ID。</p>
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) 设置<p>允许输出的未加密的自适应码流模板 ID。</p>
 * @method DrmStreamingsInfo getDrmStreamingsInfo() 获取<p>允许输出的 DRM 自适应码流模板内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) 设置<p>允许输出的 DRM 自适应码流模板内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTranscodeDefinition() 获取<p>允许输出的转码模板 ID。</p>
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) 设置<p>允许输出的转码模板 ID。</p>
 * @method integer getImageSpriteDefinition() 获取<p>允许输出的雪碧图模板 ID。</p>
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) 设置<p>允许输出的雪碧图模板 ID。</p>
 * @method array getResolutionNameSet() 获取<p>播放器对不于不同分辨率的子流展示名字。</p>
 * @method void setResolutionNameSet(array $ResolutionNameSet) 设置<p>播放器对不于不同分辨率的子流展示名字。</p>
 * @method string getCreateTime() 获取<p>播放器配置创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>播放器配置创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>播放器配置最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>播放器配置最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getDomain() 获取<p>播放时使用的域名。值为 Default，表示使用<a href="https://cloud.tencent.com/document/product/266/33373">默认分发配置</a>中的域名。</p>
 * @method void setDomain(string $Domain) 设置<p>播放时使用的域名。值为 Default，表示使用<a href="https://cloud.tencent.com/document/product/266/33373">默认分发配置</a>中的域名。</p>
 * @method string getScheme() 获取<p>播放时使用的 Scheme。取值范围：</p><li>Default：使用[默认分发配置](https://cloud.tencent.com/document/product/266/33373)中的 Scheme；</li><li>HTTP；</li><li>HTTPS。</li>
 * @method void setScheme(string $Scheme) 设置<p>播放时使用的 Scheme。取值范围：</p><li>Default：使用[默认分发配置](https://cloud.tencent.com/document/product/266/33373)中的 Scheme；</li><li>HTTP；</li><li>HTTPS。</li>
 * @method string getComment() 获取<p>模板描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息。</p>
 */
class PlayerConfig extends AbstractModel
{
    /**
     * @var string <p>播放器配置名字。</p>
     */
    public $Name;

    /**
     * @var string <p>播放器配置类型，取值范围：</p><li>Preset：系统预置配置；</li><li>Custom：用户自定义配置。</li>
     */
    public $Type;

    /**
     * @var string <p>播放的音视频类型，可选值有：</p><li>AdaptiveDynamicStream：自适应码流输出；</li><li>Transcode：转码输出；</li><li>Original：原始音视频。</li>
     */
    public $AudioVideoType;

    /**
     * @var string <p>播放 DRM 保护的自适应码流开关：</p><li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li><li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
     */
    public $DrmSwitch;

    /**
     * @var integer <p>允许输出的未加密的自适应码流模板 ID。</p>
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo <p>允许输出的 DRM 自适应码流模板内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer <p>允许输出的转码模板 ID。</p>
     */
    public $TranscodeDefinition;

    /**
     * @var integer <p>允许输出的雪碧图模板 ID。</p>
     */
    public $ImageSpriteDefinition;

    /**
     * @var array <p>播放器对不于不同分辨率的子流展示名字。</p>
     */
    public $ResolutionNameSet;

    /**
     * @var string <p>播放器配置创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>播放器配置最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>播放时使用的域名。值为 Default，表示使用<a href="https://cloud.tencent.com/document/product/266/33373">默认分发配置</a>中的域名。</p>
     */
    public $Domain;

    /**
     * @var string <p>播放时使用的 Scheme。取值范围：</p><li>Default：使用[默认分发配置](https://cloud.tencent.com/document/product/266/33373)中的 Scheme；</li><li>HTTP；</li><li>HTTPS。</li>
     */
    public $Scheme;

    /**
     * @var string <p>模板描述信息。</p>
     */
    public $Comment;

    /**
     * @param string $Name <p>播放器配置名字。</p>
     * @param string $Type <p>播放器配置类型，取值范围：</p><li>Preset：系统预置配置；</li><li>Custom：用户自定义配置。</li>
     * @param string $AudioVideoType <p>播放的音视频类型，可选值有：</p><li>AdaptiveDynamicStream：自适应码流输出；</li><li>Transcode：转码输出；</li><li>Original：原始音视频。</li>
     * @param string $DrmSwitch <p>播放 DRM 保护的自适应码流开关：</p><li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li><li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
     * @param integer $AdaptiveDynamicStreamingDefinition <p>允许输出的未加密的自适应码流模板 ID。</p>
     * @param DrmStreamingsInfo $DrmStreamingsInfo <p>允许输出的 DRM 自适应码流模板内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TranscodeDefinition <p>允许输出的转码模板 ID。</p>
     * @param integer $ImageSpriteDefinition <p>允许输出的雪碧图模板 ID。</p>
     * @param array $ResolutionNameSet <p>播放器对不于不同分辨率的子流展示名字。</p>
     * @param string $CreateTime <p>播放器配置创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>播放器配置最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $Domain <p>播放时使用的域名。值为 Default，表示使用<a href="https://cloud.tencent.com/document/product/266/33373">默认分发配置</a>中的域名。</p>
     * @param string $Scheme <p>播放时使用的 Scheme。取值范围：</p><li>Default：使用[默认分发配置](https://cloud.tencent.com/document/product/266/33373)中的 Scheme；</li><li>HTTP；</li><li>HTTPS。</li>
     * @param string $Comment <p>模板描述信息。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("DrmSwitch",$param) and $param["DrmSwitch"] !== null) {
            $this->DrmSwitch = $param["DrmSwitch"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("DrmStreamingsInfo",$param) and $param["DrmStreamingsInfo"] !== null) {
            $this->DrmStreamingsInfo = new DrmStreamingsInfo();
            $this->DrmStreamingsInfo->deserialize($param["DrmStreamingsInfo"]);
        }

        if (array_key_exists("TranscodeDefinition",$param) and $param["TranscodeDefinition"] !== null) {
            $this->TranscodeDefinition = $param["TranscodeDefinition"];
        }

        if (array_key_exists("ImageSpriteDefinition",$param) and $param["ImageSpriteDefinition"] !== null) {
            $this->ImageSpriteDefinition = $param["ImageSpriteDefinition"];
        }

        if (array_key_exists("ResolutionNameSet",$param) and $param["ResolutionNameSet"] !== null) {
            $this->ResolutionNameSet = [];
            foreach ($param["ResolutionNameSet"] as $key => $value){
                $obj = new ResolutionNameInfo();
                $obj->deserialize($value);
                array_push($this->ResolutionNameSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
