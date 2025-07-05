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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态生成的变更详情条目
 *
 * @method string getAttribute() 获取属性
 * @method void setAttribute(string $Attribute) 设置属性
 * @method string getInEffect() 获取当前生效
 * @method void setInEffect(string $InEffect) 设置当前生效
 * @method string getPendingEffectiveness() 获取待生效
 * @method void setPendingEffectiveness(string $PendingEffectiveness) 设置待生效
 * @method string getOperation() 获取操作
 * @method void setOperation(string $Operation) 设置操作
 * @method string getQueue() 获取队列
 * @method void setQueue(string $Queue) 设置队列
 * @method string getConfigSet() 获取配置集
 * @method void setConfigSet(string $ConfigSet) 设置配置集
 * @method string getLabelName() 获取标签
 * @method void setLabelName(string $LabelName) 设置标签
 * @method string getInEffectIndex() 获取当前所在位置
 * @method void setInEffectIndex(string $InEffectIndex) 设置当前所在位置
 * @method string getPendingEffectIndex() 获取待生效的位置
 * @method void setPendingEffectIndex(string $PendingEffectIndex) 设置待生效的位置
 * @method string getPlanName() 获取计划模式名称
 * @method void setPlanName(string $PlanName) 设置计划模式名称
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method string getRuleName() 获取放置规则
 * @method void setRuleName(string $RuleName) 设置放置规则
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 */
class DiffDetailItem extends AbstractModel
{
    /**
     * @var string 属性
     */
    public $Attribute;

    /**
     * @var string 当前生效
     */
    public $InEffect;

    /**
     * @var string 待生效
     */
    public $PendingEffectiveness;

    /**
     * @var string 操作
     */
    public $Operation;

    /**
     * @var string 队列
     */
    public $Queue;

    /**
     * @var string 配置集
     */
    public $ConfigSet;

    /**
     * @var string 标签
     */
    public $LabelName;

    /**
     * @var string 当前所在位置
     */
    public $InEffectIndex;

    /**
     * @var string 待生效的位置
     */
    public $PendingEffectIndex;

    /**
     * @var string 计划模式名称
     */
    public $PlanName;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var string 放置规则
     */
    public $RuleName;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @param string $Attribute 属性
     * @param string $InEffect 当前生效
     * @param string $PendingEffectiveness 待生效
     * @param string $Operation 操作
     * @param string $Queue 队列
     * @param string $ConfigSet 配置集
     * @param string $LabelName 标签
     * @param string $InEffectIndex 当前所在位置
     * @param string $PendingEffectIndex 待生效的位置
     * @param string $PlanName 计划模式名称
     * @param string $Label 标签
     * @param string $RuleName 放置规则
     * @param string $UserName 用户名
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
        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = $param["Attribute"];
        }

        if (array_key_exists("InEffect",$param) and $param["InEffect"] !== null) {
            $this->InEffect = $param["InEffect"];
        }

        if (array_key_exists("PendingEffectiveness",$param) and $param["PendingEffectiveness"] !== null) {
            $this->PendingEffectiveness = $param["PendingEffectiveness"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("ConfigSet",$param) and $param["ConfigSet"] !== null) {
            $this->ConfigSet = $param["ConfigSet"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("InEffectIndex",$param) and $param["InEffectIndex"] !== null) {
            $this->InEffectIndex = $param["InEffectIndex"];
        }

        if (array_key_exists("PendingEffectIndex",$param) and $param["PendingEffectIndex"] !== null) {
            $this->PendingEffectIndex = $param["PendingEffectIndex"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
