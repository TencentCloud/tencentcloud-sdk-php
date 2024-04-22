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
 * QueryParseDocResult返回参数结构体
 *
 * @method string getStatus() 获取等待 / 执行中 / 成功 / 失败
 * @method void setStatus(string $Status) 设置等待 / 执行中 / 成功 / 失败
 * @method string getName() 获取解析后的文件内容
 * @method void setName(string $Name) 设置解析后的文件内容
 * @method string getUrl() 获取文件下载地址
 * @method void setUrl(string $Url) 设置文件下载地址
 * @method string getReason() 获取解析失败原因
 * @method void setReason(string $Reason) 设置解析失败原因
 * @method Usage getUsage() 获取消耗量，输出页数
 * @method void setUsage(Usage $Usage) 设置消耗量，输出页数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryParseDocResultResponse extends AbstractModel
{
    /**
     * @var string 等待 / 执行中 / 成功 / 失败
     */
    public $Status;

    /**
     * @var string 解析后的文件内容
     */
    public $Name;

    /**
     * @var string 文件下载地址
     */
    public $Url;

    /**
     * @var string 解析失败原因
     */
    public $Reason;

    /**
     * @var Usage 消耗量，输出页数
     */
    public $Usage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 等待 / 执行中 / 成功 / 失败
     * @param string $Name 解析后的文件内容
     * @param string $Url 文件下载地址
     * @param string $Reason 解析失败原因
     * @param Usage $Usage 消耗量，输出页数
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new Usage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
