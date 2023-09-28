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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全网关路由
 *
 * @method string getGatewayRouteName() 获取安全网关路由名称
 * @method void setGatewayRouteName(string $GatewayRouteName) 设置安全网关路由名称
 * @method string getGatewayRouteProtocol() 获取安全网关路由协议
 * @method void setGatewayRouteProtocol(string $GatewayRouteProtocol) 设置安全网关路由协议
 * @method string getGatewayRouteAddr() 获取安全网关路由地址
 * @method void setGatewayRouteAddr(string $GatewayRouteAddr) 设置安全网关路由地址
 * @method string getGatewayRouteDesc() 获取安全网关路由描述
 * @method void setGatewayRouteDesc(string $GatewayRouteDesc) 设置安全网关路由描述
 * @method string getGatewayRouteClusterId() 获取安全网关后端集群id，如果是外网服务，该id与GatewayRountName相同
 * @method void setGatewayRouteClusterId(string $GatewayRouteClusterId) 设置安全网关后端集群id，如果是外网服务，该id与GatewayRountName相同
 * @method string getGatewayRouteCreateTime() 获取安全网关创建时间
 * @method void setGatewayRouteCreateTime(string $GatewayRouteCreateTime) 设置安全网关创建时间
 * @method array getFrequencyLimitConfig() 获取安全网关路由限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyLimitConfig(array $FrequencyLimitConfig) 设置安全网关路由限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRouteServerType() 获取ip代表绑定后端ip。cbr代表云托管服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRouteServerType(string $GatewayRouteServerType) 设置ip代表绑定后端ip。cbr代表云托管服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRouteServerName() 获取服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRouteServerName(string $GatewayRouteServerName) 设置服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRewriteHost() 获取ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRewriteHost(string $GatewayRewriteHost) 设置ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayVersion() 获取网关版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayVersion(string $GatewayVersion) 设置网关版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRoutePath() 获取请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRoutePath(string $GatewayRoutePath) 设置请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRouteMethod() 获取请求模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRouteMethod(string $GatewayRouteMethod) 设置请求模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGatewayRoutePort() 获取4层端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRoutePort(integer $GatewayRoutePort) 设置4层端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRouteEnvId() 获取路由环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRouteEnvId(string $GatewayRouteEnvId) 设置路由环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayRoutePathMatchType() 获取路径匹配类型，支持prefix(前缀匹配)，regex(正则匹配)， 默认prefix
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayRoutePathMatchType(string $GatewayRoutePathMatchType) 设置路径匹配类型，支持prefix(前缀匹配)，regex(正则匹配)， 默认prefix
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomHeader getCustomHeader() 获取安全网关自定义头部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomHeader(CustomHeader $CustomHeader) 设置安全网关自定义头部
注意：此字段可能返回 null，表示取不到有效值。
 */
class WxGatewayRountItem extends AbstractModel
{
    /**
     * @var string 安全网关路由名称
     */
    public $GatewayRouteName;

    /**
     * @var string 安全网关路由协议
     */
    public $GatewayRouteProtocol;

    /**
     * @var string 安全网关路由地址
     */
    public $GatewayRouteAddr;

    /**
     * @var string 安全网关路由描述
     */
    public $GatewayRouteDesc;

    /**
     * @var string 安全网关后端集群id，如果是外网服务，该id与GatewayRountName相同
     */
    public $GatewayRouteClusterId;

    /**
     * @var string 安全网关创建时间
     */
    public $GatewayRouteCreateTime;

