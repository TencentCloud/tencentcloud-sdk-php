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
 * CreateTraceCodes返回参数结构体
 *
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method integer getActiveCnt() 获取导入成功码数量
 * @method void setActiveCnt(integer $ActiveCnt) 设置导入成功码数量
 * @method integer getCodeCnt() 获取批次码数量
 * @method void setCodeCnt(integer $CodeCnt) 设置批次码数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateTraceCodesResponse extends AbstractModel
{
    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var integer 导入成功码数量
     */
    public $ActiveCnt;

    /**
     * @var integer 批次码数量
     */
    public $CodeCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BatchId 批次ID
     * @param integer $ActiveCnt 导入成功码数量
     * @param integer $CodeCnt 批次码数量
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("ActiveCnt",$param) and $param["ActiveCnt"] !== null) {
            $this->ActiveCnt = $param["ActiveCnt"];
        }

        if (array_key_exists("CodeCnt",$param) and $param["CodeCnt"] !== null) {
            $this->CodeCnt = $param["CodeCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
