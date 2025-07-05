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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigMap可选项
 *
 * @method string getKey() 获取-
 * @method void setKey(string $Key) 设置-
 * @method string getPath() 获取-
 * @method void setPath(string $Path) 设置-
 * @method string getMode() 获取-
 * @method void setMode(string $Mode) 设置-
 */
class ConfigMapOption extends AbstractModel
{
    /**
     * @var string -
     */
    public $Key;

    /**
     * @var string -
     */
    public $Path;

    /**
     * @var string -
     */
    public $Mode;

    /**
     * @param string $Key -
     * @param string $Path -
     * @param string $Mode -
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
