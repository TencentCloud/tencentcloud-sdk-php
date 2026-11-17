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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResumeBackupPlan请求参数结构体
 *
 * @method string getBackupPlanId() 获取备份计划 ID。可通过 DescribeBackupPlans 接口获取。
 * @method void setBackupPlanId(string $BackupPlanId) 设置备份计划 ID。可通过 DescribeBackupPlans 接口获取。
 * @method integer getBackupNow() 获取恢复后是否立即发起一次备份。取值：
- 0：不立即备份，默认值
- 1：立即备份
 * @method void setBackupNow(integer $BackupNow) 设置恢复后是否立即发起一次备份。取值：
- 0：不立即备份，默认值
- 1：立即备份
 */
class ResumeBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 备份计划 ID。可通过 DescribeBackupPlans 接口获取。
     */
    public $BackupPlanId;

    /**
     * @var integer 恢复后是否立即发起一次备份。取值：
- 0：不立即备份，默认值
- 1：立即备份
     */
    public $BackupNow;

    /**
     * @param string $BackupPlanId 备份计划 ID。可通过 DescribeBackupPlans 接口获取。
     * @param integer $BackupNow 恢复后是否立即发起一次备份。取值：
- 0：不立即备份，默认值
- 1：立即备份
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
        if (array_key_exists("BackupPlanId",$param) and $param["BackupPlanId"] !== null) {
            $this->BackupPlanId = $param["BackupPlanId"];
        }

        if (array_key_exists("BackupNow",$param) and $param["BackupNow"] !== null) {
            $this->BackupNow = $param["BackupNow"];
        }
    }
}
