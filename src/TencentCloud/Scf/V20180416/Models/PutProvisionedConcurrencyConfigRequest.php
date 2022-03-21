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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutProvisionedConcurrencyConfig请求参数结构体
 *
 * @method string getFunctionName() 获取需要设置预置并发的函数的名称
 * @method void setFunctionName(string $FunctionName) 设置需要设置预置并发的函数的名称
 * @method string getQualifier() 获取函数的版本号，注：$LATEST版本不支持预置并发
 * @method void setQualifier(string $Qualifier) 设置函数的版本号，注：$LATEST版本不支持预置并发
 * @method integer getVersionProvisionedConcurrencyNum() 获取预置并发数量，注：所有版本的预置并发数总和存在上限限制，当前的上限是：函数最大并发配额 - 100
 * @method void setVersionProvisionedConcurrencyNum(integer $VersionProvisionedConcurrencyNum) 设置预置并发数量，注：所有版本的预置并发数总和存在上限限制，当前的上限是：函数最大并发配额 - 100
 * @method string getNamespace() 获取函数所属命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间，默认为default
 * @method array getTriggerActions() 获取定时预置任务
 * @method void setTriggerActions(array $TriggerActions) 设置定时预置任务
 * @method string getProvisionedType() 获取预置类型，
静态预置：Default
动态追踪并发利用率指标预置：ConcurrencyUtilizationTracking
预置类型二选一，设置静态预置时可以设置VersionProvisionedConcurrencyNum。

动态利用率预置可以设置TrackingTarget，MinCapacity，MaxCapacity，保持向后兼容性此时VersionProvisionedConcurrencyNum设置为0.
 * @method void setProvisionedType(string $ProvisionedType) 设置预置类型，
静态预置：Default
动态追踪并发利用率指标预置：ConcurrencyUtilizationTracking
预置类型二选一，设置静态预置时可以设置VersionProvisionedConcurrencyNum。

动态利用率预置可以设置TrackingTarget，MinCapacity，MaxCapacity，保持向后兼容性此时VersionProvisionedConcurrencyNum设置为0.
 * @method float getTrackingTarget() 获取指标追踪的并发利用率。设置范围(0,1)
 * @method void setTrackingTarget(float $TrackingTarget) 设置指标追踪的并发利用率。设置范围(0,1)
 * @method integer getMinCapacity() 获取缩容时的最小值, 最小值为1
 * @method void setMinCapacity(integer $MinCapacity) 设置缩容时的最小值, 最小值为1
 * @method integer getMaxCapacity() 获取扩容时的最大值
 * @method void setMaxCapacity(integer $MaxCapacity) 设置扩容时的最大值
 */
class PutProvisionedConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var string 需要设置预置并发的函数的名称
     */
    public $FunctionName;

    /**
     * @var string 函数的版本号，注：$LATEST版本不支持预置并发
     */
    public $Qualifier;

    /**
     * @var integer 预置并发数量，注：所有版本的预置并发数总和存在上限限制，当前的上限是：函数最大并发配额 - 100
     */
    public $VersionProvisionedConcurrencyNum;

    /**
     * @var string 函数所属命名空间，默认为default
     */
    public $Namespace;

    /**
     * @var array 定时预置任务
     */
    public $TriggerActions;

    /**
     * @var string 预置类型，
静态预置：Default
动态追踪并发利用率指标预置：ConcurrencyUtilizationTracking
预置类型二选一，设置静态预置时可以设置VersionProvisionedConcurrencyNum。

动态利用率预置可以设置TrackingTarget，MinCapacity，MaxCapacity，保持向后兼容性此时VersionProvisionedConcurrencyNum设置为0.
     */
    public $ProvisionedType;

    /**
     * @var float 指标追踪的并发利用率。设置范围(0,1)
     */
    public $TrackingTarget;

    /**
     * @var integer 缩容时的最小值, 最小值为1
     */
    public $MinCapacity;

    /**
     * @var integer 扩容时的最大值
     */
    public $MaxCapacity;

    /**
     * @param string $FunctionName 需要设置预置并发的函数的名称
     * @param string $Qualifier 函数的版本号，注：$LATEST版本不支持预置并发
     * @param integer $VersionProvisionedConcurrencyNum 预置并发数量，注：所有版本的预置并发数总和存在上限限制，当前的上限是：函数最大并发配额 - 100
     * @param string $Namespace 函数所属命名空间，默认为default
     * @param array $TriggerActions 定时预置任务
     * @param string $ProvisionedType 预置类型，
静态预置：Default
动态追踪并发利用率指标预置：ConcurrencyUtilizationTracking
预置类型二选一，设置静态预置时可以设置VersionProvisionedConcurrencyNum。

动态利用率预置可以设置TrackingTarget，MinCapacity，MaxCapacity，保持向后兼容性此时VersionProvisionedConcurrencyNum设置为0.
     * @param float $TrackingTarget 指标追踪的并发利用率。设置范围(0,1)
     * @param integer $MinCapacity 缩容时的最小值, 最小值为1
     * @param integer $MaxCapacity 扩容时的最大值
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("VersionProvisionedConcurrencyNum",$param) and $param["VersionProvisionedConcurrencyNum"] !== null) {
            $this->VersionProvisionedConcurrencyNum = $param["VersionProvisionedConcurrencyNum"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TriggerActions",$param) and $param["TriggerActions"] !== null) {
            $this->TriggerActions = [];
            foreach ($param["TriggerActions"] as $key => $value){
                $obj = new TriggerAction();
                $obj->deserialize($value);
                array_push($this->TriggerActions, $obj);
            }
        }

        if (array_key_exists("ProvisionedType",$param) and $param["ProvisionedType"] !== null) {
            $this->ProvisionedType = $param["ProvisionedType"];
        }

        if (array_key_exists("TrackingTarget",$param) and $param["TrackingTarget"] !== null) {
            $this->TrackingTarget = $param["TrackingTarget"];
        }

        if (array_key_exists("MinCapacity",$param) and $param["MinCapacity"] !== null) {
            $this->MinCapacity = $param["MinCapacity"];
        }

        if (array_key_exists("MaxCapacity",$param) and $param["MaxCapacity"] !== null) {
            $this->MaxCapacity = $param["MaxCapacity"];
        }
    }
}
