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
 * DescribeReportTaskList请求参数结构体
 *
 * @method integer getPageNum() 获取页码
 * @method void setPageNum(integer $PageNum) 设置页码
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method string getTenantId() 获取租户id
 * @method void setTenantId(string $TenantId) 设置租户id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getJobId() 获取作业id
 * @method void setJobId(string $JobId) 设置作业id
 * @method string getEngineTaskId() 获取引擎任务id
 * @method void setEngineTaskId(string $EngineTaskId) 设置引擎任务id
 * @method string getProductSource() 获取产品模块
 * @method void setProductSource(string $ProductSource) 设置产品模块
 * @method string getOnwerUid() 获取主账号
 * @method void setOnwerUid(string $OnwerUid) 设置主账号
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class DescribeReportTaskListRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNum;

    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var string 租户id
     */
    public $TenantId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 作业id
     */
    public $JobId;

    /**
     * @var string 引擎任务id
     */
    public $EngineTaskId;

    /**
     * @var string 产品模块
     */
    public $ProductSource;

    /**
     * @var string 主账号
     */
    public $OnwerUid;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param integer $PageNum 页码
     * @param integer $PageSize 每页条数
     * @param string $TenantId 租户id
     * @param string $ProjectId 项目id
     * @param string $TaskId 任务id
     * @param string $InstanceId 实例id
     * @param string $JobId 作业id
     * @param string $EngineTaskId 引擎任务id
     * @param string $ProductSource 产品模块
     * @param string $OnwerUid 主账号
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }

        if (array_key_exists("ProductSource",$param) and $param["ProductSource"] !== null) {
            $this->ProductSource = $param["ProductSource"];
        }

        if (array_key_exists("OnwerUid",$param) and $param["OnwerUid"] !== null) {
            $this->OnwerUid = $param["OnwerUid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
