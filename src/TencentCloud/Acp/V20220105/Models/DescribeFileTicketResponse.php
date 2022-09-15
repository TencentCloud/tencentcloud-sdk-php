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
namespace TencentCloud\Acp\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileTicket返回参数结构体
 *
 * @method integer getResult() 获取返回值, 0:成功, 其他值请查看“返回值”定义
 * @method void setResult(integer $Result) 设置返回值, 0:成功, 其他值请查看“返回值”定义
 * @method string getUploadUrl() 获取上传url(任务来源为2时:Post方法（100:apk,101:txt）, 任务来源为1时:put方法)
 * @method void setUploadUrl(string $UploadUrl) 设置上传url(任务来源为2时:Post方法（100:apk,101:txt）, 任务来源为1时:put方法)
 * @method string getUploadSign() 获取上传url鉴权信息(任务来源为1时上传需要, Authorization参数值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadSign(string $UploadSign) 设置上传url鉴权信息(任务来源为1时上传需要, Authorization参数值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFildID() 获取上传文件ID(任务来源为1时提交诊断任务需要)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFildID(string $FildID) 设置上传文件ID(任务来源为1时提交诊断任务需要)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFileTicketResponse extends AbstractModel
{
    /**
     * @var integer 返回值, 0:成功, 其他值请查看“返回值”定义
     */
    public $Result;

    /**
     * @var string 上传url(任务来源为2时:Post方法（100:apk,101:txt）, 任务来源为1时:put方法)
     */
    public $UploadUrl;

    /**
     * @var string 上传url鉴权信息(任务来源为1时上传需要, Authorization参数值)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadSign;

    /**
     * @var string 上传文件ID(任务来源为1时提交诊断任务需要)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FildID;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Result 返回值, 0:成功, 其他值请查看“返回值”定义
     * @param string $UploadUrl 上传url(任务来源为2时:Post方法（100:apk,101:txt）, 任务来源为1时:put方法)
     * @param string $UploadSign 上传url鉴权信息(任务来源为1时上传需要, Authorization参数值)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FildID 上传文件ID(任务来源为1时提交诊断任务需要)
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("UploadSign",$param) and $param["UploadSign"] !== null) {
            $this->UploadSign = $param["UploadSign"];
        }

        if (array_key_exists("FildID",$param) and $param["FildID"] !== null) {
            $this->FildID = $param["FildID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
