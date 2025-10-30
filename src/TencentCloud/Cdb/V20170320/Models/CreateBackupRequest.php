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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getBackupMethod() 获取目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备，snapshot - 快照备份。基础版实例仅支持快照备份。
 * @method void setBackupMethod(string $BackupMethod) 设置目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备，snapshot - 快照备份。基础版实例仅支持快照备份。
 * @method array getBackupDBTableList() 获取需要备份的库表信息，如果不设置该参数，则默认整实例备份。在 BackupMethod=logical 逻辑备份中才可设置该参数。指定的库表必须存在，否则可能导致备份失败。
例：如果需要备份 db1 库的 tb1、tb2 表 和 db2 库。则该参数设置为 [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}]。
 * @method void setBackupDBTableList(array $BackupDBTableList) 设置需要备份的库表信息，如果不设置该参数，则默认整实例备份。在 BackupMethod=logical 逻辑备份中才可设置该参数。指定的库表必须存在，否则可能导致备份失败。
例：如果需要备份 db1 库的 tb1、tb2 表 和 db2 库。则该参数设置为 [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}]。
 * @method string getManualBackupName() 获取手动备份别名，输入长度请在60个字符内。
 * @method void setManualBackupName(string $ManualBackupName) 设置手动备份别名，输入长度请在60个字符内。
 * @method string getEncryptionFlag() 获取是否需要加密物理备份，可选值为：on - 是，off - 否。当 BackupMethod 为 physical 时，该值才有意义。不指定则使用实例备份默认加密策略，这里的默认加密策略指通过 [DescribeBackupEncryptionStatus](https://cloud.tencent.com/document/product/236/86508) 接口查询出的实例当前加密策略。
 * @method void setEncryptionFlag(string $EncryptionFlag) 设置是否需要加密物理备份，可选值为：on - 是，off - 否。当 BackupMethod 为 physical 时，该值才有意义。不指定则使用实例备份默认加密策略，这里的默认加密策略指通过 [DescribeBackupEncryptionStatus](https://cloud.tencent.com/document/product/236/86508) 接口查询出的实例当前加密策略。
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备，snapshot - 快照备份。基础版实例仅支持快照备份。
     */
    public $BackupMethod;

    /**
     * @var array 需要备份的库表信息，如果不设置该参数，则默认整实例备份。在 BackupMethod=logical 逻辑备份中才可设置该参数。指定的库表必须存在，否则可能导致备份失败。
例：如果需要备份 db1 库的 tb1、tb2 表 和 db2 库。则该参数设置为 [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}]。
     */
    public $BackupDBTableList;

    /**
     * @var string 手动备份别名，输入长度请在60个字符内。
     */
    public $ManualBackupName;

    /**
     * @var string 是否需要加密物理备份，可选值为：on - 是，off - 否。当 BackupMethod 为 physical 时，该值才有意义。不指定则使用实例备份默认加密策略，这里的默认加密策略指通过 [DescribeBackupEncryptionStatus](https://cloud.tencent.com/document/product/236/86508) 接口查询出的实例当前加密策略。
     */
    public $EncryptionFlag;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $BackupMethod 目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备，snapshot - 快照备份。基础版实例仅支持快照备份。
     * @param array $BackupDBTableList 需要备份的库表信息，如果不设置该参数，则默认整实例备份。在 BackupMethod=logical 逻辑备份中才可设置该参数。指定的库表必须存在，否则可能导致备份失败。
例：如果需要备份 db1 库的 tb1、tb2 表 和 db2 库。则该参数设置为 [{"Db": "db1", "Table": "tb1"}, {"Db": "db1", "Table": "tb2"}, {"Db": "db2"}]。
     * @param string $ManualBackupName 手动备份别名，输入长度请在60个字符内。
     * @param string $EncryptionFlag 是否需要加密物理备份，可选值为：on - 是，off - 否。当 BackupMethod 为 physical 时，该值才有意义。不指定则使用实例备份默认加密策略，这里的默认加密策略指通过 [DescribeBackupEncryptionStatus](https://cloud.tencent.com/document/product/236/86508) 接口查询出的实例当前加密策略。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupDBTableList",$param) and $param["BackupDBTableList"] !== null) {
            $this->BackupDBTableList = [];
            foreach ($param["BackupDBTableList"] as $key => $value){
                $obj = new BackupItem();
                $obj->deserialize($value);
                array_push($this->BackupDBTableList, $obj);
            }
        }

        if (array_key_exists("ManualBackupName",$param) and $param["ManualBackupName"] !== null) {
            $this->ManualBackupName = $param["ManualBackupName"];
        }

        if (array_key_exists("EncryptionFlag",$param) and $param["EncryptionFlag"] !== null) {
            $this->EncryptionFlag = $param["EncryptionFlag"];
        }
    }
}
