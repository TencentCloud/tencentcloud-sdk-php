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
 * DescribeIncrementBackupSets请求参数结构体
 *
 * @method string getBackupPlanId() 获取备份计划 ID。
 * @method void setBackupPlanId(string $BackupPlanId) 设置备份计划 ID。
 * @method string getBackupSetId() 获取过滤条件，备份集 ID。
 * @method void setBackupSetId(string $BackupSetId) 设置过滤条件，备份集 ID。
 * @method integer getLimit() 获取分页参数。取值范围为(0, 100]，默认值为20。
 * @method void setLimit(integer $Limit) 设置分页参数。取值范围为(0, 100]，默认值为20。
 * @method integer getOffset() 获取分页参数。默认值为0。
 * @method void setOffset(integer $Offset) 设置分页参数。默认值为0。
 */
class DescribeIncrementBackupSetsRequest extends AbstractModel
{
    /**
     * @var string 备份计划 ID。
     */
    public $BackupPlanId;

    /**
     * @var string 过滤条件，备份集 ID。
     */
    public $BackupSetId;

    /**
     * @var integer 分页参数。取值范围为(0, 100]，默认值为20。
     */
    public $Limit;

    /**
     * @var integer 分页参数。默认值为0。
     */
    public $Offset;

    /**
     * @param string $BackupPlanId 备份计划 ID。
     * @param string $BackupSetId 过滤条件，备份集 ID。
     * @param integer $Limit 分页参数。取值范围为(0, 100]，默认值为20。
     * @param integer $Offset 分页参数。默认值为0。
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

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
