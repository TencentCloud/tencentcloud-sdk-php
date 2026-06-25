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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserGroups请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p>
 * @method array getUserGroupIds() 获取<p>用户组ID列表，用于按ID过滤，单次最多100个；可包含「未分组」虚拟分组 ugrp-ungrouped。</p>
 * @method void setUserGroupIds(array $UserGroupIds) 设置<p>用户组ID列表，用于按ID过滤，单次最多100个；可包含「未分组」虚拟分组 ugrp-ungrouped。</p>
 * @method array getFilters() 获取<p>过滤列表。支持：UserGroupName、Status、tag-key、tag:&lt;tag-key&gt;。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤列表。支持：UserGroupName、Status、tag-key、tag:&lt;tag-key&gt;。</p>
 * @method integer getLimit() 获取<p>本次查询限制的数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>本次查询限制的数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method integer getOffset() 获取<p>本次查询偏移量</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>本次查询偏移量</p><p>默认值：0</p>
 */
class DescribeUserGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var array <p>用户组ID列表，用于按ID过滤，单次最多100个；可包含「未分组」虚拟分组 ugrp-ungrouped。</p>
     */
    public $UserGroupIds;

    /**
     * @var array <p>过滤列表。支持：UserGroupName、Status、tag-key、tag:&lt;tag-key&gt;。</p>
     */
    public $Filters;

    /**
     * @var integer <p>本次查询限制的数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var integer <p>本次查询偏移量</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。</p>
     * @param array $UserGroupIds <p>用户组ID列表，用于按ID过滤，单次最多100个；可包含「未分组」虚拟分组 ugrp-ungrouped。</p>
     * @param array $Filters <p>过滤列表。支持：UserGroupName、Status、tag-key、tag:&lt;tag-key&gt;。</p>
     * @param integer $Limit <p>本次查询限制的数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     * @param integer $Offset <p>本次查询偏移量</p><p>默认值：0</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
