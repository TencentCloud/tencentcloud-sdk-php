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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBusinessResource请求参数结构体
 *
 * @method integer getAreaId() 获取<p>业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)</p>
 * @method void setAreaId(integer $AreaId) 设置<p>业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)</p>
 * @method integer getProtocol() 获取<p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
 * @method void setProtocol(integer $Protocol) 设置<p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
 * @method string getServiceName() 获取<p>业务资源名称，同一个资源模块下面不可重复</p>
 * @method void setServiceName(string $ServiceName) 设置<p>业务资源名称，同一个资源模块下面不可重复</p>
 * @method integer getLevels() 获取<p>业务资源优先级 1-65535(只支持32位)</p>
 * @method void setLevels(integer $Levels) 设置<p>业务资源优先级 1-65535(只支持32位)</p>
 * @method string getServiceType() 获取<p>业务资源类型:ip,domain,ip_section，对应ip、域名、ip段</p>
 * @method void setServiceType(string $ServiceType) 设置<p>业务资源类型:ip,domain,ip_section，对应ip、域名、ip段</p>
 * @method string getServicePort() 获取<p>业务资源端口 all,1-65535</p>
 * @method void setServicePort(string $ServicePort) 设置<p>业务资源端口 all,1-65535</p>
 * @method integer getServiceId() 获取<p>修改业务资源的id(只支持32位)</p>
 * @method void setServiceId(integer $ServiceId) 设置<p>修改业务资源的id(只支持32位)</p>
 * @method string getServiceAddress() 获取<p>业务资源地址(ip、域名、ip段)</p>
 * @method void setServiceAddress(string $ServiceAddress) 设置<p>业务资源地址(ip、域名、ip段)</p>
 * @method integer getDirectConn() 获取<p>是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)</p>
 * @method void setDirectConn(integer $DirectConn) 设置<p>是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)</p>
 * @method integer getConnectivityCheckSwitch() 获取<p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
 * @method void setConnectivityCheckSwitch(integer $ConnectivityCheckSwitch) 设置<p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
 * @method integer getConnectivityCheckInterval() 获取<p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
 * @method void setConnectivityCheckInterval(integer $ConnectivityCheckInterval) 设置<p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
 * @method string getConnectivityCheckIntervalUnit() 获取<p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
 * @method void setConnectivityCheckIntervalUnit(string $ConnectivityCheckIntervalUnit) 设置<p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
 * @method integer getServiceNetwork() 获取<p>资源网络类型：1-内网资源 2-外网资源，默认1</p>
 * @method void setServiceNetwork(integer $ServiceNetwork) 设置<p>资源网络类型：1-内网资源 2-外网资源，默认1</p>
 * @method integer getWireGuardTunnel() 获取<p>是否启用L3网络：1-不启用 2-启用，默认1</p>
 * @method void setWireGuardTunnel(integer $WireGuardTunnel) 设置<p>是否启用L3网络：1-不启用 2-启用，默认1</p>
 * @method string getDescription() 获取<p>资源描述</p>
 * @method void setDescription(string $Description) 设置<p>资源描述</p>
 * @method integer getURLAuditState() 获取<p>URL审计开关：0-关闭 1-开启，默认0</p>
 * @method void setURLAuditState(integer $URLAuditState) 设置<p>URL审计开关：0-关闭 1-开启，默认0</p>
 * @method string getURLAuditId() 获取<p>URL审计证书ID列表，多个用分号分隔</p>
 * @method void setURLAuditId(string $URLAuditId) 设置<p>URL审计证书ID列表，多个用分号分隔</p>
 * @method string getURLPath() 获取<p>URL审计路径，多个用分号分隔</p>
 * @method void setURLPath(string $URLPath) 设置<p>URL审计路径，多个用分号分隔</p>
 */
class ModifyBusinessResourceRequest extends AbstractModel
{
    /**
     * @var integer <p>业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)</p>
     */
    public $AreaId;

    /**
     * @var integer <p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
     */
    public $Protocol;

    /**
     * @var string <p>业务资源名称，同一个资源模块下面不可重复</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>业务资源优先级 1-65535(只支持32位)</p>
     */
    public $Levels;

    /**
     * @var string <p>业务资源类型:ip,domain,ip_section，对应ip、域名、ip段</p>
     */
    public $ServiceType;

    /**
     * @var string <p>业务资源端口 all,1-65535</p>
     */
    public $ServicePort;

