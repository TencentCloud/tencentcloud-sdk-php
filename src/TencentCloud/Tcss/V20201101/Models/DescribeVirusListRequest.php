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
 * DescribeVirusList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>FileName - String - 是否必填：否 - 文件名称</li>
<li>FilePath - String - 是否必填：否 - 文件路径</li>
<li>VirusName - String - 是否必填：否 - 病毒名称</li>
<li>ContainerName- String - 是否必填：是 - 容器名称</li>
<li>ContainerId- string - 是否必填：否 - 容器id</li>
<li>ImageName- string - 是否必填：否 - 镜像名称</li>
<li>ImageId- string - 是否必填：否 - 镜像id</li>
<li>IsRealTime- int - 是否必填：否 - 过滤是否实时监控数据</li>
<li>TaskId- string - 是否必填：否 - 任务ID</li>
<li>ContainerNetStatus - String -是否必填: 否 -  容器网络状态筛选 NORMAL ISOLATED ISOLATING RESTORING RESTORE_FAILED</li>
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string -是否必填: 否 - 容器状态 RUNNING PAUSED STOPPED CREATED DESTROYED RESTARTING REMOVING</li>
<li>AutoIsolateMode - string -是否必填: 否 - 隔离方式 MANUAL AUTO</li>
<li>MD5 - string -是否必填: 否 - md5 </li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>FileName - String - 是否必填：否 - 文件名称</li>
<li>FilePath - String - 是否必填：否 - 文件路径</li>
<li>VirusName - String - 是否必填：否 - 病毒名称</li>
<li>ContainerName- String - 是否必填：是 - 容器名称</li>
<li>ContainerId- string - 是否必填：否 - 容器id</li>
<li>ImageName- string - 是否必填：否 - 镜像名称</li>
<li>ImageId- string - 是否必填：否 - 镜像id</li>
<li>IsRealTime- int - 是否必填：否 - 过滤是否实时监控数据</li>
<li>TaskId- string - 是否必填：否 - 任务ID</li>
<li>ContainerNetStatus - String -是否必填: 否 -  容器网络状态筛选 NORMAL ISOLATED ISOLATING RESTORING RESTORE_FAILED</li>
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string -是否必填: 否 - 容器状态 RUNNING PAUSED STOPPED CREATED DESTROYED RESTARTING REMOVING</li>
<li>AutoIsolateMode - string -是否必填: 否 - 隔离方式 MANUAL AUTO</li>
<li>MD5 - string -是否必填: 否 - md5 </li>
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 */
class DescribeVirusListRequest extends AbstractModel
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
<li>FileName - String - 是否必填：否 - 文件名称</li>
<li>FilePath - String - 是否必填：否 - 文件路径</li>
<li>VirusName - String - 是否必填：否 - 病毒名称</li>
<li>ContainerName- String - 是否必填：是 - 容器名称</li>
<li>ContainerId- string - 是否必填：否 - 容器id</li>
<li>ImageName- string - 是否必填：否 - 镜像名称</li>
<li>ImageId- string - 是否必填：否 - 镜像id</li>
<li>IsRealTime- int - 是否必填：否 - 过滤是否实时监控数据</li>
<li>TaskId- string - 是否必填：否 - 任务ID</li>
<li>ContainerNetStatus - String -是否必填: 否 -  容器网络状态筛选 NORMAL ISOLATED ISOLATING RESTORING RESTORE_FAILED</li>
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string -是否必填: 否 - 容器状态 RUNNING PAUSED STOPPED CREATED DESTROYED RESTARTING REMOVING</li>
<li>AutoIsolateMode - string -是否必填: 否 - 隔离方式 MANUAL AUTO</li>
<li>MD5 - string -是否必填: 否 - md5 </li>
     */
    public $Filters;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>FileName - String - 是否必填：否 - 文件名称</li>
<li>FilePath - String - 是否必填：否 - 文件路径</li>
<li>VirusName - String - 是否必填：否 - 病毒名称</li>
<li>ContainerName- String - 是否必填：是 - 容器名称</li>
<li>ContainerId- string - 是否必填：否 - 容器id</li>
<li>ImageName- string - 是否必填：否 - 镜像名称</li>
<li>ImageId- string - 是否必填：否 - 镜像id</li>
<li>IsRealTime- int - 是否必填：否 - 过滤是否实时监控数据</li>
<li>TaskId- string - 是否必填：否 - 任务ID</li>
<li>ContainerNetStatus - String -是否必填: 否 -  容器网络状态筛选 NORMAL ISOLATED ISOLATING RESTORING RESTORE_FAILED</li>
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string -是否必填: 否 - 容器状态 RUNNING PAUSED STOPPED CREATED DESTROYED RESTARTING REMOVING</li>
<li>AutoIsolateMode - string -是否必填: 否 - 隔离方式 MANUAL AUTO</li>
<li>MD5 - string -是否必填: 否 - md5 </li>
     * @param string $Order 排序方式
     * @param string $By 排序字段
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
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
