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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述用户创建的集群信息
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getName() 获取集群名称
 * @method void setName(string $Name) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getAppId() 获取用户 AppID
 * @method void setAppId(integer $AppId) 设置用户 AppID
 * @method string getOwnerUin() 获取主账号 UIN
 * @method void setOwnerUin(string $OwnerUin) 设置主账号 UIN
 * @method string getCreatorUin() 获取创建者 UIN
 * @method void setCreatorUin(string $CreatorUin) 设置创建者 UIN
 * @method integer getStatus() 获取集群状态, 1 未初始化,，3 初始化中，2 运行中
 * @method void setStatus(integer $Status) 设置集群状态, 1 未初始化,，3 初始化中，2 运行中
 * @method string getRemark() 获取描述
 * @method void setRemark(string $Remark) 设置描述
 * @method string getCreateTime() 获取集群创建时间
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间
 * @method string getUpdateTime() 获取最后一次操作集群的时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后一次操作集群的时间
 * @method integer getCuNum() 获取CU 数量
 * @method void setCuNum(integer $CuNum) 设置CU 数量
 * @method integer getCuMem() 获取CU 内存规格
 * @method void setCuMem(integer $CuMem) 设置CU 内存规格
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method array getCCNs() 获取网络
 * @method void setCCNs(array $CCNs) 设置网络
 * @method integer getNetEnvironmentType() 获取网络
 * @method void setNetEnvironmentType(integer $NetEnvironmentType) 设置网络
 * @method integer getFreeCuNum() 获取空闲 CU
 * @method void setFreeCuNum(integer $FreeCuNum) 设置空闲 CU
 * @method array getTags() 获取集群绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置集群绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取集群隔离时间; 没隔离时间，则为 -
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置集群隔离时间; 没隔离时间，则为 -
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取集群过期时间; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置集群过期时间; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondsUntilExpiry() 获取距离过期还有多少秒; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondsUntilExpiry(string $SecondsUntilExpiry) 设置距离过期还有多少秒; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultCOSBucket() 获取集群的默认 COS 存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCOSBucket(string $DefaultCOSBucket) 设置集群的默认 COS 存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSLogSet() 获取集群的CLS 日志集 LogSet
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSLogSet(string $CLSLogSet) 设置集群的CLS 日志集 LogSet
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSTopicId() 获取集群的CLS 日志主题 TopicId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSTopicId(string $CLSTopicId) 设置集群的CLS 日志主题 TopicId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSLogName() 获取集群的CLS 日志集  名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSLogName(string $CLSLogName) 设置集群的CLS 日志集  名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSTopicName() 获取集群的CLS 日志主题  名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSTopicName(string $CLSTopicName) 设置集群的CLS 日志主题  名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClusterVersion getVersion() 获取集群的版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(ClusterVersion $Version) 设置集群的版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFreeCu() 获取细粒度资源下的空闲CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeCu(float $FreeCu) 设置细粒度资源下的空闲CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultLogCollectConf() 获取集群的默认日志采集配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultLogCollectConf(string $DefaultLogCollectConf) 设置集群的默认日志采集配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCustomizedDNSEnabled() 获取取值：0-没有设置，1-已设置，2-不允许设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomizedDNSEnabled(integer $CustomizedDNSEnabled) 设置取值：0-没有设置，1-已设置，2-不允许设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCorrelations() 获取空间信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorrelations(array $Correlations) 设置空间信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取运行CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置运行CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取0 后付费,1 预付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置0 后付费,1 预付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNeedManageNode() 获取前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNeedManageNode(integer $IsNeedManageNode) 设置前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterSessions() 获取session集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterSessions(array $ClusterSessions) 设置session集群信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $Name;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 用户 AppID
     */
    public $AppId;

    /**
     * @var string 主账号 UIN
     */
    public $OwnerUin;

    /**
     * @var string 创建者 UIN
     */
    public $CreatorUin;

    /**
     * @var integer 集群状态, 1 未初始化,，3 初始化中，2 运行中
     */
    public $Status;

    /**
     * @var string 描述
     */
    public $Remark;

    /**
     * @var string 集群创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后一次操作集群的时间
     */
    public $UpdateTime;

    /**
     * @var integer CU 数量
     */
    public $CuNum;

    /**
     * @var integer CU 内存规格
     */
    public $CuMem;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var array 网络
     */
    public $CCNs;

    /**
     * @var integer 网络
     */
    public $NetEnvironmentType;

    /**
     * @var integer 空闲 CU
     */
    public $FreeCuNum;

    /**
     * @var array 集群绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 集群隔离时间; 没隔离时间，则为 -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string 集群过期时间; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 距离过期还有多少秒; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondsUntilExpiry;

    /**
     * @var integer 自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 集群的默认 COS 存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCOSBucket;

    /**
     * @var string 集群的CLS 日志集 LogSet
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSLogSet;

    /**
     * @var string 集群的CLS 日志主题 TopicId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSTopicId;

    /**
     * @var string 集群的CLS 日志集  名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSLogName;

    /**
     * @var string 集群的CLS 日志主题  名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSTopicName;

    /**
     * @var ClusterVersion 集群的版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var float 细粒度资源下的空闲CU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeCu;

    /**
     * @var string 集群的默认日志采集配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultLogCollectConf;

    /**
     * @var integer 取值：0-没有设置，1-已设置，2-不允许设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomizedDNSEnabled;

    /**
     * @var array 空间信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Correlations;

    /**
     * @var float 运行CU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var integer 0 后付费,1 预付费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var integer 前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNeedManageNode;

    /**
     * @var array session集群信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterSessions;

    /**
     * @param string $ClusterId 集群 ID
     * @param string $Name 集群名称
     * @param string $Region 地域
     * @param integer $AppId 用户 AppID
     * @param string $OwnerUin 主账号 UIN
     * @param string $CreatorUin 创建者 UIN
     * @param integer $Status 集群状态, 1 未初始化,，3 初始化中，2 运行中
     * @param string $Remark 描述
     * @param string $CreateTime 集群创建时间
     * @param string $UpdateTime 最后一次操作集群的时间
     * @param integer $CuNum CU 数量
     * @param integer $CuMem CU 内存规格
     * @param string $Zone 可用区
     * @param string $StatusDesc 状态描述
     * @param array $CCNs 网络
     * @param integer $NetEnvironmentType 网络
     * @param integer $FreeCuNum 空闲 CU
     * @param array $Tags 集群绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime 集群隔离时间; 没隔离时间，则为 -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 集群过期时间; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondsUntilExpiry 距离过期还有多少秒; 没过期概念，则为 -
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultCOSBucket 集群的默认 COS 存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSLogSet 集群的CLS 日志集 LogSet
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSTopicId 集群的CLS 日志主题 TopicId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSLogName 集群的CLS 日志集  名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSTopicName 集群的CLS 日志主题  名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClusterVersion $Version 集群的版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FreeCu 细粒度资源下的空闲CU
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultLogCollectConf 集群的默认日志采集配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CustomizedDNSEnabled 取值：0-没有设置，1-已设置，2-不允许设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Correlations 空间信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu 运行CU
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 0 后付费,1 预付费
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNeedManageNode 前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterSessions session集群信息
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CuNum",$param) and $param["CuNum"] !== null) {
            $this->CuNum = $param["CuNum"];
        }

        if (array_key_exists("CuMem",$param) and $param["CuMem"] !== null) {
            $this->CuMem = $param["CuMem"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CCNs",$param) and $param["CCNs"] !== null) {
            $this->CCNs = [];
            foreach ($param["CCNs"] as $key => $value){
                $obj = new CCN();
                $obj->deserialize($value);
                array_push($this->CCNs, $obj);
            }
        }

        if (array_key_exists("NetEnvironmentType",$param) and $param["NetEnvironmentType"] !== null) {
            $this->NetEnvironmentType = $param["NetEnvironmentType"];
        }

        if (array_key_exists("FreeCuNum",$param) and $param["FreeCuNum"] !== null) {
            $this->FreeCuNum = $param["FreeCuNum"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SecondsUntilExpiry",$param) and $param["SecondsUntilExpiry"] !== null) {
            $this->SecondsUntilExpiry = $param["SecondsUntilExpiry"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DefaultCOSBucket",$param) and $param["DefaultCOSBucket"] !== null) {
            $this->DefaultCOSBucket = $param["DefaultCOSBucket"];
        }

        if (array_key_exists("CLSLogSet",$param) and $param["CLSLogSet"] !== null) {
            $this->CLSLogSet = $param["CLSLogSet"];
        }

        if (array_key_exists("CLSTopicId",$param) and $param["CLSTopicId"] !== null) {
            $this->CLSTopicId = $param["CLSTopicId"];
        }

        if (array_key_exists("CLSLogName",$param) and $param["CLSLogName"] !== null) {
            $this->CLSLogName = $param["CLSLogName"];
        }

        if (array_key_exists("CLSTopicName",$param) and $param["CLSTopicName"] !== null) {
            $this->CLSTopicName = $param["CLSTopicName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new ClusterVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("FreeCu",$param) and $param["FreeCu"] !== null) {
            $this->FreeCu = $param["FreeCu"];
        }

        if (array_key_exists("DefaultLogCollectConf",$param) and $param["DefaultLogCollectConf"] !== null) {
            $this->DefaultLogCollectConf = $param["DefaultLogCollectConf"];
        }

        if (array_key_exists("CustomizedDNSEnabled",$param) and $param["CustomizedDNSEnabled"] !== null) {
            $this->CustomizedDNSEnabled = $param["CustomizedDNSEnabled"];
        }

        if (array_key_exists("Correlations",$param) and $param["Correlations"] !== null) {
            $this->Correlations = [];
            foreach ($param["Correlations"] as $key => $value){
                $obj = new WorkSpaceClusterItem();
                $obj->deserialize($value);
                array_push($this->Correlations, $obj);
            }
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsNeedManageNode",$param) and $param["IsNeedManageNode"] !== null) {
            $this->IsNeedManageNode = $param["IsNeedManageNode"];
        }

        if (array_key_exists("ClusterSessions",$param) and $param["ClusterSessions"] !== null) {
            $this->ClusterSessions = [];
            foreach ($param["ClusterSessions"] as $key => $value){
                $obj = new ClusterSession();
                $obj->deserialize($value);
                array_push($this->ClusterSessions, $obj);
            }
        }
    }
}
