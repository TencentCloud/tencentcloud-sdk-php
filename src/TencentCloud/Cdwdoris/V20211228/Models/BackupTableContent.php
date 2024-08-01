<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 备份表信息
 *
 * @method string getDatabase() 获取数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(string $Database) 设置数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTable() 获取表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(string $Table) 设置表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalBytes() 获取表总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalBytes(integer $TotalBytes) 设置表总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSingleReplicaBytes() 获取表单个副本的大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSingleReplicaBytes(string $SingleReplicaBytes) 设置表单个副本的大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupStatus() 获取备份状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStatus(integer $BackupStatus) 设置备份状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupErrorMsg() 获取备份的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupErrorMsg(string $BackupErrorMsg) 设置备份的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsOpenCoolDown() 获取改库表是否绑定降冷策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOpenCoolDown(boolean $IsOpenCoolDown) 设置改库表是否绑定降冷策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupTableContent extends AbstractModel
{
    /**
     * @var string 数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var string 表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var integer 表总字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalBytes;

    /**
     * @var string 表单个副本的大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SingleReplicaBytes;

    /**
     * @var integer 备份状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStatus;

    /**
     * @var string 备份的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupErrorMsg;

    /**
     * @var boolean 改库表是否绑定降冷策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOpenCoolDown;

    /**
     * @param string $Database 数据库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Table 表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalBytes 表总字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SingleReplicaBytes 表单个副本的大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupStatus 备份状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupErrorMsg 备份的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsOpenCoolDown 改库表是否绑定降冷策略
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("TotalBytes",$param) and $param["TotalBytes"] !== null) {
            $this->TotalBytes = $param["TotalBytes"];
        }

        if (array_key_exists("SingleReplicaBytes",$param) and $param["SingleReplicaBytes"] !== null) {
            $this->SingleReplicaBytes = $param["SingleReplicaBytes"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("BackupErrorMsg",$param) and $param["BackupErrorMsg"] !== null) {
            $this->BackupErrorMsg = $param["BackupErrorMsg"];
        }

        if (array_key_exists("IsOpenCoolDown",$param) and $param["IsOpenCoolDown"] !== null) {
            $this->IsOpenCoolDown = $param["IsOpenCoolDown"];
        }
    }
}
