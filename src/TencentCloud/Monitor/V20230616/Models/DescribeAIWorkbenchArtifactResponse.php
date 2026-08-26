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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIWorkbenchArtifact返回参数结构体
 *
 * @method ArtifactInfo getArtifact() 获取<p>产物信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtifact(ArtifactInfo $Artifact) 设置<p>产物信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadURL() 获取<p>COS 预签名下载 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadURL(string $DownloadURL) 设置<p>COS 预签名下载 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadURLExpiredAt() 获取<p>下载 URL 过期时间（RFC3339 格式）</p>
 * @method void setDownloadURLExpiredAt(string $DownloadURLExpiredAt) 设置<p>下载 URL 过期时间（RFC3339 格式）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAIWorkbenchArtifactResponse extends AbstractModel
{
    /**
     * @var ArtifactInfo <p>产物信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Artifact;

    /**
     * @var string <p>COS 预签名下载 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadURL;

    /**
     * @var string <p>下载 URL 过期时间（RFC3339 格式）</p>
     */
    public $DownloadURLExpiredAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ArtifactInfo $Artifact <p>产物信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadURL <p>COS 预签名下载 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadURLExpiredAt <p>下载 URL 过期时间（RFC3339 格式）</p>
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
        if (array_key_exists("Artifact",$param) and $param["Artifact"] !== null) {
            $this->Artifact = new ArtifactInfo();
            $this->Artifact->deserialize($param["Artifact"]);
        }

        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("DownloadURLExpiredAt",$param) and $param["DownloadURLExpiredAt"] !== null) {
            $this->DownloadURLExpiredAt = $param["DownloadURLExpiredAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
