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
 * DescribeModelRouters请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件</p><p>支持：ModelRouterName、ModelRouterType、Status、BudgetId、tag-key、tag:&lt;tag-key&gt;。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p><p>支持：ModelRouterName、ModelRouterType、Status、BudgetId、tag-key、tag:&lt;tag-key&gt;。</p>
 * @method integer getLimit() 获取<p>每页数量，1-100，默认 20</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，1-100，默认 20</p>
 * @method array getModelRouterIds() 获取<p>模型路由实例ID列表</p>
 * @method void setModelRouterIds(array $ModelRouterIds) 设置<p>模型路由实例ID列表</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认 0</p>
 */
class DescribeModelRoutersRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件</p><p>支持：ModelRouterName、ModelRouterType、Status、BudgetId、tag-key、tag:&lt;tag-key&gt;。</p>
     */
    public $Filters;

    /**
     * @var integer <p>每页数量，1-100，默认 20</p>
     */
    public $Limit;

    /**
     * @var array <p>模型路由实例ID列表</p>
     */
    public $ModelRouterIds;

    /**
     * @var integer <p>分页偏移量，默认 0</p>
     */
    public $Offset;

    /**
     * @param array $Filters <p>过滤条件</p><p>支持：ModelRouterName、ModelRouterType、Status、BudgetId、tag-key、tag:&lt;tag-key&gt;。</p>
     * @param integer $Limit <p>每页数量，1-100，默认 20</p>
     * @param array $ModelRouterIds <p>模型路由实例ID列表</p>
     * @param integer $Offset <p>分页偏移量，默认 0</p>
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ModelRouterIds",$param) and $param["ModelRouterIds"] !== null) {
            $this->ModelRouterIds = $param["ModelRouterIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
