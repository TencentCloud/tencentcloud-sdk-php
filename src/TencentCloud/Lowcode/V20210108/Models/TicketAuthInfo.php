<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源授权信息
 *
 * @method string getAuthUser() 获取授权用户
 * @method void setAuthUser(string $AuthUser) 设置授权用户
 */
class TicketAuthInfo extends AbstractModel
{
    /**
     * @var string 授权用户
     */
    public $AuthUser;

    /**
     * @param string $AuthUser 授权用户
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
        if (array_key_exists("AuthUser",$param) and $param["AuthUser"] !== null) {
            $this->AuthUser = $param["AuthUser"];
        }
    }
}
