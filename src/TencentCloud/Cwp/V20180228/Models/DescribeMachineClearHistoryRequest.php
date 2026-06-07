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
 * @method array getFilters() 获取<p>筛选条件<br>多个条件筛选时 Keywords,TimeBetween,取交集</p><li> Keywords 实例名称/内网/公网IP</li><li> TimeBetween 时间区间</li>
 * @method void setFilters(array $Filters) 设置<p>筛选条件<br>多个条件筛选时 Keywords,TimeBetween,取交集</p><li> Keywords 实例名称/内网/公网IP</li><li> TimeBetween 时间区间</li>
 * @method integer getLimit() 获取<p>限制条数,默认10 ,最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>限制条数,默认10 ,最大100</p>
 * @method integer getOffset() 获取<p>偏移量,默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量,默认0</p>
 * @method string getOrder() 获取<p>正序, ASC , 倒序 DESC , 默认ASC</p>
 * @method void setOrder(string $Order) 设置<p>正序, ASC , 倒序 DESC , 默认ASC</p>
 * @method string getBy() 获取<p>AgentLastOfflineTime 客户端最后离线时间<br>AutoClearTime 清理时间</p>
 * @method void setBy(string $By) 设置<p>AgentLastOfflineTime 客户端最后离线时间<br>AutoClearTime 清理时间</p>
 */
class DescribeMachineClearHistoryRequest extends AbstractModel
{
    /**
     * @var array <p>筛选条件<br>多个条件筛选时 Keywords,TimeBetween,取交集</p><li> Keywords 实例名称/内网/公网IP</li><li> TimeBetween 时间区间</li>
     */
    public $Filters;

    /**
     * @var integer <p>限制条数,默认10 ,最大100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量,默认0</p>
     */
    public $Offset;

    /**
     * @var string <p>正序, ASC , 倒序 DESC , 默认ASC</p>
     */
    public $Order;

    /**
     * @var string <p>AgentLastOfflineTime 客户端最后离线时间<br>AutoClearTime 清理时间</p>
     */
    public $By;

    /**
     * @param array $Filters <p>筛选条件<br>多个条件筛选时 Keywords,TimeBetween,取交集</p><li> Keywords 实例名称/内网/公网IP</li><li> TimeBetween 时间区间</li>
     * @param integer $Limit <p>限制条数,默认10 ,最大100</p>
     * @param integer $Offset <p>偏移量,默认0</p>
     * @param string $Order <p>正序, ASC , 倒序 DESC , 默认ASC</p>
     * @param string $By <p>AgentLastOfflineTime 客户端最后离线时间<br>AutoClearTime 清理时间</p>
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
