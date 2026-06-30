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
 * UpdateEventBus请求参数结构体
 *
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method string getDescription() 获取<p>事件集描述，不限字符类型，200字符描述以内</p>
 * @method void setDescription(string $Description) 设置<p>事件集描述，不限字符类型，200字符描述以内</p>
 * @method string getEventBusName() 获取<p>事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符</p>
 * @method void setEventBusName(string $EventBusName) 设置<p>事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符</p>
 * @method integer getSaveDays() 获取<p>事件存储时长</p><p>单位：day</p>
 * @method void setSaveDays(integer $SaveDays) 设置<p>事件存储时长</p><p>单位：day</p>
 * @method string getLogTopicId() 获取<p>事件存储主题ID</p>
 * @method void setLogTopicId(string $LogTopicId) 设置<p>事件存储主题ID</p>
 * @method boolean getEnableStore() 获取<p>是否开启存储</p>
 * @method void setEnableStore(boolean $EnableStore) 设置<p>是否开启存储</p>
 */
class UpdateEventBusRequest extends AbstractModel
{
    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var string <p>事件集描述，不限字符类型，200字符描述以内</p>
     */
    public $Description;

    /**
     * @var string <p>事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符</p>
     */
    public $EventBusName;

    /**
     * @var integer <p>事件存储时长</p><p>单位：day</p>
     */
    public $SaveDays;

    /**
     * @var string <p>事件存储主题ID</p>
     */
    public $LogTopicId;

    /**
     * @var boolean <p>是否开启存储</p>
     */
    public $EnableStore;

    /**
     * @param string $EventBusId <p>事件集ID</p>
     * @param string $Description <p>事件集描述，不限字符类型，200字符描述以内</p>
     * @param string $EventBusName <p>事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符</p>
     * @param integer $SaveDays <p>事件存储时长</p><p>单位：day</p>
     * @param string $LogTopicId <p>事件存储主题ID</p>
     * @param boolean $EnableStore <p>是否开启存储</p>
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("EnableStore",$param) and $param["EnableStore"] !== null) {
            $this->EnableStore = $param["EnableStore"];
        }
    }
}
