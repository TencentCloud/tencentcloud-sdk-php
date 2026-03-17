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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用详细信息
 *
 * @method string getServiceID() 获取<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceID(string $ServiceID) 设置<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceKey() 获取<p>业务系统ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置<p>业务系统ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppID() 获取<p>用户appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置<p>用户appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUIN() 获取<p>主账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUIN(string $CreateUIN) 设置<p>主账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>应用名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>应用名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceDescription() 获取<p>应用描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDescription(string $ServiceDescription) 设置<p>应用描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取<p>业务系统名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>业务系统名称</p>
 * @method boolean getEnableThresholdConfig() 获取<p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) 设置<p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrRateThreshold() 获取<p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p><p>单位：%</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置<p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p><p>单位：%</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResponseDurationWarningThreshold() 获取<p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p><p>单位：ms</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置<p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p><p>单位：ms</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceDetail extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceID;

    /**
     * @var string <p>业务系统ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @var integer <p>用户appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string <p>主账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUIN;

    /**
     * @var string <p>应用名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string <p>应用描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDescription;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>业务系统名称</p>
     */
    public $InstanceName;

    /**
     * @var boolean <p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableThresholdConfig;

    /**
     * @var integer <p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p><p>单位：%</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p><p>单位：ms</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @param string $ServiceID <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceKey <p>业务系统ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppID <p>用户appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUIN <p>主账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>应用名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceDescription <p>应用描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName <p>业务系统名称</p>
     * @param boolean $EnableThresholdConfig <p>阈值配置开关。true 表示使用应用级阈值；false 表示使用业务系统级阈值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrRateThreshold <p>错误率阈值（%），用于判断应用健康状态为&quot;红色&quot;</p><p>单位：%</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResponseDurationWarningThreshold <p>响应时间预警阈值（ms），用于判断应用健康状态为&quot;黄色&quot;</p><p>单位：ms</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CreateUIN",$param) and $param["CreateUIN"] !== null) {
            $this->CreateUIN = $param["CreateUIN"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("EnableThresholdConfig",$param) and $param["EnableThresholdConfig"] !== null) {
            $this->EnableThresholdConfig = $param["EnableThresholdConfig"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }
    }
}
