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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRaspRuleVuls请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。Name=WhiteType的必选，0：表示自定义范围的漏洞列表，1：表示全部请求范围的列表
 * @method void setFilters(array $Filters) 设置过滤条件。Name=WhiteType的必选，0：表示自定义范围的漏洞列表，1：表示全部请求范围的列表
 * @method integer getLimit() 获取返回数量，默认为10，最大值为1000。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为1000。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 */
class DescribeRaspRuleVulsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。Name=WhiteType的必选，0：表示自定义范围的漏洞列表，1：表示全部请求范围的列表
     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为10，最大值为1000。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @param array $Filters 过滤条件。Name=WhiteType的必选，0：表示自定义范围的漏洞列表，1：表示全部请求范围的列表
     * @param integer $Limit 返回数量，默认为10，最大值为1000。
     * @param integer $Offset 偏移量，默认为0。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
