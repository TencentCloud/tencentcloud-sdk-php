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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatahubTask请求参数结构体
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskType() 获取任务类型，SOURCE数据接入，SINK数据流出
 * @method void setTaskType(string $TaskType) 设置任务类型，SOURCE数据接入，SINK数据流出
 * @method DatahubResource getSourceResource() 获取数据源
 * @method void setSourceResource(DatahubResource $SourceResource) 设置数据源
 * @method DatahubResource getTargetResource() 获取数据目标
 * @method void setTargetResource(DatahubResource $TargetResource) 设置数据目标
 * @method TransformParam getTransformParam() 获取数据处理规则
 * @method void setTransformParam(TransformParam $TransformParam) 设置数据处理规则
 * @method PrivateLinkParam getPrivateLinkParam() 获取实例连接参数【已废弃】
 * @method void setPrivateLinkParam(PrivateLinkParam $PrivateLinkParam) 设置实例连接参数【已废弃】
 * @method string getSchemaId() 获取选择所要绑定的SchemaId
 * @method void setSchemaId(string $SchemaId) 设置选择所要绑定的SchemaId
 * @method TransformsParam getTransformsParam() 获取数据处理规则
 * @method void setTransformsParam(TransformsParam $TransformsParam) 设置数据处理规则
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 */
class CreateDatahubTaskRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务类型，SOURCE数据接入，SINK数据流出
     */
    public $TaskType;

    /**
     * @var DatahubResource 数据源
     */
    public $SourceResource;

    /**
     * @var DatahubResource 数据目标
     */
    public $TargetResource;

    /**
     * @var TransformParam 数据处理规则
     */
    public $TransformParam;

    /**
     * @var PrivateLinkParam 实例连接参数【已废弃】
     */
    public $PrivateLinkParam;

    /**
     * @var string 选择所要绑定的SchemaId
     */
    public $SchemaId;

    /**
     * @var TransformsParam 数据处理规则
     */
    public $TransformsParam;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @param string $TaskName 任务名称
     * @param string $TaskType 任务类型，SOURCE数据接入，SINK数据流出
     * @param DatahubResource $SourceResource 数据源
     * @param DatahubResource $TargetResource 数据目标
     * @param TransformParam $TransformParam 数据处理规则
     * @param PrivateLinkParam $PrivateLinkParam 实例连接参数【已废弃】
     * @param string $SchemaId 选择所要绑定的SchemaId
     * @param TransformsParam $TransformsParam 数据处理规则
     * @param string $TaskId 任务ID
     * @param array $Tags 标签列表
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("SourceResource",$param) and $param["SourceResource"] !== null) {
            $this->SourceResource = new DatahubResource();
            $this->SourceResource->deserialize($param["SourceResource"]);
        }

        if (array_key_exists("TargetResource",$param) and $param["TargetResource"] !== null) {
            $this->TargetResource = new DatahubResource();
            $this->TargetResource->deserialize($param["TargetResource"]);
        }

        if (array_key_exists("TransformParam",$param) and $param["TransformParam"] !== null) {
            $this->TransformParam = new TransformParam();
            $this->TransformParam->deserialize($param["TransformParam"]);
        }

        if (array_key_exists("PrivateLinkParam",$param) and $param["PrivateLinkParam"] !== null) {
            $this->PrivateLinkParam = new PrivateLinkParam();
            $this->PrivateLinkParam->deserialize($param["PrivateLinkParam"]);
        }

        if (array_key_exists("SchemaId",$param) and $param["SchemaId"] !== null) {
            $this->SchemaId = $param["SchemaId"];
        }

        if (array_key_exists("TransformsParam",$param) and $param["TransformsParam"] !== null) {
            $this->TransformsParam = new TransformsParam();
            $this->TransformsParam->deserialize($param["TransformsParam"]);
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
