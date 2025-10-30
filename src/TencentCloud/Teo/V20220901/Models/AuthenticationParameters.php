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
 * Token 鉴权 配置参数。
 *
 * @method string getAuthType() 获取鉴权类型。取值有：

<li>TypeA：鉴权方式 A 类型，具体含义请参考 [鉴权方式 A](https://cloud.tencent.com/document/product/1552/109329)；</li>
<li>TypeB：鉴权方式 B 类型，具体含义请参考 [鉴权方式 B](https://cloud.tencent.com/document/product/1552/109330)；</li>
<li>TypeC：鉴权方式 C 类型，具体含义请参考 [鉴权方式 C](https://cloud.tencent.com/document/product/1552/109331)；</li>
<li>TypeD：鉴权方式 D 类型，具体含义请参考 [鉴权方式 D](https://cloud.tencent.com/document/product/1552/109332)；</li>
<li>TypeVOD：鉴权方式 V 类型，具体含义请参考 [鉴权方式 V](https://cloud.tencent.com/document/product/1552/109333)。</li>
 * @method void setAuthType(string $AuthType) 设置鉴权类型。取值有：

<li>TypeA：鉴权方式 A 类型，具体含义请参考 [鉴权方式 A](https://cloud.tencent.com/document/product/1552/109329)；</li>
<li>TypeB：鉴权方式 B 类型，具体含义请参考 [鉴权方式 B](https://cloud.tencent.com/document/product/1552/109330)；</li>
<li>TypeC：鉴权方式 C 类型，具体含义请参考 [鉴权方式 C](https://cloud.tencent.com/document/product/1552/109331)；</li>
<li>TypeD：鉴权方式 D 类型，具体含义请参考 [鉴权方式 D](https://cloud.tencent.com/document/product/1552/109332)；</li>
<li>TypeVOD：鉴权方式 V 类型，具体含义请参考 [鉴权方式 V](https://cloud.tencent.com/document/product/1552/109333)。</li>
 * @method string getSecretKey() 获取主鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
 * @method void setSecretKey(string $SecretKey) 设置主鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
 * @method integer getTimeout() 获取鉴权 URL 的有效时长，单位为秒，取值：1～630720000。用于判断客户端访问请求是否过期：
<li>若当前时间超过 “timestamp + 有效时长” 时间，则为过期请求，直接返回 403。</li>
<li>若当前时间未超过 “timestamp + 有效时长” 时间，则请求未过期，继续校验 md5 字符串。</li>注意：当 AuthType 为 TypeA、TypeB、TypeC、TypeD 之一时，此字段必填。
 * @method void setTimeout(integer $Timeout) 设置鉴权 URL 的有效时长，单位为秒，取值：1～630720000。用于判断客户端访问请求是否过期：
<li>若当前时间超过 “timestamp + 有效时长” 时间，则为过期请求，直接返回 403。</li>
<li>若当前时间未超过 “timestamp + 有效时长” 时间，则请求未过期，继续校验 md5 字符串。</li>注意：当 AuthType 为 TypeA、TypeB、TypeC、TypeD 之一时，此字段必填。
 * @method string getBackupSecretKey() 获取备鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
 * @method void setBackupSecretKey(string $BackupSecretKey) 设置备鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
 * @method string getAuthParam() 获取鉴权参数名称，节点将校验此参数名对应的值。由 1～100 位大小写字母、数字或下划线组成。<br>注意：当 AuthType 为 TypeA、TypeD 之一时，此字段必填。
 * @method void setAuthParam(string $AuthParam) 设置鉴权参数名称，节点将校验此参数名对应的值。由 1～100 位大小写字母、数字或下划线组成。<br>注意：当 AuthType 为 TypeA、TypeD 之一时，此字段必填。
 * @method string getTimeParam() 获取鉴权时间戳，和 AuthParam 字段的值不能相同。<br>注意：当 AuthType 为 TypeD 时，此字段必填。
 * @method void setTimeParam(string $TimeParam) 设置鉴权时间戳，和 AuthParam 字段的值不能相同。<br>注意：当 AuthType 为 TypeD 时，此字段必填。
 * @method string getTimeFormat() 获取鉴权时间格式，取值有：
<li>dec：十进制；</li>
<li>hex：十六进制。</li>注意：当 AuthType 为 TypeD 时，此字段必填。默认为 hex。
 * @method void setTimeFormat(string $TimeFormat) 设置鉴权时间格式，取值有：
<li>dec：十进制；</li>
<li>hex：十六进制。</li>注意：当 AuthType 为 TypeD 时，此字段必填。默认为 hex。
 */
class AuthenticationParameters extends AbstractModel
{
    /**
     * @var string 鉴权类型。取值有：

<li>TypeA：鉴权方式 A 类型，具体含义请参考 [鉴权方式 A](https://cloud.tencent.com/document/product/1552/109329)；</li>
<li>TypeB：鉴权方式 B 类型，具体含义请参考 [鉴权方式 B](https://cloud.tencent.com/document/product/1552/109330)；</li>
<li>TypeC：鉴权方式 C 类型，具体含义请参考 [鉴权方式 C](https://cloud.tencent.com/document/product/1552/109331)；</li>
<li>TypeD：鉴权方式 D 类型，具体含义请参考 [鉴权方式 D](https://cloud.tencent.com/document/product/1552/109332)；</li>
<li>TypeVOD：鉴权方式 V 类型，具体含义请参考 [鉴权方式 V](https://cloud.tencent.com/document/product/1552/109333)。</li>
     */
    public $AuthType;

    /**
     * @var string 主鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
     */
    public $SecretKey;

    /**
     * @var integer 鉴权 URL 的有效时长，单位为秒，取值：1～630720000。用于判断客户端访问请求是否过期：
<li>若当前时间超过 “timestamp + 有效时长” 时间，则为过期请求，直接返回 403。</li>
<li>若当前时间未超过 “timestamp + 有效时长” 时间，则请求未过期，继续校验 md5 字符串。</li>注意：当 AuthType 为 TypeA、TypeB、TypeC、TypeD 之一时，此字段必填。
     */
    public $Timeout;

    /**
     * @var string 备鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
     */
    public $BackupSecretKey;

    /**
     * @var string 鉴权参数名称，节点将校验此参数名对应的值。由 1～100 位大小写字母、数字或下划线组成。<br>注意：当 AuthType 为 TypeA、TypeD 之一时，此字段必填。
     */
    public $AuthParam;

    /**
     * @var string 鉴权时间戳，和 AuthParam 字段的值不能相同。<br>注意：当 AuthType 为 TypeD 时，此字段必填。
     */
    public $TimeParam;

    /**
     * @var string 鉴权时间格式，取值有：
<li>dec：十进制；</li>
<li>hex：十六进制。</li>注意：当 AuthType 为 TypeD 时，此字段必填。默认为 hex。
     */
    public $TimeFormat;

    /**
     * @param string $AuthType 鉴权类型。取值有：

<li>TypeA：鉴权方式 A 类型，具体含义请参考 [鉴权方式 A](https://cloud.tencent.com/document/product/1552/109329)；</li>
<li>TypeB：鉴权方式 B 类型，具体含义请参考 [鉴权方式 B](https://cloud.tencent.com/document/product/1552/109330)；</li>
<li>TypeC：鉴权方式 C 类型，具体含义请参考 [鉴权方式 C](https://cloud.tencent.com/document/product/1552/109331)；</li>
<li>TypeD：鉴权方式 D 类型，具体含义请参考 [鉴权方式 D](https://cloud.tencent.com/document/product/1552/109332)；</li>
<li>TypeVOD：鉴权方式 V 类型，具体含义请参考 [鉴权方式 V](https://cloud.tencent.com/document/product/1552/109333)。</li>
     * @param string $SecretKey 主鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
     * @param integer $Timeout 鉴权 URL 的有效时长，单位为秒，取值：1～630720000。用于判断客户端访问请求是否过期：
<li>若当前时间超过 “timestamp + 有效时长” 时间，则为过期请求，直接返回 403。</li>
<li>若当前时间未超过 “timestamp + 有效时长” 时间，则请求未过期，继续校验 md5 字符串。</li>注意：当 AuthType 为 TypeA、TypeB、TypeC、TypeD 之一时，此字段必填。
     * @param string $BackupSecretKey 备鉴权密钥，由 6～40 位大小写英文字母或数字组成，不能包含 " 和 $。
     * @param string $AuthParam 鉴权参数名称，节点将校验此参数名对应的值。由 1～100 位大小写字母、数字或下划线组成。<br>注意：当 AuthType 为 TypeA、TypeD 之一时，此字段必填。
     * @param string $TimeParam 鉴权时间戳，和 AuthParam 字段的值不能相同。<br>注意：当 AuthType 为 TypeD 时，此字段必填。
     * @param string $TimeFormat 鉴权时间格式，取值有：
<li>dec：十进制；</li>
<li>hex：十六进制。</li>注意：当 AuthType 为 TypeD 时，此字段必填。默认为 hex。
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }

        if (array_key_exists("AuthParam",$param) and $param["AuthParam"] !== null) {
            $this->AuthParam = $param["AuthParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
