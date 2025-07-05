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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RansomDefenseRollback请求参数结构体
 *
 * @method string getBackupTime() 获取快照时间
 * @method void setBackupTime(string $BackupTime) 设置快照时间
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getDiskInfo() 获取需要回滚的硬盘信息，硬盘直接用;分隔，留空为全部已快照磁盘： disk-id1|disk-name1;disk-id2|disk-name2
 * @method void setDiskInfo(string $DiskInfo) 设置需要回滚的硬盘信息，硬盘直接用;分隔，留空为全部已快照磁盘： disk-id1|disk-name1;disk-id2|disk-name2
 */
class RansomDefenseRollbackRequest extends AbstractModel
{
    /**
     * @var string 快照时间
     */
    public $BackupTime;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 需要回滚的硬盘信息，硬盘直接用;分隔，留空为全部已快照磁盘： disk-id1|disk-name1;disk-id2|disk-name2
     */
    public $DiskInfo;

    /**
     * @param string $BackupTime 快照时间
     * @param string $Quuid 主机Quuid
     * @param string $DiskInfo 需要回滚的硬盘信息，硬盘直接用;分隔，留空为全部已快照磁盘： disk-id1|disk-name1;disk-id2|disk-name2
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
        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("DiskInfo",$param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }
    }
}
