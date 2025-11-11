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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataTransform请求参数结构体
 *
 * @method integer getFuncType() 获取任务类型. 1: 指定主题；2:动态创建。详情请参考[创建加工任务文档](https://cloud.tencent.com/document/product/614/63940)。
 * @method void setFuncType(integer $FuncType) 设置任务类型. 1: 指定主题；2:动态创建。详情请参考[创建加工任务文档](https://cloud.tencent.com/document/product/614/63940)。
 * @method string getSrcTopicId() 获取日志主题ID
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setSrcTopicId(string $SrcTopicId) 设置日志主题ID
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method string getName() 获取加工任务名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 最长 255 个字符
 * @method void setName(string $Name) 设置加工任务名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 最长 255 个字符
 * @method string getEtlContent() 获取加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
 * @method void setEtlContent(string $EtlContent) 设置加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
 * @method integer getTaskType() 获取加工类型。
1：使用源日志主题中的随机数据，进行加工预览；2：使用用户自定义测试数据，进行加工预览；3：创建真实加工任务。
 * @method void setTaskType(integer $TaskType) 设置加工类型。
1：使用源日志主题中的随机数据，进行加工预览；2：使用用户自定义测试数据，进行加工预览；3：创建真实加工任务。
 * @method array getDstResources() 获取加工任务目标topic_id以及别名,当FuncType=1时，该参数必填，当FuncType=2时，无需填写。
目标topic_id，通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
别名限制 1.不能为空字符串，2. 不能包含字符'|'。

 * @method void setDstResources(array $DstResources) 设置加工任务目标topic_id以及别名,当FuncType=1时，该参数必填，当FuncType=2时，无需填写。
目标topic_id，通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
别名限制 1.不能为空字符串，2. 不能包含字符'|'。

 * @method integer getEnableFlag() 获取任务启动状态.   默认为1:开启,  2:关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启动状态.   默认为1:开启,  2:关闭
 * @method array getPreviewLogStatistics() 获取用于预览加工结果的测试数据
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setPreviewLogStatistics(array $PreviewLogStatistics) 设置用于预览加工结果的测试数据
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method boolean getBackupGiveUpData() 获取当FuncType为2时，动态创建的日志集、日志主题的个数超出产品规格限制是否丢弃数据， 默认为false。

false：创建兜底日志集、日志主题并将日志写入兜底主题；
true：丢弃日志数据。
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) 设置当FuncType为2时，动态创建的日志集、日志主题的个数超出产品规格限制是否丢弃数据， 默认为false。

false：创建兜底日志集、日志主题并将日志写入兜底主题；
true：丢弃日志数据。
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。1：关闭，2：开启。
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。1：关闭，2：开启。
 * @method integer getDataTransformType() 获取数据加工类型。0：标准加工任务； 1：前置加工任务。前置加工任务将采集的日志处理完成后，再写入日志主题。
 * @method void setDataTransformType(integer $DataTransformType) 设置数据加工类型。0：标准加工任务； 1：前置加工任务。前置加工任务将采集的日志处理完成后，再写入日志主题。
 * @method integer getKeepFailureLog() 获取保留失败日志状态，1:不保留(默认)，2:保留。
 * @method void setKeepFailureLog(integer $KeepFailureLog) 设置保留失败日志状态，1:不保留(默认)，2:保留。
 * @method string getFailureLogKey() 获取失败日志的字段名称
 * @method void setFailureLogKey(string $FailureLogKey) 设置失败日志的字段名称
 * @method integer getProcessFromTimestamp() 获取指定加工数据的开始时间, 秒级时间戳。
 - 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
 * @method void setProcessFromTimestamp(integer $ProcessFromTimestamp) 设置指定加工数据的开始时间, 秒级时间戳。
 - 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
 * @method integer getProcessToTimestamp() 获取指定加工数据的结束时间，秒级时间戳。

-  不可指定未来的时间
-  不填则表示持续执行
 * @method void setProcessToTimestamp(integer $ProcessToTimestamp) 设置指定加工数据的结束时间，秒级时间戳。

-  不可指定未来的时间
-  不填则表示持续执行
 * @method string getTaskId() 获取对已经创建的并且使用了关联外部数据库能力的任务预览（TaskType 为 1 或 2）时，该值必传
数据加工任务ID- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
 * @method void setTaskId(string $TaskId) 设置对已经创建的并且使用了关联外部数据库能力的任务预览（TaskType 为 1 或 2）时，该值必传
数据加工任务ID- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
 * @method array getDataTransformSqlDataSources() 获取关联的数据源信息
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) 设置关联的数据源信息
 * @method array getEnvInfos() 获取设置的环境变量
 * @method void setEnvInfos(array $EnvInfos) 设置设置的环境变量
 */
