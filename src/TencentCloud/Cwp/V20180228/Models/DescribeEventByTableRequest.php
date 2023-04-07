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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventByTable请求参数结构体
 *
 * @method string getTableName() 获取事件表名
 * @method void setTableName(string $TableName) 设置事件表名
 * @method array getIds() 获取事件表id号
 * @method void setIds(array $Ids) 设置事件表id号
 */
class DescribeEventByTableRequest extends AbstractModel
{
    /**
     * @var string 事件表名
     */
    public $TableName;

    /**
     * @var array 事件表id号
     */
    public $Ids;

    /**
     * @param string $TableName 事件表名
     * @param array $Ids 事件表id号
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
