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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 要修改的数据库订阅发布关系集合
 *
 * @method DatabaseTuple getDatabaseTuple() 获取要修改的订阅关系
 * @method void setDatabaseTuple(DatabaseTuple $DatabaseTuple) 设置要修改的订阅关系
 * @method DatabaseTuple getNewDatabaseTuple() 获取修改后的订阅关系。DeleteDataBasesTuple为false时有效
 * @method void setNewDatabaseTuple(DatabaseTuple $NewDatabaseTuple) 设置修改后的订阅关系。DeleteDataBasesTuple为false时有效
 * @method boolean getDeleteDataBasesTuple() 获取是否删除订阅关系。此选项为true时，NewDatabaseTuple无效
 * @method void setDeleteDataBasesTuple(boolean $DeleteDataBasesTuple) 设置是否删除订阅关系。此选项为true时，NewDatabaseTuple无效
 */
class ModifyDataBaseTuple extends AbstractModel
{
    /**
     * @var DatabaseTuple 要修改的订阅关系
     */
    public $DatabaseTuple;

    /**
     * @var DatabaseTuple 修改后的订阅关系。DeleteDataBasesTuple为false时有效
     */
    public $NewDatabaseTuple;

    /**
     * @var boolean 是否删除订阅关系。此选项为true时，NewDatabaseTuple无效
     */
    public $DeleteDataBasesTuple;

    /**
     * @param DatabaseTuple $DatabaseTuple 要修改的订阅关系
     * @param DatabaseTuple $NewDatabaseTuple 修改后的订阅关系。DeleteDataBasesTuple为false时有效
     * @param boolean $DeleteDataBasesTuple 是否删除订阅关系。此选项为true时，NewDatabaseTuple无效
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
        if (array_key_exists("DatabaseTuple",$param) and $param["DatabaseTuple"] !== null) {
            $this->DatabaseTuple = new DatabaseTuple();
            $this->DatabaseTuple->deserialize($param["DatabaseTuple"]);
        }

        if (array_key_exists("NewDatabaseTuple",$param) and $param["NewDatabaseTuple"] !== null) {
            $this->NewDatabaseTuple = new DatabaseTuple();
            $this->NewDatabaseTuple->deserialize($param["NewDatabaseTuple"]);
        }

        if (array_key_exists("DeleteDataBasesTuple",$param) and $param["DeleteDataBasesTuple"] !== null) {
            $this->DeleteDataBasesTuple = $param["DeleteDataBasesTuple"];
        }
    }
}
