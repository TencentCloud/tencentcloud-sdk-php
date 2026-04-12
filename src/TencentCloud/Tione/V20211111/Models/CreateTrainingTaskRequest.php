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
 * CreateTrainingTask请求参数结构体
 *
 * @method string getName() 获取<p>训练任务名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
 * @method void setName(string $Name) 设置<p>训练任务名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
 * @method string getChargeType() 获取<p>计费模式，eg：PREPAID 包年包月（资源组）;<br>POSTPAID_BY_HOUR 按量计费</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费模式，eg：PREPAID 包年包月（资源组）;<br>POSTPAID_BY_HOUR 按量计费</p>
 * @method array getResourceConfigInfos() 获取<p>资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{&quot;Role&quot;:&quot;WORKER&quot;, &quot;InstanceType&quot;: &quot;TI.S.MEDIUM.POST&quot;, &quot;InstanceNum&quot;: 1}]</p>
 * @method void setResourceConfigInfos(array $ResourceConfigInfos) 设置<p>资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{&quot;Role&quot;:&quot;WORKER&quot;, &quot;InstanceType&quot;: &quot;TI.S.MEDIUM.POST&quot;, &quot;InstanceNum&quot;: 1}]</p>
 * @method string getFrameworkName() 获取<p>训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH</p>
 * @method void setFrameworkName(string $FrameworkName) 设置<p>训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH</p>
 * @method string getFrameworkVersion() 获取<p>训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9</p>
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置<p>训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9</p>
 * @method string getFrameworkEnvironment() 获取<p>训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu</p>
 * @method void setFrameworkEnvironment(string $FrameworkEnvironment) 设置<p>训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu</p>
 * @method string getResourceGroupId() 获取<p>预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询</p>
 * @method array getTags() 获取<p>标签配置</p>
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
 * @method ImageInfo getImageInfo() 获取<p>自定义镜像信息</p>
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>自定义镜像信息</p>
 * @method CosPathInfo getCodePackagePath() 获取<p>COS代码包路径</p>
 * @method void setCodePackagePath(CosPathInfo $CodePackagePath) 设置<p>COS代码包路径</p>
 * @method StartCmdInfo getStartCmdInfo() 获取<p>任务的启动命令，按任务训练模式输入，如遇特殊字符导致配置失败，可使用EncodedStartCmdInfo参数</p>
 * @method void setStartCmdInfo(StartCmdInfo $StartCmdInfo) 设置<p>任务的启动命令，按任务训练模式输入，如遇特殊字符导致配置失败，可使用EncodedStartCmdInfo参数</p>
 * @method string getTrainingMode() 获取<p>训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
 * @method void setTrainingMode(string $TrainingMode) 设置<p>训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
 * @method array getDataConfigs() 获取<p>数据配置，依赖DataSource字段，数量不超过10个</p>
 * @method void setDataConfigs(array $DataConfigs) 设置<p>数据配置，依赖DataSource字段，数量不超过10个</p>
 * @method string getVpcId() 获取<p>VPC Id</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC Id</p>
 * @method string getSubnetId() 获取<p>子网Id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网Id</p>
 * @method CosPathInfo getOutput() 获取<p>COS训练输出路径</p>
 * @method void setOutput(CosPathInfo $Output) 设置<p>COS训练输出路径</p>
 * @method LogConfig getLogConfig() 获取<p>CLS日志配置</p>
 * @method void setLogConfig(LogConfig $LogConfig) 设置<p>CLS日志配置</p>
 * @method string getTuningParameters() 获取<p>调优参数，不超过2048个字符</p>
 * @method void setTuningParameters(string $TuningParameters) 设置<p>调优参数，不超过2048个字符</p>
 * @method boolean getLogEnable() 获取<p>是否上报日志</p>
 * @method void setLogEnable(boolean $LogEnable) 设置<p>是否上报日志</p>
 * @method string getRemark() 获取<p>备注，不超过1024个字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注，不超过1024个字符</p>
 * @method string getDataSource() 获取<p>数据来源，eg：DATASET、COS、CFS、CFSTurbo、HDFS、GooseFSx</p>
 * @method void setDataSource(string $DataSource) 设置<p>数据来源，eg：DATASET、COS、CFS、CFSTurbo、HDFS、GooseFSx</p>
 * @method string getCallbackUrl() 获取<p>回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&amp;内容详见：<a href="https://cloud.tencent.com/document/product/851/84292">[TI-ONE接口回调说明]</a></p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&amp;内容详见：<a href="https://cloud.tencent.com/document/product/851/84292">[TI-ONE接口回调说明]</a></p>
 * @method EncodedStartCmdInfo getEncodedStartCmdInfo() 获取<p>编码后的任务启动命令，与StartCmdInfo同时配置时，仅当前参数生效</p>
 * @method void setEncodedStartCmdInfo(EncodedStartCmdInfo $EncodedStartCmdInfo) 设置<p>编码后的任务启动命令，与StartCmdInfo同时配置时，仅当前参数生效</p>
 * @method array getCodeRepos() 获取<p>代码仓库配置</p>
 * @method void setCodeRepos(array $CodeRepos) 设置<p>代码仓库配置</p>
 * @method ExposeNetworkConfig getExposeNetworkConfig() 获取<p>网络暴露配置</p>
 * @method void setExposeNetworkConfig(ExposeNetworkConfig $ExposeNetworkConfig) 设置<p>网络暴露配置</p>
 * @method array getEnvs() 获取<p>环境变量</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量</p>
 */
