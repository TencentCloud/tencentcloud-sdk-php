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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRegistryRecord请求参数结构体
 *
 * @method string getRegistryId() 获取<p>父 Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>父 Registry ID。</p>
 * @method string getRecordId() 获取<p>Record ID。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。</p>
 * @method string getVersionId() 获取<p>可选。传入时只删除 Record 下指定 Version（软删除）；省略时删除整个 Record。显式传入空字符串或 null 返回 InvalidParameter.VersionId，不得回退为删除整个 Record。</p>
 * @method void setVersionId(string $VersionId) 设置<p>可选。传入时只删除 Record 下指定 Version（软删除）；省略时删除整个 Record。显式传入空字符串或 null 返回 InvalidParameter.VersionId，不得回退为删除整个 Record。</p>
 * @method string getReason() 获取<p>删除原因，最大 1024 字符。删除单个 Version 时必填；删除整个 Record 时可选。</p>
 * @method void setReason(string $Reason) 设置<p>删除原因，最大 1024 字符。删除单个 Version 时必填；删除整个 Record 时可选。</p>
 */
class DeleteRegistryRecordRequest extends AbstractModel
{
    /**
     * @var string <p>父 Registry ID。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record ID。</p>
     */
    public $RecordId;

    /**
     * @var string <p>可选。传入时只删除 Record 下指定 Version（软删除）；省略时删除整个 Record。显式传入空字符串或 null 返回 InvalidParameter.VersionId，不得回退为删除整个 Record。</p>
     */
    public $VersionId;

    /**
     * @var string <p>删除原因，最大 1024 字符。删除单个 Version 时必填；删除整个 Record 时可选。</p>
     */
    public $Reason;

    /**
     * @param string $RegistryId <p>父 Registry ID。</p>
     * @param string $RecordId <p>Record ID。</p>
     * @param string $VersionId <p>可选。传入时只删除 Record 下指定 Version（软删除）；省略时删除整个 Record。显式传入空字符串或 null 返回 InvalidParameter.VersionId，不得回退为删除整个 Record。</p>
     * @param string $Reason <p>删除原因，最大 1024 字符。删除单个 Version 时必填；删除整个 Record 时可选。</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
