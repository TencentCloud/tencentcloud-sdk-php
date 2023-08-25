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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryResourceDbBindStatus返回参数结构体
 *
 * @method integer getBindDbNums() 获取绑定DB数量。
 * @method void setBindDbNums(integer $BindDbNums) 设置绑定DB数量。
 * @method integer getUnbindDbNums() 获取未绑定DB数量。
 * @method void setUnbindDbNums(integer $UnbindDbNums) 设置未绑定DB数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryResourceDbBindStatusResponse extends AbstractModel
{
    /**
     * @var integer 绑定DB数量。
     */
    public $BindDbNums;

    /**
     * @var integer 未绑定DB数量。
     */
    public $UnbindDbNums;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BindDbNums 绑定DB数量。
     * @param integer $UnbindDbNums 未绑定DB数量。
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
        if (array_key_exists("BindDbNums",$param) and $param["BindDbNums"] !== null) {
            $this->BindDbNums = $param["BindDbNums"];
        }

        if (array_key_exists("UnbindDbNums",$param) and $param["UnbindDbNums"] !== null) {
            $this->UnbindDbNums = $param["UnbindDbNums"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
