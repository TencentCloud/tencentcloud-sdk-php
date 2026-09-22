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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGraphs请求参数结构体
 *
 * @method array getFilters() 获取<ul><li>ResourceGraphId 按【资源图谱 ID】精确匹配。类型：String。必选：否</li><li>Name 按【资源图谱名称】模糊匹配。类型：String。必选：否</li><li>Status 按【状态】模糊匹配。类型：int。必选：否；0：初始化中；1：就绪；2：创建失败；3：删除中；5：删除失败</li><li>tagKey 按照【标签键】进行过滤。类型：String。必选：否</li><li>tag:tagKey 按照【标签键值对】进行过滤。tagKey 使用具体的标签键进行替换，例如 tag:exampleKey。类型：String。必选：否</li></ul>注意：每次请求的 Filters 上限 10，Filter.Values 上限 100。
 * @method void setFilters(array $Filters) 设置<ul><li>ResourceGraphId 按【资源图谱 ID】精确匹配。类型：String。必选：否</li><li>Name 按【资源图谱名称】模糊匹配。类型：String。必选：否</li><li>Status 按【状态】模糊匹配。类型：int。必选：否；0：初始化中；1：就绪；2：创建失败；3：删除中；5：删除失败</li><li>tagKey 按照【标签键】进行过滤。类型：String。必选：否</li><li>tag:tagKey 按照【标签键值对】进行过滤。tagKey 使用具体的标签键进行替换，例如 tag:exampleKey。类型：String。必选：否</li></ul>注意：每次请求的 Filters 上限 10，Filter.Values 上限 100。
 * @method integer getOffset() 获取<p>分页偏移量</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量</p><p>默认值：0</p>
 * @method integer getLimit() 获取<p>分页单页数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 */
class DescribeResourceGraphsRequest extends AbstractModel
{
    /**
     * @var array <ul><li>ResourceGraphId 按【资源图谱 ID】精确匹配。类型：String。必选：否</li><li>Name 按【资源图谱名称】模糊匹配。类型：String。必选：否</li><li>Status 按【状态】模糊匹配。类型：int。必选：否；0：初始化中；1：就绪；2：创建失败；3：删除中；5：删除失败</li><li>tagKey 按照【标签键】进行过滤。类型：String。必选：否</li><li>tag:tagKey 按照【标签键值对】进行过滤。tagKey 使用具体的标签键进行替换，例如 tag:exampleKey。类型：String。必选：否</li></ul>注意：每次请求的 Filters 上限 10，Filter.Values 上限 100。
     */
    public $Filters;

    /**
     * @var integer <p>分页偏移量</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @param array $Filters <ul><li>ResourceGraphId 按【资源图谱 ID】精确匹配。类型：String。必选：否</li><li>Name 按【资源图谱名称】模糊匹配。类型：String。必选：否</li><li>Status 按【状态】模糊匹配。类型：int。必选：否；0：初始化中；1：就绪；2：创建失败；3：删除中；5：删除失败</li><li>tagKey 按照【标签键】进行过滤。类型：String。必选：否</li><li>tag:tagKey 按照【标签键值对】进行过滤。tagKey 使用具体的标签键进行替换，例如 tag:exampleKey。类型：String。必选：否</li></ul>注意：每次请求的 Filters 上限 10，Filter.Values 上限 100。
     * @param integer $Offset <p>分页偏移量</p><p>默认值：0</p>
     * @param integer $Limit <p>分页单页数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
