<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCosToken返回参数结构体
 *
 * @method string getRegion() 获取cos地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置cos地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosTokenResponse getToken() 获取Token信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(CosTokenResponse $Token) 设置Token信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndPoint() 获取终止点（针对私有云环境）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPoint(string $EndPoint) 设置终止点（针对私有云环境）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetCosTokenResponse extends AbstractModel
{
    /**
     * @var string cos地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var CosTokenResponse Token信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 桶名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string 终止点（针对私有云环境）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPoint;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Region cos地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosTokenResponse $Token Token信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket 桶名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndPoint 终止点（针对私有云环境）
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = new CosTokenResponse();
            $this->Token->deserialize($param["Token"]);
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("EndPoint",$param) and $param["EndPoint"] !== null) {
            $this->EndPoint = $param["EndPoint"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
