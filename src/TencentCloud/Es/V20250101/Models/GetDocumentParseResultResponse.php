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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDocumentParseResult返回参数结构体
 *
 * @method integer getStatus() 获取任务状态，-1：失败，0：运行中，1：成功。
 * @method void setStatus(integer $Status) 设置任务状态，-1：失败，0：运行中，1：成功。
 * @method string getDocumentParseResultUrl() 获取结果文件。
 * @method void setDocumentParseResultUrl(string $DocumentParseResultUrl) 设置结果文件。
 * @method array getFailedPages() 获取失败的页码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedPages(array $FailedPages) 设置失败的页码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PageUsage getUsage() 获取消耗页数
 * @method void setUsage(PageUsage $Usage) 设置消耗页数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetDocumentParseResultResponse extends AbstractModel
{
    /**
     * @var integer 任务状态，-1：失败，0：运行中，1：成功。
     */
    public $Status;

    /**
     * @var string 结果文件。
     */
    public $DocumentParseResultUrl;

    /**
     * @var array 失败的页码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedPages;

    /**
     * @var PageUsage 消耗页数
     */
    public $Usage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 任务状态，-1：失败，0：运行中，1：成功。
     * @param string $DocumentParseResultUrl 结果文件。
     * @param array $FailedPages 失败的页码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PageUsage $Usage 消耗页数
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

        if (array_key_exists("DocumentParseResultUrl",$param) and $param["DocumentParseResultUrl"] !== null) {
            $this->DocumentParseResultUrl = $param["DocumentParseResultUrl"];
        }

        if (array_key_exists("FailedPages",$param) and $param["FailedPages"] !== null) {
            $this->FailedPages = $param["FailedPages"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new PageUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
