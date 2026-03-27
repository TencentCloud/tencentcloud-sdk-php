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
 * CreateApiKey返回参数结构体
 *
 * @method string getKeyId() 获取API Key 的唯一标识符，由系统基于 JWT Access Token Hash 自动生成。后续对该 API Key 进行查询、修改名称或删除操作时，均需使用该值作为定位参数
 * @method void setKeyId(string $KeyId) 设置API Key 的唯一标识符，由系统基于 JWT Access Token Hash 自动生成。后续对该 API Key 进行查询、修改名称或删除操作时，均需使用该值作为定位参数
 * @method string getName() 获取API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
 * @method void setName(string $Name) 设置API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
 * @method string getApiKey() 获取API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKey(string $ApiKey) 设置API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireAt() 获取API Key 的过期时间。对于 api_key 类型：若创建时未指定有效期，则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为 2099 年
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireAt(string $ExpireAt) 设置API Key 的过期时间。对于 api_key 类型：若创建时未指定有效期，则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为 2099 年
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateAt() 获取API Key 的创建时间。对于 api_key 类型：为实际创建该 Key 时的时间。对于 publish_key 类型：若环境下已存在 publish_key，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateAt(string $CreateAt) 设置API Key 的创建时间。对于 api_key 类型：为实际创建该 Key 时的时间。对于 publish_key 类型：若环境下已存在 publish_key，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateApiKeyResponse extends AbstractModel
{
    /**
     * @var string API Key 的唯一标识符，由系统基于 JWT Access Token Hash 自动生成。后续对该 API Key 进行查询、修改名称或删除操作时，均需使用该值作为定位参数
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
     * @var string API Key 的过期时间。对于 api_key 类型：若创建时未指定有效期，则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为 2099 年
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireAt;

    /**
     * @var string API Key 的创建时间。对于 api_key 类型：为实际创建该 Key 时的时间。对于 publish_key 类型：若环境下已存在 publish_key，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId API Key 的唯一标识符，由系统基于 JWT Access Token Hash 自动生成。后续对该 API Key 进行查询、修改名称或删除操作时，均需使用该值作为定位参数
     * @param string $Name API Key 的名称，即创建时传入的 KeyName 参数值。对于 publish_key 类型，该值固定为 publish_key
     * @param string $ApiKey API Key 的令牌值（JWT 格式），用于服务端接口调用时的身份认证。出于安全考虑，仅在创建时返回一次完整明文；后续通过列表查询接口获取时，api_key 类型将进行脱敏处理；publish_key 类型始终返回完整明文。请在创建后妥善保存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireAt API Key 的过期时间。对于 api_key 类型：若创建时未指定有效期，则该字段不返回，表示永不过期；若指定了有效期，则返回具体的过期时间。对于 publish_key 类型：始终返回，固定为 2099 年
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateAt API Key 的创建时间。对于 api_key 类型：为实际创建该 Key 时的时间。对于 publish_key 类型：若环境下已存在 publish_key，则返回首次创建的时间而非本次调用时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
