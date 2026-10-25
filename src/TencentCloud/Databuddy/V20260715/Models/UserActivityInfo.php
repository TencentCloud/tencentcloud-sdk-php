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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户对资产的操作信息
 *
 * @method boolean getIsFavorite() 获取是否收藏
- true  是
- false 否
 * @method void setIsFavorite(boolean $IsFavorite) 设置是否收藏
- true  是
- false 否
 * @method string getLastViewTime() 获取上次查看时间
 * @method void setLastViewTime(string $LastViewTime) 设置上次查看时间
 */
class UserActivityInfo extends AbstractModel
{
    /**
     * @var boolean 是否收藏
- true  是
- false 否
     */
    public $IsFavorite;

    /**
     * @var string 上次查看时间
     */
    public $LastViewTime;

    /**
     * @param boolean $IsFavorite 是否收藏
- true  是
- false 否
     * @param string $LastViewTime 上次查看时间
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
        if (array_key_exists("IsFavorite",$param) and $param["IsFavorite"] !== null) {
            $this->IsFavorite = $param["IsFavorite"];
        }

        if (array_key_exists("LastViewTime",$param) and $param["LastViewTime"] !== null) {
            $this->LastViewTime = $param["LastViewTime"];
        }
    }
}
