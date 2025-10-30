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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStaffStatusHistory请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getStaffUserId() 获取座席账号
 * @method void setStaffUserId(string $StaffUserId) 设置座席账号
 * @method integer getStartTimestamp() 获取起始时间戳，Unix 秒级时间戳，最大支持近180天。
 * @method void setStartTimestamp(integer $StartTimestamp) 设置起始时间戳，Unix 秒级时间戳，最大支持近180天。
 * @method integer getEndTimestamp() 获取结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于 7 天。
 * @method void setEndTimestamp(integer $EndTimestamp) 设置结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于 7 天。
 * @method string getCursor() 获取分页检索时使用的游标
 * @method void setCursor(string $Cursor) 设置分页检索时使用的游标
 * @method integer getPageSize() 获取分页尺寸
 * @method void setPageSize(integer $PageSize) 设置分页尺寸
 */
class DescribeStaffStatusHistoryRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 座席账号
     */
    public $StaffUserId;

    /**
     * @var integer 起始时间戳，Unix 秒级时间戳，最大支持近180天。
     */
    public $StartTimestamp;

    /**
     * @var integer 结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于 7 天。
     */
    public $EndTimestamp;

    /**
     * @var string 分页检索时使用的游标
     */
    public $Cursor;

    /**
     * @var integer 分页尺寸
     */
    public $PageSize;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $StaffUserId 座席账号
     * @param integer $StartTimestamp 起始时间戳，Unix 秒级时间戳，最大支持近180天。
     * @param integer $EndTimestamp 结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于 7 天。
     * @param string $Cursor 分页检索时使用的游标
     * @param integer $PageSize 分页尺寸
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

        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
