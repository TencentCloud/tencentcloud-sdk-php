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
 * DescribeAutoBackupPolicies请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件，支持以下Name：</p><ul><li>auto-backup-policy-id - 按定期备份策略ID过滤，如abp-xxx。</li><li>auto-backup-policy-state - 按定期备份策略状态过滤，如NORMAL。</li><li>auto-backup-policy-name - 按定期备份策略名称过滤，支持模糊匹配。</li><li>tag - 按标签键值对过滤，需包含Key和/或Value。</li><li>tag-key - 按标签键过滤。</li><li>tag-value - 按标签值过滤。</li><li>tag:tag-key - 按指定标签键的标签值过滤。</li><li>vault-id - 按备份库ID过滤。</li><li>storage-type - 按存储类型过滤：COMMON（普通模式）、VAULT（备份库模式）。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，支持以下Name：</p><ul><li>auto-backup-policy-id - 按定期备份策略ID过滤，如abp-xxx。</li><li>auto-backup-policy-state - 按定期备份策略状态过滤，如NORMAL。</li><li>auto-backup-policy-name - 按定期备份策略名称过滤，支持模糊匹配。</li><li>tag - 按标签键值对过滤，需包含Key和/或Value。</li><li>tag-key - 按标签键过滤。</li><li>tag-value - 按标签值过滤。</li><li>tag:tag-key - 按指定标签键的标签值过滤。</li><li>vault-id - 按备份库ID过滤。</li><li>storage-type - 按存储类型过滤：COMMON（普通模式）、VAULT（备份库模式）。</li></ul>
 * @method integer getOffset() 获取<p>偏移量，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大1000</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大1000</p>
 * @method string getOrder() 获取<p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
 * @method string getOrderField() 获取<p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 */
class DescribeAutoBackupPoliciesRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件，支持以下Name：</p><ul><li>auto-backup-policy-id - 按定期备份策略ID过滤，如abp-xxx。</li><li>auto-backup-policy-state - 按定期备份策略状态过滤，如NORMAL。</li><li>auto-backup-policy-name - 按定期备份策略名称过滤，支持模糊匹配。</li><li>tag - 按标签键值对过滤，需包含Key和/或Value。</li><li>tag-key - 按标签键过滤。</li><li>tag-value - 按标签值过滤。</li><li>tag:tag-key - 按指定标签键的标签值过滤。</li><li>vault-id - 按备份库ID过滤。</li><li>storage-type - 按存储类型过滤：COMMON（普通模式）、VAULT（备份库模式）。</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认20，最大1000</p>
     */
    public $Limit;

    /**
     * @var string <p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
     */
    public $OrderField;

    /**
     * @param array $Filters <p>过滤条件，支持以下Name：</p><ul><li>auto-backup-policy-id - 按定期备份策略ID过滤，如abp-xxx。</li><li>auto-backup-policy-state - 按定期备份策略状态过滤，如NORMAL。</li><li>auto-backup-policy-name - 按定期备份策略名称过滤，支持模糊匹配。</li><li>tag - 按标签键值对过滤，需包含Key和/或Value。</li><li>tag-key - 按标签键过滤。</li><li>tag-value - 按标签值过滤。</li><li>tag:tag-key - 按指定标签键的标签值过滤。</li><li>vault-id - 按备份库ID过滤。</li><li>storage-type - 按存储类型过滤：COMMON（普通模式）、VAULT（备份库模式）。</li></ul>
     * @param integer $Offset <p>偏移量，默认0</p>
     * @param integer $Limit <p>返回数量，默认20，最大1000</p>
     * @param string $Order <p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
     * @param string $OrderField <p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
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
