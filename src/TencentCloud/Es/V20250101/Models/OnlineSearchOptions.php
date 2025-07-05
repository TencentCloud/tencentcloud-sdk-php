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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 联网搜索选项。
 *
 * @method string getEngine() 获取搜索引擎。支持 bing 和 sogou。
 * @method void setEngine(string $Engine) 设置搜索引擎。支持 bing 和 sogou。
 */
class OnlineSearchOptions extends AbstractModel
{
    /**
     * @var string 搜索引擎。支持 bing 和 sogou。
     */
    public $Engine;

    /**
     * @param string $Engine 搜索引擎。支持 bing 和 sogou。
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
        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }
    }
}
