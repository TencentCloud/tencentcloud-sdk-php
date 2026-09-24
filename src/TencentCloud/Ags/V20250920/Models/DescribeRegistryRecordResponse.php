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
 * DescribeRegistryRecord返回参数结构体
 *
 * @method CloudRecord getRecord() 获取<p>Record 元数据和全部 Label。</p>
 * @method void setRecord(CloudRecord $Record) 设置<p>Record 元数据和全部 Label。</p>
 * @method CloudRecordVersion getVersion() 获取<p>根据 VersionId / Label 解析得到的完整 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(CloudRecordVersion $Version) 设置<p>根据 VersionId / Label 解析得到的完整 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResolvedBy() 获取<p>解析方式：DEFAULT_STABLE / LABEL / VERSION_ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolvedBy(string $ResolvedBy) 设置<p>解析方式：DEFAULT_STABLE / LABEL / VERSION_ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResolvedLabel() 获取<p>通过 Label 解析（ResolvedBy=LABEL 或 DEFAULT_STABLE）时返回该 Label 名称，例如 stable。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolvedLabel(string $ResolvedLabel) 设置<p>通过 Label 解析（ResolvedBy=LABEL 或 DEFAULT_STABLE）时返回该 Label 名称，例如 stable。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRegistryRecordResponse extends AbstractModel
{
    /**
     * @var CloudRecord <p>Record 元数据和全部 Label。</p>
     */
    public $Record;

    /**
     * @var CloudRecordVersion <p>根据 VersionId / Label 解析得到的完整 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>解析方式：DEFAULT_STABLE / LABEL / VERSION_ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResolvedBy;

    /**
     * @var string <p>通过 Label 解析（ResolvedBy=LABEL 或 DEFAULT_STABLE）时返回该 Label 名称，例如 stable。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResolvedLabel;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CloudRecord $Record <p>Record 元数据和全部 Label。</p>
     * @param CloudRecordVersion $Version <p>根据 VersionId / Label 解析得到的完整 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResolvedBy <p>解析方式：DEFAULT_STABLE / LABEL / VERSION_ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResolvedLabel <p>通过 Label 解析（ResolvedBy=LABEL 或 DEFAULT_STABLE）时返回该 Label 名称，例如 stable。</p>
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
        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = new CloudRecord();
            $this->Record->deserialize($param["Record"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new CloudRecordVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("ResolvedBy",$param) and $param["ResolvedBy"] !== null) {
            $this->ResolvedBy = $param["ResolvedBy"];
        }

        if (array_key_exists("ResolvedLabel",$param) and $param["ResolvedLabel"] !== null) {
            $this->ResolvedLabel = $param["ResolvedLabel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
