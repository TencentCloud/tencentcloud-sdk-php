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
 * @method string getExternalApiUrl() 获取API插件支持对外调用的工具URL
 * @method void setExternalApiUrl(string $ExternalApiUrl) 设置API插件支持对外调用的工具URL
 * @method string getMethod() 获取请求method
 * @method void setMethod(string $Method) 设置请求method
 * @method string getUrl() 获取请求的url
 * @method void setUrl(string $Url) 设置请求的url
 * @method array getBody() 获取body参数
 * @method void setBody(array $Body) 设置body参数
 * @method ToolExample getExample() 获取示例
 * @method void setExample(ToolExample $Example) 设置示例
 * @method array getHeader() 获取Header信息
 * @method void setHeader(array $Header) 设置Header信息
 * @method array getOutputs() 获取输出参数
 * @method void setOutputs(array $Outputs) 设置输出参数
 * @method array getQuery() 获取query参数
 * @method void setQuery(array $Query) 设置query参数
 * @method integer getStreamMode() 获取流式模式
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非流式 |
| 1 | 流式 |
 * @method void setStreamMode(integer $StreamMode) 设置流式模式
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非流式 |
| 1 | 流式 |
 */
class ApiToolConfig extends AbstractModel
{
    /**
     * @var string API插件支持对外调用的工具URL
     */
    public $ExternalApiUrl;

    /**
     * @var string 请求method
     */
    public $Method;

    /**
     * @var string 请求的url
     */
    public $Url;

    /**
     * @var array body参数
     */
    public $Body;

    /**
     * @var ToolExample 示例
     */
    public $Example;

    /**
     * @var array Header信息
     */
    public $Header;

    /**
     * @var array 输出参数
     */
    public $Outputs;

    /**
     * @var array query参数
     */
    public $Query;

    /**
     * @var integer 流式模式
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非流式 |
| 1 | 流式 |
     */
    public $StreamMode;

    /**
     * @param string $ExternalApiUrl API插件支持对外调用的工具URL
     * @param string $Method 请求method
     * @param string $Url 请求的url
     * @param array $Body body参数
     * @param ToolExample $Example 示例
     * @param array $Header Header信息
     * @param array $Outputs 输出参数
     * @param array $Query query参数
     * @param integer $StreamMode 流式模式
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 非流式 |
| 1 | 流式 |
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
        if (array_key_exists("ExternalApiUrl",$param) and $param["ExternalApiUrl"] !== null) {
            $this->ExternalApiUrl = $param["ExternalApiUrl"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
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

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = [];
            foreach ($param["Header"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Header, $obj);
            }
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
    }
}
