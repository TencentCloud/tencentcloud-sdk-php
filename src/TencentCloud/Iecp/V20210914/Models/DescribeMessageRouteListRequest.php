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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageRouteList请求参数结构体
 *
 * @method integer getLimit() 获取无
 * @method void setLimit(integer $Limit) 设置无
 * @method integer getOffset() 获取无
 * @method void setOffset(integer $Offset) 设置无
 * @method string getFilter() 获取无
 * @method void setFilter(string $Filter) 设置无
 * @method string getStartTime() 获取无
 * @method void setStartTime(string $StartTime) 设置无
 * @method string getEndTime() 获取无
 * @method void setEndTime(string $EndTime) 设置无
 * @method string getOrder() 获取无
 * @method void setOrder(string $Order) 设置无
 */
class DescribeMessageRouteListRequest extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $Limit;

    /**
     * @var integer 无
     */
    public $Offset;

    /**
     * @var string 无
     */
    public $Filter;

    /**
     * @var string 无
     */
    public $StartTime;

    /**
     * @var string 无
     */
    public $EndTime;

    /**
     * @var string 无
     */
    public $Order;

    /**
     * @param integer $Limit 无
     * @param integer $Offset 无
     * @param string $Filter 无
     * @param string $StartTime 无
     * @param string $EndTime 无
     * @param string $Order 无
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
