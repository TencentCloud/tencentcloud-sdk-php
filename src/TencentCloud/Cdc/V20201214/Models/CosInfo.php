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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于购买页面添加cos信息
 *
 * @method integer getSize() 获取COS存储大小，单位TB
 * @method void setSize(integer $Size) 设置COS存储大小，单位TB
 * @method string getType() 获取COS存储类型，默认为cos
 * @method void setType(string $Type) 设置COS存储类型，默认为cos
 */
class CosInfo extends AbstractModel
{
    /**
     * @var integer COS存储大小，单位TB
     */
    public $Size;

    /**
     * @var string COS存储类型，默认为cos
     */
    public $Type;

    /**
     * @param integer $Size COS存储大小，单位TB
     * @param string $Type COS存储类型，默认为cos
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
