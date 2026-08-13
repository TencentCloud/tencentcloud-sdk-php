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
 * DescribeDspmBackupSetting返回参数结构体
 *
 * @method integer getBackupLogSaveTime() 获取<p>备份日志保留时长</p>
 * @method void setBackupLogSaveTime(integer $BackupLogSaveTime) 设置<p>备份日志保留时长</p>
 * @method integer getRestoreLogSaveTime() 获取<p>恢复日志保留时长</p>
 * @method void setRestoreLogSaveTime(integer $RestoreLogSaveTime) 设置<p>恢复日志保留时长</p>
 * @method integer getLogMaxSaveTime() 获取<p>日志最大生命周期限制</p>
 * @method void setLogMaxSaveTime(integer $LogMaxSaveTime) 设置<p>日志最大生命周期限制</p>
 * @method integer getOnlineLogMaxSaveTime() 获取<p>在线日志最大天数限制</p>
 * @method void setOnlineLogMaxSaveTime(integer $OnlineLogMaxSaveTime) 设置<p>在线日志最大天数限制</p>
 * @method integer getMaxOnlineLogCount() 获取<p>最大在线日志条数，单位是：个</p>
 * @method void setMaxOnlineLogCount(integer $MaxOnlineLogCount) 设置<p>最大在线日志条数，单位是：个</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmBackupSettingResponse extends AbstractModel
{
    /**
     * @var integer <p>备份日志保留时长</p>
     */
    public $BackupLogSaveTime;

    /**
     * @var integer <p>恢复日志保留时长</p>
     */
    public $RestoreLogSaveTime;

    /**
     * @var integer <p>日志最大生命周期限制</p>
     */
    public $LogMaxSaveTime;

    /**
     * @var integer <p>在线日志最大天数限制</p>
     */
    public $OnlineLogMaxSaveTime;

    /**
     * @var integer <p>最大在线日志条数，单位是：个</p>
     */
    public $MaxOnlineLogCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BackupLogSaveTime <p>备份日志保留时长</p>
     * @param integer $RestoreLogSaveTime <p>恢复日志保留时长</p>
     * @param integer $LogMaxSaveTime <p>日志最大生命周期限制</p>
     * @param integer $OnlineLogMaxSaveTime <p>在线日志最大天数限制</p>
     * @param integer $MaxOnlineLogCount <p>最大在线日志条数，单位是：个</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("MaxOnlineLogCount",$param) and $param["MaxOnlineLogCount"] !== null) {
            $this->MaxOnlineLogCount = $param["MaxOnlineLogCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
