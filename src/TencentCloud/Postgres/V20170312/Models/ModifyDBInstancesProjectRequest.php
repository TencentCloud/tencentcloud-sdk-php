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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstancesProject请求参数结构体
 *
 * @method array getDBInstanceIdSet() 获取实例ID集合。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。支持同时操作多个实例。
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置实例ID集合。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。支持同时操作多个实例。
 * @method string getProjectId() 获取所属新项目的ID。可通过[DescribeProjects](https://cloud.tencent.com/document/api/651/78725)获取
 * @method void setProjectId(string $ProjectId) 设置所属新项目的ID。可通过[DescribeProjects](https://cloud.tencent.com/document/api/651/78725)获取
 */
class ModifyDBInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array 实例ID集合。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。支持同时操作多个实例。
     */
    public $DBInstanceIdSet;

    /**
     * @var string 所属新项目的ID。可通过[DescribeProjects](https://cloud.tencent.com/document/api/651/78725)获取
     */
    public $ProjectId;

    /**
     * @param array $DBInstanceIdSet 实例ID集合。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。支持同时操作多个实例。
     * @param string $ProjectId 所属新项目的ID。可通过[DescribeProjects](https://cloud.tencent.com/document/api/651/78725)获取
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
