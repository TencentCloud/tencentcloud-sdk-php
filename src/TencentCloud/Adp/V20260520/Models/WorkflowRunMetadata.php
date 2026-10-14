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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行实例元数据
 *
 * @method string getQuery() 获取用户的输入
 * @method void setQuery(string $Query) 设置用户的输入
 * @method string getMainModelName() 获取主模型名称
 * @method void setMainModelName(string $MainModelName) 设置主模型名称
 * @method array getCustomVariableList() 获取API参数配置
 * @method void setCustomVariableList(array $CustomVariableList) 设置API参数配置
 * @method string getWorkflowGraph() 获取工作流的流程图
 * @method void setWorkflowGraph(string $WorkflowGraph) 设置工作流的流程图
 */
class WorkflowRunMetadata extends AbstractModel
{
    /**
     * @var string 用户的输入
     */
    public $Query;

    /**
     * @var string 主模型名称
     */
    public $MainModelName;

    /**
     * @var array API参数配置
     */
    public $CustomVariableList;

    /**
     * @var string 工作流的流程图
     */
    public $WorkflowGraph;

    /**
     * @param string $Query 用户的输入
     * @param string $MainModelName 主模型名称
     * @param array $CustomVariableList API参数配置
     * @param string $WorkflowGraph 工作流的流程图
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("MainModelName",$param) and $param["MainModelName"] !== null) {
            $this->MainModelName = $param["MainModelName"];
        }

        if (array_key_exists("CustomVariableList",$param) and $param["CustomVariableList"] !== null) {
            $this->CustomVariableList = [];
            foreach ($param["CustomVariableList"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariableList, $obj);
            }
        }

        if (array_key_exists("WorkflowGraph",$param) and $param["WorkflowGraph"] !== null) {
            $this->WorkflowGraph = $param["WorkflowGraph"];
        }
    }
}
