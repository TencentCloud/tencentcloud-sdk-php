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
 * 基线密码修复
 *
 * @method string getItemName() 获取修复项名称
 * @method void setItemName(string $ItemName) 设置修复项名称
 * @method string getHostIp() 获取主机Ip
 * @method void setHostIp(string $HostIp) 设置主机Ip
 * @method string getCreateTime() 获取首次检测时间
 * @method void setCreateTime(string $CreateTime) 设置首次检测时间
 * @method string getModifyTime() 获取最后检测时间
 * @method void setModifyTime(string $ModifyTime) 设置最后检测时间
 * @method string getFixTime() 获取修复时间
 * @method void setFixTime(string $FixTime) 设置修复时间
 * @method integer getId() 获取基线检测项结果ID
 * @method void setId(integer $Id) 设置基线检测项结果ID
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineFix extends AbstractModel
{
    /**
     * @var string 修复项名称
     */
    public $ItemName;

    /**
     * @var string 主机Ip
     */
    public $HostIp;

    /**
     * @var string 首次检测时间
     */
    public $CreateTime;

    /**
     * @var string 最后检测时间
     */
    public $ModifyTime;

    /**
     * @var string 修复时间
     */
    public $FixTime;

    /**
     * @var integer 基线检测项结果ID
     */
    public $Id;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $ItemName 修复项名称
     * @param string $HostIp 主机Ip
     * @param string $CreateTime 首次检测时间
     * @param string $ModifyTime 最后检测时间
     * @param string $FixTime 修复时间
     * @param integer $Id 基线检测项结果ID
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
        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("FixTime",$param) and $param["FixTime"] !== null) {
            $this->FixTime = $param["FixTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
