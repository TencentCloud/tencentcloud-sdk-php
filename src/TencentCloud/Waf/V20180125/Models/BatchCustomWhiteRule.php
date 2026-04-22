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
 * 批量精准白名单规则详情
 *
 * @method integer getID() 获取规则ID
 * @method void setID(integer $ID) 设置规则ID
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method integer getSortId() 获取优先级
 * @method void setSortId(integer $SortId) 设置优先级
 * @method array getStrategies() 获取策略详情
 * @method void setStrategies(array $Strategies) 设置策略详情
 * @method array getBypass() 获取加白的模块，owasp：Web防护-规则引擎、ai：Web防护-AI引擎、ip_auto_deny：IP封禁、geoip：访问控制-地域封禁、acl：访问控制-自定义规则、cc：CC防护、antileakage：信息防泄漏防护、bwip：IP黑白名单、botrpc：BOT防护、api：API安全、applet：小程序防护
 * @method void setBypass(array $Bypass) 设置加白的模块，owasp：Web防护-规则引擎、ai：Web防护-AI引擎、ip_auto_deny：IP封禁、geoip：访问控制-地域封禁、acl：访问控制-自定义规则、cc：CC防护、antileakage：信息防泄漏防护、bwip：IP黑白名单、botrpc：BOT防护、api：API安全、applet：小程序防护
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getCronType() 获取周期任务的类型
 * @method void setCronType(string $CronType) 设置周期任务的类型
 * @method array getDomains() 获取域名列表，如果绑定的是批量域名
 * @method void setDomains(array $Domains) 设置域名列表，如果绑定的是批量域名
 * @method array getGroupIds() 获取防护对象组ID列表，如果绑定的是防护对象组
 * @method void setGroupIds(array $GroupIds) 设置防护对象组ID列表，如果绑定的是防护对象组
 * @method integer getValidStatus() 获取生效状态，1：生效中、0：未生效
 * @method void setValidStatus(integer $ValidStatus) 设置生效状态，1：生效中、0：未生效
 * @method string getCreateTime() 获取规则创建时间
 * @method void setCreateTime(string $CreateTime) 设置规则创建时间
 * @method string getUpdateTime() 获取规则更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置规则更新时间
 * @method integer getStatus() 获取规则开关状态，1：开启、0：关闭
 * @method void setStatus(integer $Status) 设置规则开关状态，1：开启、0：关闭
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 */
class BatchCustomWhiteRule extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $ID;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var integer 优先级
     */
    public $SortId;

    /**
     * @var array 策略详情
     */
    public $Strategies;

    /**
     * @var array 加白的模块，owasp：Web防护-规则引擎、ai：Web防护-AI引擎、ip_auto_deny：IP封禁、geoip：访问控制-地域封禁、acl：访问控制-自定义规则、cc：CC防护、antileakage：信息防泄漏防护、bwip：IP黑白名单、botrpc：BOT防护、api：API安全、applet：小程序防护
     */
    public $Bypass;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var string 周期任务的类型
     */
    public $CronType;

    /**
     * @var array 域名列表，如果绑定的是批量域名
     */
    public $Domains;

    /**
     * @var array 防护对象组ID列表，如果绑定的是防护对象组
     */
    public $GroupIds;

    /**
     * @var integer 生效状态，1：生效中、0：未生效
     */
    public $ValidStatus;

    /**
     * @var string 规则创建时间
     */
    public $CreateTime;

    /**
     * @var string 规则更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 规则开关状态，1：开启、0：关闭
     */
    public $Status;

    /**
     * @var string 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     */
    public $LogicalOp;

    /**
     * @param integer $ID 规则ID
     * @param string $Name 规则名
     * @param integer $SortId 优先级
     * @param array $Strategies 策略详情
     * @param array $Bypass 加白的模块，owasp：Web防护-规则引擎、ai：Web防护-AI引擎、ip_auto_deny：IP封禁、geoip：访问控制-地域封禁、acl：访问控制-自定义规则、cc：CC防护、antileakage：信息防泄漏防护、bwip：IP黑白名单、botrpc：BOT防护、api：API安全、applet：小程序防护
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param string $CronType 周期任务的类型
     * @param array $Domains 域名列表，如果绑定的是批量域名
     * @param array $GroupIds 防护对象组ID列表，如果绑定的是防护对象组
     * @param integer $ValidStatus 生效状态，1：生效中、0：未生效
     * @param string $CreateTime 规则创建时间
     * @param string $UpdateTime 规则更新时间
     * @param integer $Status 规则开关状态，1：开启、0：关闭
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }
    }
}
