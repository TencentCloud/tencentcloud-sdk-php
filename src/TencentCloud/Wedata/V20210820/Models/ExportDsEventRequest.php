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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportDsEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getOriginDomain() 获取cos地址
 * @method void setOriginDomain(string $OriginDomain) 设置cos地址
 * @method string getRange() 获取事件范围 ALL、PUBLISH、PARTIAL
 * @method void setRange(string $Range) 设置事件范围 ALL、PUBLISH、PARTIAL
 * @method array getEventNames() 获取事件名称列表,用于发布管理导出
 * @method void setEventNames(array $EventNames) 设置事件名称列表,用于发布管理导出
 * @method array getEvents() 获取事件列表
 * @method void setEvents(array $Events) 设置事件列表
 * @method string getPublishTime() 获取增量发布事件
 * @method void setPublishTime(string $PublishTime) 设置增量发布事件
 * @method string getTitle() 获取文件标题
 * @method void setTitle(string $Title) 设置文件标题
 */
class ExportDsEventRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string cos地址
     */
    public $OriginDomain;

    /**
     * @var string 事件范围 ALL、PUBLISH、PARTIAL
     */
    public $Range;

    /**
     * @var array 事件名称列表,用于发布管理导出
     */
    public $EventNames;

    /**
     * @var array 事件列表
     */
    public $Events;

    /**
     * @var string 增量发布事件
     */
    public $PublishTime;

    /**
     * @var string 文件标题
     */
    public $Title;

    /**
     * @param string $ProjectId 项目id
     * @param string $OriginDomain cos地址
     * @param string $Range 事件范围 ALL、PUBLISH、PARTIAL
     * @param array $EventNames 事件名称列表,用于发布管理导出
     * @param array $Events 事件列表
     * @param string $PublishTime 增量发布事件
     * @param string $Title 文件标题
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OriginDomain",$param) and $param["OriginDomain"] !== null) {
            $this->OriginDomain = $param["OriginDomain"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("EventNames",$param) and $param["EventNames"] !== null) {
            $this->EventNames = $param["EventNames"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new EventDsDto();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
