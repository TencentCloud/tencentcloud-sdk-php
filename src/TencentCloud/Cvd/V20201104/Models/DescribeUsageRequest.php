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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsage请求参数结构体
 *
 * @method integer getStartTime() 获取查询起始时间，最小不能超过当前时间 90 天前，取 unix 时间戳
 * @method void setStartTime(integer $StartTime) 设置查询起始时间，最小不能超过当前时间 90 天前，取 unix 时间戳
 * @method integer getEndTime() 获取查询截止时间，取 unix 时间戳
 * @method void setEndTime(integer $EndTime) 设置查询截止时间，取 unix 时间戳
 * @method integer getPageSize() 获取每页查询信息条数，默认 20，最大 100
 * @method void setPageSize(integer $PageSize) 设置每页查询信息条数，默认 20，最大 100
 * @method integer getPageNumber() 获取页号，起始页为 1，不填默认为 1
 * @method void setPageNumber(integer $PageNumber) 设置页号，起始页为 1，不填默认为 1
 * @method string getQueryKey() 获取查询key，每次查询会返回
 * @method void setQueryKey(string $QueryKey) 设置查询key，每次查询会返回
 * @method array getFilters() 获取查询条件，Name可选为：
InstanceId按照实例ID搜索
UserName按照绑定的用户搜索，只取Values的第一个值
ChareType按照计费类型搜索
InstanceType按照实例类型搜索
 * @method void setFilters(array $Filters) 设置查询条件，Name可选为：
InstanceId按照实例ID搜索
UserName按照绑定的用户搜索，只取Values的第一个值
ChareType按照计费类型搜索
InstanceType按照实例类型搜索
 * @method integer getSortType() 获取指定的排序方式，默认不排序
1:使用时间，升序
2:使用时间，降序
3:空闲时间，升序
4:空闲时间，降序
 * @method void setSortType(integer $SortType) 设置指定的排序方式，默认不排序
1:使用时间，升序
2:使用时间，降序
3:空闲时间，升序
4:空闲时间，降序
 */
class DescribeUsageRequest extends AbstractModel
{
    /**
     * @var integer 查询起始时间，最小不能超过当前时间 90 天前，取 unix 时间戳
     */
    public $StartTime;

    /**
     * @var integer 查询截止时间，取 unix 时间戳
     */
    public $EndTime;

    /**
     * @var integer 每页查询信息条数，默认 20，最大 100
     */
    public $PageSize;

    /**
     * @var integer 页号，起始页为 1，不填默认为 1
     */
    public $PageNumber;

    /**
     * @var string 查询key，每次查询会返回
     */
    public $QueryKey;

    /**
     * @var array 查询条件，Name可选为：
InstanceId按照实例ID搜索
UserName按照绑定的用户搜索，只取Values的第一个值
ChareType按照计费类型搜索
InstanceType按照实例类型搜索
     */
    public $Filters;

    /**
     * @var integer 指定的排序方式，默认不排序
1:使用时间，升序
2:使用时间，降序
3:空闲时间，升序
4:空闲时间，降序
     */
    public $SortType;

    /**
     * @param integer $StartTime 查询起始时间，最小不能超过当前时间 90 天前，取 unix 时间戳
     * @param integer $EndTime 查询截止时间，取 unix 时间戳
     * @param integer $PageSize 每页查询信息条数，默认 20，最大 100
     * @param integer $PageNumber 页号，起始页为 1，不填默认为 1
     * @param string $QueryKey 查询key，每次查询会返回
     * @param array $Filters 查询条件，Name可选为：
InstanceId按照实例ID搜索
UserName按照绑定的用户搜索，只取Values的第一个值
ChareType按照计费类型搜索
InstanceType按照实例类型搜索
     * @param integer $SortType 指定的排序方式，默认不排序
1:使用时间，升序
2:使用时间，降序
3:空闲时间，升序
4:空闲时间，降序
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("QueryKey",$param) and $param["QueryKey"] !== null) {
            $this->QueryKey = $param["QueryKey"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
