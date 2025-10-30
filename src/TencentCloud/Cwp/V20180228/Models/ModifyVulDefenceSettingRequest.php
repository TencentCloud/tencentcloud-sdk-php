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
 * ModifyVulDefenceSetting请求参数结构体
 *
 * @method integer getEnable() 获取防御开关，0 关闭 1 开启
 * @method void setEnable(integer $Enable) 设置防御开关，0 关闭 1 开启
 * @method integer getScope() 获取1 全部旗舰版主机，0 Quuids列表主机
 * @method void setScope(integer $Scope) 设置1 全部旗舰版主机，0 Quuids列表主机
 * @method array getQuuids() 获取作用范围内旗舰版主机列表
 * @method void setQuuids(array $Quuids) 设置作用范围内旗舰版主机列表
 * @method array getExcludeInstanceIds() 获取排除作用范围内旗舰版主机列表
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) 设置排除作用范围内旗舰版主机列表
 * @method integer getAutoInclude() 获取新增资产自动包含 0 不包含 1包含
 * @method void setAutoInclude(integer $AutoInclude) 设置新增资产自动包含 0 不包含 1包含
 * @method array getInstanceIds() 获取作用范围内旗舰版主机列表
 * @method void setInstanceIds(array $InstanceIds) 设置作用范围内旗舰版主机列表
 */
class ModifyVulDefenceSettingRequest extends AbstractModel
{
    /**
     * @var integer 防御开关，0 关闭 1 开启
     */
    public $Enable;

    /**
     * @var integer 1 全部旗舰版主机，0 Quuids列表主机
     */
    public $Scope;

    /**
     * @var array 作用范围内旗舰版主机列表
     */
    public $Quuids;

    /**
     * @var array 排除作用范围内旗舰版主机列表
     */
    public $ExcludeInstanceIds;

    /**
     * @var integer 新增资产自动包含 0 不包含 1包含
     */
    public $AutoInclude;

    /**
     * @var array 作用范围内旗舰版主机列表
     */
    public $InstanceIds;

    /**
     * @param integer $Enable 防御开关，0 关闭 1 开启
     * @param integer $Scope 1 全部旗舰版主机，0 Quuids列表主机
     * @param array $Quuids 作用范围内旗舰版主机列表
     * @param array $ExcludeInstanceIds 排除作用范围内旗舰版主机列表
     * @param integer $AutoInclude 新增资产自动包含 0 不包含 1包含
     * @param array $InstanceIds 作用范围内旗舰版主机列表
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeInstanceIds",$param) and $param["ExcludeInstanceIds"] !== null) {
            $this->ExcludeInstanceIds = $param["ExcludeInstanceIds"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
