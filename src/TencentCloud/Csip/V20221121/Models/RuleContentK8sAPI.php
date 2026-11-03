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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR K8s API 异常请求规则内容。
 *
 * @method string getRequestURI() 获取<p>请求资源</p>
 * @method void setRequestURI(string $RequestURI) 设置<p>请求资源</p>
 * @method string getVerb() 获取<p>操作类型</p>
 * @method void setVerb(string $Verb) 设置<p>操作类型</p>
 * @method string getRequestUser() 获取<p>发起请求用户</p>
 * @method void setRequestUser(string $RequestUser) 设置<p>发起请求用户</p>
 * @method string getUserAgent() 获取<p>用户代理</p>
 * @method void setUserAgent(string $UserAgent) 设置<p>用户代理</p>
 * @method string getSourceIPS() 获取<p>来源 IP</p>
 * @method void setSourceIPS(string $SourceIPS) 设置<p>来源 IP</p>
 * @method string getResponseStatusCode() 获取<p>响应状态码</p>
 * @method void setResponseStatusCode(string $ResponseStatusCode) 设置<p>响应状态码</p>
 * @method string getRequestObject() 获取<p>请求数据</p>
 * @method void setRequestObject(string $RequestObject) 设置<p>请求数据</p>
 * @method string getResponseObject() 获取<p>响应数据</p>
 * @method void setResponseObject(string $ResponseObject) 设置<p>响应数据</p>
 * @method string getMountHostDir() 获取<p>挂载宿主机目录</p>
 * @method void setMountHostDir(string $MountHostDir) 设置<p>挂载宿主机目录</p>
 * @method string getPodNameIP() 获取<p>Pod 名称或 IP</p>
 * @method void setPodNameIP(string $PodNameIP) 设置<p>Pod 名称或 IP</p>
 * @method string getAuditID() 获取<p>审计日志 ID</p>
 * @method void setAuditID(string $AuditID) 设置<p>审计日志 ID</p>
 */
class RuleContentK8sAPI extends AbstractModel
{
    /**
     * @var string <p>请求资源</p>
     */
    public $RequestURI;

    /**
     * @var string <p>操作类型</p>
     */
    public $Verb;

    /**
     * @var string <p>发起请求用户</p>
     */
    public $RequestUser;

    /**
     * @var string <p>用户代理</p>
     */
    public $UserAgent;

    /**
     * @var string <p>来源 IP</p>
     */
    public $SourceIPS;

    /**
     * @var string <p>响应状态码</p>
     */
    public $ResponseStatusCode;

    /**
     * @var string <p>请求数据</p>
     */
    public $RequestObject;

    /**
     * @var string <p>响应数据</p>
     */
    public $ResponseObject;

    /**
     * @var string <p>挂载宿主机目录</p>
     */
    public $MountHostDir;

    /**
     * @var string <p>Pod 名称或 IP</p>
     */
    public $PodNameIP;

    /**
     * @var string <p>审计日志 ID</p>
     */
    public $AuditID;

    /**
     * @param string $RequestURI <p>请求资源</p>
     * @param string $Verb <p>操作类型</p>
     * @param string $RequestUser <p>发起请求用户</p>
     * @param string $UserAgent <p>用户代理</p>
     * @param string $SourceIPS <p>来源 IP</p>
     * @param string $ResponseStatusCode <p>响应状态码</p>
     * @param string $RequestObject <p>请求数据</p>
     * @param string $ResponseObject <p>响应数据</p>
     * @param string $MountHostDir <p>挂载宿主机目录</p>
     * @param string $PodNameIP <p>Pod 名称或 IP</p>
     * @param string $AuditID <p>审计日志 ID</p>
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
        if (array_key_exists("RequestURI",$param) and $param["RequestURI"] !== null) {
            $this->RequestURI = $param["RequestURI"];
        }

        if (array_key_exists("Verb",$param) and $param["Verb"] !== null) {
            $this->Verb = $param["Verb"];
        }

        if (array_key_exists("RequestUser",$param) and $param["RequestUser"] !== null) {
            $this->RequestUser = $param["RequestUser"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("SourceIPS",$param) and $param["SourceIPS"] !== null) {
            $this->SourceIPS = $param["SourceIPS"];
        }

        if (array_key_exists("ResponseStatusCode",$param) and $param["ResponseStatusCode"] !== null) {
            $this->ResponseStatusCode = $param["ResponseStatusCode"];
        }

        if (array_key_exists("RequestObject",$param) and $param["RequestObject"] !== null) {
            $this->RequestObject = $param["RequestObject"];
        }

        if (array_key_exists("ResponseObject",$param) and $param["ResponseObject"] !== null) {
            $this->ResponseObject = $param["ResponseObject"];
        }

        if (array_key_exists("MountHostDir",$param) and $param["MountHostDir"] !== null) {
            $this->MountHostDir = $param["MountHostDir"];
        }

        if (array_key_exists("PodNameIP",$param) and $param["PodNameIP"] !== null) {
            $this->PodNameIP = $param["PodNameIP"];
        }

        if (array_key_exists("AuditID",$param) and $param["AuditID"] !== null) {
            $this->AuditID = $param["AuditID"];
        }
    }
}
