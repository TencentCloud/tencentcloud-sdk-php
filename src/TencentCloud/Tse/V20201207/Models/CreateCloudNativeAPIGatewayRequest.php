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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGateway请求参数结构体
 *
 * @method string getName() 获取云原生API网关名字, 最多支持60个字符。
 * @method void setName(string $Name) 设置云原生API网关名字, 最多支持60个字符。
 * @method string getType() 获取云原生API网关类型, 目前只支持kong。
 * @method void setType(string $Type) 设置云原生API网关类型, 目前只支持kong。
 * @method string getGatewayVersion() 获取云原生API网关版本。参考值：
- 2.4.1
- 2.5.1
 * @method void setGatewayVersion(string $GatewayVersion) 设置云原生API网关版本。参考值：
- 2.4.1
- 2.5.1
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取云原生API网关节点配置。
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置云原生API网关节点配置。
 * @method CloudNativeAPIGatewayVpcConfig getVpcConfig() 获取云原生API网关vpc配置。
 * @method void setVpcConfig(CloudNativeAPIGatewayVpcConfig $VpcConfig) 设置云原生API网关vpc配置。
 * @method string getDescription() 获取云原生API网关描述信息, 最多支持120个字符。
 * @method void setDescription(string $Description) 设置云原生API网关描述信息, 最多支持120个字符。
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method boolean getEnableCls() 获取是否开启 CLS 日志。默认值：fasle
 * @method void setEnableCls(boolean $EnableCls) 设置是否开启 CLS 日志。默认值：fasle
 * @method string getFeatureVersion() 获取产品版本。参考值：
- TRIAL：开发版
- STANDARD：标准版 （默认值）
- PROFESSIONAL：专业版
 * @method void setFeatureVersion(string $FeatureVersion) 设置产品版本。参考值：
- TRIAL：开发版
- STANDARD：标准版 （默认值）
- PROFESSIONAL：专业版
 * @method integer getInternetMaxBandwidthOut() 获取公网出流量带宽，[1,2048]Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网出流量带宽，[1,2048]Mbps
 * @method string getEngineRegion() 获取实例实际的地域信息，默认值：ap-guangzhou
 * @method void setEngineRegion(string $EngineRegion) 设置实例实际的地域信息，默认值：ap-guangzhou
 * @method string getIngressClassName() 获取ingress Class名称
 * @method void setIngressClassName(string $IngressClassName) 设置ingress Class名称
 * @method integer getTradeType() 获取付费类型。参考值：
0：后付费（默认值）
1：预付费（接口暂不支持创建预付费实例）
 * @method void setTradeType(integer $TradeType) 设置付费类型。参考值：
0：后付费（默认值）
1：预付费（接口暂不支持创建预付费实例）
 * @method InternetConfig getInternetConfig() 获取公网相关配置
 * @method void setInternetConfig(InternetConfig $InternetConfig) 设置公网相关配置
 */
class CreateCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关名字, 最多支持60个字符。
     */
    public $Name;

    /**
     * @var string 云原生API网关类型, 目前只支持kong。
     */
    public $Type;

    /**
     * @var string 云原生API网关版本。参考值：
- 2.4.1
- 2.5.1
     */
    public $GatewayVersion;

    /**
     * @var CloudNativeAPIGatewayNodeConfig 云原生API网关节点配置。
     */
    public $NodeConfig;

    /**
     * @var CloudNativeAPIGatewayVpcConfig 云原生API网关vpc配置。
     */
    public $VpcConfig;

    /**
     * @var string 云原生API网关描述信息, 最多支持120个字符。
     */
    public $Description;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var boolean 是否开启 CLS 日志。默认值：fasle
     */
    public $EnableCls;

    /**
     * @var string 产品版本。参考值：
- TRIAL：开发版
- STANDARD：标准版 （默认值）
- PROFESSIONAL：专业版
     */
    public $FeatureVersion;

    /**
     * @var integer 公网出流量带宽，[1,2048]Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 实例实际的地域信息，默认值：ap-guangzhou
     */
    public $EngineRegion;

    /**
     * @var string ingress Class名称
     */
    public $IngressClassName;

    /**
     * @var integer 付费类型。参考值：
0：后付费（默认值）
1：预付费（接口暂不支持创建预付费实例）
     */
    public $TradeType;

    /**
     * @var InternetConfig 公网相关配置
     */
    public $InternetConfig;

    /**
     * @param string $Name 云原生API网关名字, 最多支持60个字符。
     * @param string $Type 云原生API网关类型, 目前只支持kong。
     * @param string $GatewayVersion 云原生API网关版本。参考值：
- 2.4.1
- 2.5.1
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig 云原生API网关节点配置。
     * @param CloudNativeAPIGatewayVpcConfig $VpcConfig 云原生API网关vpc配置。
     * @param string $Description 云原生API网关描述信息, 最多支持120个字符。
     * @param array $Tags 标签列表
     * @param boolean $EnableCls 是否开启 CLS 日志。默认值：fasle
     * @param string $FeatureVersion 产品版本。参考值：
- TRIAL：开发版
- STANDARD：标准版 （默认值）
- PROFESSIONAL：专业版
     * @param integer $InternetMaxBandwidthOut 公网出流量带宽，[1,2048]Mbps
     * @param string $EngineRegion 实例实际的地域信息，默认值：ap-guangzhou
     * @param string $IngressClassName ingress Class名称
     * @param integer $TradeType 付费类型。参考值：
0：后付费（默认值）
1：预付费（接口暂不支持创建预付费实例）
     * @param InternetConfig $InternetConfig 公网相关配置
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
    }
}
