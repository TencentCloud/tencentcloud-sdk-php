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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatahubTask请求参数结构体
 *
 * @method string getTaskName() 获取<p>任务名称,只能以字母起始,允许包含字母、数字、- 、.  、 下划线且长度不超过64 (、为分割符号规则不包含)</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称,只能以字母起始,允许包含字母、数字、- 、.  、 下划线且长度不超过64 (、为分割符号规则不包含)</p>
 * @method string getTaskType() 获取<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method DatahubResource getSourceResource() 获取<p>数据源</p>
 * @method void setSourceResource(DatahubResource $SourceResource) 设置<p>数据源</p>
 * @method DatahubResource getTargetResource() 获取<p>数据目标</p>
 * @method void setTargetResource(DatahubResource $TargetResource) 设置<p>数据目标</p>
 * @method TransformParam getTransformParam() 获取<p>数据处理规则</p>
 * @method void setTransformParam(TransformParam $TransformParam) 设置<p>数据处理规则</p>
 * @method PrivateLinkParam getPrivateLinkParam() 获取<p>实例连接参数【已废弃】</p>
 * @method void setPrivateLinkParam(PrivateLinkParam $PrivateLinkParam) 设置<p>实例连接参数【已废弃】</p>
 * @method string getSchemaId() 获取<p>选择所要绑定的SchemaId</p>
 * @method void setSchemaId(string $SchemaId) 设置<p>选择所要绑定的SchemaId</p>
 * @method TransformsParam getTransformsParam() 获取<p>数据处理规则</p>
 * @method void setTransformsParam(TransformsParam $TransformsParam) 设置<p>数据处理规则</p>
 * @method string getTaskId() 获取<p>任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务Id</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getDescription() 获取<p>任务描述信息</p>
 * @method void setDescription(string $Description) 设置<p>任务描述信息</p>
 */
class CreateDatahubTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务名称,只能以字母起始,允许包含字母、数字、- 、.  、 下划线且长度不超过64 (、为分割符号规则不包含)</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     */
    public $TaskType;

    /**
     * @var DatahubResource <p>数据源</p>
     */
    public $SourceResource;

    /**
     * @var DatahubResource <p>数据目标</p>
     */
    public $TargetResource;

    /**
     * @var TransformParam <p>数据处理规则</p>
     */
    public $TransformParam;

    /**
     * @var PrivateLinkParam <p>实例连接参数【已废弃】</p>
     * @deprecated
     */
    public $PrivateLinkParam;

    /**
     * @var string <p>选择所要绑定的SchemaId</p>
     */
    public $SchemaId;

    /**
     * @var TransformsParam <p>数据处理规则</p>
     */
    public $TransformsParam;

    /**
     * @var string <p>任务Id</p>
     */
    public $TaskId;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>任务描述信息</p>
     */
    public $Description;

    /**
     * @param string $TaskName <p>任务名称,只能以字母起始,允许包含字母、数字、- 、.  、 下划线且长度不超过64 (、为分割符号规则不包含)</p>
     * @param string $TaskType <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     * @param DatahubResource $SourceResource <p>数据源</p>
     * @param DatahubResource $TargetResource <p>数据目标</p>
     * @param TransformParam $TransformParam <p>数据处理规则</p>
     * @param PrivateLinkParam $PrivateLinkParam <p>实例连接参数【已废弃】</p>
     * @param string $SchemaId <p>选择所要绑定的SchemaId</p>
     * @param TransformsParam $TransformsParam <p>数据处理规则</p>
     * @param string $TaskId <p>任务Id</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $Description <p>任务描述信息</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
