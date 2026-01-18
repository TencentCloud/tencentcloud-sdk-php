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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRule请求参数结构体
 *
 * @method string getListenerId() 获取<p>7层监听器ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>7层监听器ID</p>
 * @method string getDomain() 获取<p>转发规则的域名</p>
 * @method void setDomain(string $Domain) 设置<p>转发规则的域名</p>
 * @method string getPath() 获取<p>转发规则的路径</p>
 * @method void setPath(string $Path) 设置<p>转发规则的路径</p>
 * @method string getRealServerType() 获取<p>转发规则对应源站的类型，支持IP和DOMAIN类型。</p>
 * @method void setRealServerType(string $RealServerType) 设置<p>转发规则对应源站的类型，支持IP和DOMAIN类型。</p>
 * @method string getScheduler() 获取<p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。</p>
 * @method void setScheduler(string $Scheduler) 设置<p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。</p>
 * @method integer getHealthCheck() 获取<p>规则是否开启健康检查，1开启，0关闭。</p>
 * @method void setHealthCheck(integer $HealthCheck) 设置<p>规则是否开启健康检查，1开启，0关闭。</p>
 * @method RuleCheckParams getCheckParams() 获取<p>源站健康检查相关参数</p>
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置<p>源站健康检查相关参数</p>
 * @method string getForwardProtocol() 获取<p>加速通道转发到源站的协议类型：支持HTTP或HTTPS。不传递该字段时表示使用对应监听器的ForwardProtocol。</p>
 * @method void setForwardProtocol(string $ForwardProtocol) 设置<p>加速通道转发到源站的协议类型：支持HTTP或HTTPS。不传递该字段时表示使用对应监听器的ForwardProtocol。</p>
 * @method string getForwardHost() 获取<p>回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。</p>
 * @method void setForwardHost(string $ForwardHost) 设置<p>回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。</p>
 * @method string getServerNameIndicationSwitch() 获取<p>服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。</p>
 * @method void setServerNameIndicationSwitch(string $ServerNameIndicationSwitch) 设置<p>服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。</p>
 * @method string getServerNameIndication() 获取<p>服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。</p>
 * @method void setServerNameIndication(string $ServerNameIndication) 设置<p>服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。</p>
 * @method string getForcedRedirect() 获取<p>HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。</p>
 * @method void setForcedRedirect(string $ForcedRedirect) 设置<p>HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。</p>
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string <p>7层监听器ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>转发规则的域名</p>
     */
    public $Domain;

    /**
     * @var string <p>转发规则的路径</p>
     */
    public $Path;

    /**
     * @var string <p>转发规则对应源站的类型，支持IP和DOMAIN类型。</p>
     */
    public $RealServerType;

    /**
     * @var string <p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。</p>
     */
    public $Scheduler;

    /**
     * @var integer <p>规则是否开启健康检查，1开启，0关闭。</p>
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams <p>源站健康检查相关参数</p>
     */
    public $CheckParams;

    /**
     * @var string <p>加速通道转发到源站的协议类型：支持HTTP或HTTPS。不传递该字段时表示使用对应监听器的ForwardProtocol。</p>
     */
    public $ForwardProtocol;

    /**
     * @var string <p>回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。</p>
     */
    public $ForwardHost;

    /**
     * @var string <p>服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。</p>
     */
    public $ServerNameIndicationSwitch;

    /**
     * @var string <p>服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。</p>
     */
    public $ServerNameIndication;

    /**
     * @var string <p>HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。</p>
     */
    public $ForcedRedirect;

    /**
     * @param string $ListenerId <p>7层监听器ID</p>
     * @param string $Domain <p>转发规则的域名</p>
     * @param string $Path <p>转发规则的路径</p>
     * @param string $RealServerType <p>转发规则对应源站的类型，支持IP和DOMAIN类型。</p>
     * @param string $Scheduler <p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数。</p>
     * @param integer $HealthCheck <p>规则是否开启健康检查，1开启，0关闭。</p>
     * @param RuleCheckParams $CheckParams <p>源站健康检查相关参数</p>
     * @param string $ForwardProtocol <p>加速通道转发到源站的协议类型：支持HTTP或HTTPS。不传递该字段时表示使用对应监听器的ForwardProtocol。</p>
     * @param string $ForwardHost <p>回源Host。加速通道转发到源站的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。</p>
     * @param string $ServerNameIndicationSwitch <p>服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。创建HTTP监听器转发规则时，SNI功能默认关闭。</p>
     * @param string $ServerNameIndication <p>服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。</p>
     * @param string $ForcedRedirect <p>HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。</p>
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
