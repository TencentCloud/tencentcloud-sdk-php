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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisasterRecoverySitePairs请求参数结构体
 *
 * @method string getSitePairType() 获取<p>要查询的容灾策略产品类型。取值范围：INSTANCE 。</p><p>枚举值：</p><ul><li>INSTANCE： CVM站点对</li></ul>
 * @method void setSitePairType(string $SitePairType) 设置<p>要查询的容灾策略产品类型。取值范围：INSTANCE 。</p><p>枚举值：</p><ul><li>INSTANCE： CVM站点对</li></ul>
 * @method array getSitePairIds() 获取<p>要查询的容灾策略ID列表。</p>
 * @method void setSitePairIds(array $SitePairIds) 设置<p>要查询的容灾策略ID列表。</p>
 * @method array getFilters() 获取<p>过滤条件，详见定期快照过滤条件表。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，详见定期快照过滤条件表。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method string getOrder() 获取<p>输出结果按升序还是降序，DESC表示降序，ASC表示升序</p>
 * @method void setOrder(string $Order) 设置<p>输出结果按升序还是降序，DESC表示降序，ASC表示升序</p>
 * @method string getOrderField() 获取<p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 * @method void setOrderField(string $OrderField) 设置<p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 */
class DescribeDisasterRecoverySitePairsRequest extends AbstractModel
{
    /**
     * @var string <p>要查询的容灾策略产品类型。取值范围：INSTANCE 。</p><p>枚举值：</p><ul><li>INSTANCE： CVM站点对</li></ul>
     */
    public $SitePairType;

    /**
     * @var array <p>要查询的容灾策略ID列表。</p>
     */
    public $SitePairIds;

    /**
     * @var array <p>过滤条件，详见定期快照过滤条件表。</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
     */
    public $Limit;

    /**
     * @var string <p>输出结果按升序还是降序，DESC表示降序，ASC表示升序</p>
     */
    public $Order;

    /**
     * @var string <p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
     */
    public $OrderField;

    /**
     * @param string $SitePairType <p>要查询的容灾策略产品类型。取值范围：INSTANCE 。</p><p>枚举值：</p><ul><li>INSTANCE： CVM站点对</li></ul>
     * @param array $SitePairIds <p>要查询的容灾策略ID列表。</p>
     * @param array $Filters <p>过滤条件，详见定期快照过滤条件表。</p>
     * @param integer $Offset <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
     * @param string $Order <p>输出结果按升序还是降序，DESC表示降序，ASC表示升序</p>
     * @param string $OrderField <p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
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
        if (array_key_exists("SitePairType",$param) and $param["SitePairType"] !== null) {
            $this->SitePairType = $param["SitePairType"];
        }

        if (array_key_exists("SitePairIds",$param) and $param["SitePairIds"] !== null) {
            $this->SitePairIds = $param["SitePairIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterModel();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
