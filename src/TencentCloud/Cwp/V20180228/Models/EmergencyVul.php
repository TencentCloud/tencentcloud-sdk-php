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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应急漏洞信息
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method integer getLevel() 获取漏洞级别
 * @method void setLevel(integer $Level) 设置漏洞级别
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getPublishDate() 获取发布日期
 * @method void setPublishDate(string $PublishDate) 设置发布日期
 * @method integer getCategory() 获取漏洞分类
 * @method void setCategory(integer $Category) 设置漏洞分类
 * @method integer getStatus() 获取漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
 * @method void setStatus(integer $Status) 设置漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
 * @method string getLastScanTime() 获取最后扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间
 * @method integer getProgress() 获取扫描进度
 * @method void setProgress(integer $Progress) 设置扫描进度
 */
class EmergencyVul extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var integer 漏洞级别
     */
    public $Level;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 发布日期
     */
    public $PublishDate;

    /**
     * @var integer 漏洞分类
     */
    public $Category;

    /**
     * @var integer 漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
     */
    public $Status;

    /**
     * @var string 最后扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 扫描进度
     */
    public $Progress;

    /**
     * @param integer $VulId 漏洞id
     * @param integer $Level 漏洞级别
     * @param string $VulName 漏洞名称
     * @param string $PublishDate 发布日期
     * @param integer $Category 漏洞分类
     * @param integer $Status 漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
     * @param string $LastScanTime 最后扫描时间
     * @param integer $Progress 扫描进度
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("PublishDate",$param) and $param["PublishDate"] !== null) {
            $this->PublishDate = $param["PublishDate"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
