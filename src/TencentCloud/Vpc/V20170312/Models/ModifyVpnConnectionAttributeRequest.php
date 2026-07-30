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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpnConnectionAttribute请求参数结构体
 *
 * @method string getVpnConnectionId() 获取<p>VPN通道实例ID。形如：vpnx-f49l6u0z。</p>
 * @method void setVpnConnectionId(string $VpnConnectionId) 设置<p>VPN通道实例ID。形如：vpnx-f49l6u0z。</p>
 * @method string getVpnConnectionName() 获取<p>VPN通道名称，可任意命名，但不得超过60个字符。</p>
 * @method void setVpnConnectionName(string $VpnConnectionName) 设置<p>VPN通道名称，可任意命名，但不得超过60个字符。</p>
 * @method string getPreShareKey() 获取<p>预共享密钥。</p>
 * @method void setPreShareKey(string $PreShareKey) 设置<p>预共享密钥。</p>
 * @method array getSecurityPolicyDatabases() 获取<p>SPD策略组，例如：{&quot;10.0.0.5/24&quot;:[&quot;172.123.10.5/16&quot;]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。</p>
 * @method void setSecurityPolicyDatabases(array $SecurityPolicyDatabases) 设置<p>SPD策略组，例如：{&quot;10.0.0.5/24&quot;:[&quot;172.123.10.5/16&quot;]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。</p>
 * @method IKEOptionsSpecification getIKEOptionsSpecification() 获取<p>IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。</p>
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) 设置<p>IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。</p>
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() 获取<p>IPSec配置，腾讯云提供IPSec安全会话设置。</p>
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) 设置<p>IPSec配置，腾讯云提供IPSec安全会话设置。</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否启用通道健康检查，默认为False。</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否启用通道健康检查，默认为False。</p>
 * @method string getHealthCheckLocalIp() 获取<p>本端通道探测IP。</p>
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) 设置<p>本端通道探测IP。</p>
 * @method string getHealthCheckRemoteIp() 获取<p>对端通道探测IP。</p>
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) 设置<p>对端通道探测IP。</p>
 * @method string getNegotiationType() 获取<p>协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）</p>
 * @method void setNegotiationType(string $NegotiationType) 设置<p>协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）</p>
 * @method integer getDpdEnable() 获取<p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
 * @method void setDpdEnable(integer $DpdEnable) 设置<p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
 * @method string getDpdTimeout() 获取<p>DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒</p>
 * @method void setDpdTimeout(string $DpdTimeout) 设置<p>DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒</p>
 * @method string getDpdAction() 获取<p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p><p>默认值：restart</p>
 * @method void setDpdAction(string $DpdAction) 设置<p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p><p>默认值：restart</p>
 * @method string getCustomerGatewayId() 获取<p>对端网关ID，4.0及以上网关下的通道支持更新。</p>
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置<p>对端网关ID，4.0及以上网关下的通道支持更新。</p>
 * @method HealthCheckConfig getHealthCheckConfig() 获取<p>健康检查配置</p>
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) 设置<p>健康检查配置</p>
 * @method BgpConfig getBgpConfig() 获取<p>BGP隧道配置</p>
 * @method void setBgpConfig(BgpConfig $BgpConfig) 设置<p>BGP隧道配置</p>
 */
class ModifyVpnConnectionAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>VPN通道实例ID。形如：vpnx-f49l6u0z。</p>
     */
    public $VpnConnectionId;

    /**
     * @var string <p>VPN通道名称，可任意命名，但不得超过60个字符。</p>
     */
    public $VpnConnectionName;

    /**
     * @var string <p>预共享密钥。</p>
     */
    public $PreShareKey;

    /**
     * @var array <p>SPD策略组，例如：{&quot;10.0.0.5/24&quot;:[&quot;172.123.10.5/16&quot;]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。</p>
     */
    public $SecurityPolicyDatabases;

    /**
     * @var IKEOptionsSpecification <p>IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。</p>
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification <p>IPSec配置，腾讯云提供IPSec安全会话设置。</p>
     */
    public $IPSECOptionsSpecification;

    /**
     * @var boolean <p>是否启用通道健康检查，默认为False。</p>
     */
    public $EnableHealthCheck;

    /**
     * @var string <p>本端通道探测IP。</p>
     */
    public $HealthCheckLocalIp;

    /**
     * @var string <p>对端通道探测IP。</p>
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string <p>协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）</p>
     */
    public $NegotiationType;

    /**
     * @var integer <p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
     */
    public $DpdEnable;

    /**
     * @var string <p>DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒</p>
     */
    public $DpdTimeout;

    /**
     * @var string <p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p><p>默认值：restart</p>
     */
    public $DpdAction;

    /**
     * @var string <p>对端网关ID，4.0及以上网关下的通道支持更新。</p>
     */
    public $CustomerGatewayId;

    /**
     * @var HealthCheckConfig <p>健康检查配置</p>
     */
    public $HealthCheckConfig;

    /**
     * @var BgpConfig <p>BGP隧道配置</p>
     */
    public $BgpConfig;

    /**
     * @param string $VpnConnectionId <p>VPN通道实例ID。形如：vpnx-f49l6u0z。</p>
     * @param string $VpnConnectionName <p>VPN通道名称，可任意命名，但不得超过60个字符。</p>
     * @param string $PreShareKey <p>预共享密钥。</p>
     * @param array $SecurityPolicyDatabases <p>SPD策略组，例如：{&quot;10.0.0.5/24&quot;:[&quot;172.123.10.5/16&quot;]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。</p>
     * @param IKEOptionsSpecification $IKEOptionsSpecification <p>IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。</p>
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification <p>IPSec配置，腾讯云提供IPSec安全会话设置。</p>
     * @param boolean $EnableHealthCheck <p>是否启用通道健康检查，默认为False。</p>
     * @param string $HealthCheckLocalIp <p>本端通道探测IP。</p>
     * @param string $HealthCheckRemoteIp <p>对端通道探测IP。</p>
     * @param string $NegotiationType <p>协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）</p>
     * @param integer $DpdEnable <p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
     * @param string $DpdTimeout <p>DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒</p>
     * @param string $DpdAction <p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p><p>默认值：restart</p>
     * @param string $CustomerGatewayId <p>对端网关ID，4.0及以上网关下的通道支持更新。</p>
     * @param HealthCheckConfig $HealthCheckConfig <p>健康检查配置</p>
     * @param BgpConfig $BgpConfig <p>BGP隧道配置</p>
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
        if (array_key_exists("VpnConnectionId",$param) and $param["VpnConnectionId"] !== null) {
            $this->VpnConnectionId = $param["VpnConnectionId"];
        }

        if (array_key_exists("VpnConnectionName",$param) and $param["VpnConnectionName"] !== null) {
            $this->VpnConnectionName = $param["VpnConnectionName"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
        }

        if (array_key_exists("SecurityPolicyDatabases",$param) and $param["SecurityPolicyDatabases"] !== null) {
            $this->SecurityPolicyDatabases = [];
            foreach ($param["SecurityPolicyDatabases"] as $key => $value){
                $obj = new SecurityPolicyDatabase();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyDatabases, $obj);
            }
        }

        if (array_key_exists("IKEOptionsSpecification",$param) and $param["IKEOptionsSpecification"] !== null) {
            $this->IKEOptionsSpecification = new IKEOptionsSpecification();
            $this->IKEOptionsSpecification->deserialize($param["IKEOptionsSpecification"]);
        }

        if (array_key_exists("IPSECOptionsSpecification",$param) and $param["IPSECOptionsSpecification"] !== null) {
            $this->IPSECOptionsSpecification = new IPSECOptionsSpecification();
            $this->IPSECOptionsSpecification->deserialize($param["IPSECOptionsSpecification"]);
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckLocalIp",$param) and $param["HealthCheckLocalIp"] !== null) {
            $this->HealthCheckLocalIp = $param["HealthCheckLocalIp"];
        }

        if (array_key_exists("HealthCheckRemoteIp",$param) and $param["HealthCheckRemoteIp"] !== null) {
            $this->HealthCheckRemoteIp = $param["HealthCheckRemoteIp"];
        }

        if (array_key_exists("NegotiationType",$param) and $param["NegotiationType"] !== null) {
            $this->NegotiationType = $param["NegotiationType"];
        }

        if (array_key_exists("DpdEnable",$param) and $param["DpdEnable"] !== null) {
            $this->DpdEnable = $param["DpdEnable"];
        }

        if (array_key_exists("DpdTimeout",$param) and $param["DpdTimeout"] !== null) {
            $this->DpdTimeout = $param["DpdTimeout"];
        }

        if (array_key_exists("DpdAction",$param) and $param["DpdAction"] !== null) {
            $this->DpdAction = $param["DpdAction"];
        }

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new HealthCheckConfig();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }

        if (array_key_exists("BgpConfig",$param) and $param["BgpConfig"] !== null) {
            $this->BgpConfig = new BgpConfig();
            $this->BgpConfig->deserialize($param["BgpConfig"]);
        }
    }
}
