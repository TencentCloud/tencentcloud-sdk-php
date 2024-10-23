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
 * ModifyAuthorizationPolicy请求参数结构体
 *
 * @method integer getId() 获取策略
 * @method void setId(integer $Id) 设置策略
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method integer getPolicyVersion() 获取策略版本
 * @method void setPolicyVersion(integer $PolicyVersion) 设置策略版本
 * @method integer getPriority() 获取策略优先级，越小越优先
 * @method void setPriority(integer $Priority) 设置策略优先级，越小越优先
 * @method string getEffect() 获取allow、deny
 * @method void setEffect(string $Effect) 设置allow、deny
 * @method string getActions() 获取connect、pub、sub
 * @method void setActions(string $Actions) 设置connect、pub、sub
 * @method string getResources() 获取资源
 * @method void setResources(string $Resources) 设置资源
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method integer getRetain() 获取1.匹配保留消息；2.匹配非保留消息；3.匹配所有消息
 * @method void setRetain(integer $Retain) 设置1.匹配保留消息；2.匹配非保留消息；3.匹配所有消息
 * @method string getClientId() 获取客户端
 * @method void setClientId(string $ClientId) 设置客户端
 * @method string getIp() 获取IP
 * @method void setIp(string $Ip) 设置IP
 * @method string getQos() 获取0、1、2
 * @method void setQos(string $Qos) 设置0、1、2
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 */
class ModifyAuthorizationPolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略
     */
    public $Id;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var integer 策略版本
     */
    public $PolicyVersion;

    /**
     * @var integer 策略优先级，越小越优先
     */
    public $Priority;

    /**
     * @var string allow、deny
     */
    public $Effect;

    /**
     * @var string connect、pub、sub
     */
    public $Actions;

    /**
     * @var string 资源
     */
    public $Resources;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var integer 1.匹配保留消息；2.匹配非保留消息；3.匹配所有消息
     */
    public $Retain;

    /**
     * @var string 客户端
     */
    public $ClientId;

    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string 0、1、2
     */
    public $Qos;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @param integer $Id 策略
     * @param string $InstanceId 实例ID
     * @param string $PolicyName 策略名称
     * @param integer $PolicyVersion 策略版本
     * @param integer $Priority 策略优先级，越小越优先
     * @param string $Effect allow、deny
     * @param string $Actions connect、pub、sub
     * @param string $Resources 资源
     * @param string $Username 用户名
     * @param integer $Retain 1.匹配保留消息；2.匹配非保留消息；3.匹配所有消息
     * @param string $ClientId 客户端
     * @param string $Ip IP
     * @param string $Qos 0、1、2
     * @param string $Remark 备注信息
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

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
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

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
