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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI转人工配置项
 *
 * @method string getTransferFunctionName() 获取转人工的function calling 名称
 * @method void setTransferFunctionName(string $TransferFunctionName) 设置转人工的function calling 名称
 * @method string getTransferFunctionDesc() 获取TransferFunctionEnable为true时生效；transfer_to_human function calling的desc，默认为 "Transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so."
 * @method void setTransferFunctionDesc(string $TransferFunctionDesc) 设置TransferFunctionEnable为true时生效；transfer_to_human function calling的desc，默认为 "Transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so."
 * @method integer getTransferSkillGroupId() 获取转人工的技能组ID
 * @method void setTransferSkillGroupId(integer $TransferSkillGroupId) 设置转人工的技能组ID
 */
class AITransferItem extends AbstractModel
{
    /**
     * @var string 转人工的function calling 名称
     */
    public $TransferFunctionName;

    /**
     * @var string TransferFunctionEnable为true时生效；transfer_to_human function calling的desc，默认为 "Transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so."
     */
    public $TransferFunctionDesc;

    /**
     * @var integer 转人工的技能组ID
     */
    public $TransferSkillGroupId;

    /**
     * @param string $TransferFunctionName 转人工的function calling 名称
     * @param string $TransferFunctionDesc TransferFunctionEnable为true时生效；transfer_to_human function calling的desc，默认为 "Transfer to human when the user has to transfer to human (like says transfer to human) or you are instructed to do so."
     * @param integer $TransferSkillGroupId 转人工的技能组ID
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
        if (array_key_exists("TransferFunctionName",$param) and $param["TransferFunctionName"] !== null) {
            $this->TransferFunctionName = $param["TransferFunctionName"];
        }

        if (array_key_exists("TransferFunctionDesc",$param) and $param["TransferFunctionDesc"] !== null) {
            $this->TransferFunctionDesc = $param["TransferFunctionDesc"];
        }

        if (array_key_exists("TransferSkillGroupId",$param) and $param["TransferSkillGroupId"] !== null) {
            $this->TransferSkillGroupId = $param["TransferSkillGroupId"];
        }
    }
}
