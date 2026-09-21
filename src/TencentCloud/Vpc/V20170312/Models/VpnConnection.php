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
 * VPN通道对象。
 *
 * @method string getVpnConnectionId() 获取<p>通道实例ID。</p>
 * @method void setVpnConnectionId(string $VpnConnectionId) 设置<p>通道实例ID。</p>
 * @method string getVpnConnectionName() 获取<p>通道名称。</p>
 * @method void setVpnConnectionName(string $VpnConnectionName) 设置<p>通道名称。</p>
 * @method string getVpcId() 获取<p>VPC实例ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC实例ID。</p>
 * @method string getVpnGatewayId() 获取<p>VPN网关实例ID。</p>
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置<p>VPN网关实例ID。</p>
 * @method string getCustomerGatewayId() 获取<p>对端网关实例ID。</p>
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置<p>对端网关实例ID。</p>
 * @method string getPreShareKey() 获取<p>预共享密钥。</p>
 * @method void setPreShareKey(string $PreShareKey) 设置<p>预共享密钥。</p>
 * @method string getVpnProto() 获取<p>通道传输协议。</p>
 * @method void setVpnProto(string $VpnProto) 设置<p>通道传输协议。</p>
 * @method string getEncryptProto() 获取<p>通道加密协议。</p>
 * @method void setEncryptProto(string $EncryptProto) 设置<p>通道加密协议。</p>
 * @method string getRouteType() 获取<p>路由类型。</p>
 * @method void setRouteType(string $RouteType) 设置<p>路由类型。</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method string getState() 获取<p>通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。</p>
 * @method void setState(string $State) 设置<p>通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。</p>
 * @method string getNetStatus() 获取<p>通道连接状态，AVAILABLE：已连接。</p>
 * @method void setNetStatus(string $NetStatus) 设置<p>通道连接状态，AVAILABLE：已连接。</p>
 * @method array getSecurityPolicyDatabaseSet() 获取<p>SPD。</p>
 * @method void setSecurityPolicyDatabaseSet(array $SecurityPolicyDatabaseSet) 设置<p>SPD。</p>
 * @method IKEOptionsSpecification getIKEOptionsSpecification() 获取<p>IKE选项。</p>
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) 设置<p>IKE选项。</p>
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() 获取<p>IPSEC选择。</p>
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) 设置<p>IPSEC选择。</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否支持健康状态探测</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否支持健康状态探测</p>
 * @method string getHealthCheckLocalIp() 获取<p>本端探测ip</p>
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) 设置<p>本端探测ip</p>
 * @method string getHealthCheckRemoteIp() 获取<p>对端探测ip</p>
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) 设置<p>对端探测ip</p>
 * @method string getHealthCheckStatus() 获取<p>通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象</p>
 * @method void setHealthCheckStatus(string $HealthCheckStatus) 设置<p>通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象</p>
 * @method integer getDpdEnable() 获取<p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
 * @method void setDpdEnable(integer $DpdEnable) 设置<p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
 * @method string getDpdTimeout() 获取<p>DPD超时时间。即探测确认对端不存在需要的时间。</p>
 * @method void setDpdTimeout(string $DpdTimeout) 设置<p>DPD超时时间。即探测确认对端不存在需要的时间。</p>
 * @method string getDpdAction() 获取<p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p>
 * @method void setDpdAction(string $DpdAction) 设置<p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p>
 * @method array getTagSet() 获取<p>标签键值对数组</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对数组</p>
 * @method string getNegotiationType() 获取<p>协商类型</p><p>枚举值：</p><ul><li>active： 主动协商</li><li>passive： 被动协商</li><li>flowTrigger： 流量协商</li></ul>
 * @method void setNegotiationType(string $NegotiationType) 设置<p>协商类型</p><p>枚举值：</p><ul><li>active： 主动协商</li><li>passive： 被动协商</li><li>flowTrigger： 流量协商</li></ul>
 * @method BgpConfigAndAsn getBgpConfig() 获取<p>Bgp配置信息</p>
 * @method void setBgpConfig(BgpConfigAndAsn $BgpConfig) 设置<p>Bgp配置信息</p>
 * @method HealthCheckConfig getHealthCheckConfig() 获取<p>Nqa配置信息</p>
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) 设置<p>Nqa配置信息</p>
 */
class VpnConnection extends AbstractModel
{
    /**
     * @var string <p>通道实例ID。</p>
     */
    public $VpnConnectionId;

    /**
     * @var string <p>通道名称。</p>
     */
    public $VpnConnectionName;

    /**
     * @var string <p>VPC实例ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>VPN网关实例ID。</p>
     */
    public $VpnGatewayId;

    /**
     * @var string <p>对端网关实例ID。</p>
     */
    public $CustomerGatewayId;

    /**
     * @var string <p>预共享密钥。</p>
     */
    public $PreShareKey;

    /**
     * @var string <p>通道传输协议。</p>
     */
    public $VpnProto;

    /**
     * @var string <p>通道加密协议。</p>
     */
    public $EncryptProto;

