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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataRetrieval请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量，默认值为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值为 0。</p>
 * @method integer getLimit() 获取<p>分页单页限制数目，默认值为 20，最大值为 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页限制数目，默认值为 20，最大值为 100。</p>
 * @method array getFilters() 获取<p>过滤条件列表。支持的过滤字段：FileSystemId（文件系统 ID）、DataRetrievalId（数据检索 ID）、Name（数据检索名称，支持模糊搜索）。最多支持 10 个。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件列表。支持的过滤字段：FileSystemId（文件系统 ID）、DataRetrievalId（数据检索 ID）、Name（数据检索名称，支持模糊搜索）。最多支持 10 个。</p>
 */
class DescribeDataRetrievalRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量，默认值为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页限制数目，默认值为 20，最大值为 100。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件列表。支持的过滤字段：FileSystemId（文件系统 ID）、DataRetrievalId（数据检索 ID）、Name（数据检索名称，支持模糊搜索）。最多支持 10 个。</p>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>分页偏移量，默认值为 0。</p>
     * @param integer $Limit <p>分页单页限制数目，默认值为 20，最大值为 100。</p>
     * @param array $Filters <p>过滤条件列表。支持的过滤字段：FileSystemId（文件系统 ID）、DataRetrievalId（数据检索 ID）、Name（数据检索名称，支持模糊搜索）。最多支持 10 个。</p>
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
