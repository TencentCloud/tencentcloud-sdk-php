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
 * DescribeRecordTask请求参数结构体
 *
 * @method integer getSdkAppId() 获取学校ID
 * @method void setSdkAppId(integer $SdkAppId) 设置学校ID
 * @method integer getRoomId() 获取房间ID
 * @method void setRoomId(integer $RoomId) 设置房间ID
 */
class DescribeRecordTaskRequest extends AbstractModel
{
    /**
     * @var integer 学校ID
     */
    public $SdkAppId;

    /**
     * @var integer 房间ID
     */
    public $RoomId;

    /**
     * @param integer $SdkAppId 学校ID
     * @param integer $RoomId 房间ID
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
