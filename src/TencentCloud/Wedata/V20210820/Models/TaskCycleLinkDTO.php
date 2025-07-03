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
 * 循环依赖响应体
 *
 * @method string getId() 获取依赖关系唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置依赖关系唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFrom() 获取上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFrom(string $TaskFrom) 设置上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFromProjectId() 获取上游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFromProjectId(string $TaskFromProjectId) 设置上游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFromWorkflowId() 获取上游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFromWorkflowId(string $TaskFromWorkflowId) 设置上游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTo() 获取下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTo(string $TaskTo) 设置下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskToProjectId() 获取下游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskToProjectId(string $TaskToProjectId) 设置下游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskToWorkflowId() 获取下游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskToWorkflowId(string $TaskToWorkflowId) 设置下游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskDsDTO getTaskToInfo() 获取下游任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskToInfo(TaskDsDTO $TaskToInfo) 设置下游任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainCyclicConfig() 获取依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainCyclicConfig(string $MainCyclicConfig) 设置依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubordinateCyclicConfig() 获取依赖偏移类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) 设置依赖偏移类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyStrategy() 获取依赖策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyStrategy(string $DependencyStrategy) 设置依赖策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOffset() 获取自定义依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(string $Offset) 设置自定义依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取更新人用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置更新人用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserId() 获取创建人用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserId(string $CreateUserId) 设置创建人用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserId() 获取主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserId(string $OwnerUserId) 设置主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskCycleLinkDTO extends AbstractModel
{
    /**
     * @var string 依赖关系唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFrom;

    /**
     * @var string 上游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFromProjectId;

    /**
     * @var string 上游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFromWorkflowId;

    /**
     * @var string 下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTo;

    /**
     * @var string 下游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskToProjectId;

    /**
     * @var string 下游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskToWorkflowId;

    /**
     * @var TaskDsDTO 下游任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskToInfo;

    /**
     * @var string 依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainCyclicConfig;

    /**
     * @var string 依赖偏移类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubordinateCyclicConfig;

    /**
     * @var string 依赖策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyStrategy;

    /**
     * @var string 自定义依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var string 更新人用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string 创建人用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserId;

    /**
     * @var string 租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Id 依赖关系唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFrom 上游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFromProjectId 上游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFromWorkflowId 上游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTo 下游任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskToProjectId 下游任务项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskToWorkflowId 下游任务工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskDsDTO $TaskToInfo 下游任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainCyclicConfig 依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubordinateCyclicConfig 依赖偏移类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyStrategy 依赖策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Offset 自定义依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 更新人用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserId 创建人用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserId 主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("TaskFromProjectId",$param) and $param["TaskFromProjectId"] !== null) {
            $this->TaskFromProjectId = $param["TaskFromProjectId"];
        }

        if (array_key_exists("TaskFromWorkflowId",$param) and $param["TaskFromWorkflowId"] !== null) {
            $this->TaskFromWorkflowId = $param["TaskFromWorkflowId"];
        }

        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("TaskToProjectId",$param) and $param["TaskToProjectId"] !== null) {
            $this->TaskToProjectId = $param["TaskToProjectId"];
        }

        if (array_key_exists("TaskToWorkflowId",$param) and $param["TaskToWorkflowId"] !== null) {
            $this->TaskToWorkflowId = $param["TaskToWorkflowId"];
        }

        if (array_key_exists("TaskToInfo",$param) and $param["TaskToInfo"] !== null) {
            $this->TaskToInfo = new TaskDsDTO();
            $this->TaskToInfo->deserialize($param["TaskToInfo"]);
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }

        if (array_key_exists("DependencyStrategy",$param) and $param["DependencyStrategy"] !== null) {
            $this->DependencyStrategy = $param["DependencyStrategy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
