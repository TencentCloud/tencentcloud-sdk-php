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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTranscodeTotalInfo请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method void setEndTime(string $EndTime) 设置结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method array getPushDomains() 获取推流域名列表，若不填，表示查询所有域名总体数据。
指定域名时返回1小时粒度数据。
 * @method void setPushDomains(array $PushDomains) 设置推流域名列表，若不填，表示查询所有域名总体数据。
指定域名时返回1小时粒度数据。
 * @method string getMainlandOrOversea() 获取可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
默认：查询全球地区（境内+境外）的数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
默认：查询全球地区（境内+境外）的数据。
 */
class DescribeLiveTranscodeTotalInfoRequest extends AbstractModel
{
    /**
     * @var string 开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     */
    public $EndTime;

    /**
     * @var array 推流域名列表，若不填，表示查询所有域名总体数据。
指定域名时返回1小时粒度数据。
     */
    public $PushDomains;

    /**
     * @var string 可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
默认：查询全球地区（境内+境外）的数据。
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime 开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     * @param array $PushDomains 推流域名列表，若不填，表示查询所有域名总体数据。
指定域名时返回1小时粒度数据。
     * @param string $MainlandOrOversea 可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
默认：查询全球地区（境内+境外）的数据。
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

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
