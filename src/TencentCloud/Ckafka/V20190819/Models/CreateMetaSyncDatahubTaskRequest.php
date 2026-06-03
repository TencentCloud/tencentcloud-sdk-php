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
 * CreateMetaSyncDatahubTask请求参数结构体
 *
 * @method string getTaskName() 获取<p>连接器任务名称</p><p>64字符内</p>
 * @method void setTaskName(string $TaskName) 设置<p>连接器任务名称</p><p>64字符内</p>
 * @method string getSourceResourceId() 获取<p>同步源连接</p><p>参数格式：resource-test</p>
 * @method void setSourceResourceId(string $SourceResourceId) 设置<p>同步源连接</p><p>参数格式：resource-test</p>
 * @method string getTargetResourceId() 获取<p>同步目标连接</p><p>参数格式：resource-test</p>
 * @method void setTargetResourceId(string $TargetResourceId) 设置<p>同步目标连接</p><p>参数格式：resource-test</p>
 * @method string getDescription() 获取<p>连接器任务描述</p><p>128字符内</p>
 * @method void setDescription(string $Description) 设置<p>连接器任务描述</p><p>128字符内</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 */
class CreateMetaSyncDatahubTaskRequest extends AbstractModel
{
    /**
     * @var string <p>连接器任务名称</p><p>64字符内</p>
     */
    public $TaskName;

    /**
     * @var string <p>同步源连接</p><p>参数格式：resource-test</p>
     */
    public $SourceResourceId;

    /**
     * @var string <p>同步目标连接</p><p>参数格式：resource-test</p>
     */
    public $TargetResourceId;

    /**
     * @var string <p>连接器任务描述</p><p>128字符内</p>
     */
    public $Description;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @param string $TaskName <p>连接器任务名称</p><p>64字符内</p>
     * @param string $SourceResourceId <p>同步源连接</p><p>参数格式：resource-test</p>
     * @param string $TargetResourceId <p>同步目标连接</p><p>参数格式：resource-test</p>
     * @param string $Description <p>连接器任务描述</p><p>128字符内</p>
     * @param array $Tags <p>标签列表</p>
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

        if (array_key_exists("SourceResourceId",$param) and $param["SourceResourceId"] !== null) {
            $this->SourceResourceId = $param["SourceResourceId"];
        }

        if (array_key_exists("TargetResourceId",$param) and $param["TargetResourceId"] !== null) {
            $this->TargetResourceId = $param["TargetResourceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
