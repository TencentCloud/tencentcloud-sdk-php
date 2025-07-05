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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时日志投递到腾讯云 CLS 的配置信息。
 *
 * @method string getLogSetId() 获取腾讯云 CLS 日志集 ID。	
 * @method void setLogSetId(string $LogSetId) 设置腾讯云 CLS 日志集 ID。	
 * @method string getTopicId() 获取腾讯云 CLS 日志主题 ID。
 * @method void setTopicId(string $TopicId) 设置腾讯云 CLS 日志主题 ID。
 * @method string getLogSetRegion() 获取腾讯云 CLS 日志集所在的地域。
 * @method void setLogSetRegion(string $LogSetRegion) 设置腾讯云 CLS 日志集所在的地域。
 */
class CLSTopic extends AbstractModel
{
    /**
     * @var string 腾讯云 CLS 日志集 ID。	
     */
    public $LogSetId;

    /**
     * @var string 腾讯云 CLS 日志主题 ID。
     */
    public $TopicId;

    /**
     * @var string 腾讯云 CLS 日志集所在的地域。
     */
    public $LogSetRegion;

    /**
     * @param string $LogSetId 腾讯云 CLS 日志集 ID。	
     * @param string $TopicId 腾讯云 CLS 日志主题 ID。
     * @param string $LogSetRegion 腾讯云 CLS 日志集所在的地域。
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }
    }
}
