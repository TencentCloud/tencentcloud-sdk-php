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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetAttackSetting返回参数结构体
 *
 * @method integer getNetAttackEnable() 获取<p>0 关闭网络攻击检测，1开启网络攻击检测</p>
 * @method void setNetAttackEnable(integer $NetAttackEnable) 设置<p>0 关闭网络攻击检测，1开启网络攻击检测</p>
 * @method integer getNetAttackAlarmStatus() 获取<p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
 * @method void setNetAttackAlarmStatus(integer $NetAttackAlarmStatus) 设置<p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
 * @method integer getAutoInclude() 获取<p>新增资产自动包含 0 不包含 1包含</p>
 * @method void setAutoInclude(integer $AutoInclude) 设置<p>新增资产自动包含 0 不包含 1包含</p>
 * @method integer getCWPScope() 获取<p>主机范围</p>
 * @method void setCWPScope(integer $CWPScope) 设置<p>主机范围</p>
 * @method array getInstanceIDs() 获取<p>指定主机instance_id列表</p>
 * @method void setInstanceIDs(array $InstanceIDs) 设置<p>指定主机instance_id列表</p>
 * @method array getExcludeInstanceIDs() 获取<p>排除主机instance_id列表</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) 设置<p>排除主机instance_id列表</p>
 * @method array getTagIDs() 获取<p>标签ID列表</p>
 * @method void setTagIDs(array $TagIDs) 设置<p>标签ID列表</p>
 * @method integer getTCSSScope() 获取<p>容器范围</p>
 * @method void setTCSSScope(integer $TCSSScope) 设置<p>容器范围</p>
 * @method array getClusterIDs() 获取<p>指定集群ID列表</p>
 * @method void setClusterIDs(array $ClusterIDs) 设置<p>指定集群ID列表</p>
 * @method array getExcludeClusterIDs() 获取<p>排除集群ID列表</p>
 * @method void setExcludeClusterIDs(array $ExcludeClusterIDs) 设置<p>排除集群ID列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNetAttackSettingResponse extends AbstractModel
{
    /**
     * @var integer <p>0 关闭网络攻击检测，1开启网络攻击检测</p>
     */
    public $NetAttackEnable;

    /**
     * @var integer <p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
     */
    public $NetAttackAlarmStatus;

    /**
     * @var integer <p>新增资产自动包含 0 不包含 1包含</p>
     */
    public $AutoInclude;

    /**
     * @var integer <p>主机范围</p>
     */
    public $CWPScope;

    /**
     * @var array <p>指定主机instance_id列表</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>排除主机instance_id列表</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @var array <p>标签ID列表</p>
     */
    public $TagIDs;

    /**
     * @var integer <p>容器范围</p>
     */
    public $TCSSScope;

    /**
     * @var array <p>指定集群ID列表</p>
     */
    public $ClusterIDs;

    /**
     * @var array <p>排除集群ID列表</p>
     */
    public $ExcludeClusterIDs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NetAttackEnable <p>0 关闭网络攻击检测，1开启网络攻击检测</p>
     * @param integer $NetAttackAlarmStatus <p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
     * @param integer $AutoInclude <p>新增资产自动包含 0 不包含 1包含</p>
     * @param integer $CWPScope <p>主机范围</p>
     * @param array $InstanceIDs <p>指定主机instance_id列表</p>
     * @param array $ExcludeInstanceIDs <p>排除主机instance_id列表</p>
     * @param array $TagIDs <p>标签ID列表</p>
     * @param integer $TCSSScope <p>容器范围</p>
     * @param array $ClusterIDs <p>指定集群ID列表</p>
     * @param array $ExcludeClusterIDs <p>排除集群ID列表</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NetAttackEnable",$param) and $param["NetAttackEnable"] !== null) {
            $this->NetAttackEnable = $param["NetAttackEnable"];
        }

        if (array_key_exists("NetAttackAlarmStatus",$param) and $param["NetAttackAlarmStatus"] !== null) {
            $this->NetAttackAlarmStatus = $param["NetAttackAlarmStatus"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }

        if (array_key_exists("ExcludeClusterIDs",$param) and $param["ExcludeClusterIDs"] !== null) {
            $this->ExcludeClusterIDs = $param["ExcludeClusterIDs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
