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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebPageProtectSwitch请求参数结构体
 *
 * @method integer getSwitchType() 获取开关类型 1 防护开关  2 自动恢复开关 3 移除防护目录
 * @method void setSwitchType(integer $SwitchType) 设置开关类型 1 防护开关  2 自动恢复开关 3 移除防护目录
 * @method array getIds() 获取需要操作开关的网站 最大100条
 * @method void setIds(array $Ids) 设置需要操作开关的网站 最大100条
 * @method integer getStatus() 获取1 开启 0 关闭 SwitchType 为 1 | 2 必填;
 * @method void setStatus(integer $Status) 设置1 开启 0 关闭 SwitchType 为 1 | 2 必填;
 */
class ModifyWebPageProtectSwitchRequest extends AbstractModel
{
    /**
     * @var integer 开关类型 1 防护开关  2 自动恢复开关 3 移除防护目录
     */
    public $SwitchType;

    /**
     * @var array 需要操作开关的网站 最大100条
     */
    public $Ids;

    /**
     * @var integer 1 开启 0 关闭 SwitchType 为 1 | 2 必填;
     */
    public $Status;

    /**
     * @param integer $SwitchType 开关类型 1 防护开关  2 自动恢复开关 3 移除防护目录
     * @param array $Ids 需要操作开关的网站 最大100条
     * @param integer $Status 1 开启 0 关闭 SwitchType 为 1 | 2 必填;
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
        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
