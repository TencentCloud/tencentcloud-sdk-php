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
 * KB补丁修复汇总信息
 *
 * @method integer getKBId() 获取KB补丁ID
 * @method void setKBId(integer $KBId) 设置KB补丁ID
 * @method string getKBName() 获取KB补丁名称
 * @method void setKBName(string $KBName) 设置KB补丁名称
 * @method string getKBNo() 获取KB编号（如 KB5001234）
 * @method void setKBNo(string $KBNo) 设置KB编号（如 KB5001234）
 * @method integer getRelatedVulCount() 获取关联漏洞数
 * @method void setRelatedVulCount(integer $RelatedVulCount) 设置关联漏洞数
 * @method integer getAffectedCount() 获取受影响主机数
 * @method void setAffectedCount(integer $AffectedCount) 设置受影响主机数
 * @method boolean getNeedReboot() 获取修复后是否需要重启系统
 * @method void setNeedReboot(boolean $NeedReboot) 设置修复后是否需要重启系统
 * @method string getKBPreCondition() 获取前置依赖补丁（逗号分隔的KB编号列表）
 * @method void setKBPreCondition(string $KBPreCondition) 设置前置依赖补丁（逗号分隔的KB编号列表）
 */
class KBFixSummaryItem extends AbstractModel
{
    /**
     * @var integer KB补丁ID
     */
    public $KBId;

    /**
     * @var string KB补丁名称
     */
    public $KBName;

    /**
     * @var string KB编号（如 KB5001234）
     */
    public $KBNo;

    /**
     * @var integer 关联漏洞数
     */
    public $RelatedVulCount;

    /**
     * @var integer 受影响主机数
     */
    public $AffectedCount;

    /**
     * @var boolean 修复后是否需要重启系统
     */
    public $NeedReboot;

    /**
     * @var string 前置依赖补丁（逗号分隔的KB编号列表）
     */
    public $KBPreCondition;

    /**
     * @param integer $KBId KB补丁ID
     * @param string $KBName KB补丁名称
     * @param string $KBNo KB编号（如 KB5001234）
     * @param integer $RelatedVulCount 关联漏洞数
     * @param integer $AffectedCount 受影响主机数
     * @param boolean $NeedReboot 修复后是否需要重启系统
     * @param string $KBPreCondition 前置依赖补丁（逗号分隔的KB编号列表）
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
        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("KBName",$param) and $param["KBName"] !== null) {
            $this->KBName = $param["KBName"];
        }

        if (array_key_exists("KBNo",$param) and $param["KBNo"] !== null) {
            $this->KBNo = $param["KBNo"];
        }

        if (array_key_exists("RelatedVulCount",$param) and $param["RelatedVulCount"] !== null) {
            $this->RelatedVulCount = $param["RelatedVulCount"];
        }

        if (array_key_exists("AffectedCount",$param) and $param["AffectedCount"] !== null) {
            $this->AffectedCount = $param["AffectedCount"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("KBPreCondition",$param) and $param["KBPreCondition"] !== null) {
            $this->KBPreCondition = $param["KBPreCondition"];
        }
    }
}
