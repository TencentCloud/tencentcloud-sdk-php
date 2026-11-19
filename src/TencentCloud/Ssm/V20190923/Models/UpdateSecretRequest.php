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
 * UpdateSecret请求参数结构体
 *
 * @method string getSecretName() 获取<p>指定需要更新凭据内容的名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>指定需要更新凭据内容的名称。</p>
 * @method string getVersionId() 获取<p>指定需要更新内容或设置版本标签的已有版本号，必填。</p><p>指定 VersionStage 时，将该标签迁移到此版本。目标版本不存在返回 ResourceNotFound；凭据处于 PendingCreate 或 CreateFailed 状态时返回 FailedOperation。</p>
 * @method void setVersionId(string $VersionId) 设置<p>指定需要更新内容或设置版本标签的已有版本号，必填。</p><p>指定 VersionStage 时，将该标签迁移到此版本。目标版本不存在返回 ResourceNotFound；凭据处于 PendingCreate 或 CreateFailed 状态时返回 FailedOperation。</p>
 * @method string getSecretBinary() 获取<p>新的二进制凭据内容，须使用 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
 * @method void setSecretBinary(string $SecretBinary) 设置<p>新的二进制凭据内容，须使用 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
 * @method string getSecretString() 获取<p>新的文本凭据内容，无需 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
 * @method void setSecretString(string $SecretString) 设置<p>新的文本凭据内容，无需 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
 * @method string getVersionStage() 获取<p>将 Stage_Current 标签设置或迁移到 VersionId 指定的已有版本，大小写敏感。</p><p>入参限制：支持自定义、云产品及 Redis/MongoDB 凭据；VersionId 必填。</p><p>自定义凭据可仅设置标签，也可同时更新内容；SecretString 和 SecretBinary 不能同时非空。云产品及 Redis/MongoDB 仅支持标签操作，两项内容均须省略。标签绑定版本号，原轮转流程保持不变；绑定历史版本不保证账密仍有效。</p>
 * @method void setVersionStage(string $VersionStage) 设置<p>将 Stage_Current 标签设置或迁移到 VersionId 指定的已有版本，大小写敏感。</p><p>入参限制：支持自定义、云产品及 Redis/MongoDB 凭据；VersionId 必填。</p><p>自定义凭据可仅设置标签，也可同时更新内容；SecretString 和 SecretBinary 不能同时非空。云产品及 Redis/MongoDB 仅支持标签操作，两项内容均须省略。标签绑定版本号，原轮转流程保持不变；绑定历史版本不保证账密仍有效。</p>
 */
class UpdateSecretRequest extends AbstractModel
{
    /**
     * @var string <p>指定需要更新凭据内容的名称。</p>
     */
    public $SecretName;

    /**
     * @var string <p>指定需要更新内容或设置版本标签的已有版本号，必填。</p><p>指定 VersionStage 时，将该标签迁移到此版本。目标版本不存在返回 ResourceNotFound；凭据处于 PendingCreate 或 CreateFailed 状态时返回 FailedOperation。</p>
     */
    public $VersionId;

    /**
     * @var string <p>新的二进制凭据内容，须使用 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
     */
    public $SecretBinary;

    /**
     * @var string <p>新的文本凭据内容，无需 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
     */
    public $SecretString;

    /**
     * @var string <p>将 Stage_Current 标签设置或迁移到 VersionId 指定的已有版本，大小写敏感。</p><p>入参限制：支持自定义、云产品及 Redis/MongoDB 凭据；VersionId 必填。</p><p>自定义凭据可仅设置标签，也可同时更新内容；SecretString 和 SecretBinary 不能同时非空。云产品及 Redis/MongoDB 仅支持标签操作，两项内容均须省略。标签绑定版本号，原轮转流程保持不变；绑定历史版本不保证账密仍有效。</p>
     */
    public $VersionStage;

    /**
     * @param string $SecretName <p>指定需要更新凭据内容的名称。</p>
     * @param string $VersionId <p>指定需要更新内容或设置版本标签的已有版本号，必填。</p><p>指定 VersionStage 时，将该标签迁移到此版本。目标版本不存在返回 ResourceNotFound；凭据处于 PendingCreate 或 CreateFailed 状态时返回 FailedOperation。</p>
     * @param string $SecretBinary <p>新的二进制凭据内容，须使用 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
     * @param string $SecretString <p>新的文本凭据内容，无需 Base64 编码，仅自定义凭据支持通过本接口更新内容。</p><p>入参限制：未指定 VersionStage 时，SecretString 和 SecretBinary 必须且只能一个非空；指定 VersionStage 时可均不传以仅迁移标签，但不能同时非空。云产品及 Redis/MongoDB 凭据须省略两项内容。</p>
     * @param string $VersionStage <p>将 Stage_Current 标签设置或迁移到 VersionId 指定的已有版本，大小写敏感。</p><p>入参限制：支持自定义、云产品及 Redis/MongoDB 凭据；VersionId 必填。</p><p>自定义凭据可仅设置标签，也可同时更新内容；SecretString 和 SecretBinary 不能同时非空。云产品及 Redis/MongoDB 仅支持标签操作，两项内容均须省略。标签绑定版本号，原轮转流程保持不变；绑定历史版本不保证账密仍有效。</p>
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
