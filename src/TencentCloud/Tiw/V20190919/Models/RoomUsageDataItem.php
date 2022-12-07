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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 互动白板房间用量信息
 *
 * @method string getTime() 获取日期，格式为YYYY-MM-DD
 * @method void setTime(string $Time) 设置日期，格式为YYYY-MM-DD
 * @method integer getSdkAppId() 获取白板应用SDKAppID
 * @method void setSdkAppId(integer $SdkAppId) 设置白板应用SDKAppID
 * @method string getSubProduct() 获取互动白板子产品，请求参数传入的一致
- sp_tiw_board: 互动白板时长
- sp_tiw_ric: 实时录制时长
 * @method void setSubProduct(string $SubProduct) 设置互动白板子产品，请求参数传入的一致
- sp_tiw_board: 互动白板时长
- sp_tiw_ric: 实时录制时长
 * @method float getValue() 获取用量值
- 白板时长、实时录制时长单位为分钟
 * @method void setValue(float $Value) 设置用量值
- 白板时长、实时录制时长单位为分钟
 * @method integer getRoomID() 获取互动白板房间号
 * @method void setRoomID(integer $RoomID) 设置互动白板房间号
 */
class RoomUsageDataItem extends AbstractModel
{
    /**
     * @var string 日期，格式为YYYY-MM-DD
     */
    public $Time;

    /**
     * @var integer 白板应用SDKAppID
     */
    public $SdkAppId;

    /**
     * @var string 互动白板子产品，请求参数传入的一致
- sp_tiw_board: 互动白板时长
- sp_tiw_ric: 实时录制时长
     */
    public $SubProduct;

    /**
     * @var float 用量值
- 白板时长、实时录制时长单位为分钟
     */
    public $Value;

    /**
     * @var integer 互动白板房间号
     */
    public $RoomID;

    /**
     * @param string $Time 日期，格式为YYYY-MM-DD
     * @param integer $SdkAppId 白板应用SDKAppID
     * @param string $SubProduct 互动白板子产品，请求参数传入的一致
- sp_tiw_board: 互动白板时长
- sp_tiw_ric: 实时录制时长
     * @param float $Value 用量值
- 白板时长、实时录制时长单位为分钟
     * @param integer $RoomID 互动白板房间号
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SubProduct",$param) and $param["SubProduct"] !== null) {
            $this->SubProduct = $param["SubProduct"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("RoomID",$param) and $param["RoomID"] !== null) {
            $this->RoomID = $param["RoomID"];
        }
    }
}
