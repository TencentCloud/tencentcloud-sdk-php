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
 * CreateEventBus请求参数结构体
 *
 * @method string getEventBusName() 获取<p>事件集名称，只能包含字母、中文、数字、下划线、连字符，以字母/中文开头，以数字、字母或中文结尾，2~60个字符</p>
 * @method void setEventBusName(string $EventBusName) 设置<p>事件集名称，只能包含字母、中文、数字、下划线、连字符，以字母/中文开头，以数字、字母或中文结尾，2~60个字符</p>
 * @method string getDescription() 获取<p>事件集描述，只能包含数字、中英文及常用标点符号，不超过200个字符</p>
 * @method void setDescription(string $Description) 设置<p>事件集描述，只能包含数字、中英文及常用标点符号，不超过200个字符</p>
 * @method integer getSaveDays() 获取<p>事件存储时长</p><p>单位：day</p>
 * @method void setSaveDays(integer $SaveDays) 设置<p>事件存储时长</p><p>单位：day</p>
 * @method boolean getEnableStore() 获取<p>是否开启事件存储</p>
 * @method void setEnableStore(boolean $EnableStore) 设置<p>是否开启事件存储</p>
 */
class CreateEventBusRequest extends AbstractModel
{
    /**
     * @var string <p>事件集名称，只能包含字母、中文、数字、下划线、连字符，以字母/中文开头，以数字、字母或中文结尾，2~60个字符</p>
     */
    public $EventBusName;

    /**
     * @var string <p>事件集描述，只能包含数字、中英文及常用标点符号，不超过200个字符</p>
     */
    public $Description;

    /**
     * @var integer <p>事件存储时长</p><p>单位：day</p>
     */
    public $SaveDays;

    /**
     * @var boolean <p>是否开启事件存储</p>
     */
    public $EnableStore;

    /**
     * @param string $EventBusName <p>事件集名称，只能包含字母、中文、数字、下划线、连字符，以字母/中文开头，以数字、字母或中文结尾，2~60个字符</p>
     * @param string $Description <p>事件集描述，只能包含数字、中英文及常用标点符号，不超过200个字符</p>
     * @param integer $SaveDays <p>事件存储时长</p><p>单位：day</p>
     * @param boolean $EnableStore <p>是否开启事件存储</p>
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
        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("EnableStore",$param) and $param["EnableStore"] !== null) {
            $this->EnableStore = $param["EnableStore"];
        }
    }
}
