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
 * 出参类型
 *
 * @method string getId() 获取<p>训练任务ID</p>
 * @method void setId(string $Id) 设置<p>训练任务ID</p>
 * @method string getName() 获取<p>训练任务名称</p>
 * @method void setName(string $Name) 设置<p>训练任务名称</p>
 * @method string getFrameworkName() 获取<p>框架名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkName(string $FrameworkName) 设置<p>框架名称</p>
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
 * @method string getChargeStatus() 获取<p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
 * @method void setChargeStatus(string $ChargeStatus) 设置<p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
 * @method string getResourceGroupId() 获取<p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceConfigInfos() 获取<p>资源配置</p>
 * @method void setResourceConfigInfos(array $ResourceConfigInfos) 设置<p>资源配置</p>
 * @method string getTrainingMode() 获取<p>训练模式eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingMode(string $TrainingMode) 设置<p>训练模式eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态，eg：SUBMITTING提交中、PENDING排队中、<br>STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
 * @method void setStatus(string $Status) 设置<p>任务状态，eg：SUBMITTING提交中、PENDING排队中、<br>STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
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
 * @method string getEndTime() 获取<p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getOutput() 获取<p>训练输出</p>
 * @method void setOutput(CosPathInfo $Output) 设置<p>训练输出</p>
 * @method string getFailureReason() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getBillingInfo() 获取<p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
 * @method void setBillingInfo(string $BillingInfo) 设置<p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
 * @method string getResourceGroupName() 获取<p>预付费专用资源组名称</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>预付费专用资源组名称</p>
 * @method ImageInfo getImageInfo() 获取<p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackUrl() 获取<p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取<p>任务subUin信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUin(string $SubUin) 设置<p>任务subUin信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUinName() 获取<p>任务创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUinName(string $SubUinName) 设置<p>任务创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取<p>任务AppId</p>
 * @method void setAppId(string $AppId) 设置<p>任务AppId</p>
 * @method array getEnvs() 获取<p>环境变量</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量</p>
 * @method OperatorInfo getLatestOperatorInfo() 获取<p>操作者信息</p>
 * @method void setLatestOperatorInfo(OperatorInfo $LatestOperatorInfo) 设置<p>操作者信息</p>
 */
class TrainingTaskSetItem extends AbstractModel
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
     * @var string <p>框架名称</p>
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
     * @var string <p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
     */
    public $ChargeStatus;

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
     * @var string <p>训练模式eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingMode;

    /**
     * @var string <p>任务状态，eg：SUBMITTING提交中、PENDING排队中、<br>STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
     */
    public $Status;

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
     * @var string <p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var CosPathInfo <p>训练输出</p>
     */
    public $Output;

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
     * @var string <p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
     */
    public $BillingInfo;

    /**
     * @var string <p>预付费专用资源组名称</p>
     */
    public $ResourceGroupName;

    /**
     * @var ImageInfo <p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var string <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var array <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackUrl;

    /**
     * @var string <p>任务subUin信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUin;

    /**
     * @var string <p>任务创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUinName;

    /**
     * @var string <p>任务AppId</p>
     */
    public $AppId;

    /**
     * @var array <p>环境变量</p>
     */
    public $Envs;

    /**
     * @var OperatorInfo <p>操作者信息</p>
     */
    public $LatestOperatorInfo;

    /**
     * @param string $Id <p>训练任务ID</p>
     * @param string $Name <p>训练任务名称</p>
     * @param string $FrameworkName <p>框架名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkVersion <p>训练框架版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkEnvironment <p>框架运行环境</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType <p>计费模式</p>
     * @param string $ChargeStatus <p>计费状态，eg：BILLING计费中，ARREARS_STOP欠费停止，NOT_BILLING不在计费中</p>
     * @param string $ResourceGroupId <p>预付费专用资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceConfigInfos <p>资源配置</p>
     * @param string $TrainingMode <p>训练模式eg：PS_WORKER、DDP、MPI、HOROVOD</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态，eg：SUBMITTING提交中、PENDING排队中、<br>STARTING启动中、RUNNING运行中、STOPPING停止中、STOPPED已停止、FAILED异常、SUCCEED已完成</p>
     * @param integer $RuntimeInSeconds <p>运行时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $StartTime <p>训练开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>训练结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $Output <p>训练输出</p>
     * @param string $FailureReason <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $BillingInfo <p>计费金额信息，eg：2.00元/小时 (按量计费)</p>
     * @param string $ResourceGroupName <p>预付费专用资源组名称</p>
     * @param ImageInfo $ImageInfo <p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackUrl <p>回调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin <p>任务subUin信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUinName <p>任务创建者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId <p>任务AppId</p>
     * @param array $Envs <p>环境变量</p>
     * @param OperatorInfo $LatestOperatorInfo <p>操作者信息</p>
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

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
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

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CosPathInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("LatestOperatorInfo",$param) and $param["LatestOperatorInfo"] !== null) {
            $this->LatestOperatorInfo = new OperatorInfo();
            $this->LatestOperatorInfo->deserialize($param["LatestOperatorInfo"]);
        }
    }
}
