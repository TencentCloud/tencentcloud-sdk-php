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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostsCertificate请求参数结构体
 *
 * @method string getZoneId() 获取Zone ID
 * @method void setZoneId(string $ZoneId) 设置Zone ID
 * @method integer getOffset() 获取分页查询偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0
 * @method integer getLimit() 获取分页查询限制数目，默认为 100，最大可设置为 1000
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为 100，最大可设置为 1000
 * @method array getFilters() 获取查询条件过滤器
 * @method void setFilters(array $Filters) 设置查询条件过滤器
 * @method CertSort getSort() 获取排序方式
 * @method void setSort(CertSort $Sort) 设置排序方式
 */
class DescribeHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string Zone ID
     */
    public $ZoneId;

    /**
     * @var integer 分页查询偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认为 100，最大可设置为 1000
     */
    public $Limit;

    /**
     * @var array 查询条件过滤器
     */
    public $Filters;

    /**
     * @var CertSort 排序方式
     */
    public $Sort;

    /**
     * @param string $ZoneId Zone ID
     * @param integer $Offset 分页查询偏移量，默认为 0
     * @param integer $Limit 分页查询限制数目，默认为 100，最大可设置为 1000
     * @param array $Filters 查询条件过滤器
     * @param CertSort $Sort 排序方式
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
                $obj = new CertFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new CertSort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
