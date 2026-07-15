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
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Remote Write任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Remote Write任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetType() 获取网络类型
1: 内网
2:外网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetType(integer $NetType) 设置网络类型
1: 内网
2:外网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务运行状态
1: 运行中
2:暂停
3: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务运行状态
1: 运行中
2:暂停
3: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTarget() 获取目标服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTarget(string $Target) 设置目标服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteWriteURL() 获取目标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteWriteURL(string $RemoteWriteURL) 设置目标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取鉴权类型
0: 无鉴权 1: basic_auth 2: token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(integer $AuthType) 设置鉴权类型
0: 无鉴权 1: basic_auth 2: token
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoteWriteAuthInfo getAuthInfo() 获取鉴权信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthInfo(RemoteWriteAuthInfo $AuthInfo) 设置鉴权信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVirtualGatewayType() 获取后端服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置后端服务类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteWriteInfo extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string Remote Write任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 网络类型
1: 内网
2:外网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetType;

    /**
     * @var string 私有网络id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var integer 任务运行状态
1: 运行中
2:暂停
3: 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 目标服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Target;

    /**
     * @var string 目标地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteWriteURL;

    /**
     * @var integer 鉴权类型
0: 无鉴权 1: basic_auth 2: token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var RemoteWriteAuthInfo 鉴权信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthInfo;

    /**
     * @var string 日志集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var integer 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 后端服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualGatewayType;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Remote Write任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetType 网络类型
1: 内网
2:外网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务运行状态
1: 运行中
2:暂停
3: 失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Target 目标服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteWriteURL 目标地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType 鉴权类型
0: 无鉴权 1: basic_auth 2: token
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoteWriteAuthInfo $AuthInfo 鉴权信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VirtualGatewayType 后端服务类型
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
    }
}
