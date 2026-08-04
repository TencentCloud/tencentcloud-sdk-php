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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePartitionQueues请求参数结构体
 *
 * @method string getPartitionCode() 获取分区编码
 * @method void setPartitionCode(string $PartitionCode) 设置分区编码
 * @method array getSortFields() 获取排序字段列表
 * @method void setSortFields(array $SortFields) 设置排序字段列表
 * @method array getFilters() 获取筛选条件列表
 * @method void setFilters(array $Filters) 设置筛选条件列表
 * @method integer getPage() 获取页码
 * @method void setPage(integer $Page) 设置页码
 * @method integer getPageSize() 获取每页返回数量
 * @method void setPageSize(integer $PageSize) 设置每页返回数量
 */
class DescribePartitionQueuesRequest extends AbstractModel
{
    /**
     * @var string 分区编码
     */
    public $PartitionCode;

    /**
     * @var array 排序字段列表
     */
    public $SortFields;

    /**
     * @var array 筛选条件列表
     */
    public $Filters;

    /**
     * @var integer 页码
     */
    public $Page;

    /**
     * @var integer 每页返回数量
     */
    public $PageSize;

    /**
     * @param string $PartitionCode 分区编码
     * @param array $SortFields 排序字段列表
     * @param array $Filters 筛选条件列表
     * @param integer $Page 页码
     * @param integer $PageSize 每页返回数量
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
        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = [];
            foreach ($param["SortFields"] as $key => $value){
                $obj = new SortField();
                $obj->deserialize($value);
                array_push($this->SortFields, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
