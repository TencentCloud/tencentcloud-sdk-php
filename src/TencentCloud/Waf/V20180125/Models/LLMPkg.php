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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型安全「后付费」资源信息（数据源：tb_waf_llm_resource），与 DescribeInstances 的 InstanceDetail.LLMPkg 保持一致
 *
 * @method string getResourceIds() 获取<p>资源id</p>
 * @method void setResourceIds(string $ResourceIds) 设置<p>资源id</p>
 * @method integer getStatus() 获取<p>状态</p>
 * @method void setStatus(integer $Status) 设置<p>状态</p>
 * @method integer getRegion() 获取<p>地域</p>
 * @method void setRegion(integer $Region) 设置<p>地域</p>
 * @method string getBeginTime() 获取<p>开始时间</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method integer getInquireNum() 获取<p>申请数量</p>
 * @method void setInquireNum(integer $InquireNum) 设置<p>申请数量</p>
 * @method string getInquireKey() 获取<p>计费项标签，如 sv_wsm_waf_llm_prompt_attack</p>
 * @method void setInquireKey(string $InquireKey) 设置<p>计费项标签，如 sv_wsm_waf_llm_prompt_attack</p>
 */
class LLMPkg extends AbstractModel
{
    /**
     * @var string <p>资源id</p>
     */
    public $ResourceIds;

    /**
     * @var integer <p>状态</p>
     */
    public $Status;

    /**
     * @var integer <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>开始时间</p>
     */
    public $BeginTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>申请数量</p>
     */
    public $InquireNum;

    /**
     * @var string <p>计费项标签，如 sv_wsm_waf_llm_prompt_attack</p>
     */
    public $InquireKey;

    /**
     * @param string $ResourceIds <p>资源id</p>
     * @param integer $Status <p>状态</p>
     * @param integer $Region <p>地域</p>
     * @param string $BeginTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param integer $InquireNum <p>申请数量</p>
     * @param string $InquireKey <p>计费项标签，如 sv_wsm_waf_llm_prompt_attack</p>
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }
    }
}
