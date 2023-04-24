<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getVpnConnectionId() 获取VPN通道实例ID。形如：vpnx-f49l6u0z。
 * @method void setVpnConnectionId(string $VpnConnectionId) 设置VPN通道实例ID。形如：vpnx-f49l6u0z。
 * @method string getVpnConnectionName() 获取VPN通道名称，可任意命名，但不得超过60个字符。
 * @method void setVpnConnectionName(string $VpnConnectionName) 设置VPN通道名称，可任意命名，但不得超过60个字符。
 * @method string getPreShareKey() 获取预共享密钥。
 * @method void setPreShareKey(string $PreShareKey) 设置预共享密钥。
 * @method array getSecurityPolicyDatabases() 获取SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
 * @method void setSecurityPolicyDatabases(array $SecurityPolicyDatabases) 设置SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
 * @method IKEOptionsSpecification getIKEOptionsSpecification() 获取IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) 设置IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() 获取IPSec配置，腾讯云提供IPSec安全会话设置。
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) 设置IPSec配置，腾讯云提供IPSec安全会话设置。
 * @method boolean getEnableHealthCheck() 获取是否启用通道健康检查，默认为False。
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否启用通道健康检查，默认为False。
 * @method string getHealthCheckLocalIp() 获取本端通道探测IP。
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) 设置本端通道探测IP。
 * @method string getHealthCheckRemoteIp() 获取对端通道探测IP。
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) 设置对端通道探测IP。
 * @method string getNegotiationType() 获取协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
 * @method void setNegotiationType(string $NegotiationType) 设置协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
 * @method integer getDpdEnable() 获取DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
 * @method void setDpdEnable(integer $DpdEnable) 设置DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
 * @method string getDpdTimeout() 获取DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
 * @method void setDpdTimeout(string $DpdTimeout) 设置DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
 * @method string getDpdAction() 获取DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
 * @method void setDpdAction(string $DpdAction) 设置DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
 * @method string getCustomerGatewayId() 获取对端网关ID，4.0及以上网关下的通道支持更新。
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置对端网关ID，4.0及以上网关下的通道支持更新。
 */
class ModifyVpnConnectionAttributeRequest extends AbstractModel
{
    /**
     * @var string VPN通道实例ID。形如：vpnx-f49l6u0z。
     */
    public $VpnConnectionId;

    /**
     * @var string VPN通道名称，可任意命名，但不得超过60个字符。
     */
    public $VpnConnectionName;

    /**
     * @var string 预共享密钥。
     */
    public $PreShareKey;

    /**
     * @var array SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
     */
    public $SecurityPolicyDatabases;

    /**
     * @var IKEOptionsSpecification IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification IPSec配置，腾讯云提供IPSec安全会话设置。
     */
    public $IPSECOptionsSpecification;

    /**
     * @var boolean 是否启用通道健康检查，默认为False。
     */
    public $EnableHealthCheck;

    /**
     * @var string 本端通道探测IP。
     */
    public $HealthCheckLocalIp;

    /**
     * @var string 对端通道探测IP。
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string 协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
     */
    public $NegotiationType;

    /**
     * @var integer DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
     */
    public $DpdEnable;

    /**
     * @var string DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
     */
    public $DpdTimeout;

    /**
     * @var string DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
     */
    public $DpdAction;

    /**
     * @var string 对端网关ID，4.0及以上网关下的通道支持更新。
     */
    public $CustomerGatewayId;

    /**
     * @param string $VpnConnectionId VPN通道实例ID。形如：vpnx-f49l6u0z。
     * @param string $VpnConnectionName VPN通道名称，可任意命名，但不得超过60个字符。
     * @param string $PreShareKey 预共享密钥。
     * @param array $SecurityPolicyDatabases SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段，172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
     * @param IKEOptionsSpecification $IKEOptionsSpecification IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议。
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSec配置，腾讯云提供IPSec安全会话设置。
     * @param boolean $EnableHealthCheck 是否启用通道健康检查，默认为False。
     * @param string $HealthCheckLocalIp 本端通道探测IP。
     * @param string $HealthCheckRemoteIp 对端通道探测IP。
     * @param string $NegotiationType 协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
     * @param integer $DpdEnable DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
     * @param string $DpdTimeout DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
     * @param string $DpdAction DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
     * @param string $CustomerGatewayId 对端网关ID，4.0及以上网关下的通道支持更新。
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
    }
}
