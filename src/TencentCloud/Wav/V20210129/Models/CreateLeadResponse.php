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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLead返回参数结构体
 *
 * @method integer getBusinessCode() 获取线索处理状态码： 0-表示创建成功， 1-表示线索合并，2-表示线索重复
 * @method void setBusinessCode(integer $BusinessCode) 设置线索处理状态码： 0-表示创建成功， 1-表示线索合并，2-表示线索重复
 * @method string getBusinessMsg() 获取线索处理结果描述
 * @method void setBusinessMsg(string $BusinessMsg) 设置线索处理结果描述
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateLeadResponse extends AbstractModel
{
    /**
     * @var integer 线索处理状态码： 0-表示创建成功， 1-表示线索合并，2-表示线索重复
     */
    public $BusinessCode;

    /**
     * @var string 线索处理结果描述
     */
    public $BusinessMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BusinessCode 线索处理状态码： 0-表示创建成功， 1-表示线索合并，2-表示线索重复
     * @param string $BusinessMsg 线索处理结果描述
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessMsg",$param) and $param["BusinessMsg"] !== null) {
            $this->BusinessMsg = $param["BusinessMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
