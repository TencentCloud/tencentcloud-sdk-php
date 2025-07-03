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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckInstanceName返回参数结构体
 *
 * @method boolean getIsValidated() 获取检查结果，true为合法，false为非法
 * @method void setIsValidated(boolean $IsValidated) 设置检查结果，true为合法，false为非法
 * @method integer getDetailCode() 获取1: Illegal（名称非法）, 2:Reserved（名字保留）, 3:Existed（名字已存在）
 * @method void setDetailCode(integer $DetailCode) 设置1: Illegal（名称非法）, 2:Reserved（名字保留）, 3:Existed（名字已存在）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckInstanceNameResponse extends AbstractModel
{
    /**
     * @var boolean 检查结果，true为合法，false为非法
     */
    public $IsValidated;

    /**
     * @var integer 1: Illegal（名称非法）, 2:Reserved（名字保留）, 3:Existed（名字已存在）
     */
    public $DetailCode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsValidated 检查结果，true为合法，false为非法
     * @param integer $DetailCode 1: Illegal（名称非法）, 2:Reserved（名字保留）, 3:Existed（名字已存在）
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IsValidated",$param) and $param["IsValidated"] !== null) {
            $this->IsValidated = $param["IsValidated"];
        }

        if (array_key_exists("DetailCode",$param) and $param["DetailCode"] !== null) {
            $this->DetailCode = $param["DetailCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
