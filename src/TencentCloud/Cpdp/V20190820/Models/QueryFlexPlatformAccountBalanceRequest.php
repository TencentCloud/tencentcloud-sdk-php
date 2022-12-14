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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFlexPlatformAccountBalance请求参数结构体
 *
 * @method string getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method void setIncomeType(string $IncomeType) 设置收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method string getSnapshotDate() 获取快照日期。格式yyyy-MM-dd
 * @method void setSnapshotDate(string $SnapshotDate) 设置快照日期。格式yyyy-MM-dd
 */
class QueryFlexPlatformAccountBalanceRequest extends AbstractModel
{
    /**
     * @var string 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     */
    public $IncomeType;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @var string 快照日期。格式yyyy-MM-dd
     */
    public $SnapshotDate;

    /**
     * @param string $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     * @param string $SnapshotDate 快照日期。格式yyyy-MM-dd
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
        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("SnapshotDate",$param) and $param["SnapshotDate"] !== null) {
            $this->SnapshotDate = $param["SnapshotDate"];
        }
    }
}
