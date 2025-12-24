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
 * DescribeBackupPlans请求参数结构体
 *
 * @method string getBackupPlanId() 获取过滤条件，备份计划 ID。
 * @method void setBackupPlanId(string $BackupPlanId) 设置过滤条件，备份计划 ID。
 * @method array getStatus() 获取过滤条件，备份计划状态。
 * @method void setStatus(array $Status) 设置过滤条件，备份计划状态。
 * @method array getDatabaseType() 获取过滤条件，数据库类型。
 * @method void setDatabaseType(array $DatabaseType) 设置过滤条件，数据库类型。
 * @method array getAccessType() 获取过滤条件，接入访问类型。
 * @method void setAccessType(array $AccessType) 设置过滤条件，接入访问类型。
 * @method string getBackupPlanName() 获取过滤条件，备份计划名称。
 * @method void setBackupPlanName(string $BackupPlanName) 设置过滤条件，备份计划名称。
 * @method array getTagFilters() 获取过滤条件，标签键值。
 * @method void setTagFilters(array $TagFilters) 设置过滤条件，标签键值。
 * @method integer getLimit() 获取分页参数。取值范围为(0, 100]，默认值为20。
 * @method void setLimit(integer $Limit) 设置分页参数。取值范围为(0, 100]，默认值为20。
 * @method integer getOffset() 获取分页参数。默认值为0。
 * @method void setOffset(integer $Offset) 设置分页参数。默认值为0。
 */
class DescribeBackupPlansRequest extends AbstractModel
{
    /**
     * @var string 过滤条件，备份计划 ID。
     */
    public $BackupPlanId;

    /**
     * @var array 过滤条件，备份计划状态。
     */
    public $Status;

    /**
     * @var array 过滤条件，数据库类型。
     */
    public $DatabaseType;

    /**
     * @var array 过滤条件，接入访问类型。
     */
    public $AccessType;

    /**
     * @var string 过滤条件，备份计划名称。
     */
    public $BackupPlanName;

    /**
     * @var array 过滤条件，标签键值。
     */
    public $TagFilters;

    /**
     * @var integer 分页参数。取值范围为(0, 100]，默认值为20。
     */
    public $Limit;

    /**
     * @var integer 分页参数。默认值为0。
     */
    public $Offset;

    /**
     * @param string $BackupPlanId 过滤条件，备份计划 ID。
     * @param array $Status 过滤条件，备份计划状态。
     * @param array $DatabaseType 过滤条件，数据库类型。
     * @param array $AccessType 过滤条件，接入访问类型。
     * @param string $BackupPlanName 过滤条件，备份计划名称。
     * @param array $TagFilters 过滤条件，标签键值。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("BackupPlanName",$param) and $param["BackupPlanName"] !== null) {
            $this->BackupPlanName = $param["BackupPlanName"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
