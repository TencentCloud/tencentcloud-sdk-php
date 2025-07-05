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
 * 源站组信息
 *
 * @method string getGroupId() 获取源站组ID。
 * @method void setGroupId(string $GroupId) 设置源站组ID。
 * @method string getName() 获取源站组名称。
 * @method void setName(string $Name) 设置源站组名称。
 * @method string getType() 获取源站组类型，取值有：
<li>GENERAL：通用型源站组；</li>
<li>HTTP： HTTP专用型源站组。</li>
 * @method void setType(string $Type) 设置源站组类型，取值有：
<li>GENERAL：通用型源站组；</li>
<li>HTTP： HTTP专用型源站组。</li>
 * @method array getRecords() 获取源站记录信息。
 * @method void setRecords(array $Records) 设置源站记录信息。
 * @method array getReferences() 获取源站组被引用实例列表。	
 * @method void setReferences(array $References) 设置源站组被引用实例列表。	
 * @method string getCreateTime() 获取源站组创建时间。
 * @method void setCreateTime(string $CreateTime) 设置源站组创建时间。
 * @method string getUpdateTime() 获取源站组更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置源站组更新时间。
 * @method string getHostHeader() 获取回源Host Header。
 * @method void setHostHeader(string $HostHeader) 设置回源Host Header。
 */
class OriginGroup extends AbstractModel
{
    /**
     * @var string 源站组ID。
     */
    public $GroupId;

    /**
     * @var string 源站组名称。
     */
    public $Name;

    /**
     * @var string 源站组类型，取值有：
<li>GENERAL：通用型源站组；</li>
<li>HTTP： HTTP专用型源站组。</li>
     */
    public $Type;

    /**
     * @var array 源站记录信息。
     */
    public $Records;

    /**
     * @var array 源站组被引用实例列表。	
     */
    public $References;

    /**
     * @var string 源站组创建时间。
     */
    public $CreateTime;

    /**
     * @var string 源站组更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 回源Host Header。
     */
    public $HostHeader;

    /**
     * @param string $GroupId 源站组ID。
     * @param string $Name 源站组名称。
     * @param string $Type 源站组类型，取值有：
<li>GENERAL：通用型源站组；</li>
<li>HTTP： HTTP专用型源站组。</li>
     * @param array $Records 源站记录信息。
     * @param array $References 源站组被引用实例列表。	
     * @param string $CreateTime 源站组创建时间。
     * @param string $UpdateTime 源站组更新时间。
     * @param string $HostHeader 回源Host Header。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new OriginGroupReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
