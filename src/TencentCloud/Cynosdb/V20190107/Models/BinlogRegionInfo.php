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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各地域binlog保留信息
 *
 * @method string getBackupRegion() 获取<p>备份地域</p>
 * @method void setBackupRegion(string $BackupRegion) 设置<p>备份地域</p>
 * @method integer getBackupId() 获取<p>备份ID</p>
 * @method void setBackupId(integer $BackupId) 设置<p>备份ID</p>
 */
class BinlogRegionInfo extends AbstractModel
{
    /**
     * @var string <p>备份地域</p>
     */
    public $BackupRegion;

    /**
     * @var integer <p>备份ID</p>
     */
    public $BackupId;

    /**
     * @param string $BackupRegion <p>备份地域</p>
     * @param integer $BackupId <p>备份ID</p>
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
        if (array_key_exists("BackupRegion",$param) and $param["BackupRegion"] !== null) {
            $this->BackupRegion = $param["BackupRegion"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }
    }
}
