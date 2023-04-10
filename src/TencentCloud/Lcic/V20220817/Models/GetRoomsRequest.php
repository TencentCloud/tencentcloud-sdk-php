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
 * GetRooms请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码平台的SdkAppId。

 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台的SdkAppId。

 * @method integer getStartTime() 获取开始时间。默认以当前时间减去半小时作为开始时间。
 * @method void setStartTime(integer $StartTime) 设置开始时间。默认以当前时间减去半小时作为开始时间。
 * @method integer getEndTime() 获取结束时间。默认以当前时间加上半小时作为结束时间。
 * @method void setEndTime(integer $EndTime) 设置结束时间。默认以当前时间加上半小时作为结束时间。
 * @method integer getPage() 获取分页查询当前页数，从1开始递增
 * @method void setPage(integer $Page) 设置分页查询当前页数，从1开始递增
 * @method integer getLimit() 获取默认是10条
 * @method void setLimit(integer $Limit) 设置默认是10条
 */
class GetRoomsRequest extends AbstractModel
{
    /**
     * @var integer 低代码平台的SdkAppId。

     */
    public $SdkAppId;

    /**
     * @var integer 开始时间。默认以当前时间减去半小时作为开始时间。
     */
    public $StartTime;

    /**
     * @var integer 结束时间。默认以当前时间加上半小时作为结束时间。
     */
    public $EndTime;

    /**
     * @var integer 分页查询当前页数，从1开始递增
     */
    public $Page;

    /**
     * @var integer 默认是10条
     */
    public $Limit;

    /**
     * @param integer $SdkAppId 低代码平台的SdkAppId。

     * @param integer $StartTime 开始时间。默认以当前时间减去半小时作为开始时间。
     * @param integer $EndTime 结束时间。默认以当前时间加上半小时作为结束时间。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
