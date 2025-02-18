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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网访问信息
 *
 * @method string getPublicAccessEndpoint() 获取公网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) 设置公网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicDataStreamStatus() 获取公网状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicDataStreamStatus(string $PublicDataStreamStatus) 设置公网状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQServerlessAccessInfo extends AbstractModel
{
    /**
     * @var string 公网域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEndpoint;

    /**
     * @var string 公网状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicDataStreamStatus;

    /**
     * @param string $PublicAccessEndpoint 公网域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicDataStreamStatus 公网状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("PublicDataStreamStatus",$param) and $param["PublicDataStreamStatus"] !== null) {
            $this->PublicDataStreamStatus = $param["PublicDataStreamStatus"];
        }
    }
}
