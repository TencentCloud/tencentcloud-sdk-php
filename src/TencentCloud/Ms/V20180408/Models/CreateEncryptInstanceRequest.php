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
 * CreateEncryptInstance请求参数结构体
 *
 * @method integer getPlatformType() 获取平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getOrderType() 获取订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderType(integer $OrderType) 设置订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method integer getEncryptOpType() 获取1-在线加固、  2-输出工具加固
 * @method void setEncryptOpType(integer $EncryptOpType) 设置1-在线加固、  2-输出工具加固
 * @method string getResourceId() 获取本次加固使用的资源id
 * @method void setResourceId(string $ResourceId) 设置本次加固使用的资源id
 * @method AndroidAppInfo getAndroidAppInfo() 获取渠道合作android加固App信息 
 * @method void setAndroidAppInfo(AndroidAppInfo $AndroidAppInfo) 设置渠道合作android加固App信息 
 * @method AndroidPlan getAndroidPlan() 获取渠道合作android加固策略信息
 * @method void setAndroidPlan(AndroidPlan $AndroidPlan) 设置渠道合作android加固策略信息
 * @method AppletInfo getAppletInfo() 获取小程序加固信息
 * @method void setAppletInfo(AppletInfo $AppletInfo) 设置小程序加固信息
 */
class CreateEncryptInstanceRequest extends AbstractModel
{
    /**
     * @var integer 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     */
    public $PlatformType;

    /**
     * @var integer 订单采购类型 1-免费试用 2-按年收费 3-按次收费
     */
    public $OrderType;

    /**
     * @var integer 1-在线加固、  2-输出工具加固
     */
    public $EncryptOpType;

    /**
     * @var string 本次加固使用的资源id
     */
    public $ResourceId;

    /**
     * @var AndroidAppInfo 渠道合作android加固App信息 
     */
    public $AndroidAppInfo;

    /**
     * @var AndroidPlan 渠道合作android加固策略信息
     */
    public $AndroidPlan;

    /**
     * @var AppletInfo 小程序加固信息
     */
    public $AppletInfo;

    /**
     * @param integer $PlatformType 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $OrderType 订单采购类型 1-免费试用 2-按年收费 3-按次收费
     * @param integer $EncryptOpType 1-在线加固、  2-输出工具加固
     * @param string $ResourceId 本次加固使用的资源id
     * @param AndroidAppInfo $AndroidAppInfo 渠道合作android加固App信息 
     * @param AndroidPlan $AndroidPlan 渠道合作android加固策略信息
     * @param AppletInfo $AppletInfo 小程序加固信息
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

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("EncryptOpType",$param) and $param["EncryptOpType"] !== null) {
            $this->EncryptOpType = $param["EncryptOpType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AndroidAppInfo",$param) and $param["AndroidAppInfo"] !== null) {
            $this->AndroidAppInfo = new AndroidAppInfo();
            $this->AndroidAppInfo->deserialize($param["AndroidAppInfo"]);
        }

        if (array_key_exists("AndroidPlan",$param) and $param["AndroidPlan"] !== null) {
            $this->AndroidPlan = new AndroidPlan();
            $this->AndroidPlan->deserialize($param["AndroidPlan"]);
        }

        if (array_key_exists("AppletInfo",$param) and $param["AppletInfo"] !== null) {
            $this->AppletInfo = new AppletInfo();
            $this->AppletInfo->deserialize($param["AppletInfo"]);
        }
    }
}
