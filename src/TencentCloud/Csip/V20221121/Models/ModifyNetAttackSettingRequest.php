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
 * ModifyNetAttackSetting请求参数结构体
 *
 * @method integer getNetAttackEnable() 获取<p>0 关闭网络攻击检测，1开启网络攻击检测</p>
 * @method void setNetAttackEnable(integer $NetAttackEnable) 设置<p>0 关闭网络攻击检测，1开启网络攻击检测</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getNetAttackAlarmStatus() 获取<p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
 * @method void setNetAttackAlarmStatus(integer $NetAttackAlarmStatus) 设置<p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
 * @method integer getAutoInclude() 获取<p>新增资产自动包含 0 不包含 1包含</p>
 * @method void setAutoInclude(integer $AutoInclude) 设置<p>新增资产自动包含 0 不包含 1包含</p>
 * @method integer getCWPScope() 获取<p>主机范围：0-指定 1-全部 2-专业版 3-旗舰版 4-专业+旗舰</p>
 * @method void setCWPScope(integer $CWPScope) 设置<p>主机范围：0-指定 1-全部 2-专业版 3-旗舰版 4-专业+旗舰</p>
 * @method array getInstanceIDsWithAppId() 获取<p>指定主机列表（CWPScope=0时使用）</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) 设置<p>指定主机列表（CWPScope=0时使用）</p>
 * @method array getExcludeInstanceIDsWithAppId() 获取<p>排除主机列表</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) 设置<p>排除主机列表</p>
 * @method array getTagIDs() 获取<p>标签ID列表</p>
 * @method void setTagIDs(array $TagIDs) 设置<p>标签ID列表</p>
 * @method integer getTCSSScope() 获取<p>容器范围：0-指定集群 1-全部集群</p>
 * @method void setTCSSScope(integer $TCSSScope) 设置<p>容器范围：0-指定集群 1-全部集群</p>
 * @method array getClusterIDsWithAppId() 获取<p>指定集群列表（TCSSScope=0时使用）</p>
 * @method void setClusterIDsWithAppId(array $ClusterIDsWithAppId) 设置<p>指定集群列表（TCSSScope=0时使用）</p>
 * @method array getExcludeClusterIDsWithAppId() 获取<p>排除集群列表</p>
 * @method void setExcludeClusterIDsWithAppId(array $ExcludeClusterIDsWithAppId) 设置<p>排除集群列表</p>
 */
class ModifyNetAttackSettingRequest extends AbstractModel
{
    /**
     * @var integer <p>0 关闭网络攻击检测，1开启网络攻击检测</p>
     */
    public $NetAttackEnable;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
     */
    public $NetAttackAlarmStatus;

    /**
     * @var integer <p>新增资产自动包含 0 不包含 1包含</p>
     */
    public $AutoInclude;

    /**
     * @var integer <p>主机范围：0-指定 1-全部 2-专业版 3-旗舰版 4-专业+旗舰</p>
     */
    public $CWPScope;

    /**
     * @var array <p>指定主机列表（CWPScope=0时使用）</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>排除主机列表</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>标签ID列表</p>
     */
    public $TagIDs;

    /**
     * @var integer <p>容器范围：0-指定集群 1-全部集群</p>
     */
    public $TCSSScope;

    /**
     * @var array <p>指定集群列表（TCSSScope=0时使用）</p>
     */
    public $ClusterIDsWithAppId;

    /**
     * @var array <p>排除集群列表</p>
     */
    public $ExcludeClusterIDsWithAppId;

    /**
     * @param integer $NetAttackEnable <p>0 关闭网络攻击检测，1开启网络攻击检测</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $NetAttackAlarmStatus <p>0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略</p>
     * @param integer $AutoInclude <p>新增资产自动包含 0 不包含 1包含</p>
     * @param integer $CWPScope <p>主机范围：0-指定 1-全部 2-专业版 3-旗舰版 4-专业+旗舰</p>
     * @param array $InstanceIDsWithAppId <p>指定主机列表（CWPScope=0时使用）</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>排除主机列表</p>
     * @param array $TagIDs <p>标签ID列表</p>
     * @param integer $TCSSScope <p>容器范围：0-指定集群 1-全部集群</p>
     * @param array $ClusterIDsWithAppId <p>指定集群列表（TCSSScope=0时使用）</p>
     * @param array $ExcludeClusterIDsWithAppId <p>排除集群列表</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ClusterIDsWithAppId",$param) and $param["ClusterIDsWithAppId"] !== null) {
            $this->ClusterIDsWithAppId = [];
            foreach ($param["ClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeClusterIDsWithAppId",$param) and $param["ExcludeClusterIDsWithAppId"] !== null) {
            $this->ExcludeClusterIDsWithAppId = [];
            foreach ($param["ExcludeClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeClusterIDsWithAppId, $obj);
            }
        }
    }
}
