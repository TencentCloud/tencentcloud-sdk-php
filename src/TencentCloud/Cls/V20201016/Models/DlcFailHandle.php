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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dlc投递失败处理信息
 *
 * @method boolean getStoreToDlc() 获取<p>是否存储到DLC</p><p>默认值：false</p><p>用于控制是否开启投递失败的日志存储至DLC表</p>
 * @method void setStoreToDlc(boolean $StoreToDlc) 设置<p>是否存储到DLC</p><p>默认值：false</p><p>用于控制是否开启投递失败的日志存储至DLC表</p>
 * @method DlcFailTableInfo getDlcFailTableInfo() 获取<p>DLC表信息</p>
 * @method void setDlcFailTableInfo(DlcFailTableInfo $DlcFailTableInfo) 设置<p>DLC表信息</p>
 */
class DlcFailHandle extends AbstractModel
{
    /**
     * @var boolean <p>是否存储到DLC</p><p>默认值：false</p><p>用于控制是否开启投递失败的日志存储至DLC表</p>
     */
    public $StoreToDlc;

    /**
     * @var DlcFailTableInfo <p>DLC表信息</p>
     */
    public $DlcFailTableInfo;

    /**
     * @param boolean $StoreToDlc <p>是否存储到DLC</p><p>默认值：false</p><p>用于控制是否开启投递失败的日志存储至DLC表</p>
     * @param DlcFailTableInfo $DlcFailTableInfo <p>DLC表信息</p>
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
        if (array_key_exists("StoreToDlc",$param) and $param["StoreToDlc"] !== null) {
            $this->StoreToDlc = $param["StoreToDlc"];
        }

        if (array_key_exists("DlcFailTableInfo",$param) and $param["DlcFailTableInfo"] !== null) {
            $this->DlcFailTableInfo = new DlcFailTableInfo();
            $this->DlcFailTableInfo->deserialize($param["DlcFailTableInfo"]);
        }
    }
}
