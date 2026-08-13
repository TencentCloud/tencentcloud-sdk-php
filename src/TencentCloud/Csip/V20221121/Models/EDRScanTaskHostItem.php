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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机资产扫描详情项
 *
 * @method string getQuuid() 获取<p>主机唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置<p>主机唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取<p>主机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置<p>主机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取<p>公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取<p>内网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsType() 获取<p>操作系统</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsType(string $OsType) 设置<p>操作系统</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取<p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置<p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>资产所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>资产所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloudType() 获取<p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(integer $CloudType) 设置<p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCount() 获取<p>风险数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixSuggestion() 获取<p>解决方案</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixSuggestion(string $FixSuggestion) 设置<p>解决方案</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EDRScanTaskHostItem extends AbstractModel
{
    /**
     * @var string <p>主机唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var string <p>主机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string <p>操作系统</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsType;

    /**
     * @var string <p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var integer <p>资产所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer <p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @var string <p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>风险数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCount;

    /**
     * @var string <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string <p>解决方案</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixSuggestion;

    /**
     * @param string $Quuid <p>主机唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName <p>主机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp <p>公网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp <p>内网IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsType <p>操作系统</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName <p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>资产所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloudType <p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCount <p>风险数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixSuggestion <p>解决方案</p>
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }
    }
}
