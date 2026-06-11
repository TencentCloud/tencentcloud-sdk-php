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
 * 事件通知内容，其中，TranscodeCompleteEvent、ConcatCompleteEvent、ClipCompleteEvent、CreateImageSpriteCompleteEvent、SnapshotByTimeOffsetCompleteEvent 为兼容 2017 版接口发起任务的事件通知。
 *
 * @method string getEventHandle() 获取<p>事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。</p>
 * @method void setEventHandle(string $EventHandle) 设置<p>事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。</p>
 * @method string getEventType() 获取<p><b>支持事件类型：</b></p><li>NewFileUpload：视频上传完成；</li><li>ProcedureStateChanged：任务流状态变更；</li><li>FileDeleted：视频删除完成；</li><li>RestoreMediaComplete：视频取回完成；</li><li>PullComplete：视频转拉完成；</li><li>EditMediaComplete：视频编辑完成；</li><li>SplitMediaComplete：视频拆分完成；</li><li>ComposeMediaComplete：制作媒体文件完成；</li><li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li><li>RemoveWatermark：智能去除水印完成。</li><li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li><li>ReviewAudioVideoComplete：音视频审核完成；</li><li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li><li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li><li>DescribeFileAttributesComplete：获取文件属性完成；</li><li>QualityInspectComplete：音画质检测完成；</li><li>QualityEnhanceComplete：音画质重生任务完成；</li><li>PersistenceComplete：剪辑固化完成；</li><li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li><li>ProcessMediaByMPSComplete：MPS视频处理完成。</li><li>AigcImageTaskComplete：AIGC 生图任务完成。</li><li>AigcVideoTaskComplete：AIGC 生视频任务完成。</li><li>DescribeAigcFaceInfoAsyncComplete：异步获取 AIGC 人脸信息任务完成。</li><b>兼容 2017 版的事件类型：</b><li>TranscodeComplete：视频转码完成；</li><li>ConcatComplete：视频拼接完成；</li><li>ClipComplete：视频剪辑完成；</li><li>CreateImageSpriteComplete：视频截取雪碧图完成；</li><li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
 * @method void setEventType(string $EventType) 设置<p><b>支持事件类型：</b></p><li>NewFileUpload：视频上传完成；</li><li>ProcedureStateChanged：任务流状态变更；</li><li>FileDeleted：视频删除完成；</li><li>RestoreMediaComplete：视频取回完成；</li><li>PullComplete：视频转拉完成；</li><li>EditMediaComplete：视频编辑完成；</li><li>SplitMediaComplete：视频拆分完成；</li><li>ComposeMediaComplete：制作媒体文件完成；</li><li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li><li>RemoveWatermark：智能去除水印完成。</li><li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li><li>ReviewAudioVideoComplete：音视频审核完成；</li><li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li><li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li><li>DescribeFileAttributesComplete：获取文件属性完成；</li><li>QualityInspectComplete：音画质检测完成；</li><li>QualityEnhanceComplete：音画质重生任务完成；</li><li>PersistenceComplete：剪辑固化完成；</li><li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li><li>ProcessMediaByMPSComplete：MPS视频处理完成。</li><li>AigcImageTaskComplete：AIGC 生图任务完成。</li><li>AigcVideoTaskComplete：AIGC 生视频任务完成。</li><li>DescribeAigcFaceInfoAsyncComplete：异步获取 AIGC 人脸信息任务完成。</li><b>兼容 2017 版的事件类型：</b><li>TranscodeComplete：视频转码完成；</li><li>ConcatComplete：视频拼接完成；</li><li>ClipComplete：视频剪辑完成；</li><li>CreateImageSpriteComplete：视频截取雪碧图完成；</li><li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
 * @method FileUploadTask getFileUploadEvent() 获取<p>视频上传完成事件，当事件类型为 NewFileUpload 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) 设置<p>视频上传完成事件，当事件类型为 NewFileUpload 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcedureTask getProcedureStateChangeEvent() 获取<p>任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) 设置<p>任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileDeleteTask getFileDeleteEvent() 获取<p>文件删除事件，当事件类型为 FileDeleted 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) 设置<p>文件删除事件，当事件类型为 FileDeleted 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PullUploadTask getPullCompleteEvent() 获取<p>视频转拉完成事件，当事件类型为 PullComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) 设置<p>视频转拉完成事件，当事件类型为 PullComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTask getEditMediaCompleteEvent() 获取<p>视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) 设置<p>视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SplitMediaTask getSplitMediaCompleteEvent() 获取<p>视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) 设置<p>视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComposeMediaTask getComposeMediaCompleteEvent() 获取<p>制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) 设置<p>制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClipTask2017 getClipCompleteEvent() 获取<p>视频剪辑完成事件，当事件类型为 ClipComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) 设置<p>视频剪辑完成事件，当事件类型为 ClipComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TranscodeTask2017 getTranscodeCompleteEvent() 获取<p>视频转码完成事件，当事件类型为 TranscodeComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) 设置<p>视频转码完成事件，当事件类型为 TranscodeComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() 获取<p>视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) 设置<p>视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConcatTask2017 getConcatCompleteEvent() 获取<p>视频拼接完成事件，当事件类型为 ConcatComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) 设置<p>视频拼接完成事件，当事件类型为 ConcatComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() 获取<p>视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) 设置<p>视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatPublishTask getWechatPublishCompleteEvent() 获取<p>微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) 设置<p>微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() 获取<p>微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) 设置<p>微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() 获取<p>智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) 设置<p>智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() 获取<p>视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) 设置<p>视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() 获取<p>音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) 设置<p>音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() 获取<p>溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) 设置<p>溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() 获取<p>版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) 设置<p>版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() 获取<p>音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) 设置<p>音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() 获取<p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) 设置<p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() 获取<p>获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) 设置<p>获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityInspectTask getQualityInspectCompleteEvent() 获取<p>音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) 设置<p>音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() 获取<p>音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) 设置<p>音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaCastEvent getMediaCastStatusChangedEvent() 获取<p>媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) 设置<p>媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() 获取<p>剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) 设置<p>剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() 获取<p>自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) 设置<p>自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcessMediaByMPS getProcessMediaByMPSCompleteEvent() 获取<p>MPS 视频处理任务信息，仅当 EventType 为 ProcessMediaByMPSComplete 时有效。</p>
 * @method void setProcessMediaByMPSCompleteEvent(ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent) 设置<p>MPS 视频处理任务信息，仅当 EventType 为 ProcessMediaByMPSComplete 时有效。</p>
 * @method AigcImageTask getAigcImageCompleteEvent() 获取<p>AIGC 生图任务信息，仅当 EventType 为 AigcImageTaskComplete 时有效。</p>
 * @method void setAigcImageCompleteEvent(AigcImageTask $AigcImageCompleteEvent) 设置<p>AIGC 生图任务信息，仅当 EventType 为 AigcImageTaskComplete 时有效。</p>
 * @method AigcVideoTask getAigcVideoCompleteEvent() 获取<p>AIGC 生视频任务信息，仅当 EventType 为 AigcVideoTaskComplete 时有效。</p>
 * @method void setAigcVideoCompleteEvent(AigcVideoTask $AigcVideoCompleteEvent) 设置<p>AIGC 生视频任务信息，仅当 EventType 为 AigcVideoTaskComplete 时有效。</p>
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkComplete() 获取<p>提取数字水印信息，仅当 EventType 为 ExtractBlindWatermarkComplete 时有效。</p>
 * @method void setExtractBlindWatermarkComplete(ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete) 设置<p>提取数字水印信息，仅当 EventType 为 ExtractBlindWatermarkComplete 时有效。</p>
 * @method SceneAigcImageTask getSceneAigcImageCompleteEvent() 获取<p>AIGC 场景化生图任务信息，仅当 EventType 为 SceneAigcImageCompleteEvent 时有效。</p>
 * @method void setSceneAigcImageCompleteEvent(SceneAigcImageTask $SceneAigcImageCompleteEvent) 设置<p>AIGC 场景化生图任务信息，仅当 EventType 为 SceneAigcImageCompleteEvent 时有效。</p>
 * @method ProcessImageAsyncTask getProcessImageAsyncCompleteEvent() 获取<p>图片异步处理任务信息，仅当 EventType 为 ProcessImageAsyncCompleteEvent 时有效。</p>
 * @method void setProcessImageAsyncCompleteEvent(ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent) 设置<p>图片异步处理任务信息，仅当 EventType 为 ProcessImageAsyncCompleteEvent 时有效。</p>
 * @method CreateAigcAdvancedCustomElementTask getCreateAigcAdvancedCustomElementCompleteEvent() 获取<p>AIGC 自定义主体信息，仅当 EventType 为 CreateAigcAdvancedCustomElementCompleteEvent，该字段有值。</p>
 * @method void setCreateAigcAdvancedCustomElementCompleteEvent(CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent) 设置<p>AIGC 自定义主体信息，仅当 EventType 为 CreateAigcAdvancedCustomElementCompleteEvent，该字段有值。</p>
 * @method CreateAigcCustomVoiceTask getCreateAigcCustomVoiceCompleteEvent() 获取<p>AIGC 自定义音色信息，仅当 EventType 为 CreateAigcCustomVoiceCompleteEvent，该字段有值。</p>
 * @method void setCreateAigcCustomVoiceCompleteEvent(CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent) 设置<p>AIGC 自定义音色信息，仅当 EventType 为 CreateAigcCustomVoiceCompleteEvent，该字段有值。</p>
 * @method DescribeAigcFaceInfoAsyncTask getDescribeAigcFaceInfoAsyncCompleteEvent() 获取<p>异步获取 AIGC 人脸信息，仅当 EventType 为 DescribeAigcFaceInfoAsyncComplete，该字段有值。</p>
 * @method void setDescribeAigcFaceInfoAsyncCompleteEvent(DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent) 设置<p>异步获取 AIGC 人脸信息，仅当 EventType 为 DescribeAigcFaceInfoAsyncComplete，该字段有值。</p>
 */
