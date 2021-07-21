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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 白板板书结果
 *
 * @method string getErrorCode() 获取任务执行错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置任务执行错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取任务执行错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置任务执行错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取快照生成图片总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置快照生成图片总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSnapshots() 获取快照图片链接列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshots(array $Snapshots) 设置快照图片链接列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotResult extends AbstractModel
{
    /**
     * @var string 任务执行错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 任务执行错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var integer 快照生成图片总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 快照图片链接列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Snapshots;

    /**
     * @param string $ErrorCode 任务执行错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 任务执行错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 快照生成图片总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Snapshots 快照图片链接列表
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Snapshots",$param) and $param["Snapshots"] !== null) {
            $this->Snapshots = $param["Snapshots"];
        }
    }
}