class CreateDataTransformRequest extends AbstractModel
{
    /**
     * @var integer 任务类型. 1: 指定主题；2:动态创建。详情请参考[创建加工任务文档](https://cloud.tencent.com/document/product/614/63940)。
     */
    public $FuncType;

    /**
     * @var string 日志主题ID
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $SrcTopicId;

    /**
     * @var string 加工任务名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 最长 255 个字符
     */
    public $Name;

    /**
     * @var string 加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
     */
    public $EtlContent;

    /**
     * @var integer 加工类型。
1：使用源日志主题中的随机数据，进行加工预览；2：使用用户自定义测试数据，进行加工预览；3：创建真实加工任务。
     */
    public $TaskType;

    /**
     * @var array 加工任务目标topic_id以及别名,当FuncType=1时，该参数必填，当FuncType=2时，无需填写。
目标topic_id，通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
别名限制 1.不能为空字符串，2. 不能包含字符'|'。

     */
    public $DstResources;

    /**
     * @var integer 任务启动状态.   默认为1:开启,  2:关闭
     */
    public $EnableFlag;

    /**
     * @var array 用于预览加工结果的测试数据
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $PreviewLogStatistics;

    /**
     * @var boolean 当FuncType为2时，动态创建的日志集、日志主题的个数超出产品规格限制是否丢弃数据， 默认为false。

false：创建兜底日志集、日志主题并将日志写入兜底主题；
true：丢弃日志数据。
     */
    public $BackupGiveUpData;

    /**
     * @var integer 是否开启投递服务日志。1：关闭，2：开启。
     */
    public $HasServicesLog;

    /**
     * @var integer 数据加工类型。0：标准加工任务； 1：前置加工任务。前置加工任务将采集的日志处理完成后，再写入日志主题。
     */
    public $DataTransformType;

    /**
     * @var integer 保留失败日志状态，1:不保留(默认)，2:保留。
     */
    public $KeepFailureLog;

    /**
     * @var string 失败日志的字段名称
     */
    public $FailureLogKey;

    /**
     * @var integer 指定加工数据的开始时间, 秒级时间戳。
 - 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
     */
    public $ProcessFromTimestamp;

    /**
     * @var integer 指定加工数据的结束时间，秒级时间戳。

-  不可指定未来的时间
-  不填则表示持续执行
     */
    public $ProcessToTimestamp;

    /**
     * @var string 对已经创建的并且使用了关联外部数据库能力的任务预览（TaskType 为 1 或 2）时，该值必传
数据加工任务ID- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
     */
    public $TaskId;

    /**
     * @var array 关联的数据源信息
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array 设置的环境变量
     */
    public $EnvInfos;

