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
 * Talk激活状态响应定义。
 *
 * @method string getDeviceId() 获取设备ID，产品ID_设备名称
 * @method void setDeviceId(string $DeviceId) 设置设备ID，产品ID_设备名称
 * @method integer getExpireTime() 获取过期时间，秒级时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，秒级时间戳
 * @method integer getServiceType() 获取TWeTalk类型：1-基础版；2-高级版；3-多模态；
 * @method void setServiceType(integer $ServiceType) 设置TWeTalk类型：1-基础版；2-高级版；3-多模态；
 */
class TalkActivationStatusInfo extends AbstractModel
{
    /**
     * @var string 设备ID，产品ID_设备名称
     */
    public $DeviceId;

    /**
     * @var integer 过期时间，秒级时间戳
     */
    public $ExpireTime;

    /**
     * @var integer TWeTalk类型：1-基础版；2-高级版；3-多模态；
     */
    public $ServiceType;

    /**
     * @param string $DeviceId 设备ID，产品ID_设备名称
     * @param integer $ExpireTime 过期时间，秒级时间戳
     * @param integer $ServiceType TWeTalk类型：1-基础版；2-高级版；3-多模态；
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
