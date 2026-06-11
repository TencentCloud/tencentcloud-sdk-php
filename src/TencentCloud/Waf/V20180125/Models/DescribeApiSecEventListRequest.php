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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiSecEventList请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method boolean getNeedTotalCount() 获取是否查询数量，默认不查询，为true则进行查询
 * @method void setNeedTotalCount(boolean $NeedTotalCount) 设置是否查询数量，默认不查询，为true则进行查询
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method integer getPageIndex() 获取查询当前的页
 * @method void setPageIndex(integer $PageIndex) 设置查询当前的页
 * @method integer getPageSize() 获取每一页显示多少条数据
 * @method void setPageSize(integer $PageSize) 设置每一页显示多少条数据
 * @method array getSort() 获取排序，第一个元素为排序的key，第二个元素为排序规则，其中1 为升序排列，而-1 是用于降序排列
 * @method void setSort(array $Sort) 设置排序，第一个元素为排序的key，第二个元素为排序规则，其中1 为升序排列，而-1 是用于降序排列
 * @method integer getStartTs() 获取查询开始时间
 * @method void setStartTs(integer $StartTs) 设置查询开始时间
 * @method integer getEndTs() 获取查询结束时间
 * @method void setEndTs(integer $EndTs) 设置查询结束时间
 */
class DescribeApiSecEventListRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var boolean 是否查询数量，默认不查询，为true则进行查询
     */
    public $NeedTotalCount;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var integer 查询当前的页
     */
    public $PageIndex;

    /**
     * @var integer 每一页显示多少条数据
     */
    public $PageSize;

    /**
     * @var array 排序，第一个元素为排序的key，第二个元素为排序规则，其中1 为升序排列，而-1 是用于降序排列
     */
    public $Sort;

    /**
     * @var integer 查询开始时间
     */
    public $StartTs;

    /**
     * @var integer 查询结束时间
     */
    public $EndTs;

    /**
     * @param string $Domain 域名
     * @param boolean $NeedTotalCount 是否查询数量，默认不查询，为true则进行查询
     * @param array $Filters 过滤条件
     * @param integer $PageIndex 查询当前的页
     * @param integer $PageSize 每一页显示多少条数据
     * @param array $Sort 排序，第一个元素为排序的key，第二个元素为排序规则，其中1 为升序排列，而-1 是用于降序排列
     * @param integer $StartTs 查询开始时间
     * @param integer $EndTs 查询结束时间
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("NeedTotalCount",$param) and $param["NeedTotalCount"] !== null) {
            $this->NeedTotalCount = $param["NeedTotalCount"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ApiDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("StartTs",$param) and $param["StartTs"] !== null) {
            $this->StartTs = $param["StartTs"];
        }

        if (array_key_exists("EndTs",$param) and $param["EndTs"] !== null) {
            $this->EndTs = $param["EndTs"];
        }
    }
}
