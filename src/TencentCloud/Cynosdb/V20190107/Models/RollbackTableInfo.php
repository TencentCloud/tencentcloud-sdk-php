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
 * 回档表信息
 *
 * @method string getOldTable() 获取旧表名称
 * @method void setOldTable(string $OldTable) 设置旧表名称
 * @method string getNewTable() 获取新表名称
 * @method void setNewTable(string $NewTable) 设置新表名称
 */
class RollbackTableInfo extends AbstractModel
{
    /**
     * @var string 旧表名称
     */
    public $OldTable;

    /**
     * @var string 新表名称
     */
    public $NewTable;

    /**
     * @param string $OldTable 旧表名称
     * @param string $NewTable 新表名称
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
        if (array_key_exists("OldTable",$param) and $param["OldTable"] !== null) {
            $this->OldTable = $param["OldTable"];
        }

        if (array_key_exists("NewTable",$param) and $param["NewTable"] !== null) {
            $this->NewTable = $param["NewTable"];
        }
    }
}