class CreateTrainingTaskRequest extends AbstractModel
{
    /**
     * @var string <p>训练任务名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
     */
    public $Name;

    /**
     * @var string <p>计费模式，eg：PREPAID 包年包月（资源组）;<br>POSTPAID_BY_HOUR 按量计费</p>
     */
    public $ChargeType;

    /**
     * @var array <p>资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{&quot;Role&quot;:&quot;WORKER&quot;, &quot;InstanceType&quot;: &quot;TI.S.MEDIUM.POST&quot;, &quot;InstanceNum&quot;: 1}]</p>
     */
    public $ResourceConfigInfos;

    /**
     * @var string <p>训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH</p>
     */
    public $FrameworkName;

    /**
     * @var string <p>训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9</p>
     */
    public $FrameworkVersion;

    /**
     * @var string <p>训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu</p>
     */
    public $FrameworkEnvironment;

    /**
     * @var string <p>预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询</p>
     */
    public $ResourceGroupId;

    /**
     * @var array <p>标签配置</p>
     */
    public $Tags;

    /**
     * @var ImageInfo <p>自定义镜像信息</p>
     */
    public $ImageInfo;

    /**
     * @var CosPathInfo <p>COS代码包路径</p>
     */
    public $CodePackagePath;

    /**
     * @var StartCmdInfo <p>任务的启动命令，按任务训练模式输入，如遇特殊字符导致配置失败，可使用EncodedStartCmdInfo参数</p>
     */
    public $StartCmdInfo;

    /**
     * @var string <p>训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
     */
    public $TrainingMode;

    /**
     * @var array <p>数据配置，依赖DataSource字段，数量不超过10个</p>
     */
    public $DataConfigs;

    /**
     * @var string <p>VPC Id</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网Id</p>
     */
    public $SubnetId;

    /**
     * @var CosPathInfo <p>COS训练输出路径</p>
     */
    public $Output;

    /**
     * @var LogConfig <p>CLS日志配置</p>
     */
    public $LogConfig;

    /**
     * @var string <p>调优参数，不超过2048个字符</p>
     */
    public $TuningParameters;

    /**
     * @var boolean <p>是否上报日志</p>
     */
    public $LogEnable;

    /**
     * @var string <p>备注，不超过1024个字符</p>
     */
    public $Remark;

    /**
     * @var string <p>数据来源，eg：DATASET、COS、CFS、CFSTurbo、HDFS、GooseFSx</p>
     */
    public $DataSource;

    /**
     * @var string <p>回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&amp;内容详见：<a href="https://cloud.tencent.com/document/product/851/84292">[TI-ONE接口回调说明]</a></p>
     */
    public $CallbackUrl;

    /**
     * @var EncodedStartCmdInfo <p>编码后的任务启动命令，与StartCmdInfo同时配置时，仅当前参数生效</p>
     */
    public $EncodedStartCmdInfo;

    /**
     * @var array <p>代码仓库配置</p>
     */
    public $CodeRepos;

    /**
     * @var ExposeNetworkConfig <p>网络暴露配置</p>
     */
    public $ExposeNetworkConfig;

    /**
     * @var array <p>环境变量</p>
     */
    public $Envs;

