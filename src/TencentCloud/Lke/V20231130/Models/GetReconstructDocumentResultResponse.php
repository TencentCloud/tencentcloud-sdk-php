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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetReconstructDocumentResult返回参数结构体
 *
 * @method string getStatus() 获取任务状态: Success->执行完成；Processing->执行中；Failed->执行失败；WaitExecute->等待执行；
 * @method void setStatus(string $Status) 设置任务状态: Success->执行完成；Processing->执行中；Failed->执行失败；WaitExecute->等待执行；
 * @method string getDocumentRecognizeResultUrl() 获取输入文件中嵌入的图片中文字内容的识别结果，存储在腾讯云cos的下载地址
 * @method void setDocumentRecognizeResultUrl(string $DocumentRecognizeResultUrl) 设置输入文件中嵌入的图片中文字内容的识别结果，存储在腾讯云cos的下载地址
 * @method array getFailedPages() 获取文档解析失败的页码
 * @method void setFailedPages(array $FailedPages) 设置文档解析失败的页码
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetReconstructDocumentResultResponse extends AbstractModel
{
    /**
     * @var string 任务状态: Success->执行完成；Processing->执行中；Failed->执行失败；WaitExecute->等待执行；
     */
    public $Status;

    /**
     * @var string 输入文件中嵌入的图片中文字内容的识别结果，存储在腾讯云cos的下载地址
     */
    public $DocumentRecognizeResultUrl;

    /**
     * @var array 文档解析失败的页码
     */
    public $FailedPages;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态: Success->执行完成；Processing->执行中；Failed->执行失败；WaitExecute->等待执行；
     * @param string $DocumentRecognizeResultUrl 输入文件中嵌入的图片中文字内容的识别结果，存储在腾讯云cos的下载地址
     * @param array $FailedPages 文档解析失败的页码
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
