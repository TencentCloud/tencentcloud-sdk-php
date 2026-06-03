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
 * CreateMetaAndDataSyncDatahubTask请求参数结构体
 *
 * @method string getTaskName() 获取<p>任务名称</p><p>64字符内</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p><p>64字符内</p>
 * @method string getSourceResourceId() 获取<p>同步源连接</p><p>参数格式：resource-test</p>
 * @method void setSourceResourceId(string $SourceResourceId) 设置<p>同步源连接</p><p>参数格式：resource-test</p>
 * @method string getTargetResourceId() 获取<p>同步目标连接</p><p>参数格式：resource-test</p>
 * @method void setTargetResourceId(string $TargetResourceId) 设置<p>同步目标连接</p><p>参数格式：resource-test</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getOffsetType() 获取<p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p><p>枚举值：</p><ul><li>earliest： 最开始位置</li><li>latest： 最新位置</li><li>timestamp： 时间点位置</li></ul>
 * @method void setOffsetType(string $OffsetType) 设置<p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p><p>枚举值：</p><ul><li>earliest： 最开始位置</li><li>latest： 最新位置</li><li>timestamp： 时间点位置</li></ul>
 * @method string getTopicRegularExpression() 获取<p>正则匹配Topic列表</p><p>与TopicList参数二选一</p>
 * @method void setTopicRegularExpression(string $TopicRegularExpression) 设置<p>正则匹配Topic列表</p><p>与TopicList参数二选一</p>
 * @method array getTopicList() 获取<p>多选topic列表</p><p>与TopicRegularExpression参数二选一</p>
 * @method void setTopicList(array $TopicList) 设置<p>多选topic列表</p><p>与TopicRegularExpression参数二选一</p>
 * @method string getPrefix() 获取<p>Topic 前缀</p>
 * @method void setPrefix(string $Prefix) 设置<p>Topic 前缀</p>
 * @method string getSeparator() 获取<p>Topic前缀分隔符</p><p>仅支持 &quot;.&quot; / &quot;-&quot; / &quot;_&quot;</p>
 * @method void setSeparator(string $Separator) 设置<p>Topic前缀分隔符</p><p>仅支持 &quot;.&quot; / &quot;-&quot; / &quot;_&quot;</p>
 * @method string getDescription() 获取<p>连接器任务描述</p><p>128字符内</p>
 * @method void setDescription(string $Description) 设置<p>连接器任务描述</p><p>128字符内</p>
 */
class CreateMetaAndDataSyncDatahubTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务名称</p><p>64字符内</p>
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
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p><p>枚举值：</p><ul><li>earliest： 最开始位置</li><li>latest： 最新位置</li><li>timestamp： 时间点位置</li></ul>
     */
    public $OffsetType;

    /**
     * @var string <p>正则匹配Topic列表</p><p>与TopicList参数二选一</p>
     */
    public $TopicRegularExpression;

    /**
     * @var array <p>多选topic列表</p><p>与TopicRegularExpression参数二选一</p>
     */
    public $TopicList;

    /**
     * @var string <p>Topic 前缀</p>
     */
    public $Prefix;

    /**
     * @var string <p>Topic前缀分隔符</p><p>仅支持 &quot;.&quot; / &quot;-&quot; / &quot;_&quot;</p>
     */
    public $Separator;

    /**
     * @var string <p>连接器任务描述</p><p>128字符内</p>
     */
    public $Description;

    /**
     * @param string $TaskName <p>任务名称</p><p>64字符内</p>
     * @param string $SourceResourceId <p>同步源连接</p><p>参数格式：resource-test</p>
     * @param string $TargetResourceId <p>同步目标连接</p><p>参数格式：resource-test</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $OffsetType <p>Offset类型，最开始位置earliest，最新位置latest，时间点位置timestamp</p><p>枚举值：</p><ul><li>earliest： 最开始位置</li><li>latest： 最新位置</li><li>timestamp： 时间点位置</li></ul>
     * @param string $TopicRegularExpression <p>正则匹配Topic列表</p><p>与TopicList参数二选一</p>
     * @param array $TopicList <p>多选topic列表</p><p>与TopicRegularExpression参数二选一</p>
     * @param string $Prefix <p>Topic 前缀</p>
     * @param string $Separator <p>Topic前缀分隔符</p><p>仅支持 &quot;.&quot; / &quot;-&quot; / &quot;_&quot;</p>
     * @param string $Description <p>连接器任务描述</p><p>128字符内</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OffsetType",$param) and $param["OffsetType"] !== null) {
            $this->OffsetType = $param["OffsetType"];
        }

        if (array_key_exists("TopicRegularExpression",$param) and $param["TopicRegularExpression"] !== null) {
            $this->TopicRegularExpression = $param["TopicRegularExpression"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = $param["TopicList"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Separator",$param) and $param["Separator"] !== null) {
            $this->Separator = $param["Separator"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
