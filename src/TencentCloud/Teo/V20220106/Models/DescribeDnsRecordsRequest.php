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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDnsRecords请求参数结构体
 *
 * @method array getFilters() 获取查询条件过滤器
 * @method void setFilters(array $Filters) 设置查询条件过滤器
 * @method string getOrder() 获取排序
 * @method void setOrder(string $Order) 设置排序
 * @method string getDirection() 获取可选值 asc, desc
 * @method void setDirection(string $Direction) 设置可选值 asc, desc
 * @method string getMatch() 获取可选值 all, any
 * @method void setMatch(string $Match) 设置可选值 all, any
 * @method integer getLimit() 获取分页查询限制数目，默认为 100，最大可设置为 1000
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为 100，最大可设置为 1000
 * @method integer getOffset() 获取分页查询偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0
 * @method string getZoneId() 获取站点 ID
 * @method void setZoneId(string $ZoneId) 设置站点 ID
 */
class DescribeDnsRecordsRequest extends AbstractModel
{
    /**
     * @var array 查询条件过滤器
     */
    public $Filters;

    /**
     * @var string 排序
     */
    public $Order;

    /**
     * @var string 可选值 asc, desc
     */
    public $Direction;

    /**
     * @var string 可选值 all, any
     */
    public $Match;

    /**
     * @var integer 分页查询限制数目，默认为 100，最大可设置为 1000
     */
    public $Limit;

    /**
     * @var integer 分页查询偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var string 站点 ID
     */
    public $ZoneId;

    /**
     * @param array $Filters 查询条件过滤器
     * @param string $Order 排序
     * @param string $Direction 可选值 asc, desc
     * @param string $Match 可选值 all, any
     * @param integer $Limit 分页查询限制数目，默认为 100，最大可设置为 1000
     * @param integer $Offset 分页查询偏移量，默认为 0
     * @param string $ZoneId 站点 ID
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
                $obj = new DnsRecordFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
