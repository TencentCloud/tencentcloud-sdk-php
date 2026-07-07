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
 * 转发规则创建信息
 *
 * @method array getActions() 获取转发规则动作列表。
 * @method void setActions(array $Actions) 设置转发规则动作列表。
 * @method array getConditions() 获取转发规则条件列表。
 * @method void setConditions(array $Conditions) 设置转发规则条件列表。
 * @method integer getPriority() 获取优先级，值越小优先级越高，不能重复，取值范围：1~10000。
 * @method void setPriority(integer $Priority) 设置优先级，值越小优先级越高，不能重复，取值范围：1~10000。
 * @method string getDirection() 获取转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。默认Request。
 * @method void setDirection(string $Direction) 设置转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。默认Request。
 * @method string getRuleName() 获取转发规则名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method void setRuleName(string $RuleName) 设置转发规则名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 */
class RuleInput extends AbstractModel
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
     * @var integer 优先级，值越小优先级越高，不能重复，取值范围：1~10000。
     */
    public $Priority;

    /**
     * @var string 转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。默认Request。
     */
    public $Direction;

    /**
     * @var string 转发规则名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     */
    public $RuleName;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @param array $Actions 转发规则动作列表。
     * @param array $Conditions 转发规则条件列表。
     * @param integer $Priority 优先级，值越小优先级越高，不能重复，取值范围：1~10000。
     * @param string $Direction 转发规则的方向。Request：客户端到负载均衡的请求方向，Response：后端服务器到负载均衡的响应方向。默认Request。
     * @param string $RuleName 转发规则名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     * @param array $Tags 标签。
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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
