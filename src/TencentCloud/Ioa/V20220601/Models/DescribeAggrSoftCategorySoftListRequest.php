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
 * DescribeAggrSoftCategorySoftList请求参数结构体
 *
 * @method Condition getCondition() 获取过滤条件、分页参数<li>Name - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按类别名称过滤或排序。</li><li>CorpName - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按CorpName过滤或排序。</li><li>Version - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按版本排序。</li><li>InstalledDeviceCount - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按安装设备数量排序。</li><li>GenuineRate - float - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按正版率排序。</li><li>AuthNum - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按授权数量排序。</li><li>CategoryNamePath - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按类别路径名排序。</li>
 * @method void setCondition(Condition $Condition) 设置过滤条件、分页参数<li>Name - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按类别名称过滤或排序。</li><li>CorpName - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按CorpName过滤或排序。</li><li>Version - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按版本排序。</li><li>InstalledDeviceCount - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按安装设备数量排序。</li><li>GenuineRate - float - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按正版率排序。</li><li>AuthNum - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按授权数量排序。</li><li>CategoryNamePath - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按类别路径名排序。</li>
 * @method integer getOsType() 获取操作系统类型（0: win，1：linux，2: mac，4：android，5：ios 默认值0）
 * @method void setOsType(integer $OsType) 设置操作系统类型（0: win，1：linux，2: mac，4：android，5：ios 默认值0）
 */
class DescribeAggrSoftCategorySoftListRequest extends AbstractModel
{
    /**
     * @var Condition 过滤条件、分页参数<li>Name - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按类别名称过滤或排序。</li><li>CorpName - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按CorpName过滤或排序。</li><li>Version - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按版本排序。</li><li>InstalledDeviceCount - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按安装设备数量排序。</li><li>GenuineRate - float - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按正版率排序。</li><li>AuthNum - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按授权数量排序。</li><li>CategoryNamePath - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按类别路径名排序。</li>
     */
    public $Condition;

    /**
     * @var integer 操作系统类型（0: win，1：linux，2: mac，4：android，5：ios 默认值0）
     */
    public $OsType;

    /**
     * @param Condition $Condition 过滤条件、分页参数<li>Name - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按类别名称过滤或排序。</li><li>CorpName - String - 过滤支持：是 - 操作符:eq,neq,like,ilike,nlike - 排序支持：是 - 按CorpName过滤或排序。</li><li>Version - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按版本排序。</li><li>InstalledDeviceCount - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按安装设备数量排序。</li><li>GenuineRate - float - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按正版率排序。</li><li>AuthNum - int - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按授权数量排序。</li><li>CategoryNamePath - String - 过滤支持：否 - 操作符:eq,like - 排序支持：是 - 按类别路径名排序。</li>
     * @param integer $OsType 操作系统类型（0: win，1：linux，2: mac，4：android，5：ios 默认值0）
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
