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
 * CreateOrderInstance请求参数结构体
 *
 * @method integer getPlatformType() 获取平台类型枚举值：1-android加固  ；2-ios源码混淆 ； 3-sdk加固 ； 4-applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置平台类型枚举值：1-android加固  ；2-ios源码混淆 ； 3-sdk加固 ； 4-applet小程序加固
 * @method integer getOrderType() 获取订单采购类型 1-免费试用 ；2-按年收费 ；3-按次收费
 * @method void setOrderType(integer $OrderType) 设置订单采购类型 1-免费试用 ；2-按年收费 ；3-按次收费
 * @method string getAppPkgNameList() 获取代表应用包名列表，值为单个包名（例如：“a.b.xxx”）或多个包名用逗号隔开(例如：“a.b.xxx,b.c.xxx”)。
当android按年收费加固或android免费试用加固时，该字段要求非空，即PlatformType=1 并且 OrderType=2时，AppPkgNameList必传值。

 * @method void setAppPkgNameList(string $AppPkgNameList) 设置代表应用包名列表，值为单个包名（例如：“a.b.xxx”）或多个包名用逗号隔开(例如：“a.b.xxx,b.c.xxx”)。
当android按年收费加固或android免费试用加固时，该字段要求非空，即PlatformType=1 并且 OrderType=2时，AppPkgNameList必传值。
 */
class CreateOrderInstanceRequest extends AbstractModel
{
    /**
     * @var integer 平台类型枚举值：1-android加固  ；2-ios源码混淆 ； 3-sdk加固 ； 4-applet小程序加固
     */
    public $PlatformType;

    /**
     * @var integer 订单采购类型 1-免费试用 ；2-按年收费 ；3-按次收费
     */
    public $OrderType;

    /**
     * @var string 代表应用包名列表，值为单个包名（例如：“a.b.xxx”）或多个包名用逗号隔开(例如：“a.b.xxx,b.c.xxx”)。
当android按年收费加固或android免费试用加固时，该字段要求非空，即PlatformType=1 并且 OrderType=2时，AppPkgNameList必传值。

     */
    public $AppPkgNameList;

    /**
     * @param integer $PlatformType 平台类型枚举值：1-android加固  ；2-ios源码混淆 ； 3-sdk加固 ； 4-applet小程序加固
     * @param integer $OrderType 订单采购类型 1-免费试用 ；2-按年收费 ；3-按次收费
     * @param string $AppPkgNameList 代表应用包名列表，值为单个包名（例如：“a.b.xxx”）或多个包名用逗号隔开(例如：“a.b.xxx,b.c.xxx”)。
当android按年收费加固或android免费试用加固时，该字段要求非空，即PlatformType=1 并且 OrderType=2时，AppPkgNameList必传值。
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

        if (array_key_exists("AppPkgNameList",$param) and $param["AppPkgNameList"] !== null) {
            $this->AppPkgNameList = $param["AppPkgNameList"];
        }
    }
}
