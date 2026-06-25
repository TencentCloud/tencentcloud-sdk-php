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
 * DescribeCloudNativeAPIGatewayLLMModelServices请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关 id。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关 id。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为 10，最大值为 1000。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为 10，最大值为 1000。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为 0。</p>
 * @method array getFilters() 获取<p>过滤条件，多个过滤条件之间是“与”的关系，支持 Name</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，多个过滤条件之间是“与”的关系，支持 Name</p>
 * @method string getModelAPIId() 获取<p>通过模型 API 筛选模型服务</p>
 * @method void setModelAPIId(string $ModelAPIId) 设置<p>通过模型 API 筛选模型服务</p>
 * @method string getSecretKeyId() 获取<p>通过密匙查询绑定的模型服务</p>
 * @method void setSecretKeyId(string $SecretKeyId) 设置<p>通过密匙查询绑定的模型服务</p>
 * @method string getKeyword() 获取<p>搜索关键词，模糊匹配 name 和 description</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键词，模糊匹配 name 和 description</p>
 */
class DescribeCloudNativeAPIGatewayLLMModelServicesRequest extends AbstractModel
{
    /**
     * @var string <p>网关 id。</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>返回数量，默认为 10，最大值为 1000。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为 0。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件，多个过滤条件之间是“与”的关系，支持 Name</p>
     */
    public $Filters;

    /**
     * @var string <p>通过模型 API 筛选模型服务</p>
     */
    public $ModelAPIId;

    /**
     * @var string <p>通过密匙查询绑定的模型服务</p>
     */
    public $SecretKeyId;

    /**
     * @var string <p>搜索关键词，模糊匹配 name 和 description</p>
     */
    public $Keyword;

    /**
     * @param string $GatewayId <p>网关 id。</p>
     * @param integer $Limit <p>返回数量，默认为 10，最大值为 1000。</p>
     * @param integer $Offset <p>偏移量，默认为 0。</p>
     * @param array $Filters <p>过滤条件，多个过滤条件之间是“与”的关系，支持 Name</p>
     * @param string $ModelAPIId <p>通过模型 API 筛选模型服务</p>
     * @param string $SecretKeyId <p>通过密匙查询绑定的模型服务</p>
     * @param string $Keyword <p>搜索关键词，模糊匹配 name 和 description</p>
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

        if (array_key_exists("ModelAPIId",$param) and $param["ModelAPIId"] !== null) {
            $this->ModelAPIId = $param["ModelAPIId"];
        }

        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
