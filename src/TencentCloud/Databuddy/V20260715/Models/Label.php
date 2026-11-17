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
 * 标签列信息
 *
 * @method string getColumnName() 获取列名
 * @method void setColumnName(string $ColumnName) 设置列名
 * @method string getMissingValueImputation() 获取缺失值填充
 * @method void setMissingValueImputation(string $MissingValueImputation) 设置缺失值填充
 * @method string getFormat() 获取数据格式
 * @method void setFormat(string $Format) 设置数据格式
 */
class Label extends AbstractModel
{
    /**
     * @var string 列名
     */
    public $ColumnName;

    /**
     * @var string 缺失值填充
     */
    public $MissingValueImputation;

    /**
     * @var string 数据格式
     */
    public $Format;

    /**
     * @param string $ColumnName 列名
     * @param string $MissingValueImputation 缺失值填充
     * @param string $Format 数据格式
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("MissingValueImputation",$param) and $param["MissingValueImputation"] !== null) {
            $this->MissingValueImputation = $param["MissingValueImputation"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
