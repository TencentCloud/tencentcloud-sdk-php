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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTasks请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认为1
 * @method integer getPageSize() 获取每页数量，默认为10
 * @method void setPageSize(integer $PageSize) 设置每页数量，默认为10
 * @method string getOperation() 获取默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，对应任务的Action字段，批量任务操作类型以Batch开头。目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，DeleteUserDevice，DisableDevice，EnableDevice
 * @method void setOperation(string $Operation) 设置默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，对应任务的Action字段，批量任务操作类型以Batch开头。目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，DeleteUserDevice，DisableDevice，EnableDevice
 * @method integer getStatus() 获取默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-NEW，2-RUNNING，3-COMPLETED，4-FAILED
 * @method void setStatus(integer $Status) 设置默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-NEW，2-RUNNING，3-COMPLETED，4-FAILED
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var integer 页码，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页数量，默认为10
     */
    public $PageSize;

    /**
     * @var string 默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，对应任务的Action字段，批量任务操作类型以Batch开头。目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，DeleteUserDevice，DisableDevice，EnableDevice
     */
    public $Operation;

    /**
     * @var integer 默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-NEW，2-RUNNING，3-COMPLETED，4-FAILED
     */
    public $Status;

    /**
     * @param integer $PageNumber 页码，默认为1
     * @param integer $PageSize 每页数量，默认为10
     * @param string $Operation 默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，对应任务的Action字段，批量任务操作类型以Batch开头。目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，DeleteUserDevice，DisableDevice，EnableDevice
     * @param integer $Status 默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-NEW，2-RUNNING，3-COMPLETED，4-FAILED
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
