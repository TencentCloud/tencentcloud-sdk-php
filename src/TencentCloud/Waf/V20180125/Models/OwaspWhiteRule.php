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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则引擎白名单
 *
 * @method integer getRuleId() 获取白名单的规则ID
 * @method void setRuleId(integer $RuleId) 设置白名单的规则ID
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method array getIds() 获取加白的规则ID列表
 * @method void setIds(array $Ids) 设置加白的规则ID列表
 * @method integer getStatus() 获取白名单规则的状态，0：关闭、1：开启
 * @method void setStatus(integer $Status) 设置白名单规则的状态，0：关闭、1：开启
 * @method integer getType() 获取加白的类型，0:按照特定规则ID加白、1:按照规则类型加白
 * @method void setType(integer $Type) 设置加白的类型，0:按照特定规则ID加白、1:按照规则类型加白
 * @method array getStrategies() 获取规则匹配策略列表
 * @method void setStrategies(array $Strategies) 设置规则匹配策略列表
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method string getJobType() 获取定时任务类型
 * @method void setJobType(string $JobType) 设置定时任务类型
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getCronType() 获取周期任务粒度
 * @method void setCronType(string $CronType) 设置周期任务粒度
 * @method boolean getValidStatus() 获取当前是否有效
 * @method void setValidStatus(boolean $ValidStatus) 设置当前是否有效
 */
class OwaspWhiteRule extends AbstractModel
{
    /**
     * @var integer 白名单的规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var array 加白的规则ID列表
     */
    public $Ids;

    /**
     * @var integer 白名单规则的状态，0：关闭、1：开启
     */
    public $Status;

    /**
     * @var integer 加白的类型，0:按照特定规则ID加白、1:按照规则类型加白
     */
    public $Type;

    /**
     * @var array 规则匹配策略列表
     */
    public $Strategies;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var string 定时任务类型
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var string 周期任务粒度
     */
    public $CronType;

    /**
     * @var boolean 当前是否有效
     */
    public $ValidStatus;

    /**
     * @param integer $RuleId 白名单的规则ID
     * @param string $Name 规则名
     * @param array $Ids 加白的规则ID列表
     * @param integer $Status 白名单规则的状态，0：关闭、1：开启
     * @param integer $Type 加白的类型，0:按照特定规则ID加白、1:按照规则类型加白
     * @param array $Strategies 规则匹配策略列表
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param string $JobType 定时任务类型
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param string $CronType 周期任务粒度
     * @param boolean $ValidStatus 当前是否有效
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }
    }
}
