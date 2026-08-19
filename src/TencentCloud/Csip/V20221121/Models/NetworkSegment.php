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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网段
 *
 * @method string getSegment() 获取<p>网段</p>
 * @method void setSegment(string $Segment) 设置<p>网段</p>
 * @method string getDesc() 获取<p>描述</p>
 * @method void setDesc(string $Desc) 设置<p>描述</p>
 */
class NetworkSegment extends AbstractModel
{
    /**
     * @var string <p>网段</p>
     */
    public $Segment;

    /**
     * @var string <p>描述</p>
     */
    public $Desc;

    /**
     * @param string $Segment <p>网段</p>
     * @param string $Desc <p>描述</p>
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
        if (array_key_exists("Segment",$param) and $param["Segment"] !== null) {
            $this->Segment = $param["Segment"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
