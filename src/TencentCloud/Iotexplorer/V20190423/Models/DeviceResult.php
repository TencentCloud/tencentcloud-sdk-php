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
 * 批处理发布消息请求单台设备下发结果(仅失败情况下显示具体情况)
 *
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getStatus() 获取<p>设备状态</p><p>枚举值：</p><ul><li>SUCCESS： 下发成功    </li><li>PENDING： 存入离线存储</li><li>OFFLINE： 设备离线</li><li>FAILED： 下发失败</li><li>TIMEOUT： 下发超时</li></ul>
 * @method void setStatus(string $Status) 设置<p>设备状态</p><p>枚举值：</p><ul><li>SUCCESS： 下发成功    </li><li>PENDING： 存入离线存储</li><li>OFFLINE： 设备离线</li><li>FAILED： 下发失败</li><li>TIMEOUT： 下发超时</li></ul>
 * @method integer getErrCode() 获取<p>错误码</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码</p>
 * @method string getErrMsg() 获取<p>错误信息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息</p>
 */
class DeviceResult extends AbstractModel
{
    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>设备状态</p><p>枚举值：</p><ul><li>SUCCESS： 下发成功    </li><li>PENDING： 存入离线存储</li><li>OFFLINE： 设备离线</li><li>FAILED： 下发失败</li><li>TIMEOUT： 下发超时</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>错误码</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrMsg;

    /**
     * @param string $DeviceName <p>设备名称</p>
     * @param string $Status <p>设备状态</p><p>枚举值：</p><ul><li>SUCCESS： 下发成功    </li><li>PENDING： 存入离线存储</li><li>OFFLINE： 设备离线</li><li>FAILED： 下发失败</li><li>TIMEOUT： 下发超时</li></ul>
     * @param integer $ErrCode <p>错误码</p>
     * @param string $ErrMsg <p>错误信息</p>
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
