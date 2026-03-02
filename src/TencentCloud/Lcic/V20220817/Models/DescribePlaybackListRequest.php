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
 * DescribePlaybackList请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>低代码平台的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码平台的SdkAppId。</p>
 * @method integer getRoomId() 获取<p>房间ID</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间ID</p>
 * @method integer getPage() 获取<p>分页查询当前页数，从1开始递增</p>
 * @method void setPage(integer $Page) 设置<p>分页查询当前页数，从1开始递增</p>
 * @method integer getLimit() 获取<p>默认10条，最大上限为100条</p>
 * @method void setLimit(integer $Limit) 设置<p>默认10条，最大上限为100条</p>
 */
class DescribePlaybackListRequest extends AbstractModel
{
    /**
     * @var integer <p>低代码平台的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>房间ID</p>
     */
    public $RoomId;

    /**
     * @var integer <p>分页查询当前页数，从1开始递增</p>
     */
    public $Page;

    /**
     * @var integer <p>默认10条，最大上限为100条</p>
     */
    public $Limit;

    /**
     * @param integer $SdkAppId <p>低代码平台的SdkAppId。</p>
     * @param integer $RoomId <p>房间ID</p>
     * @param integer $Page <p>分页查询当前页数，从1开始递增</p>
     * @param integer $Limit <p>默认10条，最大上限为100条</p>
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
