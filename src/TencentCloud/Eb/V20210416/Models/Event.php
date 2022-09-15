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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * eb event信息
 *
 * @method string getSource() 获取事件源的信息,新产品上报必须符合EB的规范
 * @method void setSource(string $Source) 设置事件源的信息,新产品上报必须符合EB的规范
 * @method string getData() 获取事件数据，内容由创建事件的系统来控制，当前datacontenttype仅支持application/json;charset=utf-8，所以该字段是json字符串
 * @method void setData(string $Data) 设置事件数据，内容由创建事件的系统来控制，当前datacontenttype仅支持application/json;charset=utf-8，所以该字段是json字符串
 * @method string getType() 获取事件类型，可自定义，选填。云服务默认写 COS:Created:PostObject，用“：”分割类型字段
 * @method void setType(string $Type) 设置事件类型，可自定义，选填。云服务默认写 COS:Created:PostObject，用“：”分割类型字段
 * @method string getSubject() 获取事件来源详细描述，可自定义，选填。云服务默认为标准qcs资源表示语法：qcs::dts:ap-guangzhou:appid/uin:xxx
 * @method void setSubject(string $Subject) 设置事件来源详细描述，可自定义，选填。云服务默认为标准qcs资源表示语法：qcs::dts:ap-guangzhou:appid/uin:xxx
 * @method integer getTime() 获取事件发生的毫秒时间戳，
time.Now().UnixNano()/1e6
 * @method void setTime(integer $Time) 设置事件发生的毫秒时间戳，
time.Now().UnixNano()/1e6
 */
class Event extends AbstractModel
{
    /**
     * @var string 事件源的信息,新产品上报必须符合EB的规范
     */
    public $Source;

    /**
     * @var string 事件数据，内容由创建事件的系统来控制，当前datacontenttype仅支持application/json;charset=utf-8，所以该字段是json字符串
     */
    public $Data;

    /**
     * @var string 事件类型，可自定义，选填。云服务默认写 COS:Created:PostObject，用“：”分割类型字段
     */
    public $Type;

    /**
     * @var string 事件来源详细描述，可自定义，选填。云服务默认为标准qcs资源表示语法：qcs::dts:ap-guangzhou:appid/uin:xxx
     */
    public $Subject;

    /**
     * @var integer 事件发生的毫秒时间戳，
time.Now().UnixNano()/1e6
     */
    public $Time;

    /**
     * @param string $Source 事件源的信息,新产品上报必须符合EB的规范
     * @param string $Data 事件数据，内容由创建事件的系统来控制，当前datacontenttype仅支持application/json;charset=utf-8，所以该字段是json字符串
     * @param string $Type 事件类型，可自定义，选填。云服务默认写 COS:Created:PostObject，用“：”分割类型字段
     * @param string $Subject 事件来源详细描述，可自定义，选填。云服务默认为标准qcs资源表示语法：qcs::dts:ap-guangzhou:appid/uin:xxx
     * @param integer $Time 事件发生的毫秒时间戳，
time.Now().UnixNano()/1e6
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
