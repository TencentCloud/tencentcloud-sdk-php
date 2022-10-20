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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVulDefenceSetting请求参数结构体
 *
 * @method integer getIsEnabled() 获取是否开启:0: 关闭 1:开启
 * @method void setIsEnabled(integer $IsEnabled) 设置是否开启:0: 关闭 1:开启
 * @method integer getScope() 获取漏洞防御主机范围:0：自选 1: 全部主机。IsEnabled为1时必填
 * @method void setScope(integer $Scope) 设置漏洞防御主机范围:0：自选 1: 全部主机。IsEnabled为1时必填
 * @method array getHostIDs() 获取自选漏洞防御主机,Scope为0时必填
 * @method void setHostIDs(array $HostIDs) 设置自选漏洞防御主机,Scope为0时必填
 */
class ModifyVulDefenceSettingRequest extends AbstractModel
{
    /**
     * @var integer 是否开启:0: 关闭 1:开启
     */
    public $IsEnabled;

    /**
     * @var integer 漏洞防御主机范围:0：自选 1: 全部主机。IsEnabled为1时必填
     */
    public $Scope;

    /**
     * @var array 自选漏洞防御主机,Scope为0时必填
     */
    public $HostIDs;

    /**
     * @param integer $IsEnabled 是否开启:0: 关闭 1:开启
     * @param integer $Scope 漏洞防御主机范围:0：自选 1: 全部主机。IsEnabled为1时必填
     * @param array $HostIDs 自选漏洞防御主机,Scope为0时必填
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("HostIDs",$param) and $param["HostIDs"] !== null) {
            $this->HostIDs = $param["HostIDs"];
        }
    }
}
