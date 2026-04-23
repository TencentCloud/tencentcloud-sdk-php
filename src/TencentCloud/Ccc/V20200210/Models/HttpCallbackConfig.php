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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * http 回调包体参数
 *
 * @method string getUrl() 获取<p>http 标准 url</p>
 * @method void setUrl(string $Url) 设置<p>http 标准 url</p>
 * @method array getHeaderParams() 获取<p>http header 参数</p>
 * @method void setHeaderParams(array $HeaderParams) 设置<p>http header 参数</p>
 * @method array getParams() 获取<p>http 请求包参数</p>
 * @method void setParams(array $Params) 设置<p>http 请求包参数</p>
 * @method array getReturns() 获取<p>对端输出值，由对端 url 返回的 json 包里包含该字段就行</p>
 * @method void setReturns(array $Returns) 设置<p>对端输出值，由对端 url 返回的 json 包里包含该字段就行</p>
 * @method boolean getAsync() 获取<p>是否异步</p>
 * @method void setAsync(boolean $Async) 设置<p>是否异步</p>
 * @method integer getAuthType() 获取<p>是否鉴权</p><p>枚举值：</p><ul><li>0： 不开启鉴权</li><li>1： 启用鉴权</li></ul>
 * @method void setAuthType(integer $AuthType) 设置<p>是否鉴权</p><p>枚举值：</p><ul><li>0： 不开启鉴权</li><li>1： 启用鉴权</li></ul>
 * @method BasicAuth getBasicAuth() 获取<p>basic token 鉴权</p>
 * @method void setBasicAuth(BasicAuth $BasicAuth) 设置<p>basic token 鉴权</p>
 * @method BearerAuth getBearerAuth() 获取<p>bearer token 鉴权</p>
 * @method void setBearerAuth(BearerAuth $BearerAuth) 设置<p>bearer token 鉴权</p>
 * @method HttpParams getCustomAuth() 获取<p>自定义鉴权</p>
 * @method void setCustomAuth(HttpParams $CustomAuth) 设置<p>自定义鉴权</p>
 * @method OauthConfig getOauth2Auth() 获取<p>oauth2 鉴权</p>
 * @method void setOauth2Auth(OauthConfig $Oauth2Auth) 设置<p>oauth2 鉴权</p>
 */
class HttpCallbackConfig extends AbstractModel
{
    /**
     * @var string <p>http 标准 url</p>
     */
    public $Url;

    /**
     * @var array <p>http header 参数</p>
     */
    public $HeaderParams;

    /**
     * @var array <p>http 请求包参数</p>
     */
    public $Params;

    /**
     * @var array <p>对端输出值，由对端 url 返回的 json 包里包含该字段就行</p>
     */
    public $Returns;

    /**
     * @var boolean <p>是否异步</p>
     */
    public $Async;

    /**
     * @var integer <p>是否鉴权</p><p>枚举值：</p><ul><li>0： 不开启鉴权</li><li>1： 启用鉴权</li></ul>
     */
    public $AuthType;

    /**
     * @var BasicAuth <p>basic token 鉴权</p>
     */
    public $BasicAuth;

    /**
     * @var BearerAuth <p>bearer token 鉴权</p>
     */
    public $BearerAuth;

    /**
     * @var HttpParams <p>自定义鉴权</p>
     */
    public $CustomAuth;

    /**
     * @var OauthConfig <p>oauth2 鉴权</p>
     */
    public $Oauth2Auth;

    /**
     * @param string $Url <p>http 标准 url</p>
     * @param array $HeaderParams <p>http header 参数</p>
     * @param array $Params <p>http 请求包参数</p>
     * @param array $Returns <p>对端输出值，由对端 url 返回的 json 包里包含该字段就行</p>
     * @param boolean $Async <p>是否异步</p>
     * @param integer $AuthType <p>是否鉴权</p><p>枚举值：</p><ul><li>0： 不开启鉴权</li><li>1： 启用鉴权</li></ul>
     * @param BasicAuth $BasicAuth <p>basic token 鉴权</p>
     * @param BearerAuth $BearerAuth <p>bearer token 鉴权</p>
     * @param HttpParams $CustomAuth <p>自定义鉴权</p>
     * @param OauthConfig $Oauth2Auth <p>oauth2 鉴权</p>
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

        if (array_key_exists("HeaderParams",$param) and $param["HeaderParams"] !== null) {
            $this->HeaderParams = [];
            foreach ($param["HeaderParams"] as $key => $value){
                $obj = new HeaderParams();
                $obj->deserialize($value);
                array_push($this->HeaderParams, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new HttpParams();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("Returns",$param) and $param["Returns"] !== null) {
            $this->Returns = [];
            foreach ($param["Returns"] as $key => $value){
                $obj = new ReturnKey();
                $obj->deserialize($value);
                array_push($this->Returns, $obj);
            }
        }

        if (array_key_exists("Async",$param) and $param["Async"] !== null) {
            $this->Async = $param["Async"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = new BasicAuth();
            $this->BasicAuth->deserialize($param["BasicAuth"]);
        }

        if (array_key_exists("BearerAuth",$param) and $param["BearerAuth"] !== null) {
            $this->BearerAuth = new BearerAuth();
            $this->BearerAuth->deserialize($param["BearerAuth"]);
        }

        if (array_key_exists("CustomAuth",$param) and $param["CustomAuth"] !== null) {
            $this->CustomAuth = new HttpParams();
            $this->CustomAuth->deserialize($param["CustomAuth"]);
        }

        if (array_key_exists("Oauth2Auth",$param) and $param["Oauth2Auth"] !== null) {
            $this->Oauth2Auth = new OauthConfig();
            $this->Oauth2Auth->deserialize($param["Oauth2Auth"]);
        }
    }
}
