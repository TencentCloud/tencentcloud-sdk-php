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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格列。
 *
 * @method string getHeader() 获取列名称
 * @method void setHeader(string $Header) 设置列名称
 * @method string getDataType() 获取列数据类型
 * @method void setDataType(string $DataType) 设置列数据类型
 */
class TableColumn extends AbstractModel
{
    /**
     * @var string 列名称
     */
    public $Header;

    /**
     * @var string 列数据类型
     */
    public $DataType;

    /**
     * @param string $Header 列名称
     * @param string $DataType 列数据类型
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
        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = $param["Header"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
