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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmBackupSetting请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method integer getBackupLogSaveTime() 获取备份日志保留时长
 * @method void setBackupLogSaveTime(integer $BackupLogSaveTime) 设置备份日志保留时长
 * @method integer getRestoreLogSaveTime() 获取恢复日志保留时长
 * @method void setRestoreLogSaveTime(integer $RestoreLogSaveTime) 设置恢复日志保留时长
 * @method integer getLogMaxSaveTime() 获取日志最大生命周期限制
 * @method void setLogMaxSaveTime(integer $LogMaxSaveTime) 设置日志最大生命周期限制
 * @method integer getOnlineLogMaxSaveTime() 获取在线日志最大天数限制
 * @method void setOnlineLogMaxSaveTime(integer $OnlineLogMaxSaveTime) 设置在线日志最大天数限制
 */
class ModifyDspmBackupSettingRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var integer 备份日志保留时长
     */
    public $BackupLogSaveTime;

    /**
     * @var integer 恢复日志保留时长
     */
    public $RestoreLogSaveTime;

    /**
     * @var integer 日志最大生命周期限制
     */
    public $LogMaxSaveTime;

    /**
     * @var integer 在线日志最大天数限制
     */
    public $OnlineLogMaxSaveTime;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param integer $BackupLogSaveTime 备份日志保留时长
     * @param integer $RestoreLogSaveTime 恢复日志保留时长
     * @param integer $LogMaxSaveTime 日志最大生命周期限制
     * @param integer $OnlineLogMaxSaveTime 在线日志最大天数限制
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("BackupLogSaveTime",$param) and $param["BackupLogSaveTime"] !== null) {
            $this->BackupLogSaveTime = $param["BackupLogSaveTime"];
        }

        if (array_key_exists("RestoreLogSaveTime",$param) and $param["RestoreLogSaveTime"] !== null) {
            $this->RestoreLogSaveTime = $param["RestoreLogSaveTime"];
        }

        if (array_key_exists("LogMaxSaveTime",$param) and $param["LogMaxSaveTime"] !== null) {
            $this->LogMaxSaveTime = $param["LogMaxSaveTime"];
        }

        if (array_key_exists("OnlineLogMaxSaveTime",$param) and $param["OnlineLogMaxSaveTime"] !== null) {
            $this->OnlineLogMaxSaveTime = $param["OnlineLogMaxSaveTime"];
        }
    }
}
