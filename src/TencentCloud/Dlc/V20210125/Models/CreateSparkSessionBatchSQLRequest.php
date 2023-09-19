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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSparkSessionBatchSQL请求参数结构体
 *
 * @method string getDataEngineName() 获取DLC Spark作业引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置DLC Spark作业引擎名称
 * @method string getExecuteSQL() 获取运行sql，需要base64编码。
 * @method void setExecuteSQL(string $ExecuteSQL) 设置运行sql，需要base64编码。
 * @method string getDriverSize() 获取指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method void setDriverSize(string $DriverSize) 设置指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method string getExecutorSize() 获取指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method void setExecutorSize(string $ExecutorSize) 设置指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method integer getExecutorNumbers() 获取指定的Executor数量，默认为1
 * @method void setExecutorNumbers(integer $ExecutorNumbers) 设置指定的Executor数量，默认为1
 * @method integer getExecutorMaxNumbers() 获取指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) 设置指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
 * @method integer getTimeoutInSecond() 获取指定的Session超时时间，单位秒，默认3600秒
 * @method void setTimeoutInSecond(integer $TimeoutInSecond) 设置指定的Session超时时间，单位秒，默认3600秒
 * @method string getSessionId() 获取Session唯一标识，当指定sessionid，则使用该session运行任务。
 * @method void setSessionId(string $SessionId) 设置Session唯一标识，当指定sessionid，则使用该session运行任务。
 * @method string getSessionName() 获取指定要创建的session名称
 * @method void setSessionName(string $SessionName) 设置指定要创建的session名称
 * @method array getArguments() 获取Session相关配置，当前支持：1.dlc.eni：用户配置的eni网关信息，可以用过该字段设置；
2.dlc.role.arn：用户配置的roleArn鉴权策略配置信息，可以用过该字段设置；
3.dlc.sql.set.config：用户配置的集群配置信息，可以用过该字段设置；
 * @method void setArguments(array $Arguments) 设置Session相关配置，当前支持：1.dlc.eni：用户配置的eni网关信息，可以用过该字段设置；
2.dlc.role.arn：用户配置的roleArn鉴权策略配置信息，可以用过该字段设置；
3.dlc.sql.set.config：用户配置的集群配置信息，可以用过该字段设置；
 * @method integer getIsInherit() 获取是否继承集群的资源类配置：0：不继承（默认），1：继承集群；
 * @method void setIsInherit(integer $IsInherit) 设置是否继承集群的资源类配置：0：不继承（默认），1：继承集群；
 */
class CreateSparkSessionBatchSQLRequest extends AbstractModel
{
    /**
     * @var string DLC Spark作业引擎名称
     */
    public $DataEngineName;

    /**
     * @var string 运行sql，需要base64编码。
     */
    public $ExecuteSQL;

    /**
     * @var string 指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     */
    public $DriverSize;

    /**
     * @var string 指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     */
    public $ExecutorSize;

    /**
     * @var integer 指定的Executor数量，默认为1
     */
    public $ExecutorNumbers;

    /**
     * @var integer 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
     */
    public $ExecutorMaxNumbers;

    /**
     * @var integer 指定的Session超时时间，单位秒，默认3600秒
     */
    public $TimeoutInSecond;

    /**
     * @var string Session唯一标识，当指定sessionid，则使用该session运行任务。
     */
    public $SessionId;

    /**
     * @var string 指定要创建的session名称
     */
    public $SessionName;

    /**
     * @var array Session相关配置，当前支持：1.dlc.eni：用户配置的eni网关信息，可以用过该字段设置；
2.dlc.role.arn：用户配置的roleArn鉴权策略配置信息，可以用过该字段设置；
3.dlc.sql.set.config：用户配置的集群配置信息，可以用过该字段设置；
     */
    public $Arguments;

    /**
     * @var integer 是否继承集群的资源类配置：0：不继承（默认），1：继承集群；
     */
    public $IsInherit;

    /**
     * @param string $DataEngineName DLC Spark作业引擎名称
     * @param string $ExecuteSQL 运行sql，需要base64编码。
     * @param string $DriverSize 指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     * @param string $ExecutorSize 指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     * @param integer $ExecutorNumbers 指定的Executor数量，默认为1
     * @param integer $ExecutorMaxNumbers 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
     * @param integer $TimeoutInSecond 指定的Session超时时间，单位秒，默认3600秒
     * @param string $SessionId Session唯一标识，当指定sessionid，则使用该session运行任务。
     * @param string $SessionName 指定要创建的session名称
     * @param array $Arguments Session相关配置，当前支持：1.dlc.eni：用户配置的eni网关信息，可以用过该字段设置；
2.dlc.role.arn：用户配置的roleArn鉴权策略配置信息，可以用过该字段设置；
3.dlc.sql.set.config：用户配置的集群配置信息，可以用过该字段设置；
     * @param integer $IsInherit 是否继承集群的资源类配置：0：不继承（默认），1：继承集群；
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ExecuteSQL",$param) and $param["ExecuteSQL"] !== null) {
            $this->ExecuteSQL = $param["ExecuteSQL"];
        }

        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNumbers",$param) and $param["ExecutorNumbers"] !== null) {
            $this->ExecutorNumbers = $param["ExecutorNumbers"];
        }

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }

        if (array_key_exists("TimeoutInSecond",$param) and $param["TimeoutInSecond"] !== null) {
            $this->TimeoutInSecond = $param["TimeoutInSecond"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = [];
            foreach ($param["Arguments"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Arguments, $obj);
            }
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }
    }
}
