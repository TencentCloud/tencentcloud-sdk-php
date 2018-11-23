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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取应用型负载均衡监听器 ID
 * @method void setListenerId(string $ListenerId) 设置应用型负载均衡监听器 ID
 * @method string getProtocol() 获取监听器协议
 * @method void setProtocol(string $Protocol) 设置监听器协议
 * @method integer getPort() 获取监听器端口
 * @method void setPort(integer $Port) 设置监听器端口
 * @method CertificateOutput getCertificate() 获取监听器绑定的证书信息
 * @method void setCertificate(CertificateOutput $Certificate) 设置监听器绑定的证书信息
 * @method HealthCheck getHealthCheck() 获取监听器的健康检查信息
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置监听器的健康检查信息
 * @method string getScheduler() 获取请求调度方式
 * @method void setScheduler(string $Scheduler) 设置请求调度方式
 * @method integer getSessionExpireTime() 获取会话保持时间
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间
 * @method integer getSniSwitch() 获取是否开启SNI特性（本参数仅对于HTTPS监听器有意义）
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI特性（本参数仅对于HTTPS监听器有意义）
 * @method array getRules() 获取监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
 * @method void setRules(array $Rules) 设置监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
 * @method string getListenerName() 获取监听器的名称
 * @method void setListenerName(string $ListenerName) 设置监听器的名称
 */

/**
 *监听器的信息
 */
class Listener extends AbstractModel
{
    /**
     * @var string 应用型负载均衡监听器 ID
     */
    public $ListenerId;

    /**
     * @var string 监听器协议
     */
    public $Protocol;

    /**
     * @var integer 监听器端口
     */
    public $Port;

    /**
     * @var CertificateOutput 监听器绑定的证书信息
     */
    public $Certificate;

    /**
     * @var HealthCheck 监听器的健康检查信息
     */
    public $HealthCheck;

    /**
     * @var string 请求调度方式
     */
    public $Scheduler;

    /**
     * @var integer 会话保持时间
     */
    public $SessionExpireTime;

    /**
     * @var integer 是否开启SNI特性（本参数仅对于HTTPS监听器有意义）
     */
    public $SniSwitch;

    /**
     * @var array 监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
     */
    public $Rules;

    /**
     * @var string 监听器的名称
     */
    public $ListenerName;
    /**
     * @param string $ListenerId 应用型负载均衡监听器 ID
     * @param string $Protocol 监听器协议
     * @param integer $Port 监听器端口
     * @param CertificateOutput $Certificate 监听器绑定的证书信息
     * @param HealthCheck $HealthCheck 监听器的健康检查信息
     * @param string $Scheduler 请求调度方式
     * @param integer $SessionExpireTime 会话保持时间
     * @param integer $SniSwitch 是否开启SNI特性（本参数仅对于HTTPS监听器有意义）
     * @param array $Rules 监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
     * @param string $ListenerName 监听器的名称
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateOutput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleOutput();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }
    }
}
