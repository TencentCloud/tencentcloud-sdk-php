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
 * MessageEnrichmentRuleItem
 *
 * @method integer getId() 获取策略规则ID
 * @method void setId(integer $Id) 设置策略规则ID
 * @method string getInstanceId() 获取MQTT集群ID
 * @method void setInstanceId(string $InstanceId) 设置MQTT集群ID
 * @method string getRuleName() 获取策略规则名
 * @method void setRuleName(string $RuleName) 设置策略规则名
 * @method string getCondition() 获取规则匹配条件，JSON格式，需要Base64编码 
样例 {"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后 eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
 * @method void setCondition(string $Condition) 设置规则匹配条件，JSON格式，需要Base64编码 
样例 {"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后 eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
 * @method string getActions() 获取规则执行的动作，JSON格式，需要Base64编码
 样例
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==
 * @method void setActions(string $Actions) 设置规则执行的动作，JSON格式，需要Base64编码
 样例
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==
 * @method integer getPriority() 获取规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
 * @method void setPriority(integer $Priority) 设置规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
 * @method integer getStatus() 获取策略状态。 0:未定义；1:激活；2:不激活；默认不激活
 * @method void setStatus(integer $Status) 设置策略状态。 0:未定义；1:激活；2:不激活；默认不激活
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getCreatedTime() 获取创建时间。毫秒级时间戳 。
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间。毫秒级时间戳 。
 * @method integer getUpdateTime() 获取更新时间。毫秒级时间戳 。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间。毫秒级时间戳 。
 */
class MessageEnrichmentRuleItem extends AbstractModel
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
    public $RuleName;

    /**
     * @var string 规则匹配条件，JSON格式，需要Base64编码 
样例 {"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后 eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
     */
    public $Condition;

    /**
     * @var string 规则执行的动作，JSON格式，需要Base64编码
 样例
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==
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
     * @var string 备注
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
     * @param string $RuleName 策略规则名
     * @param string $Condition 规则匹配条件，JSON格式，需要Base64编码 
样例 {"clientId":"client-1","username":"client-1","topic":"home/room1"}
Base64后 eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
     * @param string $Actions 规则执行的动作，JSON格式，需要Base64编码
 样例
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
BASE64后 eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==
     * @param integer $Priority 规则优先级，数字越小，优先级越高，高优先级覆盖低优先级。UserProperty字段会合并
     * @param integer $Status 策略状态。 0:未定义；1:激活；2:不激活；默认不激活
     * @param string $Remark 备注
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
