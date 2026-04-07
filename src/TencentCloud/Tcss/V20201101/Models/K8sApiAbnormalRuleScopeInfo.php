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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8s api 异常事件规则配置范围
 *
 * @method string getScope() 获取<p>范围<br>系统事件:<br>ANONYMOUS_ACCESS: 匿名访问<br>ABNORMAL_UA_REQ: 异常UA请求<br>ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动<br>GET_CREDENTIALS: 凭据信息获取<br>MOUNT_SENSITIVE_PATH: 敏感路径挂载<br>COMMAND_RUN: 命令执行<br>PRIVILEGE_CONTAINER: 特权容器<br>EXCEPTION_CRONTAB_TASK: 异常定时任务<br>STATICS_POD: 静态pod创建<br>ABNORMAL_CREATE_POD: 异常pod创建<br>USER_DEFINED: 用户自定义</p>
 * @method void setScope(string $Scope) 设置<p>范围<br>系统事件:<br>ANONYMOUS_ACCESS: 匿名访问<br>ABNORMAL_UA_REQ: 异常UA请求<br>ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动<br>GET_CREDENTIALS: 凭据信息获取<br>MOUNT_SENSITIVE_PATH: 敏感路径挂载<br>COMMAND_RUN: 命令执行<br>PRIVILEGE_CONTAINER: 特权容器<br>EXCEPTION_CRONTAB_TASK: 异常定时任务<br>STATICS_POD: 静态pod创建<br>ABNORMAL_CREATE_POD: 异常pod创建<br>USER_DEFINED: 用户自定义</p>
 * @method string getAction() 获取<p>动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)</p>
 * @method void setAction(string $Action) 设置<p>动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)</p>
 * @method string getRiskLevel() 获取<p>威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示</p>
 * @method boolean getStatus() 获取<p>开关状态(true:开 false:关) 适用于系统规则</p>
 * @method void setStatus(boolean $Status) 设置<p>开关状态(true:开 false:关) 适用于系统规则</p>
 * @method boolean getIsDelete() 获取<p>是否被删除 适用于自定义规则入参</p>
 * @method void setIsDelete(boolean $IsDelete) 设置<p>是否被删除 适用于自定义规则入参</p>
 * @method string getRuleTypeZH() 获取<p>规则类型对应中文</p>
 * @method void setRuleTypeZH(string $RuleTypeZH) 设置<p>规则类型对应中文</p>
 */
class K8sApiAbnormalRuleScopeInfo extends AbstractModel
{
    /**
     * @var string <p>范围<br>系统事件:<br>ANONYMOUS_ACCESS: 匿名访问<br>ABNORMAL_UA_REQ: 异常UA请求<br>ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动<br>GET_CREDENTIALS: 凭据信息获取<br>MOUNT_SENSITIVE_PATH: 敏感路径挂载<br>COMMAND_RUN: 命令执行<br>PRIVILEGE_CONTAINER: 特权容器<br>EXCEPTION_CRONTAB_TASK: 异常定时任务<br>STATICS_POD: 静态pod创建<br>ABNORMAL_CREATE_POD: 异常pod创建<br>USER_DEFINED: 用户自定义</p>
     */
    public $Scope;

    /**
     * @var string <p>动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)</p>
     */
    public $Action;

    /**
     * @var string <p>威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示</p>
     */
    public $RiskLevel;

    /**
     * @var boolean <p>开关状态(true:开 false:关) 适用于系统规则</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否被删除 适用于自定义规则入参</p>
     */
    public $IsDelete;

    /**
     * @var string <p>规则类型对应中文</p>
     */
    public $RuleTypeZH;

    /**
     * @param string $Scope <p>范围<br>系统事件:<br>ANONYMOUS_ACCESS: 匿名访问<br>ABNORMAL_UA_REQ: 异常UA请求<br>ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动<br>GET_CREDENTIALS: 凭据信息获取<br>MOUNT_SENSITIVE_PATH: 敏感路径挂载<br>COMMAND_RUN: 命令执行<br>PRIVILEGE_CONTAINER: 特权容器<br>EXCEPTION_CRONTAB_TASK: 异常定时任务<br>STATICS_POD: 静态pod创建<br>ABNORMAL_CREATE_POD: 异常pod创建<br>USER_DEFINED: 用户自定义</p>
     * @param string $Action <p>动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)</p>
     * @param string $RiskLevel <p>威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示</p>
     * @param boolean $Status <p>开关状态(true:开 false:关) 适用于系统规则</p>
     * @param boolean $IsDelete <p>是否被删除 适用于自定义规则入参</p>
     * @param string $RuleTypeZH <p>规则类型对应中文</p>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }

        if (array_key_exists("RuleTypeZH",$param) and $param["RuleTypeZH"] !== null) {
            $this->RuleTypeZH = $param["RuleTypeZH"];
        }
    }
}
