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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跳过报错DDL的策略
 *
 * @method array getTables() 获取<p>按表名跳过，支持精确 &quot;db.tbl&quot;、库通配 &quot;db.*&quot;、表通配 &quot;<em>.tbl&quot;、全通配 &quot;</em>&quot;</p>
 * @method void setTables(array $Tables) 设置<p>按表名跳过，支持精确 &quot;db.tbl&quot;、库通配 &quot;db.*&quot;、表通配 &quot;<em>.tbl&quot;、全通配 &quot;</em>&quot;</p>
 * @method array getErrorCodes() 获取<p>按 MySQL 错误码（1~65535）跳过</p><p>取值范围：[1, 65535]</p>
 * @method void setErrorCodes(array $ErrorCodes) 设置<p>按 MySQL 错误码（1~65535）跳过</p><p>取值范围：[1, 65535]</p>
 */
class SkipDdlOnError extends AbstractModel
{
    /**
     * @var array <p>按表名跳过，支持精确 &quot;db.tbl&quot;、库通配 &quot;db.*&quot;、表通配 &quot;<em>.tbl&quot;、全通配 &quot;</em>&quot;</p>
     */
    public $Tables;

    /**
     * @var array <p>按 MySQL 错误码（1~65535）跳过</p><p>取值范围：[1, 65535]</p>
     */
    public $ErrorCodes;

    /**
     * @param array $Tables <p>按表名跳过，支持精确 &quot;db.tbl&quot;、库通配 &quot;db.*&quot;、表通配 &quot;<em>.tbl&quot;、全通配 &quot;</em>&quot;</p>
     * @param array $ErrorCodes <p>按 MySQL 错误码（1~65535）跳过</p><p>取值范围：[1, 65535]</p>
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
        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }

        if (array_key_exists("ErrorCodes",$param) and $param["ErrorCodes"] !== null) {
            $this->ErrorCodes = $param["ErrorCodes"];
        }
    }
}
