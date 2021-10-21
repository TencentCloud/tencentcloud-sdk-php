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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 心电图详情
 *
 * @method EcgItem getHeartRate() 获取心率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeartRate(EcgItem $HeartRate) 设置心率
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getAuricularRate() 获取心房率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuricularRate(EcgItem $AuricularRate) 设置心房率
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getVentricularRate() 获取心室率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVentricularRate(EcgItem $VentricularRate) 设置心室率
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getRhythm() 获取节律
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRhythm(EcgItem $Rhythm) 设置节律
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getPDuration() 获取P波时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPDuration(EcgItem $PDuration) 设置P波时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getQrsDuration() 获取QRS时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQrsDuration(EcgItem $QrsDuration) 设置QRS时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getQrsAxis() 获取QRS电轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQrsAxis(EcgItem $QrsAxis) 设置QRS电轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getPRInterval() 获取P-R间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPRInterval(EcgItem $PRInterval) 设置P-R间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getPPInterval() 获取P-P间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPPInterval(EcgItem $PPInterval) 设置P-P间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getRRInterval() 获取R-R间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRRInterval(EcgItem $RRInterval) 设置R-R间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getPJInterval() 获取P-J间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPJInterval(EcgItem $PJInterval) 设置P-J间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getQTInterval() 获取Q-T间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQTInterval(EcgItem $QTInterval) 设置Q-T间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getQTCInterval() 获取qt/qtc间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQTCInterval(EcgItem $QTCInterval) 设置qt/qtc间期
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getRv5SV1Amplitude() 获取RV5/SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRv5SV1Amplitude(EcgItem $Rv5SV1Amplitude) 设置RV5/SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getRv5AddSV1Amplitude() 获取RV5+SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRv5AddSV1Amplitude(EcgItem $Rv5AddSV1Amplitude) 设置RV5+SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getPRTAxis() 获取PRT电轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPRTAxis(EcgItem $PRTAxis) 设置PRT电轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getRv5Amplitude() 获取RV5振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRv5Amplitude(EcgItem $Rv5Amplitude) 设置RV5振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getSV1Amplitude() 获取SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSV1Amplitude(EcgItem $SV1Amplitude) 设置SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getRV6SV2() 获取RV6/SV2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRV6SV2(EcgItem $RV6SV2) 设置RV6/SV2
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgItem getPQRSTAxis() 获取P/QRS/T电轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPQRSTAxis(EcgItem $PQRSTAxis) 设置P/QRS/T电轴
注意：此字段可能返回 null，表示取不到有效值。
 */
