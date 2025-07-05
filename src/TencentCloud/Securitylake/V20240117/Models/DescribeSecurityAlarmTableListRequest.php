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
namespace TencentCloud\Securitylake\V20240117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityAlarmTableList请求参数结构体
 *
 * @method string getSdlId() 获取实例ID
 * @method void setSdlId(string $SdlId) 设置实例ID
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method integer getLimit() 获取长度
 * @method void setLimit(integer $Limit) 设置长度
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method string getOrder() 获取排序
 * @method void setOrder(string $Order) 设置排序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method integer getStartTime() 获取开始时间,毫秒
 * @method void setStartTime(integer $StartTime) 设置开始时间,毫秒
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 */
class DescribeSecurityAlarmTableListRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $SdlId;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var integer 长度
     */
    public $Limit;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var string 排序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var integer 开始时间,毫秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @param string $SdlId 实例ID
     * @param array $Filters 过滤条件
     * @param integer $Limit 长度
     * @param integer $Offset 偏移
     * @param string $Order 排序
     * @param string $By 排序字段
     * @param integer $StartTime 开始时间,毫秒
     * @param integer $EndTime 结束时间
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
        if (array_key_exists("SdlId",$param) and $param["SdlId"] !== null) {
            $this->SdlId = $param["SdlId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new WebSearchFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
