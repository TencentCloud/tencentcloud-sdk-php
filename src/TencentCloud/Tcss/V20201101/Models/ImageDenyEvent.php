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
 * 镜像拦截事件
 *
 * @method string getEventType() 获取事件类型 EVENT_RISK:风险事件类型，EVENT_PRIVILEGE:特权
 * @method void setEventType(string $EventType) 设置事件类型 EVENT_RISK:风险事件类型，EVENT_PRIVILEGE:特权
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleID() 获取规则RuleID
 * @method void setRuleID(string $RuleID) 设置规则RuleID
 * @method string getRuleType() 获取规则类型
 * @method void setRuleType(string $RuleType) 设置规则类型
 * @method integer getRuleStatus() 获取规则启用状态 0:开启，1:关闭
 * @method void setRuleStatus(integer $RuleStatus) 设置规则启用状态 0:开启，1:关闭
 * @method string getRuleEffectStatus() 获取规则策略状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
 * @method void setRuleEffectStatus(string $RuleEffectStatus) 设置规则策略状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
 * @method array getRuleInfo() 获取规则内容
 * @method void setRuleInfo(array $RuleInfo) 设置规则内容
 * @method string getRuleDescription() 获取规则描述
 * @method void setRuleDescription(string $RuleDescription) 设置规则描述
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeIP() 获取内网IP
 * @method void setNodeIP(string $NodeIP) 设置内网IP
 * @method string getQUUID() 获取主机Quuid
 * @method void setQUUID(string $QUUID) 设置主机Quuid
 * @method string getFoundTime() 获取首次生成时间
 * @method void setFoundTime(string $FoundTime) 设置首次生成时间
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getDealBehavior() 获取执行动作:
BEHAVIOR_ALERT:告警，
BEHAVIOR_HOLDUP_SUCCESSED:拦截
 * @method void setDealBehavior(string $DealBehavior) 设置执行动作:
BEHAVIOR_ALERT:告警，
BEHAVIOR_HOLDUP_SUCCESSED:拦截
 * @method integer getEventID() 获取事件ID
 * @method void setEventID(integer $EventID) 设置事件ID
 * @method string getPublicIP() 获取外网IP
 * @method void setPublicIP(string $PublicIP) 设置外网IP
 * @method string getNodeID() 获取节点ID
 * @method void setNodeID(string $NodeID) 设置节点ID
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method string getNodeUniqueID() 获取超级节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点唯一id
 * @method string getPodIP() 获取pod ip
 * @method void setPodIP(string $PodIP) 设置pod ip
 * @method string getPodName() 获取pod name
 * @method void setPodName(string $PodName) 设置pod name
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method ImageRegistryInfo getImageRegistryInfo() 获取镜像仓库信息
 * @method void setImageRegistryInfo(ImageRegistryInfo $ImageRegistryInfo) 设置镜像仓库信息
 */
class ImageDenyEvent extends AbstractModel
{
    /**
     * @var string 事件类型 EVENT_RISK:风险事件类型，EVENT_PRIVILEGE:特权
     */
    public $EventType;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则RuleID
     */
    public $RuleID;

    /**
     * @var string 规则类型
     */
    public $RuleType;

    /**
     * @var integer 规则启用状态 0:开启，1:关闭
     */
    public $RuleStatus;

    /**
     * @var string 规则策略状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
     */
    public $RuleEffectStatus;

    /**
     * @var array 规则内容
     */
    public $RuleInfo;

    /**
     * @var string 规则描述
     */
    public $RuleDescription;

    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 内网IP
     */
    public $NodeIP;

    /**
     * @var string 主机Quuid
     */
    public $QUUID;

    /**
     * @var string 首次生成时间
     */
    public $FoundTime;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 执行动作:
BEHAVIOR_ALERT:告警，
BEHAVIOR_HOLDUP_SUCCESSED:拦截
     */
    public $DealBehavior;

    /**
     * @var integer 事件ID
     */
    public $EventID;

    /**
     * @var string 外网IP
     */
    public $PublicIP;

    /**
     * @var string 节点ID
     */
    public $NodeID;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 节点类型
     */
    public $NodeType;

    /**
     * @var string 超级节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string pod name
     */
    public $PodName;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var ImageRegistryInfo 镜像仓库信息
     */
    public $ImageRegistryInfo;

    /**
     * @param string $EventType 事件类型 EVENT_RISK:风险事件类型，EVENT_PRIVILEGE:特权
     * @param string $RuleName 规则名称
     * @param string $RuleID 规则RuleID
     * @param string $RuleType 规则类型
     * @param integer $RuleStatus 规则启用状态 0:开启，1:关闭
     * @param string $RuleEffectStatus 规则策略状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
     * @param array $RuleInfo 规则内容
     * @param string $RuleDescription 规则描述
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $NodeName 节点名称
     * @param string $NodeIP 内网IP
     * @param string $QUUID 主机Quuid
     * @param string $FoundTime 首次生成时间
     * @param string $LatestFoundTime 最近生成时间
     * @param integer $EventCount 事件数量
     * @param string $DealBehavior 执行动作:
BEHAVIOR_ALERT:告警，
BEHAVIOR_HOLDUP_SUCCESSED:拦截
     * @param integer $EventID 事件ID
     * @param string $PublicIP 外网IP
     * @param string $NodeID 节点ID
     * @param string $ClusterID 集群ID
     * @param string $NodeType 节点类型
     * @param string $NodeUniqueID 超级节点唯一id
     * @param string $PodIP pod ip
     * @param string $PodName pod name
     * @param string $ClusterName 集群名称
     * @param ImageRegistryInfo $ImageRegistryInfo 镜像仓库信息
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("RuleEffectStatus",$param) and $param["RuleEffectStatus"] !== null) {
            $this->RuleEffectStatus = $param["RuleEffectStatus"];
        }

        if (array_key_exists("RuleInfo",$param) and $param["RuleInfo"] !== null) {
            $this->RuleInfo = $param["RuleInfo"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("DealBehavior",$param) and $param["DealBehavior"] !== null) {
            $this->DealBehavior = $param["DealBehavior"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ImageRegistryInfo",$param) and $param["ImageRegistryInfo"] !== null) {
            $this->ImageRegistryInfo = new ImageRegistryInfo();
            $this->ImageRegistryInfo->deserialize($param["ImageRegistryInfo"]);
        }
    }
}
