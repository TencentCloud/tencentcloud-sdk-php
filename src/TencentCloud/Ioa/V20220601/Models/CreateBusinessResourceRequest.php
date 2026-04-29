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
 * CreateBusinessResource请求参数结构体
 *
 * @method integer getAreaId() 获取业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)
 * @method void setAreaId(integer $AreaId) 设置业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)
 * @method integer getProtocol() 获取业务资源协议类型, 1:UDP, 2:TCP, 3:所有协议(只支持32位)
 * @method void setProtocol(integer $Protocol) 设置业务资源协议类型, 1:UDP, 2:TCP, 3:所有协议(只支持32位)
 * @method string getServiceName() 获取业务资源名称，同一个资源模块下面不可重复
 * @method void setServiceName(string $ServiceName) 设置业务资源名称，同一个资源模块下面不可重复
 * @method string getServiceType() 获取业务资源类型:ip,domain,ip_section，对应ip、域名、ip段
 * @method void setServiceType(string $ServiceType) 设置业务资源类型:ip,domain,ip_section，对应ip、域名、ip段
 * @method string getServicePort() 获取业务资源端口 all,1-65535
 * @method void setServicePort(string $ServicePort) 设置业务资源端口 all,1-65535
 * @method integer getLevels() 获取业务资源优先级 1-65535(只支持32位)
 * @method void setLevels(integer $Levels) 设置业务资源优先级 1-65535(只支持32位)
 * @method string getServiceAddress() 获取业务资源地址(ip、域名、ip段)
 * @method void setServiceAddress(string $ServiceAddress) 设置业务资源地址(ip、域名、ip段)
 * @method integer getDirectConn() 获取是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)
 * @method void setDirectConn(integer $DirectConn) 设置是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)
 */
class CreateBusinessResourceRequest extends AbstractModel
{
    /**
     * @var integer 业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)
     */
    public $AreaId;

    /**
     * @var integer 业务资源协议类型, 1:UDP, 2:TCP, 3:所有协议(只支持32位)
     */
    public $Protocol;

    /**
     * @var string 业务资源名称，同一个资源模块下面不可重复
     */
    public $ServiceName;

    /**
     * @var string 业务资源类型:ip,domain,ip_section，对应ip、域名、ip段
     */
    public $ServiceType;

    /**
     * @var string 业务资源端口 all,1-65535
     */
    public $ServicePort;

    /**
     * @var integer 业务资源优先级 1-65535(只支持32位)
     */
    public $Levels;

    /**
     * @var string 业务资源地址(ip、域名、ip段)
     */
    public $ServiceAddress;

    /**
     * @var integer 是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)
     */
    public $DirectConn;

    /**
     * @param integer $AreaId 业务资源所在的模块id，没有资源模块先创建资源模块(只支持32位)
     * @param integer $Protocol 业务资源协议类型, 1:UDP, 2:TCP, 3:所有协议(只支持32位)
     * @param string $ServiceName 业务资源名称，同一个资源模块下面不可重复
     * @param string $ServiceType 业务资源类型:ip,domain,ip_section，对应ip、域名、ip段
     * @param string $ServicePort 业务资源端口 all,1-65535
     * @param integer $Levels 业务资源优先级 1-65535(只支持32位)
     * @param string $ServiceAddress 业务资源地址(ip、域名、ip段)
     * @param integer $DirectConn 是否走代理,该参数不传，默认为0, 2：内外网直连，1：内网直连， 0：不启用代理配置(只支持32位)
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

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = $param["Levels"];
        }

        if (array_key_exists("ServiceAddress",$param) and $param["ServiceAddress"] !== null) {
            $this->ServiceAddress = $param["ServiceAddress"];
        }

        if (array_key_exists("DirectConn",$param) and $param["DirectConn"] !== null) {
            $this->DirectConn = $param["DirectConn"];
        }
    }
}
