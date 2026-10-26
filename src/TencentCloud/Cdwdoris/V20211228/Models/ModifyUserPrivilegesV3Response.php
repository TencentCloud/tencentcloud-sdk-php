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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserPrivilegesV3返回参数结构体
 *
 * @method string getErrorMsg() 获取<p>错误信息，为空就是没有错误</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误信息，为空就是没有错误</p>
 * @method string getInstanceId() 获取<p>集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群id</p>
 * @method SkippedPrivilegeItem getSkippedItems() 获取<p>因库/表已删除而被跳过的目标；ErrorMsg 为空时不代表失败，前端需弹窗提示</p>
 * @method void setSkippedItems(SkippedPrivilegeItem $SkippedItems) 设置<p>因库/表已删除而被跳过的目标；ErrorMsg 为空时不代表失败，前端需弹窗提示</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyUserPrivilegesV3Response extends AbstractModel
{
    /**
     * @var string <p>错误信息，为空就是没有错误</p>
     */
    public $ErrorMsg;

    /**
     * @var string <p>集群id</p>
     */
    public $InstanceId;

    /**
     * @var SkippedPrivilegeItem <p>因库/表已删除而被跳过的目标；ErrorMsg 为空时不代表失败，前端需弹窗提示</p>
     */
    public $SkippedItems;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ErrorMsg <p>错误信息，为空就是没有错误</p>
     * @param string $InstanceId <p>集群id</p>
     * @param SkippedPrivilegeItem $SkippedItems <p>因库/表已删除而被跳过的目标；ErrorMsg 为空时不代表失败，前端需弹窗提示</p>
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
        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SkippedItems",$param) and $param["SkippedItems"] !== null) {
            $this->SkippedItems = new SkippedPrivilegeItem();
            $this->SkippedItems->deserialize($param["SkippedItems"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
