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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量授权（UpdateType=4）时因库/表已被物理删除而被跳过的目标，后端已自动清理其残留权限，前端需弹窗提示用户
 *
 * @method string getCatalogName() 获取<p>数据目录（catalog）名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录（catalog）名称</p>
 * @method string getDatabase() 获取<p>库名</p>
 * @method void setDatabase(string $Database) 设置<p>库名</p>
 * @method string getTable() 获取<p>表名；库级条目被跳过时该字段为空（Go 定义带 omitempty，为空时响应里整个字段不出现）</p>
 * @method void setTable(string $Table) 设置<p>表名；库级条目被跳过时该字段为空（Go 定义带 omitempty，为空时响应里整个字段不出现）</p>
 * @method string getReason() 获取<p>跳过原因，如 table not found, maybe already dropped、database not found, maybe already dropped、existence check failed, granting  skipped this round, please retry</p>
 * @method void setReason(string $Reason) 设置<p>跳过原因，如 table not found, maybe already dropped、database not found, maybe already dropped、existence check failed, granting  skipped this round, please retry</p>
 */
class SkippedPrivilegeItem extends AbstractModel
{
    /**
     * @var string <p>数据目录（catalog）名称</p>
     */
    public $CatalogName;

    /**
     * @var string <p>库名</p>
     */
    public $Database;

    /**
     * @var string <p>表名；库级条目被跳过时该字段为空（Go 定义带 omitempty，为空时响应里整个字段不出现）</p>
     */
    public $Table;

    /**
     * @var string <p>跳过原因，如 table not found, maybe already dropped、database not found, maybe already dropped、existence check failed, granting  skipped this round, please retry</p>
     */
    public $Reason;

    /**
     * @param string $CatalogName <p>数据目录（catalog）名称</p>
     * @param string $Database <p>库名</p>
     * @param string $Table <p>表名；库级条目被跳过时该字段为空（Go 定义带 omitempty，为空时响应里整个字段不出现）</p>
     * @param string $Reason <p>跳过原因，如 table not found, maybe already dropped、database not found, maybe already dropped、existence check failed, granting  skipped this round, please retry</p>
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
