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
 * DescribeBackupVaults请求参数结构体
 *
 * @method array getVaultIds() 获取备份库ID列表
 * @method void setVaultIds(array $VaultIds) 设置备份库ID列表
 * @method array getFilters() 获取过滤条件，支持instance-id和auto-backup-policy-id
 * @method void setFilters(array $Filters) 设置过滤条件，支持instance-id和auto-backup-policy-id
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取返回数量，默认20，最大1000
 * @method void setLimit(integer $Limit) 设置返回数量，默认20，最大1000
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getOrderField() 获取排序字段
 * @method void setOrderField(string $OrderField) 设置排序字段
 */
class DescribeBackupVaultsRequest extends AbstractModel
{
    /**
     * @var array 备份库ID列表
     */
    public $VaultIds;

    /**
     * @var array 过滤条件，支持instance-id和auto-backup-policy-id
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20，最大1000
     */
    public $Limit;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $OrderField;

    /**
     * @param array $VaultIds 备份库ID列表
     * @param array $Filters 过滤条件，支持instance-id和auto-backup-policy-id
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 返回数量，默认20，最大1000
     * @param string $Order 排序方式
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
        if (array_key_exists("VaultIds",$param) and $param["VaultIds"] !== null) {
            $this->VaultIds = $param["VaultIds"];
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
