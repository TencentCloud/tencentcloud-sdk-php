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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共同备份点信息
 *
 * @method string getBackupCommonTime() 获取共同时间点（精确到小时）
 * @method void setBackupCommonTime(string $BackupCommonTime) 设置共同时间点（精确到小时）
 * @method array getBackupDetailSet() 获取共同备份点信息
 * @method void setBackupDetailSet(array $BackupDetailSet) 设置共同备份点信息
 */
class CommonBackupPoint extends AbstractModel
{
    /**
     * @var string 共同时间点（精确到小时）
     */
    public $BackupCommonTime;

    /**
     * @var array 共同备份点信息
     */
    public $BackupDetailSet;

    /**
     * @param string $BackupCommonTime 共同时间点（精确到小时）
     * @param array $BackupDetailSet 共同备份点信息
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
        if (array_key_exists("BackupCommonTime",$param) and $param["BackupCommonTime"] !== null) {
            $this->BackupCommonTime = $param["BackupCommonTime"];
        }

        if (array_key_exists("BackupDetailSet",$param) and $param["BackupDetailSet"] !== null) {
            $this->BackupDetailSet = [];
            foreach ($param["BackupDetailSet"] as $key => $value){
                $obj = new BackupDetail();
                $obj->deserialize($value);
                array_push($this->BackupDetailSet, $obj);
            }
        }
    }
}
