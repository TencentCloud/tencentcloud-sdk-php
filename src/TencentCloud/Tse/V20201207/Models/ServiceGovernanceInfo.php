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
 * 服务治理相关的信息
 *
 * @method string getEngineRegion() 获取引擎所在的地域
 * @method void setEngineRegion(string $EngineRegion) 设置引擎所在的地域
 * @method array getBoundK8SInfos() 获取服务治理引擎绑定的kubernetes集群信息
 * @method void setBoundK8SInfos(array $BoundK8SInfos) 设置服务治理引擎绑定的kubernetes集群信息
 * @method array getVpcInfos() 获取服务治理引擎绑定的网络信息
 * @method void setVpcInfos(array $VpcInfos) 设置服务治理引擎绑定的网络信息
 * @method boolean getAuthOpen() 获取当前实例鉴权是否开启
 * @method void setAuthOpen(boolean $AuthOpen) 设置当前实例鉴权是否开启
 * @method array getFeatures() 获取该实例支持的功能，鉴权就是 Auth
 * @method void setFeatures(array $Features) 设置该实例支持的功能，鉴权就是 Auth
 * @method string getMainPassword() 获取主账户名默认为 polaris，该值为主账户的默认密码
 * @method void setMainPassword(string $MainPassword) 设置主账户名默认为 polaris，该值为主账户的默认密码
 * @method array getPgwVpcInfos() 获取服务治理pushgateway引擎绑定的网络信息
 * @method void setPgwVpcInfos(array $PgwVpcInfos) 设置服务治理pushgateway引擎绑定的网络信息
 * @method array getLimiterVpcInfos() 获取服务治理限流server引擎绑定的网络信息
 * @method void setLimiterVpcInfos(array $LimiterVpcInfos) 设置服务治理限流server引擎绑定的网络信息
 */
class ServiceGovernanceInfo extends AbstractModel
{
    /**
     * @var string 引擎所在的地域
     */
    public $EngineRegion;

    /**
     * @var array 服务治理引擎绑定的kubernetes集群信息
     */
    public $BoundK8SInfos;

    /**
     * @var array 服务治理引擎绑定的网络信息
     */
    public $VpcInfos;

    /**
     * @var boolean 当前实例鉴权是否开启
     */
    public $AuthOpen;

    /**
     * @var array 该实例支持的功能，鉴权就是 Auth
     */
    public $Features;

    /**
     * @var string 主账户名默认为 polaris，该值为主账户的默认密码
     */
    public $MainPassword;

    /**
     * @var array 服务治理pushgateway引擎绑定的网络信息
     */
    public $PgwVpcInfos;

    /**
     * @var array 服务治理限流server引擎绑定的网络信息
     */
    public $LimiterVpcInfos;

    /**
     * @param string $EngineRegion 引擎所在的地域
     * @param array $BoundK8SInfos 服务治理引擎绑定的kubernetes集群信息
     * @param array $VpcInfos 服务治理引擎绑定的网络信息
     * @param boolean $AuthOpen 当前实例鉴权是否开启
     * @param array $Features 该实例支持的功能，鉴权就是 Auth
     * @param string $MainPassword 主账户名默认为 polaris，该值为主账户的默认密码
     * @param array $PgwVpcInfos 服务治理pushgateway引擎绑定的网络信息
     * @param array $LimiterVpcInfos 服务治理限流server引擎绑定的网络信息
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
    }
}
