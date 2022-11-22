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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomRuleStatus请求参数结构体
 *
 * @method string getCustomId() 获取码规则ID
 * @method void setCustomId(string $CustomId) 设置码规则ID
 * @method integer getStatus() 获取码规则状态 0:未生效 1:已生效 -1:已失效
 * @method void setStatus(integer $Status) 设置码规则状态 0:未生效 1:已生效 -1:已失效
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 */
class ModifyCustomRuleStatusRequest extends AbstractModel
{
    /**
     * @var string 码规则ID
     */
    public $CustomId;

    /**
     * @var integer 码规则状态 0:未生效 1:已生效 -1:已失效
     */
    public $Status;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @param string $CustomId 码规则ID
     * @param integer $Status 码规则状态 0:未生效 1:已生效 -1:已失效
     * @param integer $CorpId 企业ID
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
        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }
    }
}
