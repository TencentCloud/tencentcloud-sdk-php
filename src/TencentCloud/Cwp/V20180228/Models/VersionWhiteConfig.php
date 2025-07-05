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
 * 授权版本白名单配置信息
 *
 * @method integer getDeadline() 获取到期天数
 * @method void setDeadline(integer $Deadline) 设置到期天数
 * @method integer getLicenseNum() 获取授权数量
 * @method void setLicenseNum(integer $LicenseNum) 设置授权数量
 * @method boolean getIsApplyFor() 获取是否可申请
 * @method void setIsApplyFor(boolean $IsApplyFor) 设置是否可申请
 * @method integer getSourceType() 获取类型
 * @method void setSourceType(integer $SourceType) 设置类型
 */
class VersionWhiteConfig extends AbstractModel
{
    /**
     * @var integer 到期天数
     */
    public $Deadline;

    /**
     * @var integer 授权数量
     */
    public $LicenseNum;

    /**
     * @var boolean 是否可申请
     */
    public $IsApplyFor;

    /**
     * @var integer 类型
     */
    public $SourceType;

    /**
     * @param integer $Deadline 到期天数
     * @param integer $LicenseNum 授权数量
     * @param boolean $IsApplyFor 是否可申请
     * @param integer $SourceType 类型
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
        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("IsApplyFor",$param) and $param["IsApplyFor"] !== null) {
            $this->IsApplyFor = $param["IsApplyFor"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
