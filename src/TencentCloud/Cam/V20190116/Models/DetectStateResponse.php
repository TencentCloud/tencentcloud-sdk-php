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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectState返回参数结构体
 *
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getIdcard() 获取身份证号码
 * @method void setIdcard(string $Idcard) 设置身份证号码
 * @method string getBizToken() 获取业务token
 * @method void setBizToken(string $BizToken) 设置业务token
 * @method string getUrl() 获取ulr地址
 * @method void setUrl(string $Url) 设置ulr地址
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectStateResponse extends AbstractModel
{
    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 身份证号码
     */
    public $Idcard;

    /**
     * @var string 业务token
     */
    public $BizToken;

    /**
     * @var string ulr地址
     */
    public $Url;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Uin 用户uin
     * @param string $Name 名字
     * @param string $Idcard 身份证号码
     * @param string $BizToken 业务token
     * @param string $Url ulr地址
     * @param integer $RuleId 规则id
     * @param integer $Status 状态
     * @param string $Type 类型
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Idcard",$param) and $param["Idcard"] !== null) {
            $this->Idcard = $param["Idcard"];
        }

        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
