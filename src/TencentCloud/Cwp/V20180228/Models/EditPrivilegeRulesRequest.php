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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditPrivilegeRules请求参数结构体
 *
 * @method integer getId() 获取规则ID(新增时请留空)
 * @method void setId(integer $Id) 设置规则ID(新增时请留空)
 * @method array getUuids() 获取客户端ID数组
 * @method void setUuids(array $Uuids) 设置客户端ID数组
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method integer getSMode() 获取是否S权限进程
 * @method void setSMode(integer $SMode) 设置是否S权限进程
 * @method integer getIsGlobal() 获取是否全局规则(默认否)
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否)
 * @method integer getEventId() 获取事件列表和详情点击加白时关联的事件id (新增规则时请留空)
 * @method void setEventId(integer $EventId) 设置事件列表和详情点击加白时关联的事件id (新增规则时请留空)
 */
class EditPrivilegeRulesRequest extends AbstractModel
{
    /**
     * @var integer 规则ID(新增时请留空)
     */
    public $Id;

    /**
     * @var array 客户端ID数组
     */
    public $Uuids;

    /**
     * @var string 主机IP
     */
    public $HostIp;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var integer 是否S权限进程
     */
    public $SMode;

    /**
     * @var integer 是否全局规则(默认否)
     */
    public $IsGlobal;

    /**
     * @var integer 事件列表和详情点击加白时关联的事件id (新增规则时请留空)
     */
    public $EventId;

    /**
     * @param integer $Id 规则ID(新增时请留空)
     * @param array $Uuids 客户端ID数组
     * @param string $HostIp 主机IP
     * @param string $ProcessName 进程名
     * @param integer $SMode 是否S权限进程
     * @param integer $IsGlobal 是否全局规则(默认否)
     * @param integer $EventId 事件列表和详情点击加白时关联的事件id (新增规则时请留空)
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

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("SMode",$param) and $param["SMode"] !== null) {
            $this->SMode = $param["SMode"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
