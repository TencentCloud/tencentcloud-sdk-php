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
 * ExportVideoEditProject请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method integer getDefinition() 获取视频编码配置 ID，支持自定义创建，推荐优先使用系统预置的导出配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method void setDefinition(integer $Definition) 设置视频编码配置 ID，支持自定义创建，推荐优先使用系统预置的导出配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method string getExportDestination() 获取导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
 * @method void setExportDestination(string $ExportDestination) 设置导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
 * @method string getCoverData() 获取视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
 * @method void setCoverData(string $CoverData) 设置视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
 * @method CMEExportInfo getCMEExportInfo() 获取导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
 * @method void setCMEExportInfo(CMEExportInfo $CMEExportInfo) 设置导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
 * @method VODExportInfo getVODExportInfo() 获取导出的云点播媒资信息。当导出目标为 VOD 时必填。
 * @method void setVODExportInfo(VODExportInfo $VODExportInfo) 设置导出的云点播媒资信息。当导出目标为 VOD 时必填。
 * @method VideoExportExtensionArgs getExportExtensionArgs() 获取视频导出扩展参数。可以覆盖导出模板中的参数，灵活的指定导出规格及参数。
 * @method void setExportExtensionArgs(VideoExportExtensionArgs $ExportExtensionArgs) 设置视频导出扩展参数。可以覆盖导出模板中的参数，灵活的指定导出规格及参数。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
 */
class ExportVideoEditProjectRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var integer 视频编码配置 ID，支持自定义创建，推荐优先使用系统预置的导出配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     */
    public $Definition;

    /**
     * @var string 导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
     */
    public $ExportDestination;

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
     * @var VideoExportExtensionArgs 视频导出扩展参数。可以覆盖导出模板中的参数，灵活的指定导出规格及参数。
     */
    public $ExportExtensionArgs;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $ProjectId 项目 Id。
     * @param integer $Definition 视频编码配置 ID，支持自定义创建，推荐优先使用系统预置的导出配置。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     * @param string $ExportDestination 导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
     * @param string $CoverData 视频封面图片文件（如 jpeg, png 等）进行 Base64 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式，原图片文件不能超过2 M大 小。
     * @param CMEExportInfo $CMEExportInfo 导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
     * @param VODExportInfo $VODExportInfo 导出的云点播媒资信息。当导出目标为 VOD 时必填。
     * @param VideoExportExtensionArgs $ExportExtensionArgs 视频导出扩展参数。可以覆盖导出模板中的参数，灵活的指定导出规格及参数。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExportDestination",$param) and $param["ExportDestination"] !== null) {
            $this->ExportDestination = $param["ExportDestination"];
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

        if (array_key_exists("ExportExtensionArgs",$param) and $param["ExportExtensionArgs"] !== null) {
            $this->ExportExtensionArgs = new VideoExportExtensionArgs();
            $this->ExportExtensionArgs->deserialize($param["ExportExtensionArgs"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
