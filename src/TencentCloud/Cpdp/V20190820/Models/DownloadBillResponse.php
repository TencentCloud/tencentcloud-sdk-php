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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadBill返回参数结构体
 *
 * @method string getFileName() 获取账单文件名
 * @method void setFileName(string $FileName) 设置账单文件名
 * @method string getFileMD5() 获取账单文件的MD5值
 * @method void setFileMD5(string $FileMD5) 设置账单文件的MD5值
 * @method string getDownloadUrl() 获取账单文件的真实下载地址
 * @method void setDownloadUrl(string $DownloadUrl) 设置账单文件的真实下载地址
 * @method string getStateType() 获取账单类型
TRADE，对账单
FUND，资金账单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateType(string $StateType) 设置账单类型
TRADE，对账单
FUND，资金账单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DownloadBillResponse extends AbstractModel
{
    /**
     * @var string 账单文件名
     */
    public $FileName;

    /**
     * @var string 账单文件的MD5值
     */
    public $FileMD5;

    /**
     * @var string 账单文件的真实下载地址
     */
    public $DownloadUrl;

    /**
     * @var string 账单类型
TRADE，对账单
FUND，资金账单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FileName 账单文件名
     * @param string $FileMD5 账单文件的MD5值
     * @param string $DownloadUrl 账单文件的真实下载地址
     * @param string $StateType 账单类型
TRADE，对账单
FUND，资金账单
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("StateType",$param) and $param["StateType"] !== null) {
            $this->StateType = $param["StateType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
