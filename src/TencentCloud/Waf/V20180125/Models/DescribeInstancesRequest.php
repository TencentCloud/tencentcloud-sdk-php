<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取容量
 * @method void setLimit(integer $Limit) 设置容量
 * @method array getFilters() 获取过滤数组
 * @method void setFilters(array $Filters) 设置过滤数组
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 容量
     */
    public $Limit;

    /**
     * @var array 过滤数组
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移
     * @param integer $Limit 容量
     * @param array $Filters 过滤数组
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
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
