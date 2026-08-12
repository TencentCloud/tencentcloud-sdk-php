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
 * 高级镜像条件匹配（三个匹配串有且仅有一个非空）
 *
 * @method string getImageIDMatchString() 获取<p>镜像ID匹配串（三选一，有且仅有一个非空）</p>
 * @method void setImageIDMatchString(string $ImageIDMatchString) 设置<p>镜像ID匹配串（三选一，有且仅有一个非空）</p>
 * @method string getImageNameMatchString() 获取<p>镜像名匹配串（三选一，有且仅有一个非空）</p>
 * @method void setImageNameMatchString(string $ImageNameMatchString) 设置<p>镜像名匹配串（三选一，有且仅有一个非空）</p>
 * @method string getImageAddressMatchString() 获取<p>镜像地址匹配串（三选一，有且仅有一个非空）</p>
 * @method void setImageAddressMatchString(string $ImageAddressMatchString) 设置<p>镜像地址匹配串（三选一，有且仅有一个非空）</p>
 * @method string getMatchType() 获取<p>匹配条件，取值：EQUALS-等于/NOT_EQUALS-不等于/STARTS_WITH-以…开头/NOT_STARTS_WITH-不以…开头/ENDS_WITH-以…结尾/NOT_ENDS_WITH-不以…结尾/CONTAINS-包含/NOT_CONTAINS-不包含</p>
 * @method void setMatchType(string $MatchType) 设置<p>匹配条件，取值：EQUALS-等于/NOT_EQUALS-不等于/STARTS_WITH-以…开头/NOT_STARTS_WITH-不以…开头/ENDS_WITH-以…结尾/NOT_ENDS_WITH-不以…结尾/CONTAINS-包含/NOT_CONTAINS-不包含</p>
 */
class ConditionMatch extends AbstractModel
{
    /**
     * @var string <p>镜像ID匹配串（三选一，有且仅有一个非空）</p>
     */
    public $ImageIDMatchString;

    /**
     * @var string <p>镜像名匹配串（三选一，有且仅有一个非空）</p>
     */
    public $ImageNameMatchString;

    /**
     * @var string <p>镜像地址匹配串（三选一，有且仅有一个非空）</p>
     */
    public $ImageAddressMatchString;

    /**
     * @var string <p>匹配条件，取值：EQUALS-等于/NOT_EQUALS-不等于/STARTS_WITH-以…开头/NOT_STARTS_WITH-不以…开头/ENDS_WITH-以…结尾/NOT_ENDS_WITH-不以…结尾/CONTAINS-包含/NOT_CONTAINS-不包含</p>
     */
    public $MatchType;

    /**
     * @param string $ImageIDMatchString <p>镜像ID匹配串（三选一，有且仅有一个非空）</p>
     * @param string $ImageNameMatchString <p>镜像名匹配串（三选一，有且仅有一个非空）</p>
     * @param string $ImageAddressMatchString <p>镜像地址匹配串（三选一，有且仅有一个非空）</p>
     * @param string $MatchType <p>匹配条件，取值：EQUALS-等于/NOT_EQUALS-不等于/STARTS_WITH-以…开头/NOT_STARTS_WITH-不以…开头/ENDS_WITH-以…结尾/NOT_ENDS_WITH-不以…结尾/CONTAINS-包含/NOT_CONTAINS-不包含</p>
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
        if (array_key_exists("ImageIDMatchString",$param) and $param["ImageIDMatchString"] !== null) {
            $this->ImageIDMatchString = $param["ImageIDMatchString"];
        }

        if (array_key_exists("ImageNameMatchString",$param) and $param["ImageNameMatchString"] !== null) {
            $this->ImageNameMatchString = $param["ImageNameMatchString"];
        }

        if (array_key_exists("ImageAddressMatchString",$param) and $param["ImageAddressMatchString"] !== null) {
            $this->ImageAddressMatchString = $param["ImageAddressMatchString"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }
    }
}
