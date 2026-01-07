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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InsertTaskTemporaryFiles请求参数结构体
 *
 * @method string getTaskId() 获取直播拉流任务 ID。
 * @method void setTaskId(string $TaskId) 设置直播拉流任务 ID。
 * @method array getTemporaryFiles() 获取插播文件列表，支持一次性插播多个文件，文件个数最大支持30个。可在轮播过程中追加新的插播文件。
 * @method void setTemporaryFiles(array $TemporaryFiles) 设置插播文件列表，支持一次性插播多个文件，文件个数最大支持30个。可在轮播过程中追加新的插播文件。
 * @method string getOperator() 获取操作人名称。
 * @method void setOperator(string $Operator) 设置操作人名称。
 * @method integer getInsertAfterIndex() 获取将文件插在当前轮播序列的指定位置后面。索引序列从1开始。默认为：0，表示播完当前文件立即播放插入文件。注意：索引不要超过当前总文件个数，否则按播完全部文件后再处理插播文件。
 * @method void setInsertAfterIndex(integer $InsertAfterIndex) 设置将文件插在当前轮播序列的指定位置后面。索引序列从1开始。默认为：0，表示播完当前文件立即播放插入文件。注意：索引不要超过当前总文件个数，否则按播完全部文件后再处理插播文件。
 * @method integer getInsertPriorityType() 获取用于多个文件插播在同一个轮播序号之后时，可指定队列顺序。
0 - 最高优先级队列。默认值。
1 - 中等优先级队列。
2 - 最低优先级队列。
场景示例：
比如当前播放第2个文件，多个新文件插播在第2个文件之后，播完第二个轮播文件之后，优先播放InsertPriorityType为0的插播队列中的文件，再播放InsertPriorityType为1的插播队列中的文件，最后播放InsertPriorityType为2的插播队列文件。
如果插播无队列优先级要求，则无需使用此参数。
 * @method void setInsertPriorityType(integer $InsertPriorityType) 设置用于多个文件插播在同一个轮播序号之后时，可指定队列顺序。
0 - 最高优先级队列。默认值。
1 - 中等优先级队列。
2 - 最低优先级队列。
场景示例：
比如当前播放第2个文件，多个新文件插播在第2个文件之后，播完第二个轮播文件之后，优先播放InsertPriorityType为0的插播队列中的文件，再播放InsertPriorityType为1的插播队列中的文件，最后播放InsertPriorityType为2的插播队列文件。
如果插播无队列优先级要求，则无需使用此参数。
 * @method string getInsertContext() 获取插播上下文信息。由用户自定义传入。当播放到使用本此插播请求插入的文件时，在文件播放开始和文件播放结束的回调时，将此上下文信息通过创建任务携带的回调地址回调给用户。
注意：如果有关联每个插播文件的信息需要回调时，可将需要回调的信息自行拼接到插播文件URL上，通过回调信息中的URL进行读取使用。
 * @method void setInsertContext(string $InsertContext) 设置插播上下文信息。由用户自定义传入。当播放到使用本此插播请求插入的文件时，在文件播放开始和文件播放结束的回调时，将此上下文信息通过创建任务携带的回调地址回调给用户。
注意：如果有关联每个插播文件的信息需要回调时，可将需要回调的信息自行拼接到插播文件URL上，通过回调信息中的URL进行读取使用。
 */
class InsertTaskTemporaryFilesRequest extends AbstractModel
{
    /**
     * @var string 直播拉流任务 ID。
     */
    public $TaskId;

    /**
     * @var array 插播文件列表，支持一次性插播多个文件，文件个数最大支持30个。可在轮播过程中追加新的插播文件。
     */
    public $TemporaryFiles;

    /**
     * @var string 操作人名称。
     */
    public $Operator;

    /**
     * @var integer 将文件插在当前轮播序列的指定位置后面。索引序列从1开始。默认为：0，表示播完当前文件立即播放插入文件。注意：索引不要超过当前总文件个数，否则按播完全部文件后再处理插播文件。
     */
    public $InsertAfterIndex;

    /**
     * @var integer 用于多个文件插播在同一个轮播序号之后时，可指定队列顺序。
0 - 最高优先级队列。默认值。
1 - 中等优先级队列。
2 - 最低优先级队列。
场景示例：
比如当前播放第2个文件，多个新文件插播在第2个文件之后，播完第二个轮播文件之后，优先播放InsertPriorityType为0的插播队列中的文件，再播放InsertPriorityType为1的插播队列中的文件，最后播放InsertPriorityType为2的插播队列文件。
如果插播无队列优先级要求，则无需使用此参数。
     */
    public $InsertPriorityType;

    /**
     * @var string 插播上下文信息。由用户自定义传入。当播放到使用本此插播请求插入的文件时，在文件播放开始和文件播放结束的回调时，将此上下文信息通过创建任务携带的回调地址回调给用户。
注意：如果有关联每个插播文件的信息需要回调时，可将需要回调的信息自行拼接到插播文件URL上，通过回调信息中的URL进行读取使用。
     */
    public $InsertContext;

    /**
     * @param string $TaskId 直播拉流任务 ID。
     * @param array $TemporaryFiles 插播文件列表，支持一次性插播多个文件，文件个数最大支持30个。可在轮播过程中追加新的插播文件。
     * @param string $Operator 操作人名称。
     * @param integer $InsertAfterIndex 将文件插在当前轮播序列的指定位置后面。索引序列从1开始。默认为：0，表示播完当前文件立即播放插入文件。注意：索引不要超过当前总文件个数，否则按播完全部文件后再处理插播文件。
     * @param integer $InsertPriorityType 用于多个文件插播在同一个轮播序号之后时，可指定队列顺序。
0 - 最高优先级队列。默认值。
1 - 中等优先级队列。
2 - 最低优先级队列。
场景示例：
比如当前播放第2个文件，多个新文件插播在第2个文件之后，播完第二个轮播文件之后，优先播放InsertPriorityType为0的插播队列中的文件，再播放InsertPriorityType为1的插播队列中的文件，最后播放InsertPriorityType为2的插播队列文件。
如果插播无队列优先级要求，则无需使用此参数。
     * @param string $InsertContext 插播上下文信息。由用户自定义传入。当播放到使用本此插播请求插入的文件时，在文件播放开始和文件播放结束的回调时，将此上下文信息通过创建任务携带的回调地址回调给用户。
注意：如果有关联每个插播文件的信息需要回调时，可将需要回调的信息自行拼接到插播文件URL上，通过回调信息中的URL进行读取使用。
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

        if (array_key_exists("TemporaryFiles",$param) and $param["TemporaryFiles"] !== null) {
            $this->TemporaryFiles = $param["TemporaryFiles"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("InsertAfterIndex",$param) and $param["InsertAfterIndex"] !== null) {
            $this->InsertAfterIndex = $param["InsertAfterIndex"];
        }

        if (array_key_exists("InsertPriorityType",$param) and $param["InsertPriorityType"] !== null) {
            $this->InsertPriorityType = $param["InsertPriorityType"];
        }

        if (array_key_exists("InsertContext",$param) and $param["InsertContext"] !== null) {
            $this->InsertContext = $param["InsertContext"];
        }
    }
}
