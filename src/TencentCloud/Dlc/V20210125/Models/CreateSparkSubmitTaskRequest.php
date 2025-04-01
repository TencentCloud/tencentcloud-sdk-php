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
 * CreateSparkSubmitTask请求参数结构体
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getTaskType() 获取任务类型：当前支持1: BatchType, 2: StreamingType, 4: SQLType
 * @method void setTaskType(integer $TaskType) 设置任务类型：当前支持1: BatchType, 2: StreamingType, 4: SQLType
 * @method string getDataEngineName() 获取引擎名称，当前仅支持Spark批作业集群
 * @method void setDataEngineName(string $DataEngineName) 设置引擎名称，当前仅支持Spark批作业集群
 * @method string getPackagePath() 获取指定运行的程序脚本路径，当前仅支持jar和py，对于SQLType该值设为空字符串
 * @method void setPackagePath(string $PackagePath) 设置指定运行的程序脚本路径，当前仅支持jar和py，对于SQLType该值设为空字符串
 * @method integer getRoleArn() 获取指定的鉴权信息
 * @method void setRoleArn(integer $RoleArn) 设置指定的鉴权信息
 * @method integer getIsInherit() 获取运行任务所需资源是否继承自集群上配置资源信息，0（默认，不继承）、1（继承，当设置为该值，则任务级资源配置可不额外指定）
 * @method void setIsInherit(integer $IsInherit) 设置运行任务所需资源是否继承自集群上配置资源信息，0（默认，不继承）、1（继承，当设置为该值，则任务级资源配置可不额外指定）
 * @method string getMainClass() 获取jar任务时需要指定主程序
 * @method void setMainClass(string $MainClass) 设置jar任务时需要指定主程序
 * @method string getDriverSize() 获取当前DriverSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
 * @method void setDriverSize(string $DriverSize) 设置当前DriverSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
 * @method string getExecutorSize() 获取当前ExecutorSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
 * @method void setExecutorSize(string $ExecutorSize) 设置当前ExecutorSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
 * @method integer getExecutorNumbers() 获取指定使用的executor数量，最小为1
 * @method void setExecutorNumbers(integer $ExecutorNumbers) 设置指定使用的executor数量，最小为1
 * @method integer getExecutorMaxNumbers() 获取指定使用的executor最大数量, 当该值大于ExecutorNums则自动开启动态
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) 设置指定使用的executor最大数量, 当该值大于ExecutorNums则自动开启动态
 * @method array getCmdArgs() 获取提交任务的附加配置集合，当前支持Key包含：MAINARGS：程序入口参数，空格分割(SqlType任务通过该值指定base64加密后的sql)、SPARKCONFIG：Spark配置，以换行符分隔、ENI：Eni连接信息、DEPENDENCYPACKAGEPATH：依赖的程序包（--jars、--py-files:支持py/zip/egg等归档格式），多文件以逗号分隔、DEPENDENCYFILEPATH：依赖文件资源（--files: 非jar、zip），多文件以逗号分隔、DEPENDENCYARCHIVESPATH：依赖archives资源（--archives: 支持tar.gz/tgz/tar等归档格式)，多文件以逗号分隔、MAXRETRIES：任务重试次数，非流任务默认为1、SPARKIMAGE：Spark镜像版本号，支持使用dlc镜像/用户自定的tcr镜像运行任务、SPARKIMAGEVERSION：Spark镜像版本名称，与SPARKIMAGE一一对应
 * @method void setCmdArgs(array $CmdArgs) 设置提交任务的附加配置集合，当前支持Key包含：MAINARGS：程序入口参数，空格分割(SqlType任务通过该值指定base64加密后的sql)、SPARKCONFIG：Spark配置，以换行符分隔、ENI：Eni连接信息、DEPENDENCYPACKAGEPATH：依赖的程序包（--jars、--py-files:支持py/zip/egg等归档格式），多文件以逗号分隔、DEPENDENCYFILEPATH：依赖文件资源（--files: 非jar、zip），多文件以逗号分隔、DEPENDENCYARCHIVESPATH：依赖archives资源（--archives: 支持tar.gz/tgz/tar等归档格式)，多文件以逗号分隔、MAXRETRIES：任务重试次数，非流任务默认为1、SPARKIMAGE：Spark镜像版本号，支持使用dlc镜像/用户自定的tcr镜像运行任务、SPARKIMAGEVERSION：Spark镜像版本名称，与SPARKIMAGE一一对应
 * @method array getSourceInfo() 获取任务来源信息
 * @method void setSourceInfo(array $SourceInfo) 设置任务来源信息
 */
class CreateSparkSubmitTaskRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 任务类型：当前支持1: BatchType, 2: StreamingType, 4: SQLType
     */
    public $TaskType;

    /**
     * @var string 引擎名称，当前仅支持Spark批作业集群
     */
    public $DataEngineName;

    /**
     * @var string 指定运行的程序脚本路径，当前仅支持jar和py，对于SQLType该值设为空字符串
     */
    public $PackagePath;

    /**
     * @var integer 指定的鉴权信息
     */
    public $RoleArn;

    /**
     * @var integer 运行任务所需资源是否继承自集群上配置资源信息，0（默认，不继承）、1（继承，当设置为该值，则任务级资源配置可不额外指定）
     */
    public $IsInherit;

    /**
     * @var string jar任务时需要指定主程序
     */
    public $MainClass;

    /**
     * @var string 当前DriverSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
     */
    public $DriverSize;

    /**
     * @var string 当前ExecutorSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
     */
    public $ExecutorSize;

    /**
     * @var integer 指定使用的executor数量，最小为1
     */
    public $ExecutorNumbers;

    /**
     * @var integer 指定使用的executor最大数量, 当该值大于ExecutorNums则自动开启动态
     */
    public $ExecutorMaxNumbers;

    /**
     * @var array 提交任务的附加配置集合，当前支持Key包含：MAINARGS：程序入口参数，空格分割(SqlType任务通过该值指定base64加密后的sql)、SPARKCONFIG：Spark配置，以换行符分隔、ENI：Eni连接信息、DEPENDENCYPACKAGEPATH：依赖的程序包（--jars、--py-files:支持py/zip/egg等归档格式），多文件以逗号分隔、DEPENDENCYFILEPATH：依赖文件资源（--files: 非jar、zip），多文件以逗号分隔、DEPENDENCYARCHIVESPATH：依赖archives资源（--archives: 支持tar.gz/tgz/tar等归档格式)，多文件以逗号分隔、MAXRETRIES：任务重试次数，非流任务默认为1、SPARKIMAGE：Spark镜像版本号，支持使用dlc镜像/用户自定的tcr镜像运行任务、SPARKIMAGEVERSION：Spark镜像版本名称，与SPARKIMAGE一一对应
     */
    public $CmdArgs;

    /**
     * @var array 任务来源信息
     */
    public $SourceInfo;

    /**
     * @param string $TaskName 任务名称
     * @param integer $TaskType 任务类型：当前支持1: BatchType, 2: StreamingType, 4: SQLType
     * @param string $DataEngineName 引擎名称，当前仅支持Spark批作业集群
     * @param string $PackagePath 指定运行的程序脚本路径，当前仅支持jar和py，对于SQLType该值设为空字符串
     * @param integer $RoleArn 指定的鉴权信息
     * @param integer $IsInherit 运行任务所需资源是否继承自集群上配置资源信息，0（默认，不继承）、1（继承，当设置为该值，则任务级资源配置可不额外指定）
     * @param string $MainClass jar任务时需要指定主程序
     * @param string $DriverSize 当前DriverSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
     * @param string $ExecutorSize 当前ExecutorSize规格仅支持（内存型集群则使用m前缀的枚举值）: small/medium/large/xlarge/m.small/m.medium/m.large/m.xlarge
     * @param integer $ExecutorNumbers 指定使用的executor数量，最小为1
     * @param integer $ExecutorMaxNumbers 指定使用的executor最大数量, 当该值大于ExecutorNums则自动开启动态
     * @param array $CmdArgs 提交任务的附加配置集合，当前支持Key包含：MAINARGS：程序入口参数，空格分割(SqlType任务通过该值指定base64加密后的sql)、SPARKCONFIG：Spark配置，以换行符分隔、ENI：Eni连接信息、DEPENDENCYPACKAGEPATH：依赖的程序包（--jars、--py-files:支持py/zip/egg等归档格式），多文件以逗号分隔、DEPENDENCYFILEPATH：依赖文件资源（--files: 非jar、zip），多文件以逗号分隔、DEPENDENCYARCHIVESPATH：依赖archives资源（--archives: 支持tar.gz/tgz/tar等归档格式)，多文件以逗号分隔、MAXRETRIES：任务重试次数，非流任务默认为1、SPARKIMAGE：Spark镜像版本号，支持使用dlc镜像/用户自定的tcr镜像运行任务、SPARKIMAGEVERSION：Spark镜像版本名称，与SPARKIMAGE一一对应
     * @param array $SourceInfo 任务来源信息
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("PackagePath",$param) and $param["PackagePath"] !== null) {
            $this->PackagePath = $param["PackagePath"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
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

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = [];
            foreach ($param["CmdArgs"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->CmdArgs, $obj);
            }
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = [];
            foreach ($param["SourceInfo"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->SourceInfo, $obj);
            }
        }
    }
}
