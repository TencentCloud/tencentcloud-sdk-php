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
 * DescribeCloudNativeAPIGatewayLLMModelAPIs请求参数结构体
 *
 * @method string getGatewayId() 获取网关 id。
 * @method void setGatewayId(string $GatewayId) 设置网关 id。
 * @method integer getLimit() 获取<p>每页条数，范围 [1, 1000]，默认 10。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数，范围 [1, 1000]，默认 10。</p>
 * @method integer getOffset() 获取<p>起始位置，从 0 开始。</p>
 * @method void setOffset(integer $Offset) 设置<p>起始位置，从 0 开始。</p>
 * @method array getFilters() 获取<p>过滤条件。当前未启用具体字段。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。当前未启用具体字段。</p>
 * @method string getKeyword() 获取<p>模糊匹配模型 API 名称。</p>
 * @method void setKeyword(string $Keyword) 设置<p>模糊匹配模型 API 名称。</p>
 * @method string getConsumerGroupId() 获取<p>消费者组 ID（以 cg- 开头），与 UseToBind 搭配使用。</p>
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置<p>消费者组 ID（以 cg- 开头），与 UseToBind 搭配使用。</p>
 * @method boolean getUseToBind() 获取<p>是否用于绑定场景。true 时仅返回可被绑定到指定消费者组的模型 API。</p>
 * @method void setUseToBind(boolean $UseToBind) 设置<p>是否用于绑定场景。true 时仅返回可被绑定到指定消费者组的模型 API。</p>
 */
class DescribeCloudNativeAPIGatewayLLMModelAPIsRequest extends AbstractModel
{
    /**
     * @var string 网关 id。
     */
    public $GatewayId;

    /**
     * @var integer <p>每页条数，范围 [1, 1000]，默认 10。</p>
     */
    public $Limit;

    /**
     * @var integer <p>起始位置，从 0 开始。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件。当前未启用具体字段。</p>
     */
    public $Filters;

    /**
     * @var string <p>模糊匹配模型 API 名称。</p>
     */
    public $Keyword;

    /**
     * @var string <p>消费者组 ID（以 cg- 开头），与 UseToBind 搭配使用。</p>
     */
    public $ConsumerGroupId;

    /**
     * @var boolean <p>是否用于绑定场景。true 时仅返回可被绑定到指定消费者组的模型 API。</p>
     */
    public $UseToBind;

    /**
     * @param string $GatewayId 网关 id。
     * @param integer $Limit <p>每页条数，范围 [1, 1000]，默认 10。</p>
     * @param integer $Offset <p>起始位置，从 0 开始。</p>
     * @param array $Filters <p>过滤条件。当前未启用具体字段。</p>
     * @param string $Keyword <p>模糊匹配模型 API 名称。</p>
     * @param string $ConsumerGroupId <p>消费者组 ID（以 cg- 开头），与 UseToBind 搭配使用。</p>
     * @param boolean $UseToBind <p>是否用于绑定场景。true 时仅返回可被绑定到指定消费者组的模型 API。</p>
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

        if (array_key_exists("ConsumerGroupId",$param) and $param["ConsumerGroupId"] !== null) {
            $this->ConsumerGroupId = $param["ConsumerGroupId"];
        }

        if (array_key_exists("UseToBind",$param) and $param["UseToBind"] !== null) {
            $this->UseToBind = $param["UseToBind"];
        }
    }
}
