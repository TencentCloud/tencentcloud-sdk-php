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
 * DeleteSecretVersion请求参数结构体
 *
 * @method string getSecretName() 获取<p>指定凭据名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>指定凭据名称。</p>
 * @method string getVersionId() 获取<p>指定该名称下需要删除的凭据的版本号。</p><p>仅支持删除自定义凭据版本。目标版本持有 Stage_Current 标签时返回 FailedOperation，须先通过 UpdateSecret 将标签迁移到其他已有版本。存在并发写入或轮转等操作、未取得共享写锁时返回 OperationDenied。</p>
 * @method void setVersionId(string $VersionId) 设置<p>指定该名称下需要删除的凭据的版本号。</p><p>仅支持删除自定义凭据版本。目标版本持有 Stage_Current 标签时返回 FailedOperation，须先通过 UpdateSecret 将标签迁移到其他已有版本。存在并发写入或轮转等操作、未取得共享写锁时返回 OperationDenied。</p>
 */
class DeleteSecretVersionRequest extends AbstractModel
{
    /**
     * @var string <p>指定凭据名称。</p>
     */
    public $SecretName;

    /**
     * @var string <p>指定该名称下需要删除的凭据的版本号。</p><p>仅支持删除自定义凭据版本。目标版本持有 Stage_Current 标签时返回 FailedOperation，须先通过 UpdateSecret 将标签迁移到其他已有版本。存在并发写入或轮转等操作、未取得共享写锁时返回 OperationDenied。</p>
     */
    public $VersionId;

    /**
     * @param string $SecretName <p>指定凭据名称。</p>
     * @param string $VersionId <p>指定该名称下需要删除的凭据的版本号。</p><p>仅支持删除自定义凭据版本。目标版本持有 Stage_Current 标签时返回 FailedOperation，须先通过 UpdateSecret 将标签迁移到其他已有版本。存在并发写入或轮转等操作、未取得共享写锁时返回 OperationDenied。</p>
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
    }
}
