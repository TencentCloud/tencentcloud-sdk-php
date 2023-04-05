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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLicenseStat返回参数结构体
 *
 * @method integer getValid() 获取有效授权
 * @method void setValid(integer $Valid) 设置有效授权
 * @method integer getBound() 获取已绑定授权
 * @method void setBound(integer $Bound) 设置已绑定授权
 * @method integer getUnBound() 获取未绑定授权
 * @method void setUnBound(integer $UnBound) 设置未绑定授权
 * @method integer getExpire() 获取过期授权
 * @method void setExpire(integer $Expire) 设置过期授权
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetLicenseStatResponse extends AbstractModel
{
    /**
     * @var integer 有效授权
     */
    public $Valid;

    /**
     * @var integer 已绑定授权
     */
    public $Bound;

    /**
     * @var integer 未绑定授权
     */
    public $UnBound;

    /**
     * @var integer 过期授权
     */
    public $Expire;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Valid 有效授权
     * @param integer $Bound 已绑定授权
     * @param integer $UnBound 未绑定授权
     * @param integer $Expire 过期授权
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
        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }

        if (array_key_exists("Bound",$param) and $param["Bound"] !== null) {
            $this->Bound = $param["Bound"];
        }

        if (array_key_exists("UnBound",$param) and $param["UnBound"] !== null) {
            $this->UnBound = $param["UnBound"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
