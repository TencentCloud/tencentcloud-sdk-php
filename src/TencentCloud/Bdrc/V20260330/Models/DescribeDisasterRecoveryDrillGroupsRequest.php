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
 * DescribeDisasterRecoveryDrillGroups请求参数结构体
 *
 * @method string getDrillGroupType() 获取要查询的容灾演练组产品类型。枚举值：DISK / INSTANCE / CFS。
 * @method void setDrillGroupType(string $DrillGroupType) 设置要查询的容灾演练组产品类型。枚举值：DISK / INSTANCE / CFS。
 * @method array getDrillGroupIds() 获取要查询的容灾演练组ID列表。
 * @method void setDrillGroupIds(array $DrillGroupIds) 设置要查询的容灾演练组ID列表。
 * @method array getFilters() 获取过滤条件，详见定期快照过滤条件表。
 * @method void setFilters(array $Filters) 设置过滤条件，详见定期快照过滤条件表。
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method string getOrder() 获取输出结果按升序还是降序。枚举值：ASC / DESC。
 * @method void setOrder(string $Order) 设置输出结果按升序还是降序。枚举值：ASC / DESC。
 * @method string getOrderField() 获取输出结果的排序字段。枚举值：CREATE_TIME。
 * @method void setOrderField(string $OrderField) 设置输出结果的排序字段。枚举值：CREATE_TIME。
 */
class DescribeDisasterRecoveryDrillGroupsRequest extends AbstractModel
{
    /**
     * @var string 要查询的容灾演练组产品类型。枚举值：DISK / INSTANCE / CFS。
     */
    public $DrillGroupType;

    /**
     * @var array 要查询的容灾演练组ID列表。
     */
    public $DrillGroupIds;

    /**
     * @var array 过滤条件，详见定期快照过滤条件表。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
     */
    public $Limit;

    /**
     * @var string 输出结果按升序还是降序。枚举值：ASC / DESC。
     */
    public $Order;

    /**
     * @var string 输出结果的排序字段。枚举值：CREATE_TIME。
     */
    public $OrderField;

    /**
     * @param string $DrillGroupType 要查询的容灾演练组产品类型。枚举值：DISK / INSTANCE / CFS。
     * @param array $DrillGroupIds 要查询的容灾演练组ID列表。
     * @param array $Filters 过滤条件，详见定期快照过滤条件表。
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
     * @param string $Order 输出结果按升序还是降序。枚举值：ASC / DESC。
     * @param string $OrderField 输出结果的排序字段。枚举值：CREATE_TIME。
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
        if (array_key_exists("DrillGroupType",$param) and $param["DrillGroupType"] !== null) {
            $this->DrillGroupType = $param["DrillGroupType"];
        }

        if (array_key_exists("DrillGroupIds",$param) and $param["DrillGroupIds"] !== null) {
            $this->DrillGroupIds = $param["DrillGroupIds"];
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
