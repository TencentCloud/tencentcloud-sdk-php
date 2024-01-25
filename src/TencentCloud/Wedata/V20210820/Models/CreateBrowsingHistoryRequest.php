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
 * CreateBrowsingHistory请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTitle() 获取资源名字
 * @method void setTitle(string $Title) 设置资源名字
 * @method string getResourceType() 获取查询历史的资源类型file/task/function/event等
 * @method void setResourceType(string $ResourceType) 设置查询历史的资源类型file/task/function/event等
 * @method string getResourceId() 获取资源唯一id，如taskId等
 * @method void setResourceId(string $ResourceId) 设置资源唯一id，如taskId等
 * @method string getExtraInfo() 获取json格式的资源相关个性化信息
 * @method void setExtraInfo(string $ExtraInfo) 设置json格式的资源相关个性化信息
 */
class CreateBrowsingHistoryRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 资源名字
     */
    public $Title;

    /**
     * @var string 查询历史的资源类型file/task/function/event等
     */
    public $ResourceType;

    /**
     * @var string 资源唯一id，如taskId等
     */
    public $ResourceId;

    /**
     * @var string json格式的资源相关个性化信息
     */
    public $ExtraInfo;

    /**
     * @param string $ProjectId 项目id
     * @param string $Title 资源名字
     * @param string $ResourceType 查询历史的资源类型file/task/function/event等
     * @param string $ResourceId 资源唯一id，如taskId等
     * @param string $ExtraInfo json格式的资源相关个性化信息
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }
    }
}
