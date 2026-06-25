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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建Key的信息
 *
 * @method string getKeyName() 获取<p>Key的名称</p>
 * @method void setKeyName(string $KeyName) 设置<p>Key的名称</p>
 * @method string getPlainKey() 获取<p>导入的明文Key</p><p>仅允许导入Key模式下输入</p>
 * @method void setPlainKey(string $PlainKey) 设置<p>导入的明文Key</p><p>仅允许导入Key模式下输入</p>
 */
class InputKeyInfo extends AbstractModel
{
    /**
     * @var string <p>Key的名称</p>
     */
    public $KeyName;

    /**
     * @var string <p>导入的明文Key</p><p>仅允许导入Key模式下输入</p>
     */
    public $PlainKey;

    /**
     * @param string $KeyName <p>Key的名称</p>
     * @param string $PlainKey <p>导入的明文Key</p><p>仅允许导入Key模式下输入</p>
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("PlainKey",$param) and $param["PlainKey"] !== null) {
            $this->PlainKey = $param["PlainKey"];
        }
    }
}
