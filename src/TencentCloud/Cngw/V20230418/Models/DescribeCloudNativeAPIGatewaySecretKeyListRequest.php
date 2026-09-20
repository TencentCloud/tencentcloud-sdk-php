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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewaySecretKeyList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method integer getLimit() 获取<p>每页条数，范围 [1, 100]，默认 10。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数，范围 [1, 100]，默认 10。</p>
 * @method integer getOffset() 获取<p>起始位置，从 0 开始。</p>
 * @method void setOffset(integer $Offset) 设置<p>起始位置，从 0 开始。</p>
 * @method array getFilters() 获取<p>过滤条件。支持的 Name：Status / GenerateType / SecretType。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。支持的 Name：Status / GenerateType / SecretType。</p>
 * @method string getKeyword() 获取<p>模糊匹配密钥名称。</p>
 * @method void setKeyword(string $Keyword) 设置<p>模糊匹配密钥名称。</p>
 * @method string getResourceId() 获取<p>对应资源的 ID（消费者 ID 或模型服务 ID）。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>对应资源的 ID（消费者 ID 或模型服务 ID）。</p>
 * @method string getResourceType() 获取<p>密钥归属资源类型。UseToBind=true 时必填。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>密钥归属资源类型。UseToBind=true 时必填。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
 * @method boolean getUseToBind() 获取<p>是否用于绑定场景。true 时返回可被绑定到指定资源的密钥。</p>
 * @method void setUseToBind(boolean $UseToBind) 设置<p>是否用于绑定场景。true 时返回可被绑定到指定资源的密钥。</p>
 */
class DescribeCloudNativeAPIGatewaySecretKeyListRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>每页条数，范围 [1, 100]，默认 10。</p>
     */
    public $Limit;

    /**
     * @var integer <p>起始位置，从 0 开始。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件。支持的 Name：Status / GenerateType / SecretType。</p>
     */
    public $Filters;

    /**
     * @var string <p>模糊匹配密钥名称。</p>
     */
    public $Keyword;

    /**
     * @var string <p>对应资源的 ID（消费者 ID 或模型服务 ID）。</p>
     */
    public $ResourceId;

    /**
     * @var string <p>密钥归属资源类型。UseToBind=true 时必填。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
     */
    public $ResourceType;

    /**
     * @var boolean <p>是否用于绑定场景。true 时返回可被绑定到指定资源的密钥。</p>
     */
    public $UseToBind;

    /**
     * @param string $GatewayId <p>实例 ID</p>
     * @param integer $Limit <p>每页条数，范围 [1, 100]，默认 10。</p>
     * @param integer $Offset <p>起始位置，从 0 开始。</p>
     * @param array $Filters <p>过滤条件。支持的 Name：Status / GenerateType / SecretType。</p>
     * @param string $Keyword <p>模糊匹配密钥名称。</p>
     * @param string $ResourceId <p>对应资源的 ID（消费者 ID 或模型服务 ID）。</p>
     * @param string $ResourceType <p>密钥归属资源类型。UseToBind=true 时必填。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
     * @param boolean $UseToBind <p>是否用于绑定场景。true 时返回可被绑定到指定资源的密钥。</p>
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("UseToBind",$param) and $param["UseToBind"] !== null) {
            $this->UseToBind = $param["UseToBind"];
        }
    }
}
