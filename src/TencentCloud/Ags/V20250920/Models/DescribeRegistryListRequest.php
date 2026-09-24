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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegistryList请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页起始偏移，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始偏移，默认 0。</p>
 * @method integer getLimit() 获取<p>分页条数，默认 20，最大 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页条数，默认 20，最大 100。</p>
 * @method array getFilters() 获取<p>过滤条件。Name 支持：<code>name</code>/<code>search</code>（模糊）、<code>archived</code>/<code>status</code>（true/false/all）、<code>tag-key</code> 和 <code>tag:&lt;key&gt;</code>；最多 6 个标签过滤组，每个标签过滤组最多 10 个 Values，同 Key 多值为 OR，不同 Key 为 AND。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。Name 支持：<code>name</code>/<code>search</code>（模糊）、<code>archived</code>/<code>status</code>（true/false/all）、<code>tag-key</code> 和 <code>tag:&lt;key&gt;</code>；最多 6 个标签过滤组，每个标签过滤组最多 10 个 Values，同 Key 多值为 OR，不同 Key 为 AND。</p>
 */
class DescribeRegistryListRequest extends AbstractModel
{
    /**
     * @var integer <p>分页起始偏移，默认 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页条数，默认 20，最大 100。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件。Name 支持：<code>name</code>/<code>search</code>（模糊）、<code>archived</code>/<code>status</code>（true/false/all）、<code>tag-key</code> 和 <code>tag:&lt;key&gt;</code>；最多 6 个标签过滤组，每个标签过滤组最多 10 个 Values，同 Key 多值为 OR，不同 Key 为 AND。</p>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>分页起始偏移，默认 0。</p>
     * @param integer $Limit <p>分页条数，默认 20，最大 100。</p>
     * @param array $Filters <p>过滤条件。Name 支持：<code>name</code>/<code>search</code>（模糊）、<code>archived</code>/<code>status</code>（true/false/all）、<code>tag-key</code> 和 <code>tag:&lt;key&gt;</code>；最多 6 个标签过滤组，每个标签过滤组最多 10 个 Values，同 Key 多值为 OR，不同 Key 为 AND。</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CloudFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
