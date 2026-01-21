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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子应用信息。
 *
 * @method integer getSubAppId() 获取子应用 ID。
 * @method void setSubAppId(integer $SubAppId) 设置子应用 ID。
 * @method string getSubAppIdName() 获取子应用名称。
 * @method void setSubAppIdName(string $SubAppIdName) 设置子应用名称。
 * @method string getDescription() 获取子应用简介。
 * @method void setDescription(string $Description) 设置子应用简介。
 * @method string getCreateTime() 获取子应用创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置子应用创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getStatus() 获取子应用状态，有效值：
<li>On：启用；</li>
<li>Off：停用。</li>
<li>Destroying：销毁中。</li>
<li>Destroyed：销毁完成。</li>
 * @method void setStatus(string $Status) 设置子应用状态，有效值：
<li>On：启用；</li>
<li>Off：停用。</li>
<li>Destroying：销毁中。</li>
<li>Destroyed：销毁完成。</li>
 * @method string getName() 获取子应用名称（该字段已不推荐使用，建议使用新的子应用名称字段 SubAppIdName）。
 * @method void setName(string $Name) 设置子应用名称（该字段已不推荐使用，建议使用新的子应用名称字段 SubAppIdName）。
 * @method string getMode() 获取此应用的模式，可选值为：
- fileid：仅FileID模式
- - fileid+path：FileID & Path模式
留空时默认选择仅FileID模式
 * @method void setMode(string $Mode) 设置此应用的模式，可选值为：
- fileid：仅FileID模式
- - fileid+path：FileID & Path模式
留空时默认选择仅FileID模式
 * @method array getStorageRegions() 获取子应用已启用的存储地域。
 * @method void setStorageRegions(array $StorageRegions) 设置子应用已启用的存储地域。
 * @method array getTags() 获取子应用绑定的tag。
 * @method void setTags(array $Tags) 设置子应用绑定的tag。
 */
class SubAppIdInfo extends AbstractModel
{
    /**
     * @var integer 子应用 ID。
     */
    public $SubAppId;

    /**
     * @var string 子应用名称。
     */
    public $SubAppIdName;

    /**
     * @var string 子应用简介。
     */
    public $Description;

    /**
     * @var string 子应用创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 子应用状态，有效值：
<li>On：启用；</li>
<li>Off：停用。</li>
<li>Destroying：销毁中。</li>
<li>Destroyed：销毁完成。</li>
     */
    public $Status;

    /**
     * @var string 子应用名称（该字段已不推荐使用，建议使用新的子应用名称字段 SubAppIdName）。
     */
    public $Name;

    /**
     * @var string 此应用的模式，可选值为：
- fileid：仅FileID模式
- - fileid+path：FileID & Path模式
留空时默认选择仅FileID模式
     */
    public $Mode;

    /**
     * @var array 子应用已启用的存储地域。
     */
    public $StorageRegions;

    /**
     * @var array 子应用绑定的tag。
     */
    public $Tags;

    /**
     * @param integer $SubAppId 子应用 ID。
     * @param string $SubAppIdName 子应用名称。
     * @param string $Description 子应用简介。
     * @param string $CreateTime 子应用创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $Status 子应用状态，有效值：
<li>On：启用；</li>
<li>Off：停用。</li>
<li>Destroying：销毁中。</li>
<li>Destroyed：销毁完成。</li>
     * @param string $Name 子应用名称（该字段已不推荐使用，建议使用新的子应用名称字段 SubAppIdName）。
     * @param string $Mode 此应用的模式，可选值为：
- fileid：仅FileID模式
- - fileid+path：FileID & Path模式
留空时默认选择仅FileID模式
     * @param array $StorageRegions 子应用已启用的存储地域。
     * @param array $Tags 子应用绑定的tag。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubAppIdName",$param) and $param["SubAppIdName"] !== null) {
            $this->SubAppIdName = $param["SubAppIdName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StorageRegions",$param) and $param["StorageRegions"] !== null) {
            $this->StorageRegions = $param["StorageRegions"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
