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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetReconstructDocumentResult返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态。</p><ul><li><code>Success</code>：执行完成</li><li><code>Processing</code>：执行中</li><li><code>Pause</code>: 暂停</li><li><code>Failed</code>：执行失败</li><li><code>WaitExecute</code>：等待执行</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态。</p><ul><li><code>Success</code>：执行完成</li><li><code>Processing</code>：执行中</li><li><code>Pause</code>: 暂停</li><li><code>Failed</code>：执行失败</li><li><code>WaitExecute</code>：等待执行</li></ul>
 * @method string getDocumentRecognizeResultUrl() 获取<p>解析结果的临时下载地址。文件类型为zip压缩包，下载链接有效期30分钟</p>
 * @method void setDocumentRecognizeResultUrl(string $DocumentRecognizeResultUrl) 设置<p>解析结果的临时下载地址。文件类型为zip压缩包，下载链接有效期30分钟</p>
 * @method array getFailedPages() 获取<p>文档解析失败的页码</p>
 * @method void setFailedPages(array $FailedPages) 设置<p>文档解析失败的页码</p>
 * @method DocumentUsage getUsage() 获取<p>文档拆分任务的用量</p>
 * @method void setUsage(DocumentUsage $Usage) 设置<p>文档拆分任务的用量</p>
 * @method ErrorInfo getError() 获取<p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
 * @method void setError(ErrorInfo $Error) 设置<p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
 * @method TaskErrInfo getTaskErrInfo() 获取<p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
 * @method void setTaskErrInfo(TaskErrInfo $TaskErrInfo) 设置<p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetReconstructDocumentResultResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态。</p><ul><li><code>Success</code>：执行完成</li><li><code>Processing</code>：执行中</li><li><code>Pause</code>: 暂停</li><li><code>Failed</code>：执行失败</li><li><code>WaitExecute</code>：等待执行</li></ul>
     */
    public $Status;

    /**
     * @var string <p>解析结果的临时下载地址。文件类型为zip压缩包，下载链接有效期30分钟</p>
     */
    public $DocumentRecognizeResultUrl;

    /**
     * @var array <p>文档解析失败的页码</p>
     */
    public $FailedPages;

    /**
     * @var DocumentUsage <p>文档拆分任务的用量</p>
     */
    public $Usage;

    /**
     * @var ErrorInfo <p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
     * @deprecated
     */
    public $Error;

    /**
     * @var TaskErrInfo <p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
     */
    public $TaskErrInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态。</p><ul><li><code>Success</code>：执行完成</li><li><code>Processing</code>：执行中</li><li><code>Pause</code>: 暂停</li><li><code>Failed</code>：执行失败</li><li><code>WaitExecute</code>：等待执行</li></ul>
     * @param string $DocumentRecognizeResultUrl <p>解析结果的临时下载地址。文件类型为zip压缩包，下载链接有效期30分钟</p>
     * @param array $FailedPages <p>文档解析失败的页码</p>
     * @param DocumentUsage $Usage <p>文档拆分任务的用量</p>
     * @param ErrorInfo $Error <p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
     * @param TaskErrInfo $TaskErrInfo <p>文档解析任务失败错误信息，当文档解析任务失败会返回具体的错误信息</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new DocumentUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("TaskErrInfo",$param) and $param["TaskErrInfo"] !== null) {
            $this->TaskErrInfo = new TaskErrInfo();
            $this->TaskErrInfo->deserialize($param["TaskErrInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
