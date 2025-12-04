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
 * ModifyMessageEnrichmentRule请求参数结构体
 *
 * @method integer getId() 获取消息属性增强规则ID
 * @method void setId(integer $Id) 设置消息属性增强规则ID
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

 * @method string getRuleName() 获取策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
 * @method void setRuleName(string $RuleName) 设置策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
 * @method string getCondition() 获取规则匹配条件，JSON格式，需要Base64编码
样例
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
 * @method void setCondition(string $Condition) 设置规则匹配条件，JSON格式，需要Base64编码
样例
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
 * @method string getActions() 获取规则执行的动作，JSON格式，需要Base64编码 
样例
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
 BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=
 * @method void setActions(string $Actions) 设置规则执行的动作，JSON格式，需要Base64编码 
样例
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
 BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=
 * @method integer getPriority() 获取规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
 * @method void setPriority(integer $Priority) 设置规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
 * @method integer getStatus() 获取策略状态。 0:未定义；1:激活；2:不激活；默认不激活
 * @method void setStatus(integer $Status) 设置策略状态。 0:未定义；1:激活；2:不激活；默认不激活
 * @method string getRemark() 获取备注信息，最长 128 字符
 * @method void setRemark(string $Remark) 设置备注信息，最长 128 字符
 */
class ModifyMessageEnrichmentRuleRequest extends AbstractModel
{
    /**
     * @var integer 消息属性增强规则ID
     */
    public $Id;

    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

     */
    public $InstanceId;

    /**
     * @var string 策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
     */
    public $RuleName;

    /**
     * @var string 规则匹配条件，JSON格式，需要Base64编码
样例
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
     */
    public $Condition;

    /**
     * @var string 规则执行的动作，JSON格式，需要Base64编码 
样例
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
 BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=
     */
    public $Actions;

    /**
     * @var integer 规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
     */
    public $Priority;

    /**
     * @var integer 策略状态。 0:未定义；1:激活；2:不激活；默认不激活
     */
    public $Status;

    /**
     * @var string 备注信息，最长 128 字符
     */
    public $Remark;

    /**
     * @param integer $Id 消息属性增强规则ID
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。

     * @param string $RuleName 策略名称，不能为空，3-64个字符，支持中文、字母、数字、“-”及“_”。
     * @param string $Condition 规则匹配条件，JSON格式，需要Base64编码
样例
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
     * @param string $Actions 规则执行的动作，JSON格式，需要Base64编码 
样例
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
 BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=
     * @param integer $Priority 规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
     * @param integer $Status 策略状态。 0:未定义；1:激活；2:不激活；默认不激活
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
