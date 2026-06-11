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
 * 集群列表Item
 *
 * @method string getClusterID() 获取<p>集群ID</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getStatus() 获取<p>集群状态<br>CSR_RUNNING: 运行中<br>CSR_EXCEPTION:异常<br>CSR_DEL:已经删除</p>
 * @method void setStatus(string $Status) 设置<p>集群状态<br>CSR_RUNNING: 运行中<br>CSR_EXCEPTION:异常<br>CSR_DEL:已经删除</p>
 * @method string getBindRuleID() 获取<p>绑定的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindRuleID(string $BindRuleID) 设置<p>绑定的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindRuleName() 获取<p>绑定规则名称</p>
 * @method void setBindRuleName(string $BindRuleName) 设置<p>绑定规则名称</p>
 * @method string getClusterType() 获取<p>集群类型:<br>CT_TKE:TKE集群;<br>CT_USER_CREATE:用户自建集群;<br>CT_TKE_SERVERLESS:TKE Serverless集群;</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型:<br>CT_TKE:TKE集群;<br>CT_USER_CREATE:用户自建集群;<br>CT_TKE_SERVERLESS:TKE Serverless集群;</p>
 * @method string getClusterVersion() 获取<p>集群版本</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>集群版本</p>
 * @method integer getMemLimit() 获取<p>内存量</p>
 * @method void setMemLimit(integer $MemLimit) 设置<p>内存量</p>
 * @method integer getCpuLimit() 获取<p>cpu</p>
 * @method void setCpuLimit(integer $CpuLimit) 设置<p>cpu</p>
 * @method string getClusterAuditStatus() 获取<p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
 * @method void setClusterAuditStatus(string $ClusterAuditStatus) 设置<p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
 * @method string getAccessedStatus() 获取<p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
 * @method void setAccessedStatus(string $AccessedStatus) 设置<p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
 */
class AssetClusterListItem extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群状态<br>CSR_RUNNING: 运行中<br>CSR_EXCEPTION:异常<br>CSR_DEL:已经删除</p>
     */
    public $Status;

    /**
     * @var string <p>绑定的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindRuleID;

    /**
     * @var string <p>绑定规则名称</p>
     */
    public $BindRuleName;

    /**
     * @var string <p>集群类型:<br>CT_TKE:TKE集群;<br>CT_USER_CREATE:用户自建集群;<br>CT_TKE_SERVERLESS:TKE Serverless集群;</p>
     */
    public $ClusterType;

    /**
     * @var string <p>集群版本</p>
     */
    public $ClusterVersion;

    /**
     * @var integer <p>内存量</p>
     */
    public $MemLimit;

    /**
     * @var integer <p>cpu</p>
     */
    public $CpuLimit;

    /**
     * @var string <p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
     */
    public $ClusterAuditStatus;

    /**
     * @var string <p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
     */
    public $AccessedStatus;

    /**
     * @param string $ClusterID <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Status <p>集群状态<br>CSR_RUNNING: 运行中<br>CSR_EXCEPTION:异常<br>CSR_DEL:已经删除</p>
     * @param string $BindRuleID <p>绑定的集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindRuleName <p>绑定规则名称</p>
     * @param string $ClusterType <p>集群类型:<br>CT_TKE:TKE集群;<br>CT_USER_CREATE:用户自建集群;<br>CT_TKE_SERVERLESS:TKE Serverless集群;</p>
     * @param string $ClusterVersion <p>集群版本</p>
     * @param integer $MemLimit <p>内存量</p>
     * @param integer $CpuLimit <p>cpu</p>
     * @param string $ClusterAuditStatus <p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
     * @param string $AccessedStatus <p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BindRuleID",$param) and $param["BindRuleID"] !== null) {
            $this->BindRuleID = $param["BindRuleID"];
        }

        if (array_key_exists("BindRuleName",$param) and $param["BindRuleName"] !== null) {
            $this->BindRuleName = $param["BindRuleName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("ClusterAuditStatus",$param) and $param["ClusterAuditStatus"] !== null) {
            $this->ClusterAuditStatus = $param["ClusterAuditStatus"];
        }

        if (array_key_exists("AccessedStatus",$param) and $param["AccessedStatus"] !== null) {
            $this->AccessedStatus = $param["AccessedStatus"];
        }
    }
}
