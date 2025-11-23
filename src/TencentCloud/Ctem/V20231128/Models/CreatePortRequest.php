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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePort请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getAsset() 获取IP或域名地址
 * @method void setAsset(string $Asset) 设置IP或域名地址
 * @method boolean getIsHighRisk() 获取是否高危
 * @method void setIsHighRisk(boolean $IsHighRisk) 设置是否高危
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 * @method string getBanner() 获取base64编码后的指纹
 * @method void setBanner(string $Banner) 设置base64编码后的指纹
 * @method string getIp() 获取解析的IP
 * @method void setIp(string $Ip) 设置解析的IP
 * @method string getApp() 获取组件名称
 * @method void setApp(string $App) 设置组件名称
 * @method string getService() 获取服务名称
 * @method void setService(string $Service) 设置服务名称
 */
class CreatePortRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CustomerId;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string IP或域名地址
     */
    public $Asset;

    /**
     * @var boolean 是否高危
     */
    public $IsHighRisk;

    /**
     * @var string 子公司
     */
    public $EnterpriseUid;

    /**
     * @var string base64编码后的指纹
     */
    public $Banner;

    /**
     * @var string 解析的IP
     */
    public $Ip;

    /**
     * @var string 组件名称
     */
    public $App;

    /**
     * @var string 服务名称
     */
    public $Service;

    /**
     * @param integer $CustomerId 企业Id
     * @param integer $Port 端口
     * @param string $Asset IP或域名地址
     * @param boolean $IsHighRisk 是否高危
     * @param string $EnterpriseUid 子公司
     * @param string $Banner base64编码后的指纹
     * @param string $Ip 解析的IP
     * @param string $App 组件名称
     * @param string $Service 服务名称
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("IsHighRisk",$param) and $param["IsHighRisk"] !== null) {
            $this->IsHighRisk = $param["IsHighRisk"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }

        if (array_key_exists("Banner",$param) and $param["Banner"] !== null) {
            $this->Banner = $param["Banner"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = $param["App"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }
    }
}
