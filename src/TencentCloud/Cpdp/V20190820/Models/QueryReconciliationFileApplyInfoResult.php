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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询对账文件申请结果
 *
 * @method string getApplyFileId() 获取申请对账文件的任务ID。
 * @method void setApplyFileId(string $ApplyFileId) 设置申请对账文件的任务ID。
 * @method string getApplyStatus() 获取对账文件申请状态。
__I__：申请中
__S__：申请成功
__F__：申请失败
 * @method void setApplyStatus(string $ApplyStatus) 设置对账文件申请状态。
__I__：申请中
__S__：申请成功
__F__：申请失败
 * @method string getApplyMessage() 获取申请结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyMessage(string $ApplyMessage) 设置申请结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileUrlArray() 获取对账文件下载地址列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUrlArray(array $FileUrlArray) 设置对账文件下载地址列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryReconciliationFileApplyInfoResult extends AbstractModel
{
    /**
     * @var string 申请对账文件的任务ID。
     */
    public $ApplyFileId;

    /**
     * @var string 对账文件申请状态。
__I__：申请中
__S__：申请成功
__F__：申请失败
     */
    public $ApplyStatus;

    /**
     * @var string 申请结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyMessage;

    /**
     * @var array 对账文件下载地址列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUrlArray;

    /**
     * @param string $ApplyFileId 申请对账文件的任务ID。
     * @param string $ApplyStatus 对账文件申请状态。
__I__：申请中
__S__：申请成功
__F__：申请失败
     * @param string $ApplyMessage 申请结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileUrlArray 对账文件下载地址列表。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ApplyFileId",$param) and $param["ApplyFileId"] !== null) {
            $this->ApplyFileId = $param["ApplyFileId"];
        }

        if (array_key_exists("ApplyStatus",$param) and $param["ApplyStatus"] !== null) {
            $this->ApplyStatus = $param["ApplyStatus"];
        }

        if (array_key_exists("ApplyMessage",$param) and $param["ApplyMessage"] !== null) {
            $this->ApplyMessage = $param["ApplyMessage"];
        }

        if (array_key_exists("FileUrlArray",$param) and $param["FileUrlArray"] !== null) {
            $this->FileUrlArray = $param["FileUrlArray"];
        }
    }
}
