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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户位置详细信息
 *
 * @method string getType() 获取表示位置类型
 * @method void setType(string $Type) 设置表示位置类型
 * @method Approximate getApproximate() 获取用户近似位置的详细信息
 * @method void setApproximate(Approximate $Approximate) 设置用户近似位置的详细信息
 */
class UserLocation extends AbstractModel
{
    /**
     * @var string 表示位置类型
     */
    public $Type;

    /**
     * @var Approximate 用户近似位置的详细信息
     */
    public $Approximate;

    /**
     * @param string $Type 表示位置类型
     * @param Approximate $Approximate 用户近似位置的详细信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Approximate",$param) and $param["Approximate"] !== null) {
            $this->Approximate = new Approximate();
            $this->Approximate->deserialize($param["Approximate"]);
        }
    }
}
