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
 * @method integer getPageSize() 获取每页数量，默认为20
 * @method void setPageSize(integer $PageSize) 设置每页数量，默认为20
 * @method string getOperation() 获取默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，
BatchUpgradeDevice，
BatchResetDevice,
BatchRebootDevice
 * @method void setOperation(string $Operation) 设置默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，
BatchUpgradeDevice，
BatchResetDevice,
BatchRebootDevice
 * @method integer getStatus() 获取默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-未执行，2-执行中，3-完成，4-取消
 * @method void setStatus(integer $Status) 设置默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-未执行，2-执行中，3-完成，4-取消
 * @method integer getBeginTime() 获取开始时间
 * @method void setBeginTime(integer $BeginTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var integer 页码，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页数量，默认为20
     */
    public $PageSize;

    /**
     * @var string 默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，
BatchUpgradeDevice，
BatchResetDevice,
BatchRebootDevice
     */
    public $Operation;

    /**
     * @var integer 默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-未执行，2-执行中，3-完成，4-取消
     */
    public $Status;

    /**
     * @var integer 开始时间
     */
    public $BeginTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @param integer $PageNumber 页码，默认为1
     * @param integer $PageSize 每页数量，默认为20
     * @param string $Operation 默认不根据该字段进行筛选，否则根据设备操作类型进行筛选，目前值有：BatchDeleteUserDevice，BatchDisableDevice，BatchEnableDevice，
BatchUpgradeDevice，
BatchResetDevice,
BatchRebootDevice
     * @param integer $Status 默认不根据该字段进行筛选，否则根据任务状态进行筛选。状态码：1-未执行，2-执行中，3-完成，4-取消
     * @param integer $BeginTime 开始时间
     * @param integer $EndTime 结束时间
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
