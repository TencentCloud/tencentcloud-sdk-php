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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSyncJobs请求参数结构体
 *
 * @method string getJobId() 获取同步任务id，如sync-werwfs23
 * @method void setJobId(string $JobId) 设置同步任务id，如sync-werwfs23
 * @method string getJobName() 获取同步任务名
 * @method void setJobName(string $JobName) 设置同步任务名
 * @method string getOrder() 获取排序字段，可以取值为CreateTime
 * @method void setOrder(string $Order) 设置排序字段，可以取值为CreateTime
 * @method string getOrderSeq() 获取排序方式，升序为ASC，降序为DESC，默认为CreateTime降序
 * @method void setOrderSeq(string $OrderSeq) 设置排序方式，升序为ASC，降序为DESC，默认为CreateTime降序
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回同步任务实例数量，默认20，有效区间[1,100]
 * @method void setLimit(integer $Limit) 设置返回同步任务实例数量，默认20，有效区间[1,100]
 * @method array getStatus() 获取状态集合，如Initialized,CheckPass,Running,ResumableErr,Stopped
 * @method void setStatus(array $Status) 设置状态集合，如Initialized,CheckPass,Running,ResumableErr,Stopped
 * @method string getRunMode() 获取运行模式，如Immediate:立即运行，Timed:定时运行
 * @method void setRunMode(string $RunMode) 设置运行模式，如Immediate:立即运行，Timed:定时运行
 * @method string getJobType() 获取任务类型，如mysql2mysql：msyql同步到mysql
 * @method void setJobType(string $JobType) 设置任务类型，如mysql2mysql：msyql同步到mysql
 * @method string getPayMode() 获取付费类型，PrePay：预付费，PostPay：后付费
 * @method void setPayMode(string $PayMode) 设置付费类型，PrePay：预付费，PostPay：后付费
 * @method array getTagFilters() 获取tag
 * @method void setTagFilters(array $TagFilters) 设置tag
 */
class DescribeSyncJobsRequest extends AbstractModel
{
    /**
     * @var string 同步任务id，如sync-werwfs23
     */
    public $JobId;

    /**
     * @var string 同步任务名
     */
    public $JobName;

    /**
     * @var string 排序字段，可以取值为CreateTime
     */
    public $Order;

    /**
     * @var string 排序方式，升序为ASC，降序为DESC，默认为CreateTime降序
     */
    public $OrderSeq;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回同步任务实例数量，默认20，有效区间[1,100]
     */
    public $Limit;

    /**
     * @var array 状态集合，如Initialized,CheckPass,Running,ResumableErr,Stopped
     */
    public $Status;

    /**
     * @var string 运行模式，如Immediate:立即运行，Timed:定时运行
     */
    public $RunMode;

    /**
     * @var string 任务类型，如mysql2mysql：msyql同步到mysql
     */
    public $JobType;

    /**
     * @var string 付费类型，PrePay：预付费，PostPay：后付费
     */
    public $PayMode;

    /**
     * @var array tag
     */
    public $TagFilters;

    /**
     * @param string $JobId 同步任务id，如sync-werwfs23
     * @param string $JobName 同步任务名
     * @param string $Order 排序字段，可以取值为CreateTime
     * @param string $OrderSeq 排序方式，升序为ASC，降序为DESC，默认为CreateTime降序
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回同步任务实例数量，默认20，有效区间[1,100]
     * @param array $Status 状态集合，如Initialized,CheckPass,Running,ResumableErr,Stopped
     * @param string $RunMode 运行模式，如Immediate:立即运行，Timed:定时运行
     * @param string $JobType 任务类型，如mysql2mysql：msyql同步到mysql
     * @param string $PayMode 付费类型，PrePay：预付费，PostPay：后付费
     * @param array $TagFilters tag
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderSeq",$param) and $param["OrderSeq"] !== null) {
            $this->OrderSeq = $param["OrderSeq"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
