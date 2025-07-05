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
 * 用于修改数据库对象的权限，其中包含了数据库对象描述的数据结构、需要修改的权限列表以及修改的类型等。
 *
 * @method DatabasePrivilege getDatabasePrivilege() 获取要修改的数据库对象及权限列表
 * @method void setDatabasePrivilege(DatabasePrivilege $DatabasePrivilege) 设置要修改的数据库对象及权限列表
 * @method string getModifyType() 获取修改的方式，当前仅支持grantObject、revokeObject、alterRole。grantObject代表授权、revokeObject代表收回权、alterRole代表修改账号类型。
 * @method void setModifyType(string $ModifyType) 设置修改的方式，当前仅支持grantObject、revokeObject、alterRole。grantObject代表授权、revokeObject代表收回权、alterRole代表修改账号类型。
 * @method boolean getIsCascade() 获取当ModifyType为revokeObject才需要此参数，参数为true时，撤销权限会级联撤销。默认为false。
 * @method void setIsCascade(boolean $IsCascade) 设置当ModifyType为revokeObject才需要此参数，参数为true时，撤销权限会级联撤销。默认为false。
 */
class ModifyPrivilege extends AbstractModel
{
    /**
     * @var DatabasePrivilege 要修改的数据库对象及权限列表
     */
    public $DatabasePrivilege;

    /**
     * @var string 修改的方式，当前仅支持grantObject、revokeObject、alterRole。grantObject代表授权、revokeObject代表收回权、alterRole代表修改账号类型。
     */
    public $ModifyType;

    /**
     * @var boolean 当ModifyType为revokeObject才需要此参数，参数为true时，撤销权限会级联撤销。默认为false。
     */
    public $IsCascade;

    /**
     * @param DatabasePrivilege $DatabasePrivilege 要修改的数据库对象及权限列表
     * @param string $ModifyType 修改的方式，当前仅支持grantObject、revokeObject、alterRole。grantObject代表授权、revokeObject代表收回权、alterRole代表修改账号类型。
     * @param boolean $IsCascade 当ModifyType为revokeObject才需要此参数，参数为true时，撤销权限会级联撤销。默认为false。
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
        if (array_key_exists("DatabasePrivilege",$param) and $param["DatabasePrivilege"] !== null) {
            $this->DatabasePrivilege = new DatabasePrivilege();
            $this->DatabasePrivilege->deserialize($param["DatabasePrivilege"]);
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("IsCascade",$param) and $param["IsCascade"] !== null) {
            $this->IsCascade = $param["IsCascade"];
        }
    }
}
