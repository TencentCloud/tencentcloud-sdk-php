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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品内部特性
 *
 * @method boolean getIsPasswordEncrypted() 获取密码是否已加密
 * @method void setIsPasswordEncrypted(boolean $IsPasswordEncrypted) 设置密码是否已加密
 */
class Tenant extends AbstractModel
{
    /**
     * @var boolean 密码是否已加密
     */
    public $IsPasswordEncrypted;

    /**
     * @param boolean $IsPasswordEncrypted 密码是否已加密
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
        if (array_key_exists("IsPasswordEncrypted",$param) and $param["IsPasswordEncrypted"] !== null) {
            $this->IsPasswordEncrypted = $param["IsPasswordEncrypted"];
        }
    }
}
