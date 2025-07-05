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
 * ModifyJavaMemShellPluginSwitch请求参数结构体
 *
 * @method array getQuuids() 获取主机quuid数组
 * @method void setQuuids(array $Quuids) 设置主机quuid数组
 * @method integer getJavaShellStatus() 获取插件目标状态：0: 关闭 1: 开启
 * @method void setJavaShellStatus(integer $JavaShellStatus) 设置插件目标状态：0: 关闭 1: 开启
 */
class ModifyJavaMemShellPluginSwitchRequest extends AbstractModel
{
    /**
     * @var array 主机quuid数组
     */
    public $Quuids;

    /**
     * @var integer 插件目标状态：0: 关闭 1: 开启
     */
    public $JavaShellStatus;

    /**
     * @param array $Quuids 主机quuid数组
     * @param integer $JavaShellStatus 插件目标状态：0: 关闭 1: 开启
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
        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("JavaShellStatus",$param) and $param["JavaShellStatus"] !== null) {
            $this->JavaShellStatus = $param["JavaShellStatus"];
        }
    }
}
