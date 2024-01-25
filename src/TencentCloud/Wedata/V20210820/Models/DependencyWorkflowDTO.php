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
 * 【项目克隆】依赖工作流信息
 *
 * @method string getSelectedWorkflowId() 获取已选工作流id
 * @method void setSelectedWorkflowId(string $SelectedWorkflowId) 设置已选工作流id
 * @method string getSelectedWorkflowName() 获取已选工作流名称
 * @method void setSelectedWorkflowName(string $SelectedWorkflowName) 设置已选工作流名称
 * @method string getDependencyWorkflowId() 获取依赖工作流id
 * @method void setDependencyWorkflowId(string $DependencyWorkflowId) 设置依赖工作流id
 * @method string getDependencyWorkflowName() 获取依赖工作流名称
 * @method void setDependencyWorkflowName(string $DependencyWorkflowName) 设置依赖工作流名称
 * @method boolean getCrossProject() 获取依赖工作流是否跨项目
 * @method void setCrossProject(boolean $CrossProject) 设置依赖工作流是否跨项目
 * @method string getDependencyProjectId() 获取依赖工作流对应项目id
 * @method void setDependencyProjectId(string $DependencyProjectId) 设置依赖工作流对应项目id
 * @method string getDependencyProjectName() 获取依赖工作流对应项目名称
 * @method void setDependencyProjectName(string $DependencyProjectName) 设置依赖工作流对应项目名称
 */
class DependencyWorkflowDTO extends AbstractModel
{
    /**
     * @var string 已选工作流id
     */
    public $SelectedWorkflowId;

    /**
     * @var string 已选工作流名称
     */
    public $SelectedWorkflowName;

    /**
     * @var string 依赖工作流id
     */
    public $DependencyWorkflowId;

    /**
     * @var string 依赖工作流名称
     */
    public $DependencyWorkflowName;

    /**
     * @var boolean 依赖工作流是否跨项目
     */
    public $CrossProject;

    /**
     * @var string 依赖工作流对应项目id
     */
    public $DependencyProjectId;

    /**
     * @var string 依赖工作流对应项目名称
     */
    public $DependencyProjectName;

    /**
     * @param string $SelectedWorkflowId 已选工作流id
     * @param string $SelectedWorkflowName 已选工作流名称
     * @param string $DependencyWorkflowId 依赖工作流id
     * @param string $DependencyWorkflowName 依赖工作流名称
     * @param boolean $CrossProject 依赖工作流是否跨项目
     * @param string $DependencyProjectId 依赖工作流对应项目id
     * @param string $DependencyProjectName 依赖工作流对应项目名称
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
        if (array_key_exists("SelectedWorkflowId",$param) and $param["SelectedWorkflowId"] !== null) {
            $this->SelectedWorkflowId = $param["SelectedWorkflowId"];
        }

        if (array_key_exists("SelectedWorkflowName",$param) and $param["SelectedWorkflowName"] !== null) {
            $this->SelectedWorkflowName = $param["SelectedWorkflowName"];
        }

        if (array_key_exists("DependencyWorkflowId",$param) and $param["DependencyWorkflowId"] !== null) {
            $this->DependencyWorkflowId = $param["DependencyWorkflowId"];
        }

        if (array_key_exists("DependencyWorkflowName",$param) and $param["DependencyWorkflowName"] !== null) {
            $this->DependencyWorkflowName = $param["DependencyWorkflowName"];
        }

        if (array_key_exists("CrossProject",$param) and $param["CrossProject"] !== null) {
            $this->CrossProject = $param["CrossProject"];
        }

        if (array_key_exists("DependencyProjectId",$param) and $param["DependencyProjectId"] !== null) {
            $this->DependencyProjectId = $param["DependencyProjectId"];
        }

        if (array_key_exists("DependencyProjectName",$param) and $param["DependencyProjectName"] !== null) {
            $this->DependencyProjectName = $param["DependencyProjectName"];
        }
    }
}
