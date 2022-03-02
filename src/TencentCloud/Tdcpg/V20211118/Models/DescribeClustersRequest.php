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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，取值范围为[1,INF)，默认值为1
 * @method void setPageNumber(integer $PageNumber) 设置页码，取值范围为[1,INF)，默认值为1
 * @method integer getPageSize() 获取每页条数，取值范围为默认为[1,100]，默认值为20
 * @method void setPageSize(integer $PageSize) 设置每页条数，取值范围为默认为[1,100]，默认值为20
 * @method array getFilters() 获取目前支持查询条件包括：
 - ClusterId : 集群ID
 - ClusterName : 集群名
 - ProjectId : 项目ID
 - Status : 集群状态
 - PayMode : 付费模式
 * @method void setFilters(array $Filters) 设置目前支持查询条件包括：
 - ClusterId : 集群ID
 - ClusterName : 集群名
 - ProjectId : 项目ID
 - Status : 集群状态
 - PayMode : 付费模式
 * @method string getOrderBy() 获取排序字段，可选字段：
 - CreateTime : 集群创建时间(默认值)
 - PayPeriodEndTime : 集群过期时间
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选字段：
 - CreateTime : 集群创建时间(默认值)
 - PayPeriodEndTime : 集群过期时间
 * @method string getOrderByType() 获取排序方式，可选字段：
 - DESC : 降序(默认值)
 - ASC : 升序
 * @method void setOrderByType(string $OrderByType) 设置排序方式，可选字段：
 - DESC : 降序(默认值)
 - ASC : 升序
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var integer 页码，取值范围为[1,INF)，默认值为1
     */
    public $PageNumber;

    /**
     * @var integer 每页条数，取值范围为默认为[1,100]，默认值为20
     */
    public $PageSize;

    /**
     * @var array 目前支持查询条件包括：
 - ClusterId : 集群ID
 - ClusterName : 集群名
 - ProjectId : 项目ID
 - Status : 集群状态
 - PayMode : 付费模式
     */
    public $Filters;

    /**
     * @var string 排序字段，可选字段：
 - CreateTime : 集群创建时间(默认值)
 - PayPeriodEndTime : 集群过期时间
     */
    public $OrderBy;

    /**
     * @var string 排序方式，可选字段：
 - DESC : 降序(默认值)
 - ASC : 升序
     */
    public $OrderByType;

    /**
     * @param integer $PageNumber 页码，取值范围为[1,INF)，默认值为1
     * @param integer $PageSize 每页条数，取值范围为默认为[1,100]，默认值为20
     * @param array $Filters 目前支持查询条件包括：
 - ClusterId : 集群ID
 - ClusterName : 集群名
 - ProjectId : 项目ID
 - Status : 集群状态
 - PayMode : 付费模式
     * @param string $OrderBy 排序字段，可选字段：
 - CreateTime : 集群创建时间(默认值)
 - PayPeriodEndTime : 集群过期时间
     * @param string $OrderByType 排序方式，可选字段：
 - DESC : 降序(默认值)
 - ASC : 升序
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