class EventContent extends AbstractModel
{
    /**
     * @var string <p>事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。</p>
     */
    public $EventHandle;

    /**
     * @var string <p><b>支持事件类型：</b></p><li>NewFileUpload：视频上传完成；</li><li>ProcedureStateChanged：任务流状态变更；</li><li>FileDeleted：视频删除完成；</li><li>RestoreMediaComplete：视频取回完成；</li><li>PullComplete：视频转拉完成；</li><li>EditMediaComplete：视频编辑完成；</li><li>SplitMediaComplete：视频拆分完成；</li><li>ComposeMediaComplete：制作媒体文件完成；</li><li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li><li>RemoveWatermark：智能去除水印完成。</li><li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li><li>ReviewAudioVideoComplete：音视频审核完成；</li><li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li><li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li><li>DescribeFileAttributesComplete：获取文件属性完成；</li><li>QualityInspectComplete：音画质检测完成；</li><li>QualityEnhanceComplete：音画质重生任务完成；</li><li>PersistenceComplete：剪辑固化完成；</li><li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li><li>ProcessMediaByMPSComplete：MPS视频处理完成。</li><li>AigcImageTaskComplete：AIGC 生图任务完成。</li><li>AigcVideoTaskComplete：AIGC 生视频任务完成。</li><li>DescribeAigcFaceInfoAsyncComplete：异步获取 AIGC 人脸信息任务完成。</li><b>兼容 2017 版的事件类型：</b><li>TranscodeComplete：视频转码完成；</li><li>ConcatComplete：视频拼接完成；</li><li>ClipComplete：视频剪辑完成；</li><li>CreateImageSpriteComplete：视频截取雪碧图完成；</li><li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask <p>视频上传完成事件，当事件类型为 NewFileUpload 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask <p>任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask <p>文件删除事件，当事件类型为 FileDeleted 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask <p>视频转拉完成事件，当事件类型为 PullComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask <p>视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask <p>视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask <p>制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 <p>视频剪辑完成事件，当事件类型为 ClipComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 <p>视频转码完成事件，当事件类型为 TranscodeComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 <p>视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 <p>视频拼接完成事件，当事件类型为 ConcatComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 <p>视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask <p>微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask <p>微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask <p>智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask <p>视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask <p>音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask <p>溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask <p>版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask <p>音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask <p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask <p>获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask <p>音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityInspectCompleteEvent;

    /**
     * @var QualityEnhanceTask <p>音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent <p>媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask <p>剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask <p>自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexAdaptiveDynamicStreamingCompleteEvent;

    /**
     * @var ProcessMediaByMPS <p>MPS 视频处理任务信息，仅当 EventType 为 ProcessMediaByMPSComplete 时有效。</p>
     */
    public $ProcessMediaByMPSCompleteEvent;

