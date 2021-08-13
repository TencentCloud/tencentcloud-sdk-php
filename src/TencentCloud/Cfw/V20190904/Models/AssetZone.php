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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssetZone 
 *
 * @method string getZone() 获取地域
 * @method void setZone(string $Zone) 设置地域
 * @method string getZoneEng() 获取地域英文
 * @method void setZoneEng(string $ZoneEng) 设置地域英文
 */
class AssetZone extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Zone;

    /**
     * @var string 地域英文
     */
    public $ZoneEng;

    /**
     * @param string $Zone 地域
     * @param string $ZoneEng 地域英文
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneEng",$param) and $param["ZoneEng"] !== null) {
            $this->ZoneEng = $param["ZoneEng"];
        }
    }
}
