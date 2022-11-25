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
 * k8sapi异常请求趋势Item
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getExceptionUARequestCount() 获取异常UA请求事件数
 * @method void setExceptionUARequestCount(integer $ExceptionUARequestCount) 设置异常UA请求事件数
 * @method integer getAnonymousUserRightCount() 获取匿名用户权限事件数
 * @method void setAnonymousUserRightCount(integer $AnonymousUserRightCount) 设置匿名用户权限事件数
 * @method integer getCredentialInformationObtainCount() 获取凭据信息获取事件数
 * @method void setCredentialInformationObtainCount(integer $CredentialInformationObtainCount) 设置凭据信息获取事件数
 * @method integer getSensitiveDataMountCount() 获取敏感数据挂载事件数
 * @method void setSensitiveDataMountCount(integer $SensitiveDataMountCount) 设置敏感数据挂载事件数
 * @method integer getCmdExecCount() 获取命令执行事件数
 * @method void setCmdExecCount(integer $CmdExecCount) 设置命令执行事件数
 * @method integer getAbnormalScheduledTaskCount() 获取异常定时任务事件数
 * @method void setAbnormalScheduledTaskCount(integer $AbnormalScheduledTaskCount) 设置异常定时任务事件数
 * @method integer getStaticsPodCreateCount() 获取静态Pod创建数
 * @method void setStaticsPodCreateCount(integer $StaticsPodCreateCount) 设置静态Pod创建数
 * @method integer getDoubtfulContainerCreateCount() 获取可疑容器创建数
 * @method void setDoubtfulContainerCreateCount(integer $DoubtfulContainerCreateCount) 设置可疑容器创建数
 * @method integer getUserDefinedRuleCount() 获取自定义规则事件数
 * @method void setUserDefinedRuleCount(integer $UserDefinedRuleCount) 设置自定义规则事件数
 * @method integer getAnonymousAccessCount() 获取匿名访问事件数
 * @method void setAnonymousAccessCount(integer $AnonymousAccessCount) 设置匿名访问事件数
 * @method integer getPrivilegeContainerCount() 获取特权容器事件数
 * @method void setPrivilegeContainerCount(integer $PrivilegeContainerCount) 设置特权容器事件数
 */
class K8sApiAbnormalTendencyItem extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 异常UA请求事件数
     */
    public $ExceptionUARequestCount;

    /**
     * @var integer 匿名用户权限事件数
     */
    public $AnonymousUserRightCount;

    /**
     * @var integer 凭据信息获取事件数
     */
    public $CredentialInformationObtainCount;

    /**
     * @var integer 敏感数据挂载事件数
     */
    public $SensitiveDataMountCount;

    /**
     * @var integer 命令执行事件数
     */
    public $CmdExecCount;

    /**
     * @var integer 异常定时任务事件数
     */
    public $AbnormalScheduledTaskCount;

    /**
     * @var integer 静态Pod创建数
     */
    public $StaticsPodCreateCount;

    /**
     * @var integer 可疑容器创建数
     */
    public $DoubtfulContainerCreateCount;

    /**
     * @var integer 自定义规则事件数
     */
    public $UserDefinedRuleCount;

    /**
     * @var integer 匿名访问事件数
     */
    public $AnonymousAccessCount;

    /**
     * @var integer 特权容器事件数
     */
    public $PrivilegeContainerCount;

    /**
     * @param string $Date 日期
     * @param integer $ExceptionUARequestCount 异常UA请求事件数
     * @param integer $AnonymousUserRightCount 匿名用户权限事件数
     * @param integer $CredentialInformationObtainCount 凭据信息获取事件数
     * @param integer $SensitiveDataMountCount 敏感数据挂载事件数
     * @param integer $CmdExecCount 命令执行事件数
     * @param integer $AbnormalScheduledTaskCount 异常定时任务事件数
     * @param integer $StaticsPodCreateCount 静态Pod创建数
     * @param integer $DoubtfulContainerCreateCount 可疑容器创建数
     * @param integer $UserDefinedRuleCount 自定义规则事件数
     * @param integer $AnonymousAccessCount 匿名访问事件数
     * @param integer $PrivilegeContainerCount 特权容器事件数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ExceptionUARequestCount",$param) and $param["ExceptionUARequestCount"] !== null) {
            $this->ExceptionUARequestCount = $param["ExceptionUARequestCount"];
        }

        if (array_key_exists("AnonymousUserRightCount",$param) and $param["AnonymousUserRightCount"] !== null) {
            $this->AnonymousUserRightCount = $param["AnonymousUserRightCount"];
        }

        if (array_key_exists("CredentialInformationObtainCount",$param) and $param["CredentialInformationObtainCount"] !== null) {
            $this->CredentialInformationObtainCount = $param["CredentialInformationObtainCount"];
        }

        if (array_key_exists("SensitiveDataMountCount",$param) and $param["SensitiveDataMountCount"] !== null) {
            $this->SensitiveDataMountCount = $param["SensitiveDataMountCount"];
        }

        if (array_key_exists("CmdExecCount",$param) and $param["CmdExecCount"] !== null) {
            $this->CmdExecCount = $param["CmdExecCount"];
        }

        if (array_key_exists("AbnormalScheduledTaskCount",$param) and $param["AbnormalScheduledTaskCount"] !== null) {
            $this->AbnormalScheduledTaskCount = $param["AbnormalScheduledTaskCount"];
        }

        if (array_key_exists("StaticsPodCreateCount",$param) and $param["StaticsPodCreateCount"] !== null) {
            $this->StaticsPodCreateCount = $param["StaticsPodCreateCount"];
        }

        if (array_key_exists("DoubtfulContainerCreateCount",$param) and $param["DoubtfulContainerCreateCount"] !== null) {
            $this->DoubtfulContainerCreateCount = $param["DoubtfulContainerCreateCount"];
        }

        if (array_key_exists("UserDefinedRuleCount",$param) and $param["UserDefinedRuleCount"] !== null) {
            $this->UserDefinedRuleCount = $param["UserDefinedRuleCount"];
        }

        if (array_key_exists("AnonymousAccessCount",$param) and $param["AnonymousAccessCount"] !== null) {
            $this->AnonymousAccessCount = $param["AnonymousAccessCount"];
        }

        if (array_key_exists("PrivilegeContainerCount",$param) and $param["PrivilegeContainerCount"] !== null) {
            $this->PrivilegeContainerCount = $param["PrivilegeContainerCount"];
        }
    }
}
