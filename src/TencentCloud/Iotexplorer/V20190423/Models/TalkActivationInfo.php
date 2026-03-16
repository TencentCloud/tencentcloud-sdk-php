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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Talk设备激活信息。
 *
 * @method string getDeviceId() 获取设备ID，产品ID_设备名称
 * @method void setDeviceId(string $DeviceId) 设置设备ID，产品ID_设备名称
 * @method integer getErrCode() 获取设备激活状态，0：激活成功；60001：激活码类型不匹配；60002：激活码数量不足；60003：设备不存在；60004：产品不存在；60005：权限不足；60006：设备已激活；60007：无效的参数；60008：系统错误；60009：产品不是码音视频类型
 * @method void setErrCode(integer $ErrCode) 设置设备激活状态，0：激活成功；60001：激活码类型不匹配；60002：激活码数量不足；60003：设备不存在；60004：产品不存在；60005：权限不足；60006：设备已激活；60007：无效的参数；60008：系统错误；60009：产品不是码音视频类型
 * @method string getErrMessage() 获取激活错误信息
 * @method void setErrMessage(string $ErrMessage) 设置激活错误信息
 * @method integer getExpireTime() 获取过期时间，秒级时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，秒级时间戳
 */
class TalkActivationInfo extends AbstractModel
{
    /**
     * @var string 设备ID，产品ID_设备名称
     */
    public $DeviceId;

    /**
     * @var integer 设备激活状态，0：激活成功；60001：激活码类型不匹配；60002：激活码数量不足；60003：设备不存在；60004：产品不存在；60005：权限不足；60006：设备已激活；60007：无效的参数；60008：系统错误；60009：产品不是码音视频类型
     */
    public $ErrCode;

    /**
     * @var string 激活错误信息
     */
    public $ErrMessage;

    /**
     * @var integer 过期时间，秒级时间戳
     */
    public $ExpireTime;

    /**
     * @param string $DeviceId 设备ID，产品ID_设备名称
     * @param integer $ErrCode 设备激活状态，0：激活成功；60001：激活码类型不匹配；60002：激活码数量不足；60003：设备不存在；60004：产品不存在；60005：权限不足；60006：设备已激活；60007：无效的参数；60008：系统错误；60009：产品不是码音视频类型
     * @param string $ErrMessage 激活错误信息
     * @param integer $ExpireTime 过期时间，秒级时间戳
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