    /**
     * @var AigcImageTask <p>AIGC 生图任务信息，仅当 EventType 为 AigcImageTaskComplete 时有效。</p>
     */
    public $AigcImageCompleteEvent;

    /**
     * @var AigcVideoTask <p>AIGC 生视频任务信息，仅当 EventType 为 AigcVideoTaskComplete 时有效。</p>
     */
    public $AigcVideoCompleteEvent;

    /**
     * @var ExtractBlindWatermarkTask <p>提取数字水印信息，仅当 EventType 为 ExtractBlindWatermarkComplete 时有效。</p>
     */
    public $ExtractBlindWatermarkComplete;

    /**
     * @var SceneAigcImageTask <p>AIGC 场景化生图任务信息，仅当 EventType 为 SceneAigcImageCompleteEvent 时有效。</p>
     */
    public $SceneAigcImageCompleteEvent;

    /**
     * @var ProcessImageAsyncTask <p>图片异步处理任务信息，仅当 EventType 为 ProcessImageAsyncCompleteEvent 时有效。</p>
     */
    public $ProcessImageAsyncCompleteEvent;

    /**
     * @var CreateAigcAdvancedCustomElementTask <p>AIGC 自定义主体信息，仅当 EventType 为 CreateAigcAdvancedCustomElementCompleteEvent，该字段有值。</p>
     */
    public $CreateAigcAdvancedCustomElementCompleteEvent;

