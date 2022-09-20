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
 * CreateLogTopicTask请求参数结构体
 *
 * @method string getLogSetId() 获取日志集ID。
 * @method void setLogSetId(string $LogSetId) 设置日志集ID。
 * @method string getLogSetRegion() 获取日志集所属的地域。
 * @method void setLogSetRegion(string $LogSetRegion) 设置日志集所属的地域。
 * @method string getTopicName() 获取日志集主题名。
 * @method void setTopicName(string $TopicName) 设置日志集主题名。
 * @method string getTaskName() 获取推送任务的名称。
 * @method void setTaskName(string $TaskName) 设置推送任务的名称。
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getEntityType() 获取数据推送类型，取值有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
 * @method void setEntityType(string $EntityType) 设置数据推送类型，取值有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
 * @method integer getPeriod() 获取日志主题保存时间，单位为天，取值范围为：1-366。
 * @method void setPeriod(integer $Period) 设置日志主题保存时间，单位为天，取值范围为：1-366。
 * @method array getEntityList() 获取推送任务实体列表。
 * @method void setEntityList(array $EntityList) 设置推送任务实体列表。
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>不填将根据用户的地域智能选择加速区域。
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>不填将根据用户的地域智能选择加速区域。
 */
class CreateLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string 日志集ID。
     */
    public $LogSetId;

    /**
     * @var string 日志集所属的地域。
     */
    public $LogSetRegion;

    /**
     * @var string 日志集主题名。
     */
    public $TopicName;

    /**
     * @var string 推送任务的名称。
     */
    public $TaskName;

    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 数据推送类型，取值有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
     */
    public $EntityType;

    /**
     * @var integer 日志主题保存时间，单位为天，取值范围为：1-366。
     */
    public $Period;

    /**
     * @var array 推送任务实体列表。
     */
    public $EntityList;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>不填将根据用户的地域智能选择加速区域。
     */
    public $Area;

    /**
     * @param string $LogSetId 日志集ID。
     * @param string $LogSetRegion 日志集所属的地域。
     * @param string $TopicName 日志集主题名。
     * @param string $TaskName 推送任务的名称。
     * @param string $ZoneId 站点ID。
     * @param string $ZoneName 站点名称。
     * @param string $EntityType 数据推送类型，取值有：
<li>domain：七层代理日志；</li>
<li>application：四层代理日志；</li>
<li>web-rateLiming：速率限制日志；</li>
<li>web-attack：Web攻击防护日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
     * @param integer $Period 日志主题保存时间，单位为天，取值范围为：1-366。
     * @param array $EntityList 推送任务实体列表。
     * @param string $Area 加速区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>不填将根据用户的地域智能选择加速区域。
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
