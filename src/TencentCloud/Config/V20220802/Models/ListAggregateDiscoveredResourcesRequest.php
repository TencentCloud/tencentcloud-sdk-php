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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAggregateDiscoveredResources请求参数结构体
 *
 * @method integer getMaxResults() 获取每页显示数量
 * @method void setMaxResults(integer $MaxResults) 设置每页显示数量
 * @method string getAccountGroupId() 获取账号组ID
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID
 * @method array getFilters() 获取resourceName：资源名  resourceId ：资源ID resourceType：资源类型
 * @method void setFilters(array $Filters) 设置resourceName：资源名  resourceId ：资源ID resourceType：资源类型
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getNextToken() 获取下一页token
 * @method void setNextToken(string $NextToken) 设置下一页token
 * @method string getOrderType() 获取排序方式 asc、desc
 * @method void setOrderType(string $OrderType) 设置排序方式 asc、desc
 */
class ListAggregateDiscoveredResourcesRequest extends AbstractModel
{
    /**
     * @var integer 每页显示数量
     */
    public $MaxResults;

    /**
     * @var string 账号组ID
     */
    public $AccountGroupId;

    /**
     * @var array resourceName：资源名  resourceId ：资源ID resourceType：资源类型
     */
    public $Filters;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 下一页token
     */
    public $NextToken;

    /**
     * @var string 排序方式 asc、desc
     */
    public $OrderType;

    /**
     * @param integer $MaxResults 每页显示数量
     * @param string $AccountGroupId 账号组ID
     * @param array $Filters resourceName：资源名  resourceId ：资源ID resourceType：资源类型
     * @param array $Tags 标签
     * @param string $NextToken 下一页token
     * @param string $OrderType 排序方式 asc、desc
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

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
