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
 * CreateRegistryRecord返回参数结构体
 *
 * @method string getRecordId() 获取<p>新 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置<p>新 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudRecord getRecord() 获取<p>新建的 Record 详情。</p>
 * @method void setRecord(CloudRecord $Record) 设置<p>新建的 Record 详情。</p>
 * @method CloudRecordVersion getVersion() 获取<p>本次创建的 Revision 1 Version 详情。</p>
 * @method void setVersion(CloudRecordVersion $Version) 设置<p>本次创建的 Revision 1 Version 详情。</p>
 * @method string getUploadURL() 获取<p>SkillSource.Type=TAR_PACKAGE 时返回：TAR 包上传预签名 URL。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadURL(string $UploadURL) 设置<p>SkillSource.Type=TAR_PACKAGE 时返回：TAR 包上传预签名 URL。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>SkillSource.Type=TAR_PACKAGE 时返回：UploadURL 过期时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>SkillSource.Type=TAR_PACKAGE 时返回：UploadURL 过期时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentStatus() 获取<p>SkillSource.Type=TAR_PACKAGE 时返回：Version 内容当前状态（UPLOADING 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentStatus(string $ContentStatus) 设置<p>SkillSource.Type=TAR_PACKAGE 时返回：Version 内容当前状态（UPLOADING 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateRegistryRecordResponse extends AbstractModel
{
    /**
     * @var string <p>新 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var CloudRecord <p>新建的 Record 详情。</p>
     */
    public $Record;

    /**
     * @var CloudRecordVersion <p>本次创建的 Revision 1 Version 详情。</p>
     */
    public $Version;

    /**
     * @var string <p>SkillSource.Type=TAR_PACKAGE 时返回：TAR 包上传预签名 URL。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadURL;

    /**
     * @var string <p>SkillSource.Type=TAR_PACKAGE 时返回：UploadURL 过期时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string <p>SkillSource.Type=TAR_PACKAGE 时返回：Version 内容当前状态（UPLOADING 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RecordId <p>新 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudRecord $Record <p>新建的 Record 详情。</p>
     * @param CloudRecordVersion $Version <p>本次创建的 Revision 1 Version 详情。</p>
     * @param string $UploadURL <p>SkillSource.Type=TAR_PACKAGE 时返回：TAR 包上传预签名 URL。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>SkillSource.Type=TAR_PACKAGE 时返回：UploadURL 过期时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentStatus <p>SkillSource.Type=TAR_PACKAGE 时返回：Version 内容当前状态（UPLOADING 等）。</p>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = new CloudRecord();
            $this->Record->deserialize($param["Record"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new CloudRecordVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("UploadURL",$param) and $param["UploadURL"] !== null) {
            $this->UploadURL = $param["UploadURL"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ContentStatus",$param) and $param["ContentStatus"] !== null) {
            $this->ContentStatus = $param["ContentStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
