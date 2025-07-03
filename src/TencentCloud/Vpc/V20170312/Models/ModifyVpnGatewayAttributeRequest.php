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
 * ModifyVpnGatewayAttribute请求参数结构体
 *
 * @method string getVpnGatewayId() 获取VPN网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID。
 * @method string getVpnGatewayName() 获取VPN网关名称，最大长度不能超过60个字节。
 * @method void setVpnGatewayName(string $VpnGatewayName) 设置VPN网关名称，最大长度不能超过60个字节。
 * @method string getInstanceChargeType() 获取VPN网关计费模式，目前只支持预付费（即包年包月）到后付费（即按量计费）的转换。即参数只支持：POSTPAID_BY_HOUR。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置VPN网关计费模式，目前只支持预付费（即包年包月）到后付费（即按量计费）的转换。即参数只支持：POSTPAID_BY_HOUR。
 * @method integer getBgpAsn() 获取BGP ASN。ASN取值范围为1- 4294967295，默认值64551，其中139341、45090和58835不可用。
 * @method void setBgpAsn(integer $BgpAsn) 设置BGP ASN。ASN取值范围为1- 4294967295，默认值64551，其中139341、45090和58835不可用。
 * @method integer getMaxConnection() 获取服务端最大连接数个数。
 * @method void setMaxConnection(integer $MaxConnection) 设置服务端最大连接数个数。
 */
class ModifyVpnGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string VPN网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string VPN网关名称，最大长度不能超过60个字节。
     */
    public $VpnGatewayName;

    /**
     * @var string VPN网关计费模式，目前只支持预付费（即包年包月）到后付费（即按量计费）的转换。即参数只支持：POSTPAID_BY_HOUR。
     */
    public $InstanceChargeType;

    /**
     * @var integer BGP ASN。ASN取值范围为1- 4294967295，默认值64551，其中139341、45090和58835不可用。
     */
    public $BgpAsn;

    /**
     * @var integer 服务端最大连接数个数。
     */
    public $MaxConnection;

    /**
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param string $VpnGatewayName VPN网关名称，最大长度不能超过60个字节。
     * @param string $InstanceChargeType VPN网关计费模式，目前只支持预付费（即包年包月）到后付费（即按量计费）的转换。即参数只支持：POSTPAID_BY_HOUR。
     * @param integer $BgpAsn BGP ASN。ASN取值范围为1- 4294967295，默认值64551，其中139341、45090和58835不可用。
     * @param integer $MaxConnection 服务端最大连接数个数。
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("BgpAsn",$param) and $param["BgpAsn"] !== null) {
            $this->BgpAsn = $param["BgpAsn"];
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }
    }
}
