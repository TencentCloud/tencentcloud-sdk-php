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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getBackupType() 获取备份类型, 可选值：logic，逻辑备份；snapshot，物理备份
 * @method void setBackupType(string $BackupType) 设置备份类型, 可选值：logic，逻辑备份；snapshot，物理备份
 * @method array getBackupDatabases() 获取备份的库, 只在 BackupType 为 logic 时有效
 * @method void setBackupDatabases(array $BackupDatabases) 设置备份的库, 只在 BackupType 为 logic 时有效
 * @method array getBackupTables() 获取备份的表, 只在 BackupType 为 logic 时有效
 * @method void setBackupTables(array $BackupTables) 设置备份的表, 只在 BackupType 为 logic 时有效
 * @method string getBackupName() 获取备注名
 * @method void setBackupName(string $BackupName) 设置备注名
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 备份类型, 可选值：logic，逻辑备份；snapshot，物理备份
     */
    public $BackupType;

    /**
     * @var array 备份的库, 只在 BackupType 为 logic 时有效
     */
    public $BackupDatabases;

    /**
     * @var array 备份的表, 只在 BackupType 为 logic 时有效
     */
    public $BackupTables;

    /**
     * @var string 备注名
     */
    public $BackupName;

    /**
     * @param string $ClusterId 集群ID
     * @param string $BackupType 备份类型, 可选值：logic，逻辑备份；snapshot，物理备份
     * @param array $BackupDatabases 备份的库, 只在 BackupType 为 logic 时有效
     * @param array $BackupTables 备份的表, 只在 BackupType 为 logic 时有效
     * @param string $BackupName 备注名
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupDatabases",$param) and $param["BackupDatabases"] !== null) {
            $this->BackupDatabases = $param["BackupDatabases"];
        }

        if (array_key_exists("BackupTables",$param) and $param["BackupTables"] !== null) {
            $this->BackupTables = [];
            foreach ($param["BackupTables"] as $key => $value){
                $obj = new DatabaseTables();
                $obj->deserialize($value);
                array_push($this->BackupTables, $obj);
            }
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
