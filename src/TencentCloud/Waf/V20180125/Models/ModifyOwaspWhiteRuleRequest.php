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
 * ModifyOwaspWhiteRule请求参数结构体
 *
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getStrategies() 获取规则匹配策略列表
 * @method void setStrategies(array $Strategies) 设置规则匹配策略列表
 * @method array getIds() 获取加白的规则ID列表
 * @method void setIds(array $Ids) 设置加白的规则ID列表
 * @method integer getType() 获取加白的类型，0:按照特定规则ID加白, 1:按照规则类型加白
 * @method void setType(integer $Type) 设置加白的类型，0:按照特定规则ID加白, 1:按照规则类型加白
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method integer getExpireTime() 获取如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
 * @method void setExpireTime(integer $ExpireTime) 设置如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
 * @method integer getStatus() 获取规则状态，0：关闭、1：开启，默认为开启
 * @method void setStatus(integer $Status) 设置规则状态，0：关闭、1：开启，默认为开启
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 */
class ModifyOwaspWhiteRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 规则匹配策略列表
     */
    public $Strategies;

    /**
     * @var array 加白的规则ID列表
     */
    public $Ids;

    /**
     * @var integer 加白的类型，0:按照特定规则ID加白, 1:按照规则类型加白
     */
    public $Type;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var integer 如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
     */
    public $ExpireTime;

    /**
     * @var integer 规则状态，0：关闭、1：开启，默认为开启
     */
    public $Status;

    /**
     * @var string 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     */
    public $LogicalOp;

    /**
     * @param integer $RuleId 规则ID
     * @param string $Name 规则名称
     * @param string $Domain 域名
     * @param array $Strategies 规则匹配策略列表
     * @param array $Ids 加白的规则ID列表
     * @param integer $Type 加白的类型，0:按照特定规则ID加白, 1:按照规则类型加白
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param integer $ExpireTime 如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
     * @param integer $Status 规则状态，0：关闭、1：开启，默认为开启
     * @param string $LogicalOp 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }
    }
}
