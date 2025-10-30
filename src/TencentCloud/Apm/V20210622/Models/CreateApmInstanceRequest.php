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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApmInstance请求参数结构体
 *
 * @method string getName() 获取业务系统名
 * @method void setName(string $Name) 设置业务系统名
 * @method string getDescription() 获取业务系统描述信息
 * @method void setDescription(string $Description) 设置业务系统描述信息
 * @method integer getTraceDuration() 获取Trace 数据保存时长（单位：天，默认存储时长为3天）
 * @method void setTraceDuration(integer $TraceDuration) 设置Trace 数据保存时长（单位：天，默认存储时长为3天）
 * @method array getTags() 获取业务系统 Tag 列表
 * @method void setTags(array $Tags) 设置业务系统 Tag 列表
 * @method integer getSpanDailyCounters() 获取业务系统上报额度值，默认赋值为0表示不限制上报额度，已废弃
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置业务系统上报额度值，默认赋值为0表示不限制上报额度，已废弃
 * @method integer getPayMode() 获取业务系统的计费模式（0=按量付费，1=预付费）
 * @method void setPayMode(integer $PayMode) 设置业务系统的计费模式（0=按量付费，1=预付费）
 * @method integer getFree() 获取是否为免费版业务系统（0=付费版；1=TSF 受限免费版；2=免费版）
 * @method void setFree(integer $Free) 设置是否为免费版业务系统（0=付费版；1=TSF 受限免费版；2=免费版）
 */
class CreateApmInstanceRequest extends AbstractModel
{
    /**
     * @var string 业务系统名
     */
    public $Name;

    /**
     * @var string 业务系统描述信息
     */
    public $Description;

    /**
     * @var integer Trace 数据保存时长（单位：天，默认存储时长为3天）
     */
    public $TraceDuration;

    /**
     * @var array 业务系统 Tag 列表
     */
    public $Tags;

    /**
     * @var integer 业务系统上报额度值，默认赋值为0表示不限制上报额度，已废弃
     */
    public $SpanDailyCounters;

    /**
     * @var integer 业务系统的计费模式（0=按量付费，1=预付费）
     */
    public $PayMode;

    /**
     * @var integer 是否为免费版业务系统（0=付费版；1=TSF 受限免费版；2=免费版）
     */
    public $Free;

    /**
     * @param string $Name 业务系统名
     * @param string $Description 业务系统描述信息
     * @param integer $TraceDuration Trace 数据保存时长（单位：天，默认存储时长为3天）
     * @param array $Tags 业务系统 Tag 列表
     * @param integer $SpanDailyCounters 业务系统上报额度值，默认赋值为0表示不限制上报额度，已废弃
     * @param integer $PayMode 业务系统的计费模式（0=按量付费，1=预付费）
     * @param integer $Free 是否为免费版业务系统（0=付费版；1=TSF 受限免费版；2=免费版）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }
    }
}
