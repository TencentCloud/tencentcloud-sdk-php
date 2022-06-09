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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlySecMiniAppScanTaskStatus返回参数结构体
 *
 * @method integer getRet() 获取返回值, 0:成功, 其他值请查看“返回值”定义
 * @method void setRet(integer $Ret) 设置返回值, 0:成功, 其他值请查看“返回值”定义
 * @method integer getStatus() 获取诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
 * @method void setStatus(integer $Status) 设置诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
 * @method integer getErrno() 获取诊断失败错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrno(integer $Errno) 设置诊断失败错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMiniAppName() 获取小程序名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniAppName(string $MiniAppName) 设置小程序名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMiniAppVersion() 获取小程序版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniAppVersion(string $MiniAppVersion) 设置小程序版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlySecMiniAppScanTaskStatusResponse extends AbstractModel
{
    /**
     * @var integer 返回值, 0:成功, 其他值请查看“返回值”定义
     */
    public $Ret;

    /**
     * @var integer 诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
     */
    public $Status;

    /**
     * @var integer 诊断失败错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errno;

    /**
     * @var string 小程序名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniAppName;

    /**
     * @var string 小程序版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniAppVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Ret 返回值, 0:成功, 其他值请查看“返回值”定义
     * @param integer $Status 诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
     * @param integer $Errno 诊断失败错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MiniAppName 小程序名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MiniAppVersion 小程序版本
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Ret",$param) and $param["Ret"] !== null) {
            $this->Ret = $param["Ret"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Errno",$param) and $param["Errno"] !== null) {
            $this->Errno = $param["Errno"];
        }

        if (array_key_exists("MiniAppName",$param) and $param["MiniAppName"] !== null) {
            $this->MiniAppName = $param["MiniAppName"];
        }

        if (array_key_exists("MiniAppVersion",$param) and $param["MiniAppVersion"] !== null) {
            $this->MiniAppVersion = $param["MiniAppVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
