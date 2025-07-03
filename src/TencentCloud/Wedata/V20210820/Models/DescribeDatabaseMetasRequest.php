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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseMetas请求参数结构体
 *
 * @method array getFilters() 获取过滤字段，projectIds/msTypes/createTime/modifiedTime
 * @method void setFilters(array $Filters) 设置过滤字段，projectIds/msTypes/createTime/modifiedTime
 * @method array getOrderFields() 获取排序字段，如name
 * @method void setOrderFields(array $OrderFields) 设置排序字段，如name
 * @method integer getPageSize() 获取pagesize
 * @method void setPageSize(integer $PageSize) 设置pagesize
 * @method integer getPageNumber() 获取pageNumber
 * @method void setPageNumber(integer $PageNumber) 设置pageNumber
 */
class DescribeDatabaseMetasRequest extends AbstractModel
{
    /**
     * @var array 过滤字段，projectIds/msTypes/createTime/modifiedTime
     */
    public $Filters;

    /**
     * @var array 排序字段，如name
     */
    public $OrderFields;

    /**
     * @var integer pagesize
     */
    public $PageSize;

    /**
     * @var integer pageNumber
     */
    public $PageNumber;

    /**
     * @param array $Filters 过滤字段，projectIds/msTypes/createTime/modifiedTime
     * @param array $OrderFields 排序字段，如name
     * @param integer $PageSize pagesize
     * @param integer $PageNumber pageNumber
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

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
