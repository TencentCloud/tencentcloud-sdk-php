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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份库类型统计
 *
 * @method string getType() 获取备份库类型
 * @method void setType(string $Type) 设置备份库类型
 * @method integer getCount() 获取备份库数量
 * @method void setCount(integer $Count) 设置备份库数量
 */
class TypeCount extends AbstractModel
{
    /**
     * @var string 备份库类型
     */
    public $Type;

    /**
     * @var integer 备份库数量
     */
    public $Count;

    /**
     * @param string $Type 备份库类型
     * @param integer $Count 备份库数量
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
