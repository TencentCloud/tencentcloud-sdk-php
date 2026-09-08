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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命中文本偏移信息
 *
 * @method integer getStart() 获取<p>起始偏移</p>
 * @method void setStart(integer $Start) 设置<p>起始偏移</p>
 * @method integer getEnd() 获取<p>结束偏移</p>
 * @method void setEnd(integer $End) 设置<p>结束偏移</p>
 */
class Position extends AbstractModel
{
    /**
     * @var integer <p>起始偏移</p>
     */
    public $Start;

    /**
     * @var integer <p>结束偏移</p>
     */
    public $End;

    /**
     * @param integer $Start <p>起始偏移</p>
     * @param integer $End <p>结束偏移</p>
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
