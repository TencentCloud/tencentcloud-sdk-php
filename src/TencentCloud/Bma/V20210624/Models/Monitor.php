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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版权保护-监测结果
 *
 * @method integer getWorkId() 获取作品ID
 * @method void setWorkId(integer $WorkId) 设置作品ID
 * @method string getWorkName() 获取作品名称
 * @method void setWorkName(string $WorkName) 设置作品名称
 * @method string getWorkType() 获取作品内容类型 01-视频 02-音频 03-文本 04-图片
 * @method void setWorkType(string $WorkType) 设置作品内容类型 01-视频 02-音频 03-文本 04-图片
 * @method integer getTortPlatNum() 获取侵权平台数量
 * @method void setTortPlatNum(integer $TortPlatNum) 设置侵权平台数量
 * @method integer getTortURLNum() 获取侵权链接数量
 * @method void setTortURLNum(integer $TortURLNum) 设置侵权链接数量
 * @method string getMonitorTime() 获取监测时间
 * @method void setMonitorTime(string $MonitorTime) 设置监测时间
 * @method integer getMonitorStatus() 获取0-待监测 1-监测中 2-不监测 3-暂停监测
 * @method void setMonitorStatus(integer $MonitorStatus) 设置0-待监测 1-监测中 2-不监测 3-暂停监测
 * @method string getWorkCategory() 获取作品类型
 * @method void setWorkCategory(string $WorkCategory) 设置作品类型
 * @method string getInsertTime() 获取新增时间
 * @method void setInsertTime(string $InsertTime) 设置新增时间
 * @method string getMonitorNote() 获取监测状态说明
 * @method void setMonitorNote(string $MonitorNote) 设置监测状态说明
 * @method string getWorkCategoryAll() 获取作品类型全部展示
 * @method void setWorkCategoryAll(string $WorkCategoryAll) 设置作品类型全部展示
 * @method integer getEvidenceStatus() 获取存证状态
 * @method void setEvidenceStatus(integer $EvidenceStatus) 设置存证状态
 * @method string getEvidenceNote() 获取存证状态说明
 * @method void setEvidenceNote(string $EvidenceNote) 设置存证状态说明
 * @method integer getTortSiteNum() 获取侵权站点数量
 * @method void setTortSiteNum(integer $TortSiteNum) 设置侵权站点数量
 * @method string getMonitorEndTime() 获取监测截止时间
 * @method void setMonitorEndTime(string $MonitorEndTime) 设置监测截止时间
 * @method integer getAutoRenew() 获取是否自动续费
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费
 */
class Monitor extends AbstractModel
{
    /**
     * @var integer 作品ID
     */
    public $WorkId;

    /**
     * @var string 作品名称
     */
    public $WorkName;

    /**
     * @var string 作品内容类型 01-视频 02-音频 03-文本 04-图片
     */
    public $WorkType;

    /**
     * @var integer 侵权平台数量
     */
    public $TortPlatNum;

    /**
     * @var integer 侵权链接数量
     */
    public $TortURLNum;

    /**
     * @var string 监测时间
     */
    public $MonitorTime;

    /**
     * @var integer 0-待监测 1-监测中 2-不监测 3-暂停监测
     */
    public $MonitorStatus;

    /**
     * @var string 作品类型
     */
    public $WorkCategory;

    /**
     * @var string 新增时间
     */
    public $InsertTime;

    /**
     * @var string 监测状态说明
     */
    public $MonitorNote;

    /**
     * @var string 作品类型全部展示
     */
    public $WorkCategoryAll;

    /**
     * @var integer 存证状态
     */
    public $EvidenceStatus;

    /**
     * @var string 存证状态说明
     */
    public $EvidenceNote;

    /**
     * @var integer 侵权站点数量
     */
    public $TortSiteNum;

    /**
     * @var string 监测截止时间
     */
    public $MonitorEndTime;

    /**
     * @var integer 是否自动续费
     */
    public $AutoRenew;

    /**
     * @param integer $WorkId 作品ID
     * @param string $WorkName 作品名称
     * @param string $WorkType 作品内容类型 01-视频 02-音频 03-文本 04-图片
     * @param integer $TortPlatNum 侵权平台数量
     * @param integer $TortURLNum 侵权链接数量
     * @param string $MonitorTime 监测时间
     * @param integer $MonitorStatus 0-待监测 1-监测中 2-不监测 3-暂停监测
     * @param string $WorkCategory 作品类型
     * @param string $InsertTime 新增时间
     * @param string $MonitorNote 监测状态说明
     * @param string $WorkCategoryAll 作品类型全部展示
     * @param integer $EvidenceStatus 存证状态
     * @param string $EvidenceNote 存证状态说明
     * @param integer $TortSiteNum 侵权站点数量
     * @param string $MonitorEndTime 监测截止时间
     * @param integer $AutoRenew 是否自动续费
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
        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("WorkName",$param) and $param["WorkName"] !== null) {
            $this->WorkName = $param["WorkName"];
        }

        if (array_key_exists("WorkType",$param) and $param["WorkType"] !== null) {
            $this->WorkType = $param["WorkType"];
        }

        if (array_key_exists("TortPlatNum",$param) and $param["TortPlatNum"] !== null) {
            $this->TortPlatNum = $param["TortPlatNum"];
        }

        if (array_key_exists("TortURLNum",$param) and $param["TortURLNum"] !== null) {
            $this->TortURLNum = $param["TortURLNum"];
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = $param["MonitorTime"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("WorkCategory",$param) and $param["WorkCategory"] !== null) {
            $this->WorkCategory = $param["WorkCategory"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("MonitorNote",$param) and $param["MonitorNote"] !== null) {
            $this->MonitorNote = $param["MonitorNote"];
        }

        if (array_key_exists("WorkCategoryAll",$param) and $param["WorkCategoryAll"] !== null) {
            $this->WorkCategoryAll = $param["WorkCategoryAll"];
        }

        if (array_key_exists("EvidenceStatus",$param) and $param["EvidenceStatus"] !== null) {
            $this->EvidenceStatus = $param["EvidenceStatus"];
        }

        if (array_key_exists("EvidenceNote",$param) and $param["EvidenceNote"] !== null) {
            $this->EvidenceNote = $param["EvidenceNote"];
        }

        if (array_key_exists("TortSiteNum",$param) and $param["TortSiteNum"] !== null) {
            $this->TortSiteNum = $param["TortSiteNum"];
        }

        if (array_key_exists("MonitorEndTime",$param) and $param["MonitorEndTime"] !== null) {
            $this->MonitorEndTime = $param["MonitorEndTime"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
