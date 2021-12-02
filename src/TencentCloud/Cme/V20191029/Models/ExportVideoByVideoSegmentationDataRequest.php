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
 * ExportVideoByVideoSegmentationData请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method string getProjectId() 获取视频拆条项目 Id 。
 * @method void setProjectId(string $ProjectId) 设置视频拆条项目 Id 。
 * @method string getSegmentGroupId() 获取指定需要导出的智能拆条片段的组 Id 。
 * @method void setSegmentGroupId(string $SegmentGroupId) 设置指定需要导出的智能拆条片段的组 Id 。
 * @method array getSegmentIds() 获取指定需要导出的智能拆条片段 Id  集合。
 * @method void setSegmentIds(array $SegmentIds) 设置指定需要导出的智能拆条片段 Id  集合。
 * @method integer getDefinition() 获取导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method void setDefinition(integer $Definition) 设置导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method string getExportDestination() 获取导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
 * @method void setExportDestination(string $ExportDestination) 设置导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
 * @method CMEExportInfo getCMEExportInfo() 获取导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
 * @method void setCMEExportInfo(CMEExportInfo $CMEExportInfo) 设置导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
 * @method VODExportInfo getVODExportInfo() 获取导出的云点播媒资信息。当导出目标为 VOD 时必填。
 * @method void setVODExportInfo(VODExportInfo $VODExportInfo) 设置导出的云点播媒资信息。当导出目标为 VOD 时必填。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作任意智能拆条项目。如果指定操作者，则操作者必须为项目所有。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作任意智能拆条项目。如果指定操作者，则操作者必须为项目所有。
 */
class ExportVideoByVideoSegmentationDataRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var string 视频拆条项目 Id 。
     */
    public $ProjectId;

    /**
     * @var string 指定需要导出的智能拆条片段的组 Id 。
     */
    public $SegmentGroupId;

    /**
     * @var array 指定需要导出的智能拆条片段 Id  集合。
     */
    public $SegmentIds;

    /**
     * @var integer 导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
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
     * @var CMEExportInfo 导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
     */
    public $CMEExportInfo;

    /**
     * @var VODExportInfo 导出的云点播媒资信息。当导出目标为 VOD 时必填。
     */
    public $VODExportInfo;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作任意智能拆条项目。如果指定操作者，则操作者必须为项目所有。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param string $ProjectId 视频拆条项目 Id 。
     * @param string $SegmentGroupId 指定需要导出的智能拆条片段的组 Id 。
     * @param array $SegmentIds 指定需要导出的智能拆条片段 Id  集合。
     * @param integer $Definition 导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     * @param string $ExportDestination 导出目标，指定导出视频的目标媒资库，可取值有：
<li>CME：多媒体创作引擎，即导出为多媒体创作引擎媒资库，此导出目标在云点播媒资库依然可见；</li>
<li>VOD：云点播，即导出为云点播媒资库，此导出目标在多媒体创作引擎媒资库将不可见。</li>
     * @param CMEExportInfo $CMEExportInfo 导出的多媒体创作引擎媒体信息。当导出目标为 CME 时必填。
     * @param VODExportInfo $VODExportInfo 导出的云点播媒资信息。当导出目标为 VOD 时必填。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作任意智能拆条项目。如果指定操作者，则操作者必须为项目所有。
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

        if (array_key_exists("SegmentGroupId",$param) and $param["SegmentGroupId"] !== null) {
            $this->SegmentGroupId = $param["SegmentGroupId"];
        }

        if (array_key_exists("SegmentIds",$param) and $param["SegmentIds"] !== null) {
            $this->SegmentIds = $param["SegmentIds"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExportDestination",$param) and $param["ExportDestination"] !== null) {
            $this->ExportDestination = $param["ExportDestination"];
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
