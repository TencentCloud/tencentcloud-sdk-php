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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新记录详情
 *
 * @method integer getId() 获取详情记录id
 * @method void setId(integer $Id) 设置详情记录id
 * @method string getCertId() 获取新证书ID
 * @method void setCertId(string $CertId) 设置新证书ID
 * @method string getOldCertId() 获取旧证书ID
 * @method void setOldCertId(string $OldCertId) 设置旧证书ID
 * @method array getDomains() 获取部署域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomains(array $Domains) 设置部署域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取部署资源类型
 * @method void setResourceType(string $ResourceType) 设置部署资源类型
 * @method string getRegion() 获取部署地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置部署地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取部署状态
 * @method void setStatus(integer $Status) 设置部署状态
 * @method string getErrorMsg() 获取部署错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置部署错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取部署时间
 * @method void setCreateTime(string $CreateTime) 设置部署时间
 * @method string getUpdateTime() 获取最后一次更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后一次更新时间
 * @method string getInstanceId() 获取部署实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置部署实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取部署实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置部署实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerId() 获取部署监听器ID（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置部署监听器ID（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerName() 获取部署监听器名称（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerName(string $ListenerName) 设置部署监听器名称（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSniSwitch() 获取是否开启SNI（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取bucket名称（COS专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置bucket名称（COS专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretName() 获取secret名称（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretName(string $SecretName) 设置secret名称（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTCBType() 获取TCB部署类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTCBType(string $TCBType) 设置TCB部署类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpdateRecordDetail extends AbstractModel
{
    /**
     * @var integer 详情记录id
     */
    public $Id;

    /**
     * @var string 新证书ID
     */
    public $CertId;

    /**
     * @var string 旧证书ID
     */
    public $OldCertId;

    /**
     * @var array 部署域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domains;

    /**
     * @var string 部署资源类型
     */
    public $ResourceType;

    /**
     * @var string 部署地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 部署状态
     */
    public $Status;

    /**
     * @var string 部署错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 部署时间
     */
    public $CreateTime;

    /**
     * @var string 最后一次更新时间
     */
    public $UpdateTime;

    /**
     * @var string 部署实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 部署实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 部署监听器ID（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var string 部署监听器名称（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerName;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var integer 是否开启SNI（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SniSwitch;

    /**
     * @var string bucket名称（COS专用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 命名空间（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string secret名称（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretName;

    /**
     * @var string 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var string TCB部署类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TCBType;

    /**
     * @param integer $Id 详情记录id
     * @param string $CertId 新证书ID
     * @param string $OldCertId 旧证书ID
     * @param array $Domains 部署域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 部署资源类型
     * @param string $Region 部署地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 部署状态
     * @param string $ErrorMsg 部署错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 部署时间
     * @param string $UpdateTime 最后一次更新时间
     * @param string $InstanceId 部署实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 部署实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerId 部署监听器ID（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerName 部署监听器名称（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SniSwitch 是否开启SNI（CLB专用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket bucket名称（COS专用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretName secret名称（TKE专用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TCBType TCB部署类型
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("OldCertId",$param) and $param["OldCertId"] !== null) {
            $this->OldCertId = $param["OldCertId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("TCBType",$param) and $param["TCBType"] !== null) {
            $this->TCBType = $param["TCBType"];
        }
    }
}
