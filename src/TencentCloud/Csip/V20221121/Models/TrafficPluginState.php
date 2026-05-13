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
 * AI Agent 流量沙箱插件状态
 *
 * @method string getInstallStatus() 获取插件安装状态（上层聚合）
枚举值：
NONE：未安装
INSTALLING：安装中
INSTALLED：已安装
INSTALL_FAIL：安装失败
 * @method void setInstallStatus(string $InstallStatus) 设置插件安装状态（上层聚合）
枚举值：
NONE：未安装
INSTALLING：安装中
INSTALLED：已安装
INSTALL_FAIL：安装失败
 * @method string getStatus() 获取插件安装细分状态。取值与 InstallStatus 对应：未安装（InstallStatus=UNINSTALL）时为空字符串；安装成功（InstallStatus=INSTALLED）时为 SUCCESS；安装失败（InstallStatus=INSTALL_FAIL）时为具体失败原因
枚举值：
NOT_SUPPORT：环境不支持
CONTAINER_NOT_FOUND：容器不存在
REQUIRE_RESTART：需要重启
CA_FAILED：CA 失败
EBPF_FAILED：eBPF 失败
IPTABLE_FAILED：iptables 失败
REDIRECT_FAILED：流量重定向失败
 * @method void setStatus(string $Status) 设置插件安装细分状态。取值与 InstallStatus 对应：未安装（InstallStatus=UNINSTALL）时为空字符串；安装成功（InstallStatus=INSTALLED）时为 SUCCESS；安装失败（InstallStatus=INSTALL_FAIL）时为具体失败原因
枚举值：
NOT_SUPPORT：环境不支持
CONTAINER_NOT_FOUND：容器不存在
REQUIRE_RESTART：需要重启
CA_FAILED：CA 失败
EBPF_FAILED：eBPF 失败
IPTABLE_FAILED：iptables 失败
REDIRECT_FAILED：流量重定向失败
 * @method string getMessage() 获取状态文案（由 Status 根据请求语言派生的国际化描述）
 * @method void setMessage(string $Message) 设置状态文案（由 Status 根据请求语言派生的国际化描述）
 * @method string getActivityTime() 获取插件最近活跃时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setActivityTime(string $ActivityTime) 设置插件最近活跃时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 */
class TrafficPluginState extends AbstractModel
{
    /**
     * @var string 插件安装状态（上层聚合）
枚举值：
NONE：未安装
INSTALLING：安装中
INSTALLED：已安装
INSTALL_FAIL：安装失败
     */
    public $InstallStatus;

    /**
     * @var string 插件安装细分状态。取值与 InstallStatus 对应：未安装（InstallStatus=UNINSTALL）时为空字符串；安装成功（InstallStatus=INSTALLED）时为 SUCCESS；安装失败（InstallStatus=INSTALL_FAIL）时为具体失败原因
枚举值：
NOT_SUPPORT：环境不支持
CONTAINER_NOT_FOUND：容器不存在
REQUIRE_RESTART：需要重启
CA_FAILED：CA 失败
EBPF_FAILED：eBPF 失败
IPTABLE_FAILED：iptables 失败
REDIRECT_FAILED：流量重定向失败
     */
    public $Status;

    /**
     * @var string 状态文案（由 Status 根据请求语言派生的国际化描述）
     */
    public $Message;

    /**
     * @var string 插件最近活跃时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $ActivityTime;

    /**
     * @param string $InstallStatus 插件安装状态（上层聚合）
枚举值：
NONE：未安装
INSTALLING：安装中
INSTALLED：已安装
INSTALL_FAIL：安装失败
     * @param string $Status 插件安装细分状态。取值与 InstallStatus 对应：未安装（InstallStatus=UNINSTALL）时为空字符串；安装成功（InstallStatus=INSTALLED）时为 SUCCESS；安装失败（InstallStatus=INSTALL_FAIL）时为具体失败原因
枚举值：
NOT_SUPPORT：环境不支持
CONTAINER_NOT_FOUND：容器不存在
REQUIRE_RESTART：需要重启
CA_FAILED：CA 失败
EBPF_FAILED：eBPF 失败
IPTABLE_FAILED：iptables 失败
REDIRECT_FAILED：流量重定向失败
     * @param string $Message 状态文案（由 Status 根据请求语言派生的国际化描述）
     * @param string $ActivityTime 插件最近活跃时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
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
        if (array_key_exists("InstallStatus",$param) and $param["InstallStatus"] !== null) {
            $this->InstallStatus = $param["InstallStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ActivityTime",$param) and $param["ActivityTime"] !== null) {
            $this->ActivityTime = $param["ActivityTime"];
        }
    }
}
