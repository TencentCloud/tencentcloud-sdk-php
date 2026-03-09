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
 * ExportPatchEffectHostList请求参数结构体
 *
 * @method integer getKbId() 获取补丁id
 * @method void setKbId(integer $KbId) 设置补丁id
 * @method array getFilters() 获取过滤条件：  
<li>ProtectType : uint64类型 非必填 防护版本类型  0表示BASIC_VERSION，1表示Flagship </li>
<li>InstanceState : string类型 非必填 主机状态 : "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
<li>Status : uint64类型 非必填 处理状态 0表示待处理，1表示忽略，3表示已修复</li>
<li>HostName : string类型 非必填 主机名称 </li>
<li>InstanceID : string类型 非必填 主机id </li>
<li>IpAddress : string类型 非必填 主机的ip地址 </li>
<li>Uuid : string类型 非必填 主机uuid</li>
 * @method void setFilters(array $Filters) 设置过滤条件：  
<li>ProtectType : uint64类型 非必填 防护版本类型  0表示BASIC_VERSION，1表示Flagship </li>
<li>InstanceState : string类型 非必填 主机状态 : "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
<li>Status : uint64类型 非必填 处理状态 0表示待处理，1表示忽略，3表示已修复</li>
<li>HostName : string类型 非必填 主机名称 </li>
<li>InstanceID : string类型 非必填 主机id </li>
<li>IpAddress : string类型 非必填 主机的ip地址 </li>
<li>Uuid : string类型 非必填 主机uuid</li>
 */
class ExportPatchEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer 补丁id
     */
    public $KbId;

    /**
     * @var array 过滤条件：  
<li>ProtectType : uint64类型 非必填 防护版本类型  0表示BASIC_VERSION，1表示Flagship </li>
<li>InstanceState : string类型 非必填 主机状态 : "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
<li>Status : uint64类型 非必填 处理状态 0表示待处理，1表示忽略，3表示已修复</li>
<li>HostName : string类型 非必填 主机名称 </li>
<li>InstanceID : string类型 非必填 主机id </li>
<li>IpAddress : string类型 非必填 主机的ip地址 </li>
<li>Uuid : string类型 非必填 主机uuid</li>
     */
    public $Filters;

    /**
     * @param integer $KbId 补丁id
     * @param array $Filters 过滤条件：  
<li>ProtectType : uint64类型 非必填 防护版本类型  0表示BASIC_VERSION，1表示Flagship </li>
<li>InstanceState : string类型 非必填 主机状态 : "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
<li>Status : uint64类型 非必填 处理状态 0表示待处理，1表示忽略，3表示已修复</li>
<li>HostName : string类型 非必填 主机名称 </li>
<li>InstanceID : string类型 非必填 主机id </li>
<li>IpAddress : string类型 非必填 主机的ip地址 </li>
<li>Uuid : string类型 非必填 主机uuid</li>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
