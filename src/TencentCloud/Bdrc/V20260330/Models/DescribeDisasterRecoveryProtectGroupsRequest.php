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
 * DescribeDisasterRecoveryProtectGroups请求参数结构体
 *
 * @method string getProtectGroupType() 获取要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。
 * @method void setProtectGroupType(string $ProtectGroupType) 设置要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。
 * @method array getProtectGroupIds() 获取要查询的容灾保护组ID列表。
 * @method void setProtectGroupIds(array $ProtectGroupIds) 设置要查询的容灾保护组ID列表。
 * @method array getFilters() 获取过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。
 * @method void setFilters(array $Filters) 设置过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method string getOrder() 获取输出结果按升序还是降序
 * @method void setOrder(string $Order) 设置输出结果按升序还是降序
 * @method string getOrderField() 获取输出结果的排序字段
 * @method void setOrderField(string $OrderField) 设置输出结果的排序字段
 */
class DescribeDisasterRecoveryProtectGroupsRequest extends AbstractModel
{
    /**
     * @var string 要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。
     */
    public $ProtectGroupType;

    /**
     * @var array 要查询的容灾保护组ID列表。
     */
    public $ProtectGroupIds;

    /**
     * @var array 过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。
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
     * @var string 输出结果按升序还是降序
     */
    public $Order;

    /**
     * @var string 输出结果的排序字段
     */
    public $OrderField;

    /**
     * @param string $ProtectGroupType 要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。
     * @param array $ProtectGroupIds 要查询的容灾保护组ID列表。
     * @param array $Filters 过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
     * @param string $Order 输出结果按升序还是降序
     * @param string $OrderField 输出结果的排序字段
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
        if (array_key_exists("ProtectGroupType",$param) and $param["ProtectGroupType"] !== null) {
            $this->ProtectGroupType = $param["ProtectGroupType"];
        }

        if (array_key_exists("ProtectGroupIds",$param) and $param["ProtectGroupIds"] !== null) {
            $this->ProtectGroupIds = $param["ProtectGroupIds"];
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
