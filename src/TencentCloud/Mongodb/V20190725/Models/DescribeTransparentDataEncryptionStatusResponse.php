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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTransparentDataEncryptionStatus返回参数结构体
 *
 * @method string getTransparentDataEncryptionStatus() 获取表示是否开启了透明加密。 
- close：未开启。
- open：已开启。
 * @method void setTransparentDataEncryptionStatus(string $TransparentDataEncryptionStatus) 设置表示是否开启了透明加密。 
- close：未开启。
- open：已开启。
 * @method array getKeyInfoList() 获取已绑定的密钥列表，如未绑定，返回null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyInfoList(array $KeyInfoList) 设置已绑定的密钥列表，如未绑定，返回null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTransparentDataEncryptionStatusResponse extends AbstractModel
{
    /**
     * @var string 表示是否开启了透明加密。 
- close：未开启。
- open：已开启。
     */
    public $TransparentDataEncryptionStatus;

    /**
     * @var array 已绑定的密钥列表，如未绑定，返回null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyInfoList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TransparentDataEncryptionStatus 表示是否开启了透明加密。 
- close：未开启。
- open：已开启。
     * @param array $KeyInfoList 已绑定的密钥列表，如未绑定，返回null。
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
        if (array_key_exists("TransparentDataEncryptionStatus",$param) and $param["TransparentDataEncryptionStatus"] !== null) {
            $this->TransparentDataEncryptionStatus = $param["TransparentDataEncryptionStatus"];
        }

        if (array_key_exists("KeyInfoList",$param) and $param["KeyInfoList"] !== null) {
            $this->KeyInfoList = [];
            foreach ($param["KeyInfoList"] as $key => $value){
                $obj = new KMSInfoDetail();
                $obj->deserialize($value);
                array_push($this->KeyInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
