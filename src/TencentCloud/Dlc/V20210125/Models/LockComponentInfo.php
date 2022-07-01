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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据加锁内容
 *
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getPartition() 获取分区
 * @method void setPartition(string $Partition) 设置分区
 * @method string getLockType() 获取锁类型：SHARED_READ、SHARED_WRITE、EXCLUSIVE
 * @method void setLockType(string $LockType) 设置锁类型：SHARED_READ、SHARED_WRITE、EXCLUSIVE
 * @method string getLockLevel() 获取锁级别：DB、TABLE、PARTITION
 * @method void setLockLevel(string $LockLevel) 设置锁级别：DB、TABLE、PARTITION
 * @method string getDataOperationType() 获取锁操作：SELECT,INSERT,UPDATE,DELETE,UNSET,NO_TXN
 * @method void setDataOperationType(string $DataOperationType) 设置锁操作：SELECT,INSERT,UPDATE,DELETE,UNSET,NO_TXN
 * @method boolean getIsAcid() 获取是否保持Acid
 * @method void setIsAcid(boolean $IsAcid) 设置是否保持Acid
 * @method boolean getIsDynamicPartitionWrite() 获取是否动态分区写
 * @method void setIsDynamicPartitionWrite(boolean $IsDynamicPartitionWrite) 设置是否动态分区写
 */
class LockComponentInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string 分区
     */
    public $Partition;

    /**
     * @var string 锁类型：SHARED_READ、SHARED_WRITE、EXCLUSIVE
     */
    public $LockType;

    /**
     * @var string 锁级别：DB、TABLE、PARTITION
     */
    public $LockLevel;

    /**
     * @var string 锁操作：SELECT,INSERT,UPDATE,DELETE,UNSET,NO_TXN
     */
    public $DataOperationType;

    /**
     * @var boolean 是否保持Acid
     */
    public $IsAcid;

    /**
     * @var boolean 是否动态分区写
     */
    public $IsDynamicPartitionWrite;

    /**
     * @param string $DbName 数据库名称
     * @param string $TableName 表名称
     * @param string $Partition 分区
     * @param string $LockType 锁类型：SHARED_READ、SHARED_WRITE、EXCLUSIVE
     * @param string $LockLevel 锁级别：DB、TABLE、PARTITION
     * @param string $DataOperationType 锁操作：SELECT,INSERT,UPDATE,DELETE,UNSET,NO_TXN
     * @param boolean $IsAcid 是否保持Acid
     * @param boolean $IsDynamicPartitionWrite 是否动态分区写
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("LockType",$param) and $param["LockType"] !== null) {
            $this->LockType = $param["LockType"];
        }

        if (array_key_exists("LockLevel",$param) and $param["LockLevel"] !== null) {
            $this->LockLevel = $param["LockLevel"];
        }

        if (array_key_exists("DataOperationType",$param) and $param["DataOperationType"] !== null) {
            $this->DataOperationType = $param["DataOperationType"];
        }

        if (array_key_exists("IsAcid",$param) and $param["IsAcid"] !== null) {
            $this->IsAcid = $param["IsAcid"];
        }

        if (array_key_exists("IsDynamicPartitionWrite",$param) and $param["IsDynamicPartitionWrite"] !== null) {
            $this->IsDynamicPartitionWrite = $param["IsDynamicPartitionWrite"];
        }
    }
}
