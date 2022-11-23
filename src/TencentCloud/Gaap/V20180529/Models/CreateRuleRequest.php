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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRule请求参数结构体
 *
 * @method string getListenerId() 获取7层监听器ID
 * @method void setListenerId(string $ListenerId) 设置7层监听器ID
 * @method string getDomain() 获取转发规则的域名
 * @method void setDomain(string $Domain) 设置转发规则的域名
 * @method string getPath() 获取转发规则的路径
 * @method void setPath(string $Path) 设置转发规则的路径
 * @method string getRealServerType() 获取转发规则对应源站的类型，支持IP和DOMAIN类型。
 * @method void setRealServerType(string $RealServerType) 设置转发规则对应源站的类型，支持IP和DOMAIN类型。
 * @method string getScheduler() 获取监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。
 * @method void setScheduler(string $Scheduler) 设置监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。
 * @method integer getHealthCheck() 获取规则是否开启健康检查，1开启，0关闭。
 * @method void setHealthCheck(integer $HealthCheck) 设置规则是否开启健康检查，1开启，0关闭。
 * @method RuleCheckParams getCheckParams() 获取源站健康检查相关参数
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置源站健康检查相关参数
 * @method string getForwardProtocol() 获取加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
 * @method void setForwardProtocol(string $ForwardProtocol) 设置加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
 * @method string getForwardHost() 获取回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
 * @method void setForwardHost(string $ForwardHost) 设置回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
 * @method string getServerNameIndicationSwitch() 获取服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。
 * @method void setServerNameIndicationSwitch(string $ServerNameIndicationSwitch) 设置服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。
 * @method string getServerNameIndication() 获取服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。
 * @method void setServerNameIndication(string $ServerNameIndication) 设置服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。
 * @method string getForcedRedirect() 获取HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。
 * @method void setForcedRedirect(string $ForcedRedirect) 设置HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string 7层监听器ID
     */
    public $ListenerId;

    /**
     * @var string 转发规则的域名
     */
    public $Domain;

    /**
     * @var string 转发规则的路径
     */
    public $Path;

    /**
     * @var string 转发规则对应源站的类型，支持IP和DOMAIN类型。
     */
    public $RealServerType;

    /**
     * @var string 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。
     */
    public $Scheduler;

    /**
     * @var integer 规则是否开启健康检查，1开启，0关闭。
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams 源站健康检查相关参数
     */
    public $CheckParams;

    /**
     * @var string 加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
     */
    public $ForwardProtocol;

    /**
     * @var string 回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
     */
    public $ForwardHost;

    /**
     * @var string 服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。
     */
    public $ServerNameIndicationSwitch;

    /**
     * @var string 服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。
     */
    public $ServerNameIndication;

    /**
     * @var string HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。
     */
    public $ForcedRedirect;

    /**
     * @param string $ListenerId 7层监听器ID
     * @param string $Domain 转发规则的域名
     * @param string $Path 转发规则的路径
     * @param string $RealServerType 转发规则对应源站的类型，支持IP和DOMAIN类型。
     * @param string $Scheduler 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。
     * @param integer $HealthCheck 规则是否开启健康检查，1开启，0关闭。
     * @param RuleCheckParams $CheckParams 源站健康检查相关参数
     * @param string $ForwardProtocol 加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
     * @param string $ForwardHost 回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
     * @param string $ServerNameIndicationSwitch 服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。
     * @param string $ServerNameIndication 服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。
     * @param string $ForcedRedirect HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("ForwardHost",$param) and $param["ForwardHost"] !== null) {
            $this->ForwardHost = $param["ForwardHost"];
        }

        if (array_key_exists("ServerNameIndicationSwitch",$param) and $param["ServerNameIndicationSwitch"] !== null) {
            $this->ServerNameIndicationSwitch = $param["ServerNameIndicationSwitch"];
        }

        if (array_key_exists("ServerNameIndication",$param) and $param["ServerNameIndication"] !== null) {
            $this->ServerNameIndication = $param["ServerNameIndication"];
        }

        if (array_key_exists("ForcedRedirect",$param) and $param["ForcedRedirect"] !== null) {
            $this->ForcedRedirect = $param["ForcedRedirect"];
        }
    }
}
