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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWarnings请求参数结构体
 *
 * @method integer getOrderType() 获取1:创建时间倒序 2：创建时间升序 3：level倒序 4：leve升序
 * @method void setOrderType(integer $OrderType) 设置1:创建时间倒序 2：创建时间升序 3：level倒序 4：leve升序
 * @method string getDeviceId() 获取可选设备id
 * @method void setDeviceId(string $DeviceId) 设置可选设备id
 * @method array getWarnLevelArray() 获取如果不传则查询所有，取值参见配置
 * @method void setWarnLevelArray(array $WarnLevelArray) 设置如果不传则查询所有，取值参见配置
 * @method array getWarnModeArray() 获取如果不传则查询所有，取值参见配置
 * @method void setWarnModeArray(array $WarnModeArray) 设置如果不传则查询所有，取值参见配置
 * @method integer getOffset() 获取不传认为是0
 * @method void setOffset(integer $Offset) 设置不传认为是0
 * @method integer getLimit() 获取不传认为是20
 * @method void setLimit(integer $Limit) 设置不传认为是20
 * @method string getDateBegin() 获取形似：2021-05-21 00:00:00 .取值在当前日前30天内，不传默认是当前日前30天日期
 * @method void setDateBegin(string $DateBegin) 设置形似：2021-05-21 00:00:00 .取值在当前日前30天内，不传默认是当前日前30天日期
 * @method string getDateEnd() 获取形似：2021-05-21 23:59:59 .取值在当前日前30天内，不传默认是当前日前30天日期
 * @method void setDateEnd(string $DateEnd) 设置形似：2021-05-21 23:59:59 .取值在当前日前30天内，不传默认是当前日前30天日期
 */
class DescribeWarningsRequest extends AbstractModel
{
    /**
     * @var integer 1:创建时间倒序 2：创建时间升序 3：level倒序 4：leve升序
     */
    public $OrderType;

    /**
     * @var string 可选设备id
     */
    public $DeviceId;

    /**
     * @var array 如果不传则查询所有，取值参见配置
     */
    public $WarnLevelArray;

    /**
     * @var array 如果不传则查询所有，取值参见配置
     */
    public $WarnModeArray;

    /**
     * @var integer 不传认为是0
     */
    public $Offset;

    /**
     * @var integer 不传认为是20
     */
    public $Limit;

    /**
     * @var string 形似：2021-05-21 00:00:00 .取值在当前日前30天内，不传默认是当前日前30天日期
     */
    public $DateBegin;

    /**
     * @var string 形似：2021-05-21 23:59:59 .取值在当前日前30天内，不传默认是当前日前30天日期
     */
    public $DateEnd;

    /**
     * @param integer $OrderType 1:创建时间倒序 2：创建时间升序 3：level倒序 4：leve升序
     * @param string $DeviceId 可选设备id
     * @param array $WarnLevelArray 如果不传则查询所有，取值参见配置
     * @param array $WarnModeArray 如果不传则查询所有，取值参见配置
     * @param integer $Offset 不传认为是0
     * @param integer $Limit 不传认为是20
     * @param string $DateBegin 形似：2021-05-21 00:00:00 .取值在当前日前30天内，不传默认是当前日前30天日期
     * @param string $DateEnd 形似：2021-05-21 23:59:59 .取值在当前日前30天内，不传默认是当前日前30天日期
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
        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("WarnLevelArray",$param) and $param["WarnLevelArray"] !== null) {
            $this->WarnLevelArray = $param["WarnLevelArray"];
        }

        if (array_key_exists("WarnModeArray",$param) and $param["WarnModeArray"] !== null) {
            $this->WarnModeArray = $param["WarnModeArray"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DateBegin",$param) and $param["DateBegin"] !== null) {
            $this->DateBegin = $param["DateBegin"];
        }

        if (array_key_exists("DateEnd",$param) and $param["DateEnd"] !== null) {
            $this->DateEnd = $param["DateEnd"];
        }
    }
}
