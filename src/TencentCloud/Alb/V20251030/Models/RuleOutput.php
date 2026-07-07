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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发规则信息
 *
 * @method array getActions() 获取转发规则动作列表。	
 * @method void setActions(array $Actions) 设置转发规则动作列表。	
 * @method array getConditions() 获取转发规则条件列表。
 * @method void setConditions(array $Conditions) 设置转发规则条件列表。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getDirection() 获取转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。
 * @method void setDirection(string $Direction) 设置转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。
 * @method string getModifyTime() 获取最后修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置最后修改时间。
 * @method integer getPriority() 获取优先级，值越小优先级越高，取值范围：1~10000。
 * @method void setPriority(integer $Priority) 设置优先级，值越小优先级越高，取值范围：1~10000。
 * @method string getRuleId() 获取转发规则 ID，格式为 rule- 后接 8 位字母数字。
 * @method void setRuleId(string $RuleId) 设置转发规则 ID，格式为 rule- 后接 8 位字母数字。
 * @method string getRuleName() 获取转发规则名称。
 * @method void setRuleName(string $RuleName) 设置转发规则名称。
 * @method string getStatus() 获取转发规则状态，Provisioning：创建中，Active：运行中，Configuring：配置中。
 * @method void setStatus(string $Status) 设置转发规则状态，Provisioning：创建中，Active：运行中，Configuring：配置中。
 * @method array getTags() 获取标签列表。
 * @method void setTags(array $Tags) 设置标签列表。
 */
class RuleOutput extends AbstractModel
{
    /**
     * @var array 转发规则动作列表。	
     */
    public $Actions;

    /**
     * @var array 转发规则条件列表。
     */
    public $Conditions;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。
     */
    public $Direction;

    /**
     * @var string 最后修改时间。
     */
    public $ModifyTime;

    /**
     * @var integer 优先级，值越小优先级越高，取值范围：1~10000。
     */
    public $Priority;

    /**
     * @var string 转发规则 ID，格式为 rule- 后接 8 位字母数字。
     */
    public $RuleId;

    /**
     * @var string 转发规则名称。
     */
    public $RuleName;

    /**
     * @var string 转发规则状态，Provisioning：创建中，Active：运行中，Configuring：配置中。
     */
    public $Status;

    /**
     * @var array 标签列表。
     */
    public $Tags;

    /**
     * @param array $Actions 转发规则动作列表。	
     * @param array $Conditions 转发规则条件列表。
     * @param string $CreateTime 创建时间。
     * @param string $Direction 转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。
     * @param string $ModifyTime 最后修改时间。
     * @param integer $Priority 优先级，值越小优先级越高，取值范围：1~10000。
     * @param string $RuleId 转发规则 ID，格式为 rule- 后接 8 位字母数字。
     * @param string $RuleName 转发规则名称。
     * @param string $Status 转发规则状态，Provisioning：创建中，Active：运行中，Configuring：配置中。
     * @param array $Tags 标签列表。
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
        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
