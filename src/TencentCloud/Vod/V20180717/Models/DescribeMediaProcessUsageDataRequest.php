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
 * DescribeMediaProcessUsageData请求参数结构体
 *
 * @method string getStartTime() 获取起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartTime(string $StartTime) 设置起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getEndTime() 获取结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setEndTime(string $EndTime) 设置结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getType() 获取查询视频处理任务类型，目前支持的任务类型包括：
<li> Transcoding: 普通转码</li>
<li> Transcoding-TESHD: 极速高清转码</li>
<li> Editing: 视频编辑</li>
<li> Editing-TESHD: 极速高清视频编辑</li>
<li> AdaptiveBitrateStreaming: 自适应码流</li>
<li> ContentAudit: 内容审核</li>
<li> ContentRecognition: 内容识别</li>
<li> RemoveWatermark: 去除水印</li>
<li> ExtractTraceWatermark: 提取水印</li>
<li> AddTraceWatermark: 添加水印</li>
<li> RebuildMedia: 音画质重生</li>
<li> QualityInspect: 音画质检测</li>
<li> VideoHighlight: 视频智能集锦</li>
<li> VideoTag: 视频智能标签</li>
<li> VideoClassification:  视频智能分类</li>
<li> VideoCover: 视频智能封面</li>
<li> VideoSegment: 视频智能拆条</li>
<li> VideoProduce: 视频制作</li>
<li> MediaCast: 媒体转推</li>
<li>Transcode: 转码，包含普通转码、极速高清和视频编辑（不推荐使用）</li>
<li>VoiceTranslation: 语音翻译</li>
<li>JITTranscoding: 即时转码</li>
<li>VideoSnapshot: 视频截图</li>
 * @method void setType(string $Type) 设置查询视频处理任务类型，目前支持的任务类型包括：
<li> Transcoding: 普通转码</li>
<li> Transcoding-TESHD: 极速高清转码</li>
<li> Editing: 视频编辑</li>
<li> Editing-TESHD: 极速高清视频编辑</li>
<li> AdaptiveBitrateStreaming: 自适应码流</li>
<li> ContentAudit: 内容审核</li>
<li> ContentRecognition: 内容识别</li>
<li> RemoveWatermark: 去除水印</li>
<li> ExtractTraceWatermark: 提取水印</li>
<li> AddTraceWatermark: 添加水印</li>
<li> RebuildMedia: 音画质重生</li>
<li> QualityInspect: 音画质检测</li>
<li> VideoHighlight: 视频智能集锦</li>
<li> VideoTag: 视频智能标签</li>
<li> VideoClassification:  视频智能分类</li>
<li> VideoCover: 视频智能封面</li>
<li> VideoSegment: 视频智能拆条</li>
<li> VideoProduce: 视频制作</li>
<li> MediaCast: 媒体转推</li>
<li>Transcode: 转码，包含普通转码、极速高清和视频编辑（不推荐使用）</li>
<li>VoiceTranslation: 语音翻译</li>
<li>JITTranscoding: 即时转码</li>
<li>VideoSnapshot: 视频截图</li>
 */
class DescribeMediaProcessUsageDataRequest extends AbstractModel
{
    /**
     * @var string 起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartTime;

    /**
     * @var string 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $EndTime;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 查询视频处理任务类型，目前支持的任务类型包括：
<li> Transcoding: 普通转码</li>
<li> Transcoding-TESHD: 极速高清转码</li>
<li> Editing: 视频编辑</li>
<li> Editing-TESHD: 极速高清视频编辑</li>
<li> AdaptiveBitrateStreaming: 自适应码流</li>
<li> ContentAudit: 内容审核</li>
<li> ContentRecognition: 内容识别</li>
<li> RemoveWatermark: 去除水印</li>
<li> ExtractTraceWatermark: 提取水印</li>
<li> AddTraceWatermark: 添加水印</li>
<li> RebuildMedia: 音画质重生</li>
<li> QualityInspect: 音画质检测</li>
<li> VideoHighlight: 视频智能集锦</li>
<li> VideoTag: 视频智能标签</li>
<li> VideoClassification:  视频智能分类</li>
<li> VideoCover: 视频智能封面</li>
<li> VideoSegment: 视频智能拆条</li>
<li> VideoProduce: 视频制作</li>
<li> MediaCast: 媒体转推</li>
<li>Transcode: 转码，包含普通转码、极速高清和视频编辑（不推荐使用）</li>
<li>VoiceTranslation: 语音翻译</li>
<li>JITTranscoding: 即时转码</li>
<li>VideoSnapshot: 视频截图</li>
     */
    public $Type;

    /**
     * @param string $StartTime 起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $EndTime 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Type 查询视频处理任务类型，目前支持的任务类型包括：
<li> Transcoding: 普通转码</li>
<li> Transcoding-TESHD: 极速高清转码</li>
<li> Editing: 视频编辑</li>
<li> Editing-TESHD: 极速高清视频编辑</li>
<li> AdaptiveBitrateStreaming: 自适应码流</li>
<li> ContentAudit: 内容审核</li>
<li> ContentRecognition: 内容识别</li>
<li> RemoveWatermark: 去除水印</li>
<li> ExtractTraceWatermark: 提取水印</li>
<li> AddTraceWatermark: 添加水印</li>
<li> RebuildMedia: 音画质重生</li>
<li> QualityInspect: 音画质检测</li>
<li> VideoHighlight: 视频智能集锦</li>
<li> VideoTag: 视频智能标签</li>
<li> VideoClassification:  视频智能分类</li>
<li> VideoCover: 视频智能封面</li>
<li> VideoSegment: 视频智能拆条</li>
<li> VideoProduce: 视频制作</li>
<li> MediaCast: 媒体转推</li>
<li>Transcode: 转码，包含普通转码、极速高清和视频编辑（不推荐使用）</li>
<li>VoiceTranslation: 语音翻译</li>
<li>JITTranscoding: 即时转码</li>
<li>VideoSnapshot: 视频截图</li>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
