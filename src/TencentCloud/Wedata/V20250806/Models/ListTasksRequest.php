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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTasks请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取请求的数据页数。默认值为1，取值大于等于1
 * @method void setPageNumber(integer $PageNumber) 设置请求的数据页数。默认值为1，取值大于等于1
 * @method integer getPageSize() 获取每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
 * @method void setPageSize(integer $PageSize) 设置每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getWorkflowId() 获取所属工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置所属工作流ID
 * @method string getOwnerUin() 获取责任人ID
 * @method void setOwnerUin(string $OwnerUin) 设置责任人ID
 * @method integer getTaskTypeId() 获取任务类型
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型
 * @method string getStatus() 获取任务状态
* N: 新建 
* Y: 调度中 
* F: 已下线 
* O: 已暂停 
* T: 下线中 
* INVALID: 已失效
 * @method void setStatus(string $Status) 设置任务状态
* N: 新建 
* Y: 调度中 
* F: 已下线 
* O: 已暂停 
* T: 下线中 
* INVALID: 已失效
 * @method boolean getSubmit() 获取提交状态
 * @method void setSubmit(boolean $Submit) 设置提交状态
 * @method string getBundleId() 获取BundleId信息
 * @method void setBundleId(string $BundleId) 设置BundleId信息
 * @method string getCreateUserUin() 获取创建人ID
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
 * @method array getModifyTime() 获取修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 * @method void setModifyTime(array $ModifyTime) 设置修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 * @method array getCreateTime() 获取创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 * @method void setCreateTime(array $CreateTime) 设置创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 请求的数据页数。默认值为1，取值大于等于1
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
     */
    public $PageSize;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 所属工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 责任人ID
     */
    public $OwnerUin;

    /**
     * @var integer 任务类型
     */
    public $TaskTypeId;

    /**
     * @var string 任务状态
* N: 新建 
* Y: 调度中 
* F: 已下线 
* O: 已暂停 
* T: 下线中 
* INVALID: 已失效
     */
    public $Status;

    /**
     * @var boolean 提交状态
     */
    public $Submit;

    /**
     * @var string BundleId信息
     */
    public $BundleId;

    /**
     * @var string 创建人ID
     */
    public $CreateUserUin;

    /**
     * @var array 修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
     */
    public $ModifyTime;

    /**
     * @var array 创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
     */
    public $CreateTime;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 请求的数据页数。默认值为1，取值大于等于1
     * @param integer $PageSize 每页显示的数据条数。默认值为10 ，最小值为10，最大值为200
     * @param string $TaskName 任务名称
     * @param string $WorkflowId 所属工作流ID
     * @param string $OwnerUin 责任人ID
     * @param integer $TaskTypeId 任务类型
     * @param string $Status 任务状态
* N: 新建 
* Y: 调度中 
* F: 已下线 
* O: 已暂停 
* T: 下线中 
* INVALID: 已失效
     * @param boolean $Submit 提交状态
     * @param string $BundleId BundleId信息
     * @param string $CreateUserUin 创建人ID
     * @param array $ModifyTime 修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
     * @param array $CreateTime 创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
