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
 * 插入HTTP Header信息
 *
 * @method string getKey() 获取插入的HTTP Header键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Cookie,Host,Content-Length,Connection,Upgrade,transfer-encoding,keep-alive,te,authority,x-forwarded-for,x-forwarded-proto,x-forwarded-host,x-forwarded-port。
 * @method void setKey(string $Key) 设置插入的HTTP Header键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Cookie,Host,Content-Length,Connection,Upgrade,transfer-encoding,keep-alive,te,authority,x-forwarded-for,x-forwarded-proto,x-forwarded-host,x-forwarded-port。
 * @method string getValue() 获取HTTP Header值的类型。
ValueType为SystemDefined时，取值范围 ClientPort：客户端端口，ClientIp：客户端 IP 地址，Protocol：客户端请求的协议，CLBPort：负载均衡实例监听端口。
ValueType为UserDefined时，长度1 ~ 128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
ValueType为ReferenceHeader时，引用请求头中的某一个header，长度1~128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
 * @method void setValue(string $Value) 设置HTTP Header值的类型。
ValueType为SystemDefined时，取值范围 ClientPort：客户端端口，ClientIp：客户端 IP 地址，Protocol：客户端请求的协议，CLBPort：负载均衡实例监听端口。
ValueType为UserDefined时，长度1 ~ 128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
ValueType为ReferenceHeader时，引用请求头中的某一个header，长度1~128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
 * @method string getValueType() 获取HTTP Header值的类型，取值：
SystemDefined：系统定义的header。
UserDefined：用户自定义的header。
ReferenceHeader：引用请求头中的某一个header。
 * @method void setValueType(string $ValueType) 设置HTTP Header值的类型，取值：
SystemDefined：系统定义的header。
UserDefined：用户自定义的header。
ReferenceHeader：引用请求头中的某一个header。
 */
class InsertHTTPHeaderInfo extends AbstractModel
{
    /**
     * @var string 插入的HTTP Header键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Cookie,Host,Content-Length,Connection,Upgrade,transfer-encoding,keep-alive,te,authority,x-forwarded-for,x-forwarded-proto,x-forwarded-host,x-forwarded-port。
     */
    public $Key;

    /**
     * @var string HTTP Header值的类型。
ValueType为SystemDefined时，取值范围 ClientPort：客户端端口，ClientIp：客户端 IP 地址，Protocol：客户端请求的协议，CLBPort：负载均衡实例监听端口。
ValueType为UserDefined时，长度1 ~ 128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
ValueType为ReferenceHeader时，引用请求头中的某一个header，长度1~128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
     */
    public $Value;

    /**
     * @var string HTTP Header值的类型，取值：
SystemDefined：系统定义的header。
UserDefined：用户自定义的header。
ReferenceHeader：引用请求头中的某一个header。
     */
    public $ValueType;

    /**
     * @param string $Key 插入的HTTP Header键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Cookie,Host,Content-Length,Connection,Upgrade,transfer-encoding,keep-alive,te,authority,x-forwarded-for,x-forwarded-proto,x-forwarded-host,x-forwarded-port。
     * @param string $Value HTTP Header值的类型。
ValueType为SystemDefined时，取值范围 ClientPort：客户端端口，ClientIp：客户端 IP 地址，Protocol：客户端请求的协议，CLBPort：负载均衡实例监听端口。
ValueType为UserDefined时，长度1 ~ 128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
ValueType为ReferenceHeader时，引用请求头中的某一个header，长度1~128的可打印字符，不支持"，开头和结尾不能为空格，结尾不能为\。
     * @param string $ValueType HTTP Header值的类型，取值：
SystemDefined：系统定义的header。
UserDefined：用户自定义的header。
ReferenceHeader：引用请求头中的某一个header。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
