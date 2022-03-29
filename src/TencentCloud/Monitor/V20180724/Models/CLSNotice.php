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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知中的推送CLS操作
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getLogSetId() 获取日志集Id
 * @method void setLogSetId(string $LogSetId) 设置日志集Id
 * @method string getTopicId() 获取主题Id
 * @method void setTopicId(string $TopicId) 设置主题Id
 * @method integer getEnable() 获取启停状态，可不传，默认启用。0=停用，1=启用
 * @method void setEnable(integer $Enable) 设置启停状态，可不传，默认启用。0=停用，1=启用
 */
class CLSNotice extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 日志集Id
     */
    public $LogSetId;

    /**
     * @var string 主题Id
     */
    public $TopicId;

    /**
     * @var integer 启停状态，可不传，默认启用。0=停用，1=启用
     */
    public $Enable;

    /**
     * @param string $Region 地域
     * @param string $LogSetId 日志集Id
     * @param string $TopicId 主题Id
     * @param integer $Enable 启停状态，可不传，默认启用。0=停用，1=启用
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
