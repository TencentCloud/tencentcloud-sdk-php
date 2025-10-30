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
 * ModifyAuthorizationPolicy请求参数结构体
 *
 * @method integer getId() 获取授权策略ID，从 [查询授权策略](https://cloud.tencent.com/document/product/1778/111074) 接口获取
 * @method void setId(integer $Id) 设置授权策略ID，从 [查询授权策略](https://cloud.tencent.com/document/product/1778/111074) 接口获取
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

 * @method string getPolicyName() 获取策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
 * @method void setPolicyName(string $PolicyName) 设置策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
 * @method integer getPolicyVersion() 获取策略版本,默认为1，当前仅支持1
 * @method void setPolicyVersion(integer $PolicyVersion) 设置策略版本,默认为1，当前仅支持1
 * @method integer getPriority() 获取策略优先级，越小越优先，不能重复
 * @method void setPriority(integer $Priority) 设置策略优先级，越小越优先，不能重复
 * @method string getEffect() 获取决策：
allow 允许
deny 拒绝
 * @method void setEffect(string $Effect) 设置决策：
allow 允许
deny 拒绝
 * @method string getActions() 获取操作,支持多选，多个操作用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
connect：连接
pub：发布
sub：订阅
 * @method void setActions(string $Actions) 设置操作,支持多选，多个操作用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
connect：连接
pub：发布
sub：订阅
 * @method string getResources() 获取资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。

 * @method void setResources(string $Resources) 设置资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。

 * @method string getUsername() 获取条件-用户名
 * @method void setUsername(string $Username) 设置条件-用户名
 * @method integer getRetain() 获取条件-保留消息
1,匹配保留消息；
2,匹配非保留消息，
3.匹配保留和非保留消息
 * @method void setRetain(integer $Retain) 设置条件-保留消息
1,匹配保留消息；
2,匹配非保留消息，
3.匹配保留和非保留消息
 * @method string getClientId() 获取条件：客户端ID，支持正则
 * @method void setClientId(string $ClientId) 设置条件：客户端ID，支持正则
 * @method string getIp() 获取条件：客户端IP地址，支持IP或者CIDR
 * @method void setIp(string $Ip) 设置条件：客户端IP地址，支持IP或者CIDR
 * @method string getQos() 获取条件：服务质量
0：最多一次
1：最少一次
2：精确一次
 * @method void setQos(string $Qos) 设置条件：服务质量
0：最多一次
1：最少一次
2：精确一次
 * @method string getRemark() 获取备注信息，最长 128 字符
 * @method void setRemark(string $Remark) 设置备注信息，最长 128 字符
 */
class ModifyAuthorizationPolicyRequest extends AbstractModel
{
    /**
     * @var integer 授权策略ID，从 [查询授权策略](https://cloud.tencent.com/document/product/1778/111074) 接口获取
     */
    public $Id;

    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

     */
    public $InstanceId;

    /**
     * @var string 策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
     */
    public $PolicyName;

    /**
     * @var integer 策略版本,默认为1，当前仅支持1
     */
    public $PolicyVersion;

    /**
     * @var integer 策略优先级，越小越优先，不能重复
     */
    public $Priority;

    /**
     * @var string 决策：
allow 允许
deny 拒绝
     */
    public $Effect;

    /**
     * @var string 操作,支持多选，多个操作用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
connect：连接
pub：发布
sub：订阅
     */
    public $Actions;

    /**
     * @var string 资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。

     */
    public $Resources;

    /**
     * @var string 条件-用户名
     */
    public $Username;

    /**
     * @var integer 条件-保留消息
1,匹配保留消息；
2,匹配非保留消息，
3.匹配保留和非保留消息
     */
    public $Retain;

    /**
     * @var string 条件：客户端ID，支持正则
     */
    public $ClientId;

    /**
     * @var string 条件：客户端IP地址，支持IP或者CIDR
     */
    public $Ip;

    /**
     * @var string 条件：服务质量
0：最多一次
1：最少一次
2：精确一次
     */
    public $Qos;

    /**
     * @var string 备注信息，最长 128 字符
     */
    public $Remark;

    /**
     * @param integer $Id 授权策略ID，从 [查询授权策略](https://cloud.tencent.com/document/product/1778/111074) 接口获取
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

     * @param string $PolicyName 策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
     * @param integer $PolicyVersion 策略版本,默认为1，当前仅支持1
     * @param integer $Priority 策略优先级，越小越优先，不能重复
     * @param string $Effect 决策：
allow 允许
deny 拒绝
     * @param string $Actions 操作,支持多选，多个操作用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。
connect：连接
pub：发布
sub：订阅
     * @param string $Resources 资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)。

     * @param string $Username 条件-用户名
     * @param integer $Retain 条件-保留消息
1,匹配保留消息；
2,匹配非保留消息，
3.匹配保留和非保留消息
     * @param string $ClientId 条件：客户端ID，支持正则
     * @param string $Ip 条件：客户端IP地址，支持IP或者CIDR
     * @param string $Qos 条件：服务质量
0：最多一次
1：最少一次
2：精确一次
     * @param string $Remark 备注信息，最长 128 字符
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
