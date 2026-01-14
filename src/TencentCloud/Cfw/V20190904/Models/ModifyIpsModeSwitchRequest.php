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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIpsModeSwitch请求参数结构体
 *
 * @method integer getMode() 获取防护模式：0-观察模式, 1-拦截模式, 2-严格模式
 * @method void setMode(integer $Mode) 设置防护模式：0-观察模式, 1-拦截模式, 2-严格模式
 */
class ModifyIpsModeSwitchRequest extends AbstractModel
{
    /**
     * @var integer 防护模式：0-观察模式, 1-拦截模式, 2-严格模式
     */
    public $Mode;

    /**
     * @param integer $Mode 防护模式：0-观察模式, 1-拦截模式, 2-严格模式
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
