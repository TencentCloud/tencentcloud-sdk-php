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
 * 单个计费项的授权状态汇总
 *
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method string getLicenseType() 获取<p>授权类型（ENTERPRISE_HP=旗舰版/ADVANCED_HP=专业版/RASP）</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>授权类型（ENTERPRISE_HP=旗舰版/ADVANCED_HP=专业版/RASP）</p>
 * @method string getName() 获取<p>授权名称（旗舰版/专业版/RASP）</p>
 * @method void setName(string $Name) 设置<p>授权名称（旗舰版/专业版/RASP）</p>
 * @method integer getCategory() 获取<p>授权类别 0-主机授权 1-RASP授权</p>
 * @method void setCategory(integer $Category) 设置<p>授权类别 0-主机授权 1-RASP授权</p>
 * @method integer getTotalNum() 获取<p>总数</p>
 * @method void setTotalNum(integer $TotalNum) 设置<p>总数</p>
 * @method integer getUsedNum() 获取<p>已用</p>
 * @method void setUsedNum(integer $UsedNum) 设置<p>已用</p>
 * @method integer getRemainNum() 获取<p>剩余</p>
 * @method void setRemainNum(integer $RemainNum) 设置<p>剩余</p>
 * @method string getBeginTime() 获取<p>最早开始时间（格式：2006-01-02 15:04:05）</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>最早开始时间（格式：2006-01-02 15:04:05）</p>
 * @method string getEndTime() 获取<p>最晚到期时间（格式：2006-01-02 15:04:05）</p>
 * @method void setEndTime(string $EndTime) 设置<p>最晚到期时间（格式：2006-01-02 15:04:05）</p>
 */
class LicenseStatusItem extends AbstractModel
{
    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>授权类型（ENTERPRISE_HP=旗舰版/ADVANCED_HP=专业版/RASP）</p>
     */
    public $LicenseType;

    /**
     * @var string <p>授权名称（旗舰版/专业版/RASP）</p>
     */
    public $Name;

    /**
     * @var integer <p>授权类别 0-主机授权 1-RASP授权</p>
     */
    public $Category;

    /**
     * @var integer <p>总数</p>
     */
    public $TotalNum;

    /**
     * @var integer <p>已用</p>
     */
    public $UsedNum;

    /**
     * @var integer <p>剩余</p>
     */
    public $RemainNum;

    /**
     * @var string <p>最早开始时间（格式：2006-01-02 15:04:05）</p>
     */
    public $BeginTime;

    /**
     * @var string <p>最晚到期时间（格式：2006-01-02 15:04:05）</p>
     */
    public $EndTime;

    /**
     * @param string $ResourceId <p>资源ID</p>
     * @param string $LicenseType <p>授权类型（ENTERPRISE_HP=旗舰版/ADVANCED_HP=专业版/RASP）</p>
     * @param string $Name <p>授权名称（旗舰版/专业版/RASP）</p>
     * @param integer $Category <p>授权类别 0-主机授权 1-RASP授权</p>
     * @param integer $TotalNum <p>总数</p>
     * @param integer $UsedNum <p>已用</p>
     * @param integer $RemainNum <p>剩余</p>
     * @param string $BeginTime <p>最早开始时间（格式：2006-01-02 15:04:05）</p>
     * @param string $EndTime <p>最晚到期时间（格式：2006-01-02 15:04:05）</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("RemainNum",$param) and $param["RemainNum"] !== null) {
            $this->RemainNum = $param["RemainNum"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
