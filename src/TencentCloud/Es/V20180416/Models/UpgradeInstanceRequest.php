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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getEsVersion() 获取目标ES版本
 * @method void setEsVersion(string $EsVersion) 设置目标ES版本
 * @method boolean getCheckOnly() 获取是否只做升级检查，默认值为false
 * @method void setCheckOnly(boolean $CheckOnly) 设置是否只做升级检查，默认值为false
 * @method string getLicenseType() 获取目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
 * @method void setLicenseType(string $LicenseType) 设置目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
 */

/**
 *UpgradeInstance请求参数结构体
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 目标ES版本
     */
    public $EsVersion;

    /**
     * @var boolean 是否只做升级检查，默认值为false
     */
    public $CheckOnly;

    /**
     * @var string 目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
     */
    public $LicenseType;
    /**
     * @param string $InstanceId 实例ID
     * @param string $EsVersion 目标ES版本
     * @param boolean $CheckOnly 是否只做升级检查，默认值为false
     * @param string $LicenseType 目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("CheckOnly",$param) and $param["CheckOnly"] !== null) {
            $this->CheckOnly = $param["CheckOnly"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
