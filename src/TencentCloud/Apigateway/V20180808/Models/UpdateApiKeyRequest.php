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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApiKey请求参数结构体
 *
 * @method string getAccessKeyId() 获取待更换的密钥 ID。
 * @method void setAccessKeyId(string $AccessKeyId) 设置待更换的密钥 ID。
 * @method string getAccessKeySecret() 获取待更换的密钥 Key，更新自定义密钥时，该字段为必传。长度10 - 50字符，包括字母、数字、英文下划线。
 * @method void setAccessKeySecret(string $AccessKeySecret) 设置待更换的密钥 Key，更新自定义密钥时，该字段为必传。长度10 - 50字符，包括字母、数字、英文下划线。
 */
class UpdateApiKeyRequest extends AbstractModel
{
    /**
     * @var string 待更换的密钥 ID。
     */
    public $AccessKeyId;

    /**
     * @var string 待更换的密钥 Key，更新自定义密钥时，该字段为必传。长度10 - 50字符，包括字母、数字、英文下划线。
     */
    public $AccessKeySecret;

    /**
     * @param string $AccessKeyId 待更换的密钥 ID。
     * @param string $AccessKeySecret 待更换的密钥 Key，更新自定义密钥时，该字段为必传。长度10 - 50字符，包括字母、数字、英文下划线。
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
        if (array_key_exists('AccessKeyId',$param) and $param['AccessKeyId'] !== null) {
            $this->AccessKeyId = $param['AccessKeyId'];
        }

        if (array_key_exists('AccessKeySecret',$param) and $param['AccessKeySecret'] !== null) {
            $this->AccessKeySecret = $param['AccessKeySecret'];
        }
    }
}
