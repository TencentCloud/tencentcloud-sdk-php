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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不同维度的测速数据。
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method array getOriginSpeedTestingInfo() 获取源站拨测信息。
 * @method void setOriginSpeedTestingInfo(array $OriginSpeedTestingInfo) 设置源站拨测信息。
 * @method array getProxySpeedTestingInfo() 获取EO 拨测信息。
 * @method void setProxySpeedTestingInfo(array $ProxySpeedTestingInfo) 设置EO 拨测信息。
 * @method SpeedTestingStatus getSpeedTestingStatus() 获取站点状态。
 * @method void setSpeedTestingStatus(SpeedTestingStatus $SpeedTestingStatus) 设置站点状态。
 * @method array getOptimizeAction() 获取优化建议。
 * @method void setOptimizeAction(array $OptimizeAction) 设置优化建议。
 * @method integer getProxyLoadTime() 获取EO 整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyLoadTime(integer $ProxyLoadTime) 设置EO 整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOriginLoadTime() 获取源站整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginLoadTime(integer $OriginLoadTime) 设置源站整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpeedTestingMetricData extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var array 源站拨测信息。
     */
    public $OriginSpeedTestingInfo;

    /**
     * @var array EO 拨测信息。
     */
    public $ProxySpeedTestingInfo;

    /**
     * @var SpeedTestingStatus 站点状态。
     */
    public $SpeedTestingStatus;

    /**
     * @var array 优化建议。
     */
    public $OptimizeAction;

    /**
     * @var integer EO 整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyLoadTime;

    /**
     * @var integer 源站整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginLoadTime;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $ZoneName 站点名称。
     * @param array $OriginSpeedTestingInfo 源站拨测信息。
     * @param array $ProxySpeedTestingInfo EO 拨测信息。
     * @param SpeedTestingStatus $SpeedTestingStatus 站点状态。
     * @param array $OptimizeAction 优化建议。
     * @param integer $ProxyLoadTime EO 整体性能，单位ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OriginLoadTime 源站整体性能，单位ms。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("OriginSpeedTestingInfo",$param) and $param["OriginSpeedTestingInfo"] !== null) {
            $this->OriginSpeedTestingInfo = [];
            foreach ($param["OriginSpeedTestingInfo"] as $key => $value){
                $obj = new SpeedTestingInfo();
                $obj->deserialize($value);
                array_push($this->OriginSpeedTestingInfo, $obj);
            }
        }

        if (array_key_exists("ProxySpeedTestingInfo",$param) and $param["ProxySpeedTestingInfo"] !== null) {
            $this->ProxySpeedTestingInfo = [];
            foreach ($param["ProxySpeedTestingInfo"] as $key => $value){
                $obj = new SpeedTestingInfo();
                $obj->deserialize($value);
                array_push($this->ProxySpeedTestingInfo, $obj);
            }
        }

        if (array_key_exists("SpeedTestingStatus",$param) and $param["SpeedTestingStatus"] !== null) {
            $this->SpeedTestingStatus = new SpeedTestingStatus();
            $this->SpeedTestingStatus->deserialize($param["SpeedTestingStatus"]);
        }

        if (array_key_exists("OptimizeAction",$param) and $param["OptimizeAction"] !== null) {
            $this->OptimizeAction = [];
            foreach ($param["OptimizeAction"] as $key => $value){
                $obj = new OptimizeAction();
                $obj->deserialize($value);
                array_push($this->OptimizeAction, $obj);
            }
        }

        if (array_key_exists("ProxyLoadTime",$param) and $param["ProxyLoadTime"] !== null) {
            $this->ProxyLoadTime = $param["ProxyLoadTime"];
        }

        if (array_key_exists("OriginLoadTime",$param) and $param["OriginLoadTime"] !== null) {
            $this->OriginLoadTime = $param["OriginLoadTime"];
        }
    }
}
