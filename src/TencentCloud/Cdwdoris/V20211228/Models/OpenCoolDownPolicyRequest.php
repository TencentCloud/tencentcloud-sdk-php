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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenCoolDownPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getDatabaseName() 获取db名称
 * @method void setDatabaseName(string $DatabaseName) 设置db名称
 * @method string getTableName() 获取table名称
 * @method void setTableName(string $TableName) 设置table名称
 * @method string getOperationType() 获取操作类型
 * @method void setOperationType(string $OperationType) 设置操作类型
 * @method string getBatchOpenCoolDownTables() 获取逗号分隔 需要带上db的名字 db1.tb1,db1.tb2,db2.tb1
 * @method void setBatchOpenCoolDownTables(string $BatchOpenCoolDownTables) 设置逗号分隔 需要带上db的名字 db1.tb1,db1.tb2,db2.tb1
 * @method string getPolicyName() 获取绑定的时候用 策略名称
 * @method void setPolicyName(string $PolicyName) 设置绑定的时候用 策略名称
 * @method string getBatchOpenCoolDownPartitions() 获取逗号分隔 p1,p2,p3
 * @method void setBatchOpenCoolDownPartitions(string $BatchOpenCoolDownPartitions) 设置逗号分隔 p1,p2,p3
 */
class OpenCoolDownPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string db名称
     */
    public $DatabaseName;

    /**
     * @var string table名称
     */
    public $TableName;

    /**
     * @var string 操作类型
     */
    public $OperationType;

    /**
     * @var string 逗号分隔 需要带上db的名字 db1.tb1,db1.tb2,db2.tb1
     */
    public $BatchOpenCoolDownTables;

    /**
     * @var string 绑定的时候用 策略名称
     */
    public $PolicyName;

    /**
     * @var string 逗号分隔 p1,p2,p3
     */
    public $BatchOpenCoolDownPartitions;

    /**
     * @param string $InstanceId 实例id
     * @param string $DatabaseName db名称
     * @param string $TableName table名称
     * @param string $OperationType 操作类型
     * @param string $BatchOpenCoolDownTables 逗号分隔 需要带上db的名字 db1.tb1,db1.tb2,db2.tb1
     * @param string $PolicyName 绑定的时候用 策略名称
     * @param string $BatchOpenCoolDownPartitions 逗号分隔 p1,p2,p3
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("BatchOpenCoolDownTables",$param) and $param["BatchOpenCoolDownTables"] !== null) {
            $this->BatchOpenCoolDownTables = $param["BatchOpenCoolDownTables"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("BatchOpenCoolDownPartitions",$param) and $param["BatchOpenCoolDownPartitions"] !== null) {
            $this->BatchOpenCoolDownPartitions = $param["BatchOpenCoolDownPartitions"];
        }
    }
}
