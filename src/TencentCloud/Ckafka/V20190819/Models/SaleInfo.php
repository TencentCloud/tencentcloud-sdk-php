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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准版销售信息
 *
 * @method boolean getFlag() 获取手动设置的flag标志
 * @method void setFlag(boolean $Flag) 设置手动设置的flag标志
 * @method string getVersion() 获取ckafka版本号(1.1.1/2.4.2/0.10.2)
 * @method void setVersion(string $Version) 设置ckafka版本号(1.1.1/2.4.2/0.10.2)
 * @method string getPlatform() 获取专业版、标准版标志
 * @method void setPlatform(string $Platform) 设置专业版、标准版标志
 * @method boolean getSoldOut() 获取售罄标志：true售罄
 * @method void setSoldOut(boolean $SoldOut) 设置售罄标志：true售罄
 */
class SaleInfo extends AbstractModel
{
    /**
     * @var boolean 手动设置的flag标志
     */
    public $Flag;

    /**
     * @var string ckafka版本号(1.1.1/2.4.2/0.10.2)
     */
    public $Version;

    /**
     * @var string 专业版、标准版标志
     */
    public $Platform;

    /**
     * @var boolean 售罄标志：true售罄
     */
    public $SoldOut;

    /**
     * @param boolean $Flag 手动设置的flag标志
     * @param string $Version ckafka版本号(1.1.1/2.4.2/0.10.2)
     * @param string $Platform 专业版、标准版标志
     * @param boolean $SoldOut 售罄标志：true售罄
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
        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SoldOut",$param) and $param["SoldOut"] !== null) {
            $this->SoldOut = $param["SoldOut"];
        }
    }
}
