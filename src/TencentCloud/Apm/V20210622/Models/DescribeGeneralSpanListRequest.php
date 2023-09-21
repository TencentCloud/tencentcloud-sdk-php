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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralSpanList请求参数结构体
 *
 * @method integer getOffset() 获取分页
 * @method void setOffset(integer $Offset) 设置分页
 * @method integer getLimit() 获取列表项个数
 * @method void setLimit(integer $Limit) 设置列表项个数
 * @method OrderBy getOrderBy() 获取排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置排序
 * @method integer getStartTime() 获取span查询开始时间戳（单位:秒）
 * @method void setStartTime(integer $StartTime) 设置span查询开始时间戳（单位:秒）
 * @method string getInstanceId() 获取实例名
 * @method void setInstanceId(string $InstanceId) 设置实例名
 * @method array getFilters() 获取通用过滤参数
 * @method void setFilters(array $Filters) 设置通用过滤参数
 * @method string getBusinessName() 获取业务自身服务名
 * @method void setBusinessName(string $BusinessName) 设置业务自身服务名
 * @method integer getEndTime() 获取span查询结束时间戳（单位:秒）
 * @method void setEndTime(integer $EndTime) 设置span查询结束时间戳（单位:秒）
 */
class DescribeGeneralSpanListRequest extends AbstractModel
{
    /**
     * @var integer 分页
     */
    public $Offset;

    /**
     * @var integer 列表项个数
     */
    public $Limit;

    /**
     * @var OrderBy 排序
     */
    public $OrderBy;

    /**
     * @var integer span查询开始时间戳（单位:秒）
     */
    public $StartTime;

    /**
     * @var string 实例名
     */
    public $InstanceId;

    /**
     * @var array 通用过滤参数
     */
    public $Filters;

    /**
     * @var string 业务自身服务名
     */
    public $BusinessName;

    /**
     * @var integer span查询结束时间戳（单位:秒）
     */
    public $EndTime;

    /**
     * @param integer $Offset 分页
     * @param integer $Limit 列表项个数
     * @param OrderBy $OrderBy 排序
     * @param integer $StartTime span查询开始时间戳（单位:秒）
     * @param string $InstanceId 实例名
     * @param array $Filters 通用过滤参数
     * @param string $BusinessName 业务自身服务名
     * @param integer $EndTime span查询结束时间戳（单位:秒）
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