    /**
     * @var CreateAigcCustomVoiceTask <p>AIGC 自定义音色信息，仅当 EventType 为 CreateAigcCustomVoiceCompleteEvent，该字段有值。</p>
     */
    public $CreateAigcCustomVoiceCompleteEvent;

    /**
     * @var DescribeAigcFaceInfoAsyncTask <p>异步获取 AIGC 人脸信息，仅当 EventType 为 DescribeAigcFaceInfoAsyncComplete，该字段有值。</p>
     */
    public $DescribeAigcFaceInfoAsyncCompleteEvent;

    /**
     * @param string $EventHandle <p>事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。</p>
     * @param string $EventType <p><b>支持事件类型：</b></p><li>NewFileUpload：视频上传完成；</li><li>ProcedureStateChanged：任务流状态变更；</li><li>FileDeleted：视频删除完成；</li><li>RestoreMediaComplete：视频取回完成；</li><li>PullComplete：视频转拉完成；</li><li>EditMediaComplete：视频编辑完成；</li><li>SplitMediaComplete：视频拆分完成；</li><li>ComposeMediaComplete：制作媒体文件完成；</li><li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li><li>RemoveWatermark：智能去除水印完成。</li><li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li><li>ReviewAudioVideoComplete：音视频审核完成；</li><li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li><li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li><li>DescribeFileAttributesComplete：获取文件属性完成；</li><li>QualityInspectComplete：音画质检测完成；</li><li>QualityEnhanceComplete：音画质重生任务完成；</li><li>PersistenceComplete：剪辑固化完成；</li><li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li><li>ProcessMediaByMPSComplete：MPS视频处理完成。</li><li>AigcImageTaskComplete：AIGC 生图任务完成。</li><li>AigcVideoTaskComplete：AIGC 生视频任务完成。</li><li>DescribeAigcFaceInfoAsyncComplete：异步获取 AIGC 人脸信息任务完成。</li><b>兼容 2017 版的事件类型：</b><li>TranscodeComplete：视频转码完成；</li><li>ConcatComplete：视频拼接完成；</li><li>ClipComplete：视频剪辑完成；</li><li>CreateImageSpriteComplete：视频截取雪碧图完成；</li><li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
     * @param FileUploadTask $FileUploadEvent <p>视频上传完成事件，当事件类型为 NewFileUpload 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcedureTask $ProcedureStateChangeEvent <p>任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileDeleteTask $FileDeleteEvent <p>文件删除事件，当事件类型为 FileDeleted 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PullUploadTask $PullCompleteEvent <p>视频转拉完成事件，当事件类型为 PullComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTask $EditMediaCompleteEvent <p>视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SplitMediaTask $SplitMediaCompleteEvent <p>视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComposeMediaTask $ComposeMediaCompleteEvent <p>制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClipTask2017 $ClipCompleteEvent <p>视频剪辑完成事件，当事件类型为 ClipComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TranscodeTask2017 $TranscodeCompleteEvent <p>视频转码完成事件，当事件类型为 TranscodeComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent <p>视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConcatTask2017 $ConcatCompleteEvent <p>视频拼接完成事件，当事件类型为 ConcatComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent <p>视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatPublishTask $WechatPublishCompleteEvent <p>微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent <p>微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent <p>智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RestoreMediaTask $RestoreMediaCompleteEvent <p>视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildMediaTask $RebuildMediaCompleteEvent <p>音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent <p>溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent <p>版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent <p>音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent <p>该字段已无效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent <p>获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityInspectTask $QualityInspectCompleteEvent <p>音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent <p>音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaCastEvent $MediaCastStatusChangedEvent <p>媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PersistenceCompleteTask $PersistenceCompleteEvent <p>剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent <p>自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcessMediaByMPS $ProcessMediaByMPSCompleteEvent <p>MPS 视频处理任务信息，仅当 EventType 为 ProcessMediaByMPSComplete 时有效。</p>
     * @param AigcImageTask $AigcImageCompleteEvent <p>AIGC 生图任务信息，仅当 EventType 为 AigcImageTaskComplete 时有效。</p>
     * @param AigcVideoTask $AigcVideoCompleteEvent <p>AIGC 生视频任务信息，仅当 EventType 为 AigcVideoTaskComplete 时有效。</p>
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkComplete <p>提取数字水印信息，仅当 EventType 为 ExtractBlindWatermarkComplete 时有效。</p>
     * @param SceneAigcImageTask $SceneAigcImageCompleteEvent <p>AIGC 场景化生图任务信息，仅当 EventType 为 SceneAigcImageCompleteEvent 时有效。</p>
     * @param ProcessImageAsyncTask $ProcessImageAsyncCompleteEvent <p>图片异步处理任务信息，仅当 EventType 为 ProcessImageAsyncCompleteEvent 时有效。</p>
     * @param CreateAigcAdvancedCustomElementTask $CreateAigcAdvancedCustomElementCompleteEvent <p>AIGC 自定义主体信息，仅当 EventType 为 CreateAigcAdvancedCustomElementCompleteEvent，该字段有值。</p>
     * @param CreateAigcCustomVoiceTask $CreateAigcCustomVoiceCompleteEvent <p>AIGC 自定义音色信息，仅当 EventType 为 CreateAigcCustomVoiceCompleteEvent，该字段有值。</p>
     * @param DescribeAigcFaceInfoAsyncTask $DescribeAigcFaceInfoAsyncCompleteEvent <p>异步获取 AIGC 人脸信息，仅当 EventType 为 DescribeAigcFaceInfoAsyncComplete，该字段有值。</p>
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
        if (array_key_exists("EventHandle",$param) and $param["EventHandle"] !== null) {
            $this->EventHandle = $param["EventHandle"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("FileUploadEvent",$param) and $param["FileUploadEvent"] !== null) {
            $this->FileUploadEvent = new FileUploadTask();
            $this->FileUploadEvent->deserialize($param["FileUploadEvent"]);
        }

        if (array_key_exists("ProcedureStateChangeEvent",$param) and $param["ProcedureStateChangeEvent"] !== null) {
            $this->ProcedureStateChangeEvent = new ProcedureTask();
            $this->ProcedureStateChangeEvent->deserialize($param["ProcedureStateChangeEvent"]);
        }

        if (array_key_exists("FileDeleteEvent",$param) and $param["FileDeleteEvent"] !== null) {
            $this->FileDeleteEvent = new FileDeleteTask();
            $this->FileDeleteEvent->deserialize($param["FileDeleteEvent"]);
        }

        if (array_key_exists("PullCompleteEvent",$param) and $param["PullCompleteEvent"] !== null) {
            $this->PullCompleteEvent = new PullUploadTask();
            $this->PullCompleteEvent->deserialize($param["PullCompleteEvent"]);
        }

        if (array_key_exists("EditMediaCompleteEvent",$param) and $param["EditMediaCompleteEvent"] !== null) {
            $this->EditMediaCompleteEvent = new EditMediaTask();
            $this->EditMediaCompleteEvent->deserialize($param["EditMediaCompleteEvent"]);
        }

        if (array_key_exists("SplitMediaCompleteEvent",$param) and $param["SplitMediaCompleteEvent"] !== null) {
            $this->SplitMediaCompleteEvent = new SplitMediaTask();
            $this->SplitMediaCompleteEvent->deserialize($param["SplitMediaCompleteEvent"]);
        }

        if (array_key_exists("ComposeMediaCompleteEvent",$param) and $param["ComposeMediaCompleteEvent"] !== null) {
            $this->ComposeMediaCompleteEvent = new ComposeMediaTask();
            $this->ComposeMediaCompleteEvent->deserialize($param["ComposeMediaCompleteEvent"]);
        }

        if (array_key_exists("ClipCompleteEvent",$param) and $param["ClipCompleteEvent"] !== null) {
            $this->ClipCompleteEvent = new ClipTask2017();
            $this->ClipCompleteEvent->deserialize($param["ClipCompleteEvent"]);
        }

        if (array_key_exists("TranscodeCompleteEvent",$param) and $param["TranscodeCompleteEvent"] !== null) {
            $this->TranscodeCompleteEvent = new TranscodeTask2017();
            $this->TranscodeCompleteEvent->deserialize($param["TranscodeCompleteEvent"]);
        }

        if (array_key_exists("CreateImageSpriteCompleteEvent",$param) and $param["CreateImageSpriteCompleteEvent"] !== null) {
            $this->CreateImageSpriteCompleteEvent = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteCompleteEvent->deserialize($param["CreateImageSpriteCompleteEvent"]);
        }

        if (array_key_exists("ConcatCompleteEvent",$param) and $param["ConcatCompleteEvent"] !== null) {
            $this->ConcatCompleteEvent = new ConcatTask2017();
            $this->ConcatCompleteEvent->deserialize($param["ConcatCompleteEvent"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetCompleteEvent",$param) and $param["SnapshotByTimeOffsetCompleteEvent"] !== null) {
            $this->SnapshotByTimeOffsetCompleteEvent = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetCompleteEvent->deserialize($param["SnapshotByTimeOffsetCompleteEvent"]);
        }

        if (array_key_exists("WechatPublishCompleteEvent",$param) and $param["WechatPublishCompleteEvent"] !== null) {
            $this->WechatPublishCompleteEvent = new WechatPublishTask();
            $this->WechatPublishCompleteEvent->deserialize($param["WechatPublishCompleteEvent"]);
        }

        if (array_key_exists("WechatMiniProgramPublishCompleteEvent",$param) and $param["WechatMiniProgramPublishCompleteEvent"] !== null) {
            $this->WechatMiniProgramPublishCompleteEvent = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishCompleteEvent->deserialize($param["WechatMiniProgramPublishCompleteEvent"]);
        }

        if (array_key_exists("RemoveWatermarkCompleteEvent",$param) and $param["RemoveWatermarkCompleteEvent"] !== null) {
            $this->RemoveWatermarkCompleteEvent = new RemoveWatermarkTask();
            $this->RemoveWatermarkCompleteEvent->deserialize($param["RemoveWatermarkCompleteEvent"]);
        }

        if (array_key_exists("RestoreMediaCompleteEvent",$param) and $param["RestoreMediaCompleteEvent"] !== null) {
            $this->RestoreMediaCompleteEvent = new RestoreMediaTask();
            $this->RestoreMediaCompleteEvent->deserialize($param["RestoreMediaCompleteEvent"]);
        }

        if (array_key_exists("RebuildMediaCompleteEvent",$param) and $param["RebuildMediaCompleteEvent"] !== null) {
            $this->RebuildMediaCompleteEvent = new RebuildMediaTask();
            $this->RebuildMediaCompleteEvent->deserialize($param["RebuildMediaCompleteEvent"]);
        }

        if (array_key_exists("ExtractTraceWatermarkCompleteEvent",$param) and $param["ExtractTraceWatermarkCompleteEvent"] !== null) {
            $this->ExtractTraceWatermarkCompleteEvent = new ExtractTraceWatermarkTask();
            $this->ExtractTraceWatermarkCompleteEvent->deserialize($param["ExtractTraceWatermarkCompleteEvent"]);
        }

        if (array_key_exists("ExtractCopyRightWatermarkCompleteEvent",$param) and $param["ExtractCopyRightWatermarkCompleteEvent"] !== null) {
            $this->ExtractCopyRightWatermarkCompleteEvent = new ExtractCopyRightWatermarkTask();
            $this->ExtractCopyRightWatermarkCompleteEvent->deserialize($param["ExtractCopyRightWatermarkCompleteEvent"]);
        }

        if (array_key_exists("ReviewAudioVideoCompleteEvent",$param) and $param["ReviewAudioVideoCompleteEvent"] !== null) {
            $this->ReviewAudioVideoCompleteEvent = new ReviewAudioVideoTask();
            $this->ReviewAudioVideoCompleteEvent->deserialize($param["ReviewAudioVideoCompleteEvent"]);
        }

        if (array_key_exists("ReduceMediaBitrateCompleteEvent",$param) and $param["ReduceMediaBitrateCompleteEvent"] !== null) {
            $this->ReduceMediaBitrateCompleteEvent = new ReduceMediaBitrateTask();
            $this->ReduceMediaBitrateCompleteEvent->deserialize($param["ReduceMediaBitrateCompleteEvent"]);
        }

        if (array_key_exists("DescribeFileAttributesCompleteEvent",$param) and $param["DescribeFileAttributesCompleteEvent"] !== null) {
            $this->DescribeFileAttributesCompleteEvent = new DescribeFileAttributesTask();
            $this->DescribeFileAttributesCompleteEvent->deserialize($param["DescribeFileAttributesCompleteEvent"]);
        }

        if (array_key_exists("QualityInspectCompleteEvent",$param) and $param["QualityInspectCompleteEvent"] !== null) {
            $this->QualityInspectCompleteEvent = new QualityInspectTask();
            $this->QualityInspectCompleteEvent->deserialize($param["QualityInspectCompleteEvent"]);
        }

        if (array_key_exists("QualityEnhanceCompleteEvent",$param) and $param["QualityEnhanceCompleteEvent"] !== null) {
            $this->QualityEnhanceCompleteEvent = new QualityEnhanceTask();
            $this->QualityEnhanceCompleteEvent->deserialize($param["QualityEnhanceCompleteEvent"]);
        }

        if (array_key_exists("MediaCastStatusChangedEvent",$param) and $param["MediaCastStatusChangedEvent"] !== null) {
            $this->MediaCastStatusChangedEvent = new MediaCastEvent();
            $this->MediaCastStatusChangedEvent->deserialize($param["MediaCastStatusChangedEvent"]);
        }

        if (array_key_exists("PersistenceCompleteEvent",$param) and $param["PersistenceCompleteEvent"] !== null) {
            $this->PersistenceCompleteEvent = new PersistenceCompleteTask();
            $this->PersistenceCompleteEvent->deserialize($param["PersistenceCompleteEvent"]);
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingCompleteEvent",$param) and $param["ComplexAdaptiveDynamicStreamingCompleteEvent"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingCompleteEvent = new ComplexAdaptiveDynamicStreamingTask();
            $this->ComplexAdaptiveDynamicStreamingCompleteEvent->deserialize($param["ComplexAdaptiveDynamicStreamingCompleteEvent"]);
        }

        if (array_key_exists("ProcessMediaByMPSCompleteEvent",$param) and $param["ProcessMediaByMPSCompleteEvent"] !== null) {
            $this->ProcessMediaByMPSCompleteEvent = new ProcessMediaByMPS();
            $this->ProcessMediaByMPSCompleteEvent->deserialize($param["ProcessMediaByMPSCompleteEvent"]);
        }

        if (array_key_exists("AigcImageCompleteEvent",$param) and $param["AigcImageCompleteEvent"] !== null) {
            $this->AigcImageCompleteEvent = new AigcImageTask();
            $this->AigcImageCompleteEvent->deserialize($param["AigcImageCompleteEvent"]);
        }

        if (array_key_exists("AigcVideoCompleteEvent",$param) and $param["AigcVideoCompleteEvent"] !== null) {
            $this->AigcVideoCompleteEvent = new AigcVideoTask();
            $this->AigcVideoCompleteEvent->deserialize($param["AigcVideoCompleteEvent"]);
        }

        if (array_key_exists("ExtractBlindWatermarkComplete",$param) and $param["ExtractBlindWatermarkComplete"] !== null) {
            $this->ExtractBlindWatermarkComplete = new ExtractBlindWatermarkTask();
            $this->ExtractBlindWatermarkComplete->deserialize($param["ExtractBlindWatermarkComplete"]);
        }

        if (array_key_exists("SceneAigcImageCompleteEvent",$param) and $param["SceneAigcImageCompleteEvent"] !== null) {
            $this->SceneAigcImageCompleteEvent = new SceneAigcImageTask();
            $this->SceneAigcImageCompleteEvent->deserialize($param["SceneAigcImageCompleteEvent"]);
        }

        if (array_key_exists("ProcessImageAsyncCompleteEvent",$param) and $param["ProcessImageAsyncCompleteEvent"] !== null) {
            $this->ProcessImageAsyncCompleteEvent = new ProcessImageAsyncTask();
            $this->ProcessImageAsyncCompleteEvent->deserialize($param["ProcessImageAsyncCompleteEvent"]);
        }

        if (array_key_exists("CreateAigcAdvancedCustomElementCompleteEvent",$param) and $param["CreateAigcAdvancedCustomElementCompleteEvent"] !== null) {
            $this->CreateAigcAdvancedCustomElementCompleteEvent = new CreateAigcAdvancedCustomElementTask();
            $this->CreateAigcAdvancedCustomElementCompleteEvent->deserialize($param["CreateAigcAdvancedCustomElementCompleteEvent"]);
        }

        if (array_key_exists("CreateAigcCustomVoiceCompleteEvent",$param) and $param["CreateAigcCustomVoiceCompleteEvent"] !== null) {
            $this->CreateAigcCustomVoiceCompleteEvent = new CreateAigcCustomVoiceTask();
            $this->CreateAigcCustomVoiceCompleteEvent->deserialize($param["CreateAigcCustomVoiceCompleteEvent"]);
        }

        if (array_key_exists("DescribeAigcFaceInfoAsyncCompleteEvent",$param) and $param["DescribeAigcFaceInfoAsyncCompleteEvent"] !== null) {
            $this->DescribeAigcFaceInfoAsyncCompleteEvent = new DescribeAigcFaceInfoAsyncTask();
            $this->DescribeAigcFaceInfoAsyncCompleteEvent->deserialize($param["DescribeAigcFaceInfoAsyncCompleteEvent"]);
        }
    }
}
