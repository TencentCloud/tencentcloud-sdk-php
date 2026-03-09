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
 * 传统型负载均衡监听器信息
 *
 * @method string getListenerId() 获取<p>负载均衡监听器ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>负载均衡监听器ID</p>
 * @method integer getListenerPort() 获取<p>负载均衡监听器端口</p>
 * @method void setListenerPort(integer $ListenerPort) 设置<p>负载均衡监听器端口</p>
 * @method integer getInstancePort() 获取<p>监听器后端转发端口</p>
 * @method void setInstancePort(integer $InstancePort) 设置<p>监听器后端转发端口</p>
 * @method string getListenerName() 获取<p>监听器名称</p>
 * @method void setListenerName(string $ListenerName) 设置<p>监听器名称</p>
 * @method string getProtocol() 获取<p>监听器协议类型</p>
 * @method void setProtocol(string $Protocol) 设置<p>监听器协议类型</p>
 * @method integer getSessionExpire() 获取<p>会话保持时间</p>
 * @method void setSessionExpire(integer $SessionExpire) 设置<p>会话保持时间</p>
 * @method integer getHealthSwitch() 获取<p>是否开启了健康检查：1（开启）、0（关闭）</p>
 * @method void setHealthSwitch(integer $HealthSwitch) 设置<p>是否开启了健康检查：1（开启）、0（关闭）</p>
 * @method integer getTimeOut() 获取<p>响应超时时间</p><p>单位：秒</p>
 * @method void setTimeOut(integer $TimeOut) 设置<p>响应超时时间</p><p>单位：秒</p>
 * @method integer getIntervalTime() 获取<p>检查间隔</p><p>单位：秒</p>
 * @method void setIntervalTime(integer $IntervalTime) 设置<p>检查间隔</p><p>单位：秒</p>
 * @method integer getHealthNum() 获取<p>健康阈值</p>
 * @method void setHealthNum(integer $HealthNum) 设置<p>健康阈值</p>
 * @method integer getUnhealthNum() 获取<p>不健康阈值</p>
 * @method void setUnhealthNum(integer $UnhealthNum) 设置<p>不健康阈值</p>
 * @method string getHttpHash() 获取<p>传统型公网负载均衡 监听器的请求均衡方法。空字符串或wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发，least_conn表示按最小连接数。</p>
 * @method void setHttpHash(string $HttpHash) 设置<p>传统型公网负载均衡 监听器的请求均衡方法。空字符串或wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发，least_conn表示按最小连接数。</p>
 * @method integer getHttpCode() 获取<p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释</p>
 * @method void setHttpCode(integer $HttpCode) 设置<p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释</p>
 * @method string getHttpCheckPath() 获取<p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径</p>
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置<p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径</p>
 * @method string getSSLMode() 获取<p>传统型公网负载均衡的 HTTPS 监听器的认证方式</p>
 * @method void setSSLMode(string $SSLMode) 设置<p>传统型公网负载均衡的 HTTPS 监听器的认证方式</p>
 * @method string getCertId() 获取<p>传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID</p>
 * @method void setCertId(string $CertId) 设置<p>传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID</p>
 * @method string getCertCaId() 获取<p>传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID</p>
 * @method void setCertCaId(string $CertCaId) 设置<p>传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID</p>
 * @method integer getStatus() 获取<p>监听器的状态，0 表示创建中，1 表示运行中</p>
 * @method void setStatus(integer $Status) 设置<p>监听器的状态，0 表示创建中，1 表示运行中</p>
 */
class ClassicalListener extends AbstractModel
{
    /**
     * @var string <p>负载均衡监听器ID</p>
     */
    public $ListenerId;

    /**
     * @var integer <p>负载均衡监听器端口</p>
     */
    public $ListenerPort;

    /**
     * @var integer <p>监听器后端转发端口</p>
     */
    public $InstancePort;

    /**
     * @var string <p>监听器名称</p>
     */
    public $ListenerName;

    /**
     * @var string <p>监听器协议类型</p>
     */
    public $Protocol;

    /**
     * @var integer <p>会话保持时间</p>
     */
    public $SessionExpire;

    /**
     * @var integer <p>是否开启了健康检查：1（开启）、0（关闭）</p>
     */
    public $HealthSwitch;

    /**
     * @var integer <p>响应超时时间</p><p>单位：秒</p>
     */
    public $TimeOut;

    /**
     * @var integer <p>检查间隔</p><p>单位：秒</p>
     */
    public $IntervalTime;

    /**
     * @var integer <p>健康阈值</p>
     */
    public $HealthNum;

    /**
     * @var integer <p>不健康阈值</p>
     */
    public $UnhealthNum;

    /**
     * @var string <p>传统型公网负载均衡 监听器的请求均衡方法。空字符串或wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发，least_conn表示按最小连接数。</p>
     */
    public $HttpHash;

    /**
     * @var integer <p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释</p>
     */
    public $HttpCode;

    /**
     * @var string <p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径</p>
     */
    public $HttpCheckPath;

    /**
     * @var string <p>传统型公网负载均衡的 HTTPS 监听器的认证方式</p>
     */
    public $SSLMode;

    /**
     * @var string <p>传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID</p>
     */
    public $CertId;

    /**
     * @var string <p>传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID</p>
     */
    public $CertCaId;

    /**
     * @var integer <p>监听器的状态，0 表示创建中，1 表示运行中</p>
     */
    public $Status;

    /**
     * @param string $ListenerId <p>负载均衡监听器ID</p>
     * @param integer $ListenerPort <p>负载均衡监听器端口</p>
     * @param integer $InstancePort <p>监听器后端转发端口</p>
     * @param string $ListenerName <p>监听器名称</p>
     * @param string $Protocol <p>监听器协议类型</p>
     * @param integer $SessionExpire <p>会话保持时间</p>
     * @param integer $HealthSwitch <p>是否开启了健康检查：1（开启）、0（关闭）</p>
     * @param integer $TimeOut <p>响应超时时间</p><p>单位：秒</p>
     * @param integer $IntervalTime <p>检查间隔</p><p>单位：秒</p>
     * @param integer $HealthNum <p>健康阈值</p>
     * @param integer $UnhealthNum <p>不健康阈值</p>
     * @param string $HttpHash <p>传统型公网负载均衡 监听器的请求均衡方法。空字符串或wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发，least_conn表示按最小连接数。</p>
     * @param integer $HttpCode <p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释</p>
     * @param string $HttpCheckPath <p>传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径</p>
     * @param string $SSLMode <p>传统型公网负载均衡的 HTTPS 监听器的认证方式</p>
     * @param string $CertId <p>传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID</p>
     * @param string $CertCaId <p>传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID</p>
     * @param integer $Status <p>监听器的状态，0 表示创建中，1 表示运行中</p>
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

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("InstancePort",$param) and $param["InstancePort"] !== null) {
            $this->InstancePort = $param["InstancePort"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SessionExpire",$param) and $param["SessionExpire"] !== null) {
            $this->SessionExpire = $param["SessionExpire"];
        }

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("HttpHash",$param) and $param["HttpHash"] !== null) {
            $this->HttpHash = $param["HttpHash"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
