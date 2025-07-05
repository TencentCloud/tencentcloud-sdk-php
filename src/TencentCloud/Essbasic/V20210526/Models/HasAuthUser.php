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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 被授权的用户信息
 *
 * @method string getOpenId() 获取第三方应用平台自定义，对应第三方平台子客企业员工的唯一标识。


 * @method void setOpenId(string $OpenId) 设置第三方应用平台自定义，对应第三方平台子客企业员工的唯一标识。
 */
class HasAuthUser extends AbstractModel
{
    /**
     * @var string 第三方应用平台自定义，对应第三方平台子客企业员工的唯一标识。


     */
    public $OpenId;

    /**
     * @param string $OpenId 第三方应用平台自定义，对应第三方平台子客企业员工的唯一标识。
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
