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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 状态节点
 *
 * @method string getNodeId() 获取节点id
 * @method void setNodeId(string $NodeId) 设置节点id
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method integer getNodeType() 获取节点类型 1:审批节点 2:执行节点 3:条件节点
 * @method void setNodeType(integer $NodeType) 设置节点类型 1:审批节点 2:执行节点 3:条件节点
 * @method string getNextNode() 获取下一个节点
 * @method void setNextNode(string $NextNode) 设置下一个节点
 * @method ApproveOpinion getOpinion() 获取审批意见模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpinion(ApproveOpinion $Opinion) 设置审批意见模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScfName() 获取scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScfName(string $ScfName) 设置scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubStatus() 获取状态（0：待审批，1：审批通过，2：拒绝，3：scf执行失败，4：scf执行成功）18: 外部审批中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(integer $SubStatus) 设置状态（0：待审批，1：审批通过，2：拒绝，3：scf执行失败，4：scf执行成功）18: 外部审批中
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApprovedUin() 获取审批节点审批人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApprovedUin(array $ApprovedUin) 设置审批节点审批人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取审批时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置审批时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取审批意见信息 审批节点:审批人意见  执行节点:scf函数执行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置审批意见信息 审批节点:审批人意见  执行节点:scf函数执行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method ApproveUser getUsers() 获取有权限审批该节点的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsers(ApproveUser $Users) 设置有权限审批该节点的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsApprove() 获取是否有权限审批该节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsApprove(boolean $IsApprove) 设置是否有权限审批该节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveId() 获取审批id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveId(string $ApproveId) 设置审批id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproveMethod() 获取审批方式 0或签 1会签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveMethod(integer $ApproveMethod) 设置审批方式 0或签 1会签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproveType() 获取审批节点审批类型，1人工审批 2自动通过 3自动决绝 4外部审批scf
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveType(integer $ApproveType) 设置审批节点审批类型，1人工审批 2自动通过 3自动决绝 4外部审批scf
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCallMethod() 获取外部审批类型 scf:0或null ; CKafka:1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallMethod(integer $CallMethod) 设置外部审批类型 scf:0或null ; CKafka:1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataHubId() 获取CKafka - 接入资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataHubId(string $DataHubId) 设置CKafka - 接入资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取CKafka - 任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置CKafka - 任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCKafkaRegion() 获取CKafka - 地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCKafkaRegion(string $CKafkaRegion) 设置CKafka - 地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalUrl() 获取外部审批Url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalUrl(string $ExternalUrl) 设置外部审批Url
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatusNode extends AbstractModel
{
    /**
     * @var string 节点id
     */
    public $NodeId;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var integer 节点类型 1:审批节点 2:执行节点 3:条件节点
     */
    public $NodeType;

    /**
     * @var string 下一个节点
     */
    public $NextNode;

    /**
     * @var ApproveOpinion 审批意见模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Opinion;

    /**
     * @var string scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScfName;

    /**
     * @var integer 状态（0：待审批，1：审批通过，2：拒绝，3：scf执行失败，4：scf执行成功）18: 外部审批中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @var array 审批节点审批人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApprovedUin;

    /**
     * @var string 审批时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 审批意见信息 审批节点:审批人意见  执行节点:scf函数执行日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var ApproveUser 有权限审批该节点的uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Users;

    /**
     * @var boolean 是否有权限审批该节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsApprove;

    /**
     * @var string 审批id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveId;

    /**
     * @var integer 审批方式 0或签 1会签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveMethod;

    /**
     * @var integer 审批节点审批类型，1人工审批 2自动通过 3自动决绝 4外部审批scf
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveType;

    /**
     * @var integer 外部审批类型 scf:0或null ; CKafka:1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallMethod;

    /**
     * @var string CKafka - 接入资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataHubId;

    /**
     * @var string CKafka - 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string CKafka - 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CKafkaRegion;

    /**
     * @var string 外部审批Url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalUrl;

    /**
     * @param string $NodeId 节点id
     * @param string $NodeName 节点名称
     * @param integer $NodeType 节点类型 1:审批节点 2:执行节点 3:条件节点
     * @param string $NextNode 下一个节点
     * @param ApproveOpinion $Opinion 审批意见模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScfName scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubStatus 状态（0：待审批，1：审批通过，2：拒绝，3：scf执行失败，4：scf执行成功）18: 外部审批中
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApprovedUin 审批节点审批人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 审批时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 审批意见信息 审批节点:审批人意见  执行节点:scf函数执行日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param ApproveUser $Users 有权限审批该节点的uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsApprove 是否有权限审批该节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveId 审批id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproveMethod 审批方式 0或签 1会签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproveType 审批节点审批类型，1人工审批 2自动通过 3自动决绝 4外部审批scf
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CallMethod 外部审批类型 scf:0或null ; CKafka:1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataHubId CKafka - 接入资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName CKafka - 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CKafkaRegion CKafka - 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalUrl 外部审批Url
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NextNode",$param) and $param["NextNode"] !== null) {
            $this->NextNode = $param["NextNode"];
        }

        if (array_key_exists("Opinion",$param) and $param["Opinion"] !== null) {
            $this->Opinion = new ApproveOpinion();
            $this->Opinion->deserialize($param["Opinion"]);
        }

        if (array_key_exists("ScfName",$param) and $param["ScfName"] !== null) {
            $this->ScfName = $param["ScfName"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("ApprovedUin",$param) and $param["ApprovedUin"] !== null) {
            $this->ApprovedUin = $param["ApprovedUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = new ApproveUser();
            $this->Users->deserialize($param["Users"]);
        }

        if (array_key_exists("IsApprove",$param) and $param["IsApprove"] !== null) {
            $this->IsApprove = $param["IsApprove"];
        }

        if (array_key_exists("ApproveId",$param) and $param["ApproveId"] !== null) {
            $this->ApproveId = $param["ApproveId"];
        }

        if (array_key_exists("ApproveMethod",$param) and $param["ApproveMethod"] !== null) {
            $this->ApproveMethod = $param["ApproveMethod"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("CallMethod",$param) and $param["CallMethod"] !== null) {
            $this->CallMethod = $param["CallMethod"];
        }

        if (array_key_exists("DataHubId",$param) and $param["DataHubId"] !== null) {
            $this->DataHubId = $param["DataHubId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CKafkaRegion",$param) and $param["CKafkaRegion"] !== null) {
            $this->CKafkaRegion = $param["CKafkaRegion"];
        }

        if (array_key_exists("ExternalUrl",$param) and $param["ExternalUrl"] !== null) {
            $this->ExternalUrl = $param["ExternalUrl"];
        }
    }
}
