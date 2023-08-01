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
 * DescribeEncryptInstances请求参数结构体
 *
 * @method integer getPageNumber() 获取多记录查询时使用，页码
 * @method void setPageNumber(integer $PageNumber) 设置多记录查询时使用，页码
 * @method integer getPageSize() 获取多记录每页展示数量
 * @method void setPageSize(integer $PageSize) 设置多记录每页展示数量
 * @method string getOrderField() 获取多记录查询时排序使用  仅支持CreateTime 任务创建时间排序
 * @method void setOrderField(string $OrderField) 设置多记录查询时排序使用  仅支持CreateTime 任务创建时间排序
 * @method string getOrderDirection() 获取升序（asc）还是降序（desc），默认：desc。
 * @method void setOrderDirection(string $OrderDirection) 设置升序（asc）还是降序（desc），默认：desc。
 * @method integer getPlatformType() 获取(条件过滤字段) 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置(条件过滤字段) 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getOrderType() 获取(条件过滤字段) 订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderType(integer $OrderType) 设置(条件过滤字段) 订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method integer getEncryptOpType() 获取(条件过滤字段) 1-在线加固 或 2-输出工具加固
 * @method void setEncryptOpType(integer $EncryptOpType) 设置(条件过滤字段) 1-在线加固 或 2-输出工具加固
 * @method string getResultId() 获取(条件过滤字段) 单记录查询时使用，结果ID该字段非空时，结构会根据结果ID进行单记录查询，符合查询条件时，只返回一条记录。
 * @method void setResultId(string $ResultId) 设置(条件过滤字段) 单记录查询时使用，结果ID该字段非空时，结构会根据结果ID进行单记录查询，符合查询条件时，只返回一条记录。
 * @method string getOrderId() 获取(条件过滤字段) 查询与订单Id关联的任务
 * @method void setOrderId(string $OrderId) 设置(条件过滤字段) 查询与订单Id关联的任务
 * @method string getResourceId() 获取(条件过滤字段) 查询与资源Id关联的任务
 * @method void setResourceId(string $ResourceId) 设置(条件过滤字段) 查询与资源Id关联的任务
 * @method string getAppType() 获取(条件过滤字段) 应用类型：android-apk; android-aab;
 * @method void setAppType(string $AppType) 设置(条件过滤字段) 应用类型：android-apk; android-aab;
 * @method string getAppPkgName() 获取（条件过滤字段）应用的包名
 * @method void setAppPkgName(string $AppPkgName) 设置（条件过滤字段）应用的包名
 * @method array getEncryptState() 获取加固结果，
0：正在排队；
1：加固成功；
2：加固中；
3：加固失败；
5：重试；
多记录查询时，根据查询结果进行检索使用。
 * @method void setEncryptState(array $EncryptState) 设置加固结果，
0：正在排队；
1：加固成功；
2：加固中；
3：加固失败；
5：重试；
多记录查询时，根据查询结果进行检索使用。
 */
class DescribeEncryptInstancesRequest extends AbstractModel
{
    /**
     * @var integer 多记录查询时使用，页码
     */
    public $PageNumber;

    /**
     * @var integer 多记录每页展示数量
     */
    public $PageSize;

    /**
     * @var string 多记录查询时排序使用  仅支持CreateTime 任务创建时间排序
     */
    public $OrderField;

    /**
     * @var string 升序（asc）还是降序（desc），默认：desc。
     */
    public $OrderDirection;

    /**
     * @var integer (条件过滤字段) 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     */
    public $PlatformType;

    /**
     * @var integer (条件过滤字段) 订单采购类型 1-免费试用 2-按年收费 3-按次收费
     */
    public $OrderType;

    /**
     * @var integer (条件过滤字段) 1-在线加固 或 2-输出工具加固
     */
    public $EncryptOpType;

    /**
     * @var string (条件过滤字段) 单记录查询时使用，结果ID该字段非空时，结构会根据结果ID进行单记录查询，符合查询条件时，只返回一条记录。
     */
    public $ResultId;

    /**
     * @var string (条件过滤字段) 查询与订单Id关联的任务
     */
    public $OrderId;

    /**
     * @var string (条件过滤字段) 查询与资源Id关联的任务
     */
    public $ResourceId;

    /**
     * @var string (条件过滤字段) 应用类型：android-apk; android-aab;
     */
    public $AppType;

    /**
     * @var string （条件过滤字段）应用的包名
     */
    public $AppPkgName;

    /**
     * @var array 加固结果，
0：正在排队；
1：加固成功；
2：加固中；
3：加固失败；
5：重试；
多记录查询时，根据查询结果进行检索使用。
     */
    public $EncryptState;

    /**
     * @param integer $PageNumber 多记录查询时使用，页码
     * @param integer $PageSize 多记录每页展示数量
     * @param string $OrderField 多记录查询时排序使用  仅支持CreateTime 任务创建时间排序
     * @param string $OrderDirection 升序（asc）还是降序（desc），默认：desc。
     * @param integer $PlatformType (条件过滤字段) 平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $OrderType (条件过滤字段) 订单采购类型 1-免费试用 2-按年收费 3-按次收费
     * @param integer $EncryptOpType (条件过滤字段) 1-在线加固 或 2-输出工具加固
     * @param string $ResultId (条件过滤字段) 单记录查询时使用，结果ID该字段非空时，结构会根据结果ID进行单记录查询，符合查询条件时，只返回一条记录。
     * @param string $OrderId (条件过滤字段) 查询与订单Id关联的任务
     * @param string $ResourceId (条件过滤字段) 查询与资源Id关联的任务
     * @param string $AppType (条件过滤字段) 应用类型：android-apk; android-aab;
     * @param string $AppPkgName （条件过滤字段）应用的包名
     * @param array $EncryptState 加固结果，
0：正在排队；
1：加固成功；
2：加固中；
3：加固失败；
5：重试；
多记录查询时，根据查询结果进行检索使用。
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
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

        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("EncryptState",$param) and $param["EncryptState"] !== null) {
            $this->EncryptState = $param["EncryptState"];
        }
    }
}
