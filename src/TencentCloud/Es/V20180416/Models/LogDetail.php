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
 * 智能运维日志详情
 *
 * @method string getKey() 获取日志异常名
 * @method void setKey(string $Key) 设置日志异常名
 * @method string getAdvise() 获取日志异常处理建议
 * @method void setAdvise(string $Advise) 设置日志异常处理建议
 * @method integer getCount() 获取日志异常名出现次数
 * @method void setCount(integer $Count) 设置日志异常名出现次数
 */
class LogDetail extends AbstractModel
{
    /**
     * @var string 日志异常名
     */
    public $Key;

    /**
     * @var string 日志异常处理建议
     */
    public $Advise;

    /**
     * @var integer 日志异常名出现次数
     */
    public $Count;

    /**
     * @param string $Key 日志异常名
     * @param string $Advise 日志异常处理建议
     * @param integer $Count 日志异常名出现次数
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Advise",$param) and $param["Advise"] !== null) {
            $this->Advise = $param["Advise"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
