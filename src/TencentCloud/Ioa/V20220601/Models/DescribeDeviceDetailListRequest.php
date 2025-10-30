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
 * DescribeDeviceDetailList请求参数结构体
 *
 * @method integer getOsType() 获取系统类型(只支持32位)
 * @method void setOsType(integer $OsType) 设置系统类型(只支持32位)
 * @method integer getGroupId() 获取终端分组id(只支持32位)
 * @method void setGroupId(integer $GroupId) 设置终端分组id(只支持32位)
 * @method Condition getCondition() 获取过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
 * @method void setCondition(Condition $Condition) 设置过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
 */
class DescribeDeviceDetailListRequest extends AbstractModel
{
    /**
     * @var integer 系统类型(只支持32位)
     */
    public $OsType;

    /**
     * @var integer 终端分组id(只支持32位)
     */
    public $GroupId;

    /**
     * @var Condition 过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
     */
    public $Condition;

    /**
     * @param integer $OsType 系统类型(只支持32位)
     * @param integer $GroupId 终端分组id(只支持32位)
     * @param Condition $Condition 过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
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
