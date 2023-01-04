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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * java内存马事件信息
 *
 * @method integer getId() 获取事件ID
 * @method void setId(integer $Id) 设置事件ID
 * @method string getAlias() 获取服务器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置服务器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostIp() 获取服务器IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIp(string $HostIp) 设置服务器IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
 * @method void setType(integer $Type) 设置内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
 * @method string getDescription() 获取说明
 * @method void setDescription(string $Description) 设置说明
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getRecentFoundTime() 获取最近检测时间
 * @method void setRecentFoundTime(string $RecentFoundTime) 设置最近检测时间
 * @method integer getStatus() 获取处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
 * @method void setStatus(integer $Status) 设置处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
 * @method string getQuuid() 获取服务器quuid
 * @method void setQuuid(string $Quuid) 设置服务器quuid
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class JavaMemShellInfo extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $Id;

    /**
     * @var string 服务器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var string 服务器IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIp;

    /**
     * @var integer 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     */
    public $Type;

    /**
     * @var string 说明
     */
    public $Description;

    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 最近检测时间
     */
    public $RecentFoundTime;

    /**
     * @var integer 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     */
    public $Status;

    /**
     * @var string 服务器quuid
     */
    public $Quuid;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param integer $Id 事件ID
     * @param string $Alias 服务器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIp 服务器IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     * @param string $Description 说明
     * @param string $CreateTime 首次发现时间
     * @param string $RecentFoundTime 最近检测时间
     * @param integer $Status 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     * @param string $Quuid 服务器quuid
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecentFoundTime",$param) and $param["RecentFoundTime"] !== null) {
            $this->RecentFoundTime = $param["RecentFoundTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
