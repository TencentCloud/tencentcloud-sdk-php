<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * ModifyDBRemark请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-rljoi3bf
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-rljoi3bf
 * @method array getDBRemarks() 获取数据库名称及备注数组，每个元素包含数据库名和对应的备注
 * @method void setDBRemarks(array $DBRemarks) 设置数据库名称及备注数组，每个元素包含数据库名和对应的备注
 */
class ModifyDBRemarkRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-rljoi3bf
     */
    public $InstanceId;

    /**
     * @var array 数据库名称及备注数组，每个元素包含数据库名和对应的备注
     */
    public $DBRemarks;

    /**
     * @param string $InstanceId 实例ID，形如mssql-rljoi3bf
     * @param array $DBRemarks 数据库名称及备注数组，每个元素包含数据库名和对应的备注
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
        if (array_key_exists('InstanceId',$param) and $param['InstanceId'] !== null) {
            $this->InstanceId = $param['InstanceId'];
        }

        if (array_key_exists('DBRemarks',$param) and $param['DBRemarks'] !== null) {
            $this->DBRemarks = [];
            foreach ($param['DBRemarks'] as $key => $value){
                $obj = new DBRemark();
                $obj->deserialize($value);
                array_push($this->DBRemarks, $obj);
            }
        }
    }
}
