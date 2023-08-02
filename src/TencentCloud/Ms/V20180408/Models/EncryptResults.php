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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道合作加固结果信息
 *
 * @method integer getPlatformType() 获取平台类型枚举值  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置平台类型枚举值  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
 * @method string getPlatformDesc() 获取平台类型描述  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
 * @method void setPlatformDesc(string $PlatformDesc) 设置平台类型描述  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
 * @method integer getOrderType() 获取订单采购类型枚举值， 1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderType(integer $OrderType) 设置订单采购类型枚举值， 1-免费试用 2-按年收费 3-按次收费
 * @method string getOrderTypeDesc() 获取订单采购类型 描述：1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderTypeDesc(string $OrderTypeDesc) 设置订单采购类型 描述：1-免费试用 2-按年收费 3-按次收费
 * @method integer getEncryptOpType() 获取枚举值：1-在线加固 或 2-输出工具加固
 * @method void setEncryptOpType(integer $EncryptOpType) 设置枚举值：1-在线加固 或 2-输出工具加固
 * @method string getEncryptOpTypeDesc() 获取描述：1-在线加固 或 2-输出工具加固
 * @method void setEncryptOpTypeDesc(string $EncryptOpTypeDesc) 设置描述：1-在线加固 或 2-输出工具加固
 * @method string getResourceId() 获取与当前任务关联的资源Id
 * @method void setResourceId(string $ResourceId) 设置与当前任务关联的资源Id
 * @method string getOrderId() 获取与当前任务关联的订单Id
 * @method void setOrderId(string $OrderId) 设置与当前任务关联的订单Id
 * @method AndroidResult getAndroidResult() 获取对应PlatformType平台类型值   1-android加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAndroidResult(AndroidResult $AndroidResult) 设置对应PlatformType平台类型值   1-android加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method IOSResult getIOSResult() 获取对应PlatformType平台类型值   2-ios源码混淆加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIOSResult(IOSResult $IOSResult) 设置对应PlatformType平台类型值   2-ios源码混淆加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method SDKResult getSDKResult() 获取对应PlatformType平台类型值   3-sdk加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSDKResult(SDKResult $SDKResult) 设置对应PlatformType平台类型值   3-sdk加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppletResult getAppletResult() 获取对应PlatformType平台类型值   4-applet小程序加固结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppletResult(AppletResult $AppletResult) 设置对应PlatformType平台类型值   4-applet小程序加固结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class EncryptResults extends AbstractModel
{
    /**
     * @var integer 平台类型枚举值  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
     */
    public $PlatformType;

    /**
     * @var string 平台类型描述  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
     */
    public $PlatformDesc;

    /**
     * @var integer 订单采购类型枚举值， 1-免费试用 2-按年收费 3-按次收费
     */
    public $OrderType;

    /**
     * @var string 订单采购类型 描述：1-免费试用 2-按年收费 3-按次收费
     */
    public $OrderTypeDesc;

    /**
     * @var integer 枚举值：1-在线加固 或 2-输出工具加固
     */
    public $EncryptOpType;

    /**
     * @var string 描述：1-在线加固 或 2-输出工具加固
     */
    public $EncryptOpTypeDesc;

    /**
     * @var string 与当前任务关联的资源Id
     */
    public $ResourceId;

    /**
     * @var string 与当前任务关联的订单Id
     */
    public $OrderId;

    /**
     * @var AndroidResult 对应PlatformType平台类型值   1-android加固结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AndroidResult;

    /**
     * @var IOSResult 对应PlatformType平台类型值   2-ios源码混淆加固结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IOSResult;

    /**
     * @var SDKResult 对应PlatformType平台类型值   3-sdk加固结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SDKResult;

    /**
     * @var AppletResult 对应PlatformType平台类型值   4-applet小程序加固结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppletResult;

    /**
     * @param integer $PlatformType 平台类型枚举值  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
     * @param string $PlatformDesc 平台类型描述  1-android加固   2-ios源码混淆  3-sdk加固  4-applet小程序加固
     * @param integer $OrderType 订单采购类型枚举值， 1-免费试用 2-按年收费 3-按次收费
     * @param string $OrderTypeDesc 订单采购类型 描述：1-免费试用 2-按年收费 3-按次收费
     * @param integer $EncryptOpType 枚举值：1-在线加固 或 2-输出工具加固
     * @param string $EncryptOpTypeDesc 描述：1-在线加固 或 2-输出工具加固
     * @param string $ResourceId 与当前任务关联的资源Id
     * @param string $OrderId 与当前任务关联的订单Id
     * @param AndroidResult $AndroidResult 对应PlatformType平台类型值   1-android加固结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param IOSResult $IOSResult 对应PlatformType平台类型值   2-ios源码混淆加固结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param SDKResult $SDKResult 对应PlatformType平台类型值   3-sdk加固结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppletResult $AppletResult 对应PlatformType平台类型值   4-applet小程序加固结果
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
        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("PlatformDesc",$param) and $param["PlatformDesc"] !== null) {
            $this->PlatformDesc = $param["PlatformDesc"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderTypeDesc",$param) and $param["OrderTypeDesc"] !== null) {
            $this->OrderTypeDesc = $param["OrderTypeDesc"];
        }

        if (array_key_exists("EncryptOpType",$param) and $param["EncryptOpType"] !== null) {
            $this->EncryptOpType = $param["EncryptOpType"];
        }

        if (array_key_exists("EncryptOpTypeDesc",$param) and $param["EncryptOpTypeDesc"] !== null) {
            $this->EncryptOpTypeDesc = $param["EncryptOpTypeDesc"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("AndroidResult",$param) and $param["AndroidResult"] !== null) {
            $this->AndroidResult = new AndroidResult();
            $this->AndroidResult->deserialize($param["AndroidResult"]);
        }

        if (array_key_exists("IOSResult",$param) and $param["IOSResult"] !== null) {
            $this->IOSResult = new IOSResult();
            $this->IOSResult->deserialize($param["IOSResult"]);
        }

        if (array_key_exists("SDKResult",$param) and $param["SDKResult"] !== null) {
            $this->SDKResult = new SDKResult();
            $this->SDKResult->deserialize($param["SDKResult"]);
        }

        if (array_key_exists("AppletResult",$param) and $param["AppletResult"] !== null) {
            $this->AppletResult = new AppletResult();
            $this->AppletResult->deserialize($param["AppletResult"]);
        }
    }
}
