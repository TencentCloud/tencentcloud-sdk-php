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
 * 数据库重命名返回参数
 *
 * @method string getNewName() 获取新数据库名称
 * @method void setNewName(string $NewName) 设置新数据库名称
 * @method string getOldName() 获取老数据库名称
 * @method void setOldName(string $OldName) 设置老数据库名称
 */
class DBRenameRes extends AbstractModel
{
    /**
     * @var string 新数据库名称
     */
    public $NewName;

    /**
     * @var string 老数据库名称
     */
    public $OldName;

    /**
     * @param string $NewName 新数据库名称
     * @param string $OldName 老数据库名称
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
        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }

        if (array_key_exists("OldName",$param) and $param["OldName"] !== null) {
            $this->OldName = $param["OldName"];
        }
    }
}
