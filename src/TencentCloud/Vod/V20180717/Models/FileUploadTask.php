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
 * 文件上传任务信息
 *
 * @method string getFileId() 获取文件唯一 ID。
 * @method void setFileId(string $FileId) 设置文件唯一 ID。
 * @method MediaBasicInfo getMediaBasicInfo() 获取上传完成后生成的媒体文件基础信息。
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) 设置上传完成后生成的媒体文件基础信息。
 * @method string getProcedureTaskId() 获取任务类型为 Procedure 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置任务类型为 Procedure 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
 * @method string getReviewAudioVideoTaskId() 获取任务类型为 ReviewAudioVideo 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) 设置任务类型为 ReviewAudioVideo 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
 * @method MediaMetaData getMetaData() 获取元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileUploadTask extends AbstractModel
{
    /**
     * @var string 文件唯一 ID。
     */
    public $FileId;

    /**
     * @var MediaBasicInfo 上传完成后生成的媒体文件基础信息。
     */
    public $MediaBasicInfo;

    /**
     * @var string 任务类型为 Procedure 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
     */
    public $ProcedureTaskId;

    /**
     * @var string 任务类型为 ReviewAudioVideo 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var MediaMetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @param string $FileId 文件唯一 ID。
     * @param MediaBasicInfo $MediaBasicInfo 上传完成后生成的媒体文件基础信息。
     * @param string $ProcedureTaskId 任务类型为 Procedure 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。
     * @param string $ReviewAudioVideoTaskId 任务类型为 ReviewAudioVideo 的任务 ID。若视频[上传时指定要执行的任务(procedure)](https://cloud.tencent.com/document/product/266/33475#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。
     * @param MediaMetaData $MetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaBasicInfo",$param) and $param["MediaBasicInfo"] !== null) {
            $this->MediaBasicInfo = new MediaBasicInfo();
            $this->MediaBasicInfo->deserialize($param["MediaBasicInfo"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
