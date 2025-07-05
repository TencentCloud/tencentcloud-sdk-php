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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenUsage返回参数结构体
 *
 * @method float getTotalTokenUsage() 获取总token消耗量
 * @method void setTotalTokenUsage(float $TotalTokenUsage) 设置总token消耗量
 * @method float getInputTokenUsage() 获取输入token消耗
 * @method void setInputTokenUsage(float $InputTokenUsage) 设置输入token消耗
 * @method float getOutputTokenUsage() 获取输出token消耗
 * @method void setOutputTokenUsage(float $OutputTokenUsage) 设置输出token消耗
 * @method integer getApiCallStats() 获取接口调用次数
 * @method void setApiCallStats(integer $ApiCallStats) 设置接口调用次数
 * @method float getSearchUsage() 获取搜索服务调用次数
 * @method void setSearchUsage(float $SearchUsage) 设置搜索服务调用次数
 * @method integer getPageUsage() 获取文档解析消耗页数
 * @method void setPageUsage(integer $PageUsage) 设置文档解析消耗页数
 * @method float getSplitTokenUsage() 获取拆分token消耗量
 * @method void setSplitTokenUsage(float $SplitTokenUsage) 设置拆分token消耗量
 * @method float getRagSearchUsage() 获取Rag检索次数
 * @method void setRagSearchUsage(float $RagSearchUsage) 设置Rag检索次数
 * @method float getInternetSearchUsage() 获取联网搜索次数
 * @method void setInternetSearchUsage(float $InternetSearchUsage) 设置联网搜索次数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTokenUsageResponse extends AbstractModel
{
    /**
     * @var float 总token消耗量
     */
    public $TotalTokenUsage;

    /**
     * @var float 输入token消耗
     */
    public $InputTokenUsage;

    /**
     * @var float 输出token消耗
     */
    public $OutputTokenUsage;

    /**
     * @var integer 接口调用次数
     */
    public $ApiCallStats;

    /**
     * @var float 搜索服务调用次数
     */
    public $SearchUsage;

    /**
     * @var integer 文档解析消耗页数
     */
    public $PageUsage;

    /**
     * @var float 拆分token消耗量
     */
    public $SplitTokenUsage;

    /**
     * @var float Rag检索次数
     */
    public $RagSearchUsage;

    /**
     * @var float 联网搜索次数
     */
    public $InternetSearchUsage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $TotalTokenUsage 总token消耗量
     * @param float $InputTokenUsage 输入token消耗
     * @param float $OutputTokenUsage 输出token消耗
     * @param integer $ApiCallStats 接口调用次数
     * @param float $SearchUsage 搜索服务调用次数
     * @param integer $PageUsage 文档解析消耗页数
     * @param float $SplitTokenUsage 拆分token消耗量
     * @param float $RagSearchUsage Rag检索次数
     * @param float $InternetSearchUsage 联网搜索次数
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
        if (array_key_exists("TotalTokenUsage",$param) and $param["TotalTokenUsage"] !== null) {
            $this->TotalTokenUsage = $param["TotalTokenUsage"];
        }

        if (array_key_exists("InputTokenUsage",$param) and $param["InputTokenUsage"] !== null) {
            $this->InputTokenUsage = $param["InputTokenUsage"];
        }

        if (array_key_exists("OutputTokenUsage",$param) and $param["OutputTokenUsage"] !== null) {
            $this->OutputTokenUsage = $param["OutputTokenUsage"];
        }

        if (array_key_exists("ApiCallStats",$param) and $param["ApiCallStats"] !== null) {
            $this->ApiCallStats = $param["ApiCallStats"];
        }

        if (array_key_exists("SearchUsage",$param) and $param["SearchUsage"] !== null) {
            $this->SearchUsage = $param["SearchUsage"];
        }

        if (array_key_exists("PageUsage",$param) and $param["PageUsage"] !== null) {
            $this->PageUsage = $param["PageUsage"];
        }

        if (array_key_exists("SplitTokenUsage",$param) and $param["SplitTokenUsage"] !== null) {
            $this->SplitTokenUsage = $param["SplitTokenUsage"];
        }

        if (array_key_exists("RagSearchUsage",$param) and $param["RagSearchUsage"] !== null) {
            $this->RagSearchUsage = $param["RagSearchUsage"];
        }

        if (array_key_exists("InternetSearchUsage",$param) and $param["InternetSearchUsage"] !== null) {
            $this->InternetSearchUsage = $param["InternetSearchUsage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
