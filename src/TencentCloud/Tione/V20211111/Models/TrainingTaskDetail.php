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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练任务详情
 *
 * @method string getId() 获取<p>训练任务ID</p>
 * @method void setId(string $Id) 设置<p>训练任务ID</p>
 * @method string getName() 获取<p>训练任务名称</p>
 * @method void setName(string $Name) 设置<p>训练任务名称</p>
 * @method string getUin() 获取<p>主账号uin</p>
 * @method void setUin(string $Uin) 设置<p>主账号uin</p>
 * @method string getSubUin() 获取<p>子账号uin</p>
 * @method void setSubUin(string $SubUin) 设置<p>子账号uin</p>
 * @method string getSubUinName() 获取<p>创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUinName(string $SubUinName) 设置<p>创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getFrameworkName() 获取<p>训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkName(string $FrameworkName) 设置<p>训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkVersion() 获取<p>训练框架版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置<p>训练框架版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkEnvironment() 获取<p>框架运行环境</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkEnvironment(string $FrameworkEnvironment) 设置<p>框架运行环境</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取<p>计费模式</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费模式</p>
 * @method string getResourceGroupId() 获取<p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceConfigInfos() 获取<p>资源配置</p>
 * @method void setResourceConfigInfos(array $ResourceConfigInfos) 设置<p>资源配置</p>
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingMode() 获取<p>训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingMode(string $TrainingMode) 设置<p>训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getCodePackagePath() 获取<p>代码包</p>
 * @method void setCodePackagePath(CosPathInfo $CodePackagePath) 设置<p>代码包</p>
 * @method StartCmdInfo getStartCmdInfo() 获取<p>启动命令信息</p>
 * @method void setStartCmdInfo(StartCmdInfo $StartCmdInfo) 设置<p>启动命令信息</p>
 * @method string getDataSource() 获取<p>数据来源，eg：DATASET、COS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置<p>数据来源，eg：DATASET、COS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataConfigs() 获取<p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataConfigs(array $DataConfigs) 设置<p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTuningParameters() 获取<p>调优参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTuningParameters(string $TuningParameters) 设置<p>调优参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getOutput() 获取<p>训练输出</p>
 * @method void setOutput(CosPathInfo $Output) 设置<p>训练输出</p>
 * @method boolean getLogEnable() 获取<p>是否上报日志</p>
 * @method void setLogEnable(boolean $LogEnable) 设置<p>是否上报日志</p>
 * @method LogConfig getLogConfig() 获取<p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfig(LogConfig $LogConfig) 设置<p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取<p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取<p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuntimeInSeconds() 获取<p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeInSeconds(integer $RuntimeInSeconds) 设置<p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getStartTime() 获取<p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeStatus() 获取<p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
 * @method void setChargeStatus(string $ChargeStatus) 设置<p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
 * @method string getLatestInstanceId() 获取<p>最近一次实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestInstanceId(string $LatestInstanceId) 设置<p>最近一次实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTensorBoardId() 获取<p>TensorBoard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTensorBoardId(string $TensorBoardId) 设置<p>TensorBoard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getEndTime() 获取<p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingInfo() 获取<p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfo(string $BillingInfo) 设置<p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>预付费专用资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>预付费专用资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
 * @method void setStatus(string $Status) 设置<p>任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
 * @method string getCallbackUrl() 获取<p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCodeRepos() 获取<p>任务关联的代码仓库配置</p>
 * @method void setCodeRepos(array $CodeRepos) 设置<p>任务关联的代码仓库配置</p>
 * @method ExposeNetworkConfig getExposeNetworkConfig() 获取<p>暴露网络配置</p>
 * @method void setExposeNetworkConfig(ExposeNetworkConfig $ExposeNetworkConfig) 设置<p>暴露网络配置</p>
 * @method OperatorInfo getOperatorInfo() 获取<p>操作者信息</p>
 * @method void setOperatorInfo(OperatorInfo $OperatorInfo) 设置<p>操作者信息</p>
 */
class TrainingTaskDetail extends AbstractModel
{
    /**
     * @var string <p>训练任务ID</p>
     */
    public $Id;

    /**
     * @var string <p>训练任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>主账号uin</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号uin</p>
     */
    public $SubUin;

