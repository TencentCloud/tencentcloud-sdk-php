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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个通知项
 *
 * @method string getModule() 获取<p>模块编码（与 ModifyNotifySettingAlert 共用枚举）<br>枚举值：<br>Vul：漏洞与云安全态势<br>Alert：告警中心<br>AkSk：云API风险治理<br>Agent：客户端/主机资产<br>LogAnalysis：日志分析</p>
 * @method void setModule(string $Module) 设置<p>模块编码（与 ModifyNotifySettingAlert 共用枚举）<br>枚举值：<br>Vul：漏洞与云安全态势<br>Alert：告警中心<br>AkSk：云API风险治理<br>Agent：客户端/主机资产<br>LogAnalysis：日志分析</p>
 * @method string getSubModule() 获取<p>子模块编码<br>枚举值（部分）：<br>MALWARE_FILE：恶意文件<br>MALWARE_PROCESS：恶意进程<br>RISK_LOGIN：异常登录<br>BRUTE_FORCE：密码破解<br>MALICIOUS_REQUEST：恶意请求<br>HIGH_RISK_COMMAND：高危命令<br>PRIVILEGE_ESCALATION：本地提权<br>REVERSE_SHELL：反弹Shell<br>NETWORK_ATTACK：网络攻击<br>MULTI_BEHAVIOR_ATTACK：多行为攻击<br>AGENT_OFFLINE：客户端离线<br>AGENT_UNINSTALL：客户端卸载<br>完整枚举见 DescribeWebhookNotifyItemTree</p>
 * @method void setSubModule(string $SubModule) 设置<p>子模块编码<br>枚举值（部分）：<br>MALWARE_FILE：恶意文件<br>MALWARE_PROCESS：恶意进程<br>RISK_LOGIN：异常登录<br>BRUTE_FORCE：密码破解<br>MALICIOUS_REQUEST：恶意请求<br>HIGH_RISK_COMMAND：高危命令<br>PRIVILEGE_ESCALATION：本地提权<br>REVERSE_SHELL：反弹Shell<br>NETWORK_ATTACK：网络攻击<br>MULTI_BEHAVIOR_ATTACK：多行为攻击<br>AGENT_OFFLINE：客户端离线<br>AGENT_UNINSTALL：客户端卸载<br>完整枚举见 DescribeWebhookNotifyItemTree</p>
 * @method array getLevels() 获取<p>风险等级集合<br>枚举值：<br>CRITICAL：严重<br>HIGH：高危<br>MEDIUM：中危<br>LOW：低危<br>INFO：提示<br>不支持等级的子模块传空数组</p>
 * @method void setLevels(array $Levels) 设置<p>风险等级集合<br>枚举值：<br>CRITICAL：严重<br>HIGH：高危<br>MEDIUM：中危<br>LOW：低危<br>INFO：提示<br>不支持等级的子模块传空数组</p>
 * @method array getItems() 获取<p>处理状态等</p>
 * @method void setItems(array $Items) 设置<p>处理状态等</p>
 */
class WebhookNotifyItem extends AbstractModel
{
    /**
     * @var string <p>模块编码（与 ModifyNotifySettingAlert 共用枚举）<br>枚举值：<br>Vul：漏洞与云安全态势<br>Alert：告警中心<br>AkSk：云API风险治理<br>Agent：客户端/主机资产<br>LogAnalysis：日志分析</p>
     */
    public $Module;

    /**
     * @var string <p>子模块编码<br>枚举值（部分）：<br>MALWARE_FILE：恶意文件<br>MALWARE_PROCESS：恶意进程<br>RISK_LOGIN：异常登录<br>BRUTE_FORCE：密码破解<br>MALICIOUS_REQUEST：恶意请求<br>HIGH_RISK_COMMAND：高危命令<br>PRIVILEGE_ESCALATION：本地提权<br>REVERSE_SHELL：反弹Shell<br>NETWORK_ATTACK：网络攻击<br>MULTI_BEHAVIOR_ATTACK：多行为攻击<br>AGENT_OFFLINE：客户端离线<br>AGENT_UNINSTALL：客户端卸载<br>完整枚举见 DescribeWebhookNotifyItemTree</p>
     */
    public $SubModule;

    /**
     * @var array <p>风险等级集合<br>枚举值：<br>CRITICAL：严重<br>HIGH：高危<br>MEDIUM：中危<br>LOW：低危<br>INFO：提示<br>不支持等级的子模块传空数组</p>
     */
    public $Levels;

    /**
     * @var array <p>处理状态等</p>
     */
    public $Items;

    /**
     * @param string $Module <p>模块编码（与 ModifyNotifySettingAlert 共用枚举）<br>枚举值：<br>Vul：漏洞与云安全态势<br>Alert：告警中心<br>AkSk：云API风险治理<br>Agent：客户端/主机资产<br>LogAnalysis：日志分析</p>
     * @param string $SubModule <p>子模块编码<br>枚举值（部分）：<br>MALWARE_FILE：恶意文件<br>MALWARE_PROCESS：恶意进程<br>RISK_LOGIN：异常登录<br>BRUTE_FORCE：密码破解<br>MALICIOUS_REQUEST：恶意请求<br>HIGH_RISK_COMMAND：高危命令<br>PRIVILEGE_ESCALATION：本地提权<br>REVERSE_SHELL：反弹Shell<br>NETWORK_ATTACK：网络攻击<br>MULTI_BEHAVIOR_ATTACK：多行为攻击<br>AGENT_OFFLINE：客户端离线<br>AGENT_UNINSTALL：客户端卸载<br>完整枚举见 DescribeWebhookNotifyItemTree</p>
     * @param array $Levels <p>风险等级集合<br>枚举值：<br>CRITICAL：严重<br>HIGH：高危<br>MEDIUM：中危<br>LOW：低危<br>INFO：提示<br>不支持等级的子模块传空数组</p>
     * @param array $Items <p>处理状态等</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("SubModule",$param) and $param["SubModule"] !== null) {
            $this->SubModule = $param["SubModule"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = $param["Levels"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = $param["Items"];
        }
    }
}
