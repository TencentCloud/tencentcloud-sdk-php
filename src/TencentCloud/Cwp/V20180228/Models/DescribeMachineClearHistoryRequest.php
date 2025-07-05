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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineClearHistory请求参数结构体
 *
 * @method array getFilters() 获取筛选条件
多个条件筛选时 Keywords,TimeBetween,取交集
<li> Keywords 实例名称/内网/公网IP</li>
<li> TimeBetween 时间区间</li>
 * @method void setFilters(array $Filters) 设置筛选条件
多个条件筛选时 Keywords,TimeBetween,取交集
<li> Keywords 实例名称/内网/公网IP</li>
<li> TimeBetween 时间区间</li>
 * @method integer getLimit() 获取限制条数,默认10 ,最大100
 * @method void setLimit(integer $Limit) 设置限制条数,默认10 ,最大100
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method string getOrder() 获取正序, ASC , 倒序 DESC , 默认ASC
 * @method void setOrder(string $Order) 设置正序, ASC , 倒序 DESC , 默认ASC
 * @method string getBy() 获取AgentLastOfflineTime 客户端最后离线时间
AutoClearTime 清理时间
 * @method void setBy(string $By) 设置AgentLastOfflineTime 客户端最后离线时间
AutoClearTime 清理时间
 */
class DescribeMachineClearHistoryRequest extends AbstractModel
{
    /**
     * @var array 筛选条件
多个条件筛选时 Keywords,TimeBetween,取交集
<li> Keywords 实例名称/内网/公网IP</li>
<li> TimeBetween 时间区间</li>
     */
    public $Filters;

    /**
     * @var integer 限制条数,默认10 ,最大100
     */
    public $Limit;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var string 正序, ASC , 倒序 DESC , 默认ASC
     */
    public $Order;

    /**
     * @var string AgentLastOfflineTime 客户端最后离线时间
AutoClearTime 清理时间
     */
    public $By;

    /**
     * @param array $Filters 筛选条件
多个条件筛选时 Keywords,TimeBetween,取交集
<li> Keywords 实例名称/内网/公网IP</li>
<li> TimeBetween 时间区间</li>
     * @param integer $Limit 限制条数,默认10 ,最大100
     * @param integer $Offset 偏移量,默认0
     * @param string $Order 正序, ASC , 倒序 DESC , 默认ASC
     * @param string $By AgentLastOfflineTime 客户端最后离线时间
AutoClearTime 清理时间
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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
    }
}
