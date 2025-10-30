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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 解析量小计
 *
 * @method integer getNum() 获取解析量
 * @method void setNum(integer $Num) 设置解析量
 * @method string getDateKey() 获取统计的时间点
 * @method void setDateKey(string $DateKey) 设置统计的时间点
 */
class ResolveCountDataItem extends AbstractModel
{
    /**
     * @var integer 解析量
     */
    public $Num;

    /**
     * @var string 统计的时间点
     */
    public $DateKey;

    /**
     * @param integer $Num 解析量
     * @param string $DateKey 统计的时间点
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("DateKey",$param) and $param["DateKey"] !== null) {
            $this->DateKey = $param["DateKey"];
        }
    }
}