    /**
     * @param string $Name <p>训练任务名称，不超过60个字符，仅支持中英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以中英文、数字开头</p>
     * @param string $ChargeType <p>计费模式，eg：PREPAID 包年包月（资源组）;<br>POSTPAID_BY_HOUR 按量计费</p>
     * @param array $ResourceConfigInfos <p>资源配置，需填写对应算力规格ID和节点数量，算力规格ID查询接口为DescribeBillingSpecsPrice，eg：[{&quot;Role&quot;:&quot;WORKER&quot;, &quot;InstanceType&quot;: &quot;TI.S.MEDIUM.POST&quot;, &quot;InstanceNum&quot;: 1}]</p>
     * @param string $FrameworkName <p>训练框架名称，通过DescribeTrainingFrameworks接口查询，eg：SPARK、PYSPARK、TENSORFLOW、PYTORCH</p>
     * @param string $FrameworkVersion <p>训练框架版本，通过DescribeTrainingFrameworks接口查询，eg：1.15、1.9</p>
     * @param string $FrameworkEnvironment <p>训练框架环境，通过DescribeTrainingFrameworks接口查询，eg：tf1.15-py3.7-cpu、torch1.9-py3.8-cuda11.1-gpu</p>
     * @param string $ResourceGroupId <p>预付费专用资源组ID，通过DescribeBillingResourceGroups接口查询</p>
     * @param array $Tags <p>标签配置</p>
     * @param ImageInfo $ImageInfo <p>自定义镜像信息</p>
     * @param CosPathInfo $CodePackagePath <p>COS代码包路径</p>
     * @param StartCmdInfo $StartCmdInfo <p>任务的启动命令，按任务训练模式输入，如遇特殊字符导致配置失败，可使用EncodedStartCmdInfo参数</p>
     * @param string $TrainingMode <p>训练模式，通过DescribeTrainingFrameworks接口查询，eg：PS_WORKER、DDP、MPI、HOROVOD</p>
     * @param array $DataConfigs <p>数据配置，依赖DataSource字段，数量不超过10个</p>
     * @param string $VpcId <p>VPC Id</p>
     * @param string $SubnetId <p>子网Id</p>
     * @param CosPathInfo $Output <p>COS训练输出路径</p>
     * @param LogConfig $LogConfig <p>CLS日志配置</p>
     * @param string $TuningParameters <p>调优参数，不超过2048个字符</p>
     * @param boolean $LogEnable <p>是否上报日志</p>
     * @param string $Remark <p>备注，不超过1024个字符</p>
     * @param string $DataSource <p>数据来源，eg：DATASET、COS、CFS、CFSTurbo、HDFS、GooseFSx</p>
     * @param string $CallbackUrl <p>回调地址，用于创建/启动/停止训练任务的异步回调。回调格式&amp;内容详见：<a href="https://cloud.tencent.com/document/product/851/84292">[TI-ONE接口回调说明]</a></p>
     * @param EncodedStartCmdInfo $EncodedStartCmdInfo <p>编码后的任务启动命令，与StartCmdInfo同时配置时，仅当前参数生效</p>
     * @param array $CodeRepos <p>代码仓库配置</p>
     * @param ExposeNetworkConfig $ExposeNetworkConfig <p>网络暴露配置</p>
     * @param array $Envs <p>环境变量</p>
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

        if (array_key_exists("CodePackagePath",$param) and $param["CodePackagePath"] !== null) {
            $this->CodePackagePath = new CosPathInfo();
            $this->CodePackagePath->deserialize($param["CodePackagePath"]);
        }

        if (array_key_exists("StartCmdInfo",$param) and $param["StartCmdInfo"] !== null) {
            $this->StartCmdInfo = new StartCmdInfo();
            $this->StartCmdInfo->deserialize($param["StartCmdInfo"]);
        }

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
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

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CosPathInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("TuningParameters",$param) and $param["TuningParameters"] !== null) {
            $this->TuningParameters = $param["TuningParameters"];
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
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

        if (array_key_exists("EncodedStartCmdInfo",$param) and $param["EncodedStartCmdInfo"] !== null) {
            $this->EncodedStartCmdInfo = new EncodedStartCmdInfo();
            $this->EncodedStartCmdInfo->deserialize($param["EncodedStartCmdInfo"]);
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

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }
    }
}
