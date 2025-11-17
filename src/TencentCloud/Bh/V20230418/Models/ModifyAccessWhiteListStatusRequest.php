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
 * ModifyAccessWhiteListStatus请求参数结构体
 *
 * @method boolean getAllowAny() 获取true：放开全部来源IP；false：不放开全部来源IP
 * @method void setAllowAny(boolean $AllowAny) 设置true：放开全部来源IP；false：不放开全部来源IP
 */
class ModifyAccessWhiteListStatusRequest extends AbstractModel
{
    /**
     * @var boolean true：放开全部来源IP；false：不放开全部来源IP
     */
    public $AllowAny;

    /**
     * @param boolean $AllowAny true：放开全部来源IP；false：不放开全部来源IP
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
        if (array_key_exists("AllowAny",$param) and $param["AllowAny"] !== null) {
            $this->AllowAny = $param["AllowAny"];
        }
    }
}
