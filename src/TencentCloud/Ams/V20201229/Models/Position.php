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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标识命中的违规关键词位置信息
 *
 * @method integer getStart() 获取关键词起始位置
 * @method void setStart(integer $Start) 设置关键词起始位置
 * @method integer getEnd() 获取关键词结束位置
 * @method void setEnd(integer $End) 设置关键词结束位置
 */
class Position extends AbstractModel
{
    /**
     * @var integer 关键词起始位置
     */
    public $Start;

    /**
     * @var integer 关键词结束位置
     */
    public $End;

    /**
     * @param integer $Start 关键词起始位置
     * @param integer $End 关键词结束位置
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
