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
 * @method string getRegion() 获取事件的地域信息，没有则默认是EB所在的地域信息
 * @method void setRegion(string $Region) 设置事件的地域信息，没有则默认是EB所在的地域信息
 * @method string getStatus() 获取用于描述事件状态，非必须，默认是""
 * @method void setStatus(string $Status) 设置用于描述事件状态，非必须，默认是""
 * @method string getId() 获取事件的唯一id，用户侧主动上传则需要保证风格一致
 * @method void setId(string $Id) 设置事件的唯一id，用户侧主动上传则需要保证风格一致
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
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
     * @var string 事件的地域信息，没有则默认是EB所在的地域信息
     */
    public $Region;

    /**
     * @var string 用于描述事件状态，非必须，默认是""
     */
    public $Status;

    /**
     * @var string 事件的唯一id，用户侧主动上传则需要保证风格一致
     */
    public $Id;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @param string $Source 事件源的信息,新产品上报必须符合EB的规范
     * @param string $Data 事件数据，内容由创建事件的系统来控制，当前datacontenttype仅支持application/json;charset=utf-8，所以该字段是json字符串
     * @param string $Type 事件类型，可自定义，选填。云服务默认写 COS:Created:PostObject，用“：”分割类型字段
     * @param string $Subject 事件来源详细描述，可自定义，选填。云服务默认为标准qcs资源表示语法：qcs::dts:ap-guangzhou:appid/uin:xxx
     * @param integer $Time 事件发生的毫秒时间戳，
time.Now().UnixNano()/1e6
     * @param string $Region 事件的地域信息，没有则默认是EB所在的地域信息
     * @param string $Status 用于描述事件状态，非必须，默认是""
     * @param string $Id 事件的唯一id，用户侧主动上传则需要保证风格一致
     * @param array $TagList 标签列表
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
