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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups请求参数结构体
 *
 * @method array getSecurityGroupIdSet() 获取实例或只读组要绑定的安全组列表
 * @method void setSecurityGroupIdSet(array $SecurityGroupIdSet) 设置实例或只读组要绑定的安全组列表
 * @method string getDBInstanceId() 获取实例ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果都传，忽略ReadOnlyGroupId
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果都传，忽略ReadOnlyGroupId
 * @method string getReadOnlyGroupId() 获取只读组ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果要修改只读组关联的安全组，只传ReadOnlyGroupId
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果要修改只读组关联的安全组，只传ReadOnlyGroupId
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 实例或只读组要绑定的安全组列表
     */
    public $SecurityGroupIdSet;

    /**
     * @var string 实例ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果都传，忽略ReadOnlyGroupId
     */
    public $DBInstanceId;

    /**
     * @var string 只读组ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果要修改只读组关联的安全组，只传ReadOnlyGroupId
     */
    public $ReadOnlyGroupId;

    /**
     * @param array $SecurityGroupIdSet 实例或只读组要绑定的安全组列表
     * @param string $DBInstanceId 实例ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果都传，忽略ReadOnlyGroupId
     * @param string $ReadOnlyGroupId 只读组ID，DBInstanceId和ReadOnlyGroupId至少传一个；如果要修改只读组关联的安全组，只传ReadOnlyGroupId
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
        if (array_key_exists("SecurityGroupIdSet",$param) and $param["SecurityGroupIdSet"] !== null) {
            $this->SecurityGroupIdSet = $param["SecurityGroupIdSet"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }
    }
}
