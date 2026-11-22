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
 * CreateAuthorizationPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getPolicyName() 获取<p>策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。</p>
 * @method integer getPolicyVersion() 获取<p>策略版本,默认为1，当前仅支持1</p>
 * @method void setPolicyVersion(integer $PolicyVersion) 设置<p>策略版本,默认为1，当前仅支持1</p>
 * @method integer getPriority() 获取<p>策略优先级，越小越优先，不能重复，优先级ID越小表示策略越优先检查生效。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method void setPriority(integer $Priority) 设置<p>策略优先级，越小越优先，不能重复，优先级ID越小表示策略越优先检查生效。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method string getEffect() 获取<p>决策：<br>allow：允许符合该策略的设备的访问请求。<br>deny：拒绝覆盖该策略的设备的访问请求。<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method void setEffect(string $Effect) 设置<p>决策：<br>allow：允许符合该策略的设备的访问请求。<br>deny：拒绝覆盖该策略的设备的访问请求。<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method string getActions() 获取<p>操作,支持多选，多个操作用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>connect：连接<br>pub：发布<br>sub：订阅</p>
 * @method void setActions(string $Actions) 设置<p>操作,支持多选，多个操作用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>connect：连接<br>pub：发布<br>sub：订阅</p>
 * @method integer getRetain() 获取<p>条件-保留消息，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>1,匹配保留消息；<br>2,匹配非保留消息，<br>3.匹配保留和非保留消息</p>
 * @method void setRetain(integer $Retain) 设置<p>条件-保留消息，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>1,匹配保留消息；<br>2,匹配非保留消息，<br>3.匹配保留和非保留消息</p>
 * @method string getQos() 获取<p>条件：服务质量<br>0：最多一次<br>1：最少一次<br>2：精确一次<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method void setQos(string $Qos) 设置<p>条件：服务质量<br>0：最多一次<br>1：最少一次<br>2：精确一次<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method string getResources() 获取<p>资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method void setResources(string $Resources) 设置<p>资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method string getUsername() 获取<p>条件-用户名</p>
 * @method void setUsername(string $Username) 设置<p>条件-用户名</p>
 * @method string getClientId() 获取<p>条件：客户端ID，支持正则</p>
 * @method void setClientId(string $ClientId) 设置<p>条件：客户端ID，支持正则</p>
 * @method string getIp() 获取<p>条件：客户端IP地址，支持IP或者CIDR，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method void setIp(string $Ip) 设置<p>条件：客户端IP地址，支持IP或者CIDR，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
 * @method string getRemark() 获取<p>备注信息，最长 128 字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息，最长 128 字符</p>
 * @method array getResourceItems() 获取<p>授权资源，支持函数表达式</p>
 * @method void setResourceItems(array $ResourceItems) 设置<p>授权资源，支持函数表达式</p>
 */
class CreateAuthorizationPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。</p>
     */
    public $PolicyName;

    /**
     * @var integer <p>策略版本,默认为1，当前仅支持1</p>
     */
    public $PolicyVersion;

    /**
     * @var integer <p>策略优先级，越小越优先，不能重复，优先级ID越小表示策略越优先检查生效。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     */
    public $Priority;

    /**
     * @var string <p>决策：<br>allow：允许符合该策略的设备的访问请求。<br>deny：拒绝覆盖该策略的设备的访问请求。<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     */
    public $Effect;

    /**
     * @var string <p>操作,支持多选，多个操作用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>connect：连接<br>pub：发布<br>sub：订阅</p>
     */
    public $Actions;

    /**
     * @var integer <p>条件-保留消息，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>1,匹配保留消息；<br>2,匹配非保留消息，<br>3.匹配保留和非保留消息</p>
     */
    public $Retain;

    /**
     * @var string <p>条件：服务质量<br>0：最多一次<br>1：最少一次<br>2：精确一次<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     */
    public $Qos;

    /**
     * @var string <p>资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     */
    public $Resources;

    /**
     * @var string <p>条件-用户名</p>
     */
    public $Username;

    /**
     * @var string <p>条件：客户端ID，支持正则</p>
     */
    public $ClientId;

    /**
     * @var string <p>条件：客户端IP地址，支持IP或者CIDR，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     */
    public $Ip;

    /**
     * @var string <p>备注信息，最长 128 字符</p>
     */
    public $Remark;

    /**
     * @var array <p>授权资源，支持函数表达式</p>
     */
    public $ResourceItems;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $PolicyName <p>策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。</p>
     * @param integer $PolicyVersion <p>策略版本,默认为1，当前仅支持1</p>
     * @param integer $Priority <p>策略优先级，越小越优先，不能重复，优先级ID越小表示策略越优先检查生效。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     * @param string $Effect <p>决策：<br>allow：允许符合该策略的设备的访问请求。<br>deny：拒绝覆盖该策略的设备的访问请求。<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     * @param string $Actions <p>操作,支持多选，多个操作用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>connect：连接<br>pub：发布<br>sub：订阅</p>
     * @param integer $Retain <p>条件-保留消息，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。<br>1,匹配保留消息；<br>2,匹配非保留消息，<br>3.匹配保留和非保留消息</p>
     * @param string $Qos <p>条件：服务质量<br>0：最多一次<br>1：最少一次<br>2：精确一次<br>可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     * @param string $Resources <p>资源，需要匹配的订阅，支持配置多条匹配规则，多个用英文逗号隔开。可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     * @param string $Username <p>条件-用户名</p>
     * @param string $ClientId <p>条件：客户端ID，支持正则</p>
     * @param string $Ip <p>条件：客户端IP地址，支持IP或者CIDR，可参考 <a href="https://cloud.tencent.com/document/product/1778/109715">数据面授权策略说明</a>。</p>
     * @param string $Remark <p>备注信息，最长 128 字符</p>
     * @param array $ResourceItems <p>授权资源，支持函数表达式</p>
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

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ResourceItems",$param) and $param["ResourceItems"] !== null) {
            $this->ResourceItems = $param["ResourceItems"];
        }
    }
}
