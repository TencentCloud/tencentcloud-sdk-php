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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters请求参数结构体
 *
 * @method integer getPageNumber() 获取当前页数	
 * @method void setPageNumber(integer $PageNumber) 设置当前页数	
 * @method integer getPageSize() 获取单页大小
 * @method void setPageSize(integer $PageSize) 设置单页大小
 * @method array getFilters() 获取查询参数：支持通过实例ID（cluster_id）和实例名称（name）进行过滤查询
 * @method void setFilters(array $Filters) 设置查询参数：支持通过实例ID（cluster_id）和实例名称（name）进行过滤查询
 * @method array getOrders() 获取排序参数：支持通过创建时间字段（created_at）进行排序，Type可指定为DESC（降序）或ASC（升序）
 * @method void setOrders(array $Orders) 设置排序参数：支持通过创建时间字段（created_at）进行排序，Type可指定为DESC（降序）或ASC（升序）
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var integer 当前页数	
     */
    public $PageNumber;

    /**
     * @var integer 单页大小
     */
    public $PageSize;

    /**
     * @var array 查询参数：支持通过实例ID（cluster_id）和实例名称（name）进行过滤查询
     */
    public $Filters;

    /**
     * @var array 排序参数：支持通过创建时间字段（created_at）进行排序，Type可指定为DESC（降序）或ASC（升序）
     */
    public $Orders;

    /**
     * @param integer $PageNumber 当前页数	
     * @param integer $PageSize 单页大小
     * @param array $Filters 查询参数：支持通过实例ID（cluster_id）和实例名称（name）进行过滤查询
     * @param array $Orders 排序参数：支持通过创建时间字段（created_at）进行排序，Type可指定为DESC（降序）或ASC（升序）
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

        if (array_key_exists("Orders",$param) and $param["Orders"] !== null) {
            $this->Orders = [];
            foreach ($param["Orders"] as $key => $value){
                $obj = new Order();
                $obj->deserialize($value);
                array_push($this->Orders, $obj);
            }
        }
    }
}
