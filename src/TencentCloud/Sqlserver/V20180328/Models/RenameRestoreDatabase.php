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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于RestoreInstance，RollbackInstance，CreateMigration 等接口；对恢复的库进行重命名，且支持选择要恢复的库。
 *
 * @method string getOldName() 获取库的名字，如果oldName不存在则返回失败。
 * @method void setOldName(string $OldName) 设置库的名字，如果oldName不存在则返回失败。
 * @method string getNewName() 获取库的新名字，如果不填则按照系统默认方式命名恢复的库
 * @method void setNewName(string $NewName) 设置库的新名字，如果不填则按照系统默认方式命名恢复的库
 */
class RenameRestoreDatabase extends AbstractModel
{
    /**
     * @var string 库的名字，如果oldName不存在则返回失败。
     */
    public $OldName;

    /**
     * @var string 库的新名字，如果不填则按照系统默认方式命名恢复的库
     */
    public $NewName;

    /**
     * @param string $OldName 库的名字，如果oldName不存在则返回失败。
     * @param string $NewName 库的新名字，如果不填则按照系统默认方式命名恢复的库
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
        if (array_key_exists("OldName",$param) and $param["OldName"] !== null) {
            $this->OldName = $param["OldName"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
