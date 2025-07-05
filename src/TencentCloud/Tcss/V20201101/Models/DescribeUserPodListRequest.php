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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserPodList请求参数结构体
 *
 * @method string getClusterId() 获取集群Id,不填表示获取用户所有pod
 * @method void setClusterId(string $ClusterId) 设置集群Id,不填表示获取用户所有pod
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每次查询的最大记录数量
 * @method void setLimit(integer $Limit) 设置每次查询的最大记录数量
 * @method array getFilters() 获取Name 可取值：ClusterId集群id,Namespace命名空间等
 * @method void setFilters(array $Filters) 设置Name 可取值：ClusterId集群id,Namespace命名空间等
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式 asc,desc
 * @method void setOrder(string $Order) 设置排序方式 asc,desc
 * @method string getServiceName() 获取Service名称
 * @method void setServiceName(string $ServiceName) 设置Service名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 */
class DescribeUserPodListRequest extends AbstractModel
{
    /**
     * @var string 集群Id,不填表示获取用户所有pod
     */
    public $ClusterId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每次查询的最大记录数量
     */
    public $Limit;

    /**
     * @var array Name 可取值：ClusterId集群id,Namespace命名空间等
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式 asc,desc
     */
    public $Order;

    /**
     * @var string Service名称
     */
    public $ServiceName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @param string $ClusterId 集群Id,不填表示获取用户所有pod
     * @param integer $Offset 偏移量
     * @param integer $Limit 每次查询的最大记录数量
     * @param array $Filters Name 可取值：ClusterId集群id,Namespace命名空间等
     * @param string $By 排序字段
     * @param string $Order 排序方式 asc,desc
     * @param string $ServiceName Service名称
     * @param string $Namespace 命名空间
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
