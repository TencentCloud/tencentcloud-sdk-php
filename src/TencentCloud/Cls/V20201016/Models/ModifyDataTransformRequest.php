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
 * ModifyDataTransform请求参数结构体
 *
 * @method string getTaskId() 获取数据加工任务ID
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
 * @method void setTaskId(string $TaskId) 设置数据加工任务ID
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
 * @method string getName() 获取加工任务名称
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务名称。

名称限制
- 不能为空字符串
- 不能包含字符'|'
- 最长 255 个字符
 * @method void setName(string $Name) 设置加工任务名称
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务名称。

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
 * @method integer getEnableFlag() 获取任务启动状态. 默认为1，开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启动状态. 默认为1，开启,  2关闭
 * @method array getDstResources() 获取加工任务目的topic_id以及别名
 * @method void setDstResources(array $DstResources) 设置加工任务目的topic_id以及别名
 * @method boolean getBackupGiveUpData() 获取超限之后是否丢弃日志数据
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) 设置超限之后是否丢弃日志数据
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。1关闭，2开启
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。1关闭，2开启
 * @method integer getKeepFailureLog() 获取保留失败日志状态。 1:不保留，2:保留
 * @method void setKeepFailureLog(integer $KeepFailureLog) 设置保留失败日志状态。 1:不保留，2:保留
 * @method string getFailureLogKey() 获取失败日志的字段名称
 * @method void setFailureLogKey(string $FailureLogKey) 设置失败日志的字段名称
 * @method array getDataTransformSqlDataSources() 获取外部数据源信息
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) 设置外部数据源信息
 * @method array getEnvInfos() 获取设置的环境变量
 * @method void setEnvInfos(array $EnvInfos) 设置设置的环境变量
 */
class ModifyDataTransformRequest extends AbstractModel
{
    /**
     * @var string 数据加工任务ID
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
     */
    public $TaskId;

    /**
     * @var string 加工任务名称
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务名称。

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
     * @var integer 任务启动状态. 默认为1，开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var array 加工任务目的topic_id以及别名
     */
    public $DstResources;

    /**
     * @var boolean 超限之后是否丢弃日志数据
     */
    public $BackupGiveUpData;

    /**
     * @var integer 是否开启投递服务日志。1关闭，2开启
     */
    public $HasServicesLog;

    /**
     * @var integer 保留失败日志状态。 1:不保留，2:保留
     */
    public $KeepFailureLog;

    /**
     * @var string 失败日志的字段名称
     */
    public $FailureLogKey;

    /**
     * @var array 外部数据源信息
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array 设置的环境变量
     */
    public $EnvInfos;

    /**
     * @param string $TaskId 数据加工任务ID
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务Id。
     * @param string $Name 加工任务名称
- 通过[获取数据加工任务列表基本信息](https://cloud.tencent.com/document/product/614/72182)获取数据加工任务名称。

名称限制
- 不能为空字符串
- 不能包含字符'|'
- 最长 255 个字符
     * @param string $EtlContent 加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
     * @param integer $EnableFlag 任务启动状态. 默认为1，开启,  2关闭
     * @param array $DstResources 加工任务目的topic_id以及别名
     * @param boolean $BackupGiveUpData 超限之后是否丢弃日志数据
     * @param integer $HasServicesLog 是否开启投递服务日志。1关闭，2开启
     * @param integer $KeepFailureLog 保留失败日志状态。 1:不保留，2:保留
     * @param string $FailureLogKey 失败日志的字段名称
     * @param array $DataTransformSqlDataSources 外部数据源信息
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("BackupGiveUpData",$param) and $param["BackupGiveUpData"] !== null) {
            $this->BackupGiveUpData = $param["BackupGiveUpData"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("KeepFailureLog",$param) and $param["KeepFailureLog"] !== null) {
            $this->KeepFailureLog = $param["KeepFailureLog"];
        }

        if (array_key_exists("FailureLogKey",$param) and $param["FailureLogKey"] !== null) {
            $this->FailureLogKey = $param["FailureLogKey"];
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
