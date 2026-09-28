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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SQL Server 执行栈中的单个帧。
 *
 * @method integer getLine() 获取<p>帧对应的行号（存储过程内的行号）。</p>
 * @method void setLine(integer $Line) 设置<p>帧对应的行号（存储过程内的行号）。</p>
 * @method integer getStatementStart() 获取<p>语句在存储过程文本内的起始字节偏移。</p>
 * @method void setStatementStart(integer $StatementStart) 设置<p>语句在存储过程文本内的起始字节偏移。</p>
 * @method string getProcName() 获取<p>存储过程名。adhoc 表示动态 SQL、非存过。</p>
 * @method void setProcName(string $ProcName) 设置<p>存储过程名。adhoc 表示动态 SQL、非存过。</p>
 * @method string getSqlHandle() 获取<p>SQL 句柄（0x 十六进制字节），用于拉取具体语句文本和关联执行计划。</p>
 * @method void setSqlHandle(string $SqlHandle) 设置<p>SQL 句柄（0x 十六进制字节），用于拉取具体语句文本和关联执行计划。</p>
 * @method integer getStatementEnd() 获取<p>语句在存储过程文本内的结束字节偏移。StatementStart/StatementEnd 组合用于精确切片。</p>
 * @method void setStatementEnd(integer $StatementEnd) 设置<p>语句在存储过程文本内的结束字节偏移。StatementStart/StatementEnd 组合用于精确切片。</p>
 */
class DeadlockFrame extends AbstractModel
{
    /**
     * @var integer <p>帧对应的行号（存储过程内的行号）。</p>
     */
    public $Line;

    /**
     * @var integer <p>语句在存储过程文本内的起始字节偏移。</p>
     */
    public $StatementStart;

    /**
     * @var string <p>存储过程名。adhoc 表示动态 SQL、非存过。</p>
     */
    public $ProcName;

    /**
     * @var string <p>SQL 句柄（0x 十六进制字节），用于拉取具体语句文本和关联执行计划。</p>
     */
    public $SqlHandle;

    /**
     * @var integer <p>语句在存储过程文本内的结束字节偏移。StatementStart/StatementEnd 组合用于精确切片。</p>
     */
    public $StatementEnd;

    /**
     * @param integer $Line <p>帧对应的行号（存储过程内的行号）。</p>
     * @param integer $StatementStart <p>语句在存储过程文本内的起始字节偏移。</p>
     * @param string $ProcName <p>存储过程名。adhoc 表示动态 SQL、非存过。</p>
     * @param string $SqlHandle <p>SQL 句柄（0x 十六进制字节），用于拉取具体语句文本和关联执行计划。</p>
     * @param integer $StatementEnd <p>语句在存储过程文本内的结束字节偏移。StatementStart/StatementEnd 组合用于精确切片。</p>
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
        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("StatementStart",$param) and $param["StatementStart"] !== null) {
            $this->StatementStart = $param["StatementStart"];
        }

        if (array_key_exists("ProcName",$param) and $param["ProcName"] !== null) {
            $this->ProcName = $param["ProcName"];
        }

        if (array_key_exists("SqlHandle",$param) and $param["SqlHandle"] !== null) {
            $this->SqlHandle = $param["SqlHandle"];
        }

        if (array_key_exists("StatementEnd",$param) and $param["StatementEnd"] !== null) {
            $this->StatementEnd = $param["StatementEnd"];
        }
    }
}
