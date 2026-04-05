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
 * @method integer getExpiration() 获取过期时间，绝对时间。表示从 1970 年 1 月 1 日（UTC/GMT 的午夜）开始所经过的秒数，不能小于当前时间。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
 * @method void setExpiration(integer $Expiration) 设置过期时间，绝对时间。表示从 1970 年 1 月 1 日（UTC/GMT 的午夜）开始所经过的秒数，不能小于当前时间。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
 * @method integer getExpirationTTL() 获取过期时间，相对时间，单位为秒。表示数据将在指定秒数后过期，必须大于 0。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
 * @method void setExpirationTTL(integer $ExpirationTTL) 设置过期时间，相对时间，单位为秒。表示数据将在指定秒数后过期，必须大于 0。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
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
     * @var integer 过期时间，绝对时间。表示从 1970 年 1 月 1 日（UTC/GMT 的午夜）开始所经过的秒数，不能小于当前时间。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
     */
    public $Expiration;

    /**
     * @var integer 过期时间，相对时间，单位为秒。表示数据将在指定秒数后过期，必须大于 0。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
     */
    public $ExpirationTTL;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Namespace 命名空间名称。
     * @param string $Key 键名，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。
     * @param string $Value 键值。不能为空，最大支持 1 MB。支持存储字符串数据。
     * @param integer $Expiration 过期时间，绝对时间。表示从 1970 年 1 月 1 日（UTC/GMT 的午夜）开始所经过的秒数，不能小于当前时间。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
     * @param integer $ExpirationTTL 过期时间，相对时间，单位为秒。表示数据将在指定秒数后过期，必须大于 0。若 Expiration 和 ExpirationTTL 都填写，以 ExpirationTTL 为准。若 Expiration 和 ExpirationTTL 都不填写，则该键值对永不过期。
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
