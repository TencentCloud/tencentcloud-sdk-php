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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDomainName() 获取所查询域名名称
 * @method void setDomainName(string $DomainName) 设置所查询域名名称
 * @method boolean getAvailable() 获取是否能够注册
 * @method void setAvailable(boolean $Available) 设置是否能够注册
 * @method string getReason() 获取不能注册原因
 * @method void setReason(string $Reason) 设置不能注册原因
 * @method boolean getPremium() 获取是否是溢价词
 * @method void setPremium(boolean $Premium) 设置是否是溢价词
 * @method integer getPrice() 获取价格
 * @method void setPrice(integer $Price) 设置价格
 * @method boolean getBlackWord() 获取是否是敏感词
 * @method void setBlackWord(boolean $BlackWord) 设置是否是敏感词
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *CheckDomain返回参数结构体
 */
class CheckDomainResponse extends AbstractModel
{
    /**
     * @var string 所查询域名名称
     */
    public $DomainName;

    /**
     * @var boolean 是否能够注册
     */
    public $Available;

    /**
     * @var string 不能注册原因
     */
    public $Reason;

    /**
     * @var boolean 是否是溢价词
     */
    public $Premium;

    /**
     * @var integer 价格
     */
    public $Price;

    /**
     * @var boolean 是否是敏感词
     */
    public $BlackWord;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $DomainName 所查询域名名称
     * @param boolean $Available 是否能够注册
     * @param string $Reason 不能注册原因
     * @param boolean $Premium 是否是溢价词
     * @param integer $Price 价格
     * @param boolean $BlackWord 是否是敏感词
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Premium",$param) and $param["Premium"] !== null) {
            $this->Premium = $param["Premium"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("BlackWord",$param) and $param["BlackWord"] !== null) {
            $this->BlackWord = $param["BlackWord"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