    /**
     * @var string <p>创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUinName;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkName;

    /**
     * @var string <p>训练框架版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkVersion;

    /**
     * @var string <p>框架运行环境</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkEnvironment;

    /**
     * @var string <p>计费模式</p>
     */
    public $ChargeType;

    /**
     * @var string <p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var array <p>资源配置</p>
     */
    public $ResourceConfigInfos;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingMode;

    /**
     * @var CosPathInfo <p>代码包</p>
     */
    public $CodePackagePath;

    /**
     * @var StartCmdInfo <p>启动命令信息</p>
     */
    public $StartCmdInfo;

    /**
     * @var string <p>数据来源，eg：DATASET、COS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var array <p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataConfigs;

    /**
     * @var string <p>调优参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TuningParameters;

    /**
     * @var CosPathInfo <p>训练输出</p>
     */
    public $Output;

    /**
     * @var boolean <p>是否上报日志</p>
     */
    public $LogEnable;

    /**
     * @var LogConfig <p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfig;

    /**
     * @var string <p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var ImageInfo <p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var integer <p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeInSeconds;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
     */
    public $ChargeStatus;

    /**
     * @var string <p>最近一次实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestInstanceId;

    /**
     * @var string <p>TensorBoard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TensorBoardId;

    /**
     * @var string <p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfo;

    /**
     * @var string <p>预付费专用资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string <p>任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
     */
    public $Status;

    /**
     * @var string <p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackUrl;

    /**
     * @var array <p>任务关联的代码仓库配置</p>
     */
    public $CodeRepos;

    /**
     * @var ExposeNetworkConfig <p>暴露网络配置</p>
     */
    public $ExposeNetworkConfig;

    /**
     * @var OperatorInfo <p>操作者信息</p>
     */
    public $OperatorInfo;

    /**
     * @param string $Id <p>训练任务ID</p>
     * @param string $Name <p>训练任务名称</p>
     * @param string $Uin <p>主账号uin</p>
     * @param string $SubUin <p>子账号uin</p>
     * @param string $SubUinName <p>创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
     * @param string $FrameworkName <p>训练框架名称，eg：SPARK、PYSARK、TENSORFLOW、PYTORCH</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkVersion <p>训练框架版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkEnvironment <p>框架运行环境</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType <p>计费模式</p>
     * @param string $ResourceGroupId <p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceConfigInfos <p>资源配置</p>
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingMode <p>训练模式，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $CodePackagePath <p>代码包</p>
     * @param StartCmdInfo $StartCmdInfo <p>启动命令信息</p>
     * @param string $DataSource <p>数据来源，eg：DATASET、COS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataConfigs <p>数据配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TuningParameters <p>调优参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $Output <p>训练输出</p>
     * @param boolean $LogEnable <p>是否上报日志</p>
     * @param LogConfig $LogConfig <p>日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>VPC ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId <p>子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo <p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuntimeInSeconds <p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $StartTime <p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeStatus <p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
     * @param string $LatestInstanceId <p>最近一次实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TensorBoardId <p>TensorBoard ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $EndTime <p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingInfo <p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>预付费专用资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态，eg：STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
     * @param string $CallbackUrl <p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CodeRepos <p>任务关联的代码仓库配置</p>
     * @param ExposeNetworkConfig $ExposeNetworkConfig <p>暴露网络配置</p>
     * @param OperatorInfo $OperatorInfo <p>操作者信息</p>
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

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
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

        if (array_key_exists("CodeRepos",$param) and $param["CodeRepos"] !== null) {
            $this->CodeRepos = [];
            foreach ($param["CodeRepos"] as $key => $value){
                $obj = new CodeRepoConfig();
                $obj->deserialize($value);
                array_push($this->CodeRepos, $obj);
            }
        }

        if (array_key_exists("ExposeNetworkConfig",$param) and $param["ExposeNetworkConfig"] !== null) {
            $this->ExposeNetworkConfig = new ExposeNetworkConfig();
            $this->ExposeNetworkConfig->deserialize($param["ExposeNetworkConfig"]);
        }

        if (array_key_exists("OperatorInfo",$param) and $param["OperatorInfo"] !== null) {
            $this->OperatorInfo = new OperatorInfo();
            $this->OperatorInfo->deserialize($param["OperatorInfo"]);
        }
    }
}
