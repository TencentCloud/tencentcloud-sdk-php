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
 * ModifyRuleAttribute请求参数结构体
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getRuleId() 获取转发规则ID
 * @method void setRuleId(string $RuleId) 设置转发规则ID
 * @method string getScheduler() 获取监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
 * @method void setScheduler(string $Scheduler) 设置监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
 * @method integer getHealthCheck() 获取源站健康检查开关，其中：
1，开启；
0，关闭。
 * @method void setHealthCheck(integer $HealthCheck) 设置源站健康检查开关，其中：
1，开启；
0，关闭。
 * @method RuleCheckParams getCheckParams() 获取健康检查配置参数
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置健康检查配置参数
 * @method string getPath() 获取转发规则路径
 * @method void setPath(string $Path) 设置转发规则路径
 * @method string getForwardProtocol() 获取加速通道转发到源站的协议类型，支持：default, HTTP和HTTPS。
当ForwardProtocol=default时，表示使用对应监听器的ForwardProtocol。
 * @method void setForwardProtocol(string $ForwardProtocol) 设置加速通道转发到源站的协议类型，支持：default, HTTP和HTTPS。
当ForwardProtocol=default时，表示使用对应监听器的ForwardProtocol。
 * @method string getForwardHost() 获取回源Host。加速通道转发到源站的请求中携带的host。
当ForwardHost=default时，使用规则的域名，其他情况为该字段所设置的值。
 * @method void setForwardHost(string $ForwardHost) 设置回源Host。加速通道转发到源站的请求中携带的host。
当ForwardHost=default时，使用规则的域名，其他情况为该字段所设置的值。
 * @method string getServerNameIndicationSwitch() 获取服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。
 * @method void setServerNameIndicationSwitch(string $ServerNameIndicationSwitch) 设置服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。
 * @method string getServerNameIndication() 获取服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。
 * @method void setServerNameIndication(string $ServerNameIndication) 设置服务器名称指示（ServerNameIndication，简称SNI），当SNI开关打开时，该字段必填。
 * @method string getForcedRedirect() 获取HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。
 * @method void setForcedRedirect(string $ForcedRedirect) 设置HTTP强制跳转HTTPS。输入当前规则对应的域名与地址。
 */
class ModifyRuleAttributeRequest extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 转发规则ID
     */
    public $RuleId;

    /**
     * @var string 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
     */
    public $Scheduler;

    /**
     * @var integer 源站健康检查开关，其中：
1，开启；
0，关闭。
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams 健康检查配置参数
     */
    public $CheckParams;

    /**
     * @var string 转发规则路径
     */
    public $Path;

    /**
     * @var string 加速通道转发到源站的协议类型，支持：default, HTTP和HTTPS。
当ForwardProtocol=default时，表示使用对应监听器的ForwardProtocol。
     */
    public $ForwardProtocol;

    /**
     * @var string 回源Host。加速通道转发到源站的请求中携带的host。
当ForwardHost=default时，使用规则的域名，其他情况为该字段所设置的值。
     */
    public $ForwardHost;

    /**
     * @var string 服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。
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
     * @param string $ListenerId 监听器ID
     * @param string $RuleId 转发规则ID
     * @param string $Scheduler 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
     * @param integer $HealthCheck 源站健康检查开关，其中：
1，开启；
0，关闭。
     * @param RuleCheckParams $CheckParams 健康检查配置参数
     * @param string $Path 转发规则路径
     * @param string $ForwardProtocol 加速通道转发到源站的协议类型，支持：default, HTTP和HTTPS。
当ForwardProtocol=default时，表示使用对应监听器的ForwardProtocol。
     * @param string $ForwardHost 回源Host。加速通道转发到源站的请求中携带的host。
当ForwardHost=default时，使用规则的域名，其他情况为该字段所设置的值。
     * @param string $ServerNameIndicationSwitch 服务器名称指示（ServerNameIndication，简称SNI）开关。ON表示开启，OFF表示关闭。
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
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
