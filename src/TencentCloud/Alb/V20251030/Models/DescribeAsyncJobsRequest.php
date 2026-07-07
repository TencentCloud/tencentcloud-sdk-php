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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncJobs请求参数结构体
 *
 * @method integer getMaxResults() 获取分批次查询时每次显示的条目数。取值范围：1~100，默认值：20。
 * @method void setMaxResults(integer $MaxResults) 设置分批次查询时每次显示的条目数。取值范围：1~100，默认值：20。
 * @method string getNextToken() 获取是否拥有下一次查询的令牌（Token）。取值：  第一次查询和没有下一次查询时，均无需填写。 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method void setNextToken(string $NextToken) 设置是否拥有下一次查询的令牌（Token）。取值：  第一次查询和没有下一次查询时，均无需填写。 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method array getRequestIds() 获取异步请求返回的RequestId列表
 * @method void setRequestIds(array $RequestIds) 设置异步请求返回的RequestId列表
 */
class DescribeAsyncJobsRequest extends AbstractModel
{
    /**
     * @var integer 分批次查询时每次显示的条目数。取值范围：1~100，默认值：20。
     */
    public $MaxResults;

    /**
     * @var string 是否拥有下一次查询的令牌（Token）。取值：  第一次查询和没有下一次查询时，均无需填写。 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     */
    public $NextToken;

    /**
     * @var array 异步请求返回的RequestId列表
     */
    public $RequestIds;

    /**
     * @param integer $MaxResults 分批次查询时每次显示的条目数。取值范围：1~100，默认值：20。
     * @param string $NextToken 是否拥有下一次查询的令牌（Token）。取值：  第一次查询和没有下一次查询时，均无需填写。 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     * @param array $RequestIds 异步请求返回的RequestId列表
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RequestIds",$param) and $param["RequestIds"] !== null) {
            $this->RequestIds = $param["RequestIds"];
        }
    }
}
