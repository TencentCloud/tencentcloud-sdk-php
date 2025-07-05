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
namespace TencentCloud\Vtc\V20240223\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoTranslateJob返回参数结构体
 *
 * @method integer getJobStatus() 获取任务状态。 1：音频翻译中。 2：音频翻译失败。 3：音频翻译成功。 4：音频结果待确认。 5：音频结果已确认完毕。6：视频翻译中。 7：视频翻译失败。 8：视频翻译成功。
 * @method void setJobStatus(integer $JobStatus) 设置任务状态。 1：音频翻译中。 2：音频翻译失败。 3：音频翻译成功。 4：音频结果待确认。 5：音频结果已确认完毕。6：视频翻译中。 7：视频翻译失败。 8：视频翻译成功。
 * @method string getJobErrorCode() 获取任务错误码。
 * @method void setJobErrorCode(string $JobErrorCode) 设置任务错误码。
 * @method string getJobErrorMsg() 获取任务错误信息。
 * @method void setJobErrorMsg(string $JobErrorMsg) 设置任务错误信息。
 * @method string getResultVideoUrl() 获取视频翻译结果。
 * @method void setResultVideoUrl(string $ResultVideoUrl) 设置视频翻译结果。
 * @method array getTranslateResults() 获取音频翻译结果。
 * @method void setTranslateResults(array $TranslateResults) 设置音频翻译结果。
 * @method integer getJobConfirm() 获取是否需要确认翻译结果。0：不需要，1：需要
 * @method void setJobConfirm(integer $JobConfirm) 设置是否需要确认翻译结果。0：不需要，1：需要
 * @method string getJobAudioTaskId() 获取音频任务 ID
 * @method void setJobAudioTaskId(string $JobAudioTaskId) 设置音频任务 ID
 * @method string getJobVideoModerationId() 获取视频审核任务ID
 * @method void setJobVideoModerationId(string $JobVideoModerationId) 设置视频审核任务ID
 * @method string getJobVideoId() 获取视频生成任务 ID
 * @method void setJobVideoId(string $JobVideoId) 设置视频生成任务 ID
 * @method string getOriginalVideoUrl() 获取视频素材原始 URL
 * @method void setOriginalVideoUrl(string $OriginalVideoUrl) 设置视频素材原始 URL
 * @method array getAsrTimestamps() 获取文本片段及其时间戳
 * @method void setAsrTimestamps(array $AsrTimestamps) 设置文本片段及其时间戳
 * @method string getJobSubmitReqId() 获取提交视频翻译任务时的 requestId
 * @method void setJobSubmitReqId(string $JobSubmitReqId) 设置提交视频翻译任务时的 requestId
 * @method string getJobAudioModerationId() 获取音频审核任务 ID
 * @method void setJobAudioModerationId(string $JobAudioModerationId) 设置音频审核任务 ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoTranslateJobResponse extends AbstractModel
{
    /**
     * @var integer 任务状态。 1：音频翻译中。 2：音频翻译失败。 3：音频翻译成功。 4：音频结果待确认。 5：音频结果已确认完毕。6：视频翻译中。 7：视频翻译失败。 8：视频翻译成功。
     */
    public $JobStatus;

    /**
     * @var string 任务错误码。
     */
    public $JobErrorCode;

    /**
     * @var string 任务错误信息。
     */
    public $JobErrorMsg;

    /**
     * @var string 视频翻译结果。
     */
    public $ResultVideoUrl;

    /**
     * @var array 音频翻译结果。
     */
    public $TranslateResults;

    /**
     * @var integer 是否需要确认翻译结果。0：不需要，1：需要
     */
    public $JobConfirm;

    /**
     * @var string 音频任务 ID
     */
    public $JobAudioTaskId;

    /**
     * @var string 视频审核任务ID
     */
    public $JobVideoModerationId;

    /**
     * @var string 视频生成任务 ID
     */
    public $JobVideoId;

    /**
     * @var string 视频素材原始 URL
     */
    public $OriginalVideoUrl;

    /**
     * @var array 文本片段及其时间戳
     */
    public $AsrTimestamps;

    /**
     * @var string 提交视频翻译任务时的 requestId
     */
    public $JobSubmitReqId;

    /**
     * @var string 音频审核任务 ID
     */
    public $JobAudioModerationId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $JobStatus 任务状态。 1：音频翻译中。 2：音频翻译失败。 3：音频翻译成功。 4：音频结果待确认。 5：音频结果已确认完毕。6：视频翻译中。 7：视频翻译失败。 8：视频翻译成功。
     * @param string $JobErrorCode 任务错误码。
     * @param string $JobErrorMsg 任务错误信息。
     * @param string $ResultVideoUrl 视频翻译结果。
     * @param array $TranslateResults 音频翻译结果。
     * @param integer $JobConfirm 是否需要确认翻译结果。0：不需要，1：需要
     * @param string $JobAudioTaskId 音频任务 ID
     * @param string $JobVideoModerationId 视频审核任务ID
     * @param string $JobVideoId 视频生成任务 ID
     * @param string $OriginalVideoUrl 视频素材原始 URL
     * @param array $AsrTimestamps 文本片段及其时间戳
     * @param string $JobSubmitReqId 提交视频翻译任务时的 requestId
     * @param string $JobAudioModerationId 音频审核任务 ID
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
        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("JobErrorCode",$param) and $param["JobErrorCode"] !== null) {
            $this->JobErrorCode = $param["JobErrorCode"];
        }

        if (array_key_exists("JobErrorMsg",$param) and $param["JobErrorMsg"] !== null) {
            $this->JobErrorMsg = $param["JobErrorMsg"];
        }

        if (array_key_exists("ResultVideoUrl",$param) and $param["ResultVideoUrl"] !== null) {
            $this->ResultVideoUrl = $param["ResultVideoUrl"];
        }

        if (array_key_exists("TranslateResults",$param) and $param["TranslateResults"] !== null) {
            $this->TranslateResults = [];
            foreach ($param["TranslateResults"] as $key => $value){
                $obj = new TranslateResult();
                $obj->deserialize($value);
                array_push($this->TranslateResults, $obj);
            }
        }

        if (array_key_exists("JobConfirm",$param) and $param["JobConfirm"] !== null) {
            $this->JobConfirm = $param["JobConfirm"];
        }

        if (array_key_exists("JobAudioTaskId",$param) and $param["JobAudioTaskId"] !== null) {
            $this->JobAudioTaskId = $param["JobAudioTaskId"];
        }

        if (array_key_exists("JobVideoModerationId",$param) and $param["JobVideoModerationId"] !== null) {
            $this->JobVideoModerationId = $param["JobVideoModerationId"];
        }

        if (array_key_exists("JobVideoId",$param) and $param["JobVideoId"] !== null) {
            $this->JobVideoId = $param["JobVideoId"];
        }

        if (array_key_exists("OriginalVideoUrl",$param) and $param["OriginalVideoUrl"] !== null) {
            $this->OriginalVideoUrl = $param["OriginalVideoUrl"];
        }

        if (array_key_exists("AsrTimestamps",$param) and $param["AsrTimestamps"] !== null) {
            $this->AsrTimestamps = [];
            foreach ($param["AsrTimestamps"] as $key => $value){
                $obj = new AsrTimestamps();
                $obj->deserialize($value);
                array_push($this->AsrTimestamps, $obj);
            }
        }

        if (array_key_exists("JobSubmitReqId",$param) and $param["JobSubmitReqId"] !== null) {
            $this->JobSubmitReqId = $param["JobSubmitReqId"];
        }

        if (array_key_exists("JobAudioModerationId",$param) and $param["JobAudioModerationId"] !== null) {
            $this->JobAudioModerationId = $param["JobAudioModerationId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
