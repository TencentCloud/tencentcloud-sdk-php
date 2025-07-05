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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置组版本信息。
 *
 * @method string getVersionId() 获取版本 ID。
 * @method void setVersionId(string $VersionId) 设置版本 ID。
 * @method string getVersionNumber() 获取版本号。
 * @method void setVersionNumber(string $VersionNumber) 设置版本号。
 * @method string getGroupId() 获取配置组 ID。
 * @method void setGroupId(string $GroupId) 设置配置组 ID。
 * @method string getGroupType() 获取配置组类型。取值有：
<li>l7_acceleration ：七层加速配置组。</li>
<li>edge_functions ：边缘函数配置组。</li>
 * @method void setGroupType(string $GroupType) 设置配置组类型。取值有：
<li>l7_acceleration ：七层加速配置组。</li>
<li>edge_functions ：边缘函数配置组。</li>
 * @method string getDescription() 获取版本描述。
 * @method void setDescription(string $Description) 设置版本描述。
 * @method string getStatus() 获取版本状态，取值有：
<li>creating：创建中；</li>
<li>inactive：未生效；</li>
<li>active：已生效。</li>
 * @method void setStatus(string $Status) 设置版本状态，取值有：
<li>creating：创建中；</li>
<li>inactive：未生效；</li>
<li>active：已生效。</li>
 * @method string getCreateTime() 获取版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setCreateTime(string $CreateTime) 设置版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 */
class ConfigGroupVersionInfo extends AbstractModel
{
    /**
     * @var string 版本 ID。
     */
    public $VersionId;

    /**
     * @var string 版本号。
     */
    public $VersionNumber;

    /**
     * @var string 配置组 ID。
     */
    public $GroupId;

    /**
     * @var string 配置组类型。取值有：
<li>l7_acceleration ：七层加速配置组。</li>
<li>edge_functions ：边缘函数配置组。</li>
     */
    public $GroupType;

    /**
     * @var string 版本描述。
     */
    public $Description;

    /**
     * @var string 版本状态，取值有：
<li>creating：创建中；</li>
<li>inactive：未生效；</li>
<li>active：已生效。</li>
     */
    public $Status;

    /**
     * @var string 版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $CreateTime;

    /**
     * @param string $VersionId 版本 ID。
     * @param string $VersionNumber 版本号。
     * @param string $GroupId 配置组 ID。
     * @param string $GroupType 配置组类型。取值有：
<li>l7_acceleration ：七层加速配置组。</li>
<li>edge_functions ：边缘函数配置组。</li>
     * @param string $Description 版本描述。
     * @param string $Status 版本状态，取值有：
<li>creating：创建中；</li>
<li>inactive：未生效；</li>
<li>active：已生效。</li>
     * @param string $CreateTime 版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
