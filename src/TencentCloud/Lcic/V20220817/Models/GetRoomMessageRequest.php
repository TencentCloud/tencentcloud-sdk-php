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
 * GetRoomMessage请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method integer getRoomId() 获取房间Id。	
 * @method void setRoomId(integer $RoomId) 设置房间Id。	
 * @method integer getSeq() 获取消息序列。获取该序列以前的消息(不包含该seq消息)
 * @method void setSeq(integer $Seq) 设置消息序列。获取该序列以前的消息(不包含该seq消息)
 * @method integer getLimit() 获取消息拉取的条数。最大数量不能超过套餐包限制。
 * @method void setLimit(integer $Limit) 设置消息拉取的条数。最大数量不能超过套餐包限制。
 */
class GetRoomMessageRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 房间Id。	
     */
    public $RoomId;

    /**
     * @var integer 消息序列。获取该序列以前的消息(不包含该seq消息)
     */
    public $Seq;

    /**
     * @var integer 消息拉取的条数。最大数量不能超过套餐包限制。
     */
    public $Limit;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param integer $RoomId 房间Id。	
     * @param integer $Seq 消息序列。获取该序列以前的消息(不包含该seq消息)
     * @param integer $Limit 消息拉取的条数。最大数量不能超过套餐包限制。
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

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
