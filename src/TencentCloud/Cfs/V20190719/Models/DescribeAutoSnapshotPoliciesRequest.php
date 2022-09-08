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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoSnapshotPolicies请求参数结构体
 *
 * @method string getAutoSnapshotPolicyId() 获取快照策略ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置快照策略ID
 * @method integer getOffset() 获取分页码
 * @method void setOffset(integer $Offset) 设置分页码
 * @method integer getLimit() 获取页面长
 * @method void setLimit(integer $Limit) 设置页面长
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method string getOrder() 获取升序，降序
 * @method void setOrder(string $Order) 设置升序，降序
 * @method string getOrderField() 获取排序字段
 * @method void setOrderField(string $OrderField) 设置排序字段
 */
class DescribeAutoSnapshotPoliciesRequest extends AbstractModel
{
    /**
     * @var string 快照策略ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var integer 分页码
     */
    public $Offset;

    /**
     * @var integer 页面长
     */
    public $Limit;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var string 升序，降序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $OrderField;

    /**
     * @param string $AutoSnapshotPolicyId 快照策略ID
     * @param integer $Offset 分页码
     * @param integer $Limit 页面长
     * @param array $Filters 过滤条件
     * @param string $Order 升序，降序
     * @param string $OrderField 排序字段
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
