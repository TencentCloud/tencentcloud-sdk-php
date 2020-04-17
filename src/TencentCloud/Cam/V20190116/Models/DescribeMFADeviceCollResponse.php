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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMFADeviceColl返回参数结构体
 *
 * @method integer getStatus() 获取Token状态
 * @method void setStatus(integer $Status) 设置Token状态
 * @method string getTokenSn() 获取Token值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenSn(string $TokenSn) 设置Token值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenType() 获取token类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenType(integer $TokenType) 设置token类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMFADeviceCollResponse extends AbstractModel
{
    /**
     * @var integer Token状态
     */
    public $Status;

    /**
     * @var string Token值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenSn;

    /**
     * @var integer token类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status Token状态
     * @param string $TokenSn Token值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenType token类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TokenSn",$param) and $param["TokenSn"] !== null) {
            $this->TokenSn = $param["TokenSn"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
