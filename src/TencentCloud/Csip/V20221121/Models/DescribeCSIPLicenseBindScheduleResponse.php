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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCSIPLicenseBindSchedule返回参数结构体
 *
 * @method integer getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务ID</p>
 * @method string getStatus() 获取<p>任务状态：INIT-初始化 / RUNNING-进行中 / DONE-已完成 / FAILED-已失败</p>
 * @method void setStatus(string $Status) 设置<p>任务状态：INIT-初始化 / RUNNING-进行中 / DONE-已完成 / FAILED-已失败</p>
 * @method integer getSchedule() 获取<p>进度百分比 0-100</p>
 * @method void setSchedule(integer $Schedule) 设置<p>进度百分比 0-100</p>
 * @method integer getTotal() 获取<p>全部机器数（不受过滤影响）</p>
 * @method void setTotal(integer $Total) 设置<p>全部机器数（不受过滤影响）</p>
 * @method integer getSuccessNum() 获取<p>成功数</p>
 * @method void setSuccessNum(integer $SuccessNum) 设置<p>成功数</p>
 * @method integer getFailedNum() 获取<p>失败数</p>
 * @method void setFailedNum(integer $FailedNum) 设置<p>失败数</p>
 * @method array getFailedList() 获取<p>失败明细（全量，含机器额外信息）</p>
 * @method void setFailedList(array $FailedList) 设置<p>失败明细（全量，含机器额外信息）</p>
 * @method array getList() 获取<p>逐机器明细（受 Filters + 分页影响）</p>
 * @method void setList(array $List) 设置<p>逐机器明细（受 Filters + 分页影响）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCSIPLicenseBindScheduleResponse extends AbstractModel
{
    /**
     * @var integer <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态：INIT-初始化 / RUNNING-进行中 / DONE-已完成 / FAILED-已失败</p>
     */
    public $Status;

    /**
     * @var integer <p>进度百分比 0-100</p>
     */
    public $Schedule;

    /**
     * @var integer <p>全部机器数（不受过滤影响）</p>
     */
    public $Total;

    /**
     * @var integer <p>成功数</p>
     */
    public $SuccessNum;

    /**
     * @var integer <p>失败数</p>
     */
    public $FailedNum;

    /**
     * @var array <p>失败明细（全量，含机器额外信息）</p>
     */
    public $FailedList;

    /**
     * @var array <p>逐机器明细（受 Filters + 分页影响）</p>
     */
    public $List;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId <p>任务ID</p>
     * @param string $Status <p>任务状态：INIT-初始化 / RUNNING-进行中 / DONE-已完成 / FAILED-已失败</p>
     * @param integer $Schedule <p>进度百分比 0-100</p>
     * @param integer $Total <p>全部机器数（不受过滤影响）</p>
     * @param integer $SuccessNum <p>成功数</p>
     * @param integer $FailedNum <p>失败数</p>
     * @param array $FailedList <p>失败明细（全量，含机器额外信息）</p>
     * @param array $List <p>逐机器明细（受 Filters + 分页影响）</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SuccessNum",$param) and $param["SuccessNum"] !== null) {
            $this->SuccessNum = $param["SuccessNum"];
        }

        if (array_key_exists("FailedNum",$param) and $param["FailedNum"] !== null) {
            $this->FailedNum = $param["FailedNum"];
        }

        if (array_key_exists("FailedList",$param) and $param["FailedList"] !== null) {
            $this->FailedList = [];
            foreach ($param["FailedList"] as $key => $value){
                $obj = new LicenseBindFailedItem();
                $obj->deserialize($value);
                array_push($this->FailedList, $obj);
            }
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new LicenseBindScheduleItem();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
