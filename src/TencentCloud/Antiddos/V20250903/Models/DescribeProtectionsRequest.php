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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProtections请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件。<p><code>Filters</code> 数组的元素个数上限为 20。不填写该参数时，返回当前账号下有权限的全部防护实例。</p><p>支持的过滤字段：</p><ul><li><code>Name</code>：按防护实例名称过滤。</li><li><code>ProtectionId</code>：按防护实例 ID 过滤。</li><li><code>ProtectionLevel</code>：按防护实例级别过滤。可选项：<ul><li><code>advanced</code>：增强防护。</li><li><code>ultimate</code>：卓越防护。</li></ul></li><li><code>Status</code>：按防护实例状态过滤。可选项：<ul><li><code>protecting</code>：防护中。</li><li><code>processing</code>：变更中。</li><li><code>disabling</code>：隔离中或删除中。</li><li><code>disabled</code>：已隔离。</li></ul></li><li><code>TagKey</code>：按标签键过滤。</li><li><code>TagValue</code>：按标签值过滤。</li></ul><p>模糊查询时支持过滤字段名包括 <code>Name</code>、<code>ProtectionId</code>、<code>ProtectionLevel</code>、<code>Status</code>、<code>TagKey</code>、<code>TagValue</code>。</p></p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。<p><code>Filters</code> 数组的元素个数上限为 20。不填写该参数时，返回当前账号下有权限的全部防护实例。</p><p>支持的过滤字段：</p><ul><li><code>Name</code>：按防护实例名称过滤。</li><li><code>ProtectionId</code>：按防护实例 ID 过滤。</li><li><code>ProtectionLevel</code>：按防护实例级别过滤。可选项：<ul><li><code>advanced</code>：增强防护。</li><li><code>ultimate</code>：卓越防护。</li></ul></li><li><code>Status</code>：按防护实例状态过滤。可选项：<ul><li><code>protecting</code>：防护中。</li><li><code>processing</code>：变更中。</li><li><code>disabling</code>：隔离中或删除中。</li><li><code>disabled</code>：已隔离。</li></ul></li><li><code>TagKey</code>：按标签键过滤。</li><li><code>TagValue</code>：按标签值过滤。</li></ul><p>模糊查询时支持过滤字段名包括 <code>Name</code>、<code>ProtectionId</code>、<code>ProtectionLevel</code>、<code>Status</code>、<code>TagKey</code>、<code>TagValue</code>。</p></p>
 * @method integer getOffset() 获取<p>分页查询偏移量。默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量。默认值：0。</p>
 * @method integer getLimit() 获取<p>分页查询限制数目。默认值：20，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目。默认值：20，最大值：100。</p>
 */
class DescribeProtectionsRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件。<p><code>Filters</code> 数组的元素个数上限为 20。不填写该参数时，返回当前账号下有权限的全部防护实例。</p><p>支持的过滤字段：</p><ul><li><code>Name</code>：按防护实例名称过滤。</li><li><code>ProtectionId</code>：按防护实例 ID 过滤。</li><li><code>ProtectionLevel</code>：按防护实例级别过滤。可选项：<ul><li><code>advanced</code>：增强防护。</li><li><code>ultimate</code>：卓越防护。</li></ul></li><li><code>Status</code>：按防护实例状态过滤。可选项：<ul><li><code>protecting</code>：防护中。</li><li><code>processing</code>：变更中。</li><li><code>disabling</code>：隔离中或删除中。</li><li><code>disabled</code>：已隔离。</li></ul></li><li><code>TagKey</code>：按标签键过滤。</li><li><code>TagValue</code>：按标签值过滤。</li></ul><p>模糊查询时支持过滤字段名包括 <code>Name</code>、<code>ProtectionId</code>、<code>ProtectionLevel</code>、<code>Status</code>、<code>TagKey</code>、<code>TagValue</code>。</p></p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询偏移量。默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询限制数目。默认值：20，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param array $Filters <p>过滤条件。<p><code>Filters</code> 数组的元素个数上限为 20。不填写该参数时，返回当前账号下有权限的全部防护实例。</p><p>支持的过滤字段：</p><ul><li><code>Name</code>：按防护实例名称过滤。</li><li><code>ProtectionId</code>：按防护实例 ID 过滤。</li><li><code>ProtectionLevel</code>：按防护实例级别过滤。可选项：<ul><li><code>advanced</code>：增强防护。</li><li><code>ultimate</code>：卓越防护。</li></ul></li><li><code>Status</code>：按防护实例状态过滤。可选项：<ul><li><code>protecting</code>：防护中。</li><li><code>processing</code>：变更中。</li><li><code>disabling</code>：隔离中或删除中。</li><li><code>disabled</code>：已隔离。</li></ul></li><li><code>TagKey</code>：按标签键过滤。</li><li><code>TagValue</code>：按标签值过滤。</li></ul><p>模糊查询时支持过滤字段名包括 <code>Name</code>、<code>ProtectionId</code>、<code>ProtectionLevel</code>、<code>Status</code>、<code>TagKey</code>、<code>TagValue</code>。</p></p>
     * @param integer $Offset <p>分页查询偏移量。默认值：0。</p>
     * @param integer $Limit <p>分页查询限制数目。默认值：20，最大值：100。</p>
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
                $obj = new ProtectionFilter();
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
