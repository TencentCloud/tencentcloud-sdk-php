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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddCustomWhiteRule请求参数结构体
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getSortId() 获取优先级
 * @method void setSortId(string $SortId) 设置优先级
 * @method array getStrategies() 获取策略详情
 * @method void setStrategies(array $Strategies) 设置策略详情
 * @method string getDomain() 获取需要添加策略的域名
 * @method void setDomain(string $Domain) 设置需要添加策略的域名
 * @method string getBypass() 获取放行的模块，多个模块之间用逗号连接。支持的模块：acl（自定义规则）、owasp（规则引擎）、webshell（恶意文件检测）、geoip（地域封禁）、bwip（IP黑白名单）、cc、botrpc（BOT防护）、antileakage（信息防泄露）、api（API安全）、ai（AI引擎）、ip_auto_deny（IP封禁）、applet（小程序流量风控）
 * @method void setBypass(string $Bypass) 设置放行的模块，多个模块之间用逗号连接。支持的模块：acl（自定义规则）、owasp（规则引擎）、webshell（恶意文件检测）、geoip（地域封禁）、bwip（IP黑白名单）、cc、botrpc（BOT防护）、antileakage（信息防泄露）、api（API安全）、ai（AI引擎）、ip_auto_deny（IP封禁）、applet（小程序流量风控）
 * @method string getExpireTime() 获取如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
 * @method void setExpireTime(string $ExpireTime) 设置如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 */
class AddCustomWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 优先级
     */
    public $SortId;

    /**
     * @var array 策略详情
     */
    public $Strategies;

    /**
     * @var string 需要添加策略的域名
     */
    public $Domain;

    /**
     * @var string 放行的模块，多个模块之间用逗号连接。支持的模块：acl（自定义规则）、owasp（规则引擎）、webshell（恶意文件检测）、geoip（地域封禁）、bwip（IP黑白名单）、cc、botrpc（BOT防护）、antileakage（信息防泄露）、api（API安全）、ai（AI引擎）、ip_auto_deny（IP封禁）、applet（小程序流量风控）
     */
    public $Bypass;

    /**
     * @var string 如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
     */
    public $ExpireTime;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var string 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     */
    public $LogicalOp;

    /**
     * @param string $Name 规则名称
     * @param string $SortId 优先级
     * @param array $Strategies 策略详情
     * @param string $Domain 需要添加策略的域名
     * @param string $Bypass 放行的模块，多个模块之间用逗号连接。支持的模块：acl（自定义规则）、owasp（规则引擎）、webshell（恶意文件检测）、geoip（地域封禁）、bwip（IP黑白名单）、cc、botrpc（BOT防护）、antileakage（信息防泄露）、api（API安全）、ai（AI引擎）、ip_auto_deny（IP封禁）、applet（小程序流量风控）
     * @param string $ExpireTime 如果没有设置JobDateTime字段则用此字段，0表示永久生效，其它表示定时生效的截止时间（单位为秒）
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }
    }
}
