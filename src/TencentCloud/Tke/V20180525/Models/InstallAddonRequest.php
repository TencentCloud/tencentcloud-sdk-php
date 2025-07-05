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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstallAddon请求参数结构体
 *
 * @method string getClusterId() 获取集群ID（仅支持标准tke集群）
 * @method void setClusterId(string $ClusterId) 设置集群ID（仅支持标准tke集群）
 * @method string getAddonName() 获取addon名称
 * @method void setAddonName(string $AddonName) 设置addon名称
 * @method string getAddonVersion() 获取addon版本（不传默认安装最新版本）
 * @method void setAddonVersion(string $AddonVersion) 设置addon版本（不传默认安装最新版本）
 * @method string getRawValues() 获取addon的参数，是一个json格式的base64转码后的字符串（addon参数由DescribeAddonValues获取）
 * @method void setRawValues(string $RawValues) 设置addon的参数，是一个json格式的base64转码后的字符串（addon参数由DescribeAddonValues获取）
 * @method boolean getDryRun() 获取是否仅做安装检查，设置为true时仅做检查，不会安装组件
 * @method void setDryRun(boolean $DryRun) 设置是否仅做安装检查，设置为true时仅做检查，不会安装组件
 */
class InstallAddonRequest extends AbstractModel
{
    /**
     * @var string 集群ID（仅支持标准tke集群）
     */
    public $ClusterId;

    /**
     * @var string addon名称
     */
    public $AddonName;

    /**
     * @var string addon版本（不传默认安装最新版本）
     */
    public $AddonVersion;

    /**
     * @var string addon的参数，是一个json格式的base64转码后的字符串（addon参数由DescribeAddonValues获取）
     */
    public $RawValues;

    /**
     * @var boolean 是否仅做安装检查，设置为true时仅做检查，不会安装组件
     */
    public $DryRun;

    /**
     * @param string $ClusterId 集群ID（仅支持标准tke集群）
     * @param string $AddonName addon名称
     * @param string $AddonVersion addon版本（不传默认安装最新版本）
     * @param string $RawValues addon的参数，是一个json格式的base64转码后的字符串（addon参数由DescribeAddonValues获取）
     * @param boolean $DryRun 是否仅做安装检查，设置为true时仅做检查，不会安装组件
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

        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonVersion",$param) and $param["AddonVersion"] !== null) {
            $this->AddonVersion = $param["AddonVersion"];
        }

        if (array_key_exists("RawValues",$param) and $param["RawValues"] !== null) {
            $this->RawValues = $param["RawValues"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
