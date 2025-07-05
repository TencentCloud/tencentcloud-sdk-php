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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSoftCensusListByDevice请求参数结构体
 *
 * @method integer getOsType() 获取必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
 * @method void setOsType(integer $OsType) 设置必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
 * @method integer getGroupId() 获取必填，终端分组ID
 * @method void setGroupId(integer $GroupId) 设置必填，终端分组ID
 * @method Condition getCondition() 获取过滤条件、分页参数   <li>Name - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端名。</li> 	<li>UserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端用户名。</li> 	<li>IoaUserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，最近登录账号。</li> 	<li>Ip - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，IP地址。</li> 	<li>MacAddr - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，MAC地址。</li>
 * @method void setCondition(Condition $Condition) 设置过滤条件、分页参数   <li>Name - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端名。</li> 	<li>UserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端用户名。</li> 	<li>IoaUserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，最近登录账号。</li> 	<li>Ip - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，IP地址。</li> 	<li>MacAddr - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，MAC地址。</li>
 */
class DescribeSoftCensusListByDeviceRequest extends AbstractModel
{
    /**
     * @var integer 必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
     */
    public $OsType;

    /**
     * @var integer 必填，终端分组ID
     */
    public $GroupId;

    /**
     * @var Condition 过滤条件、分页参数   <li>Name - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端名。</li> 	<li>UserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端用户名。</li> 	<li>IoaUserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，最近登录账号。</li> 	<li>Ip - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，IP地址。</li> 	<li>MacAddr - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，MAC地址。</li>
     */
    public $Condition;

    /**
     * @param integer $OsType 必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
     * @param integer $GroupId 必填，终端分组ID
     * @param Condition $Condition 过滤条件、分页参数   <li>Name - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端名。</li> 	<li>UserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，终端用户名。</li> 	<li>IoaUserName - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，最近登录账号。</li> 	<li>Ip - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，IP地址。</li> 	<li>MacAddr - String - 是否必填：否 - 操作符: eq,like,ilike  - 排序支持：否 - 备注：字段含义，MAC地址。</li>
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
        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }
    }
}
