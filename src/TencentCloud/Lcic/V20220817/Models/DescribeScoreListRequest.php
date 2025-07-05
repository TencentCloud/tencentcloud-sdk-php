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
 * DescribeScoreList请求参数结构体
 *
 * @method integer getRoomId() 获取课堂ID
 * @method void setRoomId(integer $RoomId) 设置课堂ID
 * @method integer getPage() 获取分页查询当前页数，从1开始递增
 * @method void setPage(integer $Page) 设置分页查询当前页数，从1开始递增
 * @method integer getLimit() 获取默认是10条
 * @method void setLimit(integer $Limit) 设置默认是10条
 */
class DescribeScoreListRequest extends AbstractModel
{
    /**
     * @var integer 课堂ID
     */
    public $RoomId;

    /**
     * @var integer 分页查询当前页数，从1开始递增
     */
    public $Page;

    /**
     * @var integer 默认是10条
     */
    public $Limit;

    /**
     * @param integer $RoomId 课堂ID
     * @param integer $Page 分页查询当前页数，从1开始递增
     * @param integer $Limit 默认是10条
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
