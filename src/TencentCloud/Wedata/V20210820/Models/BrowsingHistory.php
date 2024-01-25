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
 * 数据开发浏览历史
 *
 * @method string getTitle() 获取名字
 * @method void setTitle(string $Title) 设置名字
 * @method string getVisitTime() 获取访问时间
 * @method void setVisitTime(string $VisitTime) 设置访问时间
 * @method string getExtraInfo() 获取资源相关个性化信息，json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置资源相关个性化信息，json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取资源id
 * @method void setResourceType(string $ResourceType) 设置资源id
 * @method string getResourceId() 获取查询历史的资源类型file/task/function/event等
 * @method void setResourceId(string $ResourceId) 设置查询历史的资源类型file/task/function/event等
 */
class BrowsingHistory extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $Title;

    /**
     * @var string 访问时间
     */
    public $VisitTime;

    /**
     * @var string 资源相关个性化信息，json格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 资源id
     */
    public $ResourceType;

    /**
     * @var string 查询历史的资源类型file/task/function/event等
     */
    public $ResourceId;

    /**
     * @param string $Title 名字
     * @param string $VisitTime 访问时间
     * @param string $ExtraInfo 资源相关个性化信息，json格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 资源id
     * @param string $ResourceId 查询历史的资源类型file/task/function/event等
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("VisitTime",$param) and $param["VisitTime"] !== null) {
            $this->VisitTime = $param["VisitTime"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
