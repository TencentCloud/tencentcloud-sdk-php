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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoteWrite配置信息
 *
 * @method string getTaskId() 获取<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取<p>日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>Remote Write任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>Remote Write任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetType() 获取<p>网络类型<br>1: 内网<br>2:外网</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetType(integer $NetType) 设置<p>网络类型<br>1: 内网<br>2:外网</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>私有网络id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>私有网络id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>任务运行状态<br>1: 运行中<br>2:暂停<br>3: 失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>任务运行状态<br>1: 运行中<br>2:暂停<br>3: 失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTarget() 获取<p>目标服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTarget(string $Target) 设置<p>目标服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteWriteURL() 获取<p>目标地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteWriteURL(string $RemoteWriteURL) 设置<p>目标地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取<p>鉴权类型<br>0: 无鉴权 1: basic_auth 2: token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(integer $AuthType) 设置<p>鉴权类型<br>0: 无鉴权 1: basic_auth 2: token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoteWriteAuthInfo getAuthInfo() 获取<p>鉴权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthInfo(RemoteWriteAuthInfo $AuthInfo) 设置<p>鉴权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取<p>日志集</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVirtualGatewayType() 获取<p>后端服务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置<p>后端服务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>云时序数据库实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>云时序数据库实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteWriteInfo extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string <p>Remote Write任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer <p>网络类型<br>1: 内网<br>2:外网</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetType;

    /**
     * @var string <p>私有网络id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var integer <p>任务运行状态<br>1: 运行中<br>2:暂停<br>3: 失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>目标服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Target;

    /**
     * @var string <p>目标地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteWriteURL;

    /**
     * @var integer <p>鉴权类型<br>0: 无鉴权 1: basic_auth 2: token</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var RemoteWriteAuthInfo <p>鉴权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthInfo;

    /**
     * @var string <p>日志集</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var integer <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer <p>后端服务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualGatewayType;

    /**
     * @var string <p>云时序数据库实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId <p>日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>Remote Write任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetType <p>网络类型<br>1: 内网<br>2:外网</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>私有网络id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>任务运行状态<br>1: 运行中<br>2:暂停<br>3: 失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Target <p>目标服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteWriteURL <p>目标地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType <p>鉴权类型<br>0: 无鉴权 1: basic_auth 2: token</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoteWriteAuthInfo $AuthInfo <p>鉴权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId <p>日志集</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VirtualGatewayType <p>后端服务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>云时序数据库实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1：关闭，2：开启。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("RemoteWriteURL",$param) and $param["RemoteWriteURL"] !== null) {
            $this->RemoteWriteURL = $param["RemoteWriteURL"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new RemoteWriteAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
