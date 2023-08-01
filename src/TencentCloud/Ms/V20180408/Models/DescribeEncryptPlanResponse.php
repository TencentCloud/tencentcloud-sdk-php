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
 * DescribeEncryptPlan返回参数结构体
 *
 * @method integer getPlatformType() 获取平台类型整型值  
 * @method void setPlatformType(integer $PlatformType) 设置平台类型整型值  
 * @method string getPlatformTypeDesc() 获取平台类型描述 1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformTypeDesc(string $PlatformTypeDesc) 设置平台类型描述 1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getEncryptOpType() 获取1- 在线加固 2-输出工具加固
 * @method void setEncryptOpType(integer $EncryptOpType) 设置1- 在线加固 2-输出工具加固
 * @method string getEncryptOpTypeDesc() 获取1- 在线加固 2-输出工具加固
 * @method void setEncryptOpTypeDesc(string $EncryptOpTypeDesc) 设置1- 在线加固 2-输出工具加固
 * @method integer getOrderType() 获取订单收费类型枚举值
 * @method void setOrderType(integer $OrderType) 设置订单收费类型枚举值
 * @method string getOrderTypeDesc() 获取订单收费类型描述
 * @method void setOrderTypeDesc(string $OrderTypeDesc) 设置订单收费类型描述
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method AndroidPlan getAndroidPlan() 获取上次加固策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAndroidPlan(AndroidPlan $AndroidPlan) 设置上次加固策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppletPlan getAppletPlan() 获取上次小程序加固策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppletPlan(AppletPlan $AppletPlan) 设置上次小程序加固策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method IOSPlan getIOSPlan() 获取上次ios源码混淆加固配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIOSPlan(IOSPlan $IOSPlan) 设置上次ios源码混淆加固配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SDKPlan getSDKPlan() 获取上次sdk加固配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSDKPlan(SDKPlan $SDKPlan) 设置上次sdk加固配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEncryptPlanResponse extends AbstractModel
{
    /**
     * @var integer 平台类型整型值  
     */
    public $PlatformType;

    /**
     * @var string 平台类型描述 1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     */
    public $PlatformTypeDesc;

    /**
     * @var integer 1- 在线加固 2-输出工具加固
     */
    public $EncryptOpType;

    /**
     * @var string 1- 在线加固 2-输出工具加固
     */
    public $EncryptOpTypeDesc;

    /**
     * @var integer 订单收费类型枚举值
     */
    public $OrderType;

    /**
     * @var string 订单收费类型描述
     */
    public $OrderTypeDesc;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var AndroidPlan 上次加固策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AndroidPlan;

    /**
     * @var AppletPlan 上次小程序加固策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppletPlan;

    /**
     * @var IOSPlan 上次ios源码混淆加固配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IOSPlan;

    /**
     * @var SDKPlan 上次sdk加固配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SDKPlan;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PlatformType 平台类型整型值  
     * @param string $PlatformTypeDesc 平台类型描述 1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $EncryptOpType 1- 在线加固 2-输出工具加固
     * @param string $EncryptOpTypeDesc 1- 在线加固 2-输出工具加固
     * @param integer $OrderType 订单收费类型枚举值
     * @param string $OrderTypeDesc 订单收费类型描述
     * @param string $ResourceId 资源id
     * @param AndroidPlan $AndroidPlan 上次加固策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppletPlan $AppletPlan 上次小程序加固策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param IOSPlan $IOSPlan 上次ios源码混淆加固配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SDKPlan $SDKPlan 上次sdk加固配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("PlatformTypeDesc",$param) and $param["PlatformTypeDesc"] !== null) {
            $this->PlatformTypeDesc = $param["PlatformTypeDesc"];
        }

        if (array_key_exists("EncryptOpType",$param) and $param["EncryptOpType"] !== null) {
            $this->EncryptOpType = $param["EncryptOpType"];
        }

        if (array_key_exists("EncryptOpTypeDesc",$param) and $param["EncryptOpTypeDesc"] !== null) {
            $this->EncryptOpTypeDesc = $param["EncryptOpTypeDesc"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderTypeDesc",$param) and $param["OrderTypeDesc"] !== null) {
            $this->OrderTypeDesc = $param["OrderTypeDesc"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AndroidPlan",$param) and $param["AndroidPlan"] !== null) {
            $this->AndroidPlan = new AndroidPlan();
            $this->AndroidPlan->deserialize($param["AndroidPlan"]);
        }

        if (array_key_exists("AppletPlan",$param) and $param["AppletPlan"] !== null) {
            $this->AppletPlan = new AppletPlan();
            $this->AppletPlan->deserialize($param["AppletPlan"]);
        }

        if (array_key_exists("IOSPlan",$param) and $param["IOSPlan"] !== null) {
            $this->IOSPlan = new IOSPlan();
            $this->IOSPlan->deserialize($param["IOSPlan"]);
        }

        if (array_key_exists("SDKPlan",$param) and $param["SDKPlan"] !== null) {
            $this->SDKPlan = new SDKPlan();
            $this->SDKPlan->deserialize($param["SDKPlan"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
