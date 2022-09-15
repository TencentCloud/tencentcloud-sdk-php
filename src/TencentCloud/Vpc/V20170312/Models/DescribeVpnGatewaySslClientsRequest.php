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
 * DescribeVpnGatewaySslClients请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，参数不支持同时指定SslVpnClientIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID形如：vpc-f49l6u0z。</li>
<li>vpn-gateway-id - String - （过滤条件）VPN实例ID形如：vpngw-5aluhh9t。</li>
<li>ssl-vpn-server-id - String - （过滤条件）SSL-VPN-SERVER实例ID形如：vpngwSslServer-123456。</li>
<li>ssl-vpn-client-id - String - （过滤条件）SSL-VPN-CLIENT实例ID形如：vpngwSslClient-123456。</li>
<li>ssl-vpn-client-name - String - （过滤条件）SSL-VPN-CLIENT实例名称。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定SslVpnClientIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID形如：vpc-f49l6u0z。</li>
<li>vpn-gateway-id - String - （过滤条件）VPN实例ID形如：vpngw-5aluhh9t。</li>
<li>ssl-vpn-server-id - String - （过滤条件）SSL-VPN-SERVER实例ID形如：vpngwSslServer-123456。</li>
<li>ssl-vpn-client-id - String - （过滤条件）SSL-VPN-CLIENT实例ID形如：vpngwSslClient-123456。</li>
<li>ssl-vpn-client-name - String - （过滤条件）SSL-VPN-CLIENT实例名称。</li>
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取请求对象个数
 * @method void setLimit(integer $Limit) 设置请求对象个数
 * @method array getSslVpnClientIds() 获取SSL-VPN-CLIENT实例ID。形如：vpngwSslClient-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定SslVpnClientIds和Filters。
 * @method void setSslVpnClientIds(array $SslVpnClientIds) 设置SSL-VPN-CLIENT实例ID。形如：vpngwSslClient-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定SslVpnClientIds和Filters。
 * @method boolean getIsVpnPortal() 获取VPN门户网站使用。默认是False。
 * @method void setIsVpnPortal(boolean $IsVpnPortal) 设置VPN门户网站使用。默认是False。
 */
class DescribeVpnGatewaySslClientsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，参数不支持同时指定SslVpnClientIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID形如：vpc-f49l6u0z。</li>
<li>vpn-gateway-id - String - （过滤条件）VPN实例ID形如：vpngw-5aluhh9t。</li>
<li>ssl-vpn-server-id - String - （过滤条件）SSL-VPN-SERVER实例ID形如：vpngwSslServer-123456。</li>
<li>ssl-vpn-client-id - String - （过滤条件）SSL-VPN-CLIENT实例ID形如：vpngwSslClient-123456。</li>
<li>ssl-vpn-client-name - String - （过滤条件）SSL-VPN-CLIENT实例名称。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 请求对象个数
     */
    public $Limit;

    /**
     * @var array SSL-VPN-CLIENT实例ID。形如：vpngwSslClient-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定SslVpnClientIds和Filters。
     */
    public $SslVpnClientIds;

    /**
     * @var boolean VPN门户网站使用。默认是False。
     */
    public $IsVpnPortal;

    /**
     * @param array $Filters 过滤条件，参数不支持同时指定SslVpnClientIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID形如：vpc-f49l6u0z。</li>
<li>vpn-gateway-id - String - （过滤条件）VPN实例ID形如：vpngw-5aluhh9t。</li>
<li>ssl-vpn-server-id - String - （过滤条件）SSL-VPN-SERVER实例ID形如：vpngwSslServer-123456。</li>
<li>ssl-vpn-client-id - String - （过滤条件）SSL-VPN-CLIENT实例ID形如：vpngwSslClient-123456。</li>
<li>ssl-vpn-client-name - String - （过滤条件）SSL-VPN-CLIENT实例名称。</li>
     * @param integer $Offset 偏移量
     * @param integer $Limit 请求对象个数
     * @param array $SslVpnClientIds SSL-VPN-CLIENT实例ID。形如：vpngwSslClient-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定SslVpnClientIds和Filters。
     * @param boolean $IsVpnPortal VPN门户网站使用。默认是False。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SslVpnClientIds",$param) and $param["SslVpnClientIds"] !== null) {
            $this->SslVpnClientIds = $param["SslVpnClientIds"];
        }

        if (array_key_exists("IsVpnPortal",$param) and $param["IsVpnPortal"] !== null) {
            $this->IsVpnPortal = $param["IsVpnPortal"];
        }
    }
}
