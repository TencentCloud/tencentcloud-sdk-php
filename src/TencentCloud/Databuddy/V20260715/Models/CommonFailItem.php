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
 * 通用错误信息
 *
 * @method string getItem() 获取<p>uin或者groupId</p>
 * @method void setItem(string $Item) 设置<p>uin或者groupId</p>
 * @method string getFailReason() 获取<p>错误信息</p>
 * @method void setFailReason(string $FailReason) 设置<p>错误信息</p>
 */
class CommonFailItem extends AbstractModel
{
    /**
     * @var string <p>uin或者groupId</p>
     */
    public $Item;

    /**
     * @var string <p>错误信息</p>
     */
    public $FailReason;

    /**
     * @param string $Item <p>uin或者groupId</p>
     * @param string $FailReason <p>错误信息</p>
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
