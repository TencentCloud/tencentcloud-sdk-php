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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirusScanTimeoutSetting请求参数结构体
 *
 * @method integer getTimeout() 获取超时时长单位小时(5~24h)
 * @method void setTimeout(integer $Timeout) 设置超时时长单位小时(5~24h)
 * @method integer getScanType() 获取设置类型0一键检测，1定时检测
 * @method void setScanType(integer $ScanType) 设置设置类型0一键检测，1定时检测
 */
class ModifyVirusScanTimeoutSettingRequest extends AbstractModel
{
    /**
     * @var integer 超时时长单位小时(5~24h)
     */
    public $Timeout;

    /**
     * @var integer 设置类型0一键检测，1定时检测
     */
    public $ScanType;

    /**
     * @param integer $Timeout 超时时长单位小时(5~24h)
     * @param integer $ScanType 设置类型0一键检测，1定时检测
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }
    }
}
