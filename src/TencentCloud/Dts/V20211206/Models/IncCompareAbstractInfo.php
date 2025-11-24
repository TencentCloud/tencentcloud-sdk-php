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
 * 增量校验阶段的摘要信息
 *
 * @method string getStartPosition() 获取增量起始位点
 * @method void setStartPosition(string $StartPosition) 设置增量起始位点
 * @method string getCurrentPosition() 获取增量当前位点
 * @method void setCurrentPosition(string $CurrentPosition) 设置增量当前位点
 * @method integer getCheckedRecord() 获取已校验行数
 * @method void setCheckedRecord(integer $CheckedRecord) 设置已校验行数
 * @method integer getDiffRecord() 获取不一致行数
 * @method void setDiffRecord(integer $DiffRecord) 设置不一致行数
 * @method integer getDiffTable() 获取不一致表的数量
 * @method void setDiffTable(integer $DiffTable) 设置不一致表的数量
 */
class IncCompareAbstractInfo extends AbstractModel
{
    /**
     * @var string 增量起始位点
     */
    public $StartPosition;

    /**
     * @var string 增量当前位点
     */
    public $CurrentPosition;

    /**
     * @var integer 已校验行数
     */
    public $CheckedRecord;

    /**
     * @var integer 不一致行数
     */
    public $DiffRecord;

    /**
     * @var integer 不一致表的数量
     */
    public $DiffTable;

    /**
     * @param string $StartPosition 增量起始位点
     * @param string $CurrentPosition 增量当前位点
     * @param integer $CheckedRecord 已校验行数
     * @param integer $DiffRecord 不一致行数
     * @param integer $DiffTable 不一致表的数量
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
        if (array_key_exists("StartPosition",$param) and $param["StartPosition"] !== null) {
            $this->StartPosition = $param["StartPosition"];
        }

        if (array_key_exists("CurrentPosition",$param) and $param["CurrentPosition"] !== null) {
            $this->CurrentPosition = $param["CurrentPosition"];
        }

        if (array_key_exists("CheckedRecord",$param) and $param["CheckedRecord"] !== null) {
            $this->CheckedRecord = $param["CheckedRecord"];
        }

        if (array_key_exists("DiffRecord",$param) and $param["DiffRecord"] !== null) {
            $this->DiffRecord = $param["DiffRecord"];
        }

        if (array_key_exists("DiffTable",$param) and $param["DiffTable"] !== null) {
            $this->DiffTable = $param["DiffTable"];
        }
    }
}
