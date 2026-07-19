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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ShareDeviceToUser返回参数结构体
 *
 * @method string getOwnerUserID() 获取<p>Owner 的 UserID</p>
 * @method void setOwnerUserID(string $OwnerUserID) 设置<p>Owner 的 UserID</p>
 * @method string getToUserID() 获取<p>被分享用户的 UserID</p>
 * @method void setToUserID(string $ToUserID) 设置<p>被分享用户的 UserID</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ShareDeviceToUserResponse extends AbstractModel
{
    /**
     * @var string <p>Owner 的 UserID</p>
     */
    public $OwnerUserID;

    /**
     * @var string <p>被分享用户的 UserID</p>
     */
    public $ToUserID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OwnerUserID <p>Owner 的 UserID</p>
     * @param string $ToUserID <p>被分享用户的 UserID</p>
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
        if (array_key_exists("OwnerUserID",$param) and $param["OwnerUserID"] !== null) {
            $this->OwnerUserID = $param["OwnerUserID"];
        }

        if (array_key_exists("ToUserID",$param) and $param["ToUserID"] !== null) {
            $this->ToUserID = $param["ToUserID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
