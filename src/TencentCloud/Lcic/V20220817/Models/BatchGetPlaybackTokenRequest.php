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
 * BatchGetPlaybackToken请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>低代码平台的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码平台的SdkAppId。</p>
 * @method array getRoomIds() 获取<p>房间ID。</p>
 * @method void setRoomIds(array $RoomIds) 设置<p>房间ID。</p>
 * @method integer getExpireSeconds() 获取<p>token过期时间，单位秒。如果传0则表示不过期</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>token过期时间，单位秒。如果传0则表示不过期</p>
 */
class BatchGetPlaybackTokenRequest extends AbstractModel
{
    /**
     * @var integer <p>低代码平台的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var array <p>房间ID。</p>
     */
    public $RoomIds;

    /**
     * @var integer <p>token过期时间，单位秒。如果传0则表示不过期</p>
     */
    public $ExpireSeconds;

    /**
     * @param integer $SdkAppId <p>低代码平台的SdkAppId。</p>
     * @param array $RoomIds <p>房间ID。</p>
     * @param integer $ExpireSeconds <p>token过期时间，单位秒。如果传0则表示不过期</p>
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

        if (array_key_exists("RoomIds",$param) and $param["RoomIds"] !== null) {
            $this->RoomIds = $param["RoomIds"];
        }

        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }
    }
}
