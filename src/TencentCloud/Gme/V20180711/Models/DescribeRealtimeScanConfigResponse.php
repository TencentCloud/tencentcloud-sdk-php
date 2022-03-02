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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealtimeScanConfig返回参数结构体
 *
 * @method integer getErrorCode() 获取返回结果码，0正常，非0失败
 * @method void setErrorCode(integer $ErrorCode) 设置返回结果码，0正常，非0失败
 * @method integer getBizId() 获取应用ID
 * @method void setBizId(integer $BizId) 设置应用ID
 * @method integer getAuditType() 获取送检类型，0: 全量送审，1: 自定义送审
 * @method void setAuditType(integer $AuditType) 设置送检类型，0: 全量送审，1: 自定义送审
 * @method array getUserIdRegex() 获取用户号正则表达式
 * @method void setUserIdRegex(array $UserIdRegex) 设置用户号正则表达式
 * @method array getRoomIdRegex() 获取房间号正则表达式
 * @method void setRoomIdRegex(array $RoomIdRegex) 设置房间号正则表达式
 * @method string getUserIdString() 获取用户号字符串，逗号分隔，示例："0001,0002,0003"
 * @method void setUserIdString(string $UserIdString) 设置用户号字符串，逗号分隔，示例："0001,0002,0003"
 * @method string getRoomIdString() 获取房间号字符串，逗号分隔，示例："0001,0002,0003"
 * @method void setRoomIdString(string $RoomIdString) 设置房间号字符串，逗号分隔，示例："0001,0002,0003"
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRealtimeScanConfigResponse extends AbstractModel
{
    /**
     * @var integer 返回结果码，0正常，非0失败
     */
    public $ErrorCode;

    /**
     * @var integer 应用ID
     */
    public $BizId;

    /**
     * @var integer 送检类型，0: 全量送审，1: 自定义送审
     */
    public $AuditType;

    /**
     * @var array 用户号正则表达式
     */
    public $UserIdRegex;

    /**
     * @var array 房间号正则表达式
     */
    public $RoomIdRegex;

    /**
     * @var string 用户号字符串，逗号分隔，示例："0001,0002,0003"
     */
    public $UserIdString;

    /**
     * @var string 房间号字符串，逗号分隔，示例："0001,0002,0003"
     */
    public $RoomIdString;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode 返回结果码，0正常，非0失败
     * @param integer $BizId 应用ID
     * @param integer $AuditType 送检类型，0: 全量送审，1: 自定义送审
     * @param array $UserIdRegex 用户号正则表达式
     * @param array $RoomIdRegex 房间号正则表达式
     * @param string $UserIdString 用户号字符串，逗号分隔，示例："0001,0002,0003"
     * @param string $RoomIdString 房间号字符串，逗号分隔，示例："0001,0002,0003"
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("AuditType",$param) and $param["AuditType"] !== null) {
            $this->AuditType = $param["AuditType"];
        }

        if (array_key_exists("UserIdRegex",$param) and $param["UserIdRegex"] !== null) {
            $this->UserIdRegex = $param["UserIdRegex"];
        }

        if (array_key_exists("RoomIdRegex",$param) and $param["RoomIdRegex"] !== null) {
            $this->RoomIdRegex = $param["RoomIdRegex"];
        }

        if (array_key_exists("UserIdString",$param) and $param["UserIdString"] !== null) {
            $this->UserIdString = $param["UserIdString"];
        }

        if (array_key_exists("RoomIdString",$param) and $param["RoomIdString"] !== null) {
            $this->RoomIdString = $param["RoomIdString"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
