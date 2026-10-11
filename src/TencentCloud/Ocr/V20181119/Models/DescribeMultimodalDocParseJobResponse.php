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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMultimodalDocParseJob返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态。取值：</p><ul><li>Created：已创建，等待处理</li><li>Processing：处理中</li><li>Success：成功</li><li>Failed：失败</li><li>Unknown：未知</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态。取值：</p><ul><li>Created：已创建，等待处理</li><li>Processing：处理中</li><li>Success：成功</li><li>Failed：失败</li><li>Unknown：未知</li></ul>
 * @method string getErrorCode() 获取<p>任务执行错误码。当任务状态不为 Failed 时，该值为“”。</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>任务执行错误码。当任务状态不为 Failed 时，该值为“”。</p>
 * @method string getErrorMessage() 获取<p>任务执行错误信息。当任务状态不为 Failed 时，该值为“”。</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>任务执行错误信息。当任务状态不为 Failed 时，该值为“”。</p>
 * @method string getResultUrl() 获取<p>结果的临时下载地址。文件类型为 zip 压缩包，下载链接有效期 30 分钟。压缩包内包含 <em>.md、</em>.json 以及 images 文件夹。仅当任务状态为 Success 时返回该字段。</p>
 * @method void setResultUrl(string $ResultUrl) 设置<p>结果的临时下载地址。文件类型为 zip 压缩包，下载链接有效期 30 分钟。压缩包内包含 <em>.md、</em>.json 以及 images 文件夹。仅当任务状态为 Success 时返回该字段。</p>
 * @method array getFailedPages() 获取<p>解析失败的页码列表。仅当任务状态为 Success 时返回该字段。</p>
 * @method void setFailedPages(array $FailedPages) 设置<p>解析失败的页码列表。仅当任务状态为 Success 时返回该字段。</p>
 * @method integer getSuccessPageNum() 获取<p>解析成功页数。</p>
 * @method void setSuccessPageNum(integer $SuccessPageNum) 设置<p>解析成功页数。</p>
 * @method integer getFailPageNum() 获取<p>解析失败页数。</p>
 * @method void setFailPageNum(integer $FailPageNum) 设置<p>解析失败页数。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMultimodalDocParseJobResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态。取值：</p><ul><li>Created：已创建，等待处理</li><li>Processing：处理中</li><li>Success：成功</li><li>Failed：失败</li><li>Unknown：未知</li></ul>
     */
    public $Status;

    /**
     * @var string <p>任务执行错误码。当任务状态不为 Failed 时，该值为“”。</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>任务执行错误信息。当任务状态不为 Failed 时，该值为“”。</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>结果的临时下载地址。文件类型为 zip 压缩包，下载链接有效期 30 分钟。压缩包内包含 <em>.md、</em>.json 以及 images 文件夹。仅当任务状态为 Success 时返回该字段。</p>
     */
    public $ResultUrl;

    /**
     * @var array <p>解析失败的页码列表。仅当任务状态为 Success 时返回该字段。</p>
     */
    public $FailedPages;

    /**
     * @var integer <p>解析成功页数。</p>
     */
    public $SuccessPageNum;

    /**
     * @var integer <p>解析失败页数。</p>
     */
    public $FailPageNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态。取值：</p><ul><li>Created：已创建，等待处理</li><li>Processing：处理中</li><li>Success：成功</li><li>Failed：失败</li><li>Unknown：未知</li></ul>
     * @param string $ErrorCode <p>任务执行错误码。当任务状态不为 Failed 时，该值为“”。</p>
     * @param string $ErrorMessage <p>任务执行错误信息。当任务状态不为 Failed 时，该值为“”。</p>
     * @param string $ResultUrl <p>结果的临时下载地址。文件类型为 zip 压缩包，下载链接有效期 30 分钟。压缩包内包含 <em>.md、</em>.json 以及 images 文件夹。仅当任务状态为 Success 时返回该字段。</p>
     * @param array $FailedPages <p>解析失败的页码列表。仅当任务状态为 Success 时返回该字段。</p>
     * @param integer $SuccessPageNum <p>解析成功页数。</p>
     * @param integer $FailPageNum <p>解析失败页数。</p>
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

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("FailedPages",$param) and $param["FailedPages"] !== null) {
            $this->FailedPages = [];
            foreach ($param["FailedPages"] as $key => $value){
                $obj = new ReconstructDocumentFailedPage();
                $obj->deserialize($value);
                array_push($this->FailedPages, $obj);
            }
        }

        if (array_key_exists("SuccessPageNum",$param) and $param["SuccessPageNum"] !== null) {
            $this->SuccessPageNum = $param["SuccessPageNum"];
        }

        if (array_key_exists("FailPageNum",$param) and $param["FailPageNum"] !== null) {
            $this->FailPageNum = $param["FailPageNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
