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
 * 各版本销售信息
 *
 * @method boolean getFlag() 获取<p>手动设置的flag标志，true表示售罄，false表示可售。</p>
 * @method void setFlag(boolean $Flag) 设置<p>手动设置的flag标志，true表示售罄，false表示可售。</p>
 * @method string getVersion() 获取<p>ckafka版本号(1.1.1/2.4.2/0.10.2)</p>
 * @method void setVersion(string $Version) 设置<p>ckafka版本号(1.1.1/2.4.2/0.10.2)</p>
 * @method string getPlatform() 获取<p>专业版、标准版标志</p>
 * @method void setPlatform(string $Platform) 设置<p>专业版、标准版标志</p>
 * @method boolean getSoldOut() 获取<p>售罄标志：true售罄</p>
 * @method void setSoldOut(boolean $SoldOut) 设置<p>售罄标志：true售罄</p>
 */
class SaleInfo extends AbstractModel
{
    /**
     * @var boolean <p>手动设置的flag标志，true表示售罄，false表示可售。</p>
     */
    public $Flag;

    /**
     * @var string <p>ckafka版本号(1.1.1/2.4.2/0.10.2)</p>
     */
    public $Version;

    /**
     * @var string <p>专业版、标准版标志</p>
     */
    public $Platform;

    /**
     * @var boolean <p>售罄标志：true售罄</p>
     */
    public $SoldOut;

    /**
     * @param boolean $Flag <p>手动设置的flag标志，true表示售罄，false表示可售。</p>
     * @param string $Version <p>ckafka版本号(1.1.1/2.4.2/0.10.2)</p>
     * @param string $Platform <p>专业版、标准版标志</p>
     * @param boolean $SoldOut <p>售罄标志：true售罄</p>
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
