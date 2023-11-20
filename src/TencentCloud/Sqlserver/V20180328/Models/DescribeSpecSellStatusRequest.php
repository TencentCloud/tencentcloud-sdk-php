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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpecSellStatus请求参数结构体
 *
 * @method string getZone() 获取可用区英文ID，形如ap-guangzhou-3
 * @method void setZone(string $Zone) 设置可用区英文ID，形如ap-guangzhou-3
 * @method array getSpecIdSet() 获取实例规格ID，可通过DescribeProductConfig接口获取。
 * @method void setSpecIdSet(array $SpecIdSet) 设置实例规格ID，可通过DescribeProductConfig接口获取。
 * @method string getDBVersion() 获取数据库版本信息，可通过DescribeProductConfig接口获取。
 * @method void setDBVersion(string $DBVersion) 设置数据库版本信息，可通过DescribeProductConfig接口获取。
 * @method integer getPid() 获取产品ID，可通过DescribeProductConfig接口获取。
 * @method void setPid(integer $Pid) 设置产品ID，可通过DescribeProductConfig接口获取。
 * @method string getPayMode() 获取付费模式，POST-按量计费 PRE-包年包月
 * @method void setPayMode(string $PayMode) 设置付费模式，POST-按量计费 PRE-包年包月
 * @method string getCurrency() 获取付费模式，CNY-人民币 USD-美元
 * @method void setCurrency(string $Currency) 设置付费模式，CNY-人民币 USD-美元
 */
class DescribeSpecSellStatusRequest extends AbstractModel
{
    /**
     * @var string 可用区英文ID，形如ap-guangzhou-3
     */
    public $Zone;

    /**
     * @var array 实例规格ID，可通过DescribeProductConfig接口获取。
     */
    public $SpecIdSet;

    /**
     * @var string 数据库版本信息，可通过DescribeProductConfig接口获取。
     */
    public $DBVersion;

    /**
     * @var integer 产品ID，可通过DescribeProductConfig接口获取。
     */
    public $Pid;

    /**
     * @var string 付费模式，POST-按量计费 PRE-包年包月
     */
    public $PayMode;

    /**
     * @var string 付费模式，CNY-人民币 USD-美元
     */
    public $Currency;

    /**
     * @param string $Zone 可用区英文ID，形如ap-guangzhou-3
     * @param array $SpecIdSet 实例规格ID，可通过DescribeProductConfig接口获取。
     * @param string $DBVersion 数据库版本信息，可通过DescribeProductConfig接口获取。
     * @param integer $Pid 产品ID，可通过DescribeProductConfig接口获取。
     * @param string $PayMode 付费模式，POST-按量计费 PRE-包年包月
     * @param string $Currency 付费模式，CNY-人民币 USD-美元
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecIdSet",$param) and $param["SpecIdSet"] !== null) {
            $this->SpecIdSet = $param["SpecIdSet"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
