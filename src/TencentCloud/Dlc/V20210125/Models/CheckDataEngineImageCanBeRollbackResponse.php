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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDataEngineImageCanBeRollback返回参数结构体
 *
 * @method string getToRecordId() 获取回滚后日志记录id
 * @method void setToRecordId(string $ToRecordId) 设置回滚后日志记录id
 * @method string getFromRecordId() 获取回滚前日志记录id
 * @method void setFromRecordId(string $FromRecordId) 设置回滚前日志记录id
 * @method boolean getIsRollback() 获取是否能够回滚
 * @method void setIsRollback(boolean $IsRollback) 设置是否能够回滚
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckDataEngineImageCanBeRollbackResponse extends AbstractModel
{
    /**
     * @var string 回滚后日志记录id
     */
    public $ToRecordId;

    /**
     * @var string 回滚前日志记录id
     */
    public $FromRecordId;

    /**
     * @var boolean 是否能够回滚
     */
    public $IsRollback;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ToRecordId 回滚后日志记录id
     * @param string $FromRecordId 回滚前日志记录id
     * @param boolean $IsRollback 是否能够回滚
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
        if (array_key_exists("ToRecordId",$param) and $param["ToRecordId"] !== null) {
            $this->ToRecordId = $param["ToRecordId"];
        }

        if (array_key_exists("FromRecordId",$param) and $param["FromRecordId"] !== null) {
            $this->FromRecordId = $param["FromRecordId"];
        }

        if (array_key_exists("IsRollback",$param) and $param["IsRollback"] !== null) {
            $this->IsRollback = $param["IsRollback"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
