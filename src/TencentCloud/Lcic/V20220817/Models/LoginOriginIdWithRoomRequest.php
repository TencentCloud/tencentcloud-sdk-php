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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoginOriginIdWithRoom请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>低代码互动课堂的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码互动课堂的SdkAppId。</p>
 * @method string getOriginId() 获取<p>用户在客户系统的Id，需要在同一应用下唯一。</p>
 * @method void setOriginId(string $OriginId) 设置<p>用户在客户系统的Id，需要在同一应用下唯一。</p>
 * @method integer getRoomId() 获取<p>课堂 ID</p>
 * @method void setRoomId(integer $RoomId) 设置<p>课堂 ID</p>
 */
class LoginOriginIdWithRoomRequest extends AbstractModel
{
    /**
     * @var integer <p>低代码互动课堂的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>用户在客户系统的Id，需要在同一应用下唯一。</p>
     */
    public $OriginId;

    /**
     * @var integer <p>课堂 ID</p>
     */
    public $RoomId;

    /**
     * @param integer $SdkAppId <p>低代码互动课堂的SdkAppId。</p>
     * @param string $OriginId <p>用户在客户系统的Id，需要在同一应用下唯一。</p>
     * @param integer $RoomId <p>课堂 ID</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
