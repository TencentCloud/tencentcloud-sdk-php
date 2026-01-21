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
 * CreateGroupLiveCodes请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>低代码互动课堂的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码互动课堂的SdkAppId。</p>
 * @method integer getRoomId() 获取<p>房间ID。</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间ID。</p>
 * @method integer getNumber() 获取<p>分组数量。注：最大数量限制为30</p>
 * @method void setNumber(integer $Number) 设置<p>分组数量。注：最大数量限制为30</p>
 */
class CreateGroupLiveCodesRequest extends AbstractModel
{
    /**
     * @var integer <p>低代码互动课堂的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>房间ID。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>分组数量。注：最大数量限制为30</p>
     */
    public $Number;

    /**
     * @param integer $SdkAppId <p>低代码互动课堂的SdkAppId。</p>
     * @param integer $RoomId <p>房间ID。</p>
     * @param integer $Number <p>分组数量。注：最大数量限制为30</p>
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
