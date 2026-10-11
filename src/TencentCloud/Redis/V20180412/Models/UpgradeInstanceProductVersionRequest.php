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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstanceProductVersion请求参数结构体
 *
 * @method string getTargetProductVersion() 获取<p>变更的目标产品类型。</p><p>枚举值：</p><ul><li>localv2： 通用 II 型</li></ul>
 * @method void setTargetProductVersion(string $TargetProductVersion) 设置<p>变更的目标产品类型。</p><p>枚举值：</p><ul><li>localv2： 通用 II 型</li></ul>
 * @method integer getSwitchOption() 获取<p>切换时间。</p><ul><li>1：维护时间窗切换。</li><li>2：立即切换。</li></ul>
 * @method void setSwitchOption(integer $SwitchOption) 设置<p>切换时间。</p><ul><li>1：维护时间窗切换。</li><li>2：立即切换。</li></ul>
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****，请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****，请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>在实例列表复制实例 ID。</p>
 */
class UpgradeInstanceProductVersionRequest extends AbstractModel
{
    /**
     * @var string <p>变更的目标产品类型。</p><p>枚举值：</p><ul><li>localv2： 通用 II 型</li></ul>
     */
    public $TargetProductVersion;

    /**
     * @var integer <p>切换时间。</p><ul><li>1：维护时间窗切换。</li><li>2：立即切换。</li></ul>
     */
    public $SwitchOption;

    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****，请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @param string $TargetProductVersion <p>变更的目标产品类型。</p><p>枚举值：</p><ul><li>localv2： 通用 II 型</li></ul>
     * @param integer $SwitchOption <p>切换时间。</p><ul><li>1：维护时间窗切换。</li><li>2：立即切换。</li></ul>
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****，请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>在实例列表复制实例 ID。</p>
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
        if (array_key_exists("TargetProductVersion",$param) and $param["TargetProductVersion"] !== null) {
            $this->TargetProductVersion = $param["TargetProductVersion"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
