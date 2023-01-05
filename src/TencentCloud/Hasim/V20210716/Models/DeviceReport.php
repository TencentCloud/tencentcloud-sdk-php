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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备上报信息
 *
 * @method string getImei() 获取移动设备ID
 * @method void setImei(string $Imei) 设置移动设备ID
 * @method string getLng() 获取经度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLng(string $Lng) 设置经度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLat() 获取维度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLat(string $Lat) 设置维度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLac() 获取运营商基站ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLac(string $Lac) 设置运营商基站ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCell() 获取小区CellID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCell(string $Cell) 设置小区CellID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIccid() 获取当前上报运营商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIccid(string $Iccid) 设置当前上报运营商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRss() 获取信号强度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRss(integer $Rss) 设置信号强度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTele() 获取运营商: 1 移动 2 联通 3 电信
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTele(integer $Tele) 设置运营商: 1 移动 2 联通 3 电信
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTid() 获取当前设备策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTid(integer $Tid) 设置当前设备策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPing() 获取心跳间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPing(integer $Ping) 设置心跳间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelay() 获取网络延迟,单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelay(integer $Delay) 设置网络延迟,单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLog() 获取高级日志启停状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(integer $Log) 设置高级日志启停状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevType() 获取设备型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevType(string $DevType) 设置设备型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevModel() 获取设备型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevModel(string $DevModel) 设置设备型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取设备版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置设备版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUploadTime() 获取设备刷新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadTime(string $UploadTime) 设置设备刷新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取网络环境: 0 正常 1 弱网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置网络环境: 0 正常 1 弱网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonthFirstTime() 获取每月第一次上报心跳时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonthFirstTime(string $MonthFirstTime) 设置每月第一次上报心跳时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceReport extends AbstractModel
{
    /**
     * @var string 移动设备ID
     */
    public $Imei;

    /**
     * @var string 经度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lng;

    /**
     * @var string 维度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lat;

    /**
     * @var string 运营商基站ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lac;

    /**
     * @var string 小区CellID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cell;

    /**
     * @var string 当前上报运营商ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Iccid;

    /**
     * @var integer 信号强度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rss;

    /**
     * @var integer 运营商: 1 移动 2 联通 3 电信
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tele;

    /**
     * @var integer 当前设备策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tid;

    /**
     * @var integer 心跳间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ping;

    /**
     * @var integer 网络延迟,单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delay;

    /**
     * @var integer 高级日志启停状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Log;

    /**
     * @var string 设备型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevType;

    /**
     * @var string 设备型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevModel;

    /**
     * @var string 设备版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 设备刷新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadTime;

    /**
     * @var integer 网络环境: 0 正常 1 弱网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 每月第一次上报心跳时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonthFirstTime;

    /**
     * @param string $Imei 移动设备ID
     * @param string $Lng 经度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Lat 维度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Lac 运营商基站ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cell 小区CellID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Iccid 当前上报运营商ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rss 信号强度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tele 运营商: 1 移动 2 联通 3 电信
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tid 当前设备策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ping 心跳间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Delay 网络延迟,单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Log 高级日志启停状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevType 设备型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevModel 设备型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 设备版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UploadTime 设备刷新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 网络环境: 0 正常 1 弱网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonthFirstTime 每月第一次上报心跳时间
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
        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Lng",$param) and $param["Lng"] !== null) {
            $this->Lng = $param["Lng"];
        }

        if (array_key_exists("Lat",$param) and $param["Lat"] !== null) {
            $this->Lat = $param["Lat"];
        }

        if (array_key_exists("Lac",$param) and $param["Lac"] !== null) {
            $this->Lac = $param["Lac"];
        }

        if (array_key_exists("Cell",$param) and $param["Cell"] !== null) {
            $this->Cell = $param["Cell"];
        }

        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("Rss",$param) and $param["Rss"] !== null) {
            $this->Rss = $param["Rss"];
        }

        if (array_key_exists("Tele",$param) and $param["Tele"] !== null) {
            $this->Tele = $param["Tele"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("Ping",$param) and $param["Ping"] !== null) {
            $this->Ping = $param["Ping"];
        }

        if (array_key_exists("Delay",$param) and $param["Delay"] !== null) {
            $this->Delay = $param["Delay"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("DevType",$param) and $param["DevType"] !== null) {
            $this->DevType = $param["DevType"];
        }

        if (array_key_exists("DevModel",$param) and $param["DevModel"] !== null) {
            $this->DevModel = $param["DevModel"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UploadTime",$param) and $param["UploadTime"] !== null) {
            $this->UploadTime = $param["UploadTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MonthFirstTime",$param) and $param["MonthFirstTime"] !== null) {
            $this->MonthFirstTime = $param["MonthFirstTime"];
        }
    }
}
