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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRecord请求参数结构体
 *
 * @method integer getRoomId() 获取房间Id。
 * @method void setRoomId(integer $RoomId) 设置房间Id。
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。

 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 */
class DeleteRecordRequest extends AbstractModel
{
    /**
     * @var integer 房间Id。
     */
    public $RoomId;

    /**
     * @var integer 低代码互动课堂的SdkAppId。

     */
    public $SdkAppId;

    /**
     * @param integer $RoomId 房间Id。
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
