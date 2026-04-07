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
 * k8sapi异常请求趋势Item
 *
 * @method string getDate() 获取<p>日期</p>
 * @method void setDate(string $Date) 设置<p>日期</p>
 * @method integer getExceptionUARequestCount() 获取<p>异常UA请求事件数</p>
 * @method void setExceptionUARequestCount(integer $ExceptionUARequestCount) 设置<p>异常UA请求事件数</p>
 * @method integer getAnonymousUserRightCount() 获取<p>匿名用户权限事件数</p>
 * @method void setAnonymousUserRightCount(integer $AnonymousUserRightCount) 设置<p>匿名用户权限事件数</p>
 * @method integer getCredentialInformationObtainCount() 获取<p>凭据信息获取事件数</p>
 * @method void setCredentialInformationObtainCount(integer $CredentialInformationObtainCount) 设置<p>凭据信息获取事件数</p>
 * @method integer getSensitiveDataMountCount() 获取<p>敏感数据挂载事件数</p>
 * @method void setSensitiveDataMountCount(integer $SensitiveDataMountCount) 设置<p>敏感数据挂载事件数</p>
 * @method integer getCmdExecCount() 获取<p>命令执行事件数</p>
 * @method void setCmdExecCount(integer $CmdExecCount) 设置<p>命令执行事件数</p>
 * @method integer getAbnormalScheduledTaskCount() 获取<p>异常定时任务事件数</p>
 * @method void setAbnormalScheduledTaskCount(integer $AbnormalScheduledTaskCount) 设置<p>异常定时任务事件数</p>
 * @method integer getStaticsPodCreateCount() 获取<p>静态Pod创建数</p>
 * @method void setStaticsPodCreateCount(integer $StaticsPodCreateCount) 设置<p>静态Pod创建数</p>
 * @method integer getDoubtfulContainerCreateCount() 获取<p>可疑容器创建数</p>
 * @method void setDoubtfulContainerCreateCount(integer $DoubtfulContainerCreateCount) 设置<p>可疑容器创建数</p>
 * @method integer getUserDefinedRuleCount() 获取<p>自定义规则事件数</p>
 * @method void setUserDefinedRuleCount(integer $UserDefinedRuleCount) 设置<p>自定义规则事件数</p>
 * @method integer getAnonymousAccessCount() 获取<p>匿名访问事件数</p>
 * @method void setAnonymousAccessCount(integer $AnonymousAccessCount) 设置<p>匿名访问事件数</p>
 * @method integer getPrivilegeContainerCount() 获取<p>特权容器事件数</p>
 * @method void setPrivilegeContainerCount(integer $PrivilegeContainerCount) 设置<p>特权容器事件数</p>
 * @method array getRuleTypeCountSet() 获取<p>规则类型对应告警数量</p>
 * @method void setRuleTypeCountSet(array $RuleTypeCountSet) 设置<p>规则类型对应告警数量</p>
 */
class K8sApiAbnormalTendencyItem extends AbstractModel
{
    /**
     * @var string <p>日期</p>
     */
    public $Date;

    /**
     * @var integer <p>异常UA请求事件数</p>
     */
    public $ExceptionUARequestCount;

    /**
     * @var integer <p>匿名用户权限事件数</p>
     */
    public $AnonymousUserRightCount;

    /**
     * @var integer <p>凭据信息获取事件数</p>
     */
    public $CredentialInformationObtainCount;

    /**
     * @var integer <p>敏感数据挂载事件数</p>
     */
    public $SensitiveDataMountCount;

    /**
     * @var integer <p>命令执行事件数</p>
     */
    public $CmdExecCount;

    /**
     * @var integer <p>异常定时任务事件数</p>
     */
    public $AbnormalScheduledTaskCount;

    /**
     * @var integer <p>静态Pod创建数</p>
     */
    public $StaticsPodCreateCount;

    /**
     * @var integer <p>可疑容器创建数</p>
     */
    public $DoubtfulContainerCreateCount;

    /**
     * @var integer <p>自定义规则事件数</p>
     */
    public $UserDefinedRuleCount;

    /**
     * @var integer <p>匿名访问事件数</p>
     */
    public $AnonymousAccessCount;

    /**
     * @var integer <p>特权容器事件数</p>
     */
    public $PrivilegeContainerCount;

    /**
     * @var array <p>规则类型对应告警数量</p>
     */
    public $RuleTypeCountSet;

    /**
     * @param string $Date <p>日期</p>
     * @param integer $ExceptionUARequestCount <p>异常UA请求事件数</p>
     * @param integer $AnonymousUserRightCount <p>匿名用户权限事件数</p>
     * @param integer $CredentialInformationObtainCount <p>凭据信息获取事件数</p>
     * @param integer $SensitiveDataMountCount <p>敏感数据挂载事件数</p>
     * @param integer $CmdExecCount <p>命令执行事件数</p>
     * @param integer $AbnormalScheduledTaskCount <p>异常定时任务事件数</p>
     * @param integer $StaticsPodCreateCount <p>静态Pod创建数</p>
     * @param integer $DoubtfulContainerCreateCount <p>可疑容器创建数</p>
     * @param integer $UserDefinedRuleCount <p>自定义规则事件数</p>
     * @param integer $AnonymousAccessCount <p>匿名访问事件数</p>
     * @param integer $PrivilegeContainerCount <p>特权容器事件数</p>
     * @param array $RuleTypeCountSet <p>规则类型对应告警数量</p>
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

        if (array_key_exists("RuleTypeCountSet",$param) and $param["RuleTypeCountSet"] !== null) {
            $this->RuleTypeCountSet = [];
            foreach ($param["RuleTypeCountSet"] as $key => $value){
                $obj = new K8SAPIRuleTypeCountItem();
                $obj->deserialize($value);
                array_push($this->RuleTypeCountSet, $obj);
            }
        }
    }
}
