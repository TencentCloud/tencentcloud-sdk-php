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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillScanResult请求参数结构体
 *
 * @method string getContentHash() 获取ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
 * @method void setContentHash(string $ContentHash) 设置ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
 * @method integer getEngineVersion() 获取指定引擎版本号
取值参考：由 CreateSkillScan 接口返回
 * @method void setEngineVersion(integer $EngineVersion) 设置指定引擎版本号
取值参考：由 CreateSkillScan 接口返回
 * @method integer getReportURLExpireHours() 获取报告签名地址有效期
单位：小时
默认值：8760（1年）
补充说明：对返回的 ReportURL 生效
 * @method void setReportURLExpireHours(integer $ReportURLExpireHours) 设置报告签名地址有效期
单位：小时
默认值：8760（1年）
补充说明：对返回的 ReportURL 生效
 */
class DescribeSkillScanResultRequest extends AbstractModel
{
    /**
     * @var string ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
     */
    public $ContentHash;

    /**
     * @var integer 指定引擎版本号
取值参考：由 CreateSkillScan 接口返回
     */
    public $EngineVersion;

    /**
     * @var integer 报告签名地址有效期
单位：小时
默认值：8760（1年）
补充说明：对返回的 ReportURL 生效
     */
    public $ReportURLExpireHours;

    /**
     * @param string $ContentHash ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
     * @param integer $EngineVersion 指定引擎版本号
取值参考：由 CreateSkillScan 接口返回
     * @param integer $ReportURLExpireHours 报告签名地址有效期
单位：小时
默认值：8760（1年）
补充说明：对返回的 ReportURL 生效
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
        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ReportURLExpireHours",$param) and $param["ReportURLExpireHours"] !== null) {
            $this->ReportURLExpireHours = $param["ReportURLExpireHours"];
        }
    }
}
