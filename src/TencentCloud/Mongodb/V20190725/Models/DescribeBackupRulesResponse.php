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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupRules返回参数结构体
 *
 * @method integer getBackupSaveTime() 获取备份数据保留期限。单位为：天。
 * @method void setBackupSaveTime(integer $BackupSaveTime) 设置备份数据保留期限。单位为：天。
 * @method integer getBackupTime() 获取自动备份开始时间。
 * @method void setBackupTime(integer $BackupTime) 设置自动备份开始时间。
 * @method integer getBackupMethod() 获取备份方式。
- 0：逻辑备份。
- 1：物理备份。
 * @method void setBackupMethod(integer $BackupMethod) 设置备份方式。
- 0：逻辑备份。
- 1：物理备份。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupRulesResponse extends AbstractModel
{
    /**
     * @var integer 备份数据保留期限。单位为：天。
     */
    public $BackupSaveTime;

    /**
     * @var integer 自动备份开始时间。
     */
    public $BackupTime;

    /**
     * @var integer 备份方式。
- 0：逻辑备份。
- 1：物理备份。
     */
    public $BackupMethod;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BackupSaveTime 备份数据保留期限。单位为：天。
     * @param integer $BackupTime 自动备份开始时间。
     * @param integer $BackupMethod 备份方式。
- 0：逻辑备份。
- 1：物理备份。
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
        if (array_key_exists("BackupSaveTime",$param) and $param["BackupSaveTime"] !== null) {
            $this->BackupSaveTime = $param["BackupSaveTime"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