    /**
     * @var string <p>路由类型。</p>
     */
    public $RouteType;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。</p>
     */
    public $State;

    /**
     * @var string <p>通道连接状态，AVAILABLE：已连接。</p>
     */
    public $NetStatus;

    /**
     * @var array <p>SPD。</p>
     */
    public $SecurityPolicyDatabaseSet;

    /**
     * @var IKEOptionsSpecification <p>IKE选项。</p>
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification <p>IPSEC选择。</p>
     */
    public $IPSECOptionsSpecification;

    /**
     * @var boolean <p>是否支持健康状态探测</p>
     */
    public $EnableHealthCheck;

    /**
     * @var string <p>本端探测ip</p>
     */
    public $HealthCheckLocalIp;

    /**
     * @var string <p>对端探测ip</p>
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string <p>通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象</p>
     */
    public $HealthCheckStatus;

    /**
     * @var integer <p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
     */
    public $DpdEnable;

    /**
     * @var string <p>DPD超时时间。即探测确认对端不存在需要的时间。</p>
     */
    public $DpdTimeout;

    /**
     * @var string <p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p>
     */
    public $DpdAction;

    /**
     * @var array <p>标签键值对数组</p>
     */
    public $TagSet;

    /**
     * @var string <p>协商类型</p><p>枚举值：</p><ul><li>active： 主动协商</li><li>passive： 被动协商</li><li>flowTrigger： 流量协商</li></ul>
     */
    public $NegotiationType;

    /**
     * @var BgpConfigAndAsn <p>Bgp配置信息</p>
     */
    public $BgpConfig;

    /**
     * @var HealthCheckConfig <p>Nqa配置信息</p>
     */
    public $HealthCheckConfig;

    /**
     * @param string $VpnConnectionId <p>通道实例ID。</p>
     * @param string $VpnConnectionName <p>通道名称。</p>
     * @param string $VpcId <p>VPC实例ID。</p>
     * @param string $VpnGatewayId <p>VPN网关实例ID。</p>
     * @param string $CustomerGatewayId <p>对端网关实例ID。</p>
     * @param string $PreShareKey <p>预共享密钥。</p>
     * @param string $VpnProto <p>通道传输协议。</p>
     * @param string $EncryptProto <p>通道加密协议。</p>
     * @param string $RouteType <p>路由类型。</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param string $State <p>通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。</p>
     * @param string $NetStatus <p>通道连接状态，AVAILABLE：已连接。</p>
     * @param array $SecurityPolicyDatabaseSet <p>SPD。</p>
     * @param IKEOptionsSpecification $IKEOptionsSpecification <p>IKE选项。</p>
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification <p>IPSEC选择。</p>
     * @param boolean $EnableHealthCheck <p>是否支持健康状态探测</p>
     * @param string $HealthCheckLocalIp <p>本端探测ip</p>
     * @param string $HealthCheckRemoteIp <p>对端探测ip</p>
     * @param string $HealthCheckStatus <p>通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象</p>
     * @param integer $DpdEnable <p>DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）</p>
     * @param string $DpdTimeout <p>DPD超时时间。即探测确认对端不存在需要的时间。</p>
     * @param string $DpdAction <p>DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）</p>
     * @param array $TagSet <p>标签键值对数组</p>
     * @param string $NegotiationType <p>协商类型</p><p>枚举值：</p><ul><li>active： 主动协商</li><li>passive： 被动协商</li><li>flowTrigger： 流量协商</li></ul>
     * @param BgpConfigAndAsn $BgpConfig <p>Bgp配置信息</p>
     * @param HealthCheckConfig $HealthCheckConfig <p>Nqa配置信息</p>
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
        }

        if (array_key_exists("VpnProto",$param) and $param["VpnProto"] !== null) {
            $this->VpnProto = $param["VpnProto"];
        }

        if (array_key_exists("EncryptProto",$param) and $param["EncryptProto"] !== null) {
            $this->EncryptProto = $param["EncryptProto"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("NetStatus",$param) and $param["NetStatus"] !== null) {
            $this->NetStatus = $param["NetStatus"];
        }

        if (array_key_exists("SecurityPolicyDatabaseSet",$param) and $param["SecurityPolicyDatabaseSet"] !== null) {
            $this->SecurityPolicyDatabaseSet = [];
            foreach ($param["SecurityPolicyDatabaseSet"] as $key => $value){
                $obj = new SecurityPolicyDatabase();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyDatabaseSet, $obj);
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

        if (array_key_exists("HealthCheckStatus",$param) and $param["HealthCheckStatus"] !== null) {
            $this->HealthCheckStatus = $param["HealthCheckStatus"];
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

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("NegotiationType",$param) and $param["NegotiationType"] !== null) {
            $this->NegotiationType = $param["NegotiationType"];
        }

        if (array_key_exists("BgpConfig",$param) and $param["BgpConfig"] !== null) {
            $this->BgpConfig = new BgpConfigAndAsn();
            $this->BgpConfig->deserialize($param["BgpConfig"]);
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new HealthCheckConfig();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }
    }
}
