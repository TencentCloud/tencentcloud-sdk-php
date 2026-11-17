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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGateway请求参数结构体
 *
 * @method string getName() 获取<p>云原生API网关名字, 最多支持60个字符。</p>
 * @method void setName(string $Name) 设置<p>云原生API网关名字, 最多支持60个字符。</p>
 * @method string getType() 获取<p>云原生API网关类型, 目前只支持kong。</p>
 * @method void setType(string $Type) 设置<p>云原生API网关类型, 目前只支持kong。</p>
 * @method string getGatewayVersion() 获取<p>云原生API网关版本。参考值：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
 * @method void setGatewayVersion(string $GatewayVersion) 设置<p>云原生API网关版本。参考值：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取<p>云原生API网关节点配置。</p>
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置<p>云原生API网关节点配置。</p>
 * @method CloudNativeAPIGatewayVpcConfig getVpcConfig() 获取<p>云原生API网关vpc配置。</p>
 * @method void setVpcConfig(CloudNativeAPIGatewayVpcConfig $VpcConfig) 设置<p>云原生API网关vpc配置。</p>
 * @method string getDescription() 获取<p>云原生API网关描述信息, 最多支持120个字符。</p>
 * @method void setDescription(string $Description) 设置<p>云原生API网关描述信息, 最多支持120个字符。</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method boolean getEnableCls() 获取<p>是否开启 CLS 日志。默认值：fasle</p>
 * @method void setEnableCls(boolean $EnableCls) 设置<p>是否开启 CLS 日志。默认值：fasle</p>
 * @method string getFeatureVersion() 获取<p>产品版本</p><p>枚举值：</p><ul><li>STANDARD： 标准版</li><li>PROFESSIONAL： 专业版</li></ul>
 * @method void setFeatureVersion(string $FeatureVersion) 设置<p>产品版本</p><p>枚举值：</p><ul><li>STANDARD： 标准版</li><li>PROFESSIONAL： 专业版</li></ul>
 * @method integer getInternetMaxBandwidthOut() 获取<p>公网出流量带宽，[1,2048]Mbps</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>公网出流量带宽，[1,2048]Mbps</p>
 * @method string getEngineRegion() 获取<p>实例实际的地域信息，默认值：ap-guangzhou</p>
 * @method void setEngineRegion(string $EngineRegion) 设置<p>实例实际的地域信息，默认值：ap-guangzhou</p>
 * @method string getIngressClassName() 获取<p>ingress Class名称</p>
 * @method void setIngressClassName(string $IngressClassName) 设置<p>ingress Class名称</p>
 * @method integer getTradeType() 获取<p>付费类型。参考值：<br>0：后付费（默认值）<br>1：预付费（接口暂不支持创建预付费实例）</p>
 * @method void setTradeType(integer $TradeType) 设置<p>付费类型。参考值：<br>0：后付费（默认值）<br>1：预付费（接口暂不支持创建预付费实例）</p>
 * @method InternetConfig getInternetConfig() 获取<p>公网相关配置</p>
 * @method void setInternetConfig(InternetConfig $InternetConfig) 设置<p>公网相关配置</p>
 * @method string getPromId() 获取<p>关联的prometheus ID</p>
 * @method void setPromId(string $PromId) 设置<p>关联的prometheus ID</p>
 * @method boolean getEnableHttpPort() 获取<p>是否开启HTTP 80 端口的访问</p>
 * @method void setEnableHttpPort(boolean $EnableHttpPort) 设置<p>是否开启HTTP 80 端口的访问</p>
 */
class CreateCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string <p>云原生API网关名字, 最多支持60个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>云原生API网关类型, 目前只支持kong。</p>
     */
    public $Type;

    /**
     * @var string <p>云原生API网关版本。参考值：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
     */
    public $GatewayVersion;

    /**
     * @var CloudNativeAPIGatewayNodeConfig <p>云原生API网关节点配置。</p>
     */
    public $NodeConfig;

    /**
     * @var CloudNativeAPIGatewayVpcConfig <p>云原生API网关vpc配置。</p>
     */
    public $VpcConfig;

    /**
     * @var string <p>云原生API网关描述信息, 最多支持120个字符。</p>
     */
    public $Description;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否开启 CLS 日志。默认值：fasle</p>
     */
    public $EnableCls;

    /**
     * @var string <p>产品版本</p><p>枚举值：</p><ul><li>STANDARD： 标准版</li><li>PROFESSIONAL： 专业版</li></ul>
     */
    public $FeatureVersion;

    /**
     * @var integer <p>公网出流量带宽，[1,2048]Mbps</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string <p>实例实际的地域信息，默认值：ap-guangzhou</p>
     */
    public $EngineRegion;

    /**
     * @var string <p>ingress Class名称</p>
     */
    public $IngressClassName;

    /**
     * @var integer <p>付费类型。参考值：<br>0：后付费（默认值）<br>1：预付费（接口暂不支持创建预付费实例）</p>
     */
    public $TradeType;

    /**
     * @var InternetConfig <p>公网相关配置</p>
     */
    public $InternetConfig;

    /**
     * @var string <p>关联的prometheus ID</p>
     */
    public $PromId;

    /**
     * @var boolean <p>是否开启HTTP 80 端口的访问</p>
     */
    public $EnableHttpPort;

    /**
     * @param string $Name <p>云原生API网关名字, 最多支持60个字符。</p>
     * @param string $Type <p>云原生API网关类型, 目前只支持kong。</p>
     * @param string $GatewayVersion <p>云原生API网关版本。参考值：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig <p>云原生API网关节点配置。</p>
     * @param CloudNativeAPIGatewayVpcConfig $VpcConfig <p>云原生API网关vpc配置。</p>
     * @param string $Description <p>云原生API网关描述信息, 最多支持120个字符。</p>
     * @param array $Tags <p>标签列表</p>
     * @param boolean $EnableCls <p>是否开启 CLS 日志。默认值：fasle</p>
     * @param string $FeatureVersion <p>产品版本</p><p>枚举值：</p><ul><li>STANDARD： 标准版</li><li>PROFESSIONAL： 专业版</li></ul>
     * @param integer $InternetMaxBandwidthOut <p>公网出流量带宽，[1,2048]Mbps</p>
     * @param string $EngineRegion <p>实例实际的地域信息，默认值：ap-guangzhou</p>
     * @param string $IngressClassName <p>ingress Class名称</p>
     * @param integer $TradeType <p>付费类型。参考值：<br>0：后付费（默认值）<br>1：预付费（接口暂不支持创建预付费实例）</p>
     * @param InternetConfig $InternetConfig <p>公网相关配置</p>
     * @param string $PromId <p>关联的prometheus ID</p>
     * @param boolean $EnableHttpPort <p>是否开启HTTP 80 端口的访问</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GatewayVersion",$param) and $param["GatewayVersion"] !== null) {
            $this->GatewayVersion = $param["GatewayVersion"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new CloudNativeAPIGatewayVpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableCls",$param) and $param["EnableCls"] !== null) {
            $this->EnableCls = $param["EnableCls"];
        }

        if (array_key_exists("FeatureVersion",$param) and $param["FeatureVersion"] !== null) {
            $this->FeatureVersion = $param["FeatureVersion"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("IngressClassName",$param) and $param["IngressClassName"] !== null) {
            $this->IngressClassName = $param["IngressClassName"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("InternetConfig",$param) and $param["InternetConfig"] !== null) {
            $this->InternetConfig = new InternetConfig();
            $this->InternetConfig->deserialize($param["InternetConfig"]);
        }

        if (array_key_exists("PromId",$param) and $param["PromId"] !== null) {
            $this->PromId = $param["PromId"];
        }

        if (array_key_exists("EnableHttpPort",$param) and $param["EnableHttpPort"] !== null) {
            $this->EnableHttpPort = $param["EnableHttpPort"];
        }
    }
}
