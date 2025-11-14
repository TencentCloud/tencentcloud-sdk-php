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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessWhiteListAutoStatus请求参数结构体
 *
 * @method boolean getAllowAuto() 获取true：放开自动添加IP；false：不放开自动添加IP
 * @method void setAllowAuto(boolean $AllowAuto) 设置true：放开自动添加IP；false：不放开自动添加IP
 */
class ModifyAccessWhiteListAutoStatusRequest extends AbstractModel
{
    /**
     * @var boolean true：放开自动添加IP；false：不放开自动添加IP
     */
    public $AllowAuto;

    /**
     * @param boolean $AllowAuto true：放开自动添加IP；false：不放开自动添加IP
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
        if (array_key_exists("AllowAuto",$param) and $param["AllowAuto"] !== null) {
            $this->AllowAuto = $param["AllowAuto"];
        }
    }
}
