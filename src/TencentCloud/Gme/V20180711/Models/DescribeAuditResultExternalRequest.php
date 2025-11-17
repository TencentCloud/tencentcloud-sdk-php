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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditResultExternal请求参数结构体
 *
 * @method integer getBizId() 获取应用 ID
 * @method void setBizId(integer $BizId) 设置应用 ID
 * @method integer getPageNo() 获取页数  取值范围：>=1
 * @method void setPageNo(integer $PageNo) 设置页数  取值范围：>=1
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method integer getBeginTime() 获取起始时间戳（秒）
 * @method void setBeginTime(integer $BeginTime) 设置起始时间戳（秒）
 * @method integer getEndTime() 获取截止时间戳（秒）
 * @method void setEndTime(integer $EndTime) 设置截止时间戳（秒）
 * @method integer getMinRate() 获取最小恶意分数
 * @method void setMinRate(integer $MinRate) 设置最小恶意分数
 * @method integer getMaxRate() 获取最大恶意分数
 * @method void setMaxRate(integer $MaxRate) 设置最大恶意分数
 * @method string getOpenId() 获取UserID
 * @method void setOpenId(string $OpenId) 设置UserID
 * @method string getLabel() 获取恶意分类
 * @method void setLabel(string $Label) 设置恶意分类
 * @method string getRoomId() 获取房间 ID
 * @method void setRoomId(string $RoomId) 设置房间 ID
 */
class DescribeAuditResultExternalRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID
     */
    public $BizId;

    /**
     * @var integer 页数  取值范围：>=1
     */
    public $PageNo;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var integer 起始时间戳（秒）
     */
    public $BeginTime;

    /**
     * @var integer 截止时间戳（秒）
     */
    public $EndTime;

    /**
     * @var integer 最小恶意分数
     */
    public $MinRate;

    /**
     * @var integer 最大恶意分数
     */
    public $MaxRate;

    /**
     * @var string UserID
     */
    public $OpenId;

    /**
     * @var string 恶意分类
     */
    public $Label;

    /**
     * @var string 房间 ID
     */
    public $RoomId;

    /**
     * @param integer $BizId 应用 ID
     * @param integer $PageNo 页数  取值范围：>=1
     * @param integer $PageSize 每页大小
     * @param integer $BeginTime 起始时间戳（秒）
     * @param integer $EndTime 截止时间戳（秒）
     * @param integer $MinRate 最小恶意分数
     * @param integer $MaxRate 最大恶意分数
     * @param string $OpenId UserID
     * @param string $Label 恶意分类
     * @param string $RoomId 房间 ID
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MinRate",$param) and $param["MinRate"] !== null) {
            $this->MinRate = $param["MinRate"];
        }

        if (array_key_exists("MaxRate",$param) and $param["MaxRate"] !== null) {
            $this->MaxRate = $param["MaxRate"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
