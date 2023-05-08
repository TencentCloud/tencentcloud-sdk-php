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
 * CreateTrainingTask请求参数结构体
 *
 * @method string getName() 获取训练任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method void setName(string $Name) 设置训练任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
 * @method string getChargeType() 获取计费模式，eg：PREPAID 包年包月（资源组）;
POSTPAID_BY_HOUR 按量计费
 * @method void setChargeType(string $ChargeType) 设置计费模式，eg：PREPAID 包年包月（资源组）;
POSTPAID_BY_HOUR 按量计费
 * @method array getResourceConfigInfos() 获取资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}]
 * @method void setResourceConfigInfos(array $ResourceConfigInfos) 设置资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}]
 * @method CosPathInfo getCodePackagePath() 获取COS代码包路径
 * @method void setCodePackagePath(CosPathInfo $CodePackagePath) 设置COS代码包路径
 * @method string getTrainingMode() 获取训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD
 * @method void setTrainingMode(string $TrainingMode) 设置训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD
 * @method CosPathInfo getOutput() 获取COS训练输出路径
 * @method void setOutput(CosPathInfo $Output) 设置COS训练输出路径
 * @method boolean getLogEnable() 获取是否上报日志
 * @method void setLogEnable(boolean $LogEnable) 设置是否上报日志
 * @method string getFrameworkName() 获取训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH
 * @method void setFrameworkName(string $FrameworkName) 设置训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH
 * @method string getFrameworkVersion() 获取训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9
 * @method string getFrameworkEnvironment() 获取训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu
 * @method void setFrameworkEnvironment(string $FrameworkEnvironment) 设置训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu
 * @method string getResourceGroupId() 获取预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询
 * @method void setResourceGroupId(string $ResourceGroupId) 设置预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询
 * @method array getTags() 获取标签配置
 * @method void setTags(array $Tags) 设置标签配置
 * @method ImageInfo getImageInfo() 获取自定义镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置自定义镜像信息
 * @method StartCmdInfo getStartCmdInfo() 获取启动命令信息，默认为sh start.sh
 * @method void setStartCmdInfo(StartCmdInfo $StartCmdInfo) 设置启动命令信息，默认为sh start.sh
 * @method array getDataConfigs() 获取数据配置，依赖DataSource字段
 * @method void setDataConfigs(array $DataConfigs) 设置数据配置，依赖DataSource字段
 * @method string getVpcId() 获取VPC Id
 * @method void setVpcId(string $VpcId) 设置VPC Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method LogConfig getLogConfig() 获取CLS日志配置
 * @method void setLogConfig(LogConfig $LogConfig) 设置CLS日志配置
 * @method string getTuningParameters() 获取调优参数
 * @method void setTuningParameters(string $TuningParameters) 设置调优参数
 * @method string getRemark() 获取备注，最多500个字
 * @method void setRemark(string $Remark) 设置备注，最多500个字
 * @method string getDataSource() 获取数据来源，eg：DATASET、COS、CFS、HDFS
 * @method void setDataSource(string $DataSource) 设置数据来源，eg：DATASET、COS、CFS、HDFS
 * @method string getCallbackUrl() 获取回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&内容详见：[[TI-ONE接口回调说明]](https://cloud.tencent.com/document/product/851/84292)
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&内容详见：[[TI-ONE接口回调说明]](https://cloud.tencent.com/document/product/851/84292)
 */
class CreateTrainingTaskRequest extends AbstractModel
{
    /**
     * @var string 训练任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     */
    public $Name;

    /**
     * @var string 计费模式，eg：PREPAID 包年包月（资源组）;
POSTPAID_BY_HOUR 按量计费
     */
    public $ChargeType;

    /**
     * @var array 资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}]
     */
    public $ResourceConfigInfos;

    /**
     * @var CosPathInfo COS代码包路径
     */
    public $CodePackagePath;

    /**
     * @var string 训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD
     */
    public $TrainingMode;

    /**
     * @var CosPathInfo COS训练输出路径
     */
    public $Output;

    /**
     * @var boolean 是否上报日志
     */
    public $LogEnable;

    /**
     * @var string 训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH
     */
    public $FrameworkName;

    /**
     * @var string 训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9
     */
    public $FrameworkVersion;

    /**
     * @var string 训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu
     */
    public $FrameworkEnvironment;

    /**
     * @var string 预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询
     */
    public $ResourceGroupId;

    /**
     * @var array 标签配置
     */
    public $Tags;

    /**
     * @var ImageInfo 自定义镜像信息
     */
    public $ImageInfo;

    /**
     * @var StartCmdInfo 启动命令信息，默认为sh start.sh
     */
    public $StartCmdInfo;

    /**
     * @var array 数据配置，依赖DataSource字段
     */
    public $DataConfigs;

    /**
     * @var string VPC Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var LogConfig CLS日志配置
     */
    public $LogConfig;

    /**
     * @var string 调优参数
     */
    public $TuningParameters;

    /**
     * @var string 备注，最多500个字
     */
    public $Remark;

    /**
     * @var string 数据来源，eg：DATASET、COS、CFS、HDFS
     */
    public $DataSource;

    /**
     * @var string 回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&内容详见：[[TI-ONE接口回调说明]](https://cloud.tencent.com/document/product/851/84292)
     */
    public $CallbackUrl;

    /**
     * @param string $Name 训练任务名称，不超过60个字符，仅支持中英文、数字、下划线"_"、短横"-"，只能以中英文、数字开头
     * @param string $ChargeType 计费模式，eg：PREPAID 包年包月（资源组）;
POSTPAID_BY_HOUR 按量计费
     * @param array $ResourceConfigInfos 资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}]
     * @param CosPathInfo $CodePackagePath COS代码包路径
     * @param string $TrainingMode 训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD
     * @param CosPathInfo $Output COS训练输出路径
     * @param boolean $LogEnable 是否上报日志
     * @param string $FrameworkName 训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH
     * @param string $FrameworkVersion 训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9
     * @param string $FrameworkEnvironment 训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu
     * @param string $ResourceGroupId 预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询
     * @param array $Tags 标签配置
     * @param ImageInfo $ImageInfo 自定义镜像信息
     * @param StartCmdInfo $StartCmdInfo 启动命令信息，默认为sh start.sh
     * @param array $DataConfigs 数据配置，依赖DataSource字段
     * @param string $VpcId VPC Id
     * @param string $SubnetId 子网Id
     * @param LogConfig $LogConfig CLS日志配置
     * @param string $TuningParameters 调优参数
     * @param string $Remark 备注，最多500个字
     * @param string $DataSource 数据来源，eg：DATASET、COS、CFS、HDFS
     * @param string $CallbackUrl 回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&内容详见：[[TI-ONE接口回调说明]](https://cloud.tencent.com/document/product/851/84292)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceConfigInfos",$param) and $param["ResourceConfigInfos"] !== null) {
            $this->ResourceConfigInfos = [];
            foreach ($param["ResourceConfigInfos"] as $key => $value){
                $obj = new ResourceConfigInfo();
                $obj->deserialize($value);
                array_push($this->ResourceConfigInfos, $obj);
            }
        }

        if (array_key_exists("CodePackagePath",$param) and $param["CodePackagePath"] !== null) {
            $this->CodePackagePath = new CosPathInfo();
            $this->CodePackagePath->deserialize($param["CodePackagePath"]);
        }

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CosPathInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
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

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("StartCmdInfo",$param) and $param["StartCmdInfo"] !== null) {
            $this->StartCmdInfo = new StartCmdInfo();
            $this->StartCmdInfo->deserialize($param["StartCmdInfo"]);
        }

        if (array_key_exists("DataConfigs",$param) and $param["DataConfigs"] !== null) {
            $this->DataConfigs = [];
            foreach ($param["DataConfigs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->DataConfigs, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("TuningParameters",$param) and $param["TuningParameters"] !== null) {
            $this->TuningParameters = $param["TuningParameters"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
