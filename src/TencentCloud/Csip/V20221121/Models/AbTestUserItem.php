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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度用户配置
 *
 * @method integer getAppId() 获取appId
 * @method void setAppId(integer $AppId) 设置appId
 * @method boolean getIsAbTestUser() 获取是否灰度用户
 * @method void setIsAbTestUser(boolean $IsAbTestUser) 设置是否灰度用户
 */
class AbTestUserItem extends AbstractModel
{
    /**
     * @var integer appId
     */
    public $AppId;

    /**
     * @var boolean 是否灰度用户
     */
    public $IsAbTestUser;

    /**
     * @param integer $AppId appId
     * @param boolean $IsAbTestUser 是否灰度用户
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IsAbTestUser",$param) and $param["IsAbTestUser"] !== null) {
            $this->IsAbTestUser = $param["IsAbTestUser"];
        }
    }
}
