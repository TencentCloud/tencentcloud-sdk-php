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
 * Talk激活审计信息。
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getActiveTime() 获取激活时间，秒级时间戳
 * @method void setActiveTime(integer $ActiveTime) 设置激活时间，秒级时间戳
 * @method integer getExpireTime() 获取过期时间，秒级时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，秒级时间戳
 * @method integer getServiceType() 获取TWeTalk类型：1-基础版；2-高级版；3-多模态；
 * @method void setServiceType(integer $ServiceType) 设置TWeTalk类型：1-基础版；2-高级版；3-多模态；
 * @method integer getStatus() 获取状态: 0-未激活, 1-已激活, 2-已过期, 3-已作废
 * @method void setStatus(integer $Status) 设置状态: 0-未激活, 1-已激活, 2-已过期, 3-已作废
 * @method string getErrorMsg() 获取错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
 */
class TalkActivateRecordLogInfo extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 激活时间，秒级时间戳
     */
    public $ActiveTime;

    /**
     * @var integer 过期时间，秒级时间戳
     */
    public $ExpireTime;

    /**
     * @var integer TWeTalk类型：1-基础版；2-高级版；3-多模态；
     */
    public $ServiceType;

    /**
     * @var integer 状态: 0-未激活, 1-已激活, 2-已过期, 3-已作废
     */
    public $Status;

    /**
     * @var string 错误信息
     */
    public $ErrorMsg;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param integer $ActiveTime 激活时间，秒级时间戳
     * @param integer $ExpireTime 过期时间，秒级时间戳
     * @param integer $ServiceType TWeTalk类型：1-基础版；2-高级版；3-多模态；
     * @param integer $Status 状态: 0-未激活, 1-已激活, 2-已过期, 3-已作废
     * @param string $ErrorMsg 错误信息
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
