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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API Key 访问凭证信息。描述云开发环境下 API Key 的完整信息，包括标识符、名称、令牌值、创建时间和过期时间。支持两种类型：api_key（服务端管理员访问凭证，用于服务端接口调用的身份认证，可设置有效期，单个环境最多 5 个）和 publish_key（前端匿名访问凭证，固定有效期，每个环境仅保留一个）。注意：令牌值（ApiKey 字段）仅在创建时返回完整明文，列表查询时将进行脱敏处理。
 *
 * @method string getKeyId() 获取API Key 的唯一标识符，由系统基于 UUID 自动生成的 Base64 URL 编码字符串。后续对该 API Key 进行删除、修改名称或精确查询操作时，均需使用该值作为定位参数
 * @method void setKeyId(string $KeyId) 设置API Key 的唯一标识符，由系统基于 UUID 自动生成的 Base64 URL 编码字符串。后续对该 API Key 进行删除、修改名称或精确查询操作时，均需使用该值作为定位参数
 * @method string getName() 获取API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
 * @method void setName(string $Name) 设置API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
 * @method string getApiKey() 获取API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKey(string $ApiKey) 设置API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireAt() 获取API Key 的过期时间，格式遵循 ISO 8601 标准。对于 api_key 类型：若创建时未指定有效期（ExpireIn），则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为约 2099 年
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireAt(string $ExpireAt) 设置API Key 的过期时间，格式遵循 ISO 8601 标准。对于 api_key 类型：若创建时未指定有效期（ExpireIn），则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为约 2099 年
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateAt() 获取API Key 的创建时间，格式遵循 ISO 8601 标准。对于 api_key 类型：为该 Key 实际创建时的时间。对于 publish_key 类型：若环境下已存在 publish_key 记录，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateAt(string $CreateAt) 设置API Key 的创建时间，格式遵循 ISO 8601 标准。对于 api_key 类型：为该 Key 实际创建时的时间。对于 publish_key 类型：若环境下已存在 publish_key 记录，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiKeyToken extends AbstractModel
{
    /**
     * @var string API Key 的唯一标识符，由系统基于 UUID 自动生成的 Base64 URL 编码字符串。后续对该 API Key 进行删除、修改名称或精确查询操作时，均需使用该值作为定位参数
     */
    public $KeyId;

    /**
     * @var string API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
     */
    public $Name;

    /**
     * @var string API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKey;

    /**
     * @var string API Key 的过期时间，格式遵循 ISO 8601 标准。对于 api_key 类型：若创建时未指定有效期（ExpireIn），则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为约 2099 年
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireAt;

    /**
     * @var string API Key 的创建时间，格式遵循 ISO 8601 标准。对于 api_key 类型：为该 Key 实际创建时的时间。对于 publish_key 类型：若环境下已存在 publish_key 记录，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateAt;

    /**
     * @param string $KeyId API Key 的唯一标识符，由系统基于 UUID 自动生成的 Base64 URL 编码字符串。后续对该 API Key 进行删除、修改名称或精确查询操作时，均需使用该值作为定位参数
     * @param string $Name API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
     * @param string $ApiKey API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireAt API Key 的过期时间，格式遵循 ISO 8601 标准。对于 api_key 类型：若创建时未指定有效期（ExpireIn），则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为约 2099 年
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateAt API Key 的创建时间，格式遵循 ISO 8601 标准。对于 api_key 类型：为该 Key 实际创建时的时间。对于 publish_key 类型：若环境下已存在 publish_key 记录，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }
    }
}
