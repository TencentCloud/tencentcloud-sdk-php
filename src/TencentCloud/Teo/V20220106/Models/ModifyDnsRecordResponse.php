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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDnsRecord返回参数结构体
 *
 * @method string getId() 获取记录 ID
 * @method void setId(string $Id) 设置记录 ID
 * @method string getType() 获取记录类型
 * @method void setType(string $Type) 设置记录类型
 * @method string getName() 获取记录名称
 * @method void setName(string $Name) 设置记录名称
 * @method string getContent() 获取记录内容
 * @method void setContent(string $Content) 设置记录内容
 * @method integer getTtl() 获取生存时间值
 * @method void setTtl(integer $Ttl) 设置生存时间值
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method string getMode() 获取代理模式
 * @method void setMode(string $Mode) 设置代理模式
 * @method string getStatus() 获取解析状态
 * @method void setStatus(string $Status) 设置解析状态
 * @method string getCname() 获取CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLocked() 获取锁定状态
 * @method void setLocked(boolean $Locked) 设置锁定状态
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getModifiedOn() 获取修改时间
 * @method void setModifiedOn(string $ModifiedOn) 设置修改时间
 * @method string getZoneId() 获取站点 ID
 * @method void setZoneId(string $ZoneId) 设置站点 ID
 * @method string getZoneName() 获取站点名称
 * @method void setZoneName(string $ZoneName) 设置站点名称
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyDnsRecordResponse extends AbstractModel
{
    /**
     * @var string 记录 ID
     */
    public $Id;

    /**
     * @var string 记录类型
     */
    public $Type;

    /**
     * @var string 记录名称
     */
    public $Name;

    /**
     * @var string 记录内容
     */
    public $Content;

    /**
     * @var integer 生存时间值
     */
    public $Ttl;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var string 代理模式
     */
    public $Mode;

    /**
     * @var string 解析状态
     */
    public $Status;

    /**
     * @var string CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var boolean 锁定状态
     */
    public $Locked;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 修改时间
     */
    public $ModifiedOn;

    /**
     * @var string 站点 ID
     */
    public $ZoneId;

    /**
     * @var string 站点名称
     */
    public $ZoneName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id 记录 ID
     * @param string $Type 记录类型
     * @param string $Name 记录名称
     * @param string $Content 记录内容
     * @param integer $Ttl 生存时间值
     * @param integer $Priority 优先级
     * @param string $Mode 代理模式
     * @param string $Status 解析状态
     * @param string $Cname CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Locked 锁定状态
     * @param string $CreatedOn 创建时间
     * @param string $ModifiedOn 修改时间
     * @param string $ZoneId 站点 ID
     * @param string $ZoneName 站点名称
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
