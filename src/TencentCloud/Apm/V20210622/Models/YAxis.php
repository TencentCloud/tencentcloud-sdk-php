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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接口列表
 *
 * @method array getKeys() 获取<p>接口列表</p>
 * @method void setKeys(array $Keys) 设置<p>接口列表</p>
 * @method array getData() 获取<p>接口列表</p>
 * @method void setData(array $Data) 设置<p>接口列表</p>
 */
class YAxis extends AbstractModel
{
    /**
     * @var array <p>接口列表</p>
     */
    public $Keys;

    /**
     * @var array <p>接口列表</p>
     */
    public $Data;

    /**
     * @param array $Keys <p>接口列表</p>
     * @param array $Data <p>接口列表</p>
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
        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
