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
 * RollbackInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getType() 获取回档类型，0-回档的数据库覆盖原库；1-回档的数据库以重命名的形式生成，不覆盖原库
 * @method void setType(integer $Type) 设置回档类型，0-回档的数据库覆盖原库；1-回档的数据库以重命名的形式生成，不覆盖原库
 * @method array getDBs() 获取需要回档的数据库
 * @method void setDBs(array $DBs) 设置需要回档的数据库
 * @method string getTime() 获取回档目标时间点
 * @method void setTime(string $Time) 设置回档目标时间点
 */
class RollbackInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 回档类型，0-回档的数据库覆盖原库；1-回档的数据库以重命名的形式生成，不覆盖原库
     */
    public $Type;

    /**
     * @var array 需要回档的数据库
     */
    public $DBs;

    /**
     * @var string 回档目标时间点
     */
    public $Time;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Type 回档类型，0-回档的数据库覆盖原库；1-回档的数据库以重命名的形式生成，不覆盖原库
     * @param array $DBs 需要回档的数据库
     * @param string $Time 回档目标时间点
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

        if (array_key_exists('Type',$param) and $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }

        if (array_key_exists('DBs',$param) and $param['DBs'] !== null) {
            $this->DBs = $param['DBs'];
        }

        if (array_key_exists('Time',$param) and $param['Time'] !== null) {
            $this->Time = $param['Time'];
        }
    }
}
