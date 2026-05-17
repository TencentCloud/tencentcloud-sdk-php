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
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getBucketName() 获取cos桶名
 * @method void setBucketName(string $BucketName) 设置cos桶名
 * @method string getBucketRegion() 获取cos region名
 * @method void setBucketRegion(string $BucketRegion) 设置cos region名
 * @method string getBucketRegionCode() 获取地域码值
 * @method void setBucketRegionCode(string $BucketRegionCode) 设置地域码值
 * @method string getBucketMarker() 获取cos桶备注
 * @method void setBucketMarker(string $BucketMarker) 设置cos桶备注
 * @method string getBucketOwnerUin() 获取cos桶主账号所属者
 * @method void setBucketOwnerUin(string $BucketOwnerUin) 设置cos桶主账号所属者
 * @method string getBucketOwnerNickName() 获取cos主账号所属者昵称
 * @method void setBucketOwnerNickName(string $BucketOwnerNickName) 设置cos主账号所属者昵称
 * @method string getBucketTagInfo() 获取cos桶标签详情
 * @method void setBucketTagInfo(string $BucketTagInfo) 设置cos桶标签详情
 * @method integer getBucketSecuritySuggestion() 获取安全建议
1 暂无异常
2 建议加固
3 立即处理
 * @method void setBucketSecuritySuggestion(integer $BucketSecuritySuggestion) 设置安全建议
1 暂无异常
2 建议加固
3 立即处理
 * @method array getBucketAlarmList() 获取告警列表
 * @method void setBucketAlarmList(array $BucketAlarmList) 设置告警列表
 * @method array getBucketRiskList() 获取风险列表
 * @method void setBucketRiskList(array $BucketRiskList) 设置风险列表
 * @method integer getBucketInvokeSourceIpCount() 获取调用源ip数
 * @method void setBucketInvokeSourceIpCount(integer $BucketInvokeSourceIpCount) 设置调用源ip数
 * @method CosBucketAccessWay getBucketAccessWay() 获取访问策略
 * @method void setBucketAccessWay(CosBucketAccessWay $BucketAccessWay) 设置访问策略
 * @method integer getCreateTime() 获取创建时间Unix时间单位毫秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间Unix时间单位毫秒
 * @method integer getLastAccessTime() 获取最后访问时间Unix时间单位毫秒
 * @method void setLastAccessTime(integer $LastAccessTime) 设置最后访问时间Unix时间单位毫秒
 * @method integer getBucketId() 获取存储桶id
 * @method void setBucketId(integer $BucketId) 设置存储桶id
 * @method integer getMonitorStatus() 获取0 关闭
1 开启
 * @method void setMonitorStatus(integer $MonitorStatus) 设置0 关闭
1 开启
 * @method CosAssetDataScanDetail getDataScanInfo() 获取数据识别扫描信息
 * @method void setDataScanInfo(CosAssetDataScanDetail $DataScanInfo) 设置数据识别扫描信息
 */
class CosAssetInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string cos桶名
     */
    public $BucketName;

    /**
     * @var string cos region名
     */
    public $BucketRegion;

    /**
     * @var string 地域码值
     */
    public $BucketRegionCode;

    /**
     * @var string cos桶备注
     */
    public $BucketMarker;

    /**
     * @var string cos桶主账号所属者
     */
    public $BucketOwnerUin;

    /**
     * @var string cos主账号所属者昵称
     */
    public $BucketOwnerNickName;

    /**
     * @var string cos桶标签详情
     */
    public $BucketTagInfo;

    /**
     * @var integer 安全建议
1 暂无异常
2 建议加固
3 立即处理
     */
    public $BucketSecuritySuggestion;

    /**
     * @var array 告警列表
     */
    public $BucketAlarmList;

    /**
     * @var array 风险列表
     */
    public $BucketRiskList;

    /**
     * @var integer 调用源ip数
     */
    public $BucketInvokeSourceIpCount;

    /**
     * @var CosBucketAccessWay 访问策略
     */
    public $BucketAccessWay;

    /**
     * @var integer 创建时间Unix时间单位毫秒
     */
    public $CreateTime;

    /**
     * @var integer 最后访问时间Unix时间单位毫秒
     */
    public $LastAccessTime;

    /**
     * @var integer 存储桶id
     */
    public $BucketId;

    /**
     * @var integer 0 关闭
1 开启
     */
    public $MonitorStatus;

    /**
     * @var CosAssetDataScanDetail 数据识别扫描信息
     */
    public $DataScanInfo;

    /**
     * @param integer $AppId appid
     * @param string $BucketName cos桶名
     * @param string $BucketRegion cos region名
     * @param string $BucketRegionCode 地域码值
     * @param string $BucketMarker cos桶备注
     * @param string $BucketOwnerUin cos桶主账号所属者
     * @param string $BucketOwnerNickName cos主账号所属者昵称
     * @param string $BucketTagInfo cos桶标签详情
     * @param integer $BucketSecuritySuggestion 安全建议
1 暂无异常
2 建议加固
3 立即处理
     * @param array $BucketAlarmList 告警列表
     * @param array $BucketRiskList 风险列表
     * @param integer $BucketInvokeSourceIpCount 调用源ip数
     * @param CosBucketAccessWay $BucketAccessWay 访问策略
     * @param integer $CreateTime 创建时间Unix时间单位毫秒
     * @param integer $LastAccessTime 最后访问时间Unix时间单位毫秒
     * @param integer $BucketId 存储桶id
     * @param integer $MonitorStatus 0 关闭
1 开启
     * @param CosAssetDataScanDetail $DataScanInfo 数据识别扫描信息
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
    }
}
