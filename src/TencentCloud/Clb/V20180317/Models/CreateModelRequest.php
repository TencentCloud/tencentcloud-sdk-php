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
 * CreateModel请求参数结构体
 *
 * @method string getAccessType() 获取<p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
 * @method void setAccessType(string $AccessType) 设置<p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
 * @method string getModelProvider() 获取<p>模型提供商</p>
 * @method void setModelProvider(string $ModelProvider) 设置<p>模型提供商</p>
 * @method array getModelIds() 获取<p>通用模型标识列表</p>
 * @method void setModelIds(array $ModelIds) 设置<p>通用模型标识列表</p>
 * @method array getKeys() 获取<p>Key 列表</p>
 * @method void setKeys(array $Keys) 设置<p>Key 列表</p>
 * @method string getServiceProviderId() 获取<p>BYOK ID(在自定义模型时在部署网络后必须填写)</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK ID(在自定义模型时在部署网络后必须填写)</p>
 * @method string getServiceProviderName() 获取<p>服务供应商(创建BYOK自定义名称)。</p>
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>服务供应商(创建BYOK自定义名称)。</p>
 * @method string getProtocol() 获取<p>模型协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>模型协议</p>
 * @method string getApiBase() 获取<p>API Base URL</p>
 * @method void setApiBase(string $ApiBase) 设置<p>API Base URL</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getSubnetId() 获取<p>子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p>
 * @method string getHostHeader() 获取<p>转发请求时添加的Host请求头</p>
 * @method void setHostHeader(string $HostHeader) 设置<p>转发请求时添加的Host请求头</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method boolean getVerifySSL() 获取<p>是否校验服务提供商的SSL证书</p>
 * @method void setVerifySSL(boolean $VerifySSL) 设置<p>是否校验服务提供商的SSL证书</p>
 */
class CreateModelRequest extends AbstractModel
{
    /**
     * @var string <p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
     */
    public $AccessType;

    /**
     * @var string <p>模型提供商</p>
     */
    public $ModelProvider;

    /**
     * @var array <p>通用模型标识列表</p>
     */
    public $ModelIds;

    /**
     * @var array <p>Key 列表</p>
     */
    public $Keys;

    /**
     * @var string <p>BYOK ID(在自定义模型时在部署网络后必须填写)</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>服务供应商(创建BYOK自定义名称)。</p>
     */
    public $ServiceProviderName;

    /**
     * @var string <p>模型协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>API Base URL</p>
     */
    public $ApiBase;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>转发请求时添加的Host请求头</p>
     */
    public $HostHeader;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否校验服务提供商的SSL证书</p>
     */
    public $VerifySSL;

    /**
     * @param string $AccessType <p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
     * @param string $ModelProvider <p>模型提供商</p>
     * @param array $ModelIds <p>通用模型标识列表</p>
     * @param array $Keys <p>Key 列表</p>
     * @param string $ServiceProviderId <p>BYOK ID(在自定义模型时在部署网络后必须填写)</p>
     * @param string $ServiceProviderName <p>服务供应商(创建BYOK自定义名称)。</p>
     * @param string $Protocol <p>模型协议</p>
     * @param string $ApiBase <p>API Base URL</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>子网 ID</p>
     * @param string $HostHeader <p>转发请求时添加的Host请求头</p>
     * @param array $Tags <p>标签信息</p>
     * @param boolean $VerifySSL <p>是否校验服务提供商的SSL证书</p>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ModelProvider",$param) and $param["ModelProvider"] !== null) {
            $this->ModelProvider = $param["ModelProvider"];
        }

        if (array_key_exists("ModelIds",$param) and $param["ModelIds"] !== null) {
            $this->ModelIds = [];
            foreach ($param["ModelIds"] as $key => $value){
                $obj = new ModelItem();
                $obj->deserialize($value);
                array_push($this->ModelIds, $obj);
            }
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new KeyItem();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ApiBase",$param) and $param["ApiBase"] !== null) {
            $this->ApiBase = $param["ApiBase"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VerifySSL",$param) and $param["VerifySSL"] !== null) {
            $this->VerifySSL = $param["VerifySSL"];
        }
    }
}
