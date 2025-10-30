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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiagnose请求参数结构体
 *
 * @method string getInstanceId() 获取ES实例ID
 * @method void setInstanceId(string $InstanceId) 设置ES实例ID
 * @method string getDate() 获取报告日期，格式20210301
 * @method void setDate(string $Date) 设置报告日期，格式20210301
 * @method integer getLimit() 获取报告返回份数
 * @method void setLimit(integer $Limit) 设置报告返回份数
 */
class DescribeDiagnoseRequest extends AbstractModel
{
    /**
     * @var string ES实例ID
     */
    public $InstanceId;

    /**
     * @var string 报告日期，格式20210301
     */
    public $Date;

    /**
     * @var integer 报告返回份数
     */
    public $Limit;

    /**
     * @param string $InstanceId ES实例ID
     * @param string $Date 报告日期，格式20210301
     * @param integer $Limit 报告返回份数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
