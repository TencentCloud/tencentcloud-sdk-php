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
 * 拉取上传任务信息
 *
 * @method string getTaskId() 获取<p>拉取上传任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>拉取上传任务 ID。</p>
 * @method string getStatus() 获取<p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置<p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取<p>错误码，0 表示成功，其他值表示失败：</p><li>40000：输入参数不合法，请检查输入参数；</li><li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li><li>70000：内部服务错误，建议重试。</li>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码，0 表示成功，其他值表示失败：</p><li>40000：输入参数不合法，请检查输入参数；</li><li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li><li>70000：内部服务错误，建议重试。</li>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method string getFileId() 获取<p>拉取上传完成后生成的视频 ID。</p>
 * @method void setFileId(string $FileId) 设置<p>拉取上传完成后生成的视频 ID。</p>
 * @method MediaBasicInfo getMediaBasicInfo() 获取<p>拉取上传完成后生成的媒体文件基础信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) 设置<p>拉取上传完成后生成的媒体文件基础信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取<p>输出视频的元信息。</p>
 * @method void setMetaData(MediaMetaData $MetaData) 设置<p>输出视频的元信息。</p>
 * @method string getFileUrl() 获取<p>拉取上传完成后生成的播放地址。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>拉取上传完成后生成的播放地址。</p>
 * @method string getProcedureTaskId() 获取<p>任务类型为 Procedure 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置<p>任务类型为 Procedure 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
 * @method string getReviewAudioVideoTaskId() 获取<p>任务类型为 ReviewAudioVideo 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。</p>
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) 设置<p>任务类型为 ReviewAudioVideo 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，<a href="https://cloud.tencent.com/document/product/266/7831">URL 拉取视频上传完成</a>将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，<a href="https://cloud.tencent.com/document/product/266/7831">URL 拉取视频上传完成</a>将返回该字段值，最长 1000 个字符。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method integer getProgress() 获取<p>拉取上传进度，取值范围 [0-100] 。</p>
 * @method void setProgress(integer $Progress) 设置<p>拉取上传进度，取值范围 [0-100] 。</p>
 */
class PullUploadTask extends AbstractModel
{
    /**
     * @var string <p>拉取上传任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer <p>错误码，0 表示成功，其他值表示失败：</p><li>40000：输入参数不合法，请检查输入参数；</li><li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li><li>70000：内部服务错误，建议重试。</li>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var string <p>拉取上传完成后生成的视频 ID。</p>
     */
    public $FileId;

    /**
     * @var MediaBasicInfo <p>拉取上传完成后生成的媒体文件基础信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaBasicInfo;

    /**
     * @var MediaMetaData <p>输出视频的元信息。</p>
     */
    public $MetaData;

    /**
     * @var string <p>拉取上传完成后生成的播放地址。</p>
     */
    public $FileUrl;

    /**
     * @var string <p>任务类型为 Procedure 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
     */
    public $ProcedureTaskId;

    /**
     * @var string <p>任务类型为 ReviewAudioVideo 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。</p>
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，<a href="https://cloud.tencent.com/document/product/266/7831">URL 拉取视频上传完成</a>将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var integer <p>拉取上传进度，取值范围 [0-100] 。</p>
     */
    public $Progress;

    /**
     * @param string $TaskId <p>拉取上传任务 ID。</p>
     * @param string $Status <p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     * @param integer $ErrCode <p>错误码，0 表示成功，其他值表示失败：</p><li>40000：输入参数不合法，请检查输入参数；</li><li>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；</li><li>70000：内部服务错误，建议重试。</li>
     * @param string $Message <p>错误信息。</p>
     * @param string $FileId <p>拉取上传完成后生成的视频 ID。</p>
     * @param MediaBasicInfo $MediaBasicInfo <p>拉取上传完成后生成的媒体文件基础信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData <p>输出视频的元信息。</p>
     * @param string $FileUrl <p>拉取上传完成后生成的播放地址。</p>
     * @param string $ProcedureTaskId <p>任务类型为 Procedure 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 MediaProcessTask、AiAnalysisTask、AiRecognitionTask 中的一个或多个时发起该任务。</p>
     * @param string $ReviewAudioVideoTaskId <p>任务类型为 ReviewAudioVideo 的任务 ID。若<a href="https://cloud.tencent.com/document/api/266/35575">拉取上传</a>时指定了媒体后续任务操作(Procedure)，当该任务流模板指定了 ReviewAudioVideoTask 时，发起该任务。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，<a href="https://cloud.tencent.com/document/product/266/7831">URL 拉取视频上传完成</a>将返回该字段值，最长 1000 个字符。</p>
     * @param string $SessionId <p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param integer $Progress <p>拉取上传进度，取值范围 [0-100] 。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaBasicInfo",$param) and $param["MediaBasicInfo"] !== null) {
            $this->MediaBasicInfo = new MediaBasicInfo();
            $this->MediaBasicInfo->deserialize($param["MediaBasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