    /**
     * @var array 安全网关路由限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyLimitConfig;

    /**
     * @var string ip代表绑定后端ip。cbr代表云托管服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRouteServerType;

    /**
     * @var string 服务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRouteServerName;

    /**
     * @var string ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRewriteHost;

    /**
     * @var string 网关版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayVersion;

    /**
     * @var string 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRoutePath;

    /**
     * @var string 请求模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRouteMethod;

    /**
     * @var integer 4层端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRoutePort;

    /**
     * @var string 路由环境ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRouteEnvId;

    /**
     * @var string 路径匹配类型，支持prefix(前缀匹配)，regex(正则匹配)， 默认prefix
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayRoutePathMatchType;

    /**
     * @var CustomHeader 安全网关自定义头部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomHeader;

    /**
     * @param string $GatewayRouteName 安全网关路由名称
     * @param string $GatewayRouteProtocol 安全网关路由协议
     * @param string $GatewayRouteAddr 安全网关路由地址
     * @param string $GatewayRouteDesc 安全网关路由描述
     * @param string $GatewayRouteClusterId 安全网关后端集群id，如果是外网服务，该id与GatewayRountName相同
     * @param string $GatewayRouteCreateTime 安全网关创建时间
     * @param array $FrequencyLimitConfig 安全网关路由限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRouteServerType ip代表绑定后端ip。cbr代表云托管服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRouteServerName 服务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRewriteHost ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayVersion 网关版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRoutePath 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRouteMethod 请求模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GatewayRoutePort 4层端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRouteEnvId 路由环境ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayRoutePathMatchType 路径匹配类型，支持prefix(前缀匹配)，regex(正则匹配)， 默认prefix
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomHeader $CustomHeader 安全网关自定义头部
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("GatewayRouteName",$param) and $param["GatewayRouteName"] !== null) {
            $this->GatewayRouteName = $param["GatewayRouteName"];
        }

        if (array_key_exists("GatewayRouteProtocol",$param) and $param["GatewayRouteProtocol"] !== null) {
            $this->GatewayRouteProtocol = $param["GatewayRouteProtocol"];
        }

        if (array_key_exists("GatewayRouteAddr",$param) and $param["GatewayRouteAddr"] !== null) {
            $this->GatewayRouteAddr = $param["GatewayRouteAddr"];
        }

        if (array_key_exists("GatewayRouteDesc",$param) and $param["GatewayRouteDesc"] !== null) {
            $this->GatewayRouteDesc = $param["GatewayRouteDesc"];
        }

        if (array_key_exists("GatewayRouteClusterId",$param) and $param["GatewayRouteClusterId"] !== null) {
            $this->GatewayRouteClusterId = $param["GatewayRouteClusterId"];
        }

        if (array_key_exists("GatewayRouteCreateTime",$param) and $param["GatewayRouteCreateTime"] !== null) {
            $this->GatewayRouteCreateTime = $param["GatewayRouteCreateTime"];
        }

        if (array_key_exists("FrequencyLimitConfig",$param) and $param["FrequencyLimitConfig"] !== null) {
            $this->FrequencyLimitConfig = [];
            foreach ($param["FrequencyLimitConfig"] as $key => $value){
                $obj = new FrequencyLimitConfig();
                $obj->deserialize($value);
                array_push($this->FrequencyLimitConfig, $obj);
            }
        }

        if (array_key_exists("GatewayRouteServerType",$param) and $param["GatewayRouteServerType"] !== null) {
            $this->GatewayRouteServerType = $param["GatewayRouteServerType"];
        }

        if (array_key_exists("GatewayRouteServerName",$param) and $param["GatewayRouteServerName"] !== null) {
            $this->GatewayRouteServerName = $param["GatewayRouteServerName"];
        }

        if (array_key_exists("GatewayRewriteHost",$param) and $param["GatewayRewriteHost"] !== null) {
            $this->GatewayRewriteHost = $param["GatewayRewriteHost"];
        }

        if (array_key_exists("GatewayVersion",$param) and $param["GatewayVersion"] !== null) {
            $this->GatewayVersion = $param["GatewayVersion"];
        }

        if (array_key_exists("GatewayRoutePath",$param) and $param["GatewayRoutePath"] !== null) {
            $this->GatewayRoutePath = $param["GatewayRoutePath"];
        }

        if (array_key_exists("GatewayRouteMethod",$param) and $param["GatewayRouteMethod"] !== null) {
            $this->GatewayRouteMethod = $param["GatewayRouteMethod"];
        }

        if (array_key_exists("GatewayRoutePort",$param) and $param["GatewayRoutePort"] !== null) {
            $this->GatewayRoutePort = $param["GatewayRoutePort"];
        }

        if (array_key_exists("GatewayRouteEnvId",$param) and $param["GatewayRouteEnvId"] !== null) {
            $this->GatewayRouteEnvId = $param["GatewayRouteEnvId"];
        }

        if (array_key_exists("GatewayRoutePathMatchType",$param) and $param["GatewayRoutePathMatchType"] !== null) {
            $this->GatewayRoutePathMatchType = $param["GatewayRoutePathMatchType"];
        }

        if (array_key_exists("CustomHeader",$param) and $param["CustomHeader"] !== null) {
            $this->CustomHeader = new CustomHeader();
            $this->CustomHeader->deserialize($param["CustomHeader"]);
        }
    }
}
