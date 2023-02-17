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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportVideoByEditorTrackData请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method integer getDefinition() 获取导出视频预设配置 Id，推荐优先使用下面的默认预设配置 Id，有其他需求可通过接口定制预设配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method void setDefinition(integer $Definition) 设置导出视频预设配置 Id，推荐优先使用下面的默认预设配置 Id，有其他需求可通过接口定制预设配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method string getExportDestination() 获取导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创建引擎，即导出到多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
 * @method void setExportDestination(string $ExportDestination) 设置导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创建引擎，即导出到多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
 * @method string getTrackData() 获取轨道数据，用于描述待导出视频的内容。关于轨道数据的格式请查看 [视频合成协议](https://cloud.tencent.com/document/product/1156/51225)。文档中也描述了如何在页面上查看一个剪辑项目的轨道数据，该能力可以帮助开发者更方便地构造自己的轨道数据。
 * @method void setTrackData(string $TrackData) 设置轨道数据，用于描述待导出视频的内容。关于轨道数据的格式请查看 [视频合成协议](https://cloud.tencent.com/document/product/1156/51225)。文档中也描述了如何在页面上查看一个剪辑项目的轨道数据，该能力可以帮助开发者更方便地构造自己的轨道数据。
 * @method string getAspectRatio() 获取轨道数据对应的画布宽高比，配合预设配置中的视频短边尺寸，可决定导出画面的尺寸。例：
<li>如果 AspectRatio 取值 16:9，预设配置选为12（短边1080），则导出尺寸为 1920 * 1080；</li>
<li>如果 AspectRatio 取值 9:16，预设配置选为11（短边720），则导出尺寸为 720 *1280。</li>
 * @method void setAspectRatio(string $AspectRatio) 设置轨道数据对应的画布宽高比，配合预设配置中的视频短边尺寸，可决定导出画面的尺寸。例：
<li>如果 AspectRatio 取值 16:9，预设配置选为12（短边1080），则导出尺寸为 1920 * 1080；</li>
<li>如果 AspectRatio 取值 9:16，预设配置选为11（短边720），则导出尺寸为 720 *1280。</li>
 * @method string getCoverData() 获取视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
 * @method void setCoverData(string $CoverData) 设置视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
 * @method CMEExportInfo getCMEExportInfo() 获取导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
 * @method void setCMEExportInfo(CMEExportInfo $CMEExportInfo) 设置导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
 * @method VODExportInfo getVODExportInfo() 获取导出的云点播媒资信息。当导出目标为 VOD 时必填。
 * @method void setVODExportInfo(VODExportInfo $VODExportInfo) 设置导出的云点播媒资信息。当导出目标为 VOD 时必填。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，无权限限制。如果指定操作者，轨道数据中使的媒资该操作者需要拥有使用权限。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，无权限限制。如果指定操作者，轨道数据中使的媒资该操作者需要拥有使用权限。
 */
class ExportVideoByEditorTrackDataRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var integer 导出视频预设配置 Id，推荐优先使用下面的默认预设配置 Id，有其他需求可通过接口定制预设配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     */
    public $Definition;

    /**
     * @var string 导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创建引擎，即导出到多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
     */
    public $ExportDestination;

    /**
     * @var string 轨道数据，用于描述待导出视频的内容。关于轨道数据的格式请查看 [视频合成协议](https://cloud.tencent.com/document/product/1156/51225)。文档中也描述了如何在页面上查看一个剪辑项目的轨道数据，该能力可以帮助开发者更方便地构造自己的轨道数据。
     */
    public $TrackData;

    /**
     * @var string 轨道数据对应的画布宽高比，配合预设配置中的视频短边尺寸，可决定导出画面的尺寸。例：
<li>如果 AspectRatio 取值 16:9，预设配置选为12（短边1080），则导出尺寸为 1920 * 1080；</li>
<li>如果 AspectRatio 取值 9:16，预设配置选为11（短边720），则导出尺寸为 720 *1280。</li>
     */
    public $AspectRatio;

    /**
     * @var string 视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
     */
    public $CoverData;

    /**
     * @var CMEExportInfo 导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
     */
    public $CMEExportInfo;

    /**
     * @var VODExportInfo 导出的云点播媒资信息。当导出目标为 VOD 时必填。
     */
    public $VODExportInfo;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，无权限限制。如果指定操作者，轨道数据中使的媒资该操作者需要拥有使用权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param integer $Definition 导出视频预设配置 Id，推荐优先使用下面的默认预设配置 Id，有其他需求可通过接口定制预设配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     * @param string $ExportDestination 导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创建引擎，即导出到多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
     * @param string $TrackData 轨道数据，用于描述待导出视频的内容。关于轨道数据的格式请查看 [视频合成协议](https://cloud.tencent.com/document/product/1156/51225)。文档中也描述了如何在页面上查看一个剪辑项目的轨道数据，该能力可以帮助开发者更方便地构造自己的轨道数据。
     * @param string $AspectRatio 轨道数据对应的画布宽高比，配合预设配置中的视频短边尺寸，可决定导出画面的尺寸。例：
<li>如果 AspectRatio 取值 16:9，预设配置选为12（短边1080），则导出尺寸为 1920 * 1080；</li>
<li>如果 AspectRatio 取值 9:16，预设配置选为11（短边720），则导出尺寸为 720 *1280。</li>
     * @param string $CoverData 视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
     * @param CMEExportInfo $CMEExportInfo 导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
     * @param VODExportInfo $VODExportInfo 导出的云点播媒资信息。当导出目标为 VOD 时必填。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，无权限限制。如果指定操作者，轨道数据中使的媒资该操作者需要拥有使用权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExportDestination",$param) and $param["ExportDestination"] !== null) {
            $this->ExportDestination = $param["ExportDestination"];
        }

        if (array_key_exists("TrackData",$param) and $param["TrackData"] !== null) {
            $this->TrackData = $param["TrackData"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("CoverData",$param) and $param["CoverData"] !== null) {
            $this->CoverData = $param["CoverData"];
        }

        if (array_key_exists("CMEExportInfo",$param) and $param["CMEExportInfo"] !== null) {
            $this->CMEExportInfo = new CMEExportInfo();
            $this->CMEExportInfo->deserialize($param["CMEExportInfo"]);
        }

        if (array_key_exists("VODExportInfo",$param) and $param["VODExportInfo"] !== null) {
            $this->VODExportInfo = new VODExportInfo();
            $this->VODExportInfo->deserialize($param["VODExportInfo"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
