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
 * EdgeKVPut请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getNamespace() 获取命名空间名称。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。
 * @method string getKey() 获取键名，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。
 * @method void setKey(string $Key) 设置键名，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。
 * @method string getValue() 获取键值。不能为空，最大支持 1 MB。支持存储字符串数据。
 * @method void setValue(string $Value) 设置键值。不能为空，最大支持 1 MB。支持存储字符串数据。
 * @method integer getExpiration() 获取键值对的过期时间，绝对时间，单位为秒，表示从 1970 年 1 月 1 日 00:00:00（UTC）起经过的秒数（即 Unix 时间戳）。取值必须大于等于当前时间 + 60，即过期时间距当前至少 60 秒。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
 * @method void setExpiration(integer $Expiration) 设置键值对的过期时间，绝对时间，单位为秒，表示从 1970 年 1 月 1 日 00:00:00（UTC）起经过的秒数（即 Unix 时间戳）。取值必须大于等于当前时间 + 60，即过期时间距当前至少 60 秒。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
 * @method integer getExpirationTTL() 获取键值对的存活时长，相对时间，单位为秒，表示数据将在写入后经过指定秒数过期。取值范围：大于等于 60。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
 * @method void setExpirationTTL(integer $ExpirationTTL) 设置键值对的存活时长，相对时间，单位为秒，表示数据将在写入后经过指定秒数过期。取值范围：大于等于 60。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
 */
class EdgeKVPutRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 命名空间名称。
     */
    public $Namespace;

    /**
     * @var string 键名，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。
     */
    public $Key;

    /**
     * @var string 键值。不能为空，最大支持 1 MB。支持存储字符串数据。
     */
    public $Value;

    /**
     * @var integer 键值对的过期时间，绝对时间，单位为秒，表示从 1970 年 1 月 1 日 00:00:00（UTC）起经过的秒数（即 Unix 时间戳）。取值必须大于等于当前时间 + 60，即过期时间距当前至少 60 秒。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
     */
    public $Expiration;

    /**
     * @var integer 键值对的存活时长，相对时间，单位为秒，表示数据将在写入后经过指定秒数过期。取值范围：大于等于 60。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
     */
    public $ExpirationTTL;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Namespace 命名空间名称。
     * @param string $Key 键名，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。
     * @param string $Value 键值。不能为空，最大支持 1 MB。支持存储字符串数据。
     * @param integer $Expiration 键值对的过期时间，绝对时间，单位为秒，表示从 1970 年 1 月 1 日 00:00:00（UTC）起经过的秒数（即 Unix 时间戳）。取值必须大于等于当前时间 + 60，即过期时间距当前至少 60 秒。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
     * @param integer $ExpirationTTL 键值对的存活时长，相对时间，单位为秒，表示数据将在写入后经过指定秒数过期。取值范围：大于等于 60。当 Expiration 与 ExpirationTTL 同时填写时，以 ExpirationTTL 为准；当两者均不填写时，键值对永不过期。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("ExpirationTTL",$param) and $param["ExpirationTTL"] !== null) {
            $this->ExpirationTTL = $param["ExpirationTTL"];
        }
    }
}
