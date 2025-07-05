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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APM Agent 信息
 *
 * @method string getAgentDownloadURL() 获取Agent 下载地址
 * @method void setAgentDownloadURL(string $AgentDownloadURL) 设置Agent 下载地址
 * @method string getCollectorURL() 获取Collector 上报地址
 * @method void setCollectorURL(string $CollectorURL) 设置Collector 上报地址
 * @method string getToken() 获取Token 信息
 * @method void setToken(string $Token) 设置Token 信息
 * @method string getPublicCollectorURL() 获取外网上报地址
 * @method void setPublicCollectorURL(string $PublicCollectorURL) 设置外网上报地址
 * @method string getInnerCollectorURL() 获取自研 VPC 上报地址
 * @method void setInnerCollectorURL(string $InnerCollectorURL) 设置自研 VPC 上报地址
 * @method string getPrivateLinkCollectorURL() 获取内网上报地址( Private Link 上报地址)
 * @method void setPrivateLinkCollectorURL(string $PrivateLinkCollectorURL) 设置内网上报地址( Private Link 上报地址)
 */
class ApmAgentInfo extends AbstractModel
{
    /**
     * @var string Agent 下载地址
     */
    public $AgentDownloadURL;

    /**
     * @var string Collector 上报地址
     */
    public $CollectorURL;

    /**
     * @var string Token 信息
     */
    public $Token;

    /**
     * @var string 外网上报地址
     */
    public $PublicCollectorURL;

    /**
     * @var string 自研 VPC 上报地址
     */
    public $InnerCollectorURL;

    /**
     * @var string 内网上报地址( Private Link 上报地址)
     */
    public $PrivateLinkCollectorURL;

    /**
     * @param string $AgentDownloadURL Agent 下载地址
     * @param string $CollectorURL Collector 上报地址
     * @param string $Token Token 信息
     * @param string $PublicCollectorURL 外网上报地址
     * @param string $InnerCollectorURL 自研 VPC 上报地址
     * @param string $PrivateLinkCollectorURL 内网上报地址( Private Link 上报地址)
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
        if (array_key_exists("AgentDownloadURL",$param) and $param["AgentDownloadURL"] !== null) {
            $this->AgentDownloadURL = $param["AgentDownloadURL"];
        }

        if (array_key_exists("CollectorURL",$param) and $param["CollectorURL"] !== null) {
            $this->CollectorURL = $param["CollectorURL"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("PublicCollectorURL",$param) and $param["PublicCollectorURL"] !== null) {
            $this->PublicCollectorURL = $param["PublicCollectorURL"];
        }

        if (array_key_exists("InnerCollectorURL",$param) and $param["InnerCollectorURL"] !== null) {
            $this->InnerCollectorURL = $param["InnerCollectorURL"];
        }

        if (array_key_exists("PrivateLinkCollectorURL",$param) and $param["PrivateLinkCollectorURL"] !== null) {
            $this->PrivateLinkCollectorURL = $param["PrivateLinkCollectorURL"];
        }
    }
}
