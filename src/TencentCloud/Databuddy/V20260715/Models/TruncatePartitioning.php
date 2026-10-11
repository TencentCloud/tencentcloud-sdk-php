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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 截断分区策略
 *
 * @method string getFiledName() 获取字段名
 * @method void setFiledName(string $FiledName) 设置字段名
 * @method string getWidth() 获取截取长度
 * @method void setWidth(string $Width) 设置截取长度
 */
class TruncatePartitioning extends AbstractModel
{
    /**
     * @var string 字段名
     */
    public $FiledName;

    /**
     * @var string 截取长度
     */
    public $Width;

    /**
     * @param string $FiledName 字段名
     * @param string $Width 截取长度
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
        if (array_key_exists("FiledName",$param) and $param["FiledName"] !== null) {
            $this->FiledName = $param["FiledName"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }
    }
}
