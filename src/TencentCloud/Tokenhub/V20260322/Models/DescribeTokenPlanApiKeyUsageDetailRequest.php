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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenPlanApiKeyUsageDetail请求参数结构体
 *
 * @method string getTeamId() 获取套餐 ID。可通过DescribeTokenPlanList接口获取。
 * @method void setTeamId(string $TeamId) 设置套餐 ID。可通过DescribeTokenPlanList接口获取。
 * @method string getFrom() 获取起始时间，RFC3339 格式。不传默认为结束时间前 15 分钟。
 * @method void setFrom(string $From) 设置起始时间，RFC3339 格式。不传默认为结束时间前 15 分钟。
 * @method string getTo() 获取结束时间，RFC3339 格式。不传默认为当前时间。
 * @method void setTo(string $To) 设置结束时间，RFC3339 格式。不传默认为当前时间。
 * @method string getSort() 获取排序方式。取值：asc（升序）、desc（降序），默认为 desc。
 * @method void setSort(string $Sort) 设置排序方式。取值：asc（升序）、desc（降序），默认为 desc。
 * @method integer getLimit() 获取返回条数，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回条数，默认为 20，最大值为 100。
 * @method string getContext() 获取翻页上下文，首次查询不传，后续传入上次返回的 Context，直到 ListOver 为 true。
 * @method void setContext(string $Context) 设置翻页上下文，首次查询不传，后续传入上次返回的 Context，直到 ListOver 为 true。
 * @method string getApiKeyId() 获取按 API Key ID 精确过滤。最大 128 字符。与 ApiKeyName 至少需传入其一，都传时以 ApiKeyId 为准。可通过 DescribeTokenPlanApiKeyList 接口获取。
 * @method void setApiKeyId(string $ApiKeyId) 设置按 API Key ID 精确过滤。最大 128 字符。与 ApiKeyName 至少需传入其一，都传时以 ApiKeyId 为准。可通过 DescribeTokenPlanApiKeyList 接口获取。
 * @method string getApiKeyName() 获取按 API Key 名称模糊过滤。最大 64 字符。与 ApiKeyId 至少需传入其一，都传时以 ApiKeyId 为准。
 * @method void setApiKeyName(string $ApiKeyName) 设置按 API Key 名称模糊过滤。最大 64 字符。与 ApiKeyId 至少需传入其一，都传时以 ApiKeyId 为准。
 * @method string getModelName() 获取按模型 ID (Model ID) 精确过滤。需要按模型名称过滤时传入该字段。
 * @method void setModelName(string $ModelName) 设置按模型 ID (Model ID) 精确过滤。需要按模型名称过滤时传入该字段。
 */
class DescribeTokenPlanApiKeyUsageDetailRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID。可通过DescribeTokenPlanList接口获取。
     */
    public $TeamId;

    /**
     * @var string 起始时间，RFC3339 格式。不传默认为结束时间前 15 分钟。
     */
    public $From;

    /**
     * @var string 结束时间，RFC3339 格式。不传默认为当前时间。
     */
    public $To;

    /**
     * @var string 排序方式。取值：asc（升序）、desc（降序），默认为 desc。
     */
    public $Sort;

    /**
     * @var integer 返回条数，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var string 翻页上下文，首次查询不传，后续传入上次返回的 Context，直到 ListOver 为 true。
     */
    public $Context;

    /**
     * @var string 按 API Key ID 精确过滤。最大 128 字符。与 ApiKeyName 至少需传入其一，都传时以 ApiKeyId 为准。可通过 DescribeTokenPlanApiKeyList 接口获取。
     */
    public $ApiKeyId;

    /**
     * @var string 按 API Key 名称模糊过滤。最大 64 字符。与 ApiKeyId 至少需传入其一，都传时以 ApiKeyId 为准。
     */
    public $ApiKeyName;

    /**
     * @var string 按模型 ID (Model ID) 精确过滤。需要按模型名称过滤时传入该字段。
     */
    public $ModelName;

    /**
     * @param string $TeamId 套餐 ID。可通过DescribeTokenPlanList接口获取。
     * @param string $From 起始时间，RFC3339 格式。不传默认为结束时间前 15 分钟。
     * @param string $To 结束时间，RFC3339 格式。不传默认为当前时间。
     * @param string $Sort 排序方式。取值：asc（升序）、desc（降序），默认为 desc。
     * @param integer $Limit 返回条数，默认为 20，最大值为 100。
     * @param string $Context 翻页上下文，首次查询不传，后续传入上次返回的 Context，直到 ListOver 为 true。
     * @param string $ApiKeyId 按 API Key ID 精确过滤。最大 128 字符。与 ApiKeyName 至少需传入其一，都传时以 ApiKeyId 为准。可通过 DescribeTokenPlanApiKeyList 接口获取。
     * @param string $ApiKeyName 按 API Key 名称模糊过滤。最大 64 字符。与 ApiKeyId 至少需传入其一，都传时以 ApiKeyId 为准。
     * @param string $ModelName 按模型 ID (Model ID) 精确过滤。需要按模型名称过滤时传入该字段。
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }
    }
}
