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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUsageByDate请求参数结构体
 *
 * @method array getBizNameList() 获取需要查询的业务类型名字列表
- asr_rt 实时识别
- asr_rec 录音文件识别
 * @method void setBizNameList(array $BizNameList) 设置需要查询的业务类型名字列表
- asr_rt 实时识别
- asr_rec 录音文件识别
 * @method string getStartDate() 获取查询开始时间
开始时间包含当天，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
 * @method void setStartDate(string $StartDate) 设置查询开始时间
开始时间包含当天，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
 * @method string getEndDate() 获取查询结束时间
结束时间包含当天，，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
 * @method void setEndDate(string $EndDate) 设置查询结束时间
结束时间包含当天，，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
 */
class GetUsageByDateRequest extends AbstractModel
{
    /**
     * @var array 需要查询的业务类型名字列表
- asr_rt 实时识别
- asr_rec 录音文件识别
     */
    public $BizNameList;

    /**
     * @var string 查询开始时间
开始时间包含当天，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
     */
    public $StartDate;

    /**
     * @var string 查询结束时间
结束时间包含当天，，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
     */
    public $EndDate;

    /**
     * @param array $BizNameList 需要查询的业务类型名字列表
- asr_rt 实时识别
- asr_rec 录音文件识别
     * @param string $StartDate 查询开始时间
开始时间包含当天，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
     * @param string $EndDate 查询结束时间
结束时间包含当天，，支持 YYYY-MM-DD 日期以国内时区为准
开始时间到结束时间需要在3个月以内
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
        if (array_key_exists("BizNameList",$param) and $param["BizNameList"] !== null) {
            $this->BizNameList = $param["BizNameList"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
