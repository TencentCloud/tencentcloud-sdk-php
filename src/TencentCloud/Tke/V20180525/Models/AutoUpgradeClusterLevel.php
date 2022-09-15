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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动变配集群等级
 *
 * @method boolean getIsAutoUpgrade() 获取是否开启自动变配集群等级
 * @method void setIsAutoUpgrade(boolean $IsAutoUpgrade) 设置是否开启自动变配集群等级
 */
class AutoUpgradeClusterLevel extends AbstractModel
{
    /**
     * @var boolean 是否开启自动变配集群等级
     */
    public $IsAutoUpgrade;

    /**
     * @param boolean $IsAutoUpgrade 是否开启自动变配集群等级
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
        if (array_key_exists("IsAutoUpgrade",$param) and $param["IsAutoUpgrade"] !== null) {
            $this->IsAutoUpgrade = $param["IsAutoUpgrade"];
        }
    }
}
