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
 * DescribeTranscodeTemplates请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method array getDefinitions() 获取转码模板唯一标识过滤条件，数组长度限制：100。
 * @method void setDefinitions(array $Definitions) 设置转码模板唯一标识过滤条件，数组长度限制：100。
 * @method string getType() 获取模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getContainerType() 获取封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
 * @method void setContainerType(string $ContainerType) 设置封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
 * @method string getTEHDType() 获取极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
 * @method void setTEHDType(string $TEHDType) 设置极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
 * @method string getEnhanceType() 获取增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>AudioVideoEnhance（音视频增强）</li>
<li>AnyEnhance（包括仅视频增强、仅音频增强、音视频增强）</li>
<li>None（非增强）</li>
 * @method void setEnhanceType(string $EnhanceType) 设置增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>AudioVideoEnhance（音视频增强）</li>
<li>AnyEnhance（包括仅视频增强、仅音频增强、音视频增强）</li>
<li>None（非增强）</li>
 * @method string getEnhanceScenarioType() 获取增强场景配置，可选值： <li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li> <li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li> <li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li> <li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li> <li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li> <li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li> <li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li> <li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) 设置增强场景配置，可选值： <li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li> <li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li> <li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li> <li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li> <li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li> <li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li> <li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li> <li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
 */
class DescribeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var array 转码模板唯一标识过滤条件，数组长度限制：100。
     */
    public $Definitions;

    /**
     * @var string 模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
     */
    public $ContainerType;

    /**
     * @var string 极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
     */
    public $TEHDType;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
     */
    public $Limit;

    /**
     * @var string 增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>AudioVideoEnhance（音视频增强）</li>
<li>AnyEnhance（包括仅视频增强、仅音频增强、音视频增强）</li>
<li>None（非增强）</li>
     */
    public $EnhanceType;

    /**
     * @var string 增强场景配置，可选值： <li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li> <li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li> <li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li> <li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li> <li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li> <li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li> <li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li> <li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
     */
    public $EnhanceScenarioType;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param array $Definitions 转码模板唯一标识过滤条件，数组长度限制：100。
     * @param string $Type 模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $ContainerType 封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
     * @param string $TEHDType 极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
     * @param string $EnhanceType 增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>AudioVideoEnhance（音视频增强）</li>
<li>AnyEnhance（包括仅视频增强、仅音频增强、音视频增强）</li>
<li>None（非增强）</li>
     * @param string $EnhanceScenarioType 增强场景配置，可选值： <li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li> <li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li> <li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li> <li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li> <li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li> <li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li> <li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li> <li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("TEHDType",$param) and $param["TEHDType"] !== null) {
            $this->TEHDType = $param["TEHDType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EnhanceType",$param) and $param["EnhanceType"] !== null) {
            $this->EnhanceType = $param["EnhanceType"];
        }

        if (array_key_exists("EnhanceScenarioType",$param) and $param["EnhanceScenarioType"] !== null) {
            $this->EnhanceScenarioType = $param["EnhanceScenarioType"];
        }
    }
}
