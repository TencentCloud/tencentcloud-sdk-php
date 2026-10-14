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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMStatus请求参数结构体
 *
 * @method boolean getStatus() 获取<p>开关状态。true：开启，false：关闭。</p>
 * @method void setStatus(boolean $Status) 设置<p>开关状态。true：开启，false：关闭。</p>
 * @method string getDomain() 获取<p>需要操作的域名或者serviceid</p>
 * @method void setDomain(string $Domain) 设置<p>需要操作的域名或者serviceid</p>
 * @method integer getSwitchType() 获取<p>开关类型，用于指定要操作的防护模块开关。取值如下：<br>1：防护总开关，控制大模型防护功能的全局开启/关闭。<br>2：算力消耗防护规则开关，控制算力消耗限制功能的开启/关闭。<br>3：自定义防护规则开关，控制内容安全自定义规则功能的开启/关闭。<br>4：ToolCall 防护开关，控制工具调用安全检测功能的开启/关闭。<br>5：提示词攻击防护开关，控制提示词注入/越狱攻击检测功能的开启/关闭。<br>6：内容合规检测开关，控制输入输出内容合规检测功能的开启/关闭。<br>7：敏感数据检测开关，控制敏感信息泄露检测（DLP）功能的开启/关闭。<br>8：Skill 安全检测开关，控制 Skill/Plugin 调用安全检测功能的开启/关闭。<br>9：意图行为检测开关，控制用户意图识别与行为检测功能的开启/关闭。<br>10：恶意URL检测开关，控制响应中恶意链接检测功能的开启/关闭。</p>
 * @method void setSwitchType(integer $SwitchType) 设置<p>开关类型，用于指定要操作的防护模块开关。取值如下：<br>1：防护总开关，控制大模型防护功能的全局开启/关闭。<br>2：算力消耗防护规则开关，控制算力消耗限制功能的开启/关闭。<br>3：自定义防护规则开关，控制内容安全自定义规则功能的开启/关闭。<br>4：ToolCall 防护开关，控制工具调用安全检测功能的开启/关闭。<br>5：提示词攻击防护开关，控制提示词注入/越狱攻击检测功能的开启/关闭。<br>6：内容合规检测开关，控制输入输出内容合规检测功能的开启/关闭。<br>7：敏感数据检测开关，控制敏感信息泄露检测（DLP）功能的开启/关闭。<br>8：Skill 安全检测开关，控制 Skill/Plugin 调用安全检测功能的开启/关闭。<br>9：意图行为检测开关，控制用户意图识别与行为检测功能的开启/关闭。<br>10：恶意URL检测开关，控制响应中恶意链接检测功能的开启/关闭。</p>
 * @method string getInstanceId() 获取<p>WAF 实例 ID，表示当前操作所属的 WAF 实例。可通过 DescribeInstances 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>WAF 实例 ID，表示当前操作所属的 WAF 实例。可通过 DescribeInstances 接口获取。</p>
 */
class ModifyLLMStatusRequest extends AbstractModel
{
    /**
     * @var boolean <p>开关状态。true：开启，false：关闭。</p>
     */
    public $Status;

    /**
     * @var string <p>需要操作的域名或者serviceid</p>
     */
    public $Domain;

    /**
     * @var integer <p>开关类型，用于指定要操作的防护模块开关。取值如下：<br>1：防护总开关，控制大模型防护功能的全局开启/关闭。<br>2：算力消耗防护规则开关，控制算力消耗限制功能的开启/关闭。<br>3：自定义防护规则开关，控制内容安全自定义规则功能的开启/关闭。<br>4：ToolCall 防护开关，控制工具调用安全检测功能的开启/关闭。<br>5：提示词攻击防护开关，控制提示词注入/越狱攻击检测功能的开启/关闭。<br>6：内容合规检测开关，控制输入输出内容合规检测功能的开启/关闭。<br>7：敏感数据检测开关，控制敏感信息泄露检测（DLP）功能的开启/关闭。<br>8：Skill 安全检测开关，控制 Skill/Plugin 调用安全检测功能的开启/关闭。<br>9：意图行为检测开关，控制用户意图识别与行为检测功能的开启/关闭。<br>10：恶意URL检测开关，控制响应中恶意链接检测功能的开启/关闭。</p>
     */
    public $SwitchType;

    /**
     * @var string <p>WAF 实例 ID，表示当前操作所属的 WAF 实例。可通过 DescribeInstances 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @param boolean $Status <p>开关状态。true：开启，false：关闭。</p>
     * @param string $Domain <p>需要操作的域名或者serviceid</p>
     * @param integer $SwitchType <p>开关类型，用于指定要操作的防护模块开关。取值如下：<br>1：防护总开关，控制大模型防护功能的全局开启/关闭。<br>2：算力消耗防护规则开关，控制算力消耗限制功能的开启/关闭。<br>3：自定义防护规则开关，控制内容安全自定义规则功能的开启/关闭。<br>4：ToolCall 防护开关，控制工具调用安全检测功能的开启/关闭。<br>5：提示词攻击防护开关，控制提示词注入/越狱攻击检测功能的开启/关闭。<br>6：内容合规检测开关，控制输入输出内容合规检测功能的开启/关闭。<br>7：敏感数据检测开关，控制敏感信息泄露检测（DLP）功能的开启/关闭。<br>8：Skill 安全检测开关，控制 Skill/Plugin 调用安全检测功能的开启/关闭。<br>9：意图行为检测开关，控制用户意图识别与行为检测功能的开启/关闭。<br>10：恶意URL检测开关，控制响应中恶意链接检测功能的开启/关闭。</p>
     * @param string $InstanceId <p>WAF 实例 ID，表示当前操作所属的 WAF 实例。可通过 DescribeInstances 接口获取。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
