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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthorizationPolicyItem
 *
 * @method integer getId() 获取策略规则ID
 * @method void setId(integer $Id) 设置策略规则ID
 * @method string getInstanceId() 获取MQTT集群ID
 * @method void setInstanceId(string $InstanceId) 设置MQTT集群ID
 * @method string getPolicyName() 获取策略规则名
 * @method void setPolicyName(string $PolicyName) 设置策略规则名
 * @method integer getVersion() 获取规则语法版本，当前仅支持1，默认为1
 * @method void setVersion(integer $Version) 设置规则语法版本，当前仅支持1，默认为1
 * @method integer getPriority() 获取策略优先级，优先级ID越小表示策略越优先检查生效。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setPriority(integer $Priority) 设置策略优先级，优先级ID越小表示策略越优先检查生效。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getEffect() 获取决策
allow：允许符合该策略的设备的访问请求。
deny：拒绝覆盖该策略的设备的访问请求。
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setEffect(string $Effect) 设置决策
allow：允许符合该策略的设备的访问请求。
deny：拒绝覆盖该策略的设备的访问请求。
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getActions() 获取操作
connect：连接
pub：发布mqtt消息
sub：订阅mqtt消息
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setActions(string $Actions) 设置操作
connect：连接
pub：发布mqtt消息
sub：订阅mqtt消息
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getResources() 获取资源，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setResources(string $Resources) 设置资源，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getClientId() 获取条件-连接设备ID，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setClientId(string $ClientId) 设置条件-连接设备ID，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getUsername() 获取条件-用户名，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setUsername(string $Username) 设置条件-用户名，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getIp() 获取条件-客户端IP地址，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setIp(string $Ip) 设置条件-客户端IP地址，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method string getQos() 获取条件-服务质量，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method void setQos(string $Qos) 设置条件-服务质量，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
 * @method integer getRetain() 获取条件-保留消息，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
 * @method void setRetain(integer $Retain) 设置条件-保留消息，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
 * @method string getRemark() 获取备注，长度不超过128个字符。
 * @method void setRemark(string $Remark) 设置备注，长度不超过128个字符。
 * @method integer getCreatedTime() 获取创建时间。毫秒级时间戳 。
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间。毫秒级时间戳 。
 * @method integer getUpdateTime() 获取更新时间。毫秒级时间戳 。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间。毫秒级时间戳 。
 */
class AuthorizationPolicyItem extends AbstractModel
{
    /**
     * @var integer 策略规则ID
     */
    public $Id;

    /**
     * @var string MQTT集群ID
     */
    public $InstanceId;

    /**
     * @var string 策略规则名
     */
    public $PolicyName;

    /**
     * @var integer 规则语法版本，当前仅支持1，默认为1
     */
    public $Version;

    /**
     * @var integer 策略优先级，优先级ID越小表示策略越优先检查生效。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Priority;

    /**
     * @var string 决策
allow：允许符合该策略的设备的访问请求。
deny：拒绝覆盖该策略的设备的访问请求。
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Effect;

    /**
     * @var string 操作
connect：连接
pub：发布mqtt消息
sub：订阅mqtt消息
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Actions;

    /**
     * @var string 资源，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Resources;

    /**
     * @var string 条件-连接设备ID，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $ClientId;

    /**
     * @var string 条件-用户名，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Username;

    /**
     * @var string 条件-客户端IP地址，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Ip;

    /**
     * @var string 条件-服务质量，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     */
    public $Qos;

    /**
     * @var integer 条件-保留消息，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
     */
    public $Retain;

    /**
     * @var string 备注，长度不超过128个字符。
     */
    public $Remark;

    /**
     * @var integer 创建时间。毫秒级时间戳 。
     */
    public $CreatedTime;

    /**
     * @var integer 更新时间。毫秒级时间戳 。
     */
    public $UpdateTime;

    /**
     * @param integer $Id 策略规则ID
     * @param string $InstanceId MQTT集群ID
     * @param string $PolicyName 策略规则名
     * @param integer $Version 规则语法版本，当前仅支持1，默认为1
     * @param integer $Priority 策略优先级，优先级ID越小表示策略越优先检查生效。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $Effect 决策
allow：允许符合该策略的设备的访问请求。
deny：拒绝覆盖该策略的设备的访问请求。
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $Actions 操作
connect：连接
pub：发布mqtt消息
sub：订阅mqtt消息
可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $Resources 资源，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $ClientId 条件-连接设备ID，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $Username 条件-用户名，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $Ip 条件-客户端IP地址，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param string $Qos 条件-服务质量，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
     * @param integer $Retain 条件-保留消息，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
1：表示匹配retain消息
2：表示匹配非retain消息
3：表示匹配retain和非retain消息
     * @param string $Remark 备注，长度不超过128个字符。
     * @param integer $CreatedTime 创建时间。毫秒级时间戳 。
     * @param integer $UpdateTime 更新时间。毫秒级时间戳 。
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
