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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditFirmware请求参数结构体
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method string getFirmwareVersion() 获取固件版本号。
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件版本号。
 * @method string getFirmwareName() 获取固件名称。
 * @method void setFirmwareName(string $FirmwareName) 设置固件名称。
 * @method string getFirmwareDescription() 获取固件描述
 * @method void setFirmwareDescription(string $FirmwareDescription) 设置固件描述
 * @method string getFirmwareUserDefined() 获取固件用户自定义配置信息
 * @method void setFirmwareUserDefined(string $FirmwareUserDefined) 设置固件用户自定义配置信息
 */
class EditFirmwareRequest extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var string 固件版本号。
     */
    public $FirmwareVersion;

    /**
     * @var string 固件名称。
     */
    public $FirmwareName;

    /**
     * @var string 固件描述
     */
    public $FirmwareDescription;

    /**
     * @var string 固件用户自定义配置信息
     */
    public $FirmwareUserDefined;

    /**
     * @param string $ProductId 产品ID。
     * @param string $FirmwareVersion 固件版本号。
     * @param string $FirmwareName 固件名称。
     * @param string $FirmwareDescription 固件描述
     * @param string $FirmwareUserDefined 固件用户自定义配置信息
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

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("FirmwareName",$param) and $param["FirmwareName"] !== null) {
            $this->FirmwareName = $param["FirmwareName"];
        }

        if (array_key_exists("FirmwareDescription",$param) and $param["FirmwareDescription"] !== null) {
            $this->FirmwareDescription = $param["FirmwareDescription"];
        }

        if (array_key_exists("FirmwareUserDefined",$param) and $param["FirmwareUserDefined"] !== null) {
            $this->FirmwareUserDefined = $param["FirmwareUserDefined"];
        }
    }
}
