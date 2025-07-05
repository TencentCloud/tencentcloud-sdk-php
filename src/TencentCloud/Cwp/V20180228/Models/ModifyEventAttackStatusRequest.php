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
 * ModifyEventAttackStatus请求参数结构体
 *
 * @method array getIds() 获取需要修改的事件id 数组，支持批量
 * @method void setIds(array $Ids) 设置需要修改的事件id 数组，支持批量
 * @method boolean getAll() 获取是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
 * @method void setAll(boolean $All) 设置是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
 * @method integer getStatus() 获取0：待处理 1：已处理 3： 已忽略 4：已删除 
 * @method void setStatus(integer $Status) 设置0：待处理 1：已处理 3： 已忽略 4：已删除 
 * @method array getFilters() 获取过滤条件。
<li>Type - String 攻击状态 0: 尝试攻击 1: 攻击成功 - 是否必填: 否</li>
<li>Status - String 事件处理状态 0：待处理 1：已处理 2： 已加白 3： 已忽略 4：已删除  - 是否必填: 否</li>
<li>SrcIP - String 来源IP - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
<li>MachineName - String 主机名称 - 是否必填: 否</li>
<li>InstanceID - String 主机实例ID - 是否必填: 否</li>
<li>Quuids - String 主机cvm uuid - 是否必填: 否</li>

 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Type - String 攻击状态 0: 尝试攻击 1: 攻击成功 - 是否必填: 否</li>
<li>Status - String 事件处理状态 0：待处理 1：已处理 2： 已加白 3： 已忽略 4：已删除  - 是否必填: 否</li>
<li>SrcIP - String 来源IP - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
<li>MachineName - String 主机名称 - 是否必填: 否</li>
<li>InstanceID - String 主机实例ID - 是否必填: 否</li>
<li>Quuids - String 主机cvm uuid - 是否必填: 否</li>

 * @method array getExcludeId() 获取排除的id
 * @method void setExcludeId(array $ExcludeId) 设置排除的id
 */
class ModifyEventAttackStatusRequest extends AbstractModel
{
    /**
     * @var array 需要修改的事件id 数组，支持批量
     */
    public $Ids;

    /**
     * @var boolean 是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
     */
    public $All;

    /**
     * @var integer 0：待处理 1：已处理 3： 已忽略 4：已删除 
     */
    public $Status;

    /**
     * @var array 过滤条件。
<li>Type - String 攻击状态 0: 尝试攻击 1: 攻击成功 - 是否必填: 否</li>
<li>Status - String 事件处理状态 0：待处理 1：已处理 2： 已加白 3： 已忽略 4：已删除  - 是否必填: 否</li>
<li>SrcIP - String 来源IP - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
<li>MachineName - String 主机名称 - 是否必填: 否</li>
<li>InstanceID - String 主机实例ID - 是否必填: 否</li>
<li>Quuids - String 主机cvm uuid - 是否必填: 否</li>

     */
    public $Filters;

    /**
     * @var array 排除的id
     */
    public $ExcludeId;

    /**
     * @param array $Ids 需要修改的事件id 数组，支持批量
     * @param boolean $All 是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
     * @param integer $Status 0：待处理 1：已处理 3： 已忽略 4：已删除 
     * @param array $Filters 过滤条件。
<li>Type - String 攻击状态 0: 尝试攻击 1: 攻击成功 - 是否必填: 否</li>
<li>Status - String 事件处理状态 0：待处理 1：已处理 2： 已加白 3： 已忽略 4：已删除  - 是否必填: 否</li>
<li>SrcIP - String 来源IP - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
<li>MachineName - String 主机名称 - 是否必填: 否</li>
<li>InstanceID - String 主机实例ID - 是否必填: 否</li>
<li>Quuids - String 主机cvm uuid - 是否必填: 否</li>

     * @param array $ExcludeId 排除的id
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeId",$param) and $param["ExcludeId"] !== null) {
            $this->ExcludeId = $param["ExcludeId"];
        }
    }
}
