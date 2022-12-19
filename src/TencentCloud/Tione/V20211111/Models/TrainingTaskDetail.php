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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练任务详情
 *
 * @method string getId() 获取训练任务ID
 * @method void setId(string $Id) 设置训练任务ID
 * @method string getName() 获取训练任务名称
 * @method void setName(string $Name) 设置训练任务名称
 * @method string getUin() 获取主账号uin
 * @method void setUin(string $Uin) 设置主账号uin
 * @method string getSubUin() 获取子账号uin
 * @method void setSubUin(string $SubUin) 设置子账号uin
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getFrameworkName() 获取训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkName(string $FrameworkName) 设置训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkVersion() 获取训练框架版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置训练框架版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkEnvironment() 获取框架运行环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkEnvironment(string $FrameworkEnvironment) 设置框架运行环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取计费模式
 * @method void setChargeType(string $ChargeType) 设置计费模式
 * @method string getResourceGroupId() 获取预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceConfigInfos() 获取资源配置
 * @method void setResourceConfigInfos(array $ResourceConfigInfos) 设置资源配置
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingMode() 获取训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingMode(string $TrainingMode) 设置训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getCodePackagePath() 获取代码包
 * @method void setCodePackagePath(CosPathInfo $CodePackagePath) 设置代码包
 * @method StartCmdInfo getStartCmdInfo() 获取启动命令信息
 * @method void setStartCmdInfo(StartCmdInfo $StartCmdInfo) 设置启动命令信息
 * @method string getDataSource() 获取数据来源，eg：DATASET、COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置数据来源，eg：DATASET、COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataConfigs() 获取数据配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataConfigs(array $DataConfigs) 设置数据配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTuningParameters() 获取调优参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTuningParameters(string $TuningParameters) 设置调优参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getOutput() 获取训练输出
 * @method void setOutput(CosPathInfo $Output) 设置训练输出
 * @method boolean getLogEnable() 获取是否上报日志
 * @method void setLogEnable(boolean $LogEnable) 设置是否上报日志
 * @method LogConfig getLogConfig() 获取日志配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfig(LogConfig $LogConfig) 设置日志配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取自定义镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置自定义镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuntimeInSeconds() 获取运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getStartTime() 获取训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeStatus() 获取计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
 * @method void setChargeStatus(string $ChargeStatus) 设置计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
 * @method string getLatestInstanceId() 获取最近一次实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestInstanceId(string $LatestInstanceId) 设置最近一次实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTensorBoardId() 获取TensorBoard ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTensorBoardId(string $TensorBoardId) 设置TensorBoard ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getEndTime() 获取训练结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置训练结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingInfo() 获取计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfo(string $BillingInfo) 设置计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取预付费专用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置预付费专用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成
 * @method void setStatus(string $Status) 设置任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成
 * @method string getCallbackUrl() 获取回调地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingTaskDetail extends AbstractModel
{
    /**
     * @var string 训练任务ID
     */
    public $Id;

    /**
     * @var string 训练任务名称
     */
    public $Name;

    /**
     * @var string 主账号uin
     */
    public $Uin;

    /**
     * @var string 子账号uin
     */
    public $SubUin;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkName;

    /**
     * @var string 训练框架版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkVersion;

    /**
     * @var string 框架运行环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkEnvironment;

    /**
     * @var string 计费模式
     */
    public $ChargeType;

    /**
     * @var string 预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var array 资源配置
     */
    public $ResourceConfigInfos;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingMode;

    /**
     * @var CosPathInfo 代码包
     */
    public $CodePackagePath;

    /**
     * @var StartCmdInfo 启动命令信息
     */
    public $StartCmdInfo;

    /**
     * @var string 数据来源，eg：DATASET、COS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var array 数据配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataConfigs;

    /**
     * @var string 调优参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TuningParameters;

    /**
     * @var CosPathInfo 训练输出
     */
    public $Output;

    /**
     * @var boolean 是否上报日志
     */
    public $LogEnable;

    /**
     * @var LogConfig 日志配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfig;

    /**
     * @var string VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var ImageInfo 自定义镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var integer 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
     */
    public $ChargeStatus;

    /**
     * @var string 最近一次实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestInstanceId;

    /**
     * @var string TensorBoard ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TensorBoardId;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 训练结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfo;

    /**
     * @var string 预付费专用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成
     */
    public $Status;

    /**
     * @var string 回调地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackUrl;

    /**
     * @param string $Id 训练任务ID
     * @param string $Name 训练任务名称
     * @param string $Uin 主账号uin
     * @param string $SubUin 子账号uin
     * @param string $Region 地域
     * @param string $FrameworkName 训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkVersion 训练框架版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkEnvironment 框架运行环境
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 计费模式
     * @param string $ResourceGroupId 预付费专用资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceConfigInfos 资源配置
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingMode 训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $CodePackagePath 代码包
     * @param StartCmdInfo $StartCmdInfo 启动命令信息
     * @param string $DataSource 数据来源，eg：DATASET、COS
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataConfigs 数据配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TuningParameters 调优参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $Output 训练输出
     * @param boolean $LogEnable 是否上报日志
     * @param LogConfig $LogConfig 日志配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo 自定义镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuntimeInSeconds 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $StartTime 训练开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeStatus 计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中
     * @param string $LatestInstanceId 最近一次实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TensorBoardId TensorBoard ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
     * @param string $EndTime 训练结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingInfo 计费金额信息，eg：2.00元/小时 (for后付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 预付费专用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成
     * @param string $CallbackUrl 回调地址
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FrameworkName",$param) and $param["FrameworkName"] !== null) {
            $this->FrameworkName = $param["FrameworkName"];
        }

        if (array_key_exists("FrameworkVersion",$param) and $param["FrameworkVersion"] !== null) {
            $this->FrameworkVersion = $param["FrameworkVersion"];
        }

        if (array_key_exists("FrameworkEnvironment",$param) and $param["FrameworkEnvironment"] !== null) {
            $this->FrameworkEnvironment = $param["FrameworkEnvironment"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceConfigInfos",$param) and $param["ResourceConfigInfos"] !== null) {
            $this->ResourceConfigInfos = [];
            foreach ($param["ResourceConfigInfos"] as $key => $value){
                $obj = new ResourceConfigInfo();
                $obj->deserialize($value);
                array_push($this->ResourceConfigInfos, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
        }

        if (array_key_exists("CodePackagePath",$param) and $param["CodePackagePath"] !== null) {
            $this->CodePackagePath = new CosPathInfo();
            $this->CodePackagePath->deserialize($param["CodePackagePath"]);
        }

        if (array_key_exists("StartCmdInfo",$param) and $param["StartCmdInfo"] !== null) {
            $this->StartCmdInfo = new StartCmdInfo();
            $this->StartCmdInfo->deserialize($param["StartCmdInfo"]);
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("DataConfigs",$param) and $param["DataConfigs"] !== null) {
            $this->DataConfigs = [];
            foreach ($param["DataConfigs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->DataConfigs, $obj);
            }
        }

        if (array_key_exists("TuningParameters",$param) and $param["TuningParameters"] !== null) {
            $this->TuningParameters = $param["TuningParameters"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CosPathInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("RuntimeInSeconds",$param) and $param["RuntimeInSeconds"] !== null) {
            $this->RuntimeInSeconds = $param["RuntimeInSeconds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("LatestInstanceId",$param) and $param["LatestInstanceId"] !== null) {
            $this->LatestInstanceId = $param["LatestInstanceId"];
        }

        if (array_key_exists("TensorBoardId",$param) and $param["TensorBoardId"] !== null) {
            $this->TensorBoardId = $param["TensorBoardId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
