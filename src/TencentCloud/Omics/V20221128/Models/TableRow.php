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
 * 表格行。
 *
 * @method string getTableRowUuid() 获取表格行UUID。
 * @method void setTableRowUuid(string $TableRowUuid) 设置表格行UUID。
 * @method array getContent() 获取表格行内容。
 * @method void setContent(array $Content) 设置表格行内容。
 */
class TableRow extends AbstractModel
{
    /**
     * @var string 表格行UUID。
     */
    public $TableRowUuid;

    /**
     * @var array 表格行内容。
     */
    public $Content;

    /**
     * @param string $TableRowUuid 表格行UUID。
     * @param array $Content 表格行内容。
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
        if (array_key_exists("TableRowUuid",$param) and $param["TableRowUuid"] !== null) {
            $this->TableRowUuid = $param["TableRowUuid"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
