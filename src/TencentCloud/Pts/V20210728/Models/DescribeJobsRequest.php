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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobs请求参数结构体
 *
 * @method array getScenarioIds() 获取场景ID数组
 * @method void setScenarioIds(array $ScenarioIds) 设置场景ID数组
 * @method array getProjectIds() 获取项目ID数组
 * @method void setProjectIds(array $ProjectIds) 设置项目ID数组
 * @method integer getOffset() 获取分页起始位置
 * @method void setOffset(integer $Offset) 设置分页起始位置
 * @method integer getLimit() 获取每页最大数目
 * @method void setLimit(integer $Limit) 设置每页最大数目
 * @method array getJobIds() 获取任务ID数组
 * @method void setJobIds(array $JobIds) 设置任务ID数组
 * @method string getOrderBy() 获取按字段排序
 * @method void setOrderBy(string $OrderBy) 设置按字段排序
 * @method boolean getAscend() 获取升序/降序
 * @method void setAscend(boolean $Ascend) 设置升序/降序
 * @method string getStartTime() 获取任务开始时间
 * @method void setStartTime(string $StartTime) 设置任务开始时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method boolean getDebug() 获取调试任务标记
 * @method void setDebug(boolean $Debug) 设置调试任务标记
 * @method array getStatus() 获取任务的状态
 * @method void setStatus(array $Status) 设置任务的状态
 */
class DescribeJobsRequest extends AbstractModel
{
    /**
     * @var array 场景ID数组
     */
    public $ScenarioIds;

    /**
     * @var array 项目ID数组
     */
    public $ProjectIds;

    /**
     * @var integer 分页起始位置
     */
    public $Offset;

    /**
     * @var integer 每页最大数目
     */
    public $Limit;

    /**
     * @var array 任务ID数组
     */
    public $JobIds;

    /**
     * @var string 按字段排序
     */
    public $OrderBy;

    /**
     * @var boolean 升序/降序
     */
    public $Ascend;

    /**
     * @var string 任务开始时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var boolean 调试任务标记
     */
    public $Debug;

    /**
     * @var array 任务的状态
     */
    public $Status;

    /**
     * @param array $ScenarioIds 场景ID数组
     * @param array $ProjectIds 项目ID数组
     * @param integer $Offset 分页起始位置
     * @param integer $Limit 每页最大数目
     * @param array $JobIds 任务ID数组
     * @param string $OrderBy 按字段排序
     * @param boolean $Ascend 升序/降序
     * @param string $StartTime 任务开始时间
     * @param string $EndTime 任务结束时间
     * @param boolean $Debug 调试任务标记
     * @param array $Status 任务的状态
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
        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
