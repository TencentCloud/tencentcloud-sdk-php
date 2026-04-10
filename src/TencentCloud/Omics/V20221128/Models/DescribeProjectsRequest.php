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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method integer getLimit() 获取<p>翻页入参</p>
 * @method void setLimit(integer $Limit) 设置<p>翻页入参</p>
 * @method integer getOffset() 获取<p>翻页入参</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页入参</p>
 * @method array getFilters() 获取<p>过滤器，支持过滤字段：</p><ul><li>Name：项目名称</li><li>ProjectId：项目ID</li><li>Region：地域</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤器，支持过滤字段：</p><ul><li>Name：项目名称</li><li>ProjectId：项目ID</li><li>Region：地域</li></ul>
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer <p>翻页入参</p>
     */
    public $Limit;

    /**
     * @var integer <p>翻页入参</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤器，支持过滤字段：</p><ul><li>Name：项目名称</li><li>ProjectId：项目ID</li><li>Region：地域</li></ul>
     */
    public $Filters;

    /**
     * @param integer $Limit <p>翻页入参</p>
     * @param integer $Offset <p>翻页入参</p>
     * @param array $Filters <p>过滤器，支持过滤字段：</p><ul><li>Name：项目名称</li><li>ProjectId：项目ID</li><li>Region：地域</li></ul>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
