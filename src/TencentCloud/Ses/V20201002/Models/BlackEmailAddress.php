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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邮箱黑名单结构，包含被拉黑的邮箱地址和被拉黑时间，以及被拉黑的理由
 *
 * @method string getBounceTime() 获取邮箱被拉黑时间
 * @method void setBounceTime(string $BounceTime) 设置邮箱被拉黑时间
 * @method string getEmailAddress() 获取被拉黑的邮箱地址
 * @method void setEmailAddress(string $EmailAddress) 设置被拉黑的邮箱地址
 * @method string getIspDesc() 获取被拉黑的理由
 * @method void setIspDesc(string $IspDesc) 设置被拉黑的理由
 */
class BlackEmailAddress extends AbstractModel
{
    /**
     * @var string 邮箱被拉黑时间
     */
    public $BounceTime;

    /**
     * @var string 被拉黑的邮箱地址
     */
    public $EmailAddress;

    /**
     * @var string 被拉黑的理由
     */
    public $IspDesc;

    /**
     * @param string $BounceTime 邮箱被拉黑时间
     * @param string $EmailAddress 被拉黑的邮箱地址
     * @param string $IspDesc 被拉黑的理由
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
        if (array_key_exists("BounceTime",$param) and $param["BounceTime"] !== null) {
            $this->BounceTime = $param["BounceTime"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("IspDesc",$param) and $param["IspDesc"] !== null) {
            $this->IspDesc = $param["IspDesc"];
        }
    }
}
