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

namespace TencentCloud\Cls\V20201016;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cls\V20201016\Models as Models;

/**
 * @method Models\ApplyConfigToMachineGroupResponse ApplyConfigToMachineGroup(Models\ApplyConfigToMachineGroupRequest $req) 应用采集配置到指定机器组
 * @method Models\CreateAlarmResponse CreateAlarm(Models\CreateAlarmRequest $req) 本接口用于创建告警策略。
 * @method Models\CreateAlarmNoticeResponse CreateAlarmNotice(Models\CreateAlarmNoticeRequest $req) 该接口用户创建告警通知模板。
 * @method Models\CreateAsyncContextTaskResponse CreateAsyncContextTask(Models\CreateAsyncContextTaskRequest $req) 本接口用于创建异步上下文任务
 * @method Models\CreateAsyncSearchTaskResponse CreateAsyncSearchTask(Models\CreateAsyncSearchTaskRequest $req) 本接口用于创建异步检索任务
 * @method Models\CreateConfigResponse CreateConfig(Models\CreateConfigRequest $req) 创建采集规则配置
 * @method Models\CreateExportResponse CreateExport(Models\CreateExportRequest $req) 本接口用于创建日志导出
 * @method Models\CreateIndexResponse CreateIndex(Models\CreateIndexRequest $req) 本接口用于创建索引
 * @method Models\CreateLogsetResponse CreateLogset(Models\CreateLogsetRequest $req) 本接口用于创建日志集，返回新创建的日志集的 ID。
 * @method Models\CreateMachineGroupResponse CreateMachineGroup(Models\CreateMachineGroupRequest $req) 创建机器组
 * @method Models\CreateShipperResponse CreateShipper(Models\CreateShipperRequest $req) 创建新的投递规则，客户如果使用此接口，需要自行处理CLS对指定bucket的写权限。
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 本接口用于创建日志主题。
 * @method Models\DeleteAlarmResponse DeleteAlarm(Models\DeleteAlarmRequest $req) 本接口用于删除告警策略。
 * @method Models\DeleteAlarmNoticeResponse DeleteAlarmNotice(Models\DeleteAlarmNoticeRequest $req) 该接口用于删除告警通知模板
 * @method Models\DeleteAsyncContextTaskResponse DeleteAsyncContextTask(Models\DeleteAsyncContextTaskRequest $req) 本接口用于删除异步上下文任务
 * @method Models\DeleteAsyncSearchTaskResponse DeleteAsyncSearchTask(Models\DeleteAsyncSearchTaskRequest $req) 本接口用于删除异步检索任务
 * @method Models\DeleteConfigResponse DeleteConfig(Models\DeleteConfigRequest $req) 删除采集规则配置
 * @method Models\DeleteConfigFromMachineGroupResponse DeleteConfigFromMachineGroup(Models\DeleteConfigFromMachineGroupRequest $req) 删除应用到机器组的采集配置
 * @method Models\DeleteExportResponse DeleteExport(Models\DeleteExportRequest $req) 本接口用于删除日志导出
 * @method Models\DeleteIndexResponse DeleteIndex(Models\DeleteIndexRequest $req) 本接口用于日志主题的索引配置
 * @method Models\DeleteLogsetResponse DeleteLogset(Models\DeleteLogsetRequest $req) 本接口用于删除日志集。
 * @method Models\DeleteMachineGroupResponse DeleteMachineGroup(Models\DeleteMachineGroupRequest $req) 删除机器组
 * @method Models\DeleteShipperResponse DeleteShipper(Models\DeleteShipperRequest $req) 删除投递规则
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 本接口用于删除日志主题。
 * @method Models\DescribeAlarmNoticesResponse DescribeAlarmNotices(Models\DescribeAlarmNoticesRequest $req) 该接口用于获取告警通知模板列表
 * @method Models\DescribeAlarmsResponse DescribeAlarms(Models\DescribeAlarmsRequest $req) 本接口用于获取告警策略。
 * @method Models\DescribeAsyncContextResultResponse DescribeAsyncContextResult(Models\DescribeAsyncContextResultRequest $req) 本接口用户获取异步上下文任务的结果
 * @method Models\DescribeAsyncContextTasksResponse DescribeAsyncContextTasks(Models\DescribeAsyncContextTasksRequest $req) 本接口用于获取异步上下文任务列表
 * @method Models\DescribeAsyncSearchResultResponse DescribeAsyncSearchResult(Models\DescribeAsyncSearchResultRequest $req) 本接口用户获取异步检索任务的结果
 * @method Models\DescribeAsyncSearchTasksResponse DescribeAsyncSearchTasks(Models\DescribeAsyncSearchTasksRequest $req) 本接口用户获取异步检索任务列表
 * @method Models\DescribeConfigMachineGroupsResponse DescribeConfigMachineGroups(Models\DescribeConfigMachineGroupsRequest $req) 获取采集规则配置所绑定的机器组
 * @method Models\DescribeConfigsResponse DescribeConfigs(Models\DescribeConfigsRequest $req) 获取采集规则配置
 * @method Models\DescribeExportsResponse DescribeExports(Models\DescribeExportsRequest $req) 本接口用于获取日志导出列表
 * @method Models\DescribeIndexResponse DescribeIndex(Models\DescribeIndexRequest $req) 本接口用于获取索引配置信息
 * @method Models\DescribeLogContextResponse DescribeLogContext(Models\DescribeLogContextRequest $req) 本接口用于搜索日志上下文附近的内容
 * @method Models\DescribeLogsetsResponse DescribeLogsets(Models\DescribeLogsetsRequest $req) 本接口用于获取日志集信息列表。
 * @method Models\DescribeMachineGroupConfigsResponse DescribeMachineGroupConfigs(Models\DescribeMachineGroupConfigsRequest $req) 获取机器组绑定的采集规则配置
 * @method Models\DescribeMachineGroupsResponse DescribeMachineGroups(Models\DescribeMachineGroupsRequest $req) 获取机器组信息列表
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 获取制定机器组下的机器状态
 * @method Models\DescribePartitionsResponse DescribePartitions(Models\DescribePartitionsRequest $req) 本接口用于获取主题分区列表。
 * @method Models\DescribeShipperTasksResponse DescribeShipperTasks(Models\DescribeShipperTasksRequest $req) 获取投递任务列表
 * @method Models\DescribeShippersResponse DescribeShippers(Models\DescribeShippersRequest $req) 获取投递规则信息列表
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req)  本接口用于获取日志主题列表，支持分页
 * @method Models\GetAlarmLogResponse GetAlarmLog(Models\GetAlarmLogRequest $req) 本接口用于获取告警任务历史
 * @method Models\MergePartitionResponse MergePartition(Models\MergePartitionRequest $req) 本接口用于合并一个读写态的主题分区，合并时指定一个主题分区 ID，日志服务会自动合并范围右相邻的分区。
 * @method Models\ModifyAlarmResponse ModifyAlarm(Models\ModifyAlarmRequest $req) 本接口用于修改告警策略。需要至少修改一项有效内容。
 * @method Models\ModifyAlarmNoticeResponse ModifyAlarmNotice(Models\ModifyAlarmNoticeRequest $req) 该接口用于修改告警通知模板。
 * @method Models\ModifyConfigResponse ModifyConfig(Models\ModifyConfigRequest $req) 修改采集规则配置
 * @method Models\ModifyIndexResponse ModifyIndex(Models\ModifyIndexRequest $req) 本接口用于修改索引配置

 * @method Models\ModifyLogsetResponse ModifyLogset(Models\ModifyLogsetRequest $req) 本接口用于修改日志集信息
 * @method Models\ModifyMachineGroupResponse ModifyMachineGroup(Models\ModifyMachineGroupRequest $req) 修改机器组
 * @method Models\ModifyShipperResponse ModifyShipper(Models\ModifyShipperRequest $req) 修改现有的投递规则，客户如果使用此接口，需要自行处理CLS对指定bucket的写权限。
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 本接口用于修改日志主题。
 * @method Models\RetryShipperTaskResponse RetryShipperTask(Models\RetryShipperTaskRequest $req) 重试失败的投递任务
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) 本接口用于搜索日志
 * @method Models\SplitPartitionResponse SplitPartition(Models\SplitPartitionRequest $req) 本接口用于分裂主题分区
 * @method Models\UploadLogResponse UploadLog(Models\UploadLogRequest $req) ## 功能描述

本接口用于将日志写入到指定的日志主题。

日志服务提供以下两种模式：

#### 负载均衡模式

系统根据当前日志主题下所有可读写的分区，遵循负载均衡原则自动分配写入的目标分区。该模式适合消费不保序的场景。

#### 哈希路由模式

系统根据携带的哈希值（X-CLS-HashKey）将数据写入到符合范围要求的目标分区。例如，可以将某个日志源端通过 hashkey 与某个主题分区强绑定，这样可以保证数据在该分区上写入和消费是严格保序的。

此外日志服务还为用户提供以下两种不同的日志上传模式：


## 请求

#### 请求头业务参数

X-CLS-HashKey 请求头表示日志根据 hashkey 路由写入到 CLS 对应范围的主题分区，以保证写入到的每个主题分区是严格有序的，便于消费时有序消费。

| 字段名             | 类型   | 位置   | 是否必须 | 含义                                                         |
| ------------------ | ------ | ------ | -------- | ------------------------------------------------------------ |
| X-CLS-HashKey      | string | header | 否       | 根据 hashkey 写入相应范围的主题分区                          |
| X-CLS-TopicId      | String | header | 是       | 主题id                                                       |                                                 |
| Content-Type       | String | header | 是       | 请求参数的协议类型， 目前只支持pb协议，填写 "application/octet-stream" |
| X-TC-Action        | String |	header | 是       | 公共参数，本接口取值：UploadLog。                   
| X-TC-Region        | String | header | 是   	  | 公共参数，本接口不需要传递此参数。                       
| X-TC-Version       | String | header | 是       | 公共参数，本接口取值：2020-10-16。                  

#### 输入参数（pb协议）

| 字段名       | 类型    | 位置 | 必须 | 含义                                                         |
| ------------ | ------- | ---- | ---- | ------------------------------------------------------------ |
| logGroupList | message | pb   | 是   | logGroup 列表，封装好的日志组列表内容，建议 logGroup 数量不要超过5个 |

LogGroup 说明：

| 字段名      | 是否必选 | 含义                                                         |
| ----------- | -------- | ------------------------------------------------------------ |
| logs        | 是       | 日志数组，表示有多个 Log 组成的集合，一个 Log 表示一条日志，一个 LogGroup 中 Log 个数不能超过10000 |
| contextFlow | 否       | LogGroup 的唯一ID，需要使用上下文功能时传入。格式："{上下文ID}-{LogGroupID}"。<br>上下文ID：唯一标识一个上下文（连续滚动的一系列日志文件，或者是需要保序的一系列日志），16进制64位整型字符串。<br>LogGroupID：连续递增的一串整型，16进制64位整型字符串。样例："102700A66102516A-59F59"。                        |
| filename    | 否       | 日志文件名                                                   |
| source      | 否       | 日志来源，一般使用机器 IP 作为标识                           |
| logTags     | 否       | 日志的标签列表                                               |

Log 说明：

| 字段名   | 是否必选 | 含义                                                         |
| -------- | -------- | ------------------------------------------------------------ |
| time     | 是       | 日志时间（Unix 格式时间戳），支持秒、毫秒，建议采用毫秒      |
| contents | 否       | key-value 格式的日志内容，表示一条日志里的多个 key-value 组合 |

Content 说明：

| 字段名 | 是否必选 | 含义                                                         |
| ------ | -------- | ------------------------------------------------------------ |
| key    | 是       | 单条日志里某个字段组的 key 值，不能以`_`开头                 |
| value  | 是       | 单条日志某个字段组的 value 值，单条日志 value 不能超过1MB，LogGroup 中所有 value 总和不能超过5MB |

LogTag 说明：

| 字段名 | 是否必选 | 含义                             |
| ------ | -------- | -------------------------------- |
| key    | 是       | 自定义的标签 key                 |
| value  | 是       | 自定义的标签 key 对应的 value 值 |

## PB 编译示例

本示例将说明如何使用官方 protoc 编译工具将 PB 描述文件 编译生成为 C++ 语言可调用的上传日志接口。

> ?目前 protoc 官方支持 Java、C++、Python 等语言的编译，详情请参见 [protoc](https://github.com/protocolbuffers/protobuf)。

#### 1. 安装 Protocol Buffer

下载 [Protocol Buffer](https://main.qcloudimg.com/raw/d7810aaf8b3073fbbc9d4049c21532aa/protobuf-2.6.1.tar.gz) ，解压并安装。示例版本为 protobuf 2.6.1，环境为 Centos 7.3 系统。 解压`protobuf-2.6.1.tar.gz`压缩包至`/usr/local`目录并进入该目录，执行命令如下：

```
tar -zxvf protobuf-2.6.1.tar.gz -C /usr/local/ && cd /usr/local/protobuf-2.6.1
```

开始编译和安装，配置环境变量，执行命令如下：

```
[root@VM_0_8_centos protobuf-2.6.1]# ./configure 
[root@VM_0_8_centos protobuf-2.6.1]# make && make install
[root@VM_0_8_centos protobuf-2.6.1]# export PATH=$PATH:/usr/local/protobuf-2.6.1/bin
```

编译成功后，您可以使用以下命令查看版本：

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --version
liprotoc 2.6.1
```

#### 2. 创建 PB 描述文件

PB 描述文件是通信双方约定的数据交换格式，上传日志时须将规定的协议格式编译成对应语言版本的调用接口，然后添加到工程代码里，详情请参见 [protoc](https://github.com/protocolbuffers/protobuf) 。

以日志服务所规定的 PB 数据格式内容为准， 在本地创建 PB 消息描述文件 cls.proto。

> !PB 描述文件内容不可更改，且文件名须以`.proto`结尾。

cls.proto 内容（PB 描述文件）如下：

```
package cls;

message Log
{
    message Content
    {
        required string key   = 1; // 每组字段的 key
        required string value = 2; // 每组字段的 value
    }
    required int64   time     = 1; // 时间戳，UNIX时间格式
    repeated Content contents = 2; // 一条日志里的多个kv组合
}

message LogTag
{
    required string key       = 1;
    required string value     = 2;
}

message LogGroup
{
    repeated Log    logs        = 1; // 多条日志合成的日志数组
    optional string contextFlow = 2; // 目前暂无效用
    optional string filename    = 3; // 日志文件名
    optional string source      = 4; // 日志来源，一般使用机器IP
    repeated LogTag logTags     = 5;
}

message LogGroupList
{
    repeated LogGroup logGroupList = 1; // 日志组列表
}
```

#### 3. 编译生成

此例中，使用 proto 编译器生成 C++ 语言的文件，在 cls.proto 文件的同一目录下，执行如下编译命令：

```
protoc --cpp_out=./ ./cls.proto 
```

> ?`--cpp_out=./`表示编译成 cpp 格式并输出当前目录下，`./cls.proto`表示位于当前目录下的 cls.proto 描述文件。

编译成功后，会输出对应语言的代码文件。此例会生成 cls.pb.h 头文件和 [cls.pb.cc](http://cls.pb.cc) 代码实现文件，如下所示：

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --cpp_out=./ ./cls.proto
[root@VM_0_8_centos protobuf-2.6.1]# ls
cls.pb.cc cls.pb.h cls.proto
```

#### 4. 调用

将生成的 cls.pb.h 头文件引入代码中，调用接口进行数据格式封装。
 */

class ClsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cls.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cls";

    /**
     * @var string
     */
    protected $version = "2020-10-16";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cls")."\\"."V20201016\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
