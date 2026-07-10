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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP重定向信息
 *
 * @method integer getHttpCode() 获取<p>重定向的HTTP码，支持301、302、303、307、 308。</p>
 * @method void setHttpCode(integer $HttpCode) 设置<p>重定向的HTTP码，支持301、302、303、307、 308。</p>
 * @method string getHost() 获取<p>重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。</p>
 * @method void setHost(string $Host) 设置<p>重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。</p>
 * @method string getPath() 获取<p>重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z A-Z 0-9  ? =  _  . - / : 。</p>
 * @method void setPath(string $Path) 设置<p>重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z A-Z 0-9  ? =  _  . - / : 。</p>
 * @method string getPort() 获取<p>重定向的端口，默认值 ${port}。取值1 ~ 65535。</p>
 * @method void setPort(string $Port) 设置<p>重定向的端口，默认值 ${port}。取值1 ~ 65535。</p>
 * @method string getProtocol() 获取<p>重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。</p>
 * @method void setProtocol(string $Protocol) 设置<p>重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。</p>
 * @method string getQuery() 获取<p>重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}|&lt;&gt;&amp; 和空格。</p>
 * @method void setQuery(string $Query) 设置<p>重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}|&lt;&gt;&amp; 和空格。</p>
 */
class HTTPRedirectInfo extends AbstractModel
{
    /**
     * @var integer <p>重定向的HTTP码，支持301、302、303、307、 308。</p>
     */
    public $HttpCode;

    /**
     * @var string <p>重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。</p>
     */
    public $Host;

    /**
     * @var string <p>重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z A-Z 0-9  ? =  _  . - / : 。</p>
     */
    public $Path;

    /**
     * @var string <p>重定向的端口，默认值 ${port}。取值1 ~ 65535。</p>
     */
    public $Port;

    /**
     * @var string <p>重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。</p>
     */
    public $Protocol;

    /**
     * @var string <p>重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}|&lt;&gt;&amp; 和空格。</p>
     */
    public $Query;

    /**
     * @param integer $HttpCode <p>重定向的HTTP码，支持301、302、303、307、 308。</p>
     * @param string $Host <p>重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。</p>
     * @param string $Path <p>重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z A-Z 0-9  ? =  _  . - / : 。</p>
     * @param string $Port <p>重定向的端口，默认值 ${port}。取值1 ~ 65535。</p>
     * @param string $Protocol <p>重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。</p>
     * @param string $Query <p>重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}|&lt;&gt;&amp; 和空格。</p>
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
