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
 * 时间范围
 *
 * @method string getStart() 获取<p>开始时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setStart(string $Start) 设置<p>开始时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getEnd() 获取<p>结束时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setEnd(string $End) 设置<p>结束时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 */
class TimeRange extends AbstractModel
{
    /**
     * @var string <p>开始时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $Start;

    /**
     * @var string <p>结束时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $End;

    /**
     * @param string $Start <p>开始时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $End <p>结束时间</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
