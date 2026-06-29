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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApiToolConfig
 *
 * @method array getBody() 获取<p>请求体参数</p>
 * @method void setBody(array $Body) 设置<p>请求体参数</p>
 * @method ToolExample getExample() 获取<p>示例</p>
 * @method void setExample(ToolExample $Example) 设置<p>示例</p>
 * @method string getExternalApiUrl() 获取<p>API插件外部调用地址</p>
 * @method void setExternalApiUrl(string $ExternalApiUrl) 设置<p>API插件外部调用地址</p>
 * @method array getHeader() 获取<p>Header</p>
 * @method void setHeader(array $Header) 设置<p>Header</p>
 * @method string getMethod() 获取<p>请求方式</p>
 * @method void setMethod(string $Method) 设置<p>请求方式</p>
 * @method array getOutputs() 获取<p>输出</p>
 * @method void setOutputs(array $Outputs) 设置<p>输出</p>
 * @method array getQuery() 获取<p>查询参数</p>
 * @method void setQuery(array $Query) 设置<p>查询参数</p>
 * @method integer getStreamMode() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>非流式</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>流式</td></tr></tbody></table>
 * @method void setStreamMode(integer $StreamMode) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>非流式</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>流式</td></tr></tbody></table>
 * @method string getUrl() 获取<p>地址</p>
 * @method void setUrl(string $Url) 设置<p>地址</p>
 */
class ApiToolConfig extends AbstractModel
{
    /**
     * @var array <p>请求体参数</p>
     */
    public $Body;

    /**
     * @var ToolExample <p>示例</p>
     */
    public $Example;

    /**
     * @var string <p>API插件外部调用地址</p>
     */
    public $ExternalApiUrl;

    /**
     * @var array <p>Header</p>
     */
    public $Header;

    /**
     * @var string <p>请求方式</p>
     */
    public $Method;

    /**
     * @var array <p>输出</p>
     */
    public $Outputs;

    /**
     * @var array <p>查询参数</p>
     */
    public $Query;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>非流式</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>流式</td></tr></tbody></table>
     */
    public $StreamMode;

    /**
     * @var string <p>地址</p>
     */
    public $Url;

    /**
     * @param array $Body <p>请求体参数</p>
     * @param ToolExample $Example <p>示例</p>
     * @param string $ExternalApiUrl <p>API插件外部调用地址</p>
     * @param array $Header <p>Header</p>
     * @param string $Method <p>请求方式</p>
     * @param array $Outputs <p>输出</p>
     * @param array $Query <p>查询参数</p>
     * @param integer $StreamMode <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>非流式</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>流式</td></tr></tbody></table>
     * @param string $Url <p>地址</p>
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = [];
            foreach ($param["Body"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Body, $obj);
            }
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = new ToolExample();
            $this->Example->deserialize($param["Example"]);
        }

        if (array_key_exists("ExternalApiUrl",$param) and $param["ExternalApiUrl"] !== null) {
            $this->ExternalApiUrl = $param["ExternalApiUrl"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = [];
            foreach ($param["Header"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Header, $obj);
            }
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new ResponseParam();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = [];
            foreach ($param["Query"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Query, $obj);
            }
        }

        if (array_key_exists("StreamMode",$param) and $param["StreamMode"] !== null) {
            $this->StreamMode = $param["StreamMode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
