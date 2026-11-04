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
 * @method string getProtectGroupType() 获取<p>要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。</p>
 * @method void setProtectGroupType(string $ProtectGroupType) 设置<p>要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。</p>
 * @method array getProtectGroupIds() 获取<p>要查询的容灾保护组ID列表。</p>
 * @method void setProtectGroupIds(array $ProtectGroupIds) 设置<p>要查询的容灾保护组ID列表。</p>
 * @method array getFilters() 获取<p>过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
 * @method string getOrder() 获取<p>输出结果按升序还是降序</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
 * @method void setOrder(string $Order) 设置<p>输出结果按升序还是降序</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
 * @method string getOrderField() 获取<p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 * @method void setOrderField(string $OrderField) 设置<p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 */
class DescribeDisasterRecoveryProtectGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。</p>
     */
    public $ProtectGroupType;

    /**
     * @var array <p>要查询的容灾保护组ID列表。</p>
     */
    public $ProtectGroupIds;

    /**
     * @var array <p>过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。</p>
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
     * @var string <p>输出结果按升序还是降序</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
     */
    public $Order;

    /**
     * @var string <p>输出结果的排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
     */
    public $OrderField;

    /**
     * @param string $ProtectGroupType <p>要查询的容灾保护组产品类型，枚举值：DISK / INSTANCE / CFS。</p>
     * @param array $ProtectGroupIds <p>要查询的容灾保护组ID列表。</p>
     * @param array $Filters <p>过滤条件（过滤项由 core handler 定义，如 disaster-recovery-protect-group-id 等）。</p>
     * @param integer $Offset <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。</p>
     * @param string $Order <p>输出结果按升序还是降序</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
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
