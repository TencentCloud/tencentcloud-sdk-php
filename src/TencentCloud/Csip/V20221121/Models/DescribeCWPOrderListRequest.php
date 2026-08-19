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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCWPOrderList请求参数结构体
 *
 * @method array getFilters() 获取<p>多个条件筛选时取交集</p><li>ProductCode 产品编码,p_开头</li><li>SubProductCode 子产品编码,sp_开头</li><li>InquireKey  计费项,sv_开头</li><li>Status 资源状态 1正常 2隔离 3销毁</li><li>PayMode 付费模式 0 按量计费 , 1 包年包月</li><li>ResourceId 资源ID</li><li>RenewFlag 自动续费标签 0 默认不需要(大客户存在自动续费的能力) 1 自动续费 2 手动设置不自动续费</li><li>DealNames 子订单号</li>
 * @method void setFilters(array $Filters) 设置<p>多个条件筛选时取交集</p><li>ProductCode 产品编码,p_开头</li><li>SubProductCode 子产品编码,sp_开头</li><li>InquireKey  计费项,sv_开头</li><li>Status 资源状态 1正常 2隔离 3销毁</li><li>PayMode 付费模式 0 按量计费 , 1 包年包月</li><li>ResourceId 资源ID</li><li>RenewFlag 自动续费标签 0 默认不需要(大客户存在自动续费的能力) 1 自动续费 2 手动设置不自动续费</li><li>DealNames 子订单号</li>
 * @method integer getOffset() 获取<p>偏移量,默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量,默认0</p>
 * @method integer getLimit() 获取<p>限制条数,默认10 ,最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>限制条数,默认10 ,最大100</p>
 */
class DescribeCWPOrderListRequest extends AbstractModel
{
    /**
     * @var array <p>多个条件筛选时取交集</p><li>ProductCode 产品编码,p_开头</li><li>SubProductCode 子产品编码,sp_开头</li><li>InquireKey  计费项,sv_开头</li><li>Status 资源状态 1正常 2隔离 3销毁</li><li>PayMode 付费模式 0 按量计费 , 1 包年包月</li><li>ResourceId 资源ID</li><li>RenewFlag 自动续费标签 0 默认不需要(大客户存在自动续费的能力) 1 自动续费 2 手动设置不自动续费</li><li>DealNames 子订单号</li>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量,默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制条数,默认10 ,最大100</p>
     */
    public $Limit;

    /**
     * @param array $Filters <p>多个条件筛选时取交集</p><li>ProductCode 产品编码,p_开头</li><li>SubProductCode 子产品编码,sp_开头</li><li>InquireKey  计费项,sv_开头</li><li>Status 资源状态 1正常 2隔离 3销毁</li><li>PayMode 付费模式 0 按量计费 , 1 包年包月</li><li>ResourceId 资源ID</li><li>RenewFlag 自动续费标签 0 默认不需要(大客户存在自动续费的能力) 1 自动续费 2 手动设置不自动续费</li><li>DealNames 子订单号</li>
     * @param integer $Offset <p>偏移量,默认0</p>
     * @param integer $Limit <p>限制条数,默认10 ,最大100</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
