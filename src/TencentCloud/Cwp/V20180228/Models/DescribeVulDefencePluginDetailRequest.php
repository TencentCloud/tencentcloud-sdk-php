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
 * DescribeVulDefencePluginDetail请求参数结构体
 *
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method array getFilters() 获取过滤条件：Keywords: ip或者主机名,Exception，Status精确匹配
 * @method void setFilters(array $Filters) 设置过滤条件：Keywords: ip或者主机名,Exception，Status精确匹配
 * @method integer getOffset() 获取数据偏移
 * @method void setOffset(integer $Offset) 设置数据偏移
 * @method integer getLimit() 获取数据限制
 * @method void setLimit(integer $Limit) 设置数据限制
 */
class DescribeVulDefencePluginDetailRequest extends AbstractModel
{
    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var array 过滤条件：Keywords: ip或者主机名,Exception，Status精确匹配
     */
    public $Filters;

    /**
     * @var integer 数据偏移
     */
    public $Offset;

    /**
     * @var integer 数据限制
     */
    public $Limit;

    /**
     * @param string $Quuid 主机Quuid
     * @param array $Filters 过滤条件：Keywords: ip或者主机名,Exception，Status精确匹配
     * @param integer $Offset 数据偏移
     * @param integer $Limit 数据限制
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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