    /**
     * @var integer <p>修改业务资源的id(只支持32位)</p>
     */
    public $ServiceId;

    /**
     * @var string <p>业务资源地址(ip、域名、ip段)</p>
     */
    public $ServiceAddress;

    /**
     * @var integer <p>是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)</p>
     */
    public $DirectConn;

    /**
     * @var integer <p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
     */
    public $ConnectivityCheckSwitch;

    /**
     * @var integer <p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
     */
    public $ConnectivityCheckInterval;

    /**
     * @var string <p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
     */
    public $ConnectivityCheckIntervalUnit;

    /**
     * @var integer <p>资源网络类型：1-内网资源 2-外网资源，默认1</p>
     */
    public $ServiceNetwork;

    /**
     * @var integer <p>是否启用L3网络：1-不启用 2-启用，默认1</p>
     */
    public $WireGuardTunnel;

    /**
     * @var string <p>资源描述</p>
     */
    public $Description;

    /**
     * @var integer <p>URL审计开关：0-关闭 1-开启，默认0</p>
     */
    public $URLAuditState;

    /**
     * @var string <p>URL审计证书ID列表，多个用分号分隔</p>
     */
    public $URLAuditId;

    /**
     * @var string <p>URL审计路径，多个用分号分隔</p>
     */
    public $URLPath;

    /**
     * @param integer $AreaId <p>业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)</p>
     * @param integer $Protocol <p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
     * @param string $ServiceName <p>业务资源名称，同一个资源模块下面不可重复</p>
     * @param integer $Levels <p>业务资源优先级 1-65535(只支持32位)</p>
     * @param string $ServiceType <p>业务资源类型:ip,domain,ip_section，对应ip、域名、ip段</p>
     * @param string $ServicePort <p>业务资源端口 all,1-65535</p>
     * @param integer $ServiceId <p>修改业务资源的id(只支持32位)</p>
     * @param string $ServiceAddress <p>业务资源地址(ip、域名、ip段)</p>
     * @param integer $DirectConn <p>是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)</p>
     * @param integer $ConnectivityCheckSwitch <p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
     * @param integer $ConnectivityCheckInterval <p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
     * @param string $ConnectivityCheckIntervalUnit <p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
     * @param integer $ServiceNetwork <p>资源网络类型：1-内网资源 2-外网资源，默认1</p>
     * @param integer $WireGuardTunnel <p>是否启用L3网络：1-不启用 2-启用，默认1</p>
     * @param string $Description <p>资源描述</p>
     * @param integer $URLAuditState <p>URL审计开关：0-关闭 1-开启，默认0</p>
     * @param string $URLAuditId <p>URL审计证书ID列表，多个用分号分隔</p>
     * @param string $URLPath <p>URL审计路径，多个用分号分隔</p>
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = $param["Levels"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceAddress",$param) and $param["ServiceAddress"] !== null) {
            $this->ServiceAddress = $param["ServiceAddress"];
        }

        if (array_key_exists("DirectConn",$param) and $param["DirectConn"] !== null) {
            $this->DirectConn = $param["DirectConn"];
        }

        if (array_key_exists("ConnectivityCheckSwitch",$param) and $param["ConnectivityCheckSwitch"] !== null) {
            $this->ConnectivityCheckSwitch = $param["ConnectivityCheckSwitch"];
        }

        if (array_key_exists("ConnectivityCheckInterval",$param) and $param["ConnectivityCheckInterval"] !== null) {
            $this->ConnectivityCheckInterval = $param["ConnectivityCheckInterval"];
        }

        if (array_key_exists("ConnectivityCheckIntervalUnit",$param) and $param["ConnectivityCheckIntervalUnit"] !== null) {
            $this->ConnectivityCheckIntervalUnit = $param["ConnectivityCheckIntervalUnit"];
        }

        if (array_key_exists("ServiceNetwork",$param) and $param["ServiceNetwork"] !== null) {
            $this->ServiceNetwork = $param["ServiceNetwork"];
        }

        if (array_key_exists("WireGuardTunnel",$param) and $param["WireGuardTunnel"] !== null) {
            $this->WireGuardTunnel = $param["WireGuardTunnel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("URLAuditState",$param) and $param["URLAuditState"] !== null) {
            $this->URLAuditState = $param["URLAuditState"];
        }

        if (array_key_exists("URLAuditId",$param) and $param["URLAuditId"] !== null) {
            $this->URLAuditId = $param["URLAuditId"];
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = $param["URLPath"];
        }
    }
}
