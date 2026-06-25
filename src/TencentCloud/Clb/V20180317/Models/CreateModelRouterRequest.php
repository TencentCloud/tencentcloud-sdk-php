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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateModelRouter请求参数结构体
 *
 * @method string getModelRouterType() 获取<p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
 * @method void setModelRouterType(string $ModelRouterType) 设置<p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
 * @method string getModelRouterName() 获取<p>模型路由实例名称</p><p>默认值：-</p>
 * @method void setModelRouterName(string $ModelRouterName) 设置<p>模型路由实例名称</p><p>默认值：-</p>
 * @method string getSchema() 获取<p>模型路由实例的网络协议</p><p>枚举值：</p><ul><li>HTTP： HTTP协议</li><li>HTTPS： HTTPS协议</li></ul>
 * @method void setSchema(string $Schema) 设置<p>模型路由实例的网络协议</p><p>枚举值：</p><ul><li>HTTP： HTTP协议</li><li>HTTPS： HTTPS协议</li></ul>
 * @method integer getPort() 获取<p>模型路由的监听端口</p><p>取值范围：[1, 65535]</p>
 * @method void setPort(integer $Port) 设置<p>模型路由的监听端口</p><p>取值范围：[1, 65535]</p>
 * @method string getCertId() 获取<p>证书ID</p><p>入参限制：当Scheme为HTTPS时，该参数必传</p>
 * @method void setCertId(string $CertId) 设置<p>证书ID</p><p>入参限制：当Scheme为HTTPS时，该参数必传</p>
 * @method string getNetworkType() 获取<p>网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
 * @method string getVpcId() 获取<p>模型路由实例所属VPC的ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>模型路由实例所属VPC的ID</p>
 * @method string getSubnetId() 获取<p>模型路由实例所属子网的ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>模型路由实例所属子网的ID</p>
 * @method string getBudgetId() 获取<p>关联的积分预算ID</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>关联的积分预算ID</p>
 * @method RateLimitConfigForModelRouter getRateLimitConfig() 获取<p>限速配置</p>
 * @method void setRateLimitConfig(RateLimitConfigForModelRouter $RateLimitConfig) 设置<p>限速配置</p>
 * @method RouterSettingWithoutFallBack getRouterSetting() 获取<p>路由配置</p>
 * @method void setRouterSetting(RouterSettingWithoutFallBack $RouterSetting) 设置<p>路由配置</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method ClusterInfo getClusterInfo() 获取<p>集群信息</p>
 * @method void setClusterInfo(ClusterInfo $ClusterInfo) 设置<p>集群信息</p>
 */
class CreateModelRouterRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
     */
    public $ModelRouterType;

    /**
     * @var string <p>模型路由实例名称</p><p>默认值：-</p>
     */
    public $ModelRouterName;

    /**
     * @var string <p>模型路由实例的网络协议</p><p>枚举值：</p><ul><li>HTTP： HTTP协议</li><li>HTTPS： HTTPS协议</li></ul>
     */
    public $Schema;

    /**
     * @var integer <p>模型路由的监听端口</p><p>取值范围：[1, 65535]</p>
     */
    public $Port;

    /**
     * @var string <p>证书ID</p><p>入参限制：当Scheme为HTTPS时，该参数必传</p>
     */
    public $CertId;

    /**
     * @var string <p>网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
     */
    public $NetworkType;

    /**
     * @var string <p>模型路由实例所属VPC的ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>模型路由实例所属子网的ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>关联的积分预算ID</p>
     */
    public $BudgetId;

    /**
     * @var RateLimitConfigForModelRouter <p>限速配置</p>
     */
    public $RateLimitConfig;

    /**
     * @var RouterSettingWithoutFallBack <p>路由配置</p>
     */
    public $RouterSetting;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var ClusterInfo <p>集群信息</p>
     */
    public $ClusterInfo;

    /**
     * @param string $ModelRouterType <p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
     * @param string $ModelRouterName <p>模型路由实例名称</p><p>默认值：-</p>
     * @param string $Schema <p>模型路由实例的网络协议</p><p>枚举值：</p><ul><li>HTTP： HTTP协议</li><li>HTTPS： HTTPS协议</li></ul>
     * @param integer $Port <p>模型路由的监听端口</p><p>取值范围：[1, 65535]</p>
     * @param string $CertId <p>证书ID</p><p>入参限制：当Scheme为HTTPS时，该参数必传</p>
     * @param string $NetworkType <p>网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
     * @param string $VpcId <p>模型路由实例所属VPC的ID</p>
     * @param string $SubnetId <p>模型路由实例所属子网的ID</p>
     * @param string $BudgetId <p>关联的积分预算ID</p>
     * @param RateLimitConfigForModelRouter $RateLimitConfig <p>限速配置</p>
     * @param RouterSettingWithoutFallBack $RouterSetting <p>路由配置</p>
     * @param array $Tags <p>标签</p>
     * @param ClusterInfo $ClusterInfo <p>集群信息</p>
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
        if (array_key_exists("ModelRouterType",$param) and $param["ModelRouterType"] !== null) {
            $this->ModelRouterType = $param["ModelRouterType"];
        }

        if (array_key_exists("ModelRouterName",$param) and $param["ModelRouterName"] !== null) {
            $this->ModelRouterName = $param["ModelRouterName"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForModelRouter();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("RouterSetting",$param) and $param["RouterSetting"] !== null) {
            $this->RouterSetting = new RouterSettingWithoutFallBack();
            $this->RouterSetting->deserialize($param["RouterSetting"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new ClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }
    }
}
