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
 * @method string getInsertTime() 获取xx
 * @method void setInsertTime(string $InsertTime) 设置xx
 * @method string getMonitorNote() 获取xx
 * @method void setMonitorNote(string $MonitorNote) 设置xx
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
     * @var string xx
     */
    public $InsertTime;

    /**
     * @var string xx
     */
    public $MonitorNote;

    /**
     * @param integer $WorkId 作品ID
     * @param string $WorkName 作品名称
     * @param string $WorkType 作品内容类型 01-视频 02-音频 03-文本 04-图片
     * @param integer $TortPlatNum 侵权平台数量
     * @param integer $TortURLNum 侵权链接数量
     * @param string $MonitorTime 监测时间
     * @param integer $MonitorStatus 0-待监测 1-监测中 2-不监测 3-暂停监测
     * @param string $WorkCategory 作品类型
     * @param string $InsertTime xx
     * @param string $MonitorNote xx
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
    }
}
