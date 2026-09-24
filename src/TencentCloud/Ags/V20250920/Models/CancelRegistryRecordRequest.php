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
 * CancelRegistryRecord请求参数结构体
 *
 * @method string getRegistryId() 获取<p>父 Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>父 Registry ID。</p>
 * @method string getRecordId() 获取<p>Record ID。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。</p>
 * @method string getVersionId() 获取<p>Version ID。</p>
 * @method void setVersionId(string $VersionId) 设置<p>Version ID。</p>
 * @method string getComment() 获取<p>动作留言；非空。</p>
 * @method void setComment(string $Comment) 设置<p>动作留言；非空。</p>
 */
class CancelRegistryRecordRequest extends AbstractModel
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
     * @var string <p>Version ID。</p>
     */
    public $VersionId;

    /**
     * @var string <p>动作留言；非空。</p>
     */
    public $Comment;

    /**
     * @param string $RegistryId <p>父 Registry ID。</p>
     * @param string $RecordId <p>Record ID。</p>
     * @param string $VersionId <p>Version ID。</p>
     * @param string $Comment <p>动作留言；非空。</p>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