class EcgDescription extends AbstractModel
{
    /**
     * @var EcgItem 心率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeartRate;

    /**
     * @var EcgItem 心房率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuricularRate;

    /**
     * @var EcgItem 心室率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VentricularRate;

    /**
     * @var EcgItem 节律
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rhythm;

    /**
     * @var EcgItem P波时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PDuration;

    /**
     * @var EcgItem QRS时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QrsDuration;

    /**
     * @var EcgItem QRS电轴
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QrsAxis;

    /**
     * @var EcgItem P-R间期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PRInterval;

    /**
     * @var EcgItem P-P间期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PPInterval;

    /**
     * @var EcgItem R-R间期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RRInterval;

    /**
     * @var EcgItem P-J间期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PJInterval;

    /**
     * @var EcgItem Q-T间期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QTInterval;

    /**
     * @var EcgItem qt/qtc间期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QTCInterval;

    /**
     * @var EcgItem RV5/SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rv5SV1Amplitude;

    /**
     * @var EcgItem RV5+SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rv5AddSV1Amplitude;

    /**
     * @var EcgItem PRT电轴
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PRTAxis;

    /**
     * @var EcgItem RV5振幅
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rv5Amplitude;

    /**
     * @var EcgItem SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SV1Amplitude;

    /**
     * @var EcgItem RV6/SV2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RV6SV2;

    /**
     * @var EcgItem P/QRS/T电轴
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PQRSTAxis;

    /**
     * @param EcgItem $HeartRate 心率
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $AuricularRate 心房率
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $VentricularRate 心室率
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $Rhythm 节律
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $PDuration P波时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $QrsDuration QRS时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $QrsAxis QRS电轴
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $PRInterval P-R间期
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $PPInterval P-P间期
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $RRInterval R-R间期
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $PJInterval P-J间期
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $QTInterval Q-T间期
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $QTCInterval qt/qtc间期
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $Rv5SV1Amplitude RV5/SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $Rv5AddSV1Amplitude RV5+SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $PRTAxis PRT电轴
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $Rv5Amplitude RV5振幅
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $SV1Amplitude SV1振幅
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $RV6SV2 RV6/SV2
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgItem $PQRSTAxis P/QRS/T电轴
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
        if (array_key_exists("HeartRate",$param) and $param["HeartRate"] !== null) {
            $this->HeartRate = new EcgItem();
            $this->HeartRate->deserialize($param["HeartRate"]);
        }

        if (array_key_exists("AuricularRate",$param) and $param["AuricularRate"] !== null) {
            $this->AuricularRate = new EcgItem();
            $this->AuricularRate->deserialize($param["AuricularRate"]);
        }

        if (array_key_exists("VentricularRate",$param) and $param["VentricularRate"] !== null) {
            $this->VentricularRate = new EcgItem();
            $this->VentricularRate->deserialize($param["VentricularRate"]);
        }

        if (array_key_exists("Rhythm",$param) and $param["Rhythm"] !== null) {
            $this->Rhythm = new EcgItem();
            $this->Rhythm->deserialize($param["Rhythm"]);
        }

        if (array_key_exists("PDuration",$param) and $param["PDuration"] !== null) {
            $this->PDuration = new EcgItem();
            $this->PDuration->deserialize($param["PDuration"]);
        }

        if (array_key_exists("QrsDuration",$param) and $param["QrsDuration"] !== null) {
            $this->QrsDuration = new EcgItem();
            $this->QrsDuration->deserialize($param["QrsDuration"]);
        }

        if (array_key_exists("QrsAxis",$param) and $param["QrsAxis"] !== null) {
            $this->QrsAxis = new EcgItem();
            $this->QrsAxis->deserialize($param["QrsAxis"]);
        }

        if (array_key_exists("PRInterval",$param) and $param["PRInterval"] !== null) {
            $this->PRInterval = new EcgItem();
            $this->PRInterval->deserialize($param["PRInterval"]);
        }

        if (array_key_exists("PPInterval",$param) and $param["PPInterval"] !== null) {
            $this->PPInterval = new EcgItem();
            $this->PPInterval->deserialize($param["PPInterval"]);
        }

        if (array_key_exists("RRInterval",$param) and $param["RRInterval"] !== null) {
            $this->RRInterval = new EcgItem();
            $this->RRInterval->deserialize($param["RRInterval"]);
        }

        if (array_key_exists("PJInterval",$param) and $param["PJInterval"] !== null) {
            $this->PJInterval = new EcgItem();
            $this->PJInterval->deserialize($param["PJInterval"]);
        }

        if (array_key_exists("QTInterval",$param) and $param["QTInterval"] !== null) {
            $this->QTInterval = new EcgItem();
            $this->QTInterval->deserialize($param["QTInterval"]);
        }

        if (array_key_exists("QTCInterval",$param) and $param["QTCInterval"] !== null) {
            $this->QTCInterval = new EcgItem();
            $this->QTCInterval->deserialize($param["QTCInterval"]);
        }

        if (array_key_exists("Rv5SV1Amplitude",$param) and $param["Rv5SV1Amplitude"] !== null) {
            $this->Rv5SV1Amplitude = new EcgItem();
            $this->Rv5SV1Amplitude->deserialize($param["Rv5SV1Amplitude"]);
        }

        if (array_key_exists("Rv5AddSV1Amplitude",$param) and $param["Rv5AddSV1Amplitude"] !== null) {
            $this->Rv5AddSV1Amplitude = new EcgItem();
            $this->Rv5AddSV1Amplitude->deserialize($param["Rv5AddSV1Amplitude"]);
        }

        if (array_key_exists("PRTAxis",$param) and $param["PRTAxis"] !== null) {
            $this->PRTAxis = new EcgItem();
            $this->PRTAxis->deserialize($param["PRTAxis"]);
        }

        if (array_key_exists("Rv5Amplitude",$param) and $param["Rv5Amplitude"] !== null) {
            $this->Rv5Amplitude = new EcgItem();
            $this->Rv5Amplitude->deserialize($param["Rv5Amplitude"]);
        }

        if (array_key_exists("SV1Amplitude",$param) and $param["SV1Amplitude"] !== null) {
            $this->SV1Amplitude = new EcgItem();
            $this->SV1Amplitude->deserialize($param["SV1Amplitude"]);
        }

        if (array_key_exists("RV6SV2",$param) and $param["RV6SV2"] !== null) {
            $this->RV6SV2 = new EcgItem();
            $this->RV6SV2->deserialize($param["RV6SV2"]);
        }

        if (array_key_exists("PQRSTAxis",$param) and $param["PQRSTAxis"] !== null) {
            $this->PQRSTAxis = new EcgItem();
            $this->PQRSTAxis->deserialize($param["PQRSTAxis"]);
        }
    }
}
