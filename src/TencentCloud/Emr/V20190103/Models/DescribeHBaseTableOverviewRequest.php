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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHBaseTableOverview请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getOffset() 获取分页查询编号偏移量，从0开始	
 * @method void setOffset(integer $Offset) 设置分页查询编号偏移量，从0开始	
 * @method integer getLimit() 获取分页查询时的分页大小，最小1，最大100
 * @method void setLimit(integer $Limit) 设置分页查询时的分页大小，最小1，最大100
 * @method string getTable() 获取表名称，模糊匹配
 * @method void setTable(string $Table) 设置表名称，模糊匹配
 * @method string getOrderField() 获取排序的字段，有默认值
 * @method void setOrderField(string $OrderField) 设置排序的字段，有默认值
 * @method string getOrderType() 获取默认为降序，asc代表升序，desc代表降序
 * @method void setOrderType(string $OrderType) 设置默认为降序，asc代表升序，desc代表降序
 */
class DescribeHBaseTableOverviewRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 分页查询编号偏移量，从0开始	
     */
    public $Offset;

    /**
     * @var integer 分页查询时的分页大小，最小1，最大100
     */
    public $Limit;

    /**
     * @var string 表名称，模糊匹配
     */
    public $Table;

    /**
     * @var string 排序的字段，有默认值
     */
    public $OrderField;

    /**
     * @var string 默认为降序，asc代表升序，desc代表降序
     */
    public $OrderType;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Offset 分页查询编号偏移量，从0开始	
     * @param integer $Limit 分页查询时的分页大小，最小1，最大100
     * @param string $Table 表名称，模糊匹配
     * @param string $OrderField 排序的字段，有默认值
     * @param string $OrderType 默认为降序，asc代表升序，desc代表降序
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
