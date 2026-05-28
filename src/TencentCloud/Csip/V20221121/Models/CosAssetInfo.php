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
 * Cos资产信息
 *
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getBucketName() 获取<p>cos桶名</p>
 * @method void setBucketName(string $BucketName) 设置<p>cos桶名</p>
 * @method string getBucketRegion() 获取<p>cos region名</p>
 * @method void setBucketRegion(string $BucketRegion) 设置<p>cos region名</p>
 * @method string getBucketRegionCode() 获取<p>地域码值</p>
 * @method void setBucketRegionCode(string $BucketRegionCode) 设置<p>地域码值</p>
 * @method string getBucketMarker() 获取<p>cos桶备注</p>
 * @method void setBucketMarker(string $BucketMarker) 设置<p>cos桶备注</p>
 * @method string getBucketOwnerUin() 获取<p>cos桶主账号所属者</p>
 * @method void setBucketOwnerUin(string $BucketOwnerUin) 设置<p>cos桶主账号所属者</p>
 * @method string getBucketOwnerNickName() 获取<p>cos主账号所属者昵称</p>
 * @method void setBucketOwnerNickName(string $BucketOwnerNickName) 设置<p>cos主账号所属者昵称</p>
 * @method string getBucketTagInfo() 获取<p>cos桶标签详情</p>
 * @method void setBucketTagInfo(string $BucketTagInfo) 设置<p>cos桶标签详情</p>
 * @method integer getBucketSecuritySuggestion() 获取<p>安全建议<br>1 暂无异常<br>2 建议加固<br>3 立即处理</p>
 * @method void setBucketSecuritySuggestion(integer $BucketSecuritySuggestion) 设置<p>安全建议<br>1 暂无异常<br>2 建议加固<br>3 立即处理</p>
 * @method array getBucketAlarmList() 获取<p>告警列表</p>
 * @method void setBucketAlarmList(array $BucketAlarmList) 设置<p>告警列表</p>
 * @method array getBucketRiskList() 获取<p>风险列表</p>
 * @method void setBucketRiskList(array $BucketRiskList) 设置<p>风险列表</p>
 * @method integer getBucketInvokeSourceIpCount() 获取<p>调用源ip数</p>
 * @method void setBucketInvokeSourceIpCount(integer $BucketInvokeSourceIpCount) 设置<p>调用源ip数</p>
 * @method CosBucketAccessWay getBucketAccessWay() 获取<p>访问策略</p>
 * @method void setBucketAccessWay(CosBucketAccessWay $BucketAccessWay) 设置<p>访问策略</p>
 * @method integer getCreateTime() 获取<p>创建时间Unix时间单位毫秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间Unix时间单位毫秒</p>
 * @method integer getLastAccessTime() 获取<p>最后访问时间Unix时间单位毫秒</p>
 * @method void setLastAccessTime(integer $LastAccessTime) 设置<p>最后访问时间Unix时间单位毫秒</p>
 * @method integer getBucketId() 获取<p>存储桶id</p>
 * @method void setBucketId(integer $BucketId) 设置<p>存储桶id</p>
 * @method integer getMonitorStatus() 获取<p>0 关闭<br>1 开启</p>
 * @method void setMonitorStatus(integer $MonitorStatus) 设置<p>0 关闭<br>1 开启</p>
 * @method CosAssetDataScanDetail getDataScanInfo() 获取<p>数据识别扫描信息</p>
 * @method void setDataScanInfo(CosAssetDataScanDetail $DataScanInfo) 设置<p>数据识别扫描信息</p>
 * @method string getBucketAzType() 获取<p>存储桶Az类型</p><p>枚举值：</p><ul><li>MAZ： 多az</li><li>SAZ： 单az</li></ul>
 * @method void setBucketAzType(string $BucketAzType) 设置<p>存储桶Az类型</p><p>枚举值：</p><ul><li>MAZ： 多az</li><li>SAZ： 单az</li></ul>
 * @method integer getBucketStorageSize() 获取<p>存储桶存储大小</p><p>默认值：0</p>
 * @method void setBucketStorageSize(integer $BucketStorageSize) 设置<p>存储桶存储大小</p><p>默认值：0</p>
 * @method integer getBucketObjectCount() 获取<p>存储桶对象个数</p><p>默认值：0</p>
 * @method void setBucketObjectCount(integer $BucketObjectCount) 设置<p>存储桶对象个数</p><p>默认值：0</p>
 * @method float getIdentifySampleRate() 获取<p>存储桶敏感识别采样率</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setIdentifySampleRate(float $IdentifySampleRate) 设置<p>存储桶敏感识别采样率</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class CosAssetInfo extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>cos桶名</p>
     */
    public $BucketName;

    /**
     * @var string <p>cos region名</p>
     */
    public $BucketRegion;

    /**
     * @var string <p>地域码值</p>
     */
    public $BucketRegionCode;

    /**
     * @var string <p>cos桶备注</p>
     */
    public $BucketMarker;

    /**
     * @var string <p>cos桶主账号所属者</p>
     */
    public $BucketOwnerUin;

    /**
     * @var string <p>cos主账号所属者昵称</p>
     */
    public $BucketOwnerNickName;

    /**
     * @var string <p>cos桶标签详情</p>
     */
    public $BucketTagInfo;

    /**
     * @var integer <p>安全建议<br>1 暂无异常<br>2 建议加固<br>3 立即处理</p>
     */
    public $BucketSecuritySuggestion;

    /**
     * @var array <p>告警列表</p>
     */
    public $BucketAlarmList;

    /**
     * @var array <p>风险列表</p>
     */
    public $BucketRiskList;

    /**
     * @var integer <p>调用源ip数</p>
     */
    public $BucketInvokeSourceIpCount;

    /**
     * @var CosBucketAccessWay <p>访问策略</p>
     */
    public $BucketAccessWay;

    /**
     * @var integer <p>创建时间Unix时间单位毫秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>最后访问时间Unix时间单位毫秒</p>
     */
    public $LastAccessTime;

    /**
     * @var integer <p>存储桶id</p>
     */
    public $BucketId;

    /**
     * @var integer <p>0 关闭<br>1 开启</p>
     */
    public $MonitorStatus;

    /**
     * @var CosAssetDataScanDetail <p>数据识别扫描信息</p>
     */
    public $DataScanInfo;

    /**
     * @var string <p>存储桶Az类型</p><p>枚举值：</p><ul><li>MAZ： 多az</li><li>SAZ： 单az</li></ul>
     */
    public $BucketAzType;

    /**
     * @var integer <p>存储桶存储大小</p><p>默认值：0</p>
     */
    public $BucketStorageSize;

    /**
     * @var integer <p>存储桶对象个数</p><p>默认值：0</p>
     */
    public $BucketObjectCount;

    /**
     * @var float <p>存储桶敏感识别采样率</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $IdentifySampleRate;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $BucketName <p>cos桶名</p>
     * @param string $BucketRegion <p>cos region名</p>
     * @param string $BucketRegionCode <p>地域码值</p>
     * @param string $BucketMarker <p>cos桶备注</p>
     * @param string $BucketOwnerUin <p>cos桶主账号所属者</p>
     * @param string $BucketOwnerNickName <p>cos主账号所属者昵称</p>
     * @param string $BucketTagInfo <p>cos桶标签详情</p>
     * @param integer $BucketSecuritySuggestion <p>安全建议<br>1 暂无异常<br>2 建议加固<br>3 立即处理</p>
     * @param array $BucketAlarmList <p>告警列表</p>
     * @param array $BucketRiskList <p>风险列表</p>
     * @param integer $BucketInvokeSourceIpCount <p>调用源ip数</p>
     * @param CosBucketAccessWay $BucketAccessWay <p>访问策略</p>
     * @param integer $CreateTime <p>创建时间Unix时间单位毫秒</p>
     * @param integer $LastAccessTime <p>最后访问时间Unix时间单位毫秒</p>
     * @param integer $BucketId <p>存储桶id</p>
     * @param integer $MonitorStatus <p>0 关闭<br>1 开启</p>
     * @param CosAssetDataScanDetail $DataScanInfo <p>数据识别扫描信息</p>
     * @param string $BucketAzType <p>存储桶Az类型</p><p>枚举值：</p><ul><li>MAZ： 多az</li><li>SAZ： 单az</li></ul>
     * @param integer $BucketStorageSize <p>存储桶存储大小</p><p>默认值：0</p>
     * @param integer $BucketObjectCount <p>存储桶对象个数</p><p>默认值：0</p>
     * @param float $IdentifySampleRate <p>存储桶敏感识别采样率</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("BucketMarker",$param) and $param["BucketMarker"] !== null) {
            $this->BucketMarker = $param["BucketMarker"];
        }

        if (array_key_exists("BucketOwnerUin",$param) and $param["BucketOwnerUin"] !== null) {
            $this->BucketOwnerUin = $param["BucketOwnerUin"];
        }

        if (array_key_exists("BucketOwnerNickName",$param) and $param["BucketOwnerNickName"] !== null) {
            $this->BucketOwnerNickName = $param["BucketOwnerNickName"];
        }

        if (array_key_exists("BucketTagInfo",$param) and $param["BucketTagInfo"] !== null) {
            $this->BucketTagInfo = $param["BucketTagInfo"];
        }

        if (array_key_exists("BucketSecuritySuggestion",$param) and $param["BucketSecuritySuggestion"] !== null) {
            $this->BucketSecuritySuggestion = $param["BucketSecuritySuggestion"];
        }

        if (array_key_exists("BucketAlarmList",$param) and $param["BucketAlarmList"] !== null) {
            $this->BucketAlarmList = [];
            foreach ($param["BucketAlarmList"] as $key => $value){
                $obj = new CosRiskAlarmInfo();
                $obj->deserialize($value);
                array_push($this->BucketAlarmList, $obj);
            }
        }

        if (array_key_exists("BucketRiskList",$param) and $param["BucketRiskList"] !== null) {
            $this->BucketRiskList = [];
            foreach ($param["BucketRiskList"] as $key => $value){
                $obj = new CosRiskAlarmInfo();
                $obj->deserialize($value);
                array_push($this->BucketRiskList, $obj);
            }
        }

        if (array_key_exists("BucketInvokeSourceIpCount",$param) and $param["BucketInvokeSourceIpCount"] !== null) {
            $this->BucketInvokeSourceIpCount = $param["BucketInvokeSourceIpCount"];
        }

        if (array_key_exists("BucketAccessWay",$param) and $param["BucketAccessWay"] !== null) {
            $this->BucketAccessWay = new CosBucketAccessWay();
            $this->BucketAccessWay->deserialize($param["BucketAccessWay"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("DataScanInfo",$param) and $param["DataScanInfo"] !== null) {
            $this->DataScanInfo = new CosAssetDataScanDetail();
            $this->DataScanInfo->deserialize($param["DataScanInfo"]);
        }

        if (array_key_exists("BucketAzType",$param) and $param["BucketAzType"] !== null) {
            $this->BucketAzType = $param["BucketAzType"];
        }

        if (array_key_exists("BucketStorageSize",$param) and $param["BucketStorageSize"] !== null) {
            $this->BucketStorageSize = $param["BucketStorageSize"];
        }

        if (array_key_exists("BucketObjectCount",$param) and $param["BucketObjectCount"] !== null) {
            $this->BucketObjectCount = $param["BucketObjectCount"];
        }

        if (array_key_exists("IdentifySampleRate",$param) and $param["IdentifySampleRate"] !== null) {
            $this->IdentifySampleRate = $param["IdentifySampleRate"];
        }
    }
}
