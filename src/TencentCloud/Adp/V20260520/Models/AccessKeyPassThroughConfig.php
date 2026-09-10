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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access Key 透传配置
 *
 * @method integer getKeyLocation() 获取<p>Access Key 字段统一注入位置，0:Header，1:Query</p>
 * @method void setKeyLocation(integer $KeyLocation) 设置<p>Access Key 字段统一注入位置，0:Header，1:Query</p>
 */
class AccessKeyPassThroughConfig extends AbstractModel
{
    /**
     * @var integer <p>Access Key 字段统一注入位置，0:Header，1:Query</p>
     */
    public $KeyLocation;

    /**
     * @param integer $KeyLocation <p>Access Key 字段统一注入位置，0:Header，1:Query</p>
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
        if (array_key_exists("KeyLocation",$param) and $param["KeyLocation"] !== null) {
            $this->KeyLocation = $param["KeyLocation"];
        }
    }
}
