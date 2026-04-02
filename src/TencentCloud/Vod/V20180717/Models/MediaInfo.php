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
 * 点播文件信息
 *
 * @method MediaBasicInfo getBasicInfo() 获取<p>基础信息。包括视频名称、分类、播放地址、封面图片等。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicInfo(MediaBasicInfo $BasicInfo) 设置<p>基础信息。包括视频名称、分类、播放地址、封面图片等。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取<p>元信息。包括大小、时长、视频流信息、音频流信息等。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置<p>元信息。包括大小、时长、视频流信息、音频流信息等。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaTranscodeInfo getTranscodeInfo() 获取<p>转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeInfo(MediaTranscodeInfo $TranscodeInfo) 设置<p>转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaAnimatedGraphicsInfo getAnimatedGraphicsInfo() 获取<p>转动图结果信息。对视频转动图（如 gif）后，动图相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnimatedGraphicsInfo(MediaAnimatedGraphicsInfo $AnimatedGraphicsInfo) 设置<p>转动图结果信息。对视频转动图（如 gif）后，动图相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaSampleSnapshotInfo getSampleSnapshotInfo() 获取<p>采样截图信息。对视频采样截图后，相关截图信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSnapshotInfo(MediaSampleSnapshotInfo $SampleSnapshotInfo) 设置<p>采样截图信息。对视频采样截图后，相关截图信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaImageSpriteInfo getImageSpriteInfo() 获取<p>雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSpriteInfo(MediaImageSpriteInfo $ImageSpriteInfo) 设置<p>雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaSnapshotByTimeOffsetInfo getSnapshotByTimeOffsetInfo() 获取<p>指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetInfo(MediaSnapshotByTimeOffsetInfo $SnapshotByTimeOffsetInfo) 设置<p>指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaKeyFrameDescInfo getKeyFrameDescInfo() 获取<p>视频打点信息。对视频设置的各个打点信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyFrameDescInfo(MediaKeyFrameDescInfo $KeyFrameDescInfo) 设置<p>视频打点信息。对视频设置的各个打点信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaAdaptiveDynamicStreamingInfo getAdaptiveDynamicStreamingInfo() 获取<p>转自适应码流信息。包括规格、加密类型、打包格式等相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveDynamicStreamingInfo(MediaAdaptiveDynamicStreamingInfo $AdaptiveDynamicStreamingInfo) 设置<p>转自适应码流信息。包括规格、加密类型、打包格式等相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMiniProgramReviewInfo getMiniProgramReviewInfo() 获取<p>小程序审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniProgramReviewInfo(MediaMiniProgramReviewInfo $MiniProgramReviewInfo) 设置<p>小程序审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaSubtitleInfo getSubtitleInfo() 获取<p>字幕信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleInfo(MediaSubtitleInfo $SubtitleInfo) 设置<p>字幕信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取<p>媒体文件唯一标识 ID。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件唯一标识 ID。</p>
 * @method FileReviewInfo getReviewInfo() 获取<p>审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewInfo(FileReviewInfo $ReviewInfo) 设置<p>审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MPSAiMediaInfo getMPSAiMediaInfo() 获取<p>MPS智能媒资信息</p>
 * @method void setMPSAiMediaInfo(MPSAiMediaInfo $MPSAiMediaInfo) 设置<p>MPS智能媒资信息</p>
 * @method ImageUnderstandingInfo getImageUnderstandingInfo() 获取<p>图片理解信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUnderstandingInfo(ImageUnderstandingInfo $ImageUnderstandingInfo) 设置<p>图片理解信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeBasesInfo getKnowledgeBasesInfo() 获取<p>智能知识库信息。</p>
 * @method void setKnowledgeBasesInfo(KnowledgeBasesInfo $KnowledgeBasesInfo) 设置<p>智能知识库信息。</p>
 * @method FaceRecognitionInfo getFaceRecognitionInfo() 获取<p>人脸识别信息。</p>
 * @method void setFaceRecognitionInfo(FaceRecognitionInfo $FaceRecognitionInfo) 设置<p>人脸识别信息。</p>
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var MediaBasicInfo <p>基础信息。包括视频名称、分类、播放地址、封面图片等。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicInfo;

    /**
     * @var MediaMetaData <p>元信息。包括大小、时长、视频流信息、音频流信息等。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var MediaTranscodeInfo <p>转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeInfo;

    /**
     * @var MediaAnimatedGraphicsInfo <p>转动图结果信息。对视频转动图（如 gif）后，动图相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnimatedGraphicsInfo;

    /**
     * @var MediaSampleSnapshotInfo <p>采样截图信息。对视频采样截图后，相关截图信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSnapshotInfo;

    /**
     * @var MediaImageSpriteInfo <p>雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSpriteInfo;

    /**
     * @var MediaSnapshotByTimeOffsetInfo <p>指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetInfo;

    /**
     * @var MediaKeyFrameDescInfo <p>视频打点信息。对视频设置的各个打点信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyFrameDescInfo;

    /**
     * @var MediaAdaptiveDynamicStreamingInfo <p>转自适应码流信息。包括规格、加密类型、打包格式等相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveDynamicStreamingInfo;

    /**
     * @var MediaMiniProgramReviewInfo <p>小程序审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniProgramReviewInfo;

    /**
     * @var MediaSubtitleInfo <p>字幕信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleInfo;

    /**
     * @var string <p>媒体文件唯一标识 ID。</p>
     */
    public $FileId;

    /**
     * @var FileReviewInfo <p>审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewInfo;

    /**
     * @var MPSAiMediaInfo <p>MPS智能媒资信息</p>
     */
    public $MPSAiMediaInfo;

    /**
     * @var ImageUnderstandingInfo <p>图片理解信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUnderstandingInfo;

    /**
     * @var KnowledgeBasesInfo <p>智能知识库信息。</p>
     */
    public $KnowledgeBasesInfo;

    /**
     * @var FaceRecognitionInfo <p>人脸识别信息。</p>
     */
    public $FaceRecognitionInfo;

    /**
     * @param MediaBasicInfo $BasicInfo <p>基础信息。包括视频名称、分类、播放地址、封面图片等。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData <p>元信息。包括大小、时长、视频流信息、音频流信息等。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaTranscodeInfo $TranscodeInfo <p>转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaAnimatedGraphicsInfo $AnimatedGraphicsInfo <p>转动图结果信息。对视频转动图（如 gif）后，动图相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaSampleSnapshotInfo $SampleSnapshotInfo <p>采样截图信息。对视频采样截图后，相关截图信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaImageSpriteInfo $ImageSpriteInfo <p>雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaSnapshotByTimeOffsetInfo $SnapshotByTimeOffsetInfo <p>指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaKeyFrameDescInfo $KeyFrameDescInfo <p>视频打点信息。对视频设置的各个打点信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaAdaptiveDynamicStreamingInfo $AdaptiveDynamicStreamingInfo <p>转自适应码流信息。包括规格、加密类型、打包格式等相关信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMiniProgramReviewInfo $MiniProgramReviewInfo <p>小程序审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaSubtitleInfo $SubtitleInfo <p>字幕信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId <p>媒体文件唯一标识 ID。</p>
     * @param FileReviewInfo $ReviewInfo <p>审核信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MPSAiMediaInfo $MPSAiMediaInfo <p>MPS智能媒资信息</p>
     * @param ImageUnderstandingInfo $ImageUnderstandingInfo <p>图片理解信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeBasesInfo $KnowledgeBasesInfo <p>智能知识库信息。</p>
     * @param FaceRecognitionInfo $FaceRecognitionInfo <p>人脸识别信息。</p>
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new MediaBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("TranscodeInfo",$param) and $param["TranscodeInfo"] !== null) {
            $this->TranscodeInfo = new MediaTranscodeInfo();
            $this->TranscodeInfo->deserialize($param["TranscodeInfo"]);
        }

        if (array_key_exists("AnimatedGraphicsInfo",$param) and $param["AnimatedGraphicsInfo"] !== null) {
            $this->AnimatedGraphicsInfo = new MediaAnimatedGraphicsInfo();
            $this->AnimatedGraphicsInfo->deserialize($param["AnimatedGraphicsInfo"]);
        }

        if (array_key_exists("SampleSnapshotInfo",$param) and $param["SampleSnapshotInfo"] !== null) {
            $this->SampleSnapshotInfo = new MediaSampleSnapshotInfo();
            $this->SampleSnapshotInfo->deserialize($param["SampleSnapshotInfo"]);
        }

        if (array_key_exists("ImageSpriteInfo",$param) and $param["ImageSpriteInfo"] !== null) {
            $this->ImageSpriteInfo = new MediaImageSpriteInfo();
            $this->ImageSpriteInfo->deserialize($param["ImageSpriteInfo"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetInfo",$param) and $param["SnapshotByTimeOffsetInfo"] !== null) {
            $this->SnapshotByTimeOffsetInfo = new MediaSnapshotByTimeOffsetInfo();
            $this->SnapshotByTimeOffsetInfo->deserialize($param["SnapshotByTimeOffsetInfo"]);
        }

        if (array_key_exists("KeyFrameDescInfo",$param) and $param["KeyFrameDescInfo"] !== null) {
            $this->KeyFrameDescInfo = new MediaKeyFrameDescInfo();
            $this->KeyFrameDescInfo->deserialize($param["KeyFrameDescInfo"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingInfo",$param) and $param["AdaptiveDynamicStreamingInfo"] !== null) {
            $this->AdaptiveDynamicStreamingInfo = new MediaAdaptiveDynamicStreamingInfo();
            $this->AdaptiveDynamicStreamingInfo->deserialize($param["AdaptiveDynamicStreamingInfo"]);
        }

        if (array_key_exists("MiniProgramReviewInfo",$param) and $param["MiniProgramReviewInfo"] !== null) {
            $this->MiniProgramReviewInfo = new MediaMiniProgramReviewInfo();
            $this->MiniProgramReviewInfo->deserialize($param["MiniProgramReviewInfo"]);
        }

        if (array_key_exists("SubtitleInfo",$param) and $param["SubtitleInfo"] !== null) {
            $this->SubtitleInfo = new MediaSubtitleInfo();
            $this->SubtitleInfo->deserialize($param["SubtitleInfo"]);
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ReviewInfo",$param) and $param["ReviewInfo"] !== null) {
            $this->ReviewInfo = new FileReviewInfo();
            $this->ReviewInfo->deserialize($param["ReviewInfo"]);
        }

        if (array_key_exists("MPSAiMediaInfo",$param) and $param["MPSAiMediaInfo"] !== null) {
            $this->MPSAiMediaInfo = new MPSAiMediaInfo();
            $this->MPSAiMediaInfo->deserialize($param["MPSAiMediaInfo"]);
        }

        if (array_key_exists("ImageUnderstandingInfo",$param) and $param["ImageUnderstandingInfo"] !== null) {
            $this->ImageUnderstandingInfo = new ImageUnderstandingInfo();
            $this->ImageUnderstandingInfo->deserialize($param["ImageUnderstandingInfo"]);
        }

        if (array_key_exists("KnowledgeBasesInfo",$param) and $param["KnowledgeBasesInfo"] !== null) {
            $this->KnowledgeBasesInfo = new KnowledgeBasesInfo();
            $this->KnowledgeBasesInfo->deserialize($param["KnowledgeBasesInfo"]);
        }

        if (array_key_exists("FaceRecognitionInfo",$param) and $param["FaceRecognitionInfo"] !== null) {
            $this->FaceRecognitionInfo = new FaceRecognitionInfo();
            $this->FaceRecognitionInfo->deserialize($param["FaceRecognitionInfo"]);
        }
    }
}
