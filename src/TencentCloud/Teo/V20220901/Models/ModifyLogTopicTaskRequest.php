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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogTopicTask请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getLogSetRegion() 获取日志集所属地区。
 * @method void setLogSetRegion(string $LogSetRegion) 设置日志集所属地区。
 * @method string getLogSetId() 获取日志集ID。
 * @method void setLogSetId(string $LogSetId) 设置日志集ID。
 * @method string getTopicId() 获取日志主题ID。
 * @method void setTopicId(string $TopicId) 设置日志主题ID。
 * @method string getEntityType() 获取数据推送类型，可选的类型有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
 * @method void setEntityType(string $EntityType) 设置数据推送类型，可选的类型有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
 * @method string getTaskName() 获取推送任务名。
 * @method void setTaskName(string $TaskName) 设置推送任务名。
 * @method string getTopicName() 获取待更新的主题名称，不填表示不更新主题名称。
 * @method void setTopicName(string $TopicName) 设置待更新的主题名称，不填表示不更新主题名称。
 * @method string getLogSetName() 获取更新后的日志集名称。
 * @method void setLogSetName(string $LogSetName) 设置更新后的日志集名称。
 * @method integer getPeriod() 获取更新后的日志集保存时间。
 * @method void setPeriod(integer $Period) 设置更新后的日志集保存时间。
 * @method array getDropEntityList() 获取待添加的推送任务实体列表。
 * @method void setDropEntityList(array $DropEntityList) 设置待添加的推送任务实体列表。
 * @method array getAddedEntityList() 获取待删除的推送任务实例列表。
 * @method void setAddedEntityList(array $AddedEntityList) 设置待删除的推送任务实例列表。
 */
class ModifyLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 日志集所属地区。
     */
    public $LogSetRegion;

    /**
     * @var string 日志集ID。
     */
    public $LogSetId;

    /**
     * @var string 日志主题ID。
     */
    public $TopicId;

    /**
     * @var string 数据推送类型，可选的类型有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
     */
    public $EntityType;

    /**
     * @var string 推送任务名。
     */
    public $TaskName;

    /**
     * @var string 待更新的主题名称，不填表示不更新主题名称。
     */
    public $TopicName;

    /**
     * @var string 更新后的日志集名称。
     */
    public $LogSetName;

    /**
     * @var integer 更新后的日志集保存时间。
     */
    public $Period;

    /**
     * @var array 待添加的推送任务实体列表。
     */
    public $DropEntityList;

    /**
     * @var array 待删除的推送任务实例列表。
     */
    public $AddedEntityList;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $LogSetRegion 日志集所属地区。
     * @param string $LogSetId 日志集ID。
     * @param string $TopicId 日志主题ID。
     * @param string $EntityType 数据推送类型，可选的类型有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
     * @param string $TaskName 推送任务名。
     * @param string $TopicName 待更新的主题名称，不填表示不更新主题名称。
     * @param string $LogSetName 更新后的日志集名称。
     * @param integer $Period 更新后的日志集保存时间。
     * @param array $DropEntityList 待添加的推送任务实体列表。
     * @param array $AddedEntityList 待删除的推送任务实例列表。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("DropEntityList",$param) and $param["DropEntityList"] !== null) {
            $this->DropEntityList = $param["DropEntityList"];
        }

        if (array_key_exists("AddedEntityList",$param) and $param["AddedEntityList"] !== null) {
            $this->AddedEntityList = $param["AddedEntityList"];
        }
    }
}
