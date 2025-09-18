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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * //智能体应用可见范围，public-所有人可见 private-仅自己可见 share-通过分享可见
 *
 * @method string getVisibleRange() 获取public-所有人可见
 * @method void setVisibleRange(string $VisibleRange) 设置public-所有人可见
 */
class YuanQi extends AbstractModel
{
    /**
     * @var string public-所有人可见
     */
    public $VisibleRange;

    /**
     * @param string $VisibleRange public-所有人可见
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
        if (array_key_exists("VisibleRange",$param) and $param["VisibleRange"] !== null) {
            $this->VisibleRange = $param["VisibleRange"];
        }
    }
}
