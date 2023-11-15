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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportAppMessage请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method MessageProfile getProfile() 获取消息定义
 * @method void setProfile(MessageProfile $Profile) 设置消息定义
 * @method integer getReportTs() 获取数据上报时间
 * @method void setReportTs(integer $ReportTs) 设置数据上报时间
 * @method string getProperties() 获取属性定义 - KV的json格式,有效字段为x-json:后的字段
 * @method void setProperties(string $Properties) 设置属性定义 - KV的json格式,有效字段为x-json:后的字段
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getEventSet() 获取事件定义 - KKV的json格式,有效字段为x-json:后的字段
 * @method void setEventSet(string $EventSet) 设置事件定义 - KKV的json格式,有效字段为x-json:后的字段
 * @method string getServiceSet() 获取服务定义 - KKV的json格式,有效字段为x-json:后的字段
 * @method void setServiceSet(string $ServiceSet) 设置服务定义 - KKV的json格式,有效字段为x-json:后的字段
 * @method string getExtendTwo() 获取扩展字段2，如：算法上报id，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
 * @method void setExtendTwo(string $ExtendTwo) 设置扩展字段2，如：算法上报id，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
 * @method string getEcho() 获取透传信息，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
 * @method void setEcho(string $Echo) 设置透传信息，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
 */
class ReportAppMessageRequest extends AbstractModel
{
    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var MessageProfile 消息定义
     */
    public $Profile;

    /**
     * @var integer 数据上报时间
     */
    public $ReportTs;

    /**
     * @var string 属性定义 - KV的json格式,有效字段为x-json:后的字段
     */
    public $Properties;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 事件定义 - KKV的json格式,有效字段为x-json:后的字段
     */
    public $EventSet;

    /**
     * @var string 服务定义 - KKV的json格式,有效字段为x-json:后的字段
     */
    public $ServiceSet;

    /**
     * @var string 扩展字段2，如：算法上报id，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
     */
    public $ExtendTwo;

    /**
     * @var string 透传信息，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
     */
    public $Echo;

    /**
     * @param integer $WorkspaceId 工作空间Id
     * @param MessageProfile $Profile 消息定义
     * @param integer $ReportTs 数据上报时间
     * @param string $Properties 属性定义 - KV的json格式,有效字段为x-json:后的字段
     * @param string $ApplicationToken 应用token
     * @param string $EventSet 事件定义 - KKV的json格式,有效字段为x-json:后的字段
     * @param string $ServiceSet 服务定义 - KKV的json格式,有效字段为x-json:后的字段
     * @param string $ExtendTwo 扩展字段2，如：算法上报id，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
     * @param string $Echo 透传信息，若为json格式，需传x-json:{}，有效字段为x-json:后的字段
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new MessageProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("ReportTs",$param) and $param["ReportTs"] !== null) {
            $this->ReportTs = $param["ReportTs"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("EventSet",$param) and $param["EventSet"] !== null) {
            $this->EventSet = $param["EventSet"];
        }

        if (array_key_exists("ServiceSet",$param) and $param["ServiceSet"] !== null) {
            $this->ServiceSet = $param["ServiceSet"];
        }

        if (array_key_exists("ExtendTwo",$param) and $param["ExtendTwo"] !== null) {
            $this->ExtendTwo = $param["ExtendTwo"];
        }

        if (array_key_exists("Echo",$param) and $param["Echo"] !== null) {
            $this->Echo = $param["Echo"];
        }
    }
}
