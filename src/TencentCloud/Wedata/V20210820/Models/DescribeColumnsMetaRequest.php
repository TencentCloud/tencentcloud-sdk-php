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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeColumnsMeta请求参数结构体
 *
 * @method string getTableId() 获取表ID
 * @method void setTableId(string $TableId) 设置表ID
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method array getFilterSet() 获取过滤器
 * @method void setFilterSet(array $FilterSet) 设置过滤器
 * @method array getOrderFieldSet() 获取排序字段
 * @method void setOrderFieldSet(array $OrderFieldSet) 设置排序字段
 * @method boolean getIsPartitionQuery() 获取是否查询分区字段，默认false
 * @method void setIsPartitionQuery(boolean $IsPartitionQuery) 设置是否查询分区字段，默认false
 */
class DescribeColumnsMetaRequest extends AbstractModel
{
    /**
     * @var string 表ID
     */
    public $TableId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var array 过滤器
     */
    public $FilterSet;

    /**
     * @var array 排序字段
     */
    public $OrderFieldSet;

    /**
     * @var boolean 是否查询分区字段，默认false
     */
    public $IsPartitionQuery;

    /**
     * @param string $TableId 表ID
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页大小
     * @param array $FilterSet 过滤器
     * @param array $OrderFieldSet 排序字段
     * @param boolean $IsPartitionQuery 是否查询分区字段，默认false
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FilterSet",$param) and $param["FilterSet"] !== null) {
            $this->FilterSet = [];
            foreach ($param["FilterSet"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterSet, $obj);
            }
        }

        if (array_key_exists("OrderFieldSet",$param) and $param["OrderFieldSet"] !== null) {
            $this->OrderFieldSet = [];
            foreach ($param["OrderFieldSet"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFieldSet, $obj);
            }
        }

        if (array_key_exists("IsPartitionQuery",$param) and $param["IsPartitionQuery"] !== null) {
            $this->IsPartitionQuery = $param["IsPartitionQuery"];
        }
    }
}
