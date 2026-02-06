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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDBSBackupSets返回参数结构体
 *
 * @method integer getDeleted() 获取<p>本次实际删除的备份数量</p>
 * @method void setDeleted(integer $Deleted) 设置<p>本次实际删除的备份数量</p>
 * @method boolean getIsSuccess() 获取<p>是否全部删除成功</p>
 * @method void setIsSuccess(boolean $IsSuccess) 设置<p>是否全部删除成功</p>
 * @method integer getTotal() 获取<p>需要删除的备份总数</p>
 * @method void setTotal(integer $Total) 设置<p>需要删除的备份总数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteDBSBackupSetsResponse extends AbstractModel
{
    /**
     * @var integer <p>本次实际删除的备份数量</p>
     */
    public $Deleted;

    /**
     * @var boolean <p>是否全部删除成功</p>
     */
    public $IsSuccess;

    /**
     * @var integer <p>需要删除的备份总数</p>
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Deleted <p>本次实际删除的备份数量</p>
     * @param boolean $IsSuccess <p>是否全部删除成功</p>
     * @param integer $Total <p>需要删除的备份总数</p>
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
        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("IsSuccess",$param) and $param["IsSuccess"] !== null) {
            $this->IsSuccess = $param["IsSuccess"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
