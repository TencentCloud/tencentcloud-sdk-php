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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备网络状态信息
 *
 * @method integer getType() 获取网络类型：
0:数据
1:Wi-Fi
2:有线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置网络类型：
0:数据
1:Wi-Fi
2:有线
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDataEnable() 获取启用/禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEnable(boolean $DataEnable) 设置启用/禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUploadLimit() 获取上行限速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadLimit(string $UploadLimit) 设置上行限速
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadLimit() 获取下行限速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadLimit(string $DownloadLimit) 设置下行限速
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataRx() 获取接收实时速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRx(integer $DataRx) 设置接收实时速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataTx() 获取发送实时速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataTx(integer $DataTx) 设置发送实时速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVendor() 获取运营商类型：
1: 中国移动；
2: 中国电信; 
3: 中国联通
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVendor(integer $Vendor) 设置运营商类型：
1: 中国移动；
2: 中国电信; 
3: 中国联通
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取连接状态：
0:无连接
1:连接中
2:已连接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置连接状态：
0:无连接
1:连接中
2:已连接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSignalStrength() 获取信号强度/单位：dbm
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignalStrength(integer $SignalStrength) 设置信号强度/单位：dbm
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRat() 获取数据网络类型：
-1 ：无效值   
2：2G 
3：3G 
4：4G 
5：5G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRat(integer $Rat) 设置数据网络类型：
-1 ：无效值   
2：2G 
3：3G 
4：4G 
5：5G
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetInfoName() 获取网卡名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetInfoName(string $NetInfoName) 设置网卡名
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDownRate() 获取下行实时速率（浮点数类型代替上一版本DataRx的整型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownRate(float $DownRate) 设置下行实时速率（浮点数类型代替上一版本DataRx的整型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUpRate() 获取上行实时速率（浮点数类型代替上一版本TxRate的整型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpRate(float $UpRate) 设置上行实时速率（浮点数类型代替上一版本TxRate的整型）
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceNetInfo extends AbstractModel
{
    /**
     * @var integer 网络类型：
0:数据
1:Wi-Fi
2:有线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean 启用/禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEnable;

    /**
     * @var string 上行限速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadLimit;

    /**
     * @var string 下行限速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadLimit;

    /**
     * @var integer 接收实时速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRx;

    /**
     * @var integer 发送实时速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataTx;

    /**
     * @var integer 运营商类型：
1: 中国移动；
2: 中国电信; 
3: 中国联通
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vendor;

    /**
     * @var integer 连接状态：
0:无连接
1:连接中
2:已连接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 公网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var integer 信号强度/单位：dbm
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignalStrength;

    /**
     * @var integer 数据网络类型：
-1 ：无效值   
2：2G 
3：3G 
4：4G 
5：5G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rat;

    /**
     * @var string 网卡名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetInfoName;

    /**
     * @var float 下行实时速率（浮点数类型代替上一版本DataRx的整型）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownRate;

    /**
     * @var float 上行实时速率（浮点数类型代替上一版本TxRate的整型）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpRate;

    /**
     * @param integer $Type 网络类型：
0:数据
1:Wi-Fi
2:有线
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DataEnable 启用/禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UploadLimit 上行限速
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadLimit 下行限速
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataRx 接收实时速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataTx 发送实时速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vendor 运营商类型：
1: 中国移动；
2: 中国电信; 
3: 中国联通
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 连接状态：
0:无连接
1:连接中
2:已连接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 公网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SignalStrength 信号强度/单位：dbm
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rat 数据网络类型：
-1 ：无效值   
2：2G 
3：3G 
4：4G 
5：5G
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetInfoName 网卡名
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DownRate 下行实时速率（浮点数类型代替上一版本DataRx的整型）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UpRate 上行实时速率（浮点数类型代替上一版本TxRate的整型）
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataEnable",$param) and $param["DataEnable"] !== null) {
            $this->DataEnable = $param["DataEnable"];
        }

        if (array_key_exists("UploadLimit",$param) and $param["UploadLimit"] !== null) {
            $this->UploadLimit = $param["UploadLimit"];
        }

        if (array_key_exists("DownloadLimit",$param) and $param["DownloadLimit"] !== null) {
            $this->DownloadLimit = $param["DownloadLimit"];
        }

        if (array_key_exists("DataRx",$param) and $param["DataRx"] !== null) {
            $this->DataRx = $param["DataRx"];
        }

        if (array_key_exists("DataTx",$param) and $param["DataTx"] !== null) {
            $this->DataTx = $param["DataTx"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("SignalStrength",$param) and $param["SignalStrength"] !== null) {
            $this->SignalStrength = $param["SignalStrength"];
        }

        if (array_key_exists("Rat",$param) and $param["Rat"] !== null) {
            $this->Rat = $param["Rat"];
        }

        if (array_key_exists("NetInfoName",$param) and $param["NetInfoName"] !== null) {
            $this->NetInfoName = $param["NetInfoName"];
        }

        if (array_key_exists("DownRate",$param) and $param["DownRate"] !== null) {
            $this->DownRate = $param["DownRate"];
        }

        if (array_key_exists("UpRate",$param) and $param["UpRate"] !== null) {
            $this->UpRate = $param["UpRate"];
        }
    }
}
