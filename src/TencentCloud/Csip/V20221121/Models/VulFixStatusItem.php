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
 * 漏洞/KB补丁维度修复状态
 *
 * @method integer getVulId() 获取漏洞ID（KB补丁修复任务时为空）
 * @method void setVulId(integer $VulId) 设置漏洞ID（KB补丁修复任务时为空）
 * @method integer getKBId() 获取KB补丁ID（漏洞修复任务时为空）
 * @method void setKBId(integer $KBId) 设置KB补丁ID（漏洞修复任务时为空）
 * @method string getVulName() 获取漏洞名称或KB补丁名称
 * @method void setVulName(string $VulName) 设置漏洞名称或KB补丁名称
 * @method integer getFixStatus() 获取该漏洞的修复状态
枚举值：
0：修复中
1：全部成功
2：部分失败
3：全部失败
 * @method void setFixStatus(integer $FixStatus) 设置该漏洞的修复状态
枚举值：
0：修复中
1：全部成功
2：部分失败
3：全部失败
 * @method integer getHostCount() 获取该漏洞/KB补丁关联的主机总数
 * @method void setHostCount(integer $HostCount) 设置该漏洞/KB补丁关联的主机总数
 * @method integer getSuccessHostCount() 获取该漏洞/KB补丁修复成功的主机数
 * @method void setSuccessHostCount(integer $SuccessHostCount) 设置该漏洞/KB补丁修复成功的主机数
 * @method integer getFailHostCount() 获取该漏洞/KB补丁修复失败的主机数
 * @method void setFailHostCount(integer $FailHostCount) 设置该漏洞/KB补丁修复失败的主机数
 */
class VulFixStatusItem extends AbstractModel
{
    /**
     * @var integer 漏洞ID（KB补丁修复任务时为空）
     */
    public $VulId;

    /**
     * @var integer KB补丁ID（漏洞修复任务时为空）
     */
    public $KBId;

    /**
     * @var string 漏洞名称或KB补丁名称
     */
    public $VulName;

    /**
     * @var integer 该漏洞的修复状态
枚举值：
0：修复中
1：全部成功
2：部分失败
3：全部失败
     */
    public $FixStatus;

    /**
     * @var integer 该漏洞/KB补丁关联的主机总数
     */
    public $HostCount;

    /**
     * @var integer 该漏洞/KB补丁修复成功的主机数
     */
    public $SuccessHostCount;

    /**
     * @var integer 该漏洞/KB补丁修复失败的主机数
     */
    public $FailHostCount;

    /**
     * @param integer $VulId 漏洞ID（KB补丁修复任务时为空）
     * @param integer $KBId KB补丁ID（漏洞修复任务时为空）
     * @param string $VulName 漏洞名称或KB补丁名称
     * @param integer $FixStatus 该漏洞的修复状态
枚举值：
0：修复中
1：全部成功
2：部分失败
3：全部失败
     * @param integer $HostCount 该漏洞/KB补丁关联的主机总数
     * @param integer $SuccessHostCount 该漏洞/KB补丁修复成功的主机数
     * @param integer $FailHostCount 该漏洞/KB补丁修复失败的主机数
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("SuccessHostCount",$param) and $param["SuccessHostCount"] !== null) {
            $this->SuccessHostCount = $param["SuccessHostCount"];
        }

        if (array_key_exists("FailHostCount",$param) and $param["FailHostCount"] !== null) {
            $this->FailHostCount = $param["FailHostCount"];
        }
    }
}
