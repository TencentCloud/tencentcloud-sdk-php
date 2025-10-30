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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享地域
 *
 * @method string getName() 获取地域名称。
 * @method void setName(string $Name) 设置地域名称。
 * @method string getArea() 获取地域标识。
 * @method void setArea(string $Area) 设置地域标识。
 * @method integer getAreaId() 获取地域ID。
 * @method void setAreaId(integer $AreaId) 设置地域ID。
 */
class ShareArea extends AbstractModel
{
    /**
     * @var string 地域名称。
     */
    public $Name;

    /**
     * @var string 地域标识。
     */
    public $Area;

    /**
     * @var integer 地域ID。
     */
    public $AreaId;

    /**
     * @param string $Name 地域名称。
     * @param string $Area 地域标识。
     * @param integer $AreaId 地域ID。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }
    }
}
