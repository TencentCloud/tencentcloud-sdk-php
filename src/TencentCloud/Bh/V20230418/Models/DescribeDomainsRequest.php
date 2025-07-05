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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomains请求参数结构体
 *
 * @method integer getLimit() 获取每页条目数量，默认20，最大500
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20，最大500
 * @method array getFilters() 获取过滤数组
 * @method void setFilters(array $Filters) 设置过滤数组
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 */
class DescribeDomainsRequest extends AbstractModel
{
    /**
     * @var integer 每页条目数量，默认20，最大500
     */
    public $Limit;

    /**
     * @var array 过滤数组
     */
    public $Filters;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @param integer $Limit 每页条目数量，默认20，最大500
     * @param array $Filters 过滤数组
     * @param integer $Offset 分页偏移位置，默认值为0
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
    }
}
