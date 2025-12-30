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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GAAP监听器详情
 *
 * @method string getListenerStatus() 获取监听器状态
 * @method void setListenerStatus(string $ListenerStatus) 设置监听器状态
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method array getNoMatchDomains() 获取不匹配的域名列表
 * @method void setNoMatchDomains(array $NoMatchDomains) 设置不匹配的域名列表
 * @method array getCertIdList() 获取实例绑定的证书列表	
 * @method void setCertIdList(array $CertIdList) 设置实例绑定的证书列表	
 * @method string getProtocol() 获取监听器协议
 * @method void setProtocol(string $Protocol) 设置监听器协议
 */
class GAAPListenerDetail extends AbstractModel
{
    /**
     * @var string 监听器状态
     */
    public $ListenerStatus;

    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var array 不匹配的域名列表
     */
    public $NoMatchDomains;

    /**
     * @var array 实例绑定的证书列表	
     */
    public $CertIdList;

    /**
     * @var string 监听器协议
     */
    public $Protocol;

    /**
     * @param string $ListenerStatus 监听器状态
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
     * @param array $NoMatchDomains 不匹配的域名列表
     * @param array $CertIdList 实例绑定的证书列表	
     * @param string $Protocol 监听器协议
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
        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }

        if (array_key_exists("CertIdList",$param) and $param["CertIdList"] !== null) {
            $this->CertIdList = $param["CertIdList"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
