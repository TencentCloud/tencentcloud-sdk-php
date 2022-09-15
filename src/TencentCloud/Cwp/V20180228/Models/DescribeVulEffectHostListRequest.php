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
 * DescribeVulEffectHostList请求参数结构体
 *
 * @method integer getLimit() 获取分页limit 最大100
 * @method void setLimit(integer $Limit) 设置分页limit 最大100
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method array getFilters() 获取过滤条件：
<li>AliasName - String - 主机名筛选</li>
<li>TagIds - String - 主机标签id串，多个用英文用逗号分隔</li>
<li>Status - String - 状态：0-待处理 1-忽略  3-已修复  5-检测中  6-修复中  8-修复失败</li>
<li>Uuid - String数组 - Uuid串数组</li>
<li>Version - String数组 - 付费版本数组："Flagship"-旗舰版 "PRO_VERSION"-专业版 "BASIC_VERSION"-基础版</li>
<li>InstanceState - String数组 - 实例状态数组："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
 * @method void setFilters(array $Filters) 设置过滤条件：
<li>AliasName - String - 主机名筛选</li>
<li>TagIds - String - 主机标签id串，多个用英文用逗号分隔</li>
<li>Status - String - 状态：0-待处理 1-忽略  3-已修复  5-检测中  6-修复中  8-修复失败</li>
<li>Uuid - String数组 - Uuid串数组</li>
<li>Version - String数组 - 付费版本数组："Flagship"-旗舰版 "PRO_VERSION"-专业版 "BASIC_VERSION"-基础版</li>
<li>InstanceState - String数组 - 实例状态数组："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
 */
class DescribeVulEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer 分页limit 最大100
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var array 过滤条件：
<li>AliasName - String - 主机名筛选</li>
<li>TagIds - String - 主机标签id串，多个用英文用逗号分隔</li>
<li>Status - String - 状态：0-待处理 1-忽略  3-已修复  5-检测中  6-修复中  8-修复失败</li>
<li>Uuid - String数组 - Uuid串数组</li>
<li>Version - String数组 - 付费版本数组："Flagship"-旗舰版 "PRO_VERSION"-专业版 "BASIC_VERSION"-基础版</li>
<li>InstanceState - String数组 - 实例状态数组："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
     */
    public $Filters;

    /**
     * @param integer $Limit 分页limit 最大100
     * @param integer $Offset 分页Offset
     * @param integer $VulId 漏洞id
     * @param array $Filters 过滤条件：
<li>AliasName - String - 主机名筛选</li>
<li>TagIds - String - 主机标签id串，多个用英文用逗号分隔</li>
<li>Status - String - 状态：0-待处理 1-忽略  3-已修复  5-检测中  6-修复中  8-修复失败</li>
<li>Uuid - String数组 - Uuid串数组</li>
<li>Version - String数组 - 付费版本数组："Flagship"-旗舰版 "PRO_VERSION"-专业版 "BASIC_VERSION"-基础版</li>
<li>InstanceState - String数组 - 实例状态数组："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-开机中 "STOPPING"-关机中 "REBOOTING"-重启中 "SHUTDOWN"-待销毁 "TERMINATING"-销毁中 "UNKNOWN"-未知（针对非腾讯云机器，且客户端离线的场景） </li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
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
