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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备上下线日志记录
 *
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method string getType() 获取状态类型： Online 上线，Offline 下线
 * @method void setType(string $Type) 设置状态类型： Online 上线，Offline 下线
 * @method string getData() 获取日志信息
 * @method void setData(string $Data) 设置日志信息
 */
class DeviceStatusLogItem extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var string 状态类型： Online 上线，Offline 下线
     */
    public $Type;

    /**
     * @var string 日志信息
     */
    public $Data;

    /**
     * @param string $Time 时间
     * @param string $Type 状态类型： Online 上线，Offline 下线
     * @param string $Data 日志信息
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
