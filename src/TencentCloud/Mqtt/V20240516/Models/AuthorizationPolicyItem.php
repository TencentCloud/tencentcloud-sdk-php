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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthorizationPolicyItem
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getPolicyName() 获取规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersion() 获取规则语法版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置规则语法版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取越小越优先
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置越小越优先
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffect() 获取allow/deny
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffect(string $Effect) 设置allow/deny
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActions() 获取connect、pub、sub
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActions(string $Actions) 设置connect、pub、sub
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResources() 获取资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(string $Resources) 设置资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientId() 获取client
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientId(string $ClientId) 设置client
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQos() 获取0，1，2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQos(string $Qos) 设置0，1，2
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetain() 获取1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetain(integer $Retain) 设置1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedTime() 获取1713164969433
 * @method void setCreatedTime(integer $CreatedTime) 设置1713164969433
 * @method integer getUpdateTime() 获取1713164969433
 * @method void setUpdateTime(integer $UpdateTime) 设置1713164969433
 */
class AuthorizationPolicyItem extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 规则名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var integer 规则语法版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer 越小越优先
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string allow/deny
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Effect;

    /**
     * @var string connect、pub、sub
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actions;

    /**
     * @var string 资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var string client
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientId;

    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 0，1，2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qos;

    /**
     * @var integer 1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Retain;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 1713164969433
     */
    public $CreatedTime;

    /**
     * @var integer 1713164969433
     */
    public $UpdateTime;

    /**
     * @param integer $Id 规则ID
     * @param string $InstanceId 集群ID
     * @param string $PolicyName 规则名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Version 规则语法版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 越小越优先
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Effect allow/deny
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Actions connect、pub、sub
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resources 资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientId client
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Qos 0，1，2
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Retain 1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedTime 1713164969433
     * @param integer $UpdateTime 1713164969433
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
