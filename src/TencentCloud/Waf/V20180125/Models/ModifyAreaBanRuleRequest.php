<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * ModifyAreaBanRule请求参数结构体
 *
 * @method string getDomain() 获取需要修改的域名
 * @method void setDomain(string $Domain) 设置需要修改的域名
 * @method array getAreas() 获取需要新增的封禁地域
 * @method void setAreas(array $Areas) 设置需要新增的封禁地域
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getLang() 获取地域信息的语言，支持cn、en，默认为中文cn
 * @method void setLang(string $Lang) 设置地域信息的语言，支持cn、en，默认为中文cn
 */
class ModifyAreaBanRuleRequest extends AbstractModel
{
    /**
     * @var string 需要修改的域名
     */
    public $Domain;

    /**
     * @var array 需要新增的封禁地域
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
     * @var string 地域信息的语言，支持cn、en，默认为中文cn
     */
    public $Lang;

    /**
     * @param string $Domain 需要修改的域名
     * @param array $Areas 需要新增的封禁地域
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
