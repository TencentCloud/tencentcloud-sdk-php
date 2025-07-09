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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAbnormalCallRecord请求参数结构体
 *
 * @method integer getAlarmRuleID() 获取告警规则ID
 * @method void setAlarmRuleID(integer $AlarmRuleID) 设置告警规则ID
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getAccessKey() 获取访问密钥
 * @method void setAccessKey(string $AccessKey) 设置访问密钥
 * @method string getSourceIP() 获取调用源IP
 * @method void setSourceIP(string $SourceIP) 设置调用源IP
 * @method Filter getFilter() 获取过滤器
 * @method void setFilter(Filter $Filter) 设置过滤器
 */
class DescribeAbnormalCallRecordRequest extends AbstractModel
{
    /**
     * @var integer 告警规则ID
     */
    public $AlarmRuleID;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string 访问密钥
     */
    public $AccessKey;

    /**
     * @var string 调用源IP
     */
    public $SourceIP;

    /**
     * @var Filter 过滤器
     */
    public $Filter;

    /**
     * @param integer $AlarmRuleID 告警规则ID
     * @param array $MemberId 集团账号的成员id
     * @param string $AccessKey 访问密钥
     * @param string $SourceIP 调用源IP
     * @param Filter $Filter 过滤器
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
        if (array_key_exists("AlarmRuleID",$param) and $param["AlarmRuleID"] !== null) {
            $this->AlarmRuleID = $param["AlarmRuleID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
