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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeClusterVersion请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getCynosVersion() 获取内核版本
 * @method void setCynosVersion(string $CynosVersion) 设置内核版本
 * @method string getUpgradeType() 获取升级时间类型，可选：upgradeImmediate,upgradeInMaintain
 * @method void setUpgradeType(string $UpgradeType) 设置升级时间类型，可选：upgradeImmediate,upgradeInMaintain
 */
class UpgradeClusterVersionRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 内核版本
     */
    public $CynosVersion;

    /**
     * @var string 升级时间类型，可选：upgradeImmediate,upgradeInMaintain
     */
    public $UpgradeType;

    /**
     * @param string $ClusterId 集群id
     * @param string $CynosVersion 内核版本
     * @param string $UpgradeType 升级时间类型，可选：upgradeImmediate,upgradeInMaintain
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }
    }
}
