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
 * RerunTaskInstancesAsync请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method array getInstanceKeyList() 获取实例id列表,可以从ListInstances中获取
 * @method void setInstanceKeyList(array $InstanceKeyList) 设置实例id列表,可以从ListInstances中获取
 * @method string getRerunType() 获取重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子，默认1
 * @method void setRerunType(string $RerunType) 设置重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子，默认1
 * @method string getCheckParentType() 获取是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查），默认NONE
 * @method void setCheckParentType(string $CheckParentType) 设置是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查），默认NONE
 * @method string getSonRangeType() 获取下游实例范围 WORKFLOW: 所在工作流 PROJECT: 所在项目 ALL: 所有跨工作流依赖的项目，默认WORKFLOW
 * @method void setSonRangeType(string $SonRangeType) 设置下游实例范围 WORKFLOW: 所在工作流 PROJECT: 所在项目 ALL: 所有跨工作流依赖的项目，默认WORKFLOW
 * @method boolean getSkipEventListening() 获取重跑是否忽略事件监听
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置重跑是否忽略事件监听
 * @method integer getRedefineParallelNum() 获取自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
 * @method void setRedefineParallelNum(integer $RedefineParallelNum) 设置自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
 * @method string getRedefineSelfWorkflowDependency() 获取自定义的工作流自依赖: yes开启，no关闭，如果不配置，则使用工作流原有自依赖
 * @method void setRedefineSelfWorkflowDependency(string $RedefineSelfWorkflowDependency) 设置自定义的工作流自依赖: yes开启，no关闭，如果不配置，则使用工作流原有自依赖
 * @method KVMap getRedefineParamList() 获取重跑实例自定义参数
 * @method void setRedefineParamList(KVMap $RedefineParamList) 设置重跑实例自定义参数
 */
class RerunTaskInstancesAsyncRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var array 实例id列表,可以从ListInstances中获取
     */
    public $InstanceKeyList;

    /**
     * @var string 重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子，默认1
     */
    public $RerunType;

    /**
     * @var string 是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查），默认NONE
     */
    public $CheckParentType;

    /**
     * @var string 下游实例范围 WORKFLOW: 所在工作流 PROJECT: 所在项目 ALL: 所有跨工作流依赖的项目，默认WORKFLOW
     */
    public $SonRangeType;

    /**
     * @var boolean 重跑是否忽略事件监听
     */
    public $SkipEventListening;

    /**
     * @var integer 自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
     */
    public $RedefineParallelNum;

    /**
     * @var string 自定义的工作流自依赖: yes开启，no关闭，如果不配置，则使用工作流原有自依赖
     */
    public $RedefineSelfWorkflowDependency;

    /**
     * @var KVMap 重跑实例自定义参数
     */
    public $RedefineParamList;

    /**
     * @param string $ProjectId 项目Id
     * @param array $InstanceKeyList 实例id列表,可以从ListInstances中获取
     * @param string $RerunType 重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子，默认1
     * @param string $CheckParentType 是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查），默认NONE
     * @param string $SonRangeType 下游实例范围 WORKFLOW: 所在工作流 PROJECT: 所在项目 ALL: 所有跨工作流依赖的项目，默认WORKFLOW
     * @param boolean $SkipEventListening 重跑是否忽略事件监听
     * @param integer $RedefineParallelNum 自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
     * @param string $RedefineSelfWorkflowDependency 自定义的工作流自依赖: yes开启，no关闭，如果不配置，则使用工作流原有自依赖
     * @param KVMap $RedefineParamList 重跑实例自定义参数
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

        if (array_key_exists("InstanceKeyList",$param) and $param["InstanceKeyList"] !== null) {
            $this->InstanceKeyList = $param["InstanceKeyList"];
        }

        if (array_key_exists("RerunType",$param) and $param["RerunType"] !== null) {
            $this->RerunType = $param["RerunType"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("SonRangeType",$param) and $param["SonRangeType"] !== null) {
            $this->SonRangeType = $param["SonRangeType"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("RedefineParallelNum",$param) and $param["RedefineParallelNum"] !== null) {
            $this->RedefineParallelNum = $param["RedefineParallelNum"];
        }

        if (array_key_exists("RedefineSelfWorkflowDependency",$param) and $param["RedefineSelfWorkflowDependency"] !== null) {
            $this->RedefineSelfWorkflowDependency = $param["RedefineSelfWorkflowDependency"];
        }

        if (array_key_exists("RedefineParamList",$param) and $param["RedefineParamList"] !== null) {
            $this->RedefineParamList = new KVMap();
            $this->RedefineParamList->deserialize($param["RedefineParamList"]);
        }
    }
}
