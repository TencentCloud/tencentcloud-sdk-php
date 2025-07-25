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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotPolicies请求参数结构体
 *
 * @method array getSnapshotPolicyIds() 获取快照策略Id。
 * @method void setSnapshotPolicyIds(array $SnapshotPolicyIds) 设置快照策略Id。
 * @method array getFilters() 获取过滤条件，参数不支持同时指定SnapshotPolicyIds和Filters。
<li>snapshot-policy-id - String -（过滤条件）快照策略ID。</li>
<li>snapshot-policy-name - String -（过滤条件）快照策略名称。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定SnapshotPolicyIds和Filters。
<li>snapshot-policy-id - String -（过滤条件）快照策略ID。</li>
<li>snapshot-policy-name - String -（过滤条件）快照策略名称。</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大为200。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大为200。
 */
class DescribeSnapshotPoliciesRequest extends AbstractModel
{
    /**
     * @var array 快照策略Id。
     */
    public $SnapshotPolicyIds;

    /**
     * @var array 过滤条件，参数不支持同时指定SnapshotPolicyIds和Filters。
<li>snapshot-policy-id - String -（过滤条件）快照策略ID。</li>
<li>snapshot-policy-name - String -（过滤条件）快照策略名称。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大为200。
     */
    public $Limit;

    /**
     * @param array $SnapshotPolicyIds 快照策略Id。
     * @param array $Filters 过滤条件，参数不支持同时指定SnapshotPolicyIds和Filters。
<li>snapshot-policy-id - String -（过滤条件）快照策略ID。</li>
<li>snapshot-policy-name - String -（过滤条件）快照策略名称。</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大为200。
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
        if (array_key_exists("SnapshotPolicyIds",$param) and $param["SnapshotPolicyIds"] !== null) {
            $this->SnapshotPolicyIds = $param["SnapshotPolicyIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
