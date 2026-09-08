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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源图谱实体关联的日志主题信息
 *
 * @method string getTopicId() 获取<p>日志主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p>
 * @method string getRegion() 获取<p>日志主题所在地域</p>
 * @method void setRegion(string $Region) 设置<p>日志主题所在地域</p>
 * @method string getLogType() 获取<p>日志类型</p><p>枚举值：</p><ul><li>bussinesslog： 业务日志</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型</p><p>枚举值：</p><ul><li>bussinesslog： 业务日志</li></ul>
 * @method integer getBizType() 获取<p>日志类型</p><p>枚举值：</p><ul><li>0： 日志主题</li><li>1： 指标主题</li></ul>
 * @method void setBizType(integer $BizType) 设置<p>日志类型</p><p>枚举值：</p><ul><li>0： 日志主题</li><li>1： 指标主题</li></ul>
 */
class ResourceGraphEntityRelatedTopic extends AbstractModel
{
    /**
     * @var string <p>日志主题id</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志主题所在地域</p>
     */
    public $Region;

    /**
     * @var string <p>日志类型</p><p>枚举值：</p><ul><li>bussinesslog： 业务日志</li></ul>
     */
    public $LogType;

    /**
     * @var integer <p>日志类型</p><p>枚举值：</p><ul><li>0： 日志主题</li><li>1： 指标主题</li></ul>
     */
    public $BizType;

    /**
     * @param string $TopicId <p>日志主题id</p>
     * @param string $Region <p>日志主题所在地域</p>
     * @param string $LogType <p>日志类型</p><p>枚举值：</p><ul><li>bussinesslog： 业务日志</li></ul>
     * @param integer $BizType <p>日志类型</p><p>枚举值：</p><ul><li>0： 日志主题</li><li>1： 指标主题</li></ul>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }
    }
}
