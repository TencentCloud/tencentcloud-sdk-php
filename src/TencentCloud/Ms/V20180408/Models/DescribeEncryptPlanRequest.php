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
 * DescribeEncryptPlan请求参数结构体
 *
 * @method integer getPlatformType() 获取平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getOrderType() 获取订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderType(integer $OrderType) 设置订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method integer getEncryptOpType() 获取1-在线加固；2-输出工具
 * @method void setEncryptOpType(integer $EncryptOpType) 设置1-在线加固；2-输出工具
 * @method string getResourceId() 获取本次加固使用的资源id
 * @method void setResourceId(string $ResourceId) 设置本次加固使用的资源id
 * @method string getAppPkgName() 获取（条件过滤字段）加固查询时，根据包名查询
 * @method void setAppPkgName(string $AppPkgName) 设置（条件过滤字段）加固查询时，根据包名查询
 * @method string getAppType() 获取（条件过滤字段）加固查询时，根据应用格式查询，枚举值：“apk”、“aab”
 * @method void setAppType(string $AppType) 设置（条件过滤字段）加固查询时，根据应用格式查询，枚举值：“apk”、“aab”
 */
class DescribeEncryptPlanRequest extends AbstractModel
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
     * @var integer 1-在线加固；2-输出工具
     */
    public $EncryptOpType;

    /**
     * @var string 本次加固使用的资源id
     */
    public $ResourceId;

    /**
     * @var string （条件过滤字段）加固查询时，根据包名查询
     */
    public $AppPkgName;

    /**
     * @var string （条件过滤字段）加固查询时，根据应用格式查询，枚举值：“apk”、“aab”
     */
    public $AppType;

    /**
     * @param integer $PlatformType 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $OrderType 订单采购类型 1-免费试用 2-按年收费 3-按次收费
     * @param integer $EncryptOpType 1-在线加固；2-输出工具
     * @param string $ResourceId 本次加固使用的资源id
     * @param string $AppPkgName （条件过滤字段）加固查询时，根据包名查询
     * @param string $AppType （条件过滤字段）加固查询时，根据应用格式查询，枚举值：“apk”、“aab”
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

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }
    }
}
