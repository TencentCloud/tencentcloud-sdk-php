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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新云存套餐相关参数
 *
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method string getMediaType() 获取<p>媒体类型</p><p>枚举值：</p><ul><li>image： 图片套餐</li><li>video： 视频套餐</li></ul>
 * @method void setMediaType(string $MediaType) 设置<p>媒体类型</p><p>枚举值：</p><ul><li>image： 图片套餐</li><li>video： 视频套餐</li></ul>
 * @method integer getRetentionDays() 获取<p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
 * @method void setRetentionDays(integer $RetentionDays) 设置<p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
 * @method string getRecordingMode() 获取<p>录制模式</p><p>枚举值：</p><ul><li>low_power：  2小时/日</li><li>event：  8小时/日</li><li>full_time：  24小时/日</li></ul>
 * @method void setRecordingMode(string $RecordingMode) 设置<p>录制模式</p><p>枚举值：</p><ul><li>low_power：  2小时/日</li><li>event：  8小时/日</li><li>full_time：  24小时/日</li></ul>
 * @method string getBitrate() 获取<p>码率</p><p>枚举值：</p><ul><li>0.5m： 0.5Mbps</li><li>1m： 1Mbps</li><li>1.5m： 1.5Mbps</li><li>2m： 2Mbps</li></ul>
 * @method void setBitrate(string $Bitrate) 设置<p>码率</p><p>枚举值：</p><ul><li>0.5m： 0.5Mbps</li><li>1m： 1Mbps</li><li>1.5m： 1.5Mbps</li><li>2m： 2Mbps</li></ul>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间</p>
 * @method string getStatus() 获取<p>套餐状态</p><p>枚举值：</p><ul><li>active： 生效中</li><li>queued： 排队中</li></ul>
 * @method void setStatus(string $Status) 设置<p>套餐状态</p><p>枚举值：</p><ul><li>active： 生效中</li><li>queued： 排队中</li></ul>
 * @method integer getReportEnabled() 获取<p>启停状态</p><p>枚举值：</p><ul><li>0： 停用</li><li>1： 启用</li></ul>
 * @method void setReportEnabled(integer $ReportEnabled) 设置<p>启停状态</p><p>枚举值：</p><ul><li>0： 停用</li><li>1： 启用</li></ul>
 * @method string getOrderId() 获取<p>订单id</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单id</p>
 * @method string getBigDealId() 获取<p>大订单号</p>
 * @method void setBigDealId(string $BigDealId) 设置<p>大订单号</p>
 * @method string getValidityPeriod() 获取<p>卡有效期类型</p><p>枚举值：</p><ul><li>monthly_card： 月卡</li><li>annual_card： 年卡</li></ul>
 * @method void setValidityPeriod(string $ValidityPeriod) 设置<p>卡有效期类型</p><p>枚举值：</p><ul><li>monthly_card： 月卡</li><li>annual_card： 年卡</li></ul>
 * @method string getImageCapacity() 获取<p>图片档位</p><p>枚举值：</p><ul><li>300： 300张/日</li><li>1000： 1000张/日</li></ul>
 * @method void setImageCapacity(string $ImageCapacity) 设置<p>图片档位</p><p>枚举值：</p><ul><li>300： 300张/日</li><li>1000： 1000张/日</li></ul>
 */
class NewCloudStoragePackage extends AbstractModel
{
    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>媒体类型</p><p>枚举值：</p><ul><li>image： 图片套餐</li><li>video： 视频套餐</li></ul>
     */
    public $MediaType;

    /**
     * @var integer <p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
     */
    public $RetentionDays;

    /**
     * @var string <p>录制模式</p><p>枚举值：</p><ul><li>low_power：  2小时/日</li><li>event：  8小时/日</li><li>full_time：  24小时/日</li></ul>
     */
    public $RecordingMode;

    /**
     * @var string <p>码率</p><p>枚举值：</p><ul><li>0.5m： 0.5Mbps</li><li>1m： 1Mbps</li><li>1.5m： 1.5Mbps</li><li>2m： 2Mbps</li></ul>
     */
    public $Bitrate;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>套餐状态</p><p>枚举值：</p><ul><li>active： 生效中</li><li>queued： 排队中</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>启停状态</p><p>枚举值：</p><ul><li>0： 停用</li><li>1： 启用</li></ul>
     */
    public $ReportEnabled;

    /**
     * @var string <p>订单id</p>
     */
    public $OrderId;

    /**
     * @var string <p>大订单号</p>
     */
    public $BigDealId;

    /**
     * @var string <p>卡有效期类型</p><p>枚举值：</p><ul><li>monthly_card： 月卡</li><li>annual_card： 年卡</li></ul>
     */
    public $ValidityPeriod;

    /**
     * @var string <p>图片档位</p><p>枚举值：</p><ul><li>300： 300张/日</li><li>1000： 1000张/日</li></ul>
     */
    public $ImageCapacity;

    /**
     * @param string $ResourceId <p>资源id</p>
     * @param string $MediaType <p>媒体类型</p><p>枚举值：</p><ul><li>image： 图片套餐</li><li>video： 视频套餐</li></ul>
     * @param integer $RetentionDays <p>存储天数</p><p>枚举值：</p><ul><li>3： 存储3天</li><li>7： 存储7天</li><li>15： 存储15天</li><li>30： 存储30天</li></ul>
     * @param string $RecordingMode <p>录制模式</p><p>枚举值：</p><ul><li>low_power：  2小时/日</li><li>event：  8小时/日</li><li>full_time：  24小时/日</li></ul>
     * @param string $Bitrate <p>码率</p><p>枚举值：</p><ul><li>0.5m： 0.5Mbps</li><li>1m： 1Mbps</li><li>1.5m： 1.5Mbps</li><li>2m： 2Mbps</li></ul>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $ExpireTime <p>过期时间</p>
     * @param string $Status <p>套餐状态</p><p>枚举值：</p><ul><li>active： 生效中</li><li>queued： 排队中</li></ul>
     * @param integer $ReportEnabled <p>启停状态</p><p>枚举值：</p><ul><li>0： 停用</li><li>1： 启用</li></ul>
     * @param string $OrderId <p>订单id</p>
     * @param string $BigDealId <p>大订单号</p>
     * @param string $ValidityPeriod <p>卡有效期类型</p><p>枚举值：</p><ul><li>monthly_card： 月卡</li><li>annual_card： 年卡</li></ul>
     * @param string $ImageCapacity <p>图片档位</p><p>枚举值：</p><ul><li>300： 300张/日</li><li>1000： 1000张/日</li></ul>
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

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("RecordingMode",$param) and $param["RecordingMode"] !== null) {
            $this->RecordingMode = $param["RecordingMode"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReportEnabled",$param) and $param["ReportEnabled"] !== null) {
            $this->ReportEnabled = $param["ReportEnabled"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("ImageCapacity",$param) and $param["ImageCapacity"] !== null) {
            $this->ImageCapacity = $param["ImageCapacity"];
        }
    }
}
