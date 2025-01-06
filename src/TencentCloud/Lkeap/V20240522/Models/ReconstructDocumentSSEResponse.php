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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReconstructDocumentSSE返回参数结构体
 *
 * @method string getTaskId() 获取任务ID。本次请求的唯一标识
 * @method void setTaskId(string $TaskId) 设置任务ID。本次请求的唯一标识
 * @method string getResponseType() 获取响应类型。1：返回进度信息，2：返回解析结果
 * @method void setResponseType(string $ResponseType) 设置响应类型。1：返回进度信息，2：返回解析结果
 * @method string getProgress() 获取进度。0~100
 * @method void setProgress(string $Progress) 设置进度。0~100
 * @method string getProgressMessage() 获取进度信息。
 * @method void setProgressMessage(string $ProgressMessage) 设置进度信息。
 * @method string getDocumentRecognizeResultUrl() 获取文档解析结果URL。存储在腾讯云cos，可以通过http请求下载，URL十分钟内有效。
 * @method void setDocumentRecognizeResultUrl(string $DocumentRecognizeResultUrl) 设置文档解析结果URL。存储在腾讯云cos，可以通过http请求下载，URL十分钟内有效。
 * @method array getFailedPages() 获取文档解析失败的页码。
 * @method void setFailedPages(array $FailedPages) 设置文档解析失败的页码。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class ReconstructDocumentSSEResponse extends AbstractModel
{
    /**
     * @var string 任务ID。本次请求的唯一标识
     */
    public $TaskId;

    /**
     * @var string 响应类型。1：返回进度信息，2：返回解析结果
     */
    public $ResponseType;

    /**
     * @var string 进度。0~100
     */
    public $Progress;

    /**
     * @var string 进度信息。
     */
    public $ProgressMessage;

    /**
     * @var string 文档解析结果URL。存储在腾讯云cos，可以通过http请求下载，URL十分钟内有效。
     */
    public $DocumentRecognizeResultUrl;

    /**
     * @var array 文档解析失败的页码。
     */
    public $FailedPages;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务ID。本次请求的唯一标识
     * @param string $ResponseType 响应类型。1：返回进度信息，2：返回解析结果
     * @param string $Progress 进度。0~100
     * @param string $ProgressMessage 进度信息。
     * @param string $DocumentRecognizeResultUrl 文档解析结果URL。存储在腾讯云cos，可以通过http请求下载，URL十分钟内有效。
     * @param array $FailedPages 文档解析失败的页码。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ProgressMessage",$param) and $param["ProgressMessage"] !== null) {
            $this->ProgressMessage = $param["ProgressMessage"];
        }

        if (array_key_exists("DocumentRecognizeResultUrl",$param) and $param["DocumentRecognizeResultUrl"] !== null) {
            $this->DocumentRecognizeResultUrl = $param["DocumentRecognizeResultUrl"];
        }

        if (array_key_exists("FailedPages",$param) and $param["FailedPages"] !== null) {
            $this->FailedPages = [];
            foreach ($param["FailedPages"] as $key => $value){
                $obj = new ReconstructDocumentFailedPage();
                $obj->deserialize($value);
                array_push($this->FailedPages, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
