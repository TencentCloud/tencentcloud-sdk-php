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
 * 服务治理相关的信息
 *
 * @method string getEngineRegion() 获取<p>引擎所在的地域</p>
 * @method void setEngineRegion(string $EngineRegion) 设置<p>引擎所在的地域</p>
 * @method array getBoundK8SInfos() 获取<p>服务治理引擎绑定的kubernetes集群信息</p>
 * @method void setBoundK8SInfos(array $BoundK8SInfos) 设置<p>服务治理引擎绑定的kubernetes集群信息</p>
 * @method array getVpcInfos() 获取<p>服务治理引擎绑定的网络信息</p>
 * @method void setVpcInfos(array $VpcInfos) 设置<p>服务治理引擎绑定的网络信息</p>
 * @method boolean getAuthOpen() 获取<p>当前实例鉴权是否开启</p>
 * @method void setAuthOpen(boolean $AuthOpen) 设置<p>当前实例鉴权是否开启</p>
 * @method array getFeatures() 获取<p>该实例支持的功能，鉴权就是 Auth</p>
 * @method void setFeatures(array $Features) 设置<p>该实例支持的功能，鉴权就是 Auth</p>
 * @method string getMainPassword() 获取<p>主账户名默认为 polaris，该值为主账户的默认密码</p>
 * @method void setMainPassword(string $MainPassword) 设置<p>主账户名默认为 polaris，该值为主账户的默认密码</p>
 * @method array getPgwVpcInfos() 获取<p>服务治理pushgateway引擎绑定的网络信息</p>
 * @method void setPgwVpcInfos(array $PgwVpcInfos) 设置<p>服务治理pushgateway引擎绑定的网络信息</p>
 * @method array getLimiterVpcInfos() 获取<p>服务治理限流server引擎绑定的网络信息</p>
 * @method void setLimiterVpcInfos(array $LimiterVpcInfos) 设置<p>服务治理限流server引擎绑定的网络信息</p>
 * @method array getCLSTopics() 获取<p>引擎关联CLS日志主题信息</p>
 * @method void setCLSTopics(array $CLSTopics) 设置<p>引擎关联CLS日志主题信息</p>
 * @method string getSubPassword() 获取<p>子用户密码</p>
 * @method void setSubPassword(string $SubPassword) 设置<p>子用户密码</p>
 * @method boolean getDisableMutation() 获取<p>是否允许变更</p>
 * @method void setDisableMutation(boolean $DisableMutation) 设置<p>是否允许变更</p>
 * @method boolean getMaxCapacityLimitEnabled() 获取<p>是否开启限流</p>
 * @method void setMaxCapacityLimitEnabled(boolean $MaxCapacityLimitEnabled) 设置<p>是否开启限流</p>
 */
class ServiceGovernanceInfo extends AbstractModel
{
    /**
     * @var string <p>引擎所在的地域</p>
     */
    public $EngineRegion;

    /**
     * @var array <p>服务治理引擎绑定的kubernetes集群信息</p>
     */
    public $BoundK8SInfos;

    /**
     * @var array <p>服务治理引擎绑定的网络信息</p>
     */
    public $VpcInfos;

    /**
     * @var boolean <p>当前实例鉴权是否开启</p>
     */
    public $AuthOpen;

    /**
     * @var array <p>该实例支持的功能，鉴权就是 Auth</p>
     */
    public $Features;

    /**
     * @var string <p>主账户名默认为 polaris，该值为主账户的默认密码</p>
     */
    public $MainPassword;

    /**
     * @var array <p>服务治理pushgateway引擎绑定的网络信息</p>
     */
    public $PgwVpcInfos;

    /**
     * @var array <p>服务治理限流server引擎绑定的网络信息</p>
     */
    public $LimiterVpcInfos;

    /**
     * @var array <p>引擎关联CLS日志主题信息</p>
     */
    public $CLSTopics;

    /**
     * @var string <p>子用户密码</p>
     */
    public $SubPassword;

    /**
     * @var boolean <p>是否允许变更</p>
     */
    public $DisableMutation;

    /**
     * @var boolean <p>是否开启限流</p>
     */
    public $MaxCapacityLimitEnabled;

    /**
     * @param string $EngineRegion <p>引擎所在的地域</p>
     * @param array $BoundK8SInfos <p>服务治理引擎绑定的kubernetes集群信息</p>
     * @param array $VpcInfos <p>服务治理引擎绑定的网络信息</p>
     * @param boolean $AuthOpen <p>当前实例鉴权是否开启</p>
     * @param array $Features <p>该实例支持的功能，鉴权就是 Auth</p>
     * @param string $MainPassword <p>主账户名默认为 polaris，该值为主账户的默认密码</p>
     * @param array $PgwVpcInfos <p>服务治理pushgateway引擎绑定的网络信息</p>
     * @param array $LimiterVpcInfos <p>服务治理限流server引擎绑定的网络信息</p>
     * @param array $CLSTopics <p>引擎关联CLS日志主题信息</p>
     * @param string $SubPassword <p>子用户密码</p>
     * @param boolean $DisableMutation <p>是否允许变更</p>
     * @param boolean $MaxCapacityLimitEnabled <p>是否开启限流</p>
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
        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("BoundK8SInfos",$param) and $param["BoundK8SInfos"] !== null) {
            $this->BoundK8SInfos = [];
            foreach ($param["BoundK8SInfos"] as $key => $value){
                $obj = new BoundK8SInfo();
                $obj->deserialize($value);
                array_push($this->BoundK8SInfos, $obj);
            }
        }

        if (array_key_exists("VpcInfos",$param) and $param["VpcInfos"] !== null) {
            $this->VpcInfos = [];
            foreach ($param["VpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfos, $obj);
            }
        }

        if (array_key_exists("AuthOpen",$param) and $param["AuthOpen"] !== null) {
            $this->AuthOpen = $param["AuthOpen"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("MainPassword",$param) and $param["MainPassword"] !== null) {
            $this->MainPassword = $param["MainPassword"];
        }

        if (array_key_exists("PgwVpcInfos",$param) and $param["PgwVpcInfos"] !== null) {
            $this->PgwVpcInfos = [];
            foreach ($param["PgwVpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->PgwVpcInfos, $obj);
            }
        }

        if (array_key_exists("LimiterVpcInfos",$param) and $param["LimiterVpcInfos"] !== null) {
            $this->LimiterVpcInfos = [];
            foreach ($param["LimiterVpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->LimiterVpcInfos, $obj);
            }
        }

        if (array_key_exists("CLSTopics",$param) and $param["CLSTopics"] !== null) {
            $this->CLSTopics = [];
            foreach ($param["CLSTopics"] as $key => $value){
                $obj = new PolarisCLSTopicInfo();
                $obj->deserialize($value);
                array_push($this->CLSTopics, $obj);
            }
        }

        if (array_key_exists("SubPassword",$param) and $param["SubPassword"] !== null) {
            $this->SubPassword = $param["SubPassword"];
        }

        if (array_key_exists("DisableMutation",$param) and $param["DisableMutation"] !== null) {
            $this->DisableMutation = $param["DisableMutation"];
        }

        if (array_key_exists("MaxCapacityLimitEnabled",$param) and $param["MaxCapacityLimitEnabled"] !== null) {
            $this->MaxCapacityLimitEnabled = $param["MaxCapacityLimitEnabled"];
        }
    }
}
