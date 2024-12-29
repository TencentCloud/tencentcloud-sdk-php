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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域封禁规则详情
 *
 * @method integer getStatus() 获取状态 0：未开启地域封禁、1：开启地域封禁
 * @method void setStatus(integer $Status) 设置状态 0：未开启地域封禁、1：开启地域封禁
 * @method string getSource() 获取数据来源 custom：自定义(默认)、batch：批量防护
 * @method void setSource(string $Source) 设置数据来源 custom：自定义(默认)、batch：批量防护
 * @method array getAreas() 获取配置的地域列表
 * @method void setAreas(array $Areas) 设置配置的地域列表
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getCronType() 获取如果是周期任务类型，那么表示周期的类型，支持 Week：按周、Month：按月
 * @method void setCronType(string $CronType) 设置如果是周期任务类型，那么表示周期的类型，支持 Week：按周、Month：按月
 * @method string getLang() 获取地域信息的语言，支持cn、en，默认为中文cn
 * @method void setLang(string $Lang) 设置地域信息的语言，支持cn、en，默认为中文cn
 */
class AreaBanRule extends AbstractModel
{
    /**
     * @var integer 状态 0：未开启地域封禁、1：开启地域封禁
     */
    public $Status;

    /**
     * @var string 数据来源 custom：自定义(默认)、batch：批量防护
     */
    public $Source;

    /**
     * @var array 配置的地域列表
     */
    public $Areas;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var string 如果是周期任务类型，那么表示周期的类型，支持 Week：按周、Month：按月
     */
    public $CronType;

    /**
     * @var string 地域信息的语言，支持cn、en，默认为中文cn
     */
    public $Lang;

    /**
     * @param integer $Status 状态 0：未开启地域封禁、1：开启地域封禁
     * @param string $Source 数据来源 custom：自定义(默认)、batch：批量防护
     * @param array $Areas 配置的地域列表
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param string $CronType 如果是周期任务类型，那么表示周期的类型，支持 Week：按周、Month：按月
     * @param string $Lang 地域信息的语言，支持cn、en，默认为中文cn
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = [];
            foreach ($param["Areas"] as $key => $value){
                $obj = new Area();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
