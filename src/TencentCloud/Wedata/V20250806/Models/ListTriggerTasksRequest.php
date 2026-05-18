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
 * ListTriggerTasks请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method integer getPageNumber() 获取<p>请求的数据页数。默认值为1，取值大于等于1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>请求的数据页数。默认值为1，取值大于等于1</p>
 * @method integer getPageSize() 获取<p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getWorkflowId() 获取<p>所属工作流ID</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>所属工作流ID</p>
 * @method string getOwnerUin() 获取<p>责任人ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>责任人ID</p>
 * @method integer getTaskTypeId() 获取<p>任务类型</p>
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型</p>
 * @method string getStatus() 获取<p>任务状态</p><ul><li>N: 新建 </li><li>Y: 调度中</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><ul><li>N: 新建 </li><li>Y: 调度中</li></ul>
 * @method boolean getSubmit() 获取<p>提交状态</p>
 * @method void setSubmit(boolean $Submit) 设置<p>提交状态</p>
 * @method string getBundleId() 获取<p>BundleId信息</p>
 * @method void setBundleId(string $BundleId) 设置<p>BundleId信息</p>
 * @method string getCreateUserUin() 获取<p>创建人ID</p>
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人ID</p>
 * @method array getModifyTime() 获取<p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method void setModifyTime(array $ModifyTime) 设置<p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method array getCreateTime() 获取<p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method void setCreateTime(array $CreateTime) 设置<p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
 * @method array getTaskFolderPathList() 获取<p>任务文件夹路径列表，支持多选，从工作流下的目录开始填写，节点类型无需填写。选择上层文件夹时，自动包含所有子文件夹下的任务。 路径格式为绝对路径，如 &quot;/子目录A&quot;，根目录为 &quot;/&quot;</p>
 * @method void setTaskFolderPathList(array $TaskFolderPathList) 设置<p>任务文件夹路径列表，支持多选，从工作流下的目录开始填写，节点类型无需填写。选择上层文件夹时，自动包含所有子文件夹下的任务。 路径格式为绝对路径，如 &quot;/子目录A&quot;，根目录为 &quot;/&quot;</p>
 * @method array getWorkflowFolderPathList() 获取<p>工作流文件夹路径列表，支持多选。选择上层文件夹时，自动包含所有子文件夹下工作流的任务。 路径格式为绝对路径，如 &quot;/数据开发/子目录&quot;，根目录为 &quot;/&quot;</p>
 * @method void setWorkflowFolderPathList(array $WorkflowFolderPathList) 设置<p>工作流文件夹路径列表，支持多选。选择上层文件夹时，自动包含所有子文件夹下工作流的任务。 路径格式为绝对路径，如 &quot;/数据开发/子目录&quot;，根目录为 &quot;/&quot;</p>
 * @method array getTaskNodeTypeList() 获取<p>节点类型列表，用于按任务节点分类筛选，支持多选，可选值参考下面枚举类型 。 传入后将根据这些节点类型包含的任务类型ID列表进行筛选。</p><p>枚举值：</p><ul><li>ETL： 数据集成节点</li><li>EMR： EMR节点</li><li>DLC： DLC节点</li><li>SETATS： SETATS节点</li><li>TDSQL： TDSQL节点</li><li>TCHOUSE： TCHOUSE节点</li><li>GENERAL： 通用节点</li><li>DATA_QUALITY： 数据质量节点</li><li>INDICATOR： 指标节点</li><li>TI_ONE： TI-ONE机器学习节点</li></ul>
 * @method void setTaskNodeTypeList(array $TaskNodeTypeList) 设置<p>节点类型列表，用于按任务节点分类筛选，支持多选，可选值参考下面枚举类型 。 传入后将根据这些节点类型包含的任务类型ID列表进行筛选。</p><p>枚举值：</p><ul><li>ETL： 数据集成节点</li><li>EMR： EMR节点</li><li>DLC： DLC节点</li><li>SETATS： SETATS节点</li><li>TDSQL： TDSQL节点</li><li>TCHOUSE： TCHOUSE节点</li><li>GENERAL： 通用节点</li><li>DATA_QUALITY： 数据质量节点</li><li>INDICATOR： 指标节点</li><li>TI_ONE： TI-ONE机器学习节点</li></ul>
 */
class ListTriggerTasksRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>请求的数据页数。默认值为1，取值大于等于1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
     */
    public $PageSize;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>所属工作流ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>责任人ID</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>任务类型</p>
     */
    public $TaskTypeId;

    /**
     * @var string <p>任务状态</p><ul><li>N: 新建 </li><li>Y: 调度中</li></ul>
     */
    public $Status;

    /**
     * @var boolean <p>提交状态</p>
     */
    public $Submit;

    /**
     * @var string <p>BundleId信息</p>
     */
    public $BundleId;

    /**
     * @var string <p>创建人ID</p>
     */
    public $CreateUserUin;

    /**
     * @var array <p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     */
    public $ModifyTime;

    /**
     * @var array <p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>任务文件夹路径列表，支持多选，从工作流下的目录开始填写，节点类型无需填写。选择上层文件夹时，自动包含所有子文件夹下的任务。 路径格式为绝对路径，如 &quot;/子目录A&quot;，根目录为 &quot;/&quot;</p>
     */
    public $TaskFolderPathList;

    /**
     * @var array <p>工作流文件夹路径列表，支持多选。选择上层文件夹时，自动包含所有子文件夹下工作流的任务。 路径格式为绝对路径，如 &quot;/数据开发/子目录&quot;，根目录为 &quot;/&quot;</p>
     */
    public $WorkflowFolderPathList;

    /**
     * @var array <p>节点类型列表，用于按任务节点分类筛选，支持多选，可选值参考下面枚举类型 。 传入后将根据这些节点类型包含的任务类型ID列表进行筛选。</p><p>枚举值：</p><ul><li>ETL： 数据集成节点</li><li>EMR： EMR节点</li><li>DLC： DLC节点</li><li>SETATS： SETATS节点</li><li>TDSQL： TDSQL节点</li><li>TCHOUSE： TCHOUSE节点</li><li>GENERAL： 通用节点</li><li>DATA_QUALITY： 数据质量节点</li><li>INDICATOR： 指标节点</li><li>TI_ONE： TI-ONE机器学习节点</li></ul>
     */
    public $TaskNodeTypeList;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param integer $PageNumber <p>请求的数据页数。默认值为1，取值大于等于1</p>
     * @param integer $PageSize <p>每页显示的数据条数。默认值为10 ，最小值为10，最大值为200</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $WorkflowId <p>所属工作流ID</p>
     * @param string $OwnerUin <p>责任人ID</p>
     * @param integer $TaskTypeId <p>任务类型</p>
     * @param string $Status <p>任务状态</p><ul><li>N: 新建 </li><li>Y: 调度中</li></ul>
     * @param boolean $Submit <p>提交状态</p>
     * @param string $BundleId <p>BundleId信息</p>
     * @param string $CreateUserUin <p>创建人ID</p>
     * @param array $ModifyTime <p>修改时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     * @param array $CreateTime <p>创建时间区间 yyyy-MM-dd HH:mm:ss，需要在数组填入两个时间</p>
     * @param array $TaskFolderPathList <p>任务文件夹路径列表，支持多选，从工作流下的目录开始填写，节点类型无需填写。选择上层文件夹时，自动包含所有子文件夹下的任务。 路径格式为绝对路径，如 &quot;/子目录A&quot;，根目录为 &quot;/&quot;</p>
     * @param array $WorkflowFolderPathList <p>工作流文件夹路径列表，支持多选。选择上层文件夹时，自动包含所有子文件夹下工作流的任务。 路径格式为绝对路径，如 &quot;/数据开发/子目录&quot;，根目录为 &quot;/&quot;</p>
     * @param array $TaskNodeTypeList <p>节点类型列表，用于按任务节点分类筛选，支持多选，可选值参考下面枚举类型 。 传入后将根据这些节点类型包含的任务类型ID列表进行筛选。</p><p>枚举值：</p><ul><li>ETL： 数据集成节点</li><li>EMR： EMR节点</li><li>DLC： DLC节点</li><li>SETATS： SETATS节点</li><li>TDSQL： TDSQL节点</li><li>TCHOUSE： TCHOUSE节点</li><li>GENERAL： 通用节点</li><li>DATA_QUALITY： 数据质量节点</li><li>INDICATOR： 指标节点</li><li>TI_ONE： TI-ONE机器学习节点</li></ul>
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

        if (array_key_exists("TaskFolderPathList",$param) and $param["TaskFolderPathList"] !== null) {
            $this->TaskFolderPathList = $param["TaskFolderPathList"];
        }

        if (array_key_exists("WorkflowFolderPathList",$param) and $param["WorkflowFolderPathList"] !== null) {
            $this->WorkflowFolderPathList = $param["WorkflowFolderPathList"];
        }

        if (array_key_exists("TaskNodeTypeList",$param) and $param["TaskNodeTypeList"] !== null) {
            $this->TaskNodeTypeList = $param["TaskNodeTypeList"];
        }
    }
}
