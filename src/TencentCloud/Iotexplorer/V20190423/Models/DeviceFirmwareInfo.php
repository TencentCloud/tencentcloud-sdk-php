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
 * 设备固件信息
 *
 * @method string getFwType() 获取固件类型
 * @method void setFwType(string $FwType) 设置固件类型
 * @method string getVersion() 获取固件版本
 * @method void setVersion(string $Version) 设置固件版本
 * @method integer getUpdateTime() 获取最后更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置最后更新时间
 */
class DeviceFirmwareInfo extends AbstractModel
{
    /**
     * @var string 固件类型
     */
    public $FwType;

    /**
     * @var string 固件版本
     */
    public $Version;

    /**
     * @var integer 最后更新时间
     */
    public $UpdateTime;

    /**
     * @param string $FwType 固件类型
     * @param string $Version 固件版本
     * @param integer $UpdateTime 最后更新时间
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
        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
