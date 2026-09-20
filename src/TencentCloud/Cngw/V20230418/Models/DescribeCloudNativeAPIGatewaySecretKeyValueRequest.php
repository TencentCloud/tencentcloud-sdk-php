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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewaySecretKeyValue请求参数结构体
 *
 * @method string getGatewayId() 获取实例 ID
 * @method void setGatewayId(string $GatewayId) 设置实例 ID
 * @method string getSecretKeyId() 获取密钥id
 * @method void setSecretKeyId(string $SecretKeyId) 设置密钥id
 * @method string getSecretValueType() 获取指定从 AKSK 或 CAM 成对凭证中返回哪一半。取值：AccessKey（AKSK 返回 AccessKeyId，CAM 返回 SecretId）、SecretKey（AKSK 返回 SecretAccessKey，CAM 返回 SecretKey）。不传则保持原行为，仅返回 AccessKeyId 或 SecretId。
 * @method void setSecretValueType(string $SecretValueType) 设置指定从 AKSK 或 CAM 成对凭证中返回哪一半。取值：AccessKey（AKSK 返回 AccessKeyId，CAM 返回 SecretId）、SecretKey（AKSK 返回 SecretAccessKey，CAM 返回 SecretKey）。不传则保持原行为，仅返回 AccessKeyId 或 SecretId。
 */
class DescribeCloudNativeAPIGatewaySecretKeyValueRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $GatewayId;

    /**
     * @var string 密钥id
     */
    public $SecretKeyId;

    /**
     * @var string 指定从 AKSK 或 CAM 成对凭证中返回哪一半。取值：AccessKey（AKSK 返回 AccessKeyId，CAM 返回 SecretId）、SecretKey（AKSK 返回 SecretAccessKey，CAM 返回 SecretKey）。不传则保持原行为，仅返回 AccessKeyId 或 SecretId。
     */
    public $SecretValueType;

    /**
     * @param string $GatewayId 实例 ID
     * @param string $SecretKeyId 密钥id
     * @param string $SecretValueType 指定从 AKSK 或 CAM 成对凭证中返回哪一半。取值：AccessKey（AKSK 返回 AccessKeyId，CAM 返回 SecretId）、SecretKey（AKSK 返回 SecretAccessKey，CAM 返回 SecretKey）。不传则保持原行为，仅返回 AccessKeyId 或 SecretId。
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }

        if (array_key_exists("SecretValueType",$param) and $param["SecretValueType"] !== null) {
            $this->SecretValueType = $param["SecretValueType"];
        }
    }
}
