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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结果集列定义（DescribeJobResult.Columns 的元素）.
 *
 * @method string getName() 获取<p>列名。</p>
 * @method void setName(string $Name) 设置<p>列名。</p>
 * @method string getDataType() 获取<p>列数据类型（如 int / string）。</p>
 * @method void setDataType(string $DataType) 设置<p>列数据类型（如 int / string）。</p>
 * @method string getComment() 获取<p>列注释。</p>
 * @method void setComment(string $Comment) 设置<p>列注释。</p>
 * @method boolean getNullable() 获取<p>是否可为 NULL。</p>
 * @method void setNullable(boolean $Nullable) 设置<p>是否可为 NULL。</p>
 */
class ResultColumn extends AbstractModel
{
    /**
     * @var string <p>列名。</p>
     */
    public $Name;

    /**
     * @var string <p>列数据类型（如 int / string）。</p>
     */
    public $DataType;

    /**
     * @var string <p>列注释。</p>
     */
    public $Comment;

    /**
     * @var boolean <p>是否可为 NULL。</p>
     */
    public $Nullable;

    /**
     * @param string $Name <p>列名。</p>
     * @param string $DataType <p>列数据类型（如 int / string）。</p>
     * @param string $Comment <p>列注释。</p>
     * @param boolean $Nullable <p>是否可为 NULL。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Nullable",$param) and $param["Nullable"] !== null) {
            $this->Nullable = $param["Nullable"];
        }
    }
}
