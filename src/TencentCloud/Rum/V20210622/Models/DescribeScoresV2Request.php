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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScoresV2请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method array getIDList() 获取<p>项目 ID 列表</p>
 * @method void setIDList(array $IDList) 设置<p>项目 ID 列表</p>
 * @method string getType() 获取<p>查询粒度，hour 或 day</p>
 * @method void setType(string $Type) 设置<p>查询粒度，hour 或 day</p>
 * @method string getEnv() 获取<p>环境</p>
 * @method void setEnv(string $Env) 设置<p>环境</p>
 */
class DescribeScoresV2Request extends AbstractModel
{
    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var array <p>项目 ID 列表</p>
     */
    public $IDList;

    /**
     * @var string <p>查询粒度，hour 或 day</p>
     */
    public $Type;

    /**
     * @var string <p>环境</p>
     */
    public $Env;

    /**
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param array $IDList <p>项目 ID 列表</p>
     * @param string $Type <p>查询粒度，hour 或 day</p>
     * @param string $Env <p>环境</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
