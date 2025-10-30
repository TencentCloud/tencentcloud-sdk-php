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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVipUserInfo返回参数结构体
 *
 * @method integer getIsVip() 获取是否是会员。（0:不是会员 1:是会员）
 * @method void setIsVip(integer $IsVip) 设置是否是会员。（0:不是会员 1:是会员）
 * @method string getAnchorId() 获取主播id
 * @method void setAnchorId(string $AnchorId) 设置主播id
 * @method string getRoomId() 获取房间id
 * @method void setRoomId(string $RoomId) 设置房间id
 * @method string getEndTime() 获取会员过期时间
 * @method void setEndTime(string $EndTime) 设置会员过期时间
 * @method integer getStatus() 获取会员状态。（-1:未开通过；1:已开通，未过期；2:已开通，已过期）
 * @method void setStatus(integer $Status) 设置会员状态。（-1:未开通过；1:已开通，未过期；2:已开通，已过期）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVipUserInfoResponse extends AbstractModel
{
    /**
     * @var integer 是否是会员。（0:不是会员 1:是会员）
     */
    public $IsVip;

    /**
     * @var string 主播id
     */
    public $AnchorId;

    /**
     * @var string 房间id
     */
    public $RoomId;

    /**
     * @var string 会员过期时间
     */
    public $EndTime;

    /**
     * @var integer 会员状态。（-1:未开通过；1:已开通，未过期；2:已开通，已过期）
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IsVip 是否是会员。（0:不是会员 1:是会员）
     * @param string $AnchorId 主播id
     * @param string $RoomId 房间id
     * @param string $EndTime 会员过期时间
     * @param integer $Status 会员状态。（-1:未开通过；1:已开通，未过期；2:已开通，已过期）
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
        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