    /**
     * @param integer $FuncType 任务类型. 1: 指定主题；2:动态创建。详情请参考[创建加工任务文档](https://cloud.tencent.com/document/product/614/63940)。
     * @param string $SrcTopicId 日志主题ID
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param string $Name 加工任务名称
名称限制
- 不能为空字符串
- 不能包含字符'|'
- 最长 255 个字符
     * @param string $EtlContent 加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
     * @param integer $TaskType 加工类型。
1：使用源日志主题中的随机数据，进行加工预览；2：使用用户自定义测试数据，进行加工预览；3：创建真实加工任务。
     * @param array $DstResources 加工任务目标topic_id以及别名,当FuncType=1时，该参数必填，当FuncType=2时，无需填写。
目标topic_id，通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
别名限制 1.不能为空字符串，2. 不能包含字符'|'。

     * @param integer $EnableFlag 任务启动状态.   默认为1:开启,  2:关闭
     * @param array $PreviewLogStatistics 用于预览加工结果的测试数据
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param boolean $BackupGiveUpData 当FuncType为2时，动态创建的日志集、日志主题的个数超出产品规格限制是否丢弃数据， 默认为false。

false：创建兜底日志集、日志主题并将日志写入兜底主题；
true：丢弃日志数据。
     * @param integer $HasServicesLog 是否开启投递服务日志。1：关闭，2：开启。
     * @param integer $DataTransformType 数据加工类型。0：标准加工任务； 1：前置加工任务。前置加工任务将采集的日志处理完成后，再写入日志主题。
     * @param integer $KeepFailureLog 保留失败日志状态，1:不保留(默认)，2:保留。
     * @param string $FailureLogKey 失败日志的字段名称
     * @param integer $ProcessFromTimestamp 指定加工数据的开始时间, 秒级时间戳。
 - 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
     * @param integer $ProcessToTimestamp 指定加工数据的结束时间，秒级时间戳。

-  不可指定未来的时间
-  不填则表示持续执行
     * @param string $TaskId 对已经创建的并且使用了关联外部数据库能力的任务预览（TaskType 为 1 或 2）时，该值必传
数据加工任务ID- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
     * @param array $DataTransformSqlDataSources 关联的数据源信息
     * @param array $EnvInfos 设置的环境变量
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
        if (array_key_exists("FuncType",$param) and $param["FuncType"] !== null) {
            $this->FuncType = $param["FuncType"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("PreviewLogStatistics",$param) and $param["PreviewLogStatistics"] !== null) {
            $this->PreviewLogStatistics = [];
            foreach ($param["PreviewLogStatistics"] as $key => $value){
                $obj = new PreviewLogStatistic();
                $obj->deserialize($value);
                array_push($this->PreviewLogStatistics, $obj);
            }
        }

        if (array_key_exists("BackupGiveUpData",$param) and $param["BackupGiveUpData"] !== null) {
            $this->BackupGiveUpData = $param["BackupGiveUpData"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("DataTransformType",$param) and $param["DataTransformType"] !== null) {
            $this->DataTransformType = $param["DataTransformType"];
        }

        if (array_key_exists("KeepFailureLog",$param) and $param["KeepFailureLog"] !== null) {
            $this->KeepFailureLog = $param["KeepFailureLog"];
        }

        if (array_key_exists("FailureLogKey",$param) and $param["FailureLogKey"] !== null) {
            $this->FailureLogKey = $param["FailureLogKey"];
        }

        if (array_key_exists("ProcessFromTimestamp",$param) and $param["ProcessFromTimestamp"] !== null) {
            $this->ProcessFromTimestamp = $param["ProcessFromTimestamp"];
        }

        if (array_key_exists("ProcessToTimestamp",$param) and $param["ProcessToTimestamp"] !== null) {
            $this->ProcessToTimestamp = $param["ProcessToTimestamp"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DataTransformSqlDataSources",$param) and $param["DataTransformSqlDataSources"] !== null) {
            $this->DataTransformSqlDataSources = [];
            foreach ($param["DataTransformSqlDataSources"] as $key => $value){
                $obj = new DataTransformSqlDataSource();
                $obj->deserialize($value);
                array_push($this->DataTransformSqlDataSources, $obj);
            }
        }

        if (array_key_exists("EnvInfos",$param) and $param["EnvInfos"] !== null) {
            $this->EnvInfos = [];
            foreach ($param["EnvInfos"] as $key => $value){
                $obj = new EnvInfo();
                $obj->deserialize($value);
                array_push($this->EnvInfos, $obj);
            }
        }
    }
}
