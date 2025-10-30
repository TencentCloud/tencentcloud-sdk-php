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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时日志投递到自定义 HTTP(S) 接口的配置信息。
 *
 * @method string getUrl() 获取实时日志投递的自定义 HTTP 接口地址，暂仅支持 HTTP/HTTPS 协议。
 * @method void setUrl(string $Url) 设置实时日志投递的自定义 HTTP 接口地址，暂仅支持 HTTP/HTTPS 协议。
 * @method string getAccessId() 获取填写自定义的 SecretId 用于生成加密签名，如果源站需要鉴权此参数必填。
 * @method void setAccessId(string $AccessId) 设置填写自定义的 SecretId 用于生成加密签名，如果源站需要鉴权此参数必填。
 * @method string getAccessKey() 获取填写自定义的 SecretKey 用于生成加密签名，如果源站需要鉴权此参数必填。
 * @method void setAccessKey(string $AccessKey) 设置填写自定义的 SecretKey 用于生成加密签名，如果源站需要鉴权此参数必填。
 * @method string getCompressType() 获取数据压缩类型，取值有: <li> gzip：使用 gzip 方式压缩。</li>不填表示不启用压缩。
 * @method void setCompressType(string $CompressType) 设置数据压缩类型，取值有: <li> gzip：使用 gzip 方式压缩。</li>不填表示不启用压缩。
 * @method string getProtocol() 获取POST 请求投递日志时，使用的应用层协议类型，取值有： 
<li>http：HTTP 协议；</li>
<li>https：HTTPS 协议。</li>如果不填默认根据填写的 URL 地址解析出协议类型。	
 * @method void setProtocol(string $Protocol) 设置POST 请求投递日志时，使用的应用层协议类型，取值有： 
<li>http：HTTP 协议；</li>
<li>https：HTTPS 协议。</li>如果不填默认根据填写的 URL 地址解析出协议类型。	
 * @method array getHeaders() 获取投递日志时携带的自定义请求头。若您填写的头部名称为 Content-Type 等 EdgeOne 日志推送默认携带的头部，那么您填写的头部值将覆盖默认值。头部值引用单个变量${batchSize}，以获取每次 POST 请求中包含的日志条数。
 * @method void setHeaders(array $Headers) 设置投递日志时携带的自定义请求头。若您填写的头部名称为 Content-Type 等 EdgeOne 日志推送默认携带的头部，那么您填写的头部值将覆盖默认值。头部值引用单个变量${batchSize}，以获取每次 POST 请求中包含的日志条数。
 */
class CustomEndpoint extends AbstractModel
{
    /**
     * @var string 实时日志投递的自定义 HTTP 接口地址，暂仅支持 HTTP/HTTPS 协议。
     */
    public $Url;

    /**
     * @var string 填写自定义的 SecretId 用于生成加密签名，如果源站需要鉴权此参数必填。
     */
    public $AccessId;

    /**
     * @var string 填写自定义的 SecretKey 用于生成加密签名，如果源站需要鉴权此参数必填。
     */
    public $AccessKey;

    /**
     * @var string 数据压缩类型，取值有: <li> gzip：使用 gzip 方式压缩。</li>不填表示不启用压缩。
     */
    public $CompressType;

    /**
     * @var string POST 请求投递日志时，使用的应用层协议类型，取值有： 
<li>http：HTTP 协议；</li>
<li>https：HTTPS 协议。</li>如果不填默认根据填写的 URL 地址解析出协议类型。	
     */
    public $Protocol;

    /**
     * @var array 投递日志时携带的自定义请求头。若您填写的头部名称为 Content-Type 等 EdgeOne 日志推送默认携带的头部，那么您填写的头部值将覆盖默认值。头部值引用单个变量${batchSize}，以获取每次 POST 请求中包含的日志条数。
     */
    public $Headers;

    /**
     * @param string $Url 实时日志投递的自定义 HTTP 接口地址，暂仅支持 HTTP/HTTPS 协议。
     * @param string $AccessId 填写自定义的 SecretId 用于生成加密签名，如果源站需要鉴权此参数必填。
     * @param string $AccessKey 填写自定义的 SecretKey 用于生成加密签名，如果源站需要鉴权此参数必填。
     * @param string $CompressType 数据压缩类型，取值有: <li> gzip：使用 gzip 方式压缩。</li>不填表示不启用压缩。
     * @param string $Protocol POST 请求投递日志时，使用的应用层协议类型，取值有： 
<li>http：HTTP 协议；</li>
<li>https：HTTPS 协议。</li>如果不填默认根据填写的 URL 地址解析出协议类型。	
     * @param array $Headers 投递日志时携带的自定义请求头。若您填写的头部名称为 Content-Type 等 EdgeOne 日志推送默认携带的头部，那么您填写的头部值将覆盖默认值。头部值引用单个变量${batchSize}，以获取每次 POST 请求中包含的日志条数。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new Header();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
