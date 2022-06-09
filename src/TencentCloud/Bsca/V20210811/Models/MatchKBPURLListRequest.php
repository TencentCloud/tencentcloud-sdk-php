<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MatchKBPURLList请求参数结构体
 *
 * @method string getSHA1() 获取SHA1。
 * @method void setSHA1(string $SHA1) 设置SHA1。
 */
class MatchKBPURLListRequest extends AbstractModel
{
    /**
     * @var string SHA1。
     */
    public $SHA1;

    /**
     * @param string $SHA1 SHA1。
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
        if (array_key_exists("SHA1",$param) and $param["SHA1"] !== null) {
            $this->SHA1 = $param["SHA1"];
        }
    }
}
