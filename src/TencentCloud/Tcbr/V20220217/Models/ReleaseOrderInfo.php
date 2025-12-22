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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布单信息
 *
 * @method integer getId() 获取发布单Id
 * @method void setId(integer $Id) 设置发布单Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method VersionInfo getCurrentVersion() 获取当前版本
 * @method void setCurrentVersion(VersionInfo $CurrentVersion) 设置当前版本
 * @method VersionInfo getReleaseVersion() 获取发布版本
 * @method void setReleaseVersion(VersionInfo $ReleaseVersion) 设置发布版本
 * @method string getGrayStatus() 获取灰度状态
 * @method void setGrayStatus(string $GrayStatus) 设置灰度状态
 * @method string getReleaseStatus() 获取发布状态
 * @method void setReleaseStatus(string $ReleaseStatus) 设置发布状态
 * @method array getTrafficTypeValues() 获取流量值
 * @method void setTrafficTypeValues(array $TrafficTypeValues) 设置流量值
 * @method string getTrafficType() 获取流量类型
 * @method void setTrafficType(string $TrafficType) 设置流量类型
 * @method integer getFlowRatio() 获取百分比
 * @method void setFlowRatio(integer $FlowRatio) 设置百分比
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getIsReleasing() 获取是否发布中
 * @method void setIsReleasing(boolean $IsReleasing) 设置是否发布中
 */
class ReleaseOrderInfo extends AbstractModel
{
    /**
     * @var integer 发布单Id
     */
    public $Id;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var VersionInfo 当前版本
     */
    public $CurrentVersion;

    /**
     * @var VersionInfo 发布版本
     */
    public $ReleaseVersion;

    /**
     * @var string 灰度状态
     */
    public $GrayStatus;

    /**
     * @var string 发布状态
     */
    public $ReleaseStatus;

    /**
     * @var array 流量值
     */
    public $TrafficTypeValues;

    /**
     * @var string 流量类型
     */
    public $TrafficType;

    /**
     * @var integer 百分比
     */
    public $FlowRatio;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否发布中
     */
    public $IsReleasing;

    /**
     * @param integer $Id 发布单Id
     * @param string $ServerName 服务名
     * @param VersionInfo $CurrentVersion 当前版本
     * @param VersionInfo $ReleaseVersion 发布版本
     * @param string $GrayStatus 灰度状态
     * @param string $ReleaseStatus 发布状态
     * @param array $TrafficTypeValues 流量值
     * @param string $TrafficType 流量类型
     * @param integer $FlowRatio 百分比
     * @param string $CreateTime 创建时间
     * @param boolean $IsReleasing 是否发布中
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("CurrentVersion",$param) and $param["CurrentVersion"] !== null) {
            $this->CurrentVersion = new VersionInfo();
            $this->CurrentVersion->deserialize($param["CurrentVersion"]);
        }

        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            $this->ReleaseVersion = new VersionInfo();
            $this->ReleaseVersion->deserialize($param["ReleaseVersion"]);
        }

        if (array_key_exists("GrayStatus",$param) and $param["GrayStatus"] !== null) {
            $this->GrayStatus = $param["GrayStatus"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("TrafficTypeValues",$param) and $param["TrafficTypeValues"] !== null) {
            $this->TrafficTypeValues = [];
            foreach ($param["TrafficTypeValues"] as $key => $value){
                $obj = new ObjectKV();
                $obj->deserialize($value);
                array_push($this->TrafficTypeValues, $obj);
            }
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsReleasing",$param) and $param["IsReleasing"] !== null) {
            $this->IsReleasing = $param["IsReleasing"];
        }
    }
}
