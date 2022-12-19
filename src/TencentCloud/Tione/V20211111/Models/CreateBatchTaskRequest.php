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
 * CreateBatchTask请求参数结构体
 *
 * @method string getBatchTaskName() 获取跑批任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method void setBatchTaskName(string $BatchTaskName) 设置跑批任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method string getChargeType() 获取计费模式，eg：PREPAID预付费，即包年包月；POSTPAID_BY_HOUR按小时后付费
 * @method void setChargeType(string $ChargeType) 设置计费模式，eg：PREPAID预付费，即包年包月；POSTPAID_BY_HOUR按小时后付费
 * @method ResourceConfigInfo getResourceConfigInfo() 获取资源配置
 * @method void setResourceConfigInfo(ResourceConfigInfo $ResourceConfigInfo) 设置资源配置
 * @method array getOutputs() 获取结果输出
 * @method void setOutputs(array $Outputs) 设置结果输出
 * @method boolean getLogEnable() 获取是否上报日志
 * @method void setLogEnable(boolean $LogEnable) 设置是否上报日志
 * @method integer getJobType() 获取工作类型 1:单次 2:周期
 * @method void setJobType(integer $JobType) 设置工作类型 1:单次 2:周期
 * @method CronInfo getCronInfo() 获取任务周期描述
 * @method void setCronInfo(CronInfo $CronInfo) 设置任务周期描述
 * @method string getResourceGroupId() 获取预付费专用资源组
 * @method void setResourceGroupId(string $ResourceGroupId) 设置预付费专用资源组
 * @method array getTags() 获取标签配置
 * @method void setTags(array $Tags) 设置标签配置
 * @method ModelInfo getModelInfo() 获取服务对应的模型信息，有模型文件时需要填写
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置服务对应的模型信息，有模型文件时需要填写
 * @method ImageInfo getImageInfo() 获取自定义镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置自定义镜像信息
 * @method CosPathInfo getCodePackage() 获取代码包
 * @method void setCodePackage(CosPathInfo $CodePackage) 设置代码包
 * @method string getStartCmd() 获取启动命令
 * @method void setStartCmd(string $StartCmd) 设置启动命令
 * @method array getDataConfigs() 获取数据配置
 * @method void setDataConfigs(array $DataConfigs) 设置数据配置
 * @method LogConfig getLogConfig() 获取日志配置
 * @method void setLogConfig(LogConfig $LogConfig) 设置日志配置
 * @method string getVpcId() 获取VPC Id
 * @method void setVpcId(string $VpcId) 设置VPC Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getCallbackUrl() 获取任务执行结果回调URL，仅支持http和https。回调格式&内容详见: [TI-ONE 接口回调说明](https://cloud.tencent.com/document/product/851/84292)
 * @method void setCallbackUrl(string $CallbackUrl) 设置任务执行结果回调URL，仅支持http和https。回调格式&内容详见: [TI-ONE 接口回调说明](https://cloud.tencent.com/document/product/851/84292)
 */
class CreateBatchTaskRequest extends AbstractModel
{
    /**
     * @var string 跑批任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     */
    public $BatchTaskName;

    /**
     * @var string 计费模式，eg：PREPAID预付费，即包年包月；POSTPAID_BY_HOUR按小时后付费
     */
    public $ChargeType;

    /**
     * @var ResourceConfigInfo 资源配置
     */
    public $ResourceConfigInfo;

    /**
     * @var array 结果输出
     */
    public $Outputs;

    /**
     * @var boolean 是否上报日志
     */
    public $LogEnable;

    /**
     * @var integer 工作类型 1:单次 2:周期
     */
    public $JobType;

    /**
     * @var CronInfo 任务周期描述
     */
    public $CronInfo;

    /**
     * @var string 预付费专用资源组
     */
    public $ResourceGroupId;

    /**
     * @var array 标签配置
     */
    public $Tags;

    /**
     * @var ModelInfo 服务对应的模型信息，有模型文件时需要填写
     */
    public $ModelInfo;

    /**
     * @var ImageInfo 自定义镜像信息
     */
    public $ImageInfo;

    /**
     * @var CosPathInfo 代码包
     */
    public $CodePackage;

    /**
     * @var string 启动命令
     */
    public $StartCmd;

    /**
     * @var array 数据配置
     */
    public $DataConfigs;

    /**
     * @var LogConfig 日志配置
     */
    public $LogConfig;

    /**
     * @var string VPC Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 任务执行结果回调URL，仅支持http和https。回调格式&内容详见: [TI-ONE 接口回调说明](https://cloud.tencent.com/document/product/851/84292)
     */
    public $CallbackUrl;

    /**
     * @param string $BatchTaskName 跑批任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     * @param string $ChargeType 计费模式，eg：PREPAID预付费，即包年包月；POSTPAID_BY_HOUR按小时后付费
     * @param ResourceConfigInfo $ResourceConfigInfo 资源配置
     * @param array $Outputs 结果输出
     * @param boolean $LogEnable 是否上报日志
     * @param integer $JobType 工作类型 1:单次 2:周期
     * @param CronInfo $CronInfo 任务周期描述
     * @param string $ResourceGroupId 预付费专用资源组
     * @param array $Tags 标签配置
     * @param ModelInfo $ModelInfo 服务对应的模型信息，有模型文件时需要填写
     * @param ImageInfo $ImageInfo 自定义镜像信息
     * @param CosPathInfo $CodePackage 代码包
     * @param string $StartCmd 启动命令
     * @param array $DataConfigs 数据配置
     * @param LogConfig $LogConfig 日志配置
     * @param string $VpcId VPC Id
     * @param string $SubnetId 子网Id
     * @param string $Remark 备注
     * @param string $CallbackUrl 任务执行结果回调URL，仅支持http和https。回调格式&内容详见: [TI-ONE 接口回调说明](https://cloud.tencent.com/document/product/851/84292)
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
        if (array_key_exists("BatchTaskName",$param) and $param["BatchTaskName"] !== null) {
            $this->BatchTaskName = $param["BatchTaskName"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceConfigInfo",$param) and $param["ResourceConfigInfo"] !== null) {
            $this->ResourceConfigInfo = new ResourceConfigInfo();
            $this->ResourceConfigInfo->deserialize($param["ResourceConfigInfo"]);
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("CronInfo",$param) and $param["CronInfo"] !== null) {
            $this->CronInfo = new CronInfo();
            $this->CronInfo->deserialize($param["CronInfo"]);
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ModelInfo",$param) and $param["ModelInfo"] !== null) {
            $this->ModelInfo = new ModelInfo();
            $this->ModelInfo->deserialize($param["ModelInfo"]);
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("CodePackage",$param) and $param["CodePackage"] !== null) {
            $this->CodePackage = new CosPathInfo();
            $this->CodePackage->deserialize($param["CodePackage"]);
        }

        if (array_key_exists("StartCmd",$param) and $param["StartCmd"] !== null) {
            $this->StartCmd = $param["StartCmd"];
        }

        if (array_key_exists("DataConfigs",$param) and $param["DataConfigs"] !== null) {
            $this->DataConfigs = [];
            foreach ($param["DataConfigs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->DataConfigs, $obj);
            }
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
