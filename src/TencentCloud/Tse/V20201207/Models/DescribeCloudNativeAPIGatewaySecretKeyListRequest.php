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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewaySecretKeyList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method integer getLimit() 获取<p>每页数量，最大20个</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，最大20个</p>
 * @method integer getOffset() 获取<p>起始值</p>
 * @method void setOffset(integer $Offset) 设置<p>起始值</p>
 * @method string getResourceType() 获取<p>资源类型：</p><ul><li>Consumer: 消费者</li><li>LLM: 模型服务</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型：</p><ul><li>Consumer: 消费者</li><li>LLM: 模型服务</li></ul>
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method boolean getUseToBind() 获取<p>是否展示可以用于绑定信息,true/false</p>
 * @method void setUseToBind(boolean $UseToBind) 设置<p>是否展示可以用于绑定信息,true/false</p>
 * @method array getFilters() 获取<p>Key 可选：</p><ul><li>SecretType:  密钥类型 ApiKey</li><li>GenerateType:  生成方式，例如 KMS</li><li>Status: 状态 Enable/Disable</li></ul>
 * @method void setFilters(array $Filters) 设置<p>Key 可选：</p><ul><li>SecretType:  密钥类型 ApiKey</li><li>GenerateType:  生成方式，例如 KMS</li><li>Status: 状态 Enable/Disable</li></ul>
 * @method string getKeyword() 获取<p>检索关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>检索关键字</p>
 * @method boolean getIncludeCreationInfo() 获取<p>可选 Boolean，默认 false。仅传 true 且返回记录 ResourceType=Consumer 时，额外返回 CredentialGenerateType、CreationSource、BatchId；省略或 false 时不返回这三个字段，原字段和返回结构保持不变。此参数只控制展示字段，不控制 Filters 是否生效。</p>
 * @method void setIncludeCreationInfo(boolean $IncludeCreationInfo) 设置<p>可选 Boolean，默认 false。仅传 true 且返回记录 ResourceType=Consumer 时，额外返回 CredentialGenerateType、CreationSource、BatchId；省略或 false 时不返回这三个字段，原字段和返回结构保持不变。此参数只控制展示字段，不控制 Filters 是否生效。</p>
 */
class DescribeCloudNativeAPIGatewaySecretKeyListRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>每页数量，最大20个</p>
     */
    public $Limit;

    /**
     * @var integer <p>起始值</p>
     */
    public $Offset;

    /**
     * @var string <p>资源类型：</p><ul><li>Consumer: 消费者</li><li>LLM: 模型服务</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var boolean <p>是否展示可以用于绑定信息,true/false</p>
     */
    public $UseToBind;

    /**
     * @var array <p>Key 可选：</p><ul><li>SecretType:  密钥类型 ApiKey</li><li>GenerateType:  生成方式，例如 KMS</li><li>Status: 状态 Enable/Disable</li></ul>
     */
    public $Filters;

    /**
     * @var string <p>检索关键字</p>
     */
    public $Keyword;

    /**
     * @var boolean <p>可选 Boolean，默认 false。仅传 true 且返回记录 ResourceType=Consumer 时，额外返回 CredentialGenerateType、CreationSource、BatchId；省略或 false 时不返回这三个字段，原字段和返回结构保持不变。此参数只控制展示字段，不控制 Filters 是否生效。</p>
     */
    public $IncludeCreationInfo;

    /**
     * @param string $GatewayId <p>实例 ID</p>
     * @param integer $Limit <p>每页数量，最大20个</p>
     * @param integer $Offset <p>起始值</p>
     * @param string $ResourceType <p>资源类型：</p><ul><li>Consumer: 消费者</li><li>LLM: 模型服务</li></ul>
     * @param string $ResourceId <p>资源id</p>
     * @param boolean $UseToBind <p>是否展示可以用于绑定信息,true/false</p>
     * @param array $Filters <p>Key 可选：</p><ul><li>SecretType:  密钥类型 ApiKey</li><li>GenerateType:  生成方式，例如 KMS</li><li>Status: 状态 Enable/Disable</li></ul>
     * @param string $Keyword <p>检索关键字</p>
     * @param boolean $IncludeCreationInfo <p>可选 Boolean，默认 false。仅传 true 且返回记录 ResourceType=Consumer 时，额外返回 CredentialGenerateType、CreationSource、BatchId；省略或 false 时不返回这三个字段，原字段和返回结构保持不变。此参数只控制展示字段，不控制 Filters 是否生效。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("UseToBind",$param) and $param["UseToBind"] !== null) {
            $this->UseToBind = $param["UseToBind"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("IncludeCreationInfo",$param) and $param["IncludeCreationInfo"] !== null) {
            $this->IncludeCreationInfo = $param["IncludeCreationInfo"];
        }
    }
}
