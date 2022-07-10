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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回滚数据库信息
 *
 * @method string getOldDatabase() 获取旧数据库名称
 * @method void setOldDatabase(string $OldDatabase) 设置旧数据库名称
 * @method string getNewDatabase() 获取新数据库名称
 * @method void setNewDatabase(string $NewDatabase) 设置新数据库名称
 */
class RollbackDatabase extends AbstractModel
{
    /**
     * @var string 旧数据库名称
     */
    public $OldDatabase;

    /**
     * @var string 新数据库名称
     */
    public $NewDatabase;

    /**
     * @param string $OldDatabase 旧数据库名称
     * @param string $NewDatabase 新数据库名称
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
        if (array_key_exists("OldDatabase",$param) and $param["OldDatabase"] !== null) {
            $this->OldDatabase = $param["OldDatabase"];
        }

        if (array_key_exists("NewDatabase",$param) and $param["NewDatabase"] !== null) {
            $this->NewDatabase = $param["NewDatabase"];
        }
    }
}
