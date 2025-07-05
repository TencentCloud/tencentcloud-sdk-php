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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接收用户
 *
 * @method string getUinName() 获取用户名
 * @method void setUinName(string $UinName) 设置用户名
 * @method string getUin() 获取用户id
 * @method void setUin(string $Uin) 设置用户id
 */
class ReceiveUin extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UinName;

    /**
     * @var string 用户id
     */
    public $Uin;

    /**
     * @param string $UinName 用户名
     * @param string $Uin 用户id
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
        if (array_key_exists("UinName",$param) and $param["UinName"] !== null) {
            $this->UinName = $param["UinName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
