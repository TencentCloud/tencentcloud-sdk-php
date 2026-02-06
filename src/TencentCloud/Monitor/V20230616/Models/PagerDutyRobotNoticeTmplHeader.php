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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知自定义PagerDutyRobot模板中的请求体头部描述
 *
 * @method string getKey() 获取http请求中header的key
 * @method void setKey(string $Key) 设置http请求中header的key
 * @method array getValues() 获取http请求中header的value
 * @method void setValues(array $Values) 设置http请求中header的value
 */
class PagerDutyRobotNoticeTmplHeader extends AbstractModel
{
    /**
     * @var string http请求中header的key
     */
    public $Key;

    /**
     * @var array http请求中header的value
     */
    public $Values;

    /**
     * @param string $Key http请求中header的key
     * @param array $Values http请求中header的value
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
