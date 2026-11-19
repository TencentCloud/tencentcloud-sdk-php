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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutSecretValue请求参数结构体
 *
 * @method string getSecretName() 获取<p>指定需要增加版本的凭据名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>指定需要增加版本的凭据名称。</p>
 * @method string getVersionId() 获取<p>指定新增凭据版本的版本号。可选，未指定时由系统生成 UUID v4，并通过响应 VersionId 返回。</p><p>参数格式：最长64字节，使用字母、数字或 - _ . 的组合，并以字母或数字开头。</p><p>省略 VersionId 的每次调用都会生成新版本。需要识别同一版本或处理重试时，由调用方生成并复用 VersionId；已有版本号返回 ResourceInUse.VersionIdExists。</p>
 * @method void setVersionId(string $VersionId) 设置<p>指定新增凭据版本的版本号。可选，未指定时由系统生成 UUID v4，并通过响应 VersionId 返回。</p><p>参数格式：最长64字节，使用字母、数字或 - _ . 的组合，并以字母或数字开头。</p><p>省略 VersionId 的每次调用都会生成新版本。需要识别同一版本或处理重试时，由调用方生成并复用 VersionId；已有版本号返回 ResourceInUse.VersionIdExists。</p>
 * @method string getSecretBinary() 获取<p>二进制凭据信息，使用base64编码。<br>SecretBinary 和 SecretString 必须且只能设置一个。</p>
 * @method void setSecretBinary(string $SecretBinary) 设置<p>二进制凭据信息，使用base64编码。<br>SecretBinary 和 SecretString 必须且只能设置一个。</p>
 * @method string getSecretString() 获取<p>文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。</p>
 * @method void setSecretString(string $SecretString) 设置<p>文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。</p>
 * @method string getVersionStage() 获取<p>为新增版本设置版本标签，仅支持 Stage_Current，大小写敏感。本接口仅支持自定义凭据。</p><p>入参限制：SecretString 和 SecretBinary 必须且只能指定一个非空值。</p>
 * @method void setVersionStage(string $VersionStage) 设置<p>为新增版本设置版本标签，仅支持 Stage_Current，大小写敏感。本接口仅支持自定义凭据。</p><p>入参限制：SecretString 和 SecretBinary 必须且只能指定一个非空值。</p>
 */
class PutSecretValueRequest extends AbstractModel
{
    /**
     * @var string <p>指定需要增加版本的凭据名称。</p>
     */
    public $SecretName;

    /**
     * @var string <p>指定新增凭据版本的版本号。可选，未指定时由系统生成 UUID v4，并通过响应 VersionId 返回。</p><p>参数格式：最长64字节，使用字母、数字或 - _ . 的组合，并以字母或数字开头。</p><p>省略 VersionId 的每次调用都会生成新版本。需要识别同一版本或处理重试时，由调用方生成并复用 VersionId；已有版本号返回 ResourceInUse.VersionIdExists。</p>
     */
    public $VersionId;

    /**
     * @var string <p>二进制凭据信息，使用base64编码。<br>SecretBinary 和 SecretString 必须且只能设置一个。</p>
     */
    public $SecretBinary;

    /**
     * @var string <p>文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。</p>
     */
    public $SecretString;

    /**
     * @var string <p>为新增版本设置版本标签，仅支持 Stage_Current，大小写敏感。本接口仅支持自定义凭据。</p><p>入参限制：SecretString 和 SecretBinary 必须且只能指定一个非空值。</p>
     */
    public $VersionStage;

    /**
     * @param string $SecretName <p>指定需要增加版本的凭据名称。</p>
     * @param string $VersionId <p>指定新增凭据版本的版本号。可选，未指定时由系统生成 UUID v4，并通过响应 VersionId 返回。</p><p>参数格式：最长64字节，使用字母、数字或 - _ . 的组合，并以字母或数字开头。</p><p>省略 VersionId 的每次调用都会生成新版本。需要识别同一版本或处理重试时，由调用方生成并复用 VersionId；已有版本号返回 ResourceInUse.VersionIdExists。</p>
     * @param string $SecretBinary <p>二进制凭据信息，使用base64编码。<br>SecretBinary 和 SecretString 必须且只能设置一个。</p>
     * @param string $SecretString <p>文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。</p>
     * @param string $VersionStage <p>为新增版本设置版本标签，仅支持 Stage_Current，大小写敏感。本接口仅支持自定义凭据。</p><p>入参限制：SecretString 和 SecretBinary 必须且只能指定一个非空值。</p>
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("SecretBinary",$param) and $param["SecretBinary"] !== null) {
            $this->SecretBinary = $param["SecretBinary"];
        }

        if (array_key_exists("SecretString",$param) and $param["SecretString"] !== null) {
            $this->SecretString = $param["SecretString"];
        }

        if (array_key_exists("VersionStage",$param) and $param["VersionStage"] !== null) {
            $this->VersionStage = $param["VersionStage"];
        }
    }
}
