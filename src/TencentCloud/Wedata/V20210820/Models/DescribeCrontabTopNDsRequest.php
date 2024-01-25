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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrontabTopNDs请求参数结构体
 *
 * @method string getCrontabExp() 获取crontabExp
 * @method void setCrontabExp(string $CrontabExp) 设置crontabExp
 * @method integer getTopN() 获取topN
 * @method void setTopN(integer $TopN) 设置topN
 * @method string getStartIsoTime() 获取StartIsoTime
 * @method void setStartIsoTime(string $StartIsoTime) 设置StartIsoTime
 */
class DescribeCrontabTopNDsRequest extends AbstractModel
{
    /**
     * @var string crontabExp
     */
    public $CrontabExp;

    /**
     * @var integer topN
     */
    public $TopN;

    /**
     * @var string StartIsoTime
     */
    public $StartIsoTime;

    /**
     * @param string $CrontabExp crontabExp
     * @param integer $TopN topN
     * @param string $StartIsoTime StartIsoTime
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
        if (array_key_exists("CrontabExp",$param) and $param["CrontabExp"] !== null) {
            $this->CrontabExp = $param["CrontabExp"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }

        if (array_key_exists("StartIsoTime",$param) and $param["StartIsoTime"] !== null) {
            $this->StartIsoTime = $param["StartIsoTime"];
        }
    }
}
