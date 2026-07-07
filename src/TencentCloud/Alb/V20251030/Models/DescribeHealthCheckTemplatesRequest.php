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
 * DescribeHealthCheckTemplates请求参数结构体
 *
 * @method array getFilters() 获取过滤器。通过指定的过滤条件来查询健康检查模版，支持：
- Name的值为**HealthCheckTemplateName**。通过名称来筛选健康检查模版。**Values**的值为模版名称列表。
- Name的值为**HealthCheckProtocol**。通过健康检查协议来筛选健康检查模版。**Values**的值为协议列表。
- 通过标签方式筛选。
 * @method void setFilters(array $Filters) 设置过滤器。通过指定的过滤条件来查询健康检查模版，支持：
- Name的值为**HealthCheckTemplateName**。通过名称来筛选健康检查模版。**Values**的值为模版名称列表。
- Name的值为**HealthCheckProtocol**。通过健康检查协议来筛选健康检查模版。**Values**的值为协议列表。
- 通过标签方式筛选。
 * @method array getHealthCheckTemplateIds() 获取健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
 * @method void setHealthCheckTemplateIds(array $HealthCheckTemplateIds) 设置健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
 * @method string getMaxResults() 获取返回列表的数量，默认为20，最大值为100。
 * @method void setMaxResults(string $MaxResults) 设置返回列表的数量，默认为20，最大值为100。
 * @method string getNextToken() 获取下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method void setNextToken(string $NextToken) 设置下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 */
class DescribeHealthCheckTemplatesRequest extends AbstractModel
{
    /**
     * @var array 过滤器。通过指定的过滤条件来查询健康检查模版，支持：
- Name的值为**HealthCheckTemplateName**。通过名称来筛选健康检查模版。**Values**的值为模版名称列表。
- Name的值为**HealthCheckProtocol**。通过健康检查协议来筛选健康检查模版。**Values**的值为协议列表。
- 通过标签方式筛选。
     */
    public $Filters;

    /**
     * @var array 健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
     */
    public $HealthCheckTemplateIds;

    /**
     * @var string 返回列表的数量，默认为20，最大值为100。
     */
    public $MaxResults;

    /**
     * @var string 下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     */
    public $NextToken;

    /**
     * @param array $Filters 过滤器。通过指定的过滤条件来查询健康检查模版，支持：
- Name的值为**HealthCheckTemplateName**。通过名称来筛选健康检查模版。**Values**的值为模版名称列表。
- Name的值为**HealthCheckProtocol**。通过健康检查协议来筛选健康检查模版。**Values**的值为协议列表。
- 通过标签方式筛选。
     * @param array $HealthCheckTemplateIds 健康检查模板 ID 列表，ID 格式为 hct- 后接字母数字。
     * @param string $MaxResults 返回列表的数量，默认为20，最大值为100。
     * @param string $NextToken 下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("HealthCheckTemplateIds",$param) and $param["HealthCheckTemplateIds"] !== null) {
            $this->HealthCheckTemplateIds = $param["HealthCheckTemplateIds"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
