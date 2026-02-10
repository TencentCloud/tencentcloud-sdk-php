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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预热任务参数
 *
 * @method string getTaskId() 获取预热任务 ID
 * @method void setTaskId(string $TaskId) 设置预热任务 ID
 * @method string getTaskType() 获取预热任务类型，枚举值，MetadataLoad｜DistributedLoad
 * @method void setTaskType(string $TaskType) 设置预热任务类型，枚举值，MetadataLoad｜DistributedLoad
 * @method string getDescription() 获取任务描述，支持中文
 * @method void setDescription(string $Description) 设置任务描述，支持中文
 * @method integer getPriority() 获取任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
 * @method void setPriority(integer $Priority) 设置任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
 * @method MetadataLoadAttrs getMetadataLoadAttrs() 获取元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
 * @method void setMetadataLoadAttrs(MetadataLoadAttrs $MetadataLoadAttrs) 设置元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
 * @method DistributedLoadAttrs getDistributedLoadAttrs() 获取数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
 * @method void setDistributedLoadAttrs(DistributedLoadAttrs $DistributedLoadAttrs) 设置数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
 * @method string getReportPath() 获取将任务执行报告写入 COS 的路径，如果不需要报告则入参空
 * @method void setReportPath(string $ReportPath) 设置将任务执行报告写入 COS 的路径，如果不需要报告则入参空
 * @method string getState() 获取枚举，Completed，Running，Waiting，Cancelled
 * @method void setState(string $State) 设置枚举，Completed，Running，Waiting，Cancelled
 * @method string getTaskMessage() 获取任务执行信息，打印预热文件成功个数，失败个数，预热耗时信息 
 * @method void setTaskMessage(string $TaskMessage) 设置任务执行信息，打印预热文件成功个数，失败个数，预热耗时信息 
 * @method string getCreateTime() 获取预热任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置预热任务创建时间
 * @method string getModifyTime() 获取预热任务变更时间
 * @method void setModifyTime(string $ModifyTime) 设置预热任务变更时间
 * @method string getRequester() 获取任务提交账号，子账号或服务角色 ID
 * @method void setRequester(string $Requester) 设置任务提交账号，子账号或服务角色 ID
 */
class LoadTaskAttrs extends AbstractModel
{
    /**
     * @var string 预热任务 ID
     */
    public $TaskId;

    /**
     * @var string 预热任务类型，枚举值，MetadataLoad｜DistributedLoad
     */
    public $TaskType;

    /**
     * @var string 任务描述，支持中文
     */
    public $Description;

    /**
     * @var integer 任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
     */
    public $Priority;

    /**
     * @var MetadataLoadAttrs 元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
     */
    public $MetadataLoadAttrs;

    /**
     * @var DistributedLoadAttrs 数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
     */
    public $DistributedLoadAttrs;

    /**
     * @var string 将任务执行报告写入 COS 的路径，如果不需要报告则入参空
     */
    public $ReportPath;

    /**
     * @var string 枚举，Completed，Running，Waiting，Cancelled
     */
    public $State;

    /**
     * @var string 任务执行信息，打印预热文件成功个数，失败个数，预热耗时信息 
     */
    public $TaskMessage;

    /**
     * @var string 预热任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 预热任务变更时间
     */
    public $ModifyTime;

    /**
     * @var string 任务提交账号，子账号或服务角色 ID
     */
    public $Requester;

    /**
     * @param string $TaskId 预热任务 ID
     * @param string $TaskType 预热任务类型，枚举值，MetadataLoad｜DistributedLoad
     * @param string $Description 任务描述，支持中文
     * @param integer $Priority 任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
     * @param MetadataLoadAttrs $MetadataLoadAttrs 元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
     * @param DistributedLoadAttrs $DistributedLoadAttrs 数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
     * @param string $ReportPath 将任务执行报告写入 COS 的路径，如果不需要报告则入参空
     * @param string $State 枚举，Completed，Running，Waiting，Cancelled
     * @param string $TaskMessage 任务执行信息，打印预热文件成功个数，失败个数，预热耗时信息 
     * @param string $CreateTime 预热任务创建时间
     * @param string $ModifyTime 预热任务变更时间
     * @param string $Requester 任务提交账号，子账号或服务角色 ID
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("MetadataLoadAttrs",$param) and $param["MetadataLoadAttrs"] !== null) {
            $this->MetadataLoadAttrs = new MetadataLoadAttrs();
            $this->MetadataLoadAttrs->deserialize($param["MetadataLoadAttrs"]);
        }

        if (array_key_exists("DistributedLoadAttrs",$param) and $param["DistributedLoadAttrs"] !== null) {
            $this->DistributedLoadAttrs = new DistributedLoadAttrs();
            $this->DistributedLoadAttrs->deserialize($param["DistributedLoadAttrs"]);
        }

        if (array_key_exists("ReportPath",$param) and $param["ReportPath"] !== null) {
            $this->ReportPath = $param["ReportPath"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Requester",$param) and $param["Requester"] !== null) {
            $this->Requester = $param["Requester"];
        }
    }
}
