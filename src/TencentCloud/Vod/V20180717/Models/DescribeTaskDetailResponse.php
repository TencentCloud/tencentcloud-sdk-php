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
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getTaskType() 获取<p>任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务；</li><li>AigcImageTask：AIGC 生图任务；</li><li>SceneAigcImageTask：场景化 AIGC 生图任务；</li><li>AigcVideoTask：AIGC 生视频任务；</li><li>ImportMediaKnowledge：导入媒体知识任务。</li><li>SceneAigcVideoTask：场景化 AIGC 生视频任务；</li><li> ExtractBlindWatermark：提取数字水印任务。</li></p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务；</li><li>AigcImageTask：AIGC 生图任务；</li><li>SceneAigcImageTask：场景化 AIGC 生图任务；</li><li>AigcVideoTask：AIGC 生视频任务；</li><li>ImportMediaKnowledge：导入媒体知识任务。</li><li>SceneAigcVideoTask：场景化 AIGC 生视频任务；</li><li> ExtractBlindWatermark：提取数字水印任务。</li></p>
 * @method string getStatus() 获取<p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成；</li><li>ABORTED：已终止。</li>
 * @method void setStatus(string $Status) 设置<p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成；</li><li>ABORTED：已终止。</li>
 * @method string getCreateTime() 获取<p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getBeginProcessTime() 获取<p>任务开始执行的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置<p>任务开始执行的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getFinishTime() 获取<p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method ProcedureTask getProcedureTask() 获取<p>视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureTask(ProcedureTask $ProcedureTask) 设置<p>视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTask getEditMediaTask() 获取<p>视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditMediaTask(EditMediaTask $EditMediaTask) 设置<p>视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatPublishTask getWechatPublishTask() 获取<p>微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatPublishTask(WechatPublishTask $WechatPublishTask) 设置<p>微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComposeMediaTask getComposeMediaTask() 获取<p>制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComposeMediaTask(ComposeMediaTask $ComposeMediaTask) 设置<p>制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SplitMediaTask getSplitMediaTask() 获取<p>视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitMediaTask(SplitMediaTask $SplitMediaTask) 设置<p>视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishTask() 获取<p>微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatMiniProgramPublishTask(WechatMiniProgramPublishTask $WechatMiniProgramPublishTask) 设置<p>微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PullUploadTask getPullUploadTask() 获取<p>拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullUploadTask(PullUploadTask $PullUploadTask) 设置<p>拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TranscodeTask2017 getTranscodeTask() 获取<p>视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTask(TranscodeTask2017 $TranscodeTask) 设置<p>视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConcatTask2017 getConcatTask() 获取<p>视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcatTask(ConcatTask2017 $ConcatTask) 设置<p>视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClipTask2017 getClipTask() 获取<p>视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClipTask(ClipTask2017 $ClipTask) 设置<p>视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateImageSpriteTask2017 getCreateImageSpriteTask() 获取<p>截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateImageSpriteTask(CreateImageSpriteTask2017 $CreateImageSpriteTask) 设置<p>截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetTask() 获取<p>视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask) 设置<p>视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoveWatermarkTask getRemoveWatermarkTask() 获取<p>智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveWatermarkTask(RemoveWatermarkTask $RemoveWatermarkTask) 设置<p>智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildMediaTask getRebuildMediaTask() 获取<p>音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebuildMediaTask(RebuildMediaTask $RebuildMediaTask) 设置<p>音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkTask() 获取<p>提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractTraceWatermarkTask(ExtractTraceWatermarkTask $ExtractTraceWatermarkTask) 设置<p>提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkTask() 获取<p>提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractCopyRightWatermarkTask(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask) 设置<p>提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReviewAudioVideoTask getReviewAudioVideoTask() 获取<p>音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewAudioVideoTask(ReviewAudioVideoTask $ReviewAudioVideoTask) 设置<p>音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReduceMediaBitrateTask getReduceMediaBitrateTask() 获取<p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReduceMediaBitrateTask(ReduceMediaBitrateTask $ReduceMediaBitrateTask) 设置<p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeFileAttributesTask getDescribeFileAttributesTask() 获取<p>获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribeFileAttributesTask(DescribeFileAttributesTask $DescribeFileAttributesTask) 设置<p>获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityInspectTask getQualityInspectTask() 获取<p>音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityInspectTask(QualityInspectTask $QualityInspectTask) 设置<p>音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityEnhanceTask getQualityEnhanceTask() 获取<p>音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEnhanceTask(QualityEnhanceTask $QualityEnhanceTask) 设置<p>音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingTask() 获取<p>复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexAdaptiveDynamicStreamingTask(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask) 设置<p>复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcessMediaByMPS getProcessMediaByMPSTask() 获取<p>MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。</p>
 * @method void setProcessMediaByMPSTask(ProcessMediaByMPS $ProcessMediaByMPSTask) 设置<p>MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。</p>
 * @method AigcImageTask getAigcImageTask() 获取<p>AIGC 生图任务信息，仅当 TaskType 为 AigcImageTask，该字段有值。</p>
 * @method void setAigcImageTask(AigcImageTask $AigcImageTask) 设置<p>AIGC 生图任务信息，仅当 TaskType 为 AigcImageTask，该字段有值。</p>
 * @method AigcVideoTask getAigcVideoTask() 获取<p>AIGC 生视频任务信息，仅当 TaskType 为 AigcVideoTask，该字段有值。</p>
 * @method void setAigcVideoTask(AigcVideoTask $AigcVideoTask) 设置<p>AIGC 生视频任务信息，仅当 TaskType 为 AigcVideoTask，该字段有值。</p>
 * @method ImportMediaKnowledgeTask getImportMediaKnowledge() 获取<p>媒体导入知识库任务信息，仅当 TaskType 为 ImportMediaKnowledge，该字段有值。</p>
 * @method void setImportMediaKnowledge(ImportMediaKnowledgeTask $ImportMediaKnowledge) 设置<p>媒体导入知识库任务信息，仅当 TaskType 为 ImportMediaKnowledge，该字段有值。</p>
 * @method SceneAigcImageTask getSceneAigcImageTask() 获取<p>场景化 AIGC 生图任务信息，仅当 TaskType 为 SceneAigcImageTask，该字段有值。</p>
 * @method void setSceneAigcImageTask(SceneAigcImageTask $SceneAigcImageTask) 设置<p>场景化 AIGC 生图任务信息，仅当 TaskType 为 SceneAigcImageTask，该字段有值。</p>
 * @method SceneAigcVideoTask getSceneAigcVideoTask() 获取<p>场景化 AIGC 生视频任务信息，仅当 TaskType 为 SceneAigcVideoTask，该字段有值。</p>
 * @method void setSceneAigcVideoTask(SceneAigcVideoTask $SceneAigcVideoTask) 设置<p>场景化 AIGC 生视频任务信息，仅当 TaskType 为 SceneAigcVideoTask，该字段有值。</p>
 * @method ProcessImageAsync getProcessImageAsyncTask() 获取<p>图像异步处理任务信息，仅当 TaskType 为 ProcessImageAsync，该字段有值。</p>
 * @method void setProcessImageAsyncTask(ProcessImageAsync $ProcessImageAsyncTask) 设置<p>图像异步处理任务信息，仅当 TaskType 为 ProcessImageAsync，该字段有值。</p>
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkTask() 获取<p>提取数字水印任务信息，仅当 TaskType 为 ExtractBlindWatermark，该字段有值。</p>
 * @method void setExtractBlindWatermarkTask(ExtractBlindWatermarkTask $ExtractBlindWatermarkTask) 设置<p>提取数字水印任务信息，仅当 TaskType 为 ExtractBlindWatermark，该字段有值。</p>
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementTask() 获取<p>创建自定义主体信息，仅当 TaskType 为 CreateAigcAdvancedCustomElement，该字段有值。</p>
 * @method void setCreateAigcAdvancedCustomElementTask(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementTask) 设置<p>创建自定义主体信息，仅当 TaskType 为 CreateAigcAdvancedCustomElement，该字段有值。</p>
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceTask() 获取<p>创建自定义音色信息，仅当 TaskType 为 CreateAigcCustomVoice，该字段有值。</p>
 * @method void setCreateAigcCustomVoiceTask(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceTask) 设置<p>创建自定义音色信息，仅当 TaskType 为 CreateAigcCustomVoice，该字段有值。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string <p>任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务；</li><li>AigcImageTask：AIGC 生图任务；</li><li>SceneAigcImageTask：场景化 AIGC 生图任务；</li><li>AigcVideoTask：AIGC 生视频任务；</li><li>ImportMediaKnowledge：导入媒体知识任务。</li><li>SceneAigcVideoTask：场景化 AIGC 生视频任务；</li><li> ExtractBlindWatermark：提取数字水印任务。</li></p>
     */
    public $TaskType;

    /**
     * @var string <p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成；</li><li>ABORTED：已终止。</li>
     */
    public $Status;

    /**
     * @var string <p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务开始执行的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $FinishTime;

    /**
     * @var ProcedureTask <p>视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureTask;

    /**
     * @var EditMediaTask <p>视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditMediaTask;

    /**
     * @var WechatPublishTask <p>微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatPublishTask;

    /**
     * @var ComposeMediaTask <p>制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComposeMediaTask;

    /**
     * @var SplitMediaTask <p>视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SplitMediaTask;

    /**
     * @var WechatMiniProgramPublishTask <p>微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatMiniProgramPublishTask;

    /**
     * @var PullUploadTask <p>拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullUploadTask;

    /**
     * @var TranscodeTask2017 <p>视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTask;

    /**
     * @var ConcatTask2017 <p>视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcatTask;

    /**
     * @var ClipTask2017 <p>视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClipTask;

    /**
     * @var CreateImageSpriteTask2017 <p>截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateImageSpriteTask;

    /**
     * @var SnapshotByTimeOffsetTask2017 <p>视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var RemoveWatermarkTask <p>智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveWatermarkTask;

    /**
     * @var RebuildMediaTask <p>音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebuildMediaTask;

    /**
     * @var ExtractTraceWatermarkTask <p>提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractTraceWatermarkTask;

    /**
     * @var ExtractCopyRightWatermarkTask <p>提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractCopyRightWatermarkTask;

    /**
     * @var ReviewAudioVideoTask <p>音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewAudioVideoTask;

    /**
     * @var ReduceMediaBitrateTask <p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReduceMediaBitrateTask;

    /**
     * @var DescribeFileAttributesTask <p>获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescribeFileAttributesTask;

    /**
     * @var QualityInspectTask <p>音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityInspectTask;

    /**
     * @var QualityEnhanceTask <p>音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEnhanceTask;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask <p>复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexAdaptiveDynamicStreamingTask;

    /**
     * @var ProcessMediaByMPS <p>MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。</p>
     */
    public $ProcessMediaByMPSTask;

    /**
     * @var AigcImageTask <p>AIGC 生图任务信息，仅当 TaskType 为 AigcImageTask，该字段有值。</p>
     */
    public $AigcImageTask;

    /**
     * @var AigcVideoTask <p>AIGC 生视频任务信息，仅当 TaskType 为 AigcVideoTask，该字段有值。</p>
     */
    public $AigcVideoTask;

    /**
     * @var ImportMediaKnowledgeTask <p>媒体导入知识库任务信息，仅当 TaskType 为 ImportMediaKnowledge，该字段有值。</p>
     */
    public $ImportMediaKnowledge;

    /**
     * @var SceneAigcImageTask <p>场景化 AIGC 生图任务信息，仅当 TaskType 为 SceneAigcImageTask，该字段有值。</p>
     */
    public $SceneAigcImageTask;

    /**
     * @var SceneAigcVideoTask <p>场景化 AIGC 生视频任务信息，仅当 TaskType 为 SceneAigcVideoTask，该字段有值。</p>
     */
    public $SceneAigcVideoTask;

    /**
     * @var ProcessImageAsync <p>图像异步处理任务信息，仅当 TaskType 为 ProcessImageAsync，该字段有值。</p>
     */
    public $ProcessImageAsyncTask;

    /**
     * @var ExtractBlindWatermarkTask <p>提取数字水印任务信息，仅当 TaskType 为 ExtractBlindWatermark，该字段有值。</p>
     */
    public $ExtractBlindWatermarkTask;

    /**
     * @var CreateAigcAdvancedCustomElementTask <p>创建自定义主体信息，仅当 TaskType 为 CreateAigcAdvancedCustomElement，该字段有值。</p>
     */
    public $CreateAigcAdvancedCustomElementTask;

    /**
     * @var CreateAigcCustomVoiceTask <p>创建自定义音色信息，仅当 TaskType 为 CreateAigcCustomVoice，该字段有值。</p>
     */
    public $CreateAigcCustomVoiceTask;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskType <p>任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务；</li><li>AigcImageTask：AIGC 生图任务；</li><li>SceneAigcImageTask：场景化 AIGC 生图任务；</li><li>AigcVideoTask：AIGC 生视频任务；</li><li>ImportMediaKnowledge：导入媒体知识任务。</li><li>SceneAigcVideoTask：场景化 AIGC 生视频任务；</li><li> ExtractBlindWatermark：提取数字水印任务。</li></p>
     * @param string $Status <p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成；</li><li>ABORTED：已终止。</li>
     * @param string $CreateTime <p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $BeginProcessTime <p>任务开始执行的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $FinishTime <p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param ProcedureTask $ProcedureTask <p>视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTask $EditMediaTask <p>视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatPublishTask $WechatPublishTask <p>微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComposeMediaTask $ComposeMediaTask <p>制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SplitMediaTask $SplitMediaTask <p>视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishTask <p>微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PullUploadTask $PullUploadTask <p>拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TranscodeTask2017 $TranscodeTask <p>视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConcatTask2017 $ConcatTask <p>视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClipTask2017 $ClipTask <p>视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateImageSpriteTask2017 $CreateImageSpriteTask <p>截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask <p>视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoveWatermarkTask $RemoveWatermarkTask <p>智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildMediaTask $RebuildMediaTask <p>音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkTask <p>提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask <p>提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReviewAudioVideoTask $ReviewAudioVideoTask <p>音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateTask <p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeFileAttributesTask $DescribeFileAttributesTask <p>获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityInspectTask $QualityInspectTask <p>音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityEnhanceTask $QualityEnhanceTask <p>音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask <p>复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcessMediaByMPS $ProcessMediaByMPSTask <p>MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。</p>
     * @param AigcImageTask $AigcImageTask <p>AIGC 生图任务信息，仅当 TaskType 为 AigcImageTask，该字段有值。</p>
     * @param AigcVideoTask $AigcVideoTask <p>AIGC 生视频任务信息，仅当 TaskType 为 AigcVideoTask，该字段有值。</p>
     * @param ImportMediaKnowledgeTask $ImportMediaKnowledge <p>媒体导入知识库任务信息，仅当 TaskType 为 ImportMediaKnowledge，该字段有值。</p>
     * @param SceneAigcImageTask $SceneAigcImageTask <p>场景化 AIGC 生图任务信息，仅当 TaskType 为 SceneAigcImageTask，该字段有值。</p>
     * @param SceneAigcVideoTask $SceneAigcVideoTask <p>场景化 AIGC 生视频任务信息，仅当 TaskType 为 SceneAigcVideoTask，该字段有值。</p>
     * @param ProcessImageAsync $ProcessImageAsyncTask <p>图像异步处理任务信息，仅当 TaskType 为 ProcessImageAsync，该字段有值。</p>
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkTask <p>提取数字水印任务信息，仅当 TaskType 为 ExtractBlindWatermark，该字段有值。</p>
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementTask <p>创建自定义主体信息，仅当 TaskType 为 CreateAigcAdvancedCustomElement，该字段有值。</p>
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceTask <p>创建自定义音色信息，仅当 TaskType 为 CreateAigcCustomVoice，该字段有值。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ProcedureTask",$param) and $param["ProcedureTask"] !== null) {
            $this->ProcedureTask = new ProcedureTask();
            $this->ProcedureTask->deserialize($param["ProcedureTask"]);
        }

        if (array_key_exists("EditMediaTask",$param) and $param["EditMediaTask"] !== null) {
            $this->EditMediaTask = new EditMediaTask();
            $this->EditMediaTask->deserialize($param["EditMediaTask"]);
        }

        if (array_key_exists("WechatPublishTask",$param) and $param["WechatPublishTask"] !== null) {
            $this->WechatPublishTask = new WechatPublishTask();
            $this->WechatPublishTask->deserialize($param["WechatPublishTask"]);
        }

        if (array_key_exists("ComposeMediaTask",$param) and $param["ComposeMediaTask"] !== null) {
            $this->ComposeMediaTask = new ComposeMediaTask();
            $this->ComposeMediaTask->deserialize($param["ComposeMediaTask"]);
        }

        if (array_key_exists("SplitMediaTask",$param) and $param["SplitMediaTask"] !== null) {
            $this->SplitMediaTask = new SplitMediaTask();
            $this->SplitMediaTask->deserialize($param["SplitMediaTask"]);
        }

        if (array_key_exists("WechatMiniProgramPublishTask",$param) and $param["WechatMiniProgramPublishTask"] !== null) {
            $this->WechatMiniProgramPublishTask = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishTask->deserialize($param["WechatMiniProgramPublishTask"]);
        }

        if (array_key_exists("PullUploadTask",$param) and $param["PullUploadTask"] !== null) {
            $this->PullUploadTask = new PullUploadTask();
            $this->PullUploadTask->deserialize($param["PullUploadTask"]);
        }

        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new TranscodeTask2017();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("ConcatTask",$param) and $param["ConcatTask"] !== null) {
            $this->ConcatTask = new ConcatTask2017();
            $this->ConcatTask->deserialize($param["ConcatTask"]);
        }

        if (array_key_exists("ClipTask",$param) and $param["ClipTask"] !== null) {
            $this->ClipTask = new ClipTask2017();
            $this->ClipTask->deserialize($param["ClipTask"]);
        }

        if (array_key_exists("CreateImageSpriteTask",$param) and $param["CreateImageSpriteTask"] !== null) {
            $this->CreateImageSpriteTask = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteTask->deserialize($param["CreateImageSpriteTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("RemoveWatermarkTask",$param) and $param["RemoveWatermarkTask"] !== null) {
            $this->RemoveWatermarkTask = new RemoveWatermarkTask();
            $this->RemoveWatermarkTask->deserialize($param["RemoveWatermarkTask"]);
        }

        if (array_key_exists("RebuildMediaTask",$param) and $param["RebuildMediaTask"] !== null) {
            $this->RebuildMediaTask = new RebuildMediaTask();
            $this->RebuildMediaTask->deserialize($param["RebuildMediaTask"]);
        }

        if (array_key_exists("ExtractTraceWatermarkTask",$param) and $param["ExtractTraceWatermarkTask"] !== null) {
            $this->ExtractTraceWatermarkTask = new ExtractTraceWatermarkTask();
            $this->ExtractTraceWatermarkTask->deserialize($param["ExtractTraceWatermarkTask"]);
        }

        if (array_key_exists("ExtractCopyRightWatermarkTask",$param) and $param["ExtractCopyRightWatermarkTask"] !== null) {
            $this->ExtractCopyRightWatermarkTask = new ExtractCopyRightWatermarkTask();
            $this->ExtractCopyRightWatermarkTask->deserialize($param["ExtractCopyRightWatermarkTask"]);
        }

        if (array_key_exists("ReviewAudioVideoTask",$param) and $param["ReviewAudioVideoTask"] !== null) {
            $this->ReviewAudioVideoTask = new ReviewAudioVideoTask();
            $this->ReviewAudioVideoTask->deserialize($param["ReviewAudioVideoTask"]);
        }

        if (array_key_exists("ReduceMediaBitrateTask",$param) and $param["ReduceMediaBitrateTask"] !== null) {
            $this->ReduceMediaBitrateTask = new ReduceMediaBitrateTask();
            $this->ReduceMediaBitrateTask->deserialize($param["ReduceMediaBitrateTask"]);
        }

        if (array_key_exists("DescribeFileAttributesTask",$param) and $param["DescribeFileAttributesTask"] !== null) {
            $this->DescribeFileAttributesTask = new DescribeFileAttributesTask();
            $this->DescribeFileAttributesTask->deserialize($param["DescribeFileAttributesTask"]);
        }

        if (array_key_exists("QualityInspectTask",$param) and $param["QualityInspectTask"] !== null) {
            $this->QualityInspectTask = new QualityInspectTask();
            $this->QualityInspectTask->deserialize($param["QualityInspectTask"]);
        }

        if (array_key_exists("QualityEnhanceTask",$param) and $param["QualityEnhanceTask"] !== null) {
            $this->QualityEnhanceTask = new QualityEnhanceTask();
            $this->QualityEnhanceTask->deserialize($param["QualityEnhanceTask"]);
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingTask",$param) and $param["ComplexAdaptiveDynamicStreamingTask"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingTask = new ComplexAdaptiveDynamicStreamingTask();
            $this->ComplexAdaptiveDynamicStreamingTask->deserialize($param["ComplexAdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("ProcessMediaByMPSTask",$param) and $param["ProcessMediaByMPSTask"] !== null) {
            $this->ProcessMediaByMPSTask = new ProcessMediaByMPS();
            $this->ProcessMediaByMPSTask->deserialize($param["ProcessMediaByMPSTask"]);
        }

        if (array_key_exists("AigcImageTask",$param) and $param["AigcImageTask"] !== null) {
            $this->AigcImageTask = new AigcImageTask();
            $this->AigcImageTask->deserialize($param["AigcImageTask"]);
        }

        if (array_key_exists("AigcVideoTask",$param) and $param["AigcVideoTask"] !== null) {
            $this->AigcVideoTask = new AigcVideoTask();
            $this->AigcVideoTask->deserialize($param["AigcVideoTask"]);
        }

        if (array_key_exists("ImportMediaKnowledge",$param) and $param["ImportMediaKnowledge"] !== null) {
            $this->ImportMediaKnowledge = new ImportMediaKnowledgeTask();
            $this->ImportMediaKnowledge->deserialize($param["ImportMediaKnowledge"]);
        }

        if (array_key_exists("SceneAigcImageTask",$param) and $param["SceneAigcImageTask"] !== null) {
            $this->SceneAigcImageTask = new SceneAigcImageTask();
            $this->SceneAigcImageTask->deserialize($param["SceneAigcImageTask"]);
        }

        if (array_key_exists("SceneAigcVideoTask",$param) and $param["SceneAigcVideoTask"] !== null) {
            $this->SceneAigcVideoTask = new SceneAigcVideoTask();
            $this->SceneAigcVideoTask->deserialize($param["SceneAigcVideoTask"]);
        }

        if (array_key_exists("ProcessImageAsyncTask",$param) and $param["ProcessImageAsyncTask"] !== null) {
            $this->ProcessImageAsyncTask = new ProcessImageAsync();
            $this->ProcessImageAsyncTask->deserialize($param["ProcessImageAsyncTask"]);
        }

        if (array_key_exists("ExtractBlindWatermarkTask",$param) and $param["ExtractBlindWatermarkTask"] !== null) {
            $this->ExtractBlindWatermarkTask = new ExtractBlindWatermarkTask();
            $this->ExtractBlindWatermarkTask->deserialize($param["ExtractBlindWatermarkTask"]);
        }

        if (array_key_exists("CreateAigcAdvancedCustomElementTask",$param) and $param["CreateAigcAdvancedCustomElementTask"] !== null) {
            $this->CreateAigcAdvancedCustomElementTask = new CreateAigcAdvancedCustomElementTask();
            $this->CreateAigcAdvancedCustomElementTask->deserialize($param["CreateAigcAdvancedCustomElementTask"]);
        }

        if (array_key_exists("CreateAigcCustomVoiceTask",$param) and $param["CreateAigcCustomVoiceTask"] !== null) {
            $this->CreateAigcCustomVoiceTask = new CreateAigcCustomVoiceTask();
            $this->CreateAigcCustomVoiceTask->deserialize($param["CreateAigcCustomVoiceTask"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
