<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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

namespace TencentCloud\Kms\V20190118;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Kms\V20190118\Models as Models;

/**
* @method Models\CancelKeyDeletionResponse CancelKeyDeletion(Models\CancelKeyDeletionRequest $req) 取消CMK的计划删除操作
* @method Models\CreateKeyResponse CreateKey(Models\CreateKeyRequest $req) 创建用户管理数据密钥的主密钥CMK（Custom Master Key）。
* @method Models\DecryptResponse Decrypt(Models\DecryptRequest $req) 本接口用于解密密文，得到明文数据。
* @method Models\DescribeKeyResponse DescribeKey(Models\DescribeKeyRequest $req) 用于获取指定KeyId的主密钥属性详情信息。
* @method Models\DescribeKeysResponse DescribeKeys(Models\DescribeKeysRequest $req) 该接口用于批量获取主密钥属性信息。
* @method Models\DisableKeyResponse DisableKey(Models\DisableKeyRequest $req) 本接口用于禁用一个主密钥，处于禁用状态的Key无法用于加密、解密操作。
* @method Models\DisableKeyRotationResponse DisableKeyRotation(Models\DisableKeyRotationRequest $req) 对指定的CMK禁止密钥轮换功能。
* @method Models\DisableKeysResponse DisableKeys(Models\DisableKeysRequest $req) 该接口用于批量禁止CMK的使用。
* @method Models\EnableKeyResponse EnableKey(Models\EnableKeyRequest $req) 用于启用一个指定的CMK。
* @method Models\EnableKeyRotationResponse EnableKeyRotation(Models\EnableKeyRotationRequest $req) 对指定的CMK开启密钥轮换功能。
* @method Models\EnableKeysResponse EnableKeys(Models\EnableKeysRequest $req) 该接口用于批量启用CMK。
* @method Models\EncryptResponse Encrypt(Models\EncryptRequest $req) 本接口用于加密最多为4KB任意数据，可用于加密数据库密码，RSA Key，或其它较小的敏感信息。对于应用的数据加密，使用GenerateDataKey生成的DataKey进行本地数据的加解密操作
* @method Models\GenerateDataKeyResponse GenerateDataKey(Models\GenerateDataKeyRequest $req) 本接口生成一个数据密钥，您可以用这个密钥进行本地数据的加密。
* @method Models\GetKeyRotationStatusResponse GetKeyRotationStatus(Models\GetKeyRotationStatusRequest $req) 查询指定的CMK是否开启了密钥轮换功能。
* @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) 用于查询该用户是否已开通KMS服务
* @method Models\ListKeyDetailResponse ListKeyDetail(Models\ListKeyDetailRequest $req) 根据指定Offset和Limit获取主密钥列表详情。
* @method Models\ListKeysResponse ListKeys(Models\ListKeysRequest $req) 列出账号下面的密钥列表（KeyId信息）。
* @method Models\ReEncryptResponse ReEncrypt(Models\ReEncryptRequest $req) 使用指定CMK对密文重新加密。
* @method Models\ScheduleKeyDeletionResponse ScheduleKeyDeletion(Models\ScheduleKeyDeletionRequest $req) CMK计划删除接口，用于指定CMK删除的时间，可选时间区间为[7,30]天
* @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) 用于修改CMK的别名。
* @method Models\UpdateKeyDescriptionResponse UpdateKeyDescription(Models\UpdateKeyDescriptionRequest $req) 该接口用于对指定的cmk修改描述信息。
 */

class KmsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "kms.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-01-18";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("kms")."\\"."V20190118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
