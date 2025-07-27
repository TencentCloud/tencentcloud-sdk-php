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
 * ModifyDBInstanceReadOnlyGroup请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getReadOnlyGroupId() 获取当前实例所在只读组ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置当前实例所在只读组ID
 * @method string getNewReadOnlyGroupId() 获取实例修改的目标只读组ID
 * @method void setNewReadOnlyGroupId(string $NewReadOnlyGroupId) 设置实例修改的目标只读组ID
 */
class ModifyDBInstanceReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 当前实例所在只读组ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 实例修改的目标只读组ID
     */
    public $NewReadOnlyGroupId;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $ReadOnlyGroupId 当前实例所在只读组ID
     * @param string $NewReadOnlyGroupId 实例修改的目标只读组ID
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("NewReadOnlyGroupId",$param) and $param["NewReadOnlyGroupId"] !== null) {
            $this->NewReadOnlyGroupId = $param["NewReadOnlyGroupId"];
        }
    }
}
