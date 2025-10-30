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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelatedTasksByTaskId请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method integer getPageNumber() 获取当前页码，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置当前页码，从1开始
 * @method integer getPageSize() 获取单页大小，最大200
 * @method void setPageSize(integer $PageSize) 设置单页大小，最大200
 * @method string getDependencyDirection() 获取查询直接依赖方向，如UP表示上游、DOWN表示下游
 * @method void setDependencyDirection(string $DependencyDirection) 设置查询直接依赖方向，如UP表示上游、DOWN表示下游
 * @method string getEnvironment() 获取查询开发环境还是生产环境版本，DEV表示开发环境、PROD表示生产环境
 * @method void setEnvironment(string $Environment) 设置查询开发环境还是生产环境版本，DEV表示开发环境、PROD表示生产环境
 * @method string getTaskName() 获取任务名称，模糊搜索
 * @method void setTaskName(string $TaskName) 设置任务名称，模糊搜索
 * @method array getCycleTypeList() 获取任务调度周期,I：分支；H：小时；D：天；W：周；M：月；Y：年；O：一次性。
 * @method void setCycleTypeList(array $CycleTypeList) 设置任务调度周期,I：分支；H：小时；D：天；W：周；M：月；Y：年；O：一次性。
 * @method array getStatusList() 获取任务状态，N：新建； Y：调度中； O：已暂停；F：已下线；INVALID：已失效
 * @method void setStatusList(array $StatusList) 设置任务状态，N：新建； Y：调度中； O：已暂停；F：已下线；INVALID：已失效
 * @method array getOwnerNameList() 获取任务责任人名
 * @method void setOwnerNameList(array $OwnerNameList) 设置任务责任人名
 */
class DescribeRelatedTasksByTaskIdRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var integer 当前页码，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 单页大小，最大200
     */
    public $PageSize;

    /**
     * @var string 查询直接依赖方向，如UP表示上游、DOWN表示下游
     */
    public $DependencyDirection;

    /**
     * @var string 查询开发环境还是生产环境版本，DEV表示开发环境、PROD表示生产环境
     */
    public $Environment;

    /**
     * @var string 任务名称，模糊搜索
     */
    public $TaskName;

    /**
     * @var array 任务调度周期,I：分支；H：小时；D：天；W：周；M：月；Y：年；O：一次性。
     */
    public $CycleTypeList;

    /**
     * @var array 任务状态，N：新建； Y：调度中； O：已暂停；F：已下线；INVALID：已失效
     */
    public $StatusList;

    /**
     * @var array 任务责任人名
     */
    public $OwnerNameList;

    /**
     * @param string $ProjectId 项目Id
     * @param string $TaskId 任务Id
     * @param integer $PageNumber 当前页码，从1开始
     * @param integer $PageSize 单页大小，最大200
     * @param string $DependencyDirection 查询直接依赖方向，如UP表示上游、DOWN表示下游
     * @param string $Environment 查询开发环境还是生产环境版本，DEV表示开发环境、PROD表示生产环境
     * @param string $TaskName 任务名称，模糊搜索
     * @param array $CycleTypeList 任务调度周期,I：分支；H：小时；D：天；W：周；M：月；Y：年；O：一次性。
     * @param array $StatusList 任务状态，N：新建； Y：调度中； O：已暂停；F：已下线；INVALID：已失效
     * @param array $OwnerNameList 任务责任人名
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DependencyDirection",$param) and $param["DependencyDirection"] !== null) {
            $this->DependencyDirection = $param["DependencyDirection"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CycleTypeList",$param) and $param["CycleTypeList"] !== null) {
            $this->CycleTypeList = $param["CycleTypeList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("OwnerNameList",$param) and $param["OwnerNameList"] !== null) {
            $this->OwnerNameList = $param["OwnerNameList"];
        }
    }
}
