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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancePackageList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method array getFilters() 获取InstanceId实例Id，InstanceName实例名称，ResourceId套餐Id，PackageType套餐类型 
 * @method void setFilters(array $Filters) 设置InstanceId实例Id，InstanceName实例名称，ResourceId套餐Id，PackageType套餐类型 
 * @method integer getIsUsed() 获取是否使用：0未使用1已使用
 * @method void setIsUsed(integer $IsUsed) 设置是否使用：0未使用1已使用
 */
class DescribeInstancePackageListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var array InstanceId实例Id，InstanceName实例名称，ResourceId套餐Id，PackageType套餐类型 
     */
    public $Filters;

    /**
     * @var integer 是否使用：0未使用1已使用
     */
    public $IsUsed;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 每页条数
     * @param array $Filters InstanceId实例Id，InstanceName实例名称，ResourceId套餐Id，PackageType套餐类型 
     * @param integer $IsUsed 是否使用：0未使用1已使用
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
                $obj = new ResourceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }
    }
}
