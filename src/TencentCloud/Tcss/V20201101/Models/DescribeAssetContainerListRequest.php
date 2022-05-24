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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetContainerList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>ContainerName - String - 是否必填：否 - 容器名称模糊搜索</li>
<li>Status - String - 是否必填：否 - 容器运行状态筛选，0："created",1："running", 2："paused", 3："restarting", 4："removing", 5："exited", 6："dead" </li>
<li>Runas - String - 是否必填：否 - 运行用户筛选</li>
<li>ImageName- String - 是否必填：否 - 镜像名称搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>OrderBy - String 是否必填：否 -排序字段，支持：cpu_usage, mem_usage的动态排序 ["cpu_usage","+"]  '+'升序、'-'降序</li>
<li>NetStatus - String -是否必填: 否 -  容器网络状态筛选 normal isolated isolating isolate_failed restoring restore_failed</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>ContainerName - String - 是否必填：否 - 容器名称模糊搜索</li>
<li>Status - String - 是否必填：否 - 容器运行状态筛选，0："created",1："running", 2："paused", 3："restarting", 4："removing", 5："exited", 6："dead" </li>
<li>Runas - String - 是否必填：否 - 运行用户筛选</li>
<li>ImageName- String - 是否必填：否 - 镜像名称搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>OrderBy - String 是否必填：否 -排序字段，支持：cpu_usage, mem_usage的动态排序 ["cpu_usage","+"]  '+'升序、'-'降序</li>
<li>NetStatus - String -是否必填: 否 -  容器网络状态筛选 normal isolated isolating isolate_failed restoring restore_failed</li>
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式 asc,desc
 * @method void setOrder(string $Order) 设置排序方式 asc,desc
 */
class DescribeAssetContainerListRequest extends AbstractModel
{
    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>ContainerName - String - 是否必填：否 - 容器名称模糊搜索</li>
<li>Status - String - 是否必填：否 - 容器运行状态筛选，0："created",1："running", 2："paused", 3："restarting", 4："removing", 5："exited", 6："dead" </li>
<li>Runas - String - 是否必填：否 - 运行用户筛选</li>
<li>ImageName- String - 是否必填：否 - 镜像名称搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>OrderBy - String 是否必填：否 -排序字段，支持：cpu_usage, mem_usage的动态排序 ["cpu_usage","+"]  '+'升序、'-'降序</li>
<li>NetStatus - String -是否必填: 否 -  容器网络状态筛选 normal isolated isolating isolate_failed restoring restore_failed</li>
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式 asc,desc
     */
    public $Order;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>ContainerName - String - 是否必填：否 - 容器名称模糊搜索</li>
<li>Status - String - 是否必填：否 - 容器运行状态筛选，0："created",1："running", 2："paused", 3："restarting", 4："removing", 5："exited", 6："dead" </li>
<li>Runas - String - 是否必填：否 - 运行用户筛选</li>
<li>ImageName- String - 是否必填：否 - 镜像名称搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>OrderBy - String 是否必填：否 -排序字段，支持：cpu_usage, mem_usage的动态排序 ["cpu_usage","+"]  '+'升序、'-'降序</li>
<li>NetStatus - String -是否必填: 否 -  容器网络状态筛选 normal isolated isolating isolate_failed restoring restore_failed</li>
     * @param string $By 排序字段
     * @param string $Order 排序方式 asc,desc
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
