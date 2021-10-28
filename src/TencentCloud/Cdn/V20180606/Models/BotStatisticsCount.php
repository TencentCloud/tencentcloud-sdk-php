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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * session/ip维度的bot统计复杂对象
 *
 * @method integer getCount() 获取BOT次数
 * @method void setCount(integer $Count) 设置BOT次数
 * @method string getValue() 获取Top指标值,如果是ip维度就是ip如果是session维度就是域名
 * @method void setValue(string $Value) 设置Top指标值,如果是ip维度就是ip如果是session维度就是域名
 * @method string getCountry() 获取ip所在国家
 * @method void setCountry(string $Country) 设置ip所在国家
 * @method string getProvince() 获取ip所在省份
 * @method void setProvince(string $Province) 设置ip所在省份
 * @method string getIsp() 获取ip归属的idc
 * @method void setIsp(string $Isp) 设置ip归属的idc
 */
class BotStatisticsCount extends AbstractModel
{
    /**
     * @var integer BOT次数
     */
    public $Count;

    /**
     * @var string Top指标值,如果是ip维度就是ip如果是session维度就是域名
     */
    public $Value;

    /**
     * @var string ip所在国家
     */
    public $Country;

    /**
     * @var string ip所在省份
     */
    public $Province;

    /**
     * @var string ip归属的idc
     */
    public $Isp;

    /**
     * @param integer $Count BOT次数
     * @param string $Value Top指标值,如果是ip维度就是ip如果是session维度就是域名
     * @param string $Country ip所在国家
     * @param string $Province ip所在省份
     * @param string $Isp ip归属的idc
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }
    }
}
