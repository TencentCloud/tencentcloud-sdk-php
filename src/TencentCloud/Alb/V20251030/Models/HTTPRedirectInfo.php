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
 * @method integer getHttpCode() 获取重定向的HTTP码，支持301、302、303、307、 308。
 * @method void setHttpCode(integer $HttpCode) 设置重定向的HTTP码，支持301、302、303、307、 308。
 * @method string getHost() 获取重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。
 * @method void setHost(string $Host) 设置重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。
 * @method string getPath() 获取重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z 0-9  ? =  _  . - / : 。
 * @method void setPath(string $Path) 设置重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z 0-9  ? =  _  . - / : 。
 * @method string getPort() 获取重定向的端口，默认值 ${port}。取值1 ~ 65535。
 * @method void setPort(string $Port) 设置重定向的端口，默认值 ${port}。取值1 ~ 65535。
 * @method string getProtocol() 获取重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。
 * @method void setProtocol(string $Protocol) 设置重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。
 * @method string getQuery() 获取重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}\|<>& 和空格。
 * @method void setQuery(string $Query) 设置重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}\|<>& 和空格。
 */
class HTTPRedirectInfo extends AbstractModel
{
    /**
     * @var integer 重定向的HTTP码，支持301、302、303、307、 308。
     */
    public $HttpCode;

    /**
     * @var string 重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。
     */
    public $Host;

    /**
     * @var string 重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z 0-9  ? =  _  . - / : 。
     */
    public $Path;

    /**
     * @var string 重定向的端口，默认值 ${port}。取值1 ~ 65535。
     */
    public $Port;

    /**
     * @var string 重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。
     */
    public $Protocol;

    /**
     * @var string 重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}\|<>& 和空格。
     */
    public $Query;

    /**
     * @param integer $HttpCode 重定向的HTTP码，支持301、302、303、307、 308。
     * @param string $Host 重定向的主机地址，默认值${host}。长度3 ~ 128个字符，支持的字符集为：a-z 0-9 _ . -。
     * @param string $Path 重定向的路径，默认值${path}。长度1 ~ 128个字符，支持的字符集为：a-z 0-9  ? =  _  . - / : 。
     * @param string $Port 重定向的端口，默认值 ${port}。取值1 ~ 65535。
     * @param string $Protocol 重定向的协议，取值：HTTP,HTTPS，默认值${protocol}。
     * @param string $Query 重定向的查询字符串，默认值${query}。长度1 ~ 128字符，支持可打印字符，不支持 #[]{}\|<>& 和空格。
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
