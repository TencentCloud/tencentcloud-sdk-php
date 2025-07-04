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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserToken请求参数结构体
 *
 * @method integer getSecond() 获取token过期时间，有效值是1~300秒
 * @method void setSecond(integer $Second) 设置token过期时间，有效值是1~300秒
 */
class CreateUserTokenRequest extends AbstractModel
{
    /**
     * @var integer token过期时间，有效值是1~300秒
     */
    public $Second;

    /**
     * @param integer $Second token过期时间，有效值是1~300秒
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
        if (array_key_exists("Second",$param) and $param["Second"] !== null) {
            $this->Second = $param["Second"];
        }
    }
}
