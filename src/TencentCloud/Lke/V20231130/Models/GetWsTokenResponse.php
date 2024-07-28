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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWsToken返回参数结构体
 *
 * @method string getToken() 获取token值（有效期60s）
 * @method void setToken(string $Token) 设置token值（有效期60s）
 * @method float getBalance() 获取余额; 余额大于 0 时表示有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalance(float $Balance) 设置余额; 余额大于 0 时表示有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputLenLimit() 获取对话窗输入字符限制
 * @method void setInputLenLimit(integer $InputLenLimit) 设置对话窗输入字符限制
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetWsTokenResponse extends AbstractModel
{
    /**
     * @var string token值（有效期60s）
     */
    public $Token;

    /**
     * @var float 余额; 余额大于 0 时表示有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Balance;

    /**
     * @var integer 对话窗输入字符限制
     */
    public $InputLenLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Token token值（有效期60s）
     * @param float $Balance 余额; 余额大于 0 时表示有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputLenLimit 对话窗输入字符限制
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("InputLenLimit",$param) and $param["InputLenLimit"] !== null) {
            $this->InputLenLimit = $param["InputLenLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
