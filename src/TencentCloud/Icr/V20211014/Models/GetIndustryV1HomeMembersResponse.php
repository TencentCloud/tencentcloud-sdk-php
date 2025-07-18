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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetIndustryV1HomeMembers返回参数结构体
 *
 * @method RspMetadata getMetadata() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(RspMetadata $Metadata) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method GetIndustryV1HomeMembersRespPayload getPayload() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayload(GetIndustryV1HomeMembersRespPayload $Payload) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetIndustryV1HomeMembersResponse extends AbstractModel
{
    /**
     * @var RspMetadata 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var GetIndustryV1HomeMembersRespPayload 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Payload;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param RspMetadata $Metadata 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param GetIndustryV1HomeMembersRespPayload $Payload 无
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
        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new RspMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = new GetIndustryV1HomeMembersRespPayload();
            $this->Payload->deserialize($param["Payload"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
