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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveAvatarTimbreList请求参数结构体
 *
 * @method string getTimbreGender() 获取过滤音色性别。默认不过滤。
male - 男性，
female -女性。
 * @method void setTimbreGender(string $TimbreGender) 设置过滤音色性别。默认不过滤。
male - 男性，
female -女性。
 */
class DescribeLiveAvatarTimbreListRequest extends AbstractModel
{
    /**
     * @var string 过滤音色性别。默认不过滤。
male - 男性，
female -女性。
     */
    public $TimbreGender;

    /**
     * @param string $TimbreGender 过滤音色性别。默认不过滤。
male - 男性，
female -女性。
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
        if (array_key_exists("TimbreGender",$param) and $param["TimbreGender"] !== null) {
            $this->TimbreGender = $param["TimbreGender"];
        }
    }
}
