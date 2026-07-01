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
 * @method integer getMaxResults() 获取<p>每页显示数量</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页显示数量</p>
 * @method string getAccountGroupId() 获取<p>账号组ID</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组ID</p>
 * @method array getFilters() 获取<p>resourceName：资源名  resourceId ：资源ID resourceType：资源类型</p>
 * @method void setFilters(array $Filters) 设置<p>resourceName：资源名  resourceId ：资源ID resourceType：资源类型</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getNextToken() 获取<p>下一页token</p>
 * @method void setNextToken(string $NextToken) 设置<p>下一页token</p>
 * @method string getOrderType() 获取<p>排序方式 asc、desc</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序方式 asc、desc</p>
 */
class ListAggregateDiscoveredResourcesRequest extends AbstractModel
{
    /**
     * @var integer <p>每页显示数量</p>
     */
    public $MaxResults;

    /**
     * @var string <p>账号组ID</p>
     */
    public $AccountGroupId;

    /**
     * @var array <p>resourceName：资源名  resourceId ：资源ID resourceType：资源类型</p>
     */
    public $Filters;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>下一页token</p>
     */
    public $NextToken;

    /**
     * @var string <p>排序方式 asc、desc</p>
     */
    public $OrderType;

    /**
     * @param integer $MaxResults <p>每页显示数量</p>
     * @param string $AccountGroupId <p>账号组ID</p>
     * @param array $Filters <p>resourceName：资源名  resourceId ：资源ID resourceType：资源类型</p>
     * @param array $Tags <p>标签</p>
     * @param string $NextToken <p>下一页token</p>
     * @param string $OrderType <p>排序方式 asc、desc</p>
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
