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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署记录详情
 *
 * @method integer getId() 获取部署记录详情ID
 * @method void setId(integer $Id) 设置部署记录详情ID
 * @method string getCertId() 获取部署证书ID
 * @method void setCertId(string $CertId) 设置部署证书ID
 * @method string getOldCertId() 获取原绑定证书ID
 * @method void setOldCertId(string $OldCertId) 设置原绑定证书ID
 * @method string getInstanceId() 获取部署实例ID
 * @method void setInstanceId(string $InstanceId) 设置部署实例ID
 * @method string getInstanceName() 获取部署实例名称
 * @method void setInstanceName(string $InstanceName) 设置部署实例名称
 * @method string getListenerId() 获取部署监听器ID
 * @method void setListenerId(string $ListenerId) 设置部署监听器ID
 * @method array getDomains() 获取部署域名列表
 * @method void setDomains(array $Domains) 设置部署域名列表
 * @method string getProtocol() 获取部署监听器协议
 * @method void setProtocol(string $Protocol) 设置部署监听器协议
 * @method integer getStatus() 获取部署状态
 * @method void setStatus(integer $Status) 设置部署状态
 * @method string getErrorMsg() 获取部署错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置部署错误信息
 * @method string getCreateTime() 获取部署记录详情创建时间
 * @method void setCreateTime(string $CreateTime) 设置部署记录详情创建时间
 * @method string getUpdateTime() 获取部署记录详情最后一次更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置部署记录详情最后一次更新时间
 * @method string getListenerName() 获取部署监听器名称
 * @method void setListenerName(string $ListenerName) 设置部署监听器名称
 * @method integer getSniSwitch() 获取是否开启SNI
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI
 * @method string getBucket() 获取COS存储桶名称
 * @method void setBucket(string $Bucket) 设置COS存储桶名称
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method string getSecretName() 获取secret名称
 * @method void setSecretName(string $SecretName) 设置secret名称
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getEnvId() 获取TCB环境ID
 * @method void setEnvId(string $EnvId) 设置TCB环境ID
 * @method string getTCBType() 获取部署的TCB类型
 * @method void setTCBType(string $TCBType) 设置部署的TCB类型
 * @method string getRegion() 获取部署的TCB地域
 * @method void setRegion(string $Region) 设置部署的TCB地域
 * @method array getUrl() 获取部署CLB监听器的Url
 * @method void setUrl(array $Url) 设置部署CLB监听器的Url
 * @method string getAlgorithm() 获取当前部署证书加密算法
 * @method void setAlgorithm(string $Algorithm) 设置当前部署证书加密算法
 * @method string getOldAlgorithm() 获取原证书加密算法
 * @method void setOldAlgorithm(string $OldAlgorithm) 设置原证书加密算法
 * @method string getInstanceStatus() 获取实例状态，不同云产品状态不一样
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态，不同云产品状态不一样
 * @method string getListenerStatus() 获取监听器状态
 * @method void setListenerStatus(string $ListenerStatus) 设置监听器状态
 */
class DeployRecordDetail extends AbstractModel
{
    /**
     * @var integer 部署记录详情ID
     */
    public $Id;

    /**
     * @var string 部署证书ID
     */
    public $CertId;

    /**
     * @var string 原绑定证书ID
     */
    public $OldCertId;

    /**
     * @var string 部署实例ID
     */
    public $InstanceId;

    /**
     * @var string 部署实例名称
     */
    public $InstanceName;

    /**
     * @var string 部署监听器ID
     */
    public $ListenerId;

    /**
     * @var array 部署域名列表
     */
    public $Domains;

    /**
     * @var string 部署监听器协议
     */
    public $Protocol;

    /**
     * @var integer 部署状态
     */
    public $Status;

    /**
     * @var string 部署错误信息
     */
    public $ErrorMsg;

    /**
     * @var string 部署记录详情创建时间
     */
    public $CreateTime;

    /**
     * @var string 部署记录详情最后一次更新时间
     */
    public $UpdateTime;

    /**
     * @var string 部署监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 是否开启SNI
     */
    public $SniSwitch;

    /**
     * @var string COS存储桶名称
     */
    public $Bucket;

    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var string secret名称
     */
    public $SecretName;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string TCB环境ID
     */
    public $EnvId;

    /**
     * @var string 部署的TCB类型
     */
    public $TCBType;

    /**
     * @var string 部署的TCB地域
     */
    public $Region;

    /**
     * @var array 部署CLB监听器的Url
     */
    public $Url;

    /**
     * @var string 当前部署证书加密算法
     */
    public $Algorithm;

    /**
     * @var string 原证书加密算法
     */
    public $OldAlgorithm;

    /**
     * @var string 实例状态，不同云产品状态不一样
     */
    public $InstanceStatus;

    /**
     * @var string 监听器状态
     */
    public $ListenerStatus;

    /**
     * @param integer $Id 部署记录详情ID
     * @param string $CertId 部署证书ID
     * @param string $OldCertId 原绑定证书ID
     * @param string $InstanceId 部署实例ID
     * @param string $InstanceName 部署实例名称
     * @param string $ListenerId 部署监听器ID
     * @param array $Domains 部署域名列表
     * @param string $Protocol 部署监听器协议
     * @param integer $Status 部署状态
     * @param string $ErrorMsg 部署错误信息
     * @param string $CreateTime 部署记录详情创建时间
     * @param string $UpdateTime 部署记录详情最后一次更新时间
     * @param string $ListenerName 部署监听器名称
     * @param integer $SniSwitch 是否开启SNI
     * @param string $Bucket COS存储桶名称
     * @param string $Namespace 命名空间名称
     * @param string $SecretName secret名称
     * @param integer $Port 端口
     * @param string $EnvId TCB环境ID
     * @param string $TCBType 部署的TCB类型
     * @param string $Region 部署的TCB地域
     * @param array $Url 部署CLB监听器的Url
     * @param string $Algorithm 当前部署证书加密算法
     * @param string $OldAlgorithm 原证书加密算法
     * @param string $InstanceStatus 实例状态，不同云产品状态不一样
     * @param string $ListenerStatus 监听器状态
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("TCBType",$param) and $param["TCBType"] !== null) {
            $this->TCBType = $param["TCBType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("OldAlgorithm",$param) and $param["OldAlgorithm"] !== null) {
            $this->OldAlgorithm = $param["OldAlgorithm"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }
    }
}
