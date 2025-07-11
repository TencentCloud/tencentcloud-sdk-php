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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期规则
 *
 * @method integer getLifeCycleRuleId() 获取生命周期规则ID
 * @method void setLifeCycleRuleId(integer $LifeCycleRuleId) 设置生命周期规则ID
 * @method string getLifeCycleRuleName() 获取生命周期规则名称
 * @method void setLifeCycleRuleName(string $LifeCycleRuleName) 设置生命周期规则名称
 * @method string getPath() 获取生命周期规则路径（目录或文件）
 * @method void setPath(string $Path) 设置生命周期规则路径（目录或文件）
 * @method array getTransitions() 获取生命周期规则转换列表
 * @method void setTransitions(array $Transitions) 设置生命周期规则转换列表
 * @method integer getStatus() 获取生命周期规则状态（1：打开；2：关闭）
 * @method void setStatus(integer $Status) 设置生命周期规则状态（1：打开；2：关闭）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method Summary getSummary() 获取生命周期规则当前路径具体存储量
 * @method void setSummary(Summary $Summary) 设置生命周期规则当前路径具体存储量
 * @method string getLastSummaryTime() 获取Summary更新时间
 * @method void setLastSummaryTime(string $LastSummaryTime) 设置Summary更新时间
 */
class LifeCycleRule extends AbstractModel
{
    /**
     * @var integer 生命周期规则ID
     */
    public $LifeCycleRuleId;

    /**
     * @var string 生命周期规则名称
     */
    public $LifeCycleRuleName;

    /**
     * @var string 生命周期规则路径（目录或文件）
     */
    public $Path;

    /**
     * @var array 生命周期规则转换列表
     */
    public $Transitions;

    /**
     * @var integer 生命周期规则状态（1：打开；2：关闭）
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var Summary 生命周期规则当前路径具体存储量
     */
    public $Summary;

    /**
     * @var string Summary更新时间
     */
    public $LastSummaryTime;

    /**
     * @param integer $LifeCycleRuleId 生命周期规则ID
     * @param string $LifeCycleRuleName 生命周期规则名称
     * @param string $Path 生命周期规则路径（目录或文件）
     * @param array $Transitions 生命周期规则转换列表
     * @param integer $Status 生命周期规则状态（1：打开；2：关闭）
     * @param string $CreateTime 创建时间
     * @param Summary $Summary 生命周期规则当前路径具体存储量
     * @param string $LastSummaryTime Summary更新时间
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
        if (array_key_exists("LifeCycleRuleId",$param) and $param["LifeCycleRuleId"] !== null) {
            $this->LifeCycleRuleId = $param["LifeCycleRuleId"];
        }

        if (array_key_exists("LifeCycleRuleName",$param) and $param["LifeCycleRuleName"] !== null) {
            $this->LifeCycleRuleName = $param["LifeCycleRuleName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Transitions",$param) and $param["Transitions"] !== null) {
            $this->Transitions = [];
            foreach ($param["Transitions"] as $key => $value){
                $obj = new Transition();
                $obj->deserialize($value);
                array_push($this->Transitions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new Summary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("LastSummaryTime",$param) and $param["LastSummaryTime"] !== null) {
            $this->LastSummaryTime = $param["LastSummaryTime"];
        }
    }
}
