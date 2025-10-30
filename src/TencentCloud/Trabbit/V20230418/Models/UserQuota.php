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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户数配额
 *
 * @method integer getMaxUser() 获取最大用户数
 * @method void setMaxUser(integer $MaxUser) 设置最大用户数
 * @method integer getUsedUser() 获取已用用户数
 * @method void setUsedUser(integer $UsedUser) 设置已用用户数
 */
class UserQuota extends AbstractModel
{
    /**
     * @var integer 最大用户数
     */
    public $MaxUser;

    /**
     * @var integer 已用用户数
     */
    public $UsedUser;

    /**
     * @param integer $MaxUser 最大用户数
     * @param integer $UsedUser 已用用户数
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
        if (array_key_exists("MaxUser",$param) and $param["MaxUser"] !== null) {
            $this->MaxUser = $param["MaxUser"];
        }

        if (array_key_exists("UsedUser",$param) and $param["UsedUser"] !== null) {
            $this->UsedUser = $param["UsedUser"];
        }
    }
}
