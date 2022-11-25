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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8s api 异常事件规则配置范围 
 *
 * @method string getScope() 获取范围
系统事件:
ANONYMOUS_ACCESS: 匿名访问
ABNORMAL_UA_REQ: 异常UA请求
ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动
GET_CREDENTIALS: 凭据信息获取
MOUNT_SENSITIVE_PATH: 敏感路径挂载
COMMAND_RUN: 命令执行
PRIVILEGE_CONTAINER: 特权容器
EXCEPTION_CRONTAB_TASK: 异常定时任务
STATICS_POD: 静态pod创建
ABNORMAL_CREATE_POD: 异常pod创建
USER_DEFINED: 用户自定义
 * @method void setScope(string $Scope) 设置范围
系统事件:
ANONYMOUS_ACCESS: 匿名访问
ABNORMAL_UA_REQ: 异常UA请求
ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动
GET_CREDENTIALS: 凭据信息获取
MOUNT_SENSITIVE_PATH: 敏感路径挂载
COMMAND_RUN: 命令执行
PRIVILEGE_CONTAINER: 特权容器
EXCEPTION_CRONTAB_TASK: 异常定时任务
STATICS_POD: 静态pod创建
ABNORMAL_CREATE_POD: 异常pod创建
USER_DEFINED: 用户自定义
 * @method string getAction() 获取动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)
 * @method void setAction(string $Action) 设置动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)
 * @method string getRiskLevel() 获取威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStatus() 获取开关状态(true:开 false:关) 适用于系统规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置开关状态(true:开 false:关) 适用于系统规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDelete() 获取是否被删除 适用于自定义规则入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDelete(boolean $IsDelete) 设置是否被删除 适用于自定义规则入参
注意：此字段可能返回 null，表示取不到有效值。
 */
class K8sApiAbnormalRuleScopeInfo extends AbstractModel
{
    /**
     * @var string 范围
系统事件:
ANONYMOUS_ACCESS: 匿名访问
ABNORMAL_UA_REQ: 异常UA请求
ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动
GET_CREDENTIALS: 凭据信息获取
MOUNT_SENSITIVE_PATH: 敏感路径挂载
COMMAND_RUN: 命令执行
PRIVILEGE_CONTAINER: 特权容器
EXCEPTION_CRONTAB_TASK: 异常定时任务
STATICS_POD: 静态pod创建
ABNORMAL_CREATE_POD: 异常pod创建
USER_DEFINED: 用户自定义
     */
    public $Scope;

    /**
     * @var string 动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)
     */
    public $Action;

    /**
     * @var string 威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var boolean 开关状态(true:开 false:关) 适用于系统规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 是否被删除 适用于自定义规则入参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDelete;

    /**
     * @param string $Scope 范围
系统事件:
ANONYMOUS_ACCESS: 匿名访问
ABNORMAL_UA_REQ: 异常UA请求
ANONYMOUS_ABNORMAL_PERMISSION: 匿名用户权限异动
GET_CREDENTIALS: 凭据信息获取
MOUNT_SENSITIVE_PATH: 敏感路径挂载
COMMAND_RUN: 命令执行
PRIVILEGE_CONTAINER: 特权容器
EXCEPTION_CRONTAB_TASK: 异常定时任务
STATICS_POD: 静态pod创建
ABNORMAL_CREATE_POD: 异常pod创建
USER_DEFINED: 用户自定义
     * @param string $Action 动作(RULE_MODE_ALERT: 告警 RULE_MODE_RELEASE:放行)
     * @param string $RiskLevel 威胁等级 HIGH:高级 MIDDLE: 中级 LOW:低级 NOTICE:提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Status 开关状态(true:开 false:关) 适用于系统规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDelete 是否被删除 适用于自定义规则入参
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
