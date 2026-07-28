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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBProxy请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例 ID，格式形如：postgres-xxxxxxxx</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例 ID，格式形如：postgres-xxxxxxxx</p>
 * @method string getProxyGroupId() 获取<p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传时若实例下仅有一个 Proxy 则修改该 Proxy</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传时若实例下仅有一个 Proxy 则修改该 Proxy</p>
 * @method string getDescription() 获取<p>Proxy 描述信息，长度范围 [0, 256]</p>
 * @method void setDescription(string $Description) 设置<p>Proxy 描述信息，长度范围 [0, 256]</p>
 * @method array getProxyNodeCustom() 获取<p>Proxy 节点变配规格列表，按可用区分组；变配时必填</p>
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) 设置<p>Proxy 节点变配规格列表，按可用区分组；变配时必填</p>
 * @method string getReloadBalance() 获取<p>负载均衡刷新策略：auto-自动；manual-手动；默认 auto</p>
 * @method void setReloadBalance(string $ReloadBalance) 设置<p>负载均衡刷新策略：auto-自动；manual-手动；默认 auto</p>
 * @method integer getSwitchTag() 获取<p>变配执行时机：0-立即执行（默认），1-维护时间窗内执行，2-指定时间窗执行（需配合 SwitchStartTime/SwitchEndTime）</p>
 * @method void setSwitchTag(integer $SwitchTag) 设置<p>变配执行时机：0-立即执行（默认），1-维护时间窗内执行，2-指定时间窗执行（需配合 SwitchStartTime/SwitchEndTime）</p>
 * @method string getSwitchStartTime() 获取<p>指定时间窗执行的开始时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>指定时间窗执行的开始时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
 * @method string getSwitchEndTime() 获取<p>指定时间窗执行的结束时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>指定时间窗执行的结束时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
 */
class ModifyDBProxyRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式形如：postgres-xxxxxxxx</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传时若实例下仅有一个 Proxy 则修改该 Proxy</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>Proxy 描述信息，长度范围 [0, 256]</p>
     */
    public $Description;

    /**
     * @var array <p>Proxy 节点变配规格列表，按可用区分组；变配时必填</p>
     */
    public $ProxyNodeCustom;

    /**
     * @var string <p>负载均衡刷新策略：auto-自动；manual-手动；默认 auto</p>
     */
    public $ReloadBalance;

    /**
     * @var integer <p>变配执行时机：0-立即执行（默认），1-维护时间窗内执行，2-指定时间窗执行（需配合 SwitchStartTime/SwitchEndTime）</p>
     */
    public $SwitchTag;

    /**
     * @var string <p>指定时间窗执行的开始时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>指定时间窗执行的结束时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
     */
    public $SwitchEndTime;

    /**
     * @param string $DBInstanceId <p>实例 ID，格式形如：postgres-xxxxxxxx</p>
     * @param string $ProxyGroupId <p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传时若实例下仅有一个 Proxy 则修改该 Proxy</p>
     * @param string $Description <p>Proxy 描述信息，长度范围 [0, 256]</p>
     * @param array $ProxyNodeCustom <p>Proxy 节点变配规格列表，按可用区分组；变配时必填</p>
     * @param string $ReloadBalance <p>负载均衡刷新策略：auto-自动；manual-手动；默认 auto</p>
     * @param integer $SwitchTag <p>变配执行时机：0-立即执行（默认），1-维护时间窗内执行，2-指定时间窗执行（需配合 SwitchStartTime/SwitchEndTime）</p>
     * @param string $SwitchStartTime <p>指定时间窗执行的开始时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
     * @param string $SwitchEndTime <p>指定时间窗执行的结束时间，格式 HH:MM:SS，仅 SwitchTag=2 时生效</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
