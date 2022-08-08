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
 * RerunInstances请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method array getInstances() 获取实例嵌套集合
 * @method void setInstances(array $Instances) 设置实例嵌套集合
 * @method boolean getCheckFather() 获取检查父任务类型, true: 检查父任务; false: 不检查父任务
 * @method void setCheckFather(boolean $CheckFather) 设置检查父任务类型, true: 检查父任务; false: 不检查父任务
 * @method string getRerunType() 获取重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子
 * @method void setRerunType(string $RerunType) 设置重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子
 * @method string getDependentWay() 获取实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖
 * @method void setDependentWay(string $DependentWay) 设置实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖
 * @method boolean getSkipEventListening() 获取重跑忽略事件监听与否
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置重跑忽略事件监听与否
 * @method string getSonInstanceType() 获取下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
 * @method void setSonInstanceType(string $SonInstanceType) 设置下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
 */
class RerunInstancesRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var array 实例嵌套集合
     */
    public $Instances;

    /**
     * @var boolean 检查父任务类型, true: 检查父任务; false: 不检查父任务
     */
    public $CheckFather;

    /**
     * @var string 重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子
     */
    public $RerunType;

    /**
     * @var string 实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖
     */
    public $DependentWay;

    /**
     * @var boolean 重跑忽略事件监听与否
     */
    public $SkipEventListening;

    /**
     * @var string 下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
     */
    public $SonInstanceType;

    /**
     * @param string $ProjectId 项目Id
     * @param array $Instances 实例嵌套集合
     * @param boolean $CheckFather 检查父任务类型, true: 检查父任务; false: 不检查父任务
     * @param string $RerunType 重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子
     * @param string $DependentWay 实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖
     * @param boolean $SkipEventListening 重跑忽略事件监听与否
     * @param string $SonInstanceType 下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
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

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new InstanceInfo();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("CheckFather",$param) and $param["CheckFather"] !== null) {
            $this->CheckFather = $param["CheckFather"];
        }

        if (array_key_exists("RerunType",$param) and $param["RerunType"] !== null) {
            $this->RerunType = $param["RerunType"];
        }

        if (array_key_exists("DependentWay",$param) and $param["DependentWay"] !== null) {
            $this->DependentWay = $param["DependentWay"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("SonInstanceType",$param) and $param["SonInstanceType"] !== null) {
            $this->SonInstanceType = $param["SonInstanceType"];
        }
    }
}
