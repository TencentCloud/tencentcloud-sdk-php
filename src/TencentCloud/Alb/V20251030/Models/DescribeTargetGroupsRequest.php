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
 * DescribeTargetGroups请求参数结构体
 *
 * @method array getFilters() 获取 过滤器。通过指定的过滤条件来查询后端服务，支持：
- Name的值为**VpcId**。通过VPC实例来筛选目标组。**Values**的值为VPC唯一ID列表。
- Name的值为**TargetType**。通过后端服务类型来筛选目标组。**Values**的值可以取为**Instance**。
- Name的值为**TargetGroupName**。通过目标组名称来筛选目标组。**Values**的值为目标组名称列表。
- Name的值为**Protocol**。通过目标组后端服务协议来筛选目标组。**Values**的值为目标组后端服务协议列表。
- 通过标签方式筛选。
 * @method void setFilters(array $Filters) 设置 过滤器。通过指定的过滤条件来查询后端服务，支持：
- Name的值为**VpcId**。通过VPC实例来筛选目标组。**Values**的值为VPC唯一ID列表。
- Name的值为**TargetType**。通过后端服务类型来筛选目标组。**Values**的值可以取为**Instance**。
- Name的值为**TargetGroupName**。通过目标组名称来筛选目标组。**Values**的值为目标组名称列表。
- Name的值为**Protocol**。通过目标组后端服务协议来筛选目标组。**Values**的值为目标组后端服务协议列表。
- 通过标签方式筛选。
 * @method integer getMaxResults() 获取返回列表的数量，默认为**20**，最大值为**100**。
 * @method void setMaxResults(integer $MaxResults) 设置返回列表的数量，默认为**20**，最大值为**100**。
 * @method string getNextToken() 获取下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method void setNextToken(string $NextToken) 设置下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method array getTargetGroupIds() 获取目标组 ID 列表，ID 格式为 lbtg- 后接 8 位字母数字。
 * @method void setTargetGroupIds(array $TargetGroupIds) 设置目标组 ID 列表，ID 格式为 lbtg- 后接 8 位字母数字。
 */
class DescribeTargetGroupsRequest extends AbstractModel
{
    /**
     * @var array  过滤器。通过指定的过滤条件来查询后端服务，支持：
- Name的值为**VpcId**。通过VPC实例来筛选目标组。**Values**的值为VPC唯一ID列表。
- Name的值为**TargetType**。通过后端服务类型来筛选目标组。**Values**的值可以取为**Instance**。
- Name的值为**TargetGroupName**。通过目标组名称来筛选目标组。**Values**的值为目标组名称列表。
- Name的值为**Protocol**。通过目标组后端服务协议来筛选目标组。**Values**的值为目标组后端服务协议列表。
- 通过标签方式筛选。
     */
    public $Filters;

    /**
     * @var integer 返回列表的数量，默认为**20**，最大值为**100**。
     */
    public $MaxResults;

    /**
     * @var string 下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     */
    public $NextToken;

    /**
     * @var array 目标组 ID 列表，ID 格式为 lbtg- 后接 8 位字母数字。
     */
    public $TargetGroupIds;

    /**
     * @param array $Filters  过滤器。通过指定的过滤条件来查询后端服务，支持：
- Name的值为**VpcId**。通过VPC实例来筛选目标组。**Values**的值为VPC唯一ID列表。
- Name的值为**TargetType**。通过后端服务类型来筛选目标组。**Values**的值可以取为**Instance**。
- Name的值为**TargetGroupName**。通过目标组名称来筛选目标组。**Values**的值为目标组名称列表。
- Name的值为**Protocol**。通过目标组后端服务协议来筛选目标组。**Values**的值为目标组后端服务协议列表。
- 通过标签方式筛选。
     * @param integer $MaxResults 返回列表的数量，默认为**20**，最大值为**100**。
     * @param string $NextToken 下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。
如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     * @param array $TargetGroupIds 目标组 ID 列表，ID 格式为 lbtg- 后接 8 位字母数字。
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("TargetGroupIds",$param) and $param["TargetGroupIds"] !== null) {
            $this->TargetGroupIds = $param["TargetGroupIds"];
        }
    }
}
